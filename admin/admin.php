<?php 

include '../includes/dbconn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
        
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />
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
    <link href="assets/fonts/webfont/cryptocoins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen"/>

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE CSS TEMPLATE - START -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar'>
        <div class='logo-area'>

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="data/profile/profile.jpg" alt="user-image" class="img-circle img-inline">
                            <span><?php echo $_SESSION['username']; ?><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                
                            </li>
                            <li>
                                <a href="admin.php">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li>
                               
                            </li>
                            <li class="last">
                                <a href="https://flytradepro.com">
                                    <i class="fa fa-lock"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                  
                    
                    <li class="open">
                        <a class="active" href="admin.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Admin</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="admin.php?source=add_user">
                            <i class="fa fa-user"></i>
                            <span class="title">Add User</span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="admin.php?source=withdrawals">
                            <i class="fa fa-money"></i>
                            <span class="title">Withdrawal Table</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="admin.php?source=edit_investment">
                            <i class="fa fa-user"></i>
                            <span class="title">Edit Investment</span>
                        </a>
                    </li>
                    
                    


            </div>
            <!-- MAIN MENU - END -->



        </div>
        <!--  SIDEBAR - END -->


        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">ADMIN</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="admin.php"><i class="fa fa-home"></i>Home</a>
                                </li>
                                
                                <li class="active">
                                    <strong> Admin Dashboard</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                 <div class="col-lg-12">
                    <section class="box nobox marginBottom0">
                        <div class="content-body">
                            <div class="row">
                               
                                <div class="col-lg-12">
                                    <div class="r4_counter db_box">
                                        <div class="icon-after fa fa-user"></div>
                                        <i class='pull-left fa fa-user icon-md icon-primary mt-10'></i>
                                        <div class="stats">
                                            <?php 
                                             $query = "SELECT * FROM users";
                                              $select_user = mysqli_query($conn, $query);
                                              $display_users = mysqli_num_rows($select_user);
                                            ?>
                                            <h3 class="mb-5"><?php echo $display_users;  ?></h3>
                                            <span>Total Users Registered </span>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <!-- End .row -->
                        </div>
                    </section>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                   
                            
                      <?php 
                      if (isset($_GET['source'])) {
                          $source = $_GET['source']; 
                      }else {
                        $source ="";
                            }
                    
                      switch ($source){
                          case 'add_user';
                          include 'add_user.php';
                          break;

                          case 'edit_user';
                          include 'edit_user.php';
                          break;

                          case 'edit_investment';
                          include 'edit_investment.php';
                          break;
                          
                          case 'withdrawals';
                          include 'withdrawals.php';
                          break;

                          default:
                          include 'user.php';
                          break;
                          
                      }
                   
                      
                      
                      
                      
                       
                      ?>


                    
                </div>

               
                
                

                


                <div class="clearfix"></div>


                <div class="col-xs-12">
                    <section class="box has-border-left-3">
                        <header class="panel_header">
                            <h2 class="title pull-left">New Registered Users Statistics</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="wid-vectormap">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9">
                                                <figure>
                                                    <div id="db-world-map-markers" style="width: 100%; height: 300px"></div>
                                                </figure>
                                            </div>
                                            <div class="map_progress col-xs-12 col-sm-3">
                                                <h4>Unique Visitors</h4>
                                                <span class='text-muted'><small>Last Week Rise by 62%</small></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                                </div>
                                                <br>
                                                <h4>Registrations</h4>
                                                <span class='text-muted'><small>Up by 57% last 7 days</small></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div>
                                                </div>
                                                <br>
                                                <h4>Direct Sales</h4>
                                                <span class='text-muted'><small>Last Month Rise by 22%</small></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .row -->

                        </div>
                    </section>
                </div>


                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
        <!-- END CONTENT -->
        <div class="page-chatapi hideit">

            <div class="search-bar">
                <input type="text" placeholder="Search" class="form-control">
            </div>

            <div class="chat-wrapper">
                <h4 class="group-head">Groups</h4>
                <ul class="group-list list-unstyled">
                    <li class="group-row">
                        <div class="group-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                        <div class="group-info">
                            <h4><a href="#">Work</a></h4>
                        </div>
                    </li>
                    <li class="group-row">
                        <div class="group-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                        <div class="group-info">
                            <h4><a href="#">Friends</a></h4>
                        </div>
                    </li>

                </ul>


                <h4 class="group-head">Favourites</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_1' data-user-id='1'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Clarine Vassar</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_2' data-user-id='2'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Brooks Latshaw</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_3' data-user-id='3'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Clementina Brodeur</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>


                <h4 class="group-head">More Contacts</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_4' data-user-id='4'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Carri Busey</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_5' data-user-id='5'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Melissa Dock</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_6' data-user-id='6'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Verdell Rea</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_7' data-user-id='7'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Linette Lheureux</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_8' data-user-id='8'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Araceli Boatright</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_9' data-user-id='9'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Clay Peskin</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_10' data-user-id='10'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Loni Tindall</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_11' data-user-id='11'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Tanisha Kimbro</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_12' data-user-id='12'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Jovita Tisdale</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>
            </div>

        </div>


        <div class="chatapi-windows ">




        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


    <!-- CORE JS FRAMEWORK - START -->
    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery||document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/echarts/echarts-custom-for-dashboard.js"></script>

    <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/js/chart-flot.js"></script>

    <!-- HighCharts -->
    <script src="assets/plugins/ico/highcharts.js"></script>
    <script src="assets/plugins/ico/create-highcarts.js"></script>

    <script src="assets/plugins/morris-chart/js/raphael-min.js"></script>
    <script src="assets/plugins/morris-chart/js/morris.min.js"></script>
    <script src="assets/js/chart-morris.js"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE TEMPLATE JS - START -->
    <script src="assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>