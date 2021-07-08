<?php
/* Displays user information and some useful messages */
session_start();
require 'db.php';

// User auto logout after Session Timeout
if ((time() - $_SESSION['login_time']) > 900) {
  header("Location: logout.php");
} else {
  $_SESSION['login_time'] = time();
}

// Check if user is logged in using the session variable
if ($_SESSION['logged_in'] != 1) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
} else {
  // Makes it easier to read
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $phone = $_SESSION['phone'];
  $active_email = $_SESSION['active_email'];
  $uid = $_SESSION['uid'];
  $level = $_SESSION['level'];
  $currPCP = $_SESSION['currPCP'];
  $currGCP = $_SESSION['currGCP'];
  $currTCP = $_SESSION['currTCP'];
  $totalPCP = $_SESSION['totalPCP'];
  $totalGCP = $_SESSION['totalGCP'];
  $totalTCP = $_SESSION['totalTCP'];
  $totalSales = $_SESSION['totalSales'];
  $totalEarn = $_SESSION['totalEarn'];
  $totalJoin = $_SESSION['totalJoin'];
  $target = $_SESSION['target'];
}
?>
<html lang="en">

<head>
  <title>IAC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="menu.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand navbar-dark bg-blue"> <a href="#menu-toggle" id="menu-toggle"
      class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button"
      data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false"
      aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarsExample02">
      <form class="form-inline my-2 my-md-0"> </form>
    </div>
    <p>
      <?php

      // Display message about account verification link only once
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];

        // Don't annoy the user with more messages upon page refresh
        unset($_SESSION['message']);
      }

      ?>
    </p>

    <?php

    // Keep reminding the user this account is not active, until they activate
    if (!$active_email) {
      echo
      '<div class="info" style="color: pink;display: box;text-align: center;padding: 5px;margin-top: -20px;margin-bottom: 15px;border: 1px solid red;background: #66131c;">
        Account is unverified, please confirm your email by clicking
        on the email link!
        <a
        </div>';
    }

    ?>
  </nav>
  <div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li>
          <div class="logoC justify-content-center">
            <img class="logoImg" src="img/Background Less.png">
            <p class="logoText">An ISO 9001:2015 Certified & MCA Registered</p>
            <p class="package">Always Sahi</p>
          </div>
        </li>
        <li class="as">A Package Escape</li>
        <li><a class="active" href="dashboard.php" onclick="tabs(1)">Dashboard</a> </li>
        <li> <a href="dashboard.php?tab=mycourses" id="mycourses" onclick="tabs(2)">My Courses</a> </li>
        <li> <a href="dashboard.php?tab=referal" onclick="tabs(3)">Referal link</a> </li>
        <li> <a href="dashboard.php?tab=ass_join" onclick="tabs(4)">Associate Joining</a> </li>
        <li> <a href="dashboard.php?tab=month_report" onclick="tabs(5)">Monthly Reports</a></li>
        <li>
          <a href="dashboard.php?tab=requests" onclick="show()">Requests
          </a>
          <ul class="requestList" id="requestList">
            <li> <a href="dashboard.php?tab=mobile_change" onclick="tabs(9)">Mobile change</a></li>
            <li> <a href="dashboard.php?tab=bank_change" onclick="tabs(10)">Bank change</a></li>
          </ul>
        </li>
        <li> <a href="dashboard.php?tab=support" onclick="tabs(7)">Supports</a> </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid1">
        <div class="content" id="content">
          <div class="row">
            <div class="col-md-3">
              <div class="heading1"> ALWAYS SAHI</div>
            </div>
            <div class="col-md-9 head">
              <p class="associateId head">
                <?= $id ?>
              </p>
              <a href="logout.php" class="logout head">LOGOUT</a>
            </div>
          </div>
          <div class="row line"></div>
          <div class="row line"></div>

          <div id="showDownline">
          <?php 
            if (isset($_REQUEST['user_id'])) {
              $level_sponsor = $_REQUEST['user_id'];
              if (checkdownline($level_sponsor, $id)) {
                // continue;
              } else {
                $level_sponsor = $id;
              }
            } else {
              $level_sponsor = $id;
            }
          ?>
            <div class="row MV" style="margin-bottom: 20px;">
              <div>Downline of ID: <?= $level_sponsor?></div>
            </div>
            <div class="row container-1">
              <table class="col-md-12 table1">
                <thead>
                  <tr>
                    <th class="text-center" rowspan="3">Name</th>
                    <th class="text-center" rowspan="3">Downline</th>
                    <th class="text-center" rowspan="3">% Level</th>
                    <th class="text-center" colspan="3">Current Month Business</th>
                    <th class="text-center" colspan="3">Total Business</th>
                  </tr>
                  <tr>
                    <th class="text-center">Personal</th>
                    <th class="text-center">Group</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Personal</th>
                    <th class="text-center">Group</th>
                    <th class="text-center">Total</th>
                  </tr>
                </thead>
                <tbody>
                <?php $data = $mysqli->query("SELECT * FROM dash WHERE UID='$level_sponsor'");?>
                  <?php 
                    if ($data->num_rows > 0) {
                      while ($user_details = $data->fetch_assoc()) 
                      { ?>
                        <tr>
                          <td class="text-center"><?php echo $user_details['name'] ?></td>
                          <td class="text-center"><a href="downline.php?user_id=<?= $user_details['id']?>"><button class="btn btn-success">Down</button></a></td>
                          <td class="text-center"><?php echo $user_details['level'] ?></td>
                          <td class="text-center"><?php echo $user_details['currPCP'] ?></td>
                          <td class="text-center"><?php echo $user_details['currGCP'] ?></td>
                          <td class="text-center"><?php echo $user_details['currTCP'] ?></td>
                          <td class="text-center"><?php echo $user_details['totalPCP'] ?></td>
                          <td class="text-center"><?php echo $user_details['totalGCP'] ?></td>
                          <td class="text-center"><?php echo $user_details['totalTCP'] ?></td>
                        </tr> <?php
                      } 
                    } else { ?>
                      <tr>
                        <td class="text-center" colspan="9" style="color: red;"><b>Data Not Available</b></td>
                      </tr> <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    function checkdownline($user_id, $login_id) { 
      global $userDetail, $mysqli;
      $data = $mysqli->query("SELECT * FROM dash WHERE id='$user_id'");
      if ($data->num_rows > 0) {
        $userDetail = $data->fetch_assoc();
        $sponID = $userDetail['UID'];
        while ($sponID != 0) {
          if ($sponID == $login_id) {
            return true;
          } else {
            $data = $mysqli->query("SELECT * FROM dash WHERE id='$sponID'");
            $userDetail = $data->fetch_assoc();
            $sponID = $userDetail['UID'];
          }
        }
        if ($sponID == 0) {
          return false;
        }
      } else {
        return false;
      }
    }
  ?>

</body>

</html>