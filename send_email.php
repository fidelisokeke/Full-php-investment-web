<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Specify the admin's email address
    $to = "support@.com";
    $subject = "New Payment Proof Uploaded";

    // Specify the uploaded file
    $file = 'uploads/' . $_FILES["proofImage"]["name"];
    $fileName = $_FILES["proofImage"]["name"];

    // Read the file content
    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));

    // Define email headers
    $headers = "From: support@.com\r\n";
    $headers .= "Reply-To: support1@.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n\r\n";

    // Define email body
    $message = "--boundary\r\n";
    $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= "A new payment proof has been uploaded.\r\n\r\n";
    $message .= "--boundary\r\n";
    $message .= "Content-Type: application/octet-stream; name=\"" . $fileName . "\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n";
    $message .= "Content-Disposition: attachment; filename=\"" . $fileName . "\"\r\n\r\n";
    $message .= $content . "\r\n\r\n";
    $message .= "--boundary--";

    // Send the email
    if(mail($to, $subject, $message, $headers)){
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please check your email configuration.";
    }
}
?>
