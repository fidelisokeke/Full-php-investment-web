<?php
session_start();
include 'includes/dbconn.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, strtolower(trim($_POST['email'])));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));

    if (empty($email) || empty($password)) {
        echo json_encode(['message' => "You can't have an empty field", 'error' => true]);
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) < 1) {
        echo json_encode(['message' => "Invalid Email/Password", 'error' => true]);
        exit();
    }

    $row = mysqli_fetch_assoc($result);
    if (!password_verify($password, $row['password'])) {
        echo json_encode(['message' => "Invalid Email/Password", 'error' => true]);
        exit();
    }

    // Set session variables
    $_SESSION["s_username"] = $row["username"];
    $_SESSION["s_user_id"] = $row["id"];
    $_SESSION["s_email"] = $row["email"];
    $_SESSION["s_balance"] = $row["balance"];
    $_SESSION["s_country"] = $row["country"];

    echo json_encode(['message' => "SignIn Successful", 'error' => false]);
    exit();
}
?>
