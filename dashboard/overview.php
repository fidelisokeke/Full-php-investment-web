<?php
    include '../processes/dashboard.php'; // Connect to the database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="../">

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

    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <style>
        .tooltip {
          position: relative;
          display: inline-block;
        }
        
        .tooltip .tooltiptext {
          visibility: hidden;
          width: 140px;
          background-color: #555;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 5px;
          position: absolute;
          z-index: 1;
          bottom: 150%;
          left: 50%;
          margin-left: -75px;
          opacity: 0;
          transition: opacity 0.3s;
        }
        
        .tooltip .tooltiptext::after {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: #555 transparent transparent transparent;
        }
        
        .tooltip:hover .tooltiptext {
          visibility: visible;
          opacity: 1;
        }
        
        ul {
          list-style-type: none;
        }
        
        li {
          display: inline-block;
        }
        
        input[type="checkbox"][class="imgCheck"] {
          display: none;
        }
        
        label {
          border: 1px solid #fff;
          padding: 10px;
          display: block;
          position: relative;
          margin: 10px;
          cursor: pointer;
        }
        
        label:before {
          background-color: white;
          color: white;
          content: " ";
          display: block;
          border-radius: 50%;
          border: 1px solid grey;
          position: absolute;
          top: -5px;
          left: -5px;
          width: 25px;
          height: 25px;
          text-align: center;
          line-height: 28px;
          transition-duration: 0.4s;
          transform: scale(0);
        }
        
        label img {
          height: 100px;
          width: 100px;
          transition-duration: 0.2s;
          transform-origin: 50% 50%;
        }
        
        :checked + label {
          border-color: #ddd;
        }
        
        :checked + label:before {
          content: "✓";
          background-color: grey;
          transform: scale(1);
        }
        
        :checked + label img {
          transform: scale(0.9);
          box-shadow: 0 0 5px #333;
          z-index: -1;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .investment-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .investment-box {
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .investment-box h5 {
            color: #007bff;
            margin-bottom: 20px;
        }

        .investment-box p {
            margin: 5px 0;
        }

        .investment-box .timer {
            font-weight: bold;
            color: #ff6347;
        }
    </style>
</head>
<body>
    <div class="main--body dashboard-bg">
        <!--========== Preloader ==========-->
        <div class="loader">
            <div class="loader-inner">
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
            </div>
        </div>
        <div class="sideBarToggle overlay"></div>
        <!--========== Preloader ==========-->
        
        
        <!--=======SideHeader-Section Starts Here=======-->
        <div class="notify-overlay"></div>
        <section class="dashboard-section">
            <div class="sideBarToggle side-header oh">
                <div class="sideBarToggle cross-header-bar d-xl-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="site-header-container">
                    <div class="side-logo">
                        <a href="#">
                            <img src="../img/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="#" class="active"><i class="flaticon-man"></i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a onclick="sideBarToggle()" data-toggle="modal" data-target="#depositModal" href="#"><i class="flaticon-interest"></i>Deposit</a>
                        </li>
                        <li>
                            <a data-toggle="modal" data-target="#investmentModal" href="#"><i class="flaticon-investment"></i>Invest</a>
                        </li>

                        <li>
                            <a data-toggle="modal" data-target="#withdrawModal" href="#"><i class="flaticon-atm"></i>Withdraw</a>
                        </li>
                        <li>
                            <a data-toggle="modal" data-target="#paymentProofModal" href="#"><i class="flaticon-atm"></i>KYC</a>
                        </li>
                     
                        <li>
                            <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dasboard-body">
                <div class="dashboard-hero">
                    <div class="header-top">
                        <div class="container">
                            <div class="mobile-header d-flex justify-content-between d-lg-none align-items-center">
                                <!--<div class="author">-->
                                    <!--<img src="assets/images/dashboard/author.png" alt="dashboard">-->
                                    
                                <!--</div>-->
                                <h6 class="title text-white"><? echo $_SESSION["s_username"]; ?></h6>
                                <div class="cross-header-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="mobile-header-content d-lg-flex flex-wrap justify-content-lg-between align-items-center">
                                <ul class="support-area">
                                    <li>
                                        <a href="#0"><i class="flaticon-support"></i>Support</a>
                                    </li>
                                    <li>
                                        <a href="support1@flytradepro.com">support@.com<i class="flaticon-email"></i></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-globe"></i>
                                        <div class="select-area">
                                            <select class="select-bar" style="display: none;">
                                                <option value="en">English</option>
                                                <option value="bn">Bangla</option>
                                                <option value="sp">Spanish</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">
                                    <form class="dashboard-header-search mr-sm-4">
                                        <input type="text" placeholder="Search...">
                                    </form>
                                    <ul class="dashboard-right-menus">
                                        <li>
                                            <a href="#0">
                                                <i class="flaticon-notification"></i>
                                                <span class="number bg-theme">4</span>
                                            </a>
                                            <div class="notification-area">
                                                <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                                    <span>4 New Notifications</span>
                                                    <a href="#">Clear</a>
                                                </div>
                                                <ul class="notification-body">
                                                    <li>
                                                        <a href="#">
                                                            <div class="icon">
                                                                <i class="flaticon-man"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New Affiliate Registered</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="icon">
                                                                <i class="flaticon-atm"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New deposit completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-wallet"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New Withdraw completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-exchange"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">Fund Transfer Completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notifacation-footer text-center">
                                                    <a href="#0" class="view-all">View All</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#0" class="author">
                                                <!--<div class="thumb">-->
                                                <!--    <img src="assets/images/dashboard/author.png" alt="dashboard">-->
                                                <!--    <span class="checked">-->
                                                <!--        <i class="flaticon-checked"></i>-->
                                                <!--    </span>-->
                                                <!--</div>-->
                                                <div class="content">
                                                    <h6 class="title"><? echo $_SESSION["s_username"]; ?></h6>
                                                    <span class="country"><? echo $_SESSION["s_country"]; ?></span>
                                                </div>
                                            </a>
                                            <div class="notification-area">
                                                <!--<div class="author-header">-->
                                                <!--    <div class="thumb">-->
                                                <!--        <img src="assets/images/dashboard/author.png" alt="dashboard">-->
                                                <!--    </div>-->
                                                <!--    <h6 class="title">John Doe</h6>-->
                                                <!--    <a href="#mailto:johndoe@gmail.com"><span class="__cf_email__" data-cfemail="d49ebbbcbab0bbb194b3b9b5bdb8fab7bbb9">[email&#160;protected]</span></a>-->
                                                <!--</div>-->
                                                <div class="author-body">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="far fa-user"></i>Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-user-edit"></i>Edit Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-hero-content text-white">
                        <h3 class="title">Dashboard</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                Dashboard
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center mt--85">
                        <div class="col-sm-6 col-lg-3">
                            <div class="dashboard-item">
                                <div class="dashboard-inner">
                                    <div class="cont">
                                        <span class="title">Total Balance</span>
                                        <h5 class="amount"><? echo $balance_usd; ?> USD</h5>
                                    </div>
                                    <div class="thumb">
                                        <img src="assets/images/dashboard/dashboard1.png" alt="dasboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="dashboard-item">
                                <div class="dashboard-inner">
                                    <div class="cont">
                                        <span class="title">BTC Balance</span>
                                        <h5 class="amount"><? echo $balance_btc; ?> BTC</h5>
                                    </div>
                                    <div class="thumb">
                                        <img src="assets/images/dashboard/dashboard2.png" alt="dasboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="dashboard-item">
                                <div class="dashboard-inner">
                                    <div class="cont">
                                        <span class="title">Total Deposit</span>
                                        <h5 class="amount"><? echo $balance_eth; ?> USD </h5>
                                    </div>
                                    <div class="thumb">
                                        <img src="assets/images/dashboard/dashboard3.png" alt="dasboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="dashboard-item">
                                <div class="dashboard-inner">
                                    <div class="cont">
                                        <span class="title">XRP Balance</span>
                                        <h5 class="amount"><? echo $balance_xrp; ?> XRP</h5>
                                    </div>
                                    <div class="thumb">
                                        <img src="assets/images/dashboard/dashboard4.png" alt="dasboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-30">
                        <div class="col-lg-6">
                            <div class="total-earning-item">
                                <div class="total-earning-heading">
                                    <h5 class="title">Total earning </h5>
                                    <h4 class="amount cl-1">$<? echo $balance ?></h4>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="item">
                                        <div class="cont">
                                            <h4 class="cl-theme">+.<? echo $month_profit ?>%</h4>
                                            <span class="month"><? echo date("F") ?>  Profit</span>
                                        </div>
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/graph1.png" alt="dashboard">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="cont">
                                            <h4 class="cl-1">+.<? echo $year_profit ?>%</h4>
                                            <span class="month">Year Profit</span>
                                        </div>
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/graph2.png" alt="dashboard">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a data-toggle="modal" data-target="#depositModal" href="#" class="normal-button btn">
                                        Deposit Now <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progress-wrapper mb-30">
                                <h5 class="title cl-white">Progress</h5>
                                <div class="d-flex flex-wrap m-0-15-20-none">
                                    <div class="circle-item">
                                        <span class="level">Level(1)</span>
                                        <div class="progress1 circle">
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <div class="circle-item">
                                        <span class="level">ROI Speed</span>
                                        <div class="progress2 circle">
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <div class="circle-item">
                                        <span class="level">ROI Redeemed</span>
                                        <div class="progress3 circle">
                                            <strong></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="earn-item mb-30">
                                <div class="earn-thumb">
                                    <img src="assets/images/dashboard/earn/01.png" alt="dashboard-earn">
                                </div>
                                <div class="earn-content">
                                    <h6 class="title">Active deposits in the amount of</h6>
                                    <ul class="mb--5">
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/usd.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $active_deposit_usd; ?></span>
                                                <span class="cl-4">USD</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/btc.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $active_deposit_btc; ?></span>
                                                <span class="cl-4">BTC</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/xrp.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $active_deposit_eth; ?></span>
                                                <span class="cl-4">XRP</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/eth.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $active_deposit_xrp; ?></span>
                                                <span class="cl-4">ETH</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="earn-item mb-30">
                                <div class="earn-thumb">
                                    <img src="assets/images/dashboard/earn/02.png" alt="dashboard-earn">
                                </div>
                                <div class="earn-content partner-content d-flex flex-wrap align-items-start justify-content-between">
                                    <h6 class="title w-100">All partners</h6>
                                    <ul class="mb--5">
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/active.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-4">Active :</span>
                                                <span class="cl-1"><? echo $active_partners ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/inactive.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-4">Inactive :</span>
                                                <span class="cl-1"><? echo $inactive_partners ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="total-partner">
                                        <span class="total-title"><? echo $active_partners + $inactive_partners ?></span>
                                        <span>Total</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="earn-item mb-30">
                                <div class="earn-thumb">
                                    <img src="assets/images/dashboard/earn/03.png" alt="dashboard-earn">
                                </div>
                                <div class="earn-content">
                                    <h6 class="title">Earned Referral</h6>
                                    <ul class="mb--5">
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/usd.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $referral_earning_usd; ?></span>
                                                <span class="cl-4">USD</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/btc.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $referral_earning_btc; ?></span>
                                                <span class="cl-4">BTC</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/xrp.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $referral_earning_eth; ?></span>
                                                <span class="cl-4">XRP</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/eth.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $referral_earning_xrp; ?></span>
                                                <span class="cl-4">ETH</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="earn-item mb-30">
                                <div class="earn-thumb">
                                    <img src="assets/images/dashboard/earn/04.png" alt="dashboard-earn">
                                </div>
                                <div class="earn-content">
                                    <h6 class="title">Earned Deposits</h6>
                                    <ul class="mb--5">
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/usd.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $earned_deposit_usd; ?></span>
                                                <span class="cl-4">USD</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/btc.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $earned_deposit_btc; ?></span>
                                                <span class="cl-4">BTC</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/xrp.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $earned_deposit_eth; ?></span>
                                                <span class="cl-4">XRP</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/eth.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $earned_deposit_xrp; ?></span>
                                                <span class="cl-4">ETH</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="earn-item mb-30">
                                <div class="earn-thumb">
                                    <img src="assets/images/dashboard/earn/05.png" alt="dashboard-earn">
                                </div>
                                <div class="earn-content">
                                    <h6 class="title">Payout</h6>
                                    <ul class="mb--5">
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/usd.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $payouts_usd; ?></span>
                                                <span class="cl-4">USD</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/btc.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $payouts_btc; ?></span>
                                                <span class="cl-4">BTC</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/xrp.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $payouts_eth; ?></span>
                                                <span class="cl-4">XRP</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/dashboard/earn/eth.png" alt="dashboard-earn">
                                            </div>
                                            <div class="cont">
                                                <span class="cl-1"><? echo $payouts_xrp; ?></span>
                                                <span class="cl-4">ETH</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="earn-item small-thumbs mb-30">
                                <div class="earn-thumb">
                                    <img src="assets/images/dashboard/earn/06.png" alt="dashboard-earn">
                                </div>
                                <div class="earn-content">
                                    <h6 class="title">Fund Transfer</h6>
                                    <ul class="mb--5">
                                        <li>
                                    
                                        </li>
                                    </ul>
                                </div>
                                <form id="transferForm" method="POST" action="process_transfer.php">
    <div class="form-group">
        <label for="recipient">Recipient Username</label>
        <input type="text" class="form-control" id="recipient" name="recipient" required>
    </div>
    <div class="form-group">
        <label for="transferAmount">Amount to Transfer</label>
        <input type="number" class="form-control" id="transferAmount" name="transferAmount" required>
    </div>
    <button type="submit" class="btn btn-primary">Transfer</button>
</form>
<div id="transferAlert" class="alert alert-danger" style="display: none;"></div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="earn-item small-thumbs mb-30">
                                <div class="earn-thumb">
                                    <img src="assets/images/dashboard/earn/06.png" alt="dashboard-earn">
                                </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <!-- Section to display active investments -->
<div id="activeInvestments" class="investment-container"></div>

<script>
    $(document).ready(function() {
        fetchActiveInvestments();

        function fetchActiveInvestments() {
            $.ajax({
                url: 'get_active_investments.php',
                method: 'GET',
                success: function(response) {
                    console.log(response); // Debugging: print the response
                    try {
                        const data = JSON.parse(response);

                        if (data.error) {
                            $('#activeInvestments').html('<p>' + data.error + '</p>');
                            return;
                        }

                        const investments = data.investments;
                        if (investments.length === 0) {
                            $('#activeInvestments').html('<p>No active investments found.</p>');
                            return;
                        }

                        let investmentsHtml = '';
                        investments.forEach(investment => {
                            const endTime = new Date(investment.end_time);
                            investmentsHtml += `
                                <div class="investment-box">
                                    <h5>Investment Plan ${investment.plan_id}</h5>
                                    <p>Amount: $${investment.amount}</p>
                                    <p>Profit Percentage: ${investment.profit_percentage}%</p>
                                    <p>Time Remaining: <span class="timer" data-end-time="${endTime.toISOString()}"></span></p>
                                </div>
                            `;
                        });

                        $('#activeInvestments').html(investmentsHtml);
                        initializeTimers();
                    } catch (e) {
                        console.error('Error parsing JSON:', e);
                        $('#activeInvestments').html('<p>Error parsing response.</p>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    $('#activeInvestments').html('<p>An error occurred while fetching active investments.</p>');
                }
            });
        }

        function initializeTimers() {
            const timers = document.querySelectorAll('.timer');
            timers.forEach(timer => {
                const endTime = new Date(timer.getAttribute('data-end-time'));
                updateTimer(timer, endTime);

                setInterval(() => {
                    updateTimer(timer, endTime);
                }, 1000);
            });
        }

        function updateTimer(timer, endTime) {
            const now = new Date();
            const timeRemaining = endTime - now;

            if (timeRemaining <= 0) {
                timer.innerHTML = 'Investment Ended';
            } else {
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((timeRemaining / (1000 * 60)) % 60);
                const seconds = Math.floor((timeRemaining / 1000) % 60);
                timer.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
        }
    });
</script>



                        <div class="col-lg-6">
                            <div class="earn-item small-thumbs mb-30">
                                <div class="">
                                    <h6 class="title">Referral Link</h6>
                                        <span class="row">
                                            <input id="referralLink" type="text" readonly value="https://domain.com/sign-up.php?ref=<? echo $_SESSION['s_username'] ?>" class="form-control col-8" placeholder="Click to copy your referal link"> 
                                            <button onclick="myFunction()" onmouseout="outFunc()" class="form-control col-4 btn-success">
                                                <span class="tooltiptext" id="myTooltip">Copy</span>
                                            </button>
                                        </span>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="container-fluid sticky-bottom">
                    <div class="dashboard-footer">
                        <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                            <div class="left">
                                &copy; 2022 <a href="#0"> Pro</a>  |  All right reserved.
                            </div>
                            <div class="right">
                                <ul>
                                    <li>
                                        <a href="#0">Terms of use</a>
                                    </li>
                                    <li>
                                        <a href="#0">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======SideHeader-Section Ends Here=======-->
        

    </div>
    
    <!-- The Modal -->
    <div class="modal" id="depositModal">
      <div class="modal-dialog">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <p class="modal-title">Please select a Payment Option to proceed</p>
            <a id="modalCloseButton" type="button" class="close" data-dismiss="modal">&times;</a>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
            <ul>
              <!--<li>
                <input class="imgCheck" type="checkbox" id="cannabis" />
                <label for="cannabis">
                    <img src="https://pbs.twimg.com/profile_images/1252456381866795009/vmMldSK8_400x400.jpg" /><br>
                    <p class="m-1 text-center">Cannabis</p>
                </label>
              </li>-->
              
              <!--<li>
                <input class="imgCheck" type="checkbox" id="oilAndGas" />
                <label for="oilAndGas">
                    <img src="https://i.pinimg.com/originals/3c/4f/c1/3c4fc1179c8ce6ae93feb5a99d40827c.png" /><br>
                    <p class="m-1 text-center">Oil and gas</p>
                </label>
              </li>
              <li>
                <input class="imgCheck" type="checkbox" id="gold" />
                <label for="gold">
                    <img src="https://i.pinimg.com/originals/fa/3b/3e/fa3b3e9f25fe4cf32de67013ce6c0dd6.jpg" /><br>
                    <p class="m-1 text-center">Gold</p>
                </label>
              </li>
              <li>
                <input class="imgCheck" type="checkbox" id="agriculture" />
                <label for="agriculture">
                    <img src="https://i.pinimg.com/originals/03/31/a3/0331a3ddb8c5e744b2ec005c23ea9cbc.jpg" /><br>
                    <p class="m-1 text-center">Agriculture</p>
                </label>
              </li>
              <li>
                <input class="imgCheck" type="checkbox" id="realEstate" />
                <label for="realEstate">
                    <img src="https://i.pinimg.com/originals/6e/a4/2a/6ea42a8cb727320f966b294f4e207e6e.jpg" /><br>
                    <p class="m-1 text-center">Real estate</p>
                </label>
              </li>
              <li>
                <input class="imgCheck" type="checkbox" id="foreignExchange" />
                <label for="foreignExchange">
                    <img src="https://i.pinimg.com/originals/f8/db/33/f8db3312fcac8ee6d3637e75fabd3ba8.jpg" /><br>
                    <p class="m-1 text-center">Foreign<br>Exchange</p>
                </label>
              </li>-->
              
              <li>
                <input class="imgCheck" type="checkbox" id="cryptocurrency" />
                <label for="cryptocurrency">
                    <img src="https://flytradepro.com/img/OIP.jpeg" /><br>
                    <p class="m-1 text-center">Cryptocurrency</p>
                </label>
              </li>
              <!--<li>
                <input class="imgCheck" type="checkbox" id="retirement" />
                <label for="retirement">
                    <img src="assets/images/dashboard/retirement.png" /><br>
                    <p class="m-1 text-center">Retirement<br>and<br>insurance</p>
                </label>
              </li>-->
              
            </ul>
          </div>
    
          <!-- Modal footer -->
<div class="modal-footer">
    <input id="userId" name="userId" type="hidden" value="<?php echo $user_id; ?>" />
    <a id="proceedButton" type="button" class="btn btn-primary text-white">Proceed</a>
    <!-- Add a section to display wallet address -->
    <div id="walletSection" style="display: none;">
        <label for="walletAddress">Wallet Address:</label>
        <span id="walletAddress"></span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Attach click event to the "Proceed" button
    $("#proceedButton").click(function() {
        // Assuming you have the wallet address stored in a variable named walletAddress
        var walletAddress = "1KatypChtoAzbhLRXwVEMWDz84Dagzn2bv"; // Replace with the actual wallet address
        
        // Display the wallet section and set the wallet address
        $("#walletSection").show();
        $("#walletAddress").text(walletAddress);
        
        // Disable the "Proceed" button after displaying the wallet address
        $(this).addClass('disabled');
    });
});
</script>

    
        </div>
      </div>
    </div>
    <!-- Other HTML content -->
    


<!-- Investment Modal -->
<div class="modal" id="investmentModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="investmentModalLabel">Choose Investment Plan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="investmentForm" method="post" action="process_investment.php">
          <div class="form-group">
            <label for="plan">Select Plan</label>
            <select class="form-control" id="plan" name="plan_id">
              <option value="1" data-min-amount="500">Cryptocurrency - 15%</option>
              <option value="2" data-min-amount="500">Retirement and Insurance - 9%</option>
              <option value="3" data-min-amount="500">Oil and Gas - 12%</option>
              <option value="4" data-min-amount="500">Gold - 9%</option>
              <option value="5" data-min-amount="500">Agriculture - 10%</option>
              <option value="6" data-min-amount="500">Real Estate - 10%</option>
              <option value="7">Foreign Exchange - 9%</option>
            </select>
          </div>
          <div class="form-group">
        <label for="amount">Investment Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" required>
        <small id="amountHelp" class="form-text text-muted">Minimum investment amount is based on the selected plan.</small>
    </div>
    <button type="submit" class="btn btn-primary">Invest</button>
</form>

<div id="investmentAlert" class="alert alert-danger" style="display: none;"></div>
      </div>
    </div>
  </div>
</div>


    
    <!-- The Modal -->
    <div class="modal" id="withdrawModal">
      <div class="modal-dialog">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <p class="modal-title">Please enter a wallet address</p>
            <a id="withdrawalModalCloseButton" type="button" class="close" data-dismiss="modal">&times;</a>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
            <input id="withdrawAmount" type="numeric" class="form-control mb-2" placeholder="Enter withdrawal amount" /> 
            <select id="walletType" class="form-select mb-2" aria-label="Default select example">
              <option value="" selected disabled>Select wallet type</option>
              <option value="btc">BTC</option>
              <option value="eth">ETH</option>
              <option value="bch">BCH</option>
              <option Value="bch">Bank Details</option>
            </select>
            <input id="walletAddress" type="text" class="form-control" placeholder="Enter wallet address" /> 
          </div>
    
          <!-- Modal footer -->
          <div class="modal-footer">
            <input id="userId" name="userId" type="hidden" value="<? echo $user_id; ?>" />
            <a id="saveButton" onclick="saveWalletData()" type="button" class="btn btn-primary text-white">Save</a>
           <button id="showForm" class="btn btn-primary text-white" >Click to Submit Details for bank withdrawal</button>
            <form id="myForm" style="display: none;" action="handle_form.php" method="post">
    <label for="Text">Bank Name:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="bank">Bank Account Number:</label>
    <input type="text" id="bank" name="bank" required><br><br>
    <label for="rout">Routing no:</label>
    <input type="text" id="rout" name="rout" required><br><br>
    
    <button type="submit">Submit</button>
    <script>
document.getElementById('showForm').addEventListener('click', function() {
    document.getElementById('myForm').style.display = 'block';
});
</script>


</form>

          </div>
    
        </div>
      </div>
    </div>
    <ul>
    

<!-- Payment Proof Modal -->
<div class="modal fade" id="paymentProofModal" tabindex="-1" role="dialog" aria-labelledby="paymentProofModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentProofModalLabel">Upload Your Government Approved ID</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="handle_upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="proofImage">Upload Image:</label>
                        <input type="file" class="form-control-file" id="proofImage" name="proofImage" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
    <script>
        function myFunction() {
          var copyText = document.getElementById("referralLink");
          copyText.select();
          copyText.setSelectionRange(0, 99999);
          navigator.clipboard.writeText(copyText.value);
          
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copied: " + copyText.value;
        }
        
        function outFunc() {
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copy";
        }
    </script>
    <script src="assets/js/overview.js"></script>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
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
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $('.progress1.circle').circleProgress({
            value: .75,
            fill: {
                gradient: ['#00cca2', '#00cca2']
            },
            }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
        });
        $('.progress2.circle').circleProgress({
            value: .90,
            fill: {
                gradient: ['#8d16e8', '#8d16e8']
            },
            }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(90 * progress) + '<i>%</i>');
        });
        $('.progress3.circle').circleProgress({
            value: .85,
            fill: {
                gradient: ['#ef764c', '#ef764c']
            },
            }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(85 * progress) + '<i>%</i>');
        });
    </script>
    <script>
    document.getElementById('investmentForm').addEventListener('submit', function(event) {
    const selectedPlan = document.getElementById('plan').selectedOptions[0];
    const minAmount = selectedPlan.getAttribute('data-min-amount');
    const enteredAmount = document.getElementById('amount').value;

    if (parseInt(enteredAmount) < parseInt(minAmount)) {
        event.preventDefault();
        const alertDiv = document.getElementById('investmentAlert');
        alertDiv.style.display = 'block';
        alertDiv.textContent = `The minimum amount for the selected plan is ${minAmount}. Please enter an amount equal to or greater than ${minAmount}.`;
    }
});
</script>
<script>document.getElementById('transferForm').addEventListener('submit', function(event) {
    const transferAmount = document.getElementById('transferAmount').value;
    const balanceUsd = <?php echo $_SESSION['balance_usd']; ?>;
    
    if (parseFloat(transferAmount) > parseFloat(balanceUsd)) {
        event.preventDefault();
        const alertDiv = document.getElementById('transferAlert');
        alertDiv.style.display = 'block';
        alertDiv.textContent = 'Insufficient funds for this transfer.';
    }
});
</script>
<script src="//code.tidio.co/50gwdhfdnpxbylzcixlnlnvxisbnyxia.js"async></script>


</body>
</html>