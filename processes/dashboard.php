<?php 
    session_start();
    include '../includes/dbconn.php'; // Connect to the database
    if (!isset($_SESSION['user_id'])) {
    header("Location: ../sign-in.php"); // Redirect to login page if not logged in
    exit();
}
    
    
    function test_input($data) {
        $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
    
    // if user not authenticated, block access and redirect
    if(!(isset($_SESSION["s_user_id"]))){
		header("location: ../sign-in.php");
        die("Access denied");
    }
    
    $user_id = $_SESSION["s_user_id"];
    
    // get the updated diff currency balance values
    $sql = "SELECT * FROM balance WHERE user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$balance_usd = $row["usd"];
	    	$balance_btc = $row["btc"];
	    	$balance_eth = $row["eth"];
	    	$balance_xrp = $row["xrp"];
		}
	}
	
	// get the updated account balance values
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$month_profit = $row["month_profit"];
	    	$year_profit = $row["year_profit"];
	    	$balance = $row["balance"];
		}
	}
	
	// get the updated account partner values
    $sql = "SELECT * FROM partners WHERE id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$active_partners = $row["active"];
	    	$inactive_partners = $row["inactive"];
		}
	}
	
	// get the updated payout values
    $sql = "SELECT * FROM payouts WHERE user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$payouts_usd = $row["usd"];
	    	$payouts_btc = $row["btc"];
	    	$payouts_eth = $row["eth"];
	    	$payouts_xrp = $row["xrp"];
		}
	}
	
	// get the updated referral earning values
    $sql = "SELECT * FROM referral_earning WHERE user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$referral_earning_usd = $row["usd"];
	    	$referral_earning_btc = $row["btc"];
	    	$referral_earning_eth = $row["eth"];
	    	$referral_earning_xrp = $row["xrp"];
		}
	}
	
	// get the updated active deposits
    $sql = "SELECT * FROM deposit WHERE user_id = '$user_id' AND active = 1";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$active_deposit_usd = $row["usd"];
	    	$active_deposit_btc = $row["btc"];
	    	$active_deposit_eth = $row["eth"];
	    	$active_deposit_xrp = $row["xrp"];
		}
	}
	
	// get the updated earned deposits
    $sql = "SELECT * FROM deposit WHERE user_id = '$user_id' AND earned = 1";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$earned_deposit_usd = $row["usd"];
	    	$earned_deposit_btc = $row["btc"];
	    	$earned_deposit_eth = $row["eth"];
	    	$earned_deposit_xrp = $row["xrp"];
		}
	}
    
    /**
    *  //check if request was made with planUpdate
    */
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatePlan'])){
        $userId = mysqli_real_escape_string($conn,test_input($_POST['userId']));
        $plan = mysqli_real_escape_string($conn,test_input($_POST['plan']));
		
        echo json_encode(handleUpdatePlan($conn, $userId, $plan));
    }
    
    function handleUpdatePlan($conn, $userId, $plan){
        // response array object containing message and error indicator
        $response = array('message' => '', 'error' => false);
        
        $query = "UPDATE users SET plan = '$plan' WHERE id = '$userId'";
        $update = mysqli_query($conn, $query);
        if (!$update) {
            $response['message'] = "FATAL ERROR:" . mysqli_error($conn);
		    $response['error'] = true;
		    return $response;
            die("FATAL ERROR" . mysqli_error($conn));
        } else {
            $response['message'] = "Record Updated!!!";
		    $response['error'] = false;
		    return $response;
        }
        
    }
    
    /**
    *  //check if request was made with walletAddress
    */
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['walletAddress'])){
        $userId = mysqli_real_escape_string($conn,test_input($_POST['userId']));
        $walletType = mysqli_real_escape_string($conn,test_input($_POST['walletType']));
        $walletAddress = mysqli_real_escape_string($conn,test_input($_POST['walletAddress']));
        $withdrawAmount = mysqli_real_escape_string($conn,test_input($_POST['withdrawAmount']));
		
        echo json_encode(handleWalletUpdate($conn, $userId, $walletType, $walletAddress, $withdrawAmount));
    }
    
    function handleWalletUpdate($conn, $userId, $walletType, $walletAddress, $withdrawAmount){
        // response array object containing message and error indicator
        $response = array('message' => '', 'error' => false);
        
        $query = "UPDATE users SET walletAddress = '$walletAddress', walletType = '$walletType' WHERE id = '$userId'";
        $update = mysqli_query($conn, $query);
        if (!$update) {
            $response['message'] = "FATAL ERROR:" . mysqli_error($conn);
		    $response['error'] = true;
		    return $response;
            die("FATAL ERROR" . mysqli_error($conn));
        } else {
            $response['message'] = "Record Updated!!!";
		    $response['error'] = false;
		    
		    // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: support@domain.com' . "\r\n";
            
            // the welcome Email
            $msg = '
                <!DOCTYPE html>
                <html lang="en">
                   <head>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <link rel="shortcut icon" href="https://comain.com/img/logo.png">
                      <meta name="description" content="">
                      <meta name="keywords" content="">
                      <meta charset="UTF-8">
                      <title> Finance</title>
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
                                  <h1 style="margin:0; font-weight:bold; font-size: 25px;">Withdrawal Request!</h1>
                               </div>
                            </div>
                            <img src="https://flytradepro.com/img/logo.png" style="width: 65px;display: block; margin: auto; margin-bottom:0px!important" >
                         </div>
                         <div >
                            <div style="width:90%; margin: auto;">
                               <div style="height:1px; width: 200px; background-color: #BABABA; margin:auto;margin-top:07px; margin-bottom:10px"> </div>
                               <p style="font-size: 13px;color: #222B40;text-align: center;line-height: 19px">
                                  The user with username: <b>'.$_SESSION["s_username"].'</b> and email address: <b>'.$_SESSION["s_email"].' </b> 
                                  has requested to withdraw the amount: $<b>'.$withdrawAmount.' </b> to the wallet address: <b>'.$walletAddress.' </b> on
                                  <b>'.$walletType.' </b> network
                               </p>
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
                             2024<br> 
                         </div>
                      </div>
                   </body>';
             
             
             // send email
            mail('support@.com',"New Withdrawal Request",$msg,$headers);
            $userEmail = $_SESSION["s_email"];
            // store withdrawal information 	 	 	 
            $sql = "INSERT INTO withdrawals (userId, userEmail, withdrawAmount, walletAddress, walletType) 
    				VALUES ('$userId', '$userEmail', '$withdrawAmount', '$walletAddress', '$walletType')";
    		mysqli_query($conn, $sql);
		    
		    return $response;
        }
        
    }
    
    ob_end_flush();