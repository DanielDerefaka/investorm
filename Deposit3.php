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

$msg = "";


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
            <div class="page-dw wide-xs m-auto" id="pms-ajcon">
              <div class="nk-pps-apps">
                <div class="nk-pps-steps">
                  <span class="step"></span>
                  <span class="step active"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
                <div class="nk-pps-title text-center">
                  <h3 class="title">Deposit Funds</h3>
                  <?php echo $msg; ?>
                  <p class="caption-text">via <strong>Crypto Wallet</strong></p>
                  <p class="sub-text-sm">Send your payment direct to our wallet.</p>
                </div>
                <form class="nk-pps-form" action="deposit_confirm-crypto.php?ref=<?php echo $ref ?>" method="post">
                  <div class="nk-pps-field-set">
                    <div class="nk-pps-field-row row gy-gs">
                      <div class="nk-pps-field-col col-12 col-sm-6 prm-fmsa">
                        <div class="nk-pps-field form-group">
                          <div class="form-label-group">
                            <label class="form-label" for="deposit-amount">Amount to Deposit</label>
                          </div>
                          <div class="form-control-group">
                            <div class="form-dropdown">
                              <div class="dropdown">
                                <a href="javascript:void(0)" class="bx bx-chevron-down currency" data-toggle="dropdown" data-offset="0,2" name="prm" id="prm-currency-name">BTC</a>
                                <div class="dropdown-menu dropdown-menu-right text-center">
                                  <ul class="link-list-plain li-col3x" name="currency_list" id="currency-list">
                                    <li><a class="switch-currency" href="javascript:void(0)" value="BTC" data-switch="prm" data-currency="BTC">BTC</a></li>
                                    <!-- <li><a class="switch-currency" href="javascript:void(0)" value="ETH" data-switch="prm" data-currency="ETH">ETH</a></li> -->
                                    <!-- <li><a class="switch-currency" href="javascript:void(0)" value="BNB" data-switch="prm" data-currency="BNB">BNB</a></li> -->
                                    <!-- <li><a class="switch-currency" href="javascript:void(0)" value="USDC" data-switch="prm" data-currency="USDC">USDC</a></li> -->
                                    <li><a class="switch-currency" href="javascript:void(0)" value="USDT" data-switch="prm" data-currency="USDT">USDT</a></li>
                                    <!-- <li><a class="switch-currency" href="javascript:void(0)" value="TRX" data-switch="prm" data-currency="TRX">TRX</a></li> -->
                                  </ul>
                                </div>
                              </div>
                            </div>

                            <input type="text" class="form-control form-control-lg form-control-number prm-amount" id="prm-amnt" name="deposit_amount" placeholder="0.00">
                            <input type="hidden" id="prm-currency" name="deposit_currency" value="BTC">
                            <input type="hidden" id="prm-amnt-by" name="deposit_amount_by" value="1">
                          </div>

                          <div class="form-note-group">
                            <span class="nk-pps-min form-note-alt">Minimum <span id="prm-min">0.0001 BTC</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="nk-pps-field-col col-12 col-sm-6 prm-tora">
                        <div class="nk-pps-field form-group">
                          <div class="form-label-group">
                            <label class="form-label" for="credit-amount">Amount in USD</label>
                          </div>
                          <div class="form-control-group">
                            <div class="form-text-hint form-text-hint-lg">
                              <span class="currency">USD</span>
                            </div>
                            <input type="text" class="form-control form-control-lg form-control-number prm-amount" id="prm-credit" name="credit_amount" placeholder="0.00">
                            <input type="hidden" id="prm-credit-currency" name="credit_currency" value="USD">
                          </div>
                          <div class="form-note-group">
                            <span class="nk-pps-rate prm-rate-u form-note-alt">
                              1 USD = <span class="fxrate">0.00005938 BTC</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nk-pps-field form-action text-center">
                    <div class="nk-pps-action">

                      <input class="btn btn-lg btn-block btn-primary" name="depo" type="submit" value="Continue to Deposit">



                    </div>

                    <div class="nk-pps-action pt-3">
                      <a href="" class="btn btn-outline-secondary btn-trans">Back to previous</a>
                    </div>
                  </div>
                </form>
                <script type="text/javascript">
                  var fxCur = {
                    base: "USD",
                    alter: "ETH",
                    rates: {
                      "BTC": 5.93799999999999972917670565397685322750476188957691192626953125e-5,
                      "ETH": 0.00082149999999999996462551887788094973075203597545623779296875,
                      "BNB": 0.004121999999999999796107541527590001351200044155120849609375,
                      "USDC": 1,
                      "USDT": 1,
                      "TRX": 18.3900000000000005684341886080801486968994140625,
                      "USD": 1
                    },
                    data: {
                      "BTC": {
                        "rate": 5.93799999999999972917670565397685322750476188957691192626953125e-5,
                        "min": 0.000100000000000000004792173602385929598312941379845142364501953125,
                        "max": 0.01499999999999999944488848768742172978818416595458984375,
                        "code": "BTC",
                        "dp": 8,
                        "dx": 8
                      },
                      "ETH": {
                        "rate": 0.00082149999999999996462551887788094973075203597545623779296875,
                        "min": 0.01000000000000000020816681711721685132943093776702880859375,
                        "max": 0.25,
                        "code": "ETH",
                        "dp": 8,
                        "dx": 8
                      },
                      "BNB": {
                        "rate": 0.004121999999999999796107541527590001351200044155120849609375,
                        "min": 0.1000000000000000055511151231257827021181583404541015625,
                        "max": 1,
                        "code": "BNB",
                        "dp": 8,
                        "dx": 8
                      },
                      "USDC": {
                        "rate": 1,
                        "min": 10,
                        "max": 500,
                        "code": "USDC",
                        "dp": 8,
                        "dx": 8
                      },
                      "USDT": {
                        "rate": 1,
                        "min": 10,
                        "max": 500,
                        "code": "USDT",
                        "dp": 8,
                        "dx": 8
                      },
                      "TRX": {
                        "rate": 18.3900000000000005684341886080801486968994140625,
                        "min": 0.1000000000000000055511151231257827021181583404541015625,
                        "max": 50,
                        "code": "TRX",
                        "dp": 8,
                        "dx": 8
                      },
                      "USD": {
                        "rate": "1",
                        "min": 10,
                        "max": 100,
                        "code": "USD",
                        "dp": 3,
                        "dx": 3
                      }
                    }
                  };
                </script>
              </div>
            </div>
          </div>

        </div>
      </div>

      <script type="text/javascript">
        const updateSetting = "https://app.investorm.xyz/update/setting",
          upreference = "https://app.investorm.xyz/profile/preference",
          getTnxDetails = "https://app.investorm.xyz/transactions/details",
          msgwng = "Sorry, something went wrong!",
          msgunp = "Unable to process your request.";
      </script>
      <script src="https://app.investorm.xyz/assets/js/bundle.js?ver=133"></script>
      <script src="https://app.investorm.xyz/assets/js/app.js?ver=133"></script>
      <script src="https://app.investorm.xyz/assets/js/charts.js?ver=133"></script>
</body>

</html>