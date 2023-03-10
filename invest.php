<?php
session_start();
if (!isset($_SESSION['ref_id'])) {
    header("location: login.php");
}

// if(isset($_GET['user_id'])){
// $user_id = $_GET['user_id'];
// }

include 'php/config.php';

if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
}


?>
<!DOCTYPE html>
<html lang="en" class="js" id="fabb7b9b">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="xJIhMTe3RnF6O1Hb61j52amdOXU1chniH836c26F" />
    <meta name="site-token" content="a275cdfd359e43212d43217d5bO1Hb1231f2d447H83643210" />
    <title>Deposit | Evercore </title>
    <link rel="shortcut icon" href="asset/img/favicon.png" />
    <link rel="stylesheet" href="asset/test2.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/main.css" />

    <!-- System Build v202210271331S7d5 @iO -->
</head>
<style>
    .bx-check{
    position:absolute !important;   
     /* display:flex !important; */
     margin-left:-80px ;
     color:white;
     margin-top:15px;
     font-size: 50px;
}
</style>
<body class="nk-body npc-cryptlite has-sidebar has-sidebar-fat" data-theme="">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed is-light x-white" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a class="logo-link nk-sidebar-logo" href="dashboard.php?ref=<?php echo $row['ref_id'] ?>"><img class="logo-img  logo-img-md" src="asset/img/logo.png" /></a>
                    </div>

                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon bx bx-left-arrow-alt"></em></a>
                    </div>
                </div>
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM user WHERE ref_id = {$_SESSION['ref_id']}");
                if (mysqli_num_rows($sql) > 0) {
                    ($row = mysqli_fetch_assoc($sql));


                ?>
                    <div class="nk-sidebar-element">
                        <div class="nk-sidebar-body" data-simplebar>
                            <div class="nk-sidebar-content">
                                <div class="nk-sidebar-widget d-none d-xl-block">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Main Account Balance</h6>
                                            <div class="user-balance">
                                                <?php echo  $row['balance'] ?> <small class="currency">USD</small>
                                            </div>
                                            <div class="user-balance-alt">
                                                0 <span class="currency">ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="user-account-data gy-1">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Profits (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">
                                                    0.00 <span class="currency">USD</span></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Deposit in orders</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text">17.02 USD</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="user-account-actions">
                                        <ul class="g-3">
                                            <li>
                                                <a href="deposit.php?ref=<?php echo $row['ref_id'] ?>" class="btn btn-danger"><span>Deposit</span></a>
                                            </li>
                                            <li>
                                                <a href="withdraw.php?ref=<?php echo $row['ref_id'] ?>" class="btn btn-warning"><span>Withdraw</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                        <div class="user-card-wrap">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>
                                                        <div class="user-avatar bg-info">
                                                            <span><?php echo substr($name, 0, 2); ?></span>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?php echo $row['name'] ?></span>
                                                    <span class="sub-text"><?php echo $row['email'] ?></span>
                                                </div>
                                                <!-- Start Side Bar Mobile  -->
                                                <div class="user-action">
                                                    <em class="icon bx bx-chevron-down"></em>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                        <div class="user-account-info between-center">
                                            <div class="user-account-main">
                                                <h6 class="overline-title-alt">Main Account Balance</h6>
                                                <div class="user-balance">
                                                    <?php echo  $row['balance'] ?> <small class="currency">USD</small>
                                                </div>
                                                <div class="user-balance-alt">
                                                    0 <span class="currency">ETH</span>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="user-account-data">
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Profits (7d)</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <div class="user-account-value">
                                                        <span class="lead-text">
                                                            0.00 <span class="currency">USD</span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Deposit in orders</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <span class="sub-text text-base">17.02 <span class="currency">USD</span></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="user-account-links">
                                            <li>
                                                <a href="withdraw.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Withdraw Funds</span>
                                                    <em class="icon bx bx-wallet "></em></a>
                                            </li>
                                            <li>
                                                <a href="deposit.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Deposit Funds</span>
                                                    <em class="icon bx bx-wallet"></em></a>
                                            </li>
                                        </ul>
                                        <ul class="link-list">
                                            <li>
                                                <a href="profile.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-user"></em><span>View Profile</span></a>
                                            </li>
                                            <li>
                                                <a href="settings.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-cog"></em><span>Account Setting</span></a>
                                            </li>

                                        </ul>
                                        <!-- Mobile Nav End  -->
                                        <ul class="link-list">
                                            <li>
                                                <a href="php/logout.php"><em class="icon bx bx-log-out"></em><span>Sign out</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="nk-sidebar-menu">
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Menu</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="dashboard.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon bx bx-grid-alt"></em></span>
                                                <span class="nk-menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="transactions.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon bx bx-transfer-alt"></em></span>
                                                <span class="nk-menu-text">Transaction</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="investment.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bx-dollar-circle"></i></span>
                                                <span class="nk-menu-text">Investment</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="ourplans.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bx-dollar-circle"></i></span>
                                                <span class="nk-menu-text">Our Plans</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="profile.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bxs-user"></i></span>
                                                <span class="nk-menu-text">My Profile</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="referral.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bx-share-alt"></i></span>
                                                <span class="nk-menu-text">Referrals</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="nk-wrap">
                <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon bx bx-menu"></em></a>
                            </div>

                            <div class="nk-header-marque d-none d-md-block pr-md-3 pr-lg-4 pl-md-4 pl-xl-0 flex-grow-0 overflow-hidden">
                                <div class="nk-marque" data-duration="12000">
                                    <ul class="rate-list rate-plain">
                                        <li class="rate-item">
                                            <div class="rate-title">USD/EUR =</div>
                                            <div class="rate-amount">0.941</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/GBP =</div>
                                            <div class="rate-amount">0.826</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/CAD =</div>
                                            <div class="rate-amount">1.361</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/AUD =</div>
                                            <div class="rate-amount">1.493</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/TRY =</div>
                                            <div class="rate-amount">18.95</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/RUB =</div>
                                            <div class="rate-amount">70.86</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/INR =</div>
                                            <div class="rate-amount">83.24</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BRL =</div>
                                            <div class="rate-amount">5.245</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BTC =</div>
                                            <div class="rate-amount">0.00005936</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/ETH =</div>
                                            <div class="rate-amount">0.0008242</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/LTC =</div>
                                            <div class="rate-amount">0.01527</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BCH =</div>
                                            <div class="rate-amount">0.009904</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BNB =</div>
                                            <div class="rate-amount">0.004024</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/USDC =</div>
                                            <div class="rate-amount">1.00</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/USDT =</div>
                                            <div class="rate-amount">1.00</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/TRX =</div>
                                            <div class="rate-amount">18.11</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm" style="background-color: red;">
                                                    <i class="icon bx bx-user"></i>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status user-status-verified">
                                                        <?php echo $row['stats'] ?>
                                                    </div>
                                                    <div class="user-name">
                                                        <?php echo $row['name'] ?>
                                                        <i class="bx bx-chevron-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <?php $name = $row['name'] ?>
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>
                                                            <div class="user-avatar bg-info">
                                                                <span><?php echo substr($name, 0, 2); ?>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $row['name'] ?></span>
                                                        <span class="sub-text"><?php echo $row['email'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Account Balance</h6>
                                                <div class="user-balance">
                                                    <?php echo $row['balance'] ?> <small class="currency">USD</small>
                                                </div>
                                                <div class="user-balance-alt">
                                                    0<span class="currency">ETH</span>
                                                </div>
                                                <ul class="user-account-links">
                                                    <li>
                                                        <a href="deposit.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Deposit Funds</span>
                                                            <em class="icon bx bx-wallet"></em></a>
                                                    </li>
                                                    <li>
                                                        <a href="withdraw.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Withdraw Funds</span>
                                                            <em class="icon bx bx-wallet"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="profile.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-user"></em><span>View Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="settings.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-cog"></em><span>Security Setting</span></a>
                                                    </li>
                                                    <!-- <li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li> -->
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="php/logout.php">
                                                            <em class="icon bx bx-log-out"></em><span>Sign out</span></a>
                                                    </li>
                                                </ul>
                                                <!-- <form
                            id="logout-form"
                            action="https://app.investorm.xyz/logout"
                            method="POST"
                            style="display: none"
                          >
                            <input
                              type="hidden"
                              name="_token"
                              value="xJIhMTe3RnF6O1Hb61j52amdOXU1chniH836c26F"
                            />
                          </form> -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-lg">
                    
                    
                    <div class="nk-content-body">
    <div class="page-invest wide-xs m-auto" id="iv-ajmco">
        <div class="nk-pps-apps">
            <div class="nk-pps-steps">
                <span class="step active"></span>
                <span class="step"></span>
            </div>
            <div class="nk-pps-title text-center">
                                <h3 class="title">Invest &amp; Earn</h3>
                <p class="caption-text">We have various investment plans for you. <br class="d-none d-sm-block">You can invest daily, weekly or monthly and start earning now.</p>
                            </div>
            <form action="" class="nk-pps-form">
                <div class="nk-pps-field form-group">
                    <div class="form-label-group">
                        <label class="form-label">Invested Plan</label>
                    </div>
                    <input type="hidden" value="bVltMENVcUhGSEl4SWRrTGc1SFlBUT09" name="scheme" id="iv-invest">
                     
                    <div class="dropdown nk-pps-dropdown">
                        <a href="javascript:void(0)" class="dropdown-indicator" data-toggle="dropdown" id="iv-invest-scheme" aria-expanded="false">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Venus (Fixed Invest)</span>
                                                <span class="desc">
                                                    Invest for 3 months &amp; earn weekly 5.75% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                        <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh" style="">
                            <ul class="nk-dlist">
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="N3lkQklqcmYwam1DR0toLzFKY3JGdz09" data-uid="IV004SMC" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Mercury (Fixed Invest)</span>
                                                <span class="desc">
                                                    Invest for 1 day &amp; earn hourly 0.45% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item selected">
                                    <a href="javascript:void(0)" data-plan="bVltMENVcUhGSEl4SWRrTGc1SFlBUT09" data-uid="IV005SVN" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Venus (Fixed Invest)</span>
                                                <span class="desc">
                                                    Invest for 3 months &amp; earn weekly 5.75% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="L3ExSzdSVVQ4SnM3eUIwOFZuWlRwdz09" data-uid="IV006SJP" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Jupiter (Fixed Invest)</span>
                                                <span class="desc">
                                                    Invest for 1 year &amp; earn monthly 9.5% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="M0pabDhHY0xqU2xUcEtVbVM1eDhaQT09" data-uid="IV001SST" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Standard Plan</span>
                                                <span class="desc">
                                                    Invest for 7 days &amp; earn daily 2.5% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="OFFBVXB4eXpCWHBRNDVrYWc1MVlrUT09" data-uid="IV002SPM" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Premium Plan</span>
                                                <span class="desc">
                                                    Invest for 1 month &amp; earn daily 1.5% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="OGFVeCt5UXVlMUJ4ZXVUYkRmNC83UT09" data-uid="IV003SPN" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Professional Plan</span>
                                                <span class="desc">
                                                    Invest for 15 days &amp; earn daily 2.75% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="Tmlhb2dqM1o0S0phM09lUC81RWVzQT09" data-uid="IV007SSV" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Silver Plan</span>
                                                <span class="desc">
                                                    Invest for 2 hours &amp; earn hourly 7.5% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="U1BkUnVyNm5qVDQzTXppaERoSVV5Zz09" data-uid="IV008SDM" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Dimond Plan</span>
                                                <span class="desc">
                                                    Invest for 7 days &amp; earn daily 5% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                                <li class="nk-dlist-item">
                                    <a href="javascript:void(0)" data-plan="OUNHY2EwbkwzT1BLbVFtUkFiY1FCQT09" data-uid="IV009SJP" data-change="iv-invest" class="nk-dlist-opt iv-plnsw">
                                        <div class="nk-cm-item">
                                            <div class="nk-cm-icon">
                                                <em class="icon ni ni-offer"></em>
                                            </div>
                                            <div class="nk-cm-text">
                                                <span class="label fw-medium">Platinum Plan (Fixed Invest)</span>
                                                <span class="desc">
                                                    Invest for 1 day &amp; earn hourly 1.5% as profit.
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                            </ul>
                        </div>
                    </div>
                                    </div>

                <div class="nk-pps-field form-group">
                    <div class="form-label-group">
                        <label class="form-label iv-invest-lb-amount hide">Enter Your Amount</label>
                        <label class="form-label iv-invest-lb-fixed">Fixed Investment Amount</label>
                    </div>
                    <div class="form-control-group">
                        <div class="form-info">USD</div>
                        <input type="text" name="amount" class="form-control form-control-lg form-control-number iv-invest-amount bg-white" value="100" readonly="readonly">
                    </div>
                    <div class="form-note-group">
                        <span class="form-note-alt iv-invest-fixed">
                            <em>Note: The investment amount is a fixed amount for the selected plan.</em>
                        </span>
                        <span class="form-note-alt iv-invest-min hide">
                            <span>Minimum: <span class="amount">100.00 USD</span></span>
                        </span>
                        <span class="form-note-alt iv-invest-max hide">
                            <span>Maximum: <span class="amount">0.00 USD</span></span>
                        </span>
                    </div>
                </div>
                <div class="nk-pps-field form-group">
                    <div class="form-label-group">
                        <label class="form-label">Payment Account</label>
                    </div>
                    <div class="form-control-group">
                        <input type="hidden" value="wallet" name="source">
                        <div class="nk-cm-item single">
                            <div class="nk-cm-icon">
                                <em class="icon ni ni-wallet-fill"></em>
                            </div>
                            <div class="nk-cm-text">
                                <span class="label">Main Balance</span>
                                <span class="desc">
                                    Current Balance: 50.00 USD ( 0.041 ETH )
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-pps-field form-action">
                    <div class="nk-pps-action">
                        <a href="javascript:void(0)" class="btn btn-lg btn-block btn-primary iv-plngs">
                            <span>Continue to Invest</span>
                            <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="form-note text-base text-center mb-n1">By continue this, you agree to our investment terms and conditions.</div>
            </form>
        </div>
    </div>
</div>

                </div>
            </div>
            <script src="https://app.investorm.xyz/assets/js/bundle.js?ver=133"></script>
            <script src="https://app.investorm.xyz/assets/js/app.js?ver=133"></script>
            <script src="https://app.investorm.xyz/assets/js/charts.js?ver=133"></script>
</body>

</html>