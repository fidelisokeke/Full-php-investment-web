<?php
session_start();
require 'includes/dbconn.php'; // Include your database connection file

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$sender_id = $_SESSION['user_id'];
$recipient_username = mysqli_real_escape_string($conn, $_POST['recipient']);
$amount = floatval($_POST['transferAmount']);

try {
    // Check if recipient exists
    $sql = "SELECT id, email FROM users WHERE username = '$recipient_username'";
    $result = $conn->query($sql);

    if ($result->num_rows !== 1) {
        throw new Exception("Recipient not found.");
    }
    $row = $result->fetch_assoc();
    $receiver_id = $row['id'];
    $receiver_email = $row['email'];

    // Check sender's balance
    $sql = "SELECT b.usd, u.email FROM balance b JOIN users u ON b.user_id = u.id WHERE b.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $sender_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows !== 1) {
        throw new Exception("Sender balance not found.");
    }
    $row = $result->fetch_assoc();
    $sender_balance = $row['usd'];
    $sender_email = $row['email'];

    if ($sender_balance < $amount) {
        throw new Exception("Insufficient balance.");
    }

    // Deduct from sender's balance
    $sql = "UPDATE balance SET usd = usd - ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("di", $amount, $sender_id);
    if (!$stmt->execute()) {
        throw new Exception("Error deducting amount from sender's balance: " . $stmt->error);
    }
    $stmt->close();

    // Add to recipient's balance
    $sql = "UPDATE balance SET usd = usd + ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("di", $amount, $receiver_id);
    if (!$stmt->execute()) {
        throw new Exception("Error adding amount to recipient's balance: " . $stmt->error);
    }
    $stmt->close();

    // Record transaction
    $sql = "INSERT INTO transactions (sender_id, receiver_id, amount) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iid", $sender_id, $receiver_id, $amount);
    if (!$stmt->execute()) {
        throw new Exception("Error recording transaction: " . $stmt->error);
    }
    $stmt->close();

    // Send email to sender
    $subject_sender = "Transfer Processed Successfully";
    $message_sender = "Hello,\n\nYour transfer of $" . number_format($amount, 2) . " to " . htmlspecialchars($recipient_username) . " has been processed successfully.\n\nThank you for using our service.\n\nBest regards,\nFlyTrade Pro";
    $headers_sender = "From: no-reply@flytradepro.com\r\n";

    if (!mail($sender_email, $subject_sender, $message_sender, $headers_sender)) {
        throw new Exception("Failed to send email to sender.");
    }

    // Send email to receiver
    $subject_receiver = "Credit Alert";
    $message_receiver = "Hello " . htmlspecialchars($recipient_username) . ",\n\nYou have received $" . number_format($amount, 2) . " from " . htmlspecialchars($_SESSION['s_username']) . ".\n\nBest regards,\nFlyTrade Pro";
    $headers_receiver = "From: no-reply@flytradepro.com\r\n";

    if (!mail($receiver_email, $subject_receiver, $message_receiver, $headers_receiver)) {
        throw new Exception("Failed to send email to receiver.");
    }

    // Success message
    echo '<div style="max-width: 500px; margin: 50px auto; padding: 20px; border: 1px solid #007bff; border-radius: 10px; background-color: #e9f7fe; color: #007bff; text-align: center;">';
    echo '<h2>Transfer Successful!</h2>';
    echo '<p>You have successfully transferred $' . number_format($amount, 2) . ' to ' . htmlspecialchars($recipient_username) . '.</p>';
    echo '<a href="dashboard/overview.php" style="display: inline-block; margin-top: 10px; padding: 10px 20px; border: 1px solid #007bff; border-radius: 5px; text-decoration: none; color: #ffffff; background-color: #007bff;">Back to Dashboard</a>';
    echo '</div>';

} catch (Exception $e) {
    // Error message
    echo '<div style="max-width: 500px; margin: 50px auto; padding: 20px; border: 1px solid #dc3545; border-radius: 10px; background-color: #f8d7da; color: #dc3545; text-align: center;">';
    echo '<h2>Error</h2>';
    echo '<p>' . $e->getMessage() . '</p>';
    echo '<a href="dashboard/overview.php" style="display: inline-block; margin-top: 10px; padding: 10px 20px; border: 1px solid #dc3545; border-radius: 5px; text-decoration: none; color: #ffffff; background-color: #dc3545;">Back to Dashboard</a>';
    echo '</div>';
}

$conn->close();
?>
