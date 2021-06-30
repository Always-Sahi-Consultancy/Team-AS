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
$UID = $mysqli->escape_string($_POST['sID']);
$name = $mysqli->escape_string($_POST['name']);
$email = $mysqli->escape_string($_POST['email']);
$phone = $mysqli->escape_string($_POST['telephone']);
$pan = $mysqli->escape_string($_POST['pan']);
$adhaar = $mysqli->escape_string($_POST['aadhaar']);
$address = $mysqli->escape_string($_POST['address']);
$pin = $mysqli->escape_string($_POST['pin']);
$city = $mysqli->escape_string($_POST['city']);
$dob = $mysqli->escape_string($_POST['dob']);
$ac_no = $mysqli->escape_string($_POST['ac_no']);
$ifsc = $mysqli->escape_string($_POST['ifsc']);
$upload = $mysqli->escape_string($_POST['upload']);
$password = $mysqli->escape_string(password_hash($_POST[$randPass], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );


// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (name, email, password, hash) " 
            . "VALUES ('$name','$email','$password', '$hash')";
    $sqldetails = "INSERT INTO details (UID, name, email, phone, pan, aadhaar, address, pin, city, dob, ac_no, ifsc, upload) " 
            . "VALUES ('$UID','$name','$email','$phone','$pan','$aadhaar','$address','pin','city','dob','ac_no','ifsc','upload')";

    // Add user to the database
    if ( $mysqli->query($sql) && $mysqli->query($sqldetails)){

        $_SESSION['active_email'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = false; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $mail = new PHPMailer();
        // SMTP Settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.hostinger.com';                   // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'hello@alwayssahi.com';             // SMTP username
        $mail->Password = 'hello@AS@sol#17';                  // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        // Email Settings
        $mail->setFrom('hello@alwayssahi.com', 'Always');
        $mail->addAddress($email, $name);                  // Add a recipient
        //$mail->addAddress('ellen@example.com');                // Name is optional
        $mail->addReplyTo('hello@alwayssahi.com', 'Always');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                     // Set email format to HTML

        $mail->Subject = 'Account Verification';
        $mail->Body    = 'Hello '.$name.',<br>Please click this link to verify your account:<br>http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // if(!$mail->send()) {
        //     echo 'Message could not be sent.';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        // } else {
        //     echo 'Message has been sent';
        // }
        header("location: profile.php"); 

    } 
    else{
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}