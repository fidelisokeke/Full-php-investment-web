<?php
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

// Fetch active investments that have ended
$sql = "SELECT ui.id, ui.user_id, ui.amount, ip.profit_percentage FROM user_investments ui
        JOIN investment_plans ip ON ui.plan_id = ip.id
        WHERE ui.end_time <= NOW() AND ui.status = 'active'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $investment_id = $row['id'];
        $user_id = $row['user_id'];
        $amount = $row['amount'];
        $profit_percentage = $row['profit_percentage'];

        // Calculate profit
        $profit = $amount * ($profit_percentage / 100);

        // Update user's balance
        $sql = "UPDATE balance SET usd = usd + ? WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("di", $profit, $user_id);
        $stmt->execute();
        $stmt->close();

        // Update investment status to 'completed'
        $sql = "UPDATE user_investments SET status = 'completed' WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $investment_id);
        $stmt->execute();
        $stmt->close();
    }
}

$conn->close();
?>
