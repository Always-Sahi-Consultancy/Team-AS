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

$_SESSION['fileaadhaar'] = 'fileaadhaar';
$_SESSION['filepan'] = 'filepan';
$_SESSION['filebr'] = 'filebr';
$_SESSION['filecertificate'] = 'filecertificate';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['register'])) { // user loggin in
    require 'register.php';
  }
  if (isset($_POST['support'])) { 
    require 'support.php';
  }
  if (isset($_POST['showDownline'])) { 
    $_Session['userID'] = $user_details['id'];
  }
  // if (isset($_POST['bank_details'])) {
  //   require 'bank.php';
  // }
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

  // Fetching all courses from database which matches email
  $result = $mysqli->query("SELECT * FROM course_log WHERE email='$email'");
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

  <nav class="navbar navbar-expand navbar-dark bg-blue"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
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
        <li><a class="active" href="#dashboard.php" onclick="tabs(1)">Dashboard</a> </li>
        <li> <a href="#dashboard.php?tab=mycourses" id="mycourses" onclick="tabs(2)">My Courses</a> </li>
        <li> <a href="#dashboard.php?tab=referal" onclick="tabs(3)">Referal link</a> </li>
        <li> <a href="#dashboard.php?tab=ass_join" onclick="tabs(4)">Associate Joining</a> </li>
        <li> <a href="#dashboard.php?tab=month_report" onclick="tabs(5)">Monthly Reports</a></li>
        <li>
          <a href="#dashboard.php?tab=requests" onclick="show()">Requests
          </a>
          <ul class="requestList" id="requestList">
            <li> <a href="#dashboard.php?tab=mobile_change" onclick="tabs(9)">Mobile change</a></li>
            <li> <a href="#dashboard.php?tab=bank_change" onclick="tabs(10)">Bank change</a></li>
          </ul>
        </li>
        <li> <a href="#dashboard.php?tab=support" onclick="tabs(7)">Supports</a> </li>
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
              <p class="associateId head"><?= $id ?></p>
              <a href="logout.php" class="logout head">LOGOUT</a>
            </div>
          </div>
          <div class="row line"></div>
          <div id="Dashboard">
            <div class="row Dashboard">
              <div class="col-md-4 Dh">DASHBOARD / <a href="">BROCHURE</a></div>
              <div class="col-md-3"></div>
              <div class="col-md-5">
                <p class="Linfo">
                  <!-- <a href="#" onclick="ass()" class="changePassword">Associate</a> / --> <a href="#" class="changePassword" onclick="iac()"> IAC</a> / <a href="#" onclick="tabs(8)" class="changePassword"> KYC</a>
                </p>
              </div>
            </div>

            <div class="row line2"></div>

            <center>
              <!--Total business-->
              <div class="row justify-content-center joinings">
                <div class="col-md-3 align-right S-color">
                  <div id="align-right1">TOTAL SALES</div>
                  <div class=""> <?= $totalSales ?></div>
                </div>
                <div class="col-md-3 align-right E-color">
                  <div>TOTAL EARNINGS</div>
                  <div><?= $totalEarn ?></div>
                </div>
                <div class="col-md-3 align-right J-color">
                  <div>TOTAL JOININGS</div>
                  <div> <?= $totalJoin ?></div>
                </div>
              </div>
              <!--ASSOCIATES BUSINESS-->
              <div id="AssociateBusiness">
                <div class="row">
                  <div class="headings col-md-3">Associates Business</div>
                  <div class="target col-md-8">Target <?= $target ?></div>
                </div>
                <!--ABOUT YOU TABLE-->
                <div class="row container-1">
                  <table class="col-md-12 table1">
                    <thead>
                      <tr>
                        <th class="text-center" rowspan="3">Name</th>
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
                      <tr>
                        <td class="text-center"><?= $name ?></td>
                        <td class="text-center"><?= $level ?></td>
                        <td class="text-center"><?= $currPCP ?></td>
                        <td class="text-center"><?= $currGCP ?></td>
                        <td class="text-center"><?= $currTCP ?></td>
                        <td class="text-center"><?= $totalPCP ?></td>
                        <td class="text-center"><?= $totalGCP ?></td>
                        <td class="text-center"><?= $totalTCP ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="down row col-md-12">
                    <div class="col-md-10"></div>
                    <div class="col-md-2"><button onclick="downline()" class="btn btn-primary">DOWNLINE</button></div>
                  </div>
                </div>
              </div>

              <!--IAC BUSINESS-->
              <div id="IAC-business">
                <div class="row">
                  <div class="headings col-md-3">IAC Business</div>
                </div>
                <!--ABOUT YOU TABLE-->
                <div class="row iac-container">
                  <div class=" col-md-4">
                    <div class="iachead">
                      <p class="commission">Highest commission % - 0</p>

                    </div>
                  </div>
                  <div class=" col-md-4">
                    <select id="city" class="iachead" name="city" required>
                      <option value="" disabled selected hidden>Eligibility</option>
                      <?php
                        while ($data = $result->fetch_assoc()) {
                          userEligibility($data['course']);
                        }
                      ?>
                    </select>
                  </div>
                  <div class=" col-md-4">
                    <div class="iachead">
                      <p class="target2">Target - <?= $target ?></p>
                    </div>
                  </div>
                </div>



              </div>
            </center>



            <!--UPGRADE OPTION-->
            <div class="row col-md-12 ">
              <div class="col-md-3 col-sm-10 upgrade">
                <img class="gift bounce" src="img/giftbox.png">
                <a class="plan" href="#"><span class="fast-flicker">UP</span>GRADE <span class="flicker">Y</span>OURSELF</a>
              </div>
            </div>
          </div>
          <center>
            <!--VERIFICATION LINKS-->
            <div id="verifications">
              <div class="home row ">
                <div class="col-md-9"></div>
                <div class="link col-md-2"> <a href="">HOME</a></div>
              </div>
              <div class="row justify-content-center statusDetails">
                <div class="col-md-3 statusContainer">
                  <p class="">
                  <div class="heads">KYC Verification Status</div>
                  <a href="">Click here for your KYC verification</a>
                  </p>
                </div>
                <div class="col-md-3 statusContainer">
                  <p class="">
                  <div class="heads">Bank account Verification Status</div>
                  <a href="">Click here for your Bank Account verification</a>
                  </p>
                </div>
                <div class="col-md-3 statusContainer">
                  <p class="statusDetails">
                  <div class="heads">PAN Verification Status</div>
                  <a href="">Click here for your PAN verification</a>
                  </p>
                </div>
              </div>
            </div>


            <!--RESIGTER FORM-->
            <!--ASSOCIATES FORM-->
            <div id="ASSRegistrationForm">
              <div class="row register">
                <div class="RF col-md-10">REGISTRATION FORM</div>
                <div class="link home"> <a href="">HOME</a></div>
              </div>

              <!--Mobile Verification-->
              <!-- <div class="row MV">
                <div>Mobile OTP Verification</div>
              </div>
              <div class="row justify-content-center MobileV col-md-6">
                <div class="titles">Mobile</div>
                <input type="tel" name="telephone" placeholder="Mobile" pattern="[0-9]{10}" autocomplete="off" required>
              </div>
              <div id="OTP5" style="display: none;">
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Enter 6 digit OTP </div>
                  <input type="number" name="OTP" placeholder="Enter OTP" maxlength="6" minlength="6">
                  <h1 id="countdown"></h1>
                </div>
              </div>
              <div class="row justify-content-center col-md-6">
                <button onclick="OTP(5)" name="submit" class="BO5" id="BO5">Send OTP</button>
                <button type="submit" onclick="OTP(5)" name="verify" class="SU" id="SU">SUBMIT</button>
              </div>-->

              <form method="post" enctype="multipart/form-data">
                <!--upline Information-->
                <div class="row MV">
                  <div>Upline Information</div>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upline ID </div>
                  <input type="number" name="UID" value="<?= $id ?>" placeholder="Upline Id" autocomplete="off" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles1">Upline Name</div>
                  <input type="text" id="sname" value="<?= $name ?>" placeholder="Upline Name" autocomplete="off" required>
                </div>
                <div class="row MV">
                  <div>Personal Information</div>
                </div>
                <div class="col-md-12">
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Name</div>
                    <input type="text" id="name" name="name" placeholder="Name" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Email</div>
                    <input type="email" id="email" name="email" placeholder="Email" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Mobile</div>
                    <input type="tel" name="telephone" placeholder="Mobile" pattern="[0-9]{10}" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">PAN</div>
                    <input type="text" id="pan" name="pan" placeholder="PAN No." autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Aadhaar number</div>
                    <input type="number" id="AadharNO" name="aadhaar" placeholder="Aadhaar No." autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Address</div>
                    <textarea id="address" name="address" placeholder="Address" autocomplete="off" required></textarea>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">PIN</div>
                    <input type="number" id="PIN" name="pin" placeholder="PIN code" minlength="6" maxlength="6" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">City</div>
                    <select id="city" name="city" autocomplete="off" required>
                      <option value="Pune">Pune</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Bangolore">Bangalore</option>
                    </select>
                  </div>
                  <div class="row justify-content-center MobileV col-md-5">
                    <div class="titles">Date of Birth</div>
                    <input type="date" placeholder="DOB" name="dob" required>
                  </div>
                  <!-- <div class="row justify-content-center MobileV col-md-6">
                    <button type="submit" onclick="next(1)" name="next">NEXT</button>
                  </div> -->
                </div>
                <!--BANK DETAILS-->
                <div class="row MV">
                  <div>Bank Details</div>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Account No.</div>
                  <input type="number" id="AccNo" name="ac_no" placeholder="Account no." minlength="12" maxlength="12" autocomplete="off" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">IFSC Code</div>
                  <input type="text" id="IFSCCode" name="ifsc" placeholder="IFSC code" minlength="6" maxlength="10" autocomplete="off" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upload Aadhaar</div>
                  <input type="file" id="<?php echo $_SESSION['fileaadhaar'];?>" name="uploadaadhaar" onchange="return fileValidation(this.id)" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upload PAN</div>
                  <input type="file" id="<?php echo $_SESSION['filepan'];?>" name="uploadpan" onchange="return fileValidation(this.id)" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upload Bank Passbook/Receipt</div>
                  <input type="file" id="<?php echo $_SESSION['filebr'];?>" name="uploadbr" onchange="return fileValidation(this.id)" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">AS Certificate</div>
                    <input type="file" id="<?php echo $_SESSION['filecertificate'];?>" name="uploadcertificate[]" multiple="" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <button type="submit" name="register">SUBMIT</button>
                </div>
              </form>
            </div>



            <!--RESIGTER FORM-->
            <!--IAC FORM-->
            <div id="IACRegistrationForm">
              <div class="row register" id="RegisterForm">
                <div class="RF col-md-10">REGISTRATION FORM</div>
                <div class="link"> <a href="">HOME</a></div>
              </div>
              <!--Mobile Verification-->
              <!-- <div class="row MV">
                <div>Mobile OTP Verification</div>
              </div>
              <div class="row justify-content-center MobileV col-md-6">
                <div class="titles">Mobile</div>
                <input type="tel" name="telephone" placeholder="Mobile" pattern="[0-9]{10}" autocomplete="off" required>
              </div>
              <div id="OTP5" style="display: none;">
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Enter 6 digit OTP </div>
                  <input type="number" name="OTP" placeholder="Enter OTP" maxlength="6" minlength="6">
                  <h1 id="countdown"></h1>
                </div>
              </div>
              <div class="row justify-content-center col-md-6">
                <button onclick="OTP(5)" name="submit" class="BO5" id="BO5">Send OTP</button>
                <button type="submit" onclick="OTP(5)" name="verify" class="SU" id="SU">SUBMIT</button>
              </div>-->
              
              <form method="post" enctype="multipart/form-data">
                <!--upline Information-->
                <div class="row MV">
                  <div>Upline Information</div>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upline ID </div>
                  <input type="number" name="sID" placeholder="Upline Id" maxlength="6" minlength="6" autocomplete="off" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles1">Upline Name</div>
                  <input type="text" id="sname" placeholder="Upline Name" autocomplete="off" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Slope</div>
                  <select id="eligible" name="slope" required>
                    <option value="Tally">Tally</option>
                    <option value="BankAudit">Bank Audit</option>
                  </select>
                </div>
                <div class="row MV">
                  <div>Personal Information</div>
                </div>
                <div class="col-md-12">
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Name</div>
                    <input type="text" id="name" name="name" placeholder="Name" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Email</div>
                    <input type="email" id="email" name="email" placeholder="Email" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Mobile</div>
                    <input type="tel" name="telephone" placeholder="Mobile" pattern="[0-9]{10}" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">PAN</div>
                    <input type="text" id="pan" name="pan" placeholder="PAN No." autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Aadhaar number</div>
                    <input type="number" id="AadharNO" name="aadhaar" placeholder="Aadhaar No." autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles1">Address</div>
                    <textarea id="address" name="address" placeholder="Address" autocomplete="off" required></textarea>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">PIN</div>
                    <input type="number" id="PIN" name="pin" placeholder="PIN code" minlength="6" maxlength="6" autocomplete="off" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">City</div>
                    <select id="city" name="city" autocomplete="off" required>
                      <option value="Pune">Pune</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Bangolore">Bangalore</option>
                    </select>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">AS Certificate</div>
                    <input type="file" id="<?php echo $_SESSION['filecertificate'];?>" name="uploadcertificate[]" multiple="" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Date of Birth</div>
                    <input type="date" placeholder="DOB" name="dob" required>
                  </div>
                  <!-- <div class="row justify-content-center MobileV col-md-6">
                    <button type="submit" onclick="next(1)" name="next">NEXT</button>
                  </div> -->
                </div>
                <!--BANK DETAILS-->
                <div class="row MV">
                  <div>Bank Details</div>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Account No.</div>
                  <input type="number" id="AccNo" name="ac_no" placeholder="Account no." minlength="12" maxlength="12" autocomplete="off" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">IFSC Code</div>
                  <input type="text" id="IFSCCode" name="ifsc" placeholder="IFSC code" minlength="6" maxlength="10" autocomplete="off" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upload Aadhaar</div>
                  <input type="file" id="<?php echo $_SESSION['fileaadhaar'];?>" name="uploadaadhaar" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upload PAN</div>
                  <input type="file" id="<?php echo $_SESSION['filepan'];?>" name="uploadpan" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Upload Bank Passbook/Receipt</div>
                  <input type="file" id="<?php echo $_SESSION['filebr'];?>" name="uploadbr" required>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <button type="submit" name="register">SUBMIT</button>
                </div>
              </form>
            </div>


            <!--MY COURSES-->
            <div class="MyCourses" id="MyCourses">
              <div class="home row ">
                <div class="col-md-9"></div>
                <div class="link col-md-2"> <a href="">HOME</a></div>
              </div>
              <div class="row col-md-10">
                <?php
                  while ($dataCourse = $result->fetch_assoc()) {
                    userCourse($dataCourse['course'], $dataCourse['course_img']);
                  }
                ?>
              </div>
            </div>

            <!--REFERAL LINK-->
            <div class="row col-md-12" id="ReferalLink">
              <div class="home row ">
                <div class="col-md-9"></div>
                <div class="link col-md-3"> <a href="">HOME</a></div>
              </div>
              <div class="referalLink col-md-2 heading">REFERAL LINK
              </div>
              <div class="row line2"></div>
              <div class="row col-md-10">
                <div class="col-md-3 rf">
                  Referal Link
                </div>
                <div class="col-md-8">
                  <input type="text" id="ReferralInput" value="http://localhost/AS/Education/IAC/course.php?refer=<?= $id ?>&category=Accounts_%26_Finance" placeholder="Referal Link" class="linkIn" readonly>
                </div>
                <div class="col-md-1">
                  <button class="btn btn-primary copy" onclick="copyReferral()">COPY</button>
                </div>
              </div>
            </div>


            <!--REQUESTS-->
            <div id="requests">
              <div id="mobileChange">
                <div class="row MV">
                  <div>Mobile No. Change</div>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Mobile</div>
                  <input type="tel" name="telephone" placeholder="Mobile" pattern="[0-9]{10}" required>
                </div>
                <div id="OTP2">
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Enter 6 digit OTP </div>
                    <input type="number" name="OTP" placeholder="Enter OTP" maxlength="6" minlength="6" required>
                  </div>
                </div>
                <div class="row col-md-10">
                  <div class=" justify-content-center col-md-5">
                    <button type="submit" onclick="OTP(2)" name="submit" class="BO2" id="BO2">Send OTP</button>
                  </div>
                  <div class="justify-content-center col-md-4">
                    <button type="submit" onclick="SU(2)" name="submit" class="SU3" id="SU3">Submit</button>
                  </div>
                </div>
                <div id="new">
                  <div class="row justify-content-center MobileV col-md-7">
                    <div class="titles">Enter new Number</div>
                    <input type="tel" name="telephone" placeholder="New Mobile" pattern="[0-9]{10}" required>
                  </div>
                  <div class="row justify-content-center col-md-4">
                    <button type="submit" onclick="" name="submit" class="btn btn-primary Final" id="Final">SUBMIT</button>
                  </div>
                </div>
              </div>

              <div id="BankChange">
                <div class="row MV">
                  <div>Bank Change Request</div>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Mobile</div>
                  <input type="tel" name="telephone" placeholder="Mobile" pattern="[0-9]{10}" required>
                </div>
                <div id="OTP3">
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Enter 6 digit OTP </div>
                    <input type="number" name="OTP" placeholder="Enter OTP" maxlength="6" minlength="6" required>
                  </div>
                </div>
                <div class=" row col-md-10">
                  <div class="justify-content-center col-md-3">
                    <button type="submit" onclick="OTP(3)" name="submit" class="BO3" id="BO3">Send OTP</button>
                  </div>
                  <div class="justify-content-center col-md-2">
                    <button type="submit" onclick="SU(3)" name="submit" class="SU3" id="SU3">Submit</button>
                  </div>
                </div>
                <div id="bankdetail">
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">New Account No.</div>
                    <input type="number" id="AccNo" placeholder="Account no." minlength="12" maxlength="12" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">New IFSC Code</div>
                    <input type="number" id="IFSCCode" placeholder="IFSC code" minlength="6" maxlength="10" required>
                  </div>
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Uplaod</div>
                    <input type="number" id="PIN" minlength="6" maxlength="6" required>
                  </div>
                </div>
              </div>


              <div id="resignation">
                <div class="row MV">
                  <div>Resignation Request</div>
                </div>
                <div class="row justify-content-center MobileV col-md-6">
                  <div class="titles">Mobile</div>
                  <input type="tel" name="telephone" placeholder="Mobile" pattern="[0-9]" required>
                </div>
                <div id="OTP4">
                  <div class="row justify-content-center MobileV col-md-6">
                    <div class="titles">Enter 6 digit OTP </div>
                    <input type="number" name="OTP" placeholder="Enter OTP" maxlength="6" minlength="6" required>
                  </div>
                </div>
                <div class="row justify-content-center col-md-5">
                  <button type="submit" onclick="OTP(4)" name="submit" class="BO4" id="BO4">Send OTP</button>
                </div>
              </div>
            </div>


          </center>

          <!--support-->

          <div class="generateticket" id="generateticket">
            <div class="home row ">
              <div class="col-md-9"></div>
              <div class="link col-md-2"> <a href="">HOME</a></div>
            </div>
            <div class="row MV">
              Generate ticket
            </div>
            <form method="post">
              <div class="row justify-content-center MobileV col-md-6">
                <div class="titles">ID No.</div>
                <input type="number" value="<?= $id ?>" id="ID" name="id" placeholder="ID No." readonly>
              </div>
              <div class="row justify-content-center MobileV col-md-6">
                <div class="titles">Name</div>
                <input type="text" value="<?= $name ?>" id="name" name="name" readonly>
              </div>
              <div class="row justify-content-center MobileV col-md-5">
                <div class="titles">Mobile</div>
                <input type="tel" value="<?= $phone ?>" name="telephone" pattern="[0-9]{10}" readonly>
              </div>
              <div class="row justify-content-center MobileV col-md-6">
                <div class="titles">Description</div>
                <textarea type="text" id="description" name="description" placeholder="Description" required></textarea>
              </div>
              <div class="row col-md-10">
                <div class=" col-md-3">
                  <button class="btn btn-primary copy" onclick="supportTicket()" name="support">GENERATE</button>
                </div>
                <div class="col-md-3">
                  <a href="dashboard.php"><button class="btn btn-danger copy">CANCEL</button></a>
                </div>
              </div>
            </form>
          </div>

          <!--DOWNLINE-->
          <div id="downline">
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

    function userCourse($courseName, $courseImage) {
      $elementCourse = "

      <div class=\"course col-md-3\">
        <div>
          <img src=\"$courseImage\" class=\"courseImg\" alt=\"$courseName\">
        </div>
      </div>

      ";

      echo $elementCourse;
    }

    function userEligibility($courseName) {
      $element = "

      <option value=\"$courseName\">$courseName</option>

      ";

      echo $element;
    }
  ?>

  <script src="menu.js" type="text/javascript"></script>

</body>

</html>