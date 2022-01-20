<?php 
 session_start();

 $_SESSION['username'] = null;
 $_SESSION['email'] = null;
 $_SESSION['account_type'] = null;
 $_SESSION['currency'] = null;
 $_SESSION['balance'] = null;
 $_SESSION['country'] = null;
 $_SESSION['reg_date'] = null;

 header('Location: index.php');

?>