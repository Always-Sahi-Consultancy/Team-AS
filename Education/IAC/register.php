<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
*/

require 'db.php';
require 'PHPMailer/PHPMailerAutoload.php';

// random password generate
$passStr = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
$randPass = substr(str_shuffle($passStr), 0, 6);

// Escape all $_POST variables to protect against SQL injections
$UID = $mysqli->escape_string($_POST['UID']);
$name = $mysqli->escape_string($_POST['name']);
$email = $mysqli->escape_string($_POST['email']);
$phone = $mysqli->escape_string($_POST['telephone']);
$pan = $mysqli->escape_string($_POST['pan']);
$aadhaar = $mysqli->escape_string($_POST['aadhaar']);
$address = $mysqli->escape_string($_POST['address']);
$pin = $mysqli->escape_string($_POST['pin']);
$city = $mysqli->escape_string($_POST['city']);
$dob = date("Y-m-d", strtotime($_POST['dob']));
$ac_no = $mysqli->escape_string($_POST['ac_no']);
$ifsc = $mysqli->escape_string($_POST['ifsc']);

$password = $mysqli->escape_string(password_hash($randPass, PASSWORD_BCRYPT));
$hash = $mysqli->escape_string(md5(rand(0,1000)));

$fileaadhaar = $_FILES['uploadaadhaar'];
$filepan = $_FILES['uploadpan'];
$filebr = $_FILES['uploadbr'];
$filecertificate = $_FILES['uploadcertificate'];

// Set session variables to be used on upload.php page
if (isset($fileaadhaar)) {
    $_SESSION['email'] = $email;
    $_SESSION['file'] = 'uploadaadhaar';
    $_SESSION['fileID'] = $_SESSION['fileaadhaar'];
    require 'upload.php';
}
if (isset($filepan)) {
    $_SESSION['email'] = $email;
    $_SESSION['file'] = 'uploadpan';
    $_SESSION['fileID'] = $_SESSION['filepan'];
    require 'upload.php';
}
if (isset($filebr)) {
    $_SESSION['email'] = $email;
    $_SESSION['file'] = 'uploadbr';
    $_SESSION['fileID'] = $_SESSION['filebr'];
    require 'upload.php';
}
if (isset($filecertificate)) {
    $_SESSION['email'] = $email;
    $_SESSION['multifile'] = 'uploadcertificate';
    $_SESSION['fileID'] = $_SESSION['filecertificate'];
    require 'uploadmultifile.php';
}

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

