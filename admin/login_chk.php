<?php

 include '../includes/dbconn.php'; // Connect to the database
 session_start();


  if (isset($_POST['login'])){


    $username = $_POST['username'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM admin_tb WHERE username = '$username'";
    $select_user = mysqli_query($conn, $query);
     if(!$select_user){
       die('error'. mysqli_error($conn));
       
     }
     
     while ($row = mysqli_fetch_array($select_user)){
        $db_username =$row['username'];
        $db_password =$row['password'];
       
     }
     if ($username === $db_username && $password === $db_password){

        $_SESSION['username'] = $db_username;
        

            header("Location: admin.php");

     }else if($email !== $db_email && $password !== $db_password){

       header("Location: index.php");
      
     }else {
  
        header("Location: index.php");
        
    }
  }
      
  function upDateUser(){
      
  }



 ?>