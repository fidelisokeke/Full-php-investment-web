<?php
session_start();
include 'includes/dbconn.php'; // Include database connection

// Check if token value is received
var_dump($_POST['token']);

// Initialize variables
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['token']) && isset($_POST['password'])) {
        $token = $_POST['token'];
        $password = $_POST['password'];

        // Hash the new password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Update hashed password in database
        $query = "UPDATE users SET password = '$hashed_password' WHERE email IN (SELECT email FROM password_resets WHERE token = '$token')";
        $result = mysqli_query($conn, $query);
        

        if ($result) {
            // Delete token from password_resets table after password reset
            $delete_query = "DELETE FROM password_resets WHERE token = '$token'";
            $delete_result = mysqli_query($conn, $delete_query);

            if ($delete_result) {
                $message = "Password reset successfully.";
            } else {
                $message = "Error deleting token: " . mysqli_error($conn);
            }
        } else {
            $message = "Error updating password: " . mysqli_error($conn);
        }
    } else {
        $message = "Token or password not provided.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            text-align: center;
        }

        .message {
            text-align: center;
            color: #007bff;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <?php if (!empty($message)) { ?>
            <div class="message"><?php echo $message; ?></div>
        <?php } ?>
    </div>
</body>
</html>
