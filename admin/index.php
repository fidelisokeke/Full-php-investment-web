<?php

 session_start();


//   if (isset($_POST['login'])){


//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $email = mysqli_real_escape_string($conn, $email);
//     $password = mysqli_real_escape_string($conn, $password);

//     $query = "SELECT * FROM users WHERE email = '{$email}'";
//     $select_user = mysqli_query($conn, $query);
//      if(!$select_user){
//        die('error'. mysqli_error($conn));
       
//      }while ($row = mysqli_fetch_array($select_user)){
//       $db_id = $row['user_id'];
//       $db_username = $row['username'];
//       $db_email = $row['email'];
//       $db_password = $row['password'];
//       $db_balance = $row['currency'];
//       $db_balance = $row['balance'];
//       $db_account_type = $row['account_type']; 

//     }if ($email !== $db_email && $password !== $db_password){
        
//         header("Location: login.php");

//       }else if ($email === $db_email && $password === $db_password){
      
        
//         header("Location: profile.php");

//       }

//   } else {
//     header("Location: login.php");
//     echo "Incorrect Username/Password";

//   }



 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
        * @Package: Ceramax - Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Duko Admin </title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper bg-primary">
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">    
                <div class="login-form-header">
                     <img src="data/icons/padlock.png" alt="login-icon" style="max-width:64px">
                     <div class="login-header">
                         <h4 class="bold color-white">Login Now!</h4>
                         <h4><small>Please enter your credentials to login.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">

                        <form method="post" id="msg_validate" action="login_chk.php" novalidate="novalidate" class="no-mb no-mt">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="form-group">
                                        <label class="form-label">username</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="password" placeholder="password">
                                        </div>
                                    </div>

                                    <div class="pull-left">
                                        <button name="login" class="btn btn-primary mt-10 btn-corner right-15">Log in</button>
                                        <a href="register.php" class="btn mt-10 btn-corner signup">Sign up</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p id="nav">
                    <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</>
                    <a class="pull-right" href="register.php" title="Sign Up">Sign Up</a>
                </p>

            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="../assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>