// We know user email exists if the rows returned are more than 0
if ($result->num_rows > 0) {
    echo '<script>alert("User with this email already exists!")</script>';
}
else { // Email doesn't already exist in a database, proceed...

    $sqlusers = "INSERT INTO users (name, email, password, hash) "
            . "VALUES ('$name', '$email', '$password', '$hash')";

    $sqldetails = "INSERT INTO details (UID, name, email, phone, pan, aadhaar, address, pin, city, dob, ac_no, ifsc, fileadhaar, filepan, filebr, filecertificate) "
            . "VALUES ('$UID', '$name', '$email', '$phone', '$pan', '$aadhaar', '$address', '$pin', '$city', '$dob', '$ac_no', '$ifsc', '1', '1', '1', '1')";

    $sqldash = "INSERT INTO dash (UID, name, email, phone, level, currPCP, currGCP, currTCP, totalPCP, totalGCP, totalTCP, totalSales, totalEarn, totalJoin, target) "
            . "VALUES ('$UID', '$name', '$email', '$phone', '5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100')";
    
    // Add user to the database
    if($mysqli->query($sqlusers) && $mysqli->query($sqldetails) && $mysqli->query($sqldash)){
        echo '<script>alert("New User Account created")</script>';

        // Send registration confirmation link (verify.php)
        $mail = new PHPMailer();
        // SMTP Settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.hostinger.com';                   // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'hello@alwayssahi.com';             // SMTP username
        $mail->Password = 'noPasswordSorry';                  // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        // Email Settings
        $mail->setFrom('hello@alwayssahi.com', 'Always Sahi');
        $mail->addAddress($email, $name);                  // Add a recipient
        // $mail->addAddress('ellen@example.com');                // Name is optional
        $mail->addReplyTo('hello@alwayssahi.com', 'Always Sahi');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                     // Set email format to HTML

        $mail->Subject = 'Account Verification | (alwayssahi.com)';
        $mail->Body    = "
        
        <!DOCTYPE html>
        <html>
        
        <head>
            <title></title>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
            <style type=\"text/css\">
                @media screen {
                    @font-face {
                        font-family: 'Lato';
                        font-style: normal;
                        font-weight: 400;
                        src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
                    }
        
                    @font-face {
                        font-family: 'Lato';
                        font-style: normal;
                        font-weight: 700;
                        src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
                    }
        
                    @font-face {
                        font-family: 'Lato';
                        font-style: italic;
                        font-weight: 400;
                        src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
                    }
        
                    @font-face {
                        font-family: 'Lato';
                        font-style: italic;
                        font-weight: 700;
                        src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
                    }
                }
        
                /* CLIENT-SPECIFIC STYLES */
                body,
                table,
                td,
                a {
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                }
        
                table,
                td {
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                }
        
                img {
                    -ms-interpolation-mode: bicubic;
                }
        
                /* RESET STYLES */
                img {
                    border: 0;
                    height: auto;
                    line-height: 100%;
                    outline: none;
                    text-decoration: none;
                }
        
                table {
                    border-collapse: collapse !important;
                }
        
                body {
                    height: 100% !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    width: 100% !important;
                }
        
                /* iOS BLUE LINKS */
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: none !important;
                    font-size: inherit !important;
                    font-family: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                }
        
                /* MOBILE STYLES */
                @media screen and (max-width:600px) {
                    h1 {
                        font-size: 32px !important;
                        line-height: 32px !important;
                    }
                }
        
                /* ANDROID CENTER FIX */
                div[style*=\"margin: 16px 0;\"] {
                    margin: 0 !important;
                }
            </style>
        </head>
        
        <body style=\"background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;\">
            <!-- HIDDEN PREHEADER TEXT -->
            <div style=\"display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;\"> We're thrilled to have you here! Get ready to dive into your new account. </div>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <!-- LOGO -->
                <tr>
                    <td bgcolor=\"#FFA73B\" align=\"center\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                            <tr>
                                <td align=\"center\" valign=\"top\" style=\"padding: 40px 10px 40px 10px;\"> </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#FFA73B\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"center\" valign=\"top\" style=\"padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;\">
                                    <h1 style=\"font-size: 48px; font-weight: 400; margin: 2;\">Welcome!</h1> 
                                    <p style=\"margin: 0; padding-bottom: 5px; font-size: 35px;\">".$name."</p>
                                    <img src=\"https://img.icons8.com/clouds/100/000000/handshake.png\" width=\"125\" height=\"120\" style=\"display: block; border: 0px;\" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"left\" style=\"justify-content: center; padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                                    <p style=\"margin: 0; text-align: center;\">We're excited to have you get started. First, you need to confirm your account. Just press the button below.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"left\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 20px 30px 60px 30px;\">
                                                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                    <tr>
                                                        <td align=\"center\" style=\"border-radius: 3px;\" bgcolor=\"#FFA73B\"><a href=\"http://localhost/AS/Education/IAC/verify.php?email=".$email."&hash=".$hash."\" target=\"_blank\" style=\"font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;\">Confirm Account</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 0px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                                    <p style=\"margin: 0;\">If that doesn't work, copy and paste the following link in your browser:</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                                    <p style=\"margin: 0; text-align: center;\"><a href=\"http://localhost/AS/Education/IAC/verify.php?email=".$email."&hash=".$hash."\" target=\"_blank\" style=\"color: #FFA73B;\">http://localhost/AS/Education/IAC/verifyaccount</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                                    <p style=\"margin: 0;\">If you have any questions, then please email us at <a href=\"mailto:hello@alwayssahi.com\" target=\"_blank\" style=\"color: #777777;\">hello@alwayssahi.com</a> or call us at <a href=\"tel:917875036016\" target=\"_blank\" style=\"color: #777777;\">(+91) 8857086790</a> Mon-Fri 10am-6pm, we're always happy to help out.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                                    <p style=\"margin: 0;\">Cheers</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 30px 10px 0px 10px;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                            <tr>
                                <td bgcolor=\"#FFECD1\" align=\"center\" style=\"padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                                    <h2 style=\"font-size: 20px; font-weight: 400; color: #111111; margin: 0;\">Need more help?</h2>
                                    <p style=\"margin: 0;\"><a href=\"https://www.alwayssahi.com/#footer\" target=\"_blank\" style=\"color: #FFA73B;\">We&rsquo;re here to help you out</a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                            <tr>
                                <td bgcolor=\"#f4f4f4\" align=\"left\" style=\"padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;\"> <br>
                                    <!-- <p style=\"margin: 0;\">If these emails get annoying, please feel free to <a href=\"#\" target=\"_blank\" style=\"color: #111111; font-weight: 700;\">unsubscribe</a>.</p> -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        
        </html>
        
        ";

        $mail->AltBody = 'Welcome! '.$name.',<br/>We&rsquo;re excited to have you get started. First, you need to confirm your account. Just click the link given below.<br/>http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash.'<br/><br/>If you have any questions, then please email us at <a href=\"mailto:hello@alwayssahi.com\" target=\"_blank\" style=\"color: #777777;\">hello@alwayssahi.com</a> or call us at <a href=\"tel:917875036016\" target=\"_blank\" style=\"color: #777777;\">(+91) 7875036016</a> Mon-Fri 10am-6pm, we&rsquo;re always happy to help out.';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $_SESSION['message'] = 'Message has been sent';
        }

        // if(!$mail->send()) {
        //     echo 'Message could not be sent.';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        // } else {
        //     echo 'Message has been sent';
        // }
        header("location: dashboard.php"); 
    }
    else {
        echo '<script>alert("Registration Failed!")</script>';
    }
}
