<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Finance</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    
  
</head>

<body>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

 <!--============= Sign In Section Starts Here =============-->
    <div class="account-section bg_img" data-background="assets/images/account-bg.jpg">
        <div class="container">
            <div class="account-title text-center">
                <a href="index.html" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span class="d-none d-sm-inline-block">To Duko Finance</span></span></a>
                <a href="#0" class="logo">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <div id="tokenVerificationElement">
                <div class="d-flex justify-content-center">
                  <div id="tokenVerificationSpinner" class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </div>
            </div>
            <div id="formWrapper" class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To  Finance</h4>
                    <form class="account-form" id="signInForm">
                        <div class="form-group">
                            <label for="sign-up">Your Email </label>
                            <input type="text" placeholder="Enter Your Email " id="sign-up" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" placeholder="Enter Your Password" id="pass" name="password">
                            <span class="sign-in-recovery">Forgot your password? <a href="forgot_password.php">recover password</a></span>
                        </div>
                        <div id="alertDiv" class="alert alert-danger text-center" role="alert" style="display: none;"></div>
                        <div class="d-flex justify-content-center">
                          <div id="waitSpinner" class="spinner-border" role="status" style="display: none;">
                            <span class="sr-only">Loading...</span>
                          </div>
                        </div>
                        <center><div class="g-recaptcha" data-sitekey="6Ld_acAgAAAAABrvEDNh9v7yKxX638BpFSCxbopv"></div></center> <!--Google recaptcha-->
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Sign In</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mb-30 mt-2">Sign up with your work email</span>
                    <a href="#0" class="sign-in-with"><img src="assets/images/icon/google.png" alt="icon"><span>Sign Up with Google</span></a>
                    <span class="d-block mt-15">Don't have an account? <a href="sign-up.php">Sign Up Here</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->

    <!--Google recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/js/signin.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/paroller.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#signInForm').on('submit', function(e) {
                e.preventDefault();
                var email = $('#sign-up').val();
                var password = $('#pass').val();

                $.ajax({
                    url: 'process_signin.php',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $('#waitSpinner').show();
                    },
                    success: function(response) {
                        $('#waitSpinner').hide();
                        if (response.error) {
                            $('#alertDiv').text(response.message).show();
                        } else {
                            window.location.href = 'dashboard/overview.php'; // Redirect to dashboard on successful login
                        }
                    },
                    error: function() {
                        $('#waitSpinner').hide();
                        $('#alertDiv').text('An error occurred. Please try again.').show();
                    }
                });
            });
        });
    </script>
     <script src="//code.tidio.co/50gwdhfdnpxbylzcixlnlnvxisbnyxia.js"async></script>


</body>

</html>