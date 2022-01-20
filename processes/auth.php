<?php
session_start();
include '../includes/dbconn.php'; // Connect to the database
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
*  generate_string() function for generating random values
*/
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
*  //check if request was made with the right data TOKEN VERIFICATION REQUEST
*/
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['token'])){
    $token = mysqli_real_escape_string($conn,test_input($_POST['token']));
    echo json_encode(handleTokenVerify($conn, $token));
}

function handleTokenVerify($conn, $token){
    // response array object containing message and error indicator
    $response = array('message' => '', 'error' => false);

    $sql = "SELECT * FROM tokens WHERE token = '$token'";
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);

    if($result_check < 1){
        $response['message'] = "Invalid Token";
        $response['error'] = true;
        return $response;
    }else{
        if($row = mysqli_fetch_assoc($result)){
            $user_id = $row["user_id"];   
            // update user record
            $sql = "UPDATE users SET isVerified = true WHERE id = '$user_id'";
            if(mysqli_query($conn, $sql)){
                $response['message'] = "Email address verified successfully";
                $response['error'] = false;
                return $response;
            }
        }
    }
}

/**
*  //check if request was made with the right data SIGNUP REQUEST
*/
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])){
    $username = mysqli_real_escape_string($conn,test_input(strtolower($_POST['username'])));
    $email = mysqli_real_escape_string($conn,test_input(strtolower($_POST['email'])));
    $password = mysqli_real_escape_string($conn,test_input($_POST['password']));
    $passwordConfirm = mysqli_real_escape_string($conn,test_input($_POST['passwordConfirm']));
    $country = mysqli_real_escape_string($conn,test_input($_POST['country']));
    $referee = $_POST['referee'];

    echo json_encode(handleSignup($conn, $username, $email, $password, $passwordConfirm, $country, $referee));
}

