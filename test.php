<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Test script started<br>";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['test'])) {
    echo "Form submitted<br>";
    $_SESSION['test'] = 'test_value';
    print_r($_SESSION);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <form method="POST" action="">
        <input type="hidden" name="test" value="1">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
