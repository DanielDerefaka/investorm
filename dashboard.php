<?php 
session_start();
if(!isset($_SESSION['ref_id'])){
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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="csrf-token"
      content="xJIhMTe3RnF6O1Hb61j52amdOXU1chniH836c26F"
    />
    <meta
      name="site-token"
      content="a275cdfd359e43212d43217d5bO1Hb1231f2d447H83643210"
    />
    <title>Dashboard | Evercore </title>
    <link rel="shortcut icon" href="asset/img/favicon.png" />
    <link rel="stylesheet" href="asset/test2.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="asset/main.css" />

    <!-- System Build v202210271331S7d5 @iO -->
  </head>
  <body class="nk-body npc-cryptlite has-sidebar has-sidebar-fat" data-theme="">
    <div class="nk-app-root">
      <div class="nk-main">
        <div
          class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed is-light x-white"
          data-content="sidebarMenu"
        >
          <div class="nk-sidebar-element nk-sidebar-head">
            <div class="nk-sidebar-brand">
              <a class="logo-link nk-sidebar-logo" href="dashboard.php?ref=<?php echo $row['ref_id']?>"
                ><img
                  class="logo-img  logo-img-md"
                  src="asset/img/logo.png"
                  
              /></a>
            </div>

            <div class="nk-menu-trigger mr-n2">
              <a
                href="#"
                class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                data-target="sidebarMenu"
                ><em class="icon bx bx-left-arrow-alt"></em
              ></a>
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
                          0.00 <span class="currency">USD</span></span
                        >
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
                        <a href="deposit.php?ref=<?php echo $row['ref_id']?>" class="btn btn-danger"
                          ><span>Deposit</span></a
                        >
                      </li>
                      <li>
                        <a href="withdraw.php?ref=<?php echo $row['ref_id']?>" class="btn btn-warning"
                          ><span>Withdraw</span></a
                        >
                      </li>
                    </ul>
                  </div>
                </div>

                <div
                  class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0"
                >
                  <a
                    class="nk-profile-toggle toggle-expand"
                    data-target="sidebarProfile"
                    href="#"
                  >
                    <div class="user-card-wrap">
                      <div class="user-card">
                        <div class="user-avatar">
                          <span
                            ><div class="user-avatar bg-info">
                              <span><?php echo substr($name, 0,2   ); ?></span>
                            </div></span
                          >
                        </div>
                        <div class="user-info">
                          <span class="lead-text"><?php echo $row['name'] ?></span>
                          <span class="sub-text"
                            ><?php echo $row['email'] ?></span
                          >
                        </div>
                        <!-- Start Side Bar Mobile  -->
                        <div class="user-action">
                          <em class="icon bx bx-chevron-down"></em>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div
                    class="nk-profile-content toggle-expand-content"
                    data-content="sidebarProfile"
                  >
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
                              0.00 <span class="currency">USD</span></span
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="user-account-label">
                          <span class="sub-text">Deposit in orders</span>
                        </div>
                        <div class="user-account-value">
                          <span class="sub-text text-base"
                            >17.02 <span class="currency">USD</span></span
                          >
                        </div>
                      </li>
                    </ul>
                    <ul class="user-account-links">
                      <li>
                        <a href="withdraw.php?ref=<?php echo $row['ref_id']?>" class="link"
                          ><span>Withdraw Funds</span>
                          <em class="icon bx bx-wallet "></em
                        ></a>
                      </li>
                      <li>
                        <a href="deposit.php?ref=<?php echo $row['ref_id']?>" class="link"
                          ><span>Deposit Funds</span>
                          <em class="icon bx bx-wallet"></em
                        ></a>
                      </li>
                    </ul>
                    <ul class="link-list">
                      <li>
                        <a href="profile.php?ref=<?php echo $row['ref_id']?>"
                          ><em class="icon bx bx-user"></em
                          ><span>View Profile</span></a
                        >
                      </li>
                      <li>
                        <a href="settings.php?ref=<?php echo $row['ref_id']?>"
                          ><em class="icon bx bx-cog"></em
                          ><span>Account Setting</span></a
                        >
                      </li>
                     
                    </ul>
                    <!-- Mobile Nav End  -->
                    <ul class="link-list">
                      <li>
                        <a
                          href="php/logout.php"
                          ><em class="icon bx bx-log-out-circle"></em
                          ><span>Sign out</span></a
                        >
                      </li>
                      <li>
                    <form action="php/delete.php" method="post">
                    <input type="text" value="<?php echo $ref ?>" name="ref_id" hidden>
                       <button style="border: none; background-color: transparent;"
                          ><em class="icon bx bx-x-circle"></em
                          ><span>Delete</span></button
                        >
                       
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="nk-sidebar-menu">
                  <ul class="nk-menu">
                    <li class="nk-menu-heading">
                      <h6 class="overline-title">Menu</h6>
                    </li>
                    <li class="nk-menu-item active">
                      <a href="dashboard.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><em class="icon bx bx-grid-alt"></em
                        ></span>
                        <span class="nk-menu-text">Dashboard</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="transactions.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><em class="icon bx bx-transfer-alt"></em
                        ></span>
                        <span class="nk-menu-text">Transaction</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="investment.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-dollar-circle"></i
                        ></span>
                        <span class="nk-menu-text">Investment</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="ourplans.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-dollar-circle"></i
                        ></span>
                        <span class="nk-menu-text">Our Plans</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="profile.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bxs-user"></i
                        ></span>
                        <span class="nk-menu-text">My Profile</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="referral.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-share-alt"></i
                        ></span>
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
                  <a
                    href="#"
                    class="nk-nav-toggle nk-quick-nav-icon"
                    data-target="sidebarMenu"
                    ><em class="icon bx bx-menu"></em
                  ></a>
                </div>

                <div
                  class="nk-header-marque d-none d-md-block pr-md-3 pr-lg-4 pl-md-4 pl-xl-0 flex-grow-0 overflow-hidden"
                >
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
                      <a
                        href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown"
                      >
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
                      <div
                        class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1"
                      >
                        <div
                          class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block"
                        >
                       <?php $name = $row['name'] ?>
                          <div class="user-card">
                            <div class="user-avatar">
                              <span
                                ><div class="user-avatar bg-info">
                                  <span><?php echo substr($name, 0,2); ?>
</span>
                                </div></span
                              >
                            </div>
                            <div class="user-info">
                              <span class="lead-text"
                                ><?php echo $row['name'] ?></span
                              >
                              <span class="sub-text"
                                ><?php echo $row['email'] ?></span
                              >
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-inner user-account-info">
                          <h6 class="overline-title-alt">Account Balance</h6>
                          <div class="user-balance">
                           <?php echo $row['balance']?> <small class="currency">USD</small>
                          </div>
                          <div class="user-balance-alt">
                            0<span class="currency">ETH</span>
                          </div>
                          <ul class="user-account-links">
                            <li>
                              <a href="deposit.php?ref=<?php echo $row['ref_id']?>" class="link"
                                ><span>Deposit Funds</span>
                                <em class="icon bx bx-wallet"></em
                              ></a>
                            </li>
                            <li>
                              <a href="withdraw.php?ref=<?php echo $row['ref_id']?>" class="link"
                                ><span>Withdraw Funds</span>
                                <em class="icon bx bx-wallet"></em
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="dropdown-inner">
                          <ul class="link-list">
                            <li>
                              <a href="profile.php?ref=<?php echo $row['ref_id']?>"
                                ><em class="icon bx bx-user"></em
                                ><span>View Profile</span></a
                              >
                            </li>
                            <li>
                              <a href="settings.php?ref=<?php echo $row['ref_id']?>"
                                ><em class="icon bx bx-cog"></em
                                ><span>Security Setting</span></a
                              >
                            </li>
                            <!-- <li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li> -->
                          </ul>
                        </div>
                        <div class="dropdown-inner">
                          <ul class="link-list">
                            <li>
                              <a href="php/logout.php">
                                <em class="icon bx bx-log-out"></em
                                ><span>Sign out</span></a
                              >
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
       

          <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-lg">
              <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                  <div class="nk-block-head-sub"><span>Welcome!</span></div>
                  <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                      <h2 class="nk-block-title fw-normal">
                       <?php echo $row['name'] ?>
                      </h2>
                      <div class="nk-block-des">
                        <p>Here&#039;s a summary of your account. Have fun!</p>
                      </div>
                    </div>
                    <div class="nk-block-head-content d-none d-md-inline-flex">
                      <ul class="nk-block-tools gx-3">
                        <li>
                          <a
                            href="invest.php?ref=<?php echo $row['ref_id']?>"
                            class="btn btn-secondary"
                            ><span>Invest &amp; Earn</span>
                            <em
                              class="icon bx bx-right-arrow-alt d-none d-lg-inline-block"
                            ></em
                          ></a>
                        </li>
                        <li>
                          <a
                            href="deposit.php?ref=<?php echo $row['ref_id']?>"
                            class="btn btn-danger"
                            ><span>Deposit</span>
                            <em class="icon bx bx-right-arrow-alt"></em
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- <div class="nk-block">
                  <div class="alert alert-danger bg-white alert-thick">
                    <div class="alert-cta flex-wrap flex-md-nowrap g-2">
                      <div class="alert-text has-icon">
                        <em class="icon bx bx-bug text-danger"></em>
                        <p class="text-base">
                          <b>Caution:</b> All the transactions are NOT
                          real as you have logged into demo application to see
                          the platform.
                        </p>
                      </div>
                    </div>
                  </div>
                </div> -->

                <div class="nk-block">
                  <div class="row g-gs">
                    <div class="col-md-4">
                      <div
                        class="card card-full card-bordered card-wg on-bottom is-primary"
                      >
                        <div class="card-inner">
                          <div class="card-title-group">
                            <div class="card-title">
                              <h5 class="nk-wgacc-title">Available Balance</h5>
                            </div>
                            <div class="card-tools">
                              <em
                                class="icon bx bx-info-circle fs-13px text-soft nk-tooltip"
                                title="Main account balance without locked or under progress."
                              ></em>
                            </div>
                          </div>
                          <div class="card-amount mt-2 mb-1">
                            <span class="amount"
                              ><?php echo $row['balance']; ?> <span class="currency">USD</span></span
                            >
                          </div>
                          <div class="card-stats">
                            <div class="card-stats-group g-2">
                              <div class="card-stats-data">
                                <div class="title fw-bold">
                                  Investment Account
                                  <em
                                    class="icon bx bx-info-circle fs-12px text-soft nk-tooltip"
                                    title="Additional balance in your Investment account."
                                  ></em>
                                </div>
                                <div class="amount fw-bold">
                                  0 <span class="currency fw-normal">USD</span>
                                </div>
                              </div>
                            </div>
                            <div class="card-stats-ck sm"></div>
                          </div>
                          <div class="card-action d-md-none">
                            <ul
                              class="nk-block-tools g-3 flex-wrap flex-sm-nowrap"
                            >
                              <li>
                                <a
                                  href="deposit.php?ref=<?php echo $row['ref_id']?>"
                                  class="btn btn-danger"
                                  ><span>Deposit</span>
                                  <em class="icon bx bx-right-arrow-alt"></em
                                ></a>
                              </li>
                              <li>
                                <a
                                  href="invest.php?ref=<?php echo $row['ref_id']?>"
                                  class="btn btn-secondary"
                                  ><span>Invest &amp; Earn</span>
                                  <em
                                    class="icon bx bx-right-arrow-alt d-none d-sm-inline-block"
                                  ></em
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div
                        class="card card-full card-bordered card-wg on-bottom is-base"
                      >
                        <div class="card-inner">
                          <div class="card-title-group">
                            <div class="card-title">
                              <h5 class="nk-wgacc-title">Total Deposit</h5>
                            </div>
                            <div class="card-tools">
                              <em
                                class="icon bx bx-info-circle fs-13px text-soft nk-tooltip"
                                title="The total Deposit amount without under progress."
                              ></em>
                            </div>
                          </div>
                          <div class="card-amount mt-2 mb-1">
                            <span class="amount"
                              >0 <span class="currency">USD</span></span
                            >
                          </div>
                          <div class="card-stats">
                            <div class="card-stats-group g-2">
                              <div class="card-stats-data">
                                <div class="title fw-bold">This Month</div>
                                <div class="amount fw-bold">
                                  0 <span class="currency fw-normal">USD</span>
                                  <span
                                    class="change down tipinfo"
                                    title="Than last month"
                                  >
                                    <em class="icon bx bx-down-arrow-alt"></em
                                    >100%
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="card-stats-ck sm"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-4">
                      <div
                        class="card card-full card-bordered card-wg on-bottom is-warning"
                      >
                        <div class="card-inner">
                          <div class="card-title-group">
                            <div class="card-title">
                              <h5 class="nk-wgacc-title">Total Withdraw</h5>
                            </div>
                            <div class="card-tools">
                              <em
                                class="icon bx bx-info-circle fs-13px text-soft nk-tooltip"
                                title="The total Withdraw amount without under progress."
                              ></em>
                            </div>
                          </div>
                          <div class="card-amount mt-2 mb-1">
                            <span class="amount"
                              >0 <span class="currency">USD</span></span
                            >
                          </div>
                          <div class="card-stats">
                            <div class="card-stats-group g-2">
                              <div class="card-stats-data">
                                <div class="title fw-bold">This Month</div>
                                <div class="amount fw-bold">
                                  0 <span class="currency fw-normal">USD</span>
                                  <span
                                    class="change down tipinfo"
                                    title="Than last month"
                                  >
                                    <em class="icon bx bx-down-arrow-alt"></em
                                    >100%
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="card-stats-ck sm"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="nk-block nk-block-lg">
                  <div class="nk-block-head-sm">
                    <div class="nk-block-between-md g-4">
                      <div class="nk-block-head-content">
                        <h5 class="nk-block-title title">Recent Activity</h5>
                      </div>
                      <div class="nk-block-head-content">
                        <a href="transactions.php?ref=<?php echo $row['ref_id']?>"
                          >See History</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="nk-odr-list card card-bordered">
                    
                    
                    <div class="nk-odr-item">
                      <div class="nk-odr-col">
                        <div class="nk-odr-info">
                          <div class="nk-odr-badge">
                            <span
                              class="nk-odr-icon bg-success-dim text-success icon ic bx bx-arrow-to-right "
                            ></span>
                          </div>
                          <div class="nk-odr-data">
                            <div class="nk-odr-label">
                              <strong class="ellipsis"> Signup Bonus </strong>
                            </div>
                            <div class="nk-odr-meta">
                              <span class="date">Nov 30, 2022</span>
                              <span class="status dot-join"> Completed </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="nk-odr-col nk-odr-col-amount">
                        <div class="nk-odr-amount">
                          <div class="number-md text-s text-success">
                            + 500.00
                            <span class="currency">USD</span>
                          </div>
                          <div class="number-sm">
                            500.00 <span class="currency">USD</span>
                          </div>
                        </div>
                      </div>
                      <div class="nk-odr-col nk-odr-col-action">
                        <!-- <div class="nk-odr-action">
                          <a
                            class="tnx-details"
                            href="javascript:void(0)"
                            data-tnx="UnNlb0FVd2szbEdRYTB1L05pVmhVdz09"
                            ><em class="icon ni ni-forward-ios"></em
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
<?php 
       $sql = mysqli_query($conn, "SELECT * FROM user WHERE ref_id = {$_SESSION['ref_id']}");
       if (mysqli_num_rows($sql) > 0) {
          ($row = mysqli_fetch_assoc($sql));
       
       
       ?>
                <div class="nk-block">
                  <div class="card card-bordered">
                    <div class="card-inner">
                      <div class="nk-refwg-invite">
                        <div class="nk-refwg-head g-3">
                          <div class="nk-refwg-title">
                            <h5 class="title">Refer Us &amp; Earn</h5>
                            <div class="title-sub">
                              Use the below link to invite your friends.
                            </div>
                          </div>
                        </div>
                        <div class="nk-refwg-url">
                          <div class="form-control-wrap">
                            <div
                              class="form-clip clipboard-init"
                              data-clipboard-target="#ref-url"
                              data-success="Copied"
                              data-text="Copy Link"
                            >
                              <em class="clipboard-icon bx bx-copy  "></em>
                              <span class="clipboard-text">Copy Link</span>
                            </div>
                            <div class="form-icon">
                              <em class="icon icon bx bx-link-alt"></em>
                            </div>
                            <input
                              type="text"
                              class="form-control copy-text"
                              id="ref-url"
                              value="http://localhost/investorm/register.php?ref=<?php  echo $ref?>"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

          <div class="nk-footer">
            <div class="container-fluid">
              <div class="nk-footer-wrap">
                <div class="nk-footer-copyright">
                  Dx Coding Web &copy; 2022. All Rights Reserved.
                </div>
                <div class="nk-footer-links">
                  <ul class="nav nav-sm">
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="#faqs"
                        >FAQs</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="h#terms-and-condition"
                        >Terms and Condition</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="#privacy-policy"
                        >Privacy Policy</a
                      >
                    </li>

                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 
<div class="pp-alert pp-bbox-left bg-lighter cookie-banner">
    <div class="container wide-lg">
        <div class="row align-center justify-between gy-2">
            <div class="col-12 text-dark">
                This website uses cookies. By continuing to use this website, you agree to their use. For details, please check our <a href="https://app.investorm.xyz/page/privacy-policy">Privacy Policy</a>.
            </div>refe
            <div class="col-12">
                <ul class="d-flex g-2 justify-content-md-end">
                    <li>
                        <button class="btn btn-primary btn-xs" data-consent="yes">I Agree</button>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>
</div> -->

    <div class="modal fade" role="dialog" id="ajax-modal"></div>
    <script type="text/javascript">
      const updateSetting = "https://app.investorm.xyz/update/setting",
        upreference = "https://app.investorm.xyz/profile/preference",
        getTnxDetails = "https://app.investorm.xyz/transactions/details",
        msgwng = "Sorry, something went wrong!",
        msgunp = "Unable to process your request.",
        consentURI = "https://app.investorm.xyz/policy-consent";
    </script>
    <script src="https://app.investorm.xyz/assets/js/bundle.js?ver=133"></script>
    <script src="https://app.investorm.xyz/assets/js/app.js?ver=133"></script>
    <script src="https://app.investorm.xyz/assets/js/charts.js?ver=133"></script>
  </body>
</html>
