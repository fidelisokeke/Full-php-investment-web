<?php
session_start();
include 'includes/dbconn.php'; // Include database connection

// Initialize variables
$message = "";

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check token validity and expiry
    $current_time = date('Y-m-d H:i:s');
    $query = "SELECT * FROM password_resets WHERE token = '$token' AND expiry > '$current_time'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Display password reset form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = $_POST['password'];

            // Update password in database
            $query = "UPDATE users SET password = '$password' WHERE email IN (SELECT email FROM password_resets WHERE token = '$token')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                // Delete token from password_resets table after password reset
                $query = "DELETE FROM password_resets WHERE token = '$token'";
                $result = mysqli_query($conn, $query);

                $message = "Password reset successfully.";
            } else {
                $message = "Error updating password: " . mysqli_error($conn);
            }
        }
    } else {
        $message = "Invalid or expired token.";
    }
} else {
    $message = "Token not provided.";
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

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
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
        <?php if (empty($message)) { ?>
            <form method="post" action="reset_password.php">
                <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>"> <!-- Add this line -->
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Reset Password">
            </form>
        <?php } ?>
    </div>
</body>
</html>
