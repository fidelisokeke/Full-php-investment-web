<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "dukojdkw_new";
$password = "Work2024$";
$dbname = "dukojdkw_newnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

$user_id = $_SESSION['user_id'];
$plan_id = $_POST['plan_id'];
$amount = $_POST['amount'];

// Fetch the selected plan's details
$sql = "SELECT duration, profit_percentage FROM investment_plans WHERE id = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare statement failed: " . $conn->error);
}
$stmt->bind_param("i", $plan_id);
$stmt->execute();
$stmt->bind_result($duration, $profit_percentage);
$stmt->fetch();
$stmt->close();

if (!$duration || !$profit_percentage) {
    die("Invalid plan selected.");
}

// Check user's current USD balance
$sql = "SELECT usd FROM balance WHERE user_id = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare statement failed: " . $conn->error);
}
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($current_balance);
$stmt->fetch();
$stmt->close();

if ($current_balance < $amount) {
    die("Insufficient balance.");
}

// Deduct the investment amount from user's balance
$new_balance = $current_balance - $amount;
$sql = "UPDATE balance SET usd = ? WHERE user_id = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare statement failed: " . $conn->error);
}
$stmt->bind_param("di", $new_balance, $user_id);
$stmt->execute();
$stmt->close();

// Insert into user_investments table
$start_time = date("Y-m-d H:i:s");
$end_time = date("Y-m-d H:i:s", strtotime("+$duration hours"));

$sql = "INSERT INTO user_investments (user_id, plan_id, amount, start_time, end_time, status)
        VALUES (?, ?, ?, ?, ?, 'active')";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare statement failed: " . $conn->error);
}
$stmt->bind_param("iisss", $user_id, $plan_id, $amount, $start_time, $end_time);

if ($stmt->execute()) {
    // Beautify success message
    echo '<div class="alert alert-success" role="alert">
            Investment successfully created.
            <a href="dashboard/overview.php" class="btn btn-primary">Go to Dashboard</a>
          </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
