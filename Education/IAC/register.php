<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
*/
require 'PHPMailer/PHPMailerAutoload.php';

// Set session variables to be used on profile.php page
$_SESSION['id'] = $_POST['id'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['name'] = $_POST['name'];

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

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

// We know user email exists if the rows returned are more than 0
if ($result->num_rows > 0) {
    echo '<script>alert("User with this email already exists!")</script>';
}
else { // Email doesn't already exist in a database, proceed...

    $sqlusers = "INSERT INTO users (name, email, password, hash) "
            . "VALUES ('$name', '$email', '$password', '$hash')";

    $sqldetails = "INSERT INTO details (UID, name, email, phone, pan, aadhaar, address, pin, city, dob, ac_no, ifsc) "
            . "VALUES ('$UID', '$name', '$email', '$phone', '$pan', '$aadhaar', '$address', '$pin', '$city', '$dob', '$ac_no', '$ifsc')";
    
    // Add user to the database
    if($mysqli->query($sqlusers) && $mysqli->query($sqldetails)){
        echo '<script>alert("New User Account created")</script>';

        // Send registration confirmation link (verify.php)
        // $mail = new PHPMailer();
        // SMTP Settings
        // $mail->isSMTP();                                      // Set mailer to use SMTP
        // $mail->Host = 'smtp.hostinger.com';                   // Specify main and backup SMTP servers
        // $mail->SMTPAuth = true;                               // Enable SMTP authentication
        // $mail->Username = 'hello@alwayssahi.com';             // SMTP username
        // $mail->Password = 'noPasswordSorry';                  // SMTP password
        // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        // $mail->Port = 465;                                    // TCP port to connect to

        // Email Settings
        // $mail->setFrom('hello@alwayssahi.com', 'Always');
        // $mail->addAddress($email, $name);                  // Add a recipient
        //$mail->addAddress('ellen@example.com');                // Name is optional
        //$mail->addReplyTo('hello@alwayssahi.com', 'Always');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        // $mail->isHTML(true);                                     // Set email format to HTML

        // $mail->Subject = 'Account Verification';
        // $mail->Body    = 'Hello '.$name.',<br>Please click this link to verify your account:<br>http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;
        // $mail->AltBody = 'Hello '.$name.',Please click this link to verify your account:http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;

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