function handleSignup($conn, $username, $email, $password, $passwordConfirm, $country, $referee){
    // response array object containing message and error indicator
    $response = array('message' => '', 'error' => false);

    date_default_timezone_set('Europe/London');
    $current_date = date('Y-m-d h:i:s a');

    // check if referee is valid
    $query = "SELECT * FROM users WHERE username = '$referee'";
    $select_user = mysqli_query($conn, $query);
    if(!$select_user){
        $response['message'] = 'Query failed: ' . mysqli_error($conn);
        $response['error'] = true;
        return $response;
    }
    $result_check = mysqli_num_rows($select_user);
    if($result_check > 0){
        while ($row = mysqli_fetch_array($select_user)){
            $referee_user_id = $row['id'];
         }
         // increase referee referral count
        $query = "UPDATE users SET referral_count = referral_count + 1 WHERE id = '$referee_user_id'";
        $update = mysqli_query($conn, $query);
    }else{
        $referee_user_id = 0;
    }

    // make sure input values are not empty
    if($username == '' || $email == '' || 
        $password == '' || $passwordConfirm == '' || $country == ''){

        $response['message'] = "You can't have an empty field";
        $response['error'] = true;
        return $response;
    }

    // make sure password is same as password confirm
    if($password != $passwordConfirm){
        $response['message'] = "Passwords do not match";
        $response['error'] = true;
        return $response;
    }

    //validate email address
    if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $response['message'] = 'Invalid Email Address';
        $response['error'] = true;
        return $response;
    }

    //make sure email does not exist already
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        $response['message'] = 'Query failed: ' . mysqli_error($conn);
        $response['error'] = true;
        return $response;
    }
    $result_check = mysqli_num_rows($result);
    if($result_check > 0){
        $response['message'] = 'Email address already exists';
        $response['error'] = true;
        return $response;
    }

    //make sure username does not exist already
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        $response['message'] = 'Query failed: ' . mysqli_error($conn);
        $response['error'] = true;
        return $response;
    }
    $result_check = mysqli_num_rows($result);
    if($result_check > 0){
        $response['message'] = 'Username already exists';
        $response['error'] = true;
        return $response;
    }

    // hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // store user information
    $sql = "INSERT INTO users (username, email, password, joined_date, country, referred_id) 
            VALUES ('$username', '$email', '$hashed_password', '$current_date', '$country', '$referee_user_id')";
    if(mysqli_query($conn, $sql)){
        // get user_id from last inserted data.
        $user_id = $conn->insert_id;
        // create a verification token for the user
        $permitted_char_for_ = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Characters for generating random values 
        $token = generate_string($permitted_char_for_, 24); // Generate random characters for the token
        // store token information
        $sql = "INSERT INTO tokens (token, user_id) 
            VALUES ('$token', '$user_id')";
        if(!mysqli_query($conn, $sql)){
            $response['message'] = 'Query failed: ' . mysqli_error($conn);
            $response['error'] = true;
            return $response;
        }

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Support@.com' . "\r\n";

        // the welcome Email
        $msg = '
            <!DOCTYPE html>
            <html lang="en">
               <head>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="shortcut icon" href="https://.com/img/logo.png">
                  <meta name="description" content="">
                  <meta name="keywords" content="">
                  <meta charset="UTF-8">
                  <title></title>
               </head>
               <style rel="stylesheet" type="text/css">
                  body{
                  background-color: #fff;
                  }
                  *{
                  font-family: calibri !important;
                  }
                  a{
                  font-weight: 300;
                  }
               </style>
               <!--body-->
               <body style="font-family: calibri; padding: 10px 10px;" >
                  <div>
                     <div>
                        <div style="    margin-bottom: 00px;">
                           <div style="color:#222B40;text-shadow: 0 0 8px white;padding: 20px;padding-top: 10px!important;text-align: center!important;">
                              <h1 style="margin:0; font-weight:bold; font-size: 25px;">Welcome!</h1>
                           </div>
                        </div>
                        <img src="https://.com/img/logo.png" style="width: 65px;display: block; margin: auto; margin-bottom:0px!important" >
                     </div>
                     <div >
                        <div style="width:90%; margin: auto;">
                           <div style="height:1px; width: 200px; background-color: #BABABA; margin:auto;margin-top:07px; margin-bottom:10px"> </div>
                           <p style="font-size: 13px;color: #222B40;text-align: center;line-height: 19px">
                              Thank you for registering on our platform. You\'re almost ready to start.
                           </p>
                           <p style="font-size: 13px;color: #222B40;text-align: center;line-height: 19px">
                              Simply click the button below to confirm your email address and activate/get started.
                           </p>
                           
                           
                           <a href="https://.com/sign-in.php?token='.$token.'" style=" font-size: 20px; background: lightblue; display: block; width:150px; margin: auto; text-align: center; padding:15px 28px; color: #fff; border-radius:5px; font-weight: bold; text-decoration:none; position: relative; margin-top:20px;  margin-bottom: 20px">Confirm Email Address</a>
                            <div style="display:flex;">
                              <div style="color: #222B40;
                                 margin-top: 30px;
                                 font-size: 12px; font-weight:300">
                                 Best Regards
                                 <div style="font-weight: bold"> Finance</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="star star1">
                     </span>
                     <span class="star star2">
                     </span>
                     <span class="star star3">
                     </span>
                     <span class="star star4">
                     </span>
                     
                     <div style="text-align: center; font-size: 12px; color:#222B40; margin-top: 25px">
                        ©Fly Trade 2022<br> 
                     </div>
                  </div>
               </body>';

        // send email
        mail($email,"Welcome!",$msg,$headers);

        // insert default values for users
        $sql = "INSERT INTO balance (user_id, usd, btc, eth, xrp)
                VALUES ('$user_id', '0.0', '0.0', '0.0', '0.0');";
        $sql .= "INSERT INTO deposit (user_id, usd, btc, eth, xrp, active)
                VALUES ('$user_id', '0.0', '0.0', '0.0', '0.0', '1');";
        $sql .= "INSERT INTO deposit (user_id, usd, btc, eth, xrp, earned)
                VALUES ('$user_id', '0.0', '0.0', '0.0', '0.0', '1');";
        $sql .= "INSERT INTO partners (user_id, active, inactive)
                VALUES ('$user_id', '0', '0');";
        $sql .= "INSERT INTO payouts (user_id, usd, btc, eth, xrp)
                VALUES ('$user_id', '0.0', '0.0', '0.0', '0.0');";
        $sql .= "INSERT INTO referral_earning (user_id, usd, btc, eth, xrp)
                VALUES ('$user_id', '0.0', '0.0', '0.0', '0.0')";

        if(!mysqli_multi_query($conn, $sql)){
            $response['message'] = 'Multi-query failed: ' . mysqli_error($conn);
            $response['error'] = true;
            return $response;
        }

        $response['message'] = 'Account created successfully';
        $response['error'] = false;
        return $response;
    } else {
        $response['message'] = 'Query failed: ' . mysqli_error($conn);
        $response['error'] = true;
        return $response;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])) {
    $email = mysqli_real_escape_string($conn, test_input(strtolower($_POST['email'])));
    $password = mysqli_real_escape_string($conn, test_input($_POST['password']));

    $signin_response = handleSignin($conn, $email, $password);
    echo json_encode($signin_response);
}

function handleSignin($conn, $email, $password) {
    $response = array('message' => '', 'error' => false);

    if ($email == '' || $password == '') {
        $response['message'] = "You can't have an empty field";
        $response['error'] = true;
        return $response;
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['message'] = 'Query failed: ' . mysqli_error($conn);
        $response['error'] = true;
        return $response;
    }
    $result_check = mysqli_num_rows($result);
    if ($result_check < 1) {
        $response['message'] = "Invalid Email/Password";
        $response['error'] = true;
        return $response;
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            $hashed_password_check = password_verify($password, $row["password"]);
            if ($hashed_password_check == false) {
                $response['message'] = "Invalid Email/Password";
                $response['error'] = true;
                return $response;
            } elseif ($hashed_password_check == true) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["balance"] = $row["balance"];
                $_SESSION["country"] = $row["country"];

                $response['message'] = "SignIn Successful";
                $response['error'] = false;
                return $response;
            }
        }
    }
}

ob_end_flush();
