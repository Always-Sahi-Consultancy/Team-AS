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

        // Send reset password link (reset.php)
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

        $mail->Subject = 'Password Reset | (alwayssahi.com)';
        $mail->Body    = "

        <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" style=\"font-family:Montserrat, sans-serif\">
        <head> 
          <meta charset=\"UTF-8\"> 
          <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"> 
          <meta name=\"x-apple-disable-message-reformatting\"> 
          <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> 
          <meta content=\"telephone=no\" name=\"format-detection\"> 
          <title>Forgot Password</title> 
          <!--[if (mso 16)]>
            <style type=\"text/css\">
            a {text-decoration: none;}
            </style>
            <![endif]--> 
          <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
          <!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]--> 
          <!--[if !mso]><!-- --> 
          <link href=\"https://fonts.googleapis.com/css2?family=Montserrat&display=swap\" rel=\"stylesheet\"> 
          <!--<![endif]--> 
          <style type=\"text/css\">
        #outlook a {
          padding:0;
        }
        .es-button {
          mso-style-priority:100!important;
          text-decoration:none!important;
        }
        a[x-apple-data-detectors] {
          color:inherit!important;
          text-decoration:none!important;
          font-size:inherit!important;
          font-family:inherit!important;
          font-weight:inherit!important;
          line-height:inherit!important;
        }
        .es-desk-hidden {
          display:none;
          float:left;
          overflow:hidden;
          width:0;
          max-height:0;
          line-height:0;
          mso-hide:all;
        }
        [data-ogsb] .es-button {
          border-width:0!important;
          padding:10px 20px 10px 20px!important;
        }
        @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120% } h2 { font-size:26px!important; text-align:center; line-height:120% } h3 { font-size:20px!important; text-align:center; line-height:120% } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:14px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class=\"gmail-fix\"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button, button.es-button { font-size:20px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
        </style> 
        </head> 
        <body style=\"width:100%;font-family:Montserrat, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0\"> 
          <div class=\"es-wrapper-color\" style=\"background-color:#F6F6F6\"> 
          <!--[if gte mso 9]>
              <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
                <v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill>
              </v:background>
            <![endif]--> 
          <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top\"> 
            <tr> 
              <td valign=\"top\" style=\"padding:0;Margin:0\"> 
              <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-header\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#F6F6F6;background-repeat:repeat;background-position:center top\"> 
                <tr> 
                  <td align=\"center\" bgcolor=\"#010000\" style=\"padding:0;Margin:0;background-color:#010000\"> 
                  <table class=\"es-header-body\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"> 
                    <tr> 
                      <td align=\"left\" style=\"padding:20px;Margin:0\"> 
                      <!--[if mso]><table style=\"width:560px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:270px\" valign=\"top\"><![endif]--> 
                      <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-left\" align=\"left\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\"> 
                        <tr> 
                          <td class=\"es-m-p0r es-m-p20b\" valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:270px\"> 
                          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                            <tr> 
                              <td align=\"left\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0;font-size:0px\"><a target=\"_blank\" href=\"https://www.alwayssahi.com\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#1376C8;font-size:14px\"><img src=\"https://www.alwayssahi.com/image/Background%20Less.png\" alt=\"Always Sahi Official Logo\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" height=\"47\" title=\"Always Sahi Official Logo\"></a></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table> 
                      <!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:270px\" valign=\"top\"><![endif]--> 
                      <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-right\" align=\"right\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\"> 
                        <tr> 
                          <td align=\"left\" style=\"padding:0;Margin:0;width:270px\"> 
                          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                            <tr> 
                              <td align=\"right\" class=\"es-m-txt-c es-m-p0t\" style=\"padding:0;Margin:0;padding-top:10px;font-size:0\"> 
                              <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-table-not-adapt es-social\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                <tr> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;padding-right:25px\"><a target=\"_blank\" href=\"https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2FAlways-Sahi-Solutions-Private-Limited-100805488788703\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#1376C8;font-size:14px\"><img title=\"Facebook\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/social-icons/logo-colored-bordered/facebook-logo-colored-bordered.png\" alt=\"Fb\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;padding-right:25px\"><a target=\"_blank\" href=\"https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2FAlways-Sahi-Solutions-Private-Limited-100805488788703\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#1376C8;font-size:14px\"><img title=\"Instagram\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/social-icons/logo-colored-bordered/instagram-logo-colored-bordered.png\" alt=\"Inst\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;padding-right:25px\"><a target=\"_blank\" href=\"https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2FAlways-Sahi-Solutions-Private-Limited-100805488788703\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#1376C8;font-size:14px\"><img title=\"Linkedin\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/social-icons/logo-colored-bordered/linkedin-logo-colored-bordered.png\" alt=\"In\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0\"><a target=\"_blank\" href=\"https://t.me/joinalwayssahi\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#1376C8;font-size:14px\"><img title=\"Telegram\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/messenger-icons/logo-colored-bordered/telegram-logo-colored-bordered.png\" alt=\"Telegram\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                </tr> 
                              </table></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table> 
                      <!--[if mso]></td></tr></table><![endif]--></td> 
                    </tr> 
                  </table></td> 
                </tr> 
              </table> 
              <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\"> 
                <tr> 
                  <td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:0;Margin:0;background-color:#ffffff\"> 
                  <table bgcolor=\"#ffffff\" class=\"es-content-body\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:600px\"> 
                    <tr> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:20px;padding-right:20px;padding-bottom:30px\"> 
                      <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:560px\"> 
                          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><a target=\"_blank\" href=\"#\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#2CB543;font-size:14px\"><img class=\"adapt-img\" src=\"https://pvuwmt.stripocdn.email/content/guids/CABINET_2af5bc24a97b758207855506115773ae/images/80731620309017883.png\" alt=\"Forgot Password Illustration\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" title=\"Forgot Password Illustration\" height=\"373\" width=\"560\"></a></td> 
                            </tr> 
                            <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:5px;padding-bottom:5px\"><h1 style=\"Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#333333\">Forgot your password?</h1></td> 
                            </tr> 
                            <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:10px;padding-bottom:10px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:19px;color:#333333;font-size:16px\">Hello,<br><br>We&rsquo;ve received a request to reset the password for the&nbsp;account associated with <strong>".$email."</strong>. No changes have been made to your account yet.<br><br>You can reset your password by clicking the button below:</p></td> 
                            </tr> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;padding-top:5px;padding-bottom:5px\"><span class=\"es-button-border\" style=\"border-style:solid;border-color:#2CB543;background:#F4B459;border-width:0px;display:inline-block;border-radius:10px;width:auto\"><a href=\"http://localhost/AS/Education/IAC/reset.php?email=".$email."&hash=".$hash."\" class=\"es-button\" target=\"_blank\" style=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#ffffff;font-size:18px;border-style:solid;border-color:#F4B459;border-width:10px 20px 10px 20px;display:inline-block;background:#F4B459;border-radius:10px;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">RESET YOUR PASSWORD</a></span></td> 
                            </tr> 
                            <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:10px;padding-bottom:10px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:19px;color:#333333;font-size:16px\">If that doesn't work, then please click the following link:<br><a target=\"_blank\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#2CB543;font-size:16px;line-height:19px\" href=\"http://localhost/AS/Education/IAC/reset.php?email=".$email."&hash=".$hash."\">https://www.alwayssahi.com/Education/IAC/reset</a><br></p></td> 
                            </tr> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;padding-bottom:5px;padding-top:30px;font-size:0px\"> 
                              <table border=\"0\" width=\"90%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                <tr> 
                                  <td style=\"padding:0;Margin:0;border-bottom:1px solid #f4b459;background:none;height:1px;width:100%;margin:0px\"></td> 
                                </tr> 
                              </table></td> 
                            </tr> 
                            <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:10px;padding-bottom:10px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:19px;color:#333333;font-size:16px\">Just so you know&colon; You have <strong>24 hours </strong>to pick your password. After that, you&rsquo;ll have to ask for a new one.<br><br>Didn&rsquo;t ask for a new password? You can ignore this email.<br></p></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table></td> 
                    </tr> 
                  </table></td> 
                </tr> 
              </table> 
              <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\"> 
                <tr> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                  <table class=\"es-content-body\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"> 
                    <tr> 
                      <td align=\"left\" style=\"Margin:0;padding-bottom:10px;padding-left:20px;padding-right:20px;padding-top:30px\"> 
                      <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                          <td class=\"es-m-p0r es-m-p20b\" valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:560px\"> 
                          <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                            <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"><h2 style=\"Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#333333\"><strong>Questions? We have people</strong></h2></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table></td> 
                    </tr> 
                    <tr> 
                      <td align=\"left\" style=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px\"> 
                      <!--[if mso]><table style=\"width:560px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:273px\" valign=\"top\"><![endif]--> 
                      <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-left\" align=\"left\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\"> 
                        <tr> 
                          <td class=\"es-m-p0r es-m-p20b\" align=\"center\" style=\"padding:0;Margin:0;width:273px\"> 
                          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#ffffff\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#ffffff;border-radius:10px\" role=\"presentation\"> 
                            <tr> 
                              <td align=\"center\" style=\"Margin:0;padding-bottom:10px;padding-top:15px;padding-left:15px;padding-right:15px\"><h2 style=\"Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#666666\"><strong>Call</strong></h2></td> 
                            </tr> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><a target=\"_blank\" href=\"tel:8857086790\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#2CB543;font-size:14px\"><img src=\"https://pvuwmt.stripocdn.email/content/guids/CABINET_2af5bc24a97b758207855506115773ae/images/73661620310209153.png\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"20\"></a></td> 
                            </tr> 
                            <tr> 
                              <td align=\"center\" style=\"Margin:0;padding-top:5px;padding-bottom:15px;padding-left:15px;padding-right:15px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px\"><a target=\"_blank\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#666666;font-size:14px\" href=\"tel:8857086790\">+91 8857086790</a></p></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table> 
                      <!--[if mso]></td><td style=\"width:15px\"></td><td style=\"width:272px\" valign=\"top\"><![endif]--> 
                      <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-right\" align=\"right\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\"> 
                        <tr> 
                          <td align=\"center\" style=\"padding:0;Margin:0;width:272px\"> 
                          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:10px;background-color:#ffffff\" bgcolor=\"#ffffff\" role=\"presentation\"> 
                            <tr> 
                              <td align=\"center\" style=\"Margin:0;padding-bottom:10px;padding-top:15px;padding-left:15px;padding-right:15px\"><h2 style=\"Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#666666\"><strong>Reply</strong></h2></td> 
                            </tr> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><a target=\"_blank\" href=\"mailto:hello@alwayssahi.com\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#2CB543;font-size:14px\"><img src=\"https://pvuwmt.stripocdn.email/content/guids/CABINET_2af5bc24a97b758207855506115773ae/images/16961620310208834.png\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"20\"></a></td> 
                            </tr> 
                            <tr> 
                              <td align=\"center\" style=\"Margin:0;padding-top:5px;padding-bottom:15px;padding-left:15px;padding-right:15px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px\"><a target=\"_blank\" href=\"mailto:hello@alwayssahi.com\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#666666;font-size:14px\">hello@alwayssahi.com</a></p></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table> 
                      <!--[if mso]></td></tr></table><![endif]--></td> 
                    </tr> 
                    <tr> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:20px;padding-right:20px;padding-bottom:30px\"> 
                      <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:560px\"> 
                          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px\">Monday - Friday, 10&nbsp;am - 6 pm IST</p></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table></td> 
                    </tr> 
                  </table></td> 
                </tr> 
              </table> 
              <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-footer\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#F4B459;background-repeat:repeat;background-position:center top\"> 
                <tr> 
                  <td align=\"center\" bgcolor=\"#F4B459\" style=\"padding:0;Margin:0;background-color:#f4b459\"> 
                  <table class=\"es-footer-body\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"> 
                    <tr> 
                      <td align=\"left\" style=\"Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px\"> 
                      <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                          <td align=\"left\" style=\"padding:0;Margin:0;width:560px\"> 
                          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0\"> 
                              <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-table-not-adapt es-social\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                <tr> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;padding-right:25px\"><a target=\"_blank\" href=\"https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2FAlways-Sahi-Solutions-Private-Limited-100805488788703\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#666666;font-size:14px\"><img title=\"Facebook\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/social-icons/logo-white/facebook-logo-white.png\" alt=\"Fb\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;padding-right:25px\"><a target=\"_blank\" href=\"https://www.instagram.com/alwayssahi\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#666666;font-size:14px\"><img title=\"Instagram\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/social-icons/logo-white/instagram-logo-white.png\" alt=\"Inst\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;padding-right:25px\"><a target=\"_blank\" href=\"https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2FAlways-Sahi-Solutions-Private-Limited-100805488788703\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#666666;font-size:14px\"><img title=\"Linkedin\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/social-icons/logo-white/linkedin-logo-white.png\" alt=\"In\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                  <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0\"><a target=\"_blank\" href=\"https://t.me/joinalwayssahi\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#666666;font-size:14px\"><img title=\"Telegram\" src=\"https://pvuwmt.stripocdn.email/content/assets/img/messenger-icons/logo-white/telegram-logo-white.png\" alt=\"Telegram\" width=\"32\" height=\"32\" style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a></td> 
                                </tr> 
                              </table></td> 
                            </tr> 
                            <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;padding-top:10px;padding-bottom:10px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:18px;color:#ffffff;font-size:12px\">You are receiving this email because you have visited our site or asked us about the regular newsletter. Make sure our messages get to your Inbox (and not your bulk or junk folders).<br><a target=\"_blank\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#ffffff;font-size:12px\" href=\"https://viewstripo.email\">Privacy policy</a></p></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table></td> 
                    </tr> 
                  </table></td> 
                </tr> 
              </table></td> 
            </tr> 
          </table> 
          </div> 
          <grammarly-desktop-integration data-grammarly-shadow-root=\"true\"></grammarly-desktop-integration>  
        </body>
        </html>
        
        ";

        $mail->AltBody = "Hello ".$name.",<br/><br/> We$rsquo;ve received a request to reset the password for the account associated with ".$email.". No changes have been made to your account yet. You can reset your password by clicking the link below:<br/> http://localhost/login-system/reset.php?email=".$email."&hash=".$hash."<br/><br/>Just so you know&colon; You have <b>24 hours</b> to pick your password. After that, you&rsquo;ll have to ask for a new one. Didn&rsquo;t ask for a new password? You can ignore this email. <br/><br/>If you have any questions, then please email us at <a href=\"mailto:hello@alwayssahi.com\" target=\"_blank\" style=\"color: #777777;\">hello@alwayssahi.com</a> or call us at <a href=\"tel:917875036016\" target=\"_blank\" style=\"color: #777777;\">(+91) 7875036016</a> Mon-Fri 10am-6pm, we&rsquo;re always happy to help out.";

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $_SESSION['message'] = 'Message has been sent';
        }

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
  <?php include 'css/css'; ?>
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
        <input type="email" required autocomplete="off" name="email"/>
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
