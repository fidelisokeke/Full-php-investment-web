<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "support1@flytradepro.com";
    $subject = "New Payment Proof Uploaded";
    
    // Get the uploaded file
    $fileTmpPath = $_FILES['proofImage']['tmp_name'];
    $fileName = $_FILES['proofImage']['name'];
    $fileSize = $_FILES['proofImage']['size'];
    $fileType = $_FILES['proofImage']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Generate a unique filename to prevent overwriting
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    
    // Directory where the uploaded file will be stored
    $uploadDirectory = 'uploads/';

    // Move the uploaded file to the specified directory
    $destPath = $uploadDirectory . $newFileName;
    move_uploaded_file($fileTmpPath, $destPath);

    // Build email message
    $message = "A new payment proof has been uploaded.\n";
    $message .= "Filename: " . $newFileName . "\n";
    // You can include additional information if needed
    
    // Additional headers
    $headers = "From: support@flytradepro.com" . "\r\n";

    // Send email with attachment
    $file = $destPath;
    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);

    $header = "From: support@flytradepro.com\r\n";
    $header .= "Reply-To: support1@flytradepro.com\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";

    $message = "--" . $uid . "\r\n";
    $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= $message . "\r\n\r\n";
    $message .= "--" . $uid . "\r\n";
    $message .= "Content-Type: application/octet-stream; name=\"" . $name . "\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n";
    $message .= "Content-Disposition: attachment; filename=\"" . $name . "\"\r\n\r\n";
    $message .= $content . "\r\n\r\n";
    $message .= "--" . $uid . "--";

    // Send email
    if(mail($to, $subject, $message, $header)){
        echo "Payment proof uploaded successfully!";
    } else {
        echo "Failed to upload payment proof. Please try again later.";
    }
}
?>
