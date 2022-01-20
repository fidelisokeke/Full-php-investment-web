<?php
session_start();
    include '../includes/dbconn.php'; // Connect to the database
// Assuming you have already established a database connection

// Assuming $user_id is already defined
$user_id = $_POST['user_id'];

// Assuming you have sanitized the user input to prevent SQL injection
// Fetch the wallet address from the database
$query = "SELECT wallet_address FROM your_table_name WHERE user_id = $user_id";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $wallet_address = $row['wallet_address'];
    echo $wallet_address; // Output the wallet address
} else {
    echo "Error fetching wallet address";
}
?>
