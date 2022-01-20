<?php
// Check if a file was uploaded
if ($_FILES['certificate']) {
    // Get the uploaded file details
    $certificate = $_FILES['certificate'];

    // Configure email content
    $to = 'support1@flytradepro.com';
    $subject = 'New Certificate Submission';
    $message = 'A new certificate has been submitted.';
    $headers = 'From: support@flytradepro.com';

    // Send email with certificate attachment
    if (mail($to, $subject, $message, $headers, $certificate)) {
        echo 'Certificate uploaded and email sent successfully';
    } else {
        echo 'Failed to send email';
    }
} else {
    echo 'No certificate uploaded';
}
?>
