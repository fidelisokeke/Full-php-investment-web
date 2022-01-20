<?php
session_start();

$servername = "localhost";
$username = "dukojdkw_new";
$password = "Work2024$";
$dbname = "dukojdkw_newnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die(json_encode(['error' => "Connection failed."]));
}

if (!isset($_SESSION['user_id'])) {
    error_log("User not logged in.");
    die(json_encode(['error' => "User not logged in."]));
}

$user_id = $_SESSION['user_id'];

// Fetch user's active investments
$sql = "SELECT ui.id, ui.plan_id, ui.amount, ui.start_time, ui.end_time, ip.profit_percentage 
        FROM user_investments ui
        JOIN investment_plans ip ON ui.plan_id = ip.id
        WHERE ui.user_id = ? AND ui.status = 'active'";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    error_log("Prepare statement failed: " . $conn->error);
    die(json_encode(['error' => "Prepare statement failed."]));
}

$stmt->bind_param("i", $user_id);
if (!$stmt->execute()) {
    error_log("Execute failed: " . $stmt->error);
    die(json_encode(['error' => "Execute failed."]));
}

$stmt->bind_result($id, $plan_id, $amount, $start_time, $end_time, $profit_percentage);

$investments = [];
while ($stmt->fetch()) {
    $investments[] = [
        'id' => $id,
        'plan_id' => $plan_id,
        'amount' => $amount,
        'start_time' => $start_time,
        'end_time' => $end_time,
        'profit_percentage' => $profit_percentage,
    ];
}

$stmt->close();
$conn->close();

echo json_encode(['investments' => $investments]);
?>
