<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
require 'PHPMailer/PHPMailerAutoload.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $name = $user['name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
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
        // $mail->setFrom('hello@alwayssahi.com', 'Always Sahi');
        // $mail->addAddress($email, $name);                  // Add a recipient
        //$mail->addAddress('ellen@example.com');                // Name is optional
        // $mail->addReplyTo('hello@alwayssahi.com', 'Always Sahi');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        // $mail->isHTML(true);                                     // Set email format to HTML

        // $mail->Subject = 'Password Reset Link ( alwayssahi.com )';
        // $mail->Body    = 'Hello '.$name.',<br>You have requested password reset!<br>Please click this link to reset your password:<br>http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;
        // $mail->AltBody = 'Hello '.$name.', You have requested password reset! Please click this link to reset your password: http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;

        // if(!$mail->send()) {
        //     echo 'Message could not be sent.';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        // } else {
        //     echo 'Message has been sent';
        // }

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">
    <a href="index.php" class="btn" style="background:transparent;border:none;color:white;padding: 5px 5px;font-size: 20px;cursor: pointer;"><i class="fas fa-angle-double-left"></i></a>
    <h1>Reset Your Password</h1>

    <form action="forgot.php" method="post">
      <div class="field-wrap">
        <label>
          Email Address<span class="req">*</span>
        </label>
        <input type="email"required autocomplete="off" name="email"/>
      </div>
      <div class="input-group">
        <button class="button button-block"/>Reset</button>
      </div>
    </form>
  </div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
