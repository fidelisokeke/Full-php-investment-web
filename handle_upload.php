<?php




// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["proofImage"]) && $_FILES["proofImage"]["error"] == UPLOAD_ERR_OK) {
        // Specify the upload directory
        $uploadDirectory = 'uploads/';

        // Move the uploaded file to the specified directory
        $fileName = $_FILES["proofImage"]["name"];
        $fileTmpPath = $_FILES["proofImage"]["tmp_name"];
        $newFileName = $uploadDirectory . basename($fileName);

        if (move_uploaded_file($fileTmpPath, $newFileName)) {
            echo "File uploaded successfully!";
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Error uploading file.";
    }
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Specify the admin's email address
    $to = "support1@dukofinance.com";
    $subject = "New KYC Document Uploaded";

    // Specify the uploaded file
    $file = 'uploads/' . $_FILES["proofImage"]["name"];
    $fileName = $_FILES["proofImage"]["name"];

    // Read the file content
    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));

    // Define email headers
    $headers = "From: support@dukofinance.com\r\n";
    $headers .= "Reply-To: support1@dukofinance.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n\r\n";

    // Define email body
    $message = "--boundary\r\n";
    $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= "A new KyC proof has been uploaded.\r\n\r\n";
    $message .= "--boundary\r\n";
    $message .= "Content-Type: application/octet-stream; name=\"" . $fileName . "\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n";
    $message .= "Content-Disposition: attachment; filename=\"" . $fileName . "\"\r\n\r\n";
    $message .= $content . "\r\n\r\n";
    $message .= "--boundary--";

    // Send the email
    if(mail($to, $subject, $message, $headers)){
        echo "KYC Request sent successfully!";
    } else {
        echo "Failed to send email. Please check your email configuration.";
    }
}
?>
