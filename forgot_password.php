<?php 
    session_start();
    include 'includes/dbconn.php'; // Connect to the database

// Initialize variables
$email = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Generate random token
        $token = bin2hex(random_bytes(32));

        // Store token in database with expiry time (e.g., 1 hour)
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
        $query = "INSERT INTO password_resets (email, token, expiry) VALUES ('$email', '$token', '$expiry')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Send password reset email
            $to = $email;
            $subject = "Password Reset";
            $message = "Click the link below to reset your password: <br> <a href='http://domain.com/reset.php?token=$token'>Reset Password</a>";
            $headers = "From: support@domain.com\r\n";
            $headers .= "Content-type: text/html\r\n";

            if (mail($to, $subject, $message, $headers)) {
                $message = "Password reset instructions sent to your email.";
            } else {
                $message = "Failed to send password reset instructions.";
            }
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    } else {
        $message = "Email address not found.";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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

        input[type="email"] {
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
        <h2>Forgot Password</h2>
        <?php if (!empty($message)) { ?>
            <div class="message"><?php echo $message; ?></div>
        <?php } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
