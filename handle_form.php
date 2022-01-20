<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "support1@dukofinance.com";
    $subject = "New Bank Withdrawal Submission";
    
    // Get form data
    $email = $_POST['email'];
    $bank = $_POST['bank'];
    $rout = $_POST['rout'];

    // Build email message
    $message = "Email: " . $email . "\n";
    $message .= "Bank: " . $bank . "\n";
    $message .= "Routing Number: " . $rout . "\n";
    // Add other form fields as needed
    
    // Additional headers
    $headers = "From: support@dukofinance.com" . "\r\n";

    // Send email
    if(mail($to, $subject, $message, $headers)){
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Sent</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #3498db; /* Blue */
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                text-align: center;
            }

            .dashboard-button {
                background-color: #ffffff; /* White */
                border: none;
                color: #3498db; /* Blue */
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-top: 20px;
                cursor: pointer;
                border-radius: 10px;
            }

            .dashboard-button:hover {
                background-color: #f2f2f2; /* Light Grey */
            }
        </style>
        </head>
        <body>
            <div class="container">
                <h2>Withdrawal Request sent successfully, an Approval Mail will be sent to you upon review!</h2>
                <a href="dashboard/overview.php"><button class="dashboard-button">Back to Dashboard</button></a>
            </div>
        </body>
        </html>';
        exit; // Terminate the script to prevent further execution
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
