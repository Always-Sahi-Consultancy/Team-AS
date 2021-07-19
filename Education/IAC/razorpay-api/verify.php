<?php

require('config.php');
require '/xampp/htdocs/AS/Education/IAC/PHPMailer/PHPMailerAutoload.php';
require '/xampp/htdocs/AS/Education/IAC/db.php';

session_start();

require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$result = $mysqli->query("SELECT * FROM courses");

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $refer = $_SESSION['refer'];
    $amount_paid = $_SESSION['price'];
    date_default_timezone_set("Asia/Kolkata");
    $orderDate = date("d-m-y h-i-s");

    if (isset($_SESSION['cart'])) {
        $courseID = array_column($_SESSION['cart'], 'course_id');
        while ($data = $result->fetch_assoc()) {
            foreach ($courseID as $ID) {
                if ($data['id'] == $ID) {
                    $course = $data['course_name'];
                    $sqlOrders = "INSERT INTO orders (order_date, order_id, payment_id, name, email, course, referer, status, amount_paid) "
                            . "VALUES ('$orderDate', '$razorpay_order_id', '$razorpay_payment_id', '$name', '$email', '$course','$refer', 'success', '$amount_paid')";
                    $mysqli->query($sqlOrders);
                }
            }
        }
    }

    // Send Payment Receipt
    $mail = new PHPMailer();
    // SMTP Settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.hostinger.com';                   // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hello@alwayssahi.com';             // SMTP username
    $mail->Password = 'nopasswordsorry';                  // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    // Email Settings
    $mail->setFrom('hello@alwayssahi.com', 'Always Sahi');
    $mail->addAddress($email, $name);                  // Add a recipient
    //$mail->addAddress('ellen@example.com');                // Name is optional
    $mail->addReplyTo('hello@alwayssahi.com', 'Always Sahi');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                     // Set email format to HTML

    $mail->Subject = 'Payment Details | (alwayssahi.com)';
    $mail->Body    = "
    
    <head>
    <title></title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <style type=\"text/css\">
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

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*=\"margin: 16px 0;\"] {
            margin: 0 !important;
        }
    </style>

    <body style=\"margin: 0 !important; padding: 0 !important; background-color: #eeeeee;\" bgcolor=\"#eeeeee\">
        <div style=\"display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;\">
            For what reason would it be advisable for me to think about business content? That might be little bit risky to have crew member like them.
        </div>
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tr>
                <td align=\"center\" style=\"background-color: #eeeeee;\" bgcolor=\"#eeeeee\">
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:600px;\">
                        <tr>
                            <td align=\"center\" valign=\"top\" style=\"font-size:0; padding: 30px;\" bgcolor=\"#000000\">
                                <div style=\"display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;\">
                                    <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:300px;\">
                                        <tr>
                                            <td align=\"left\" valign=\"top\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;\" class=\"mobile-center\">
                                                <img src=\"https://www.alwayssahi.com/image/Background%20Less.png\" width=\"100\" height=\"auto\"/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- <div style=\"display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;\">
                                    <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:300px;\">
                                        <tr>
                                            <td align=\"left\" valign=\"top\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 600; line-height: 48px;\" class=\"mobile-center\">
                                                <h1 style=\"font-size: 34px; font-weight: 600; margin: 0; color: #ffffff;\">Always Sahi </h1>
                                            </td>
                                        </tr>
                                    </table>
                                </div> -->
                                <div style=\"display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;\" class=\"mobile-hide\">
                                    <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:300px;\">
                                        <tr>
                                            <td align=\"right\" valign=\"top\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;\">
                                                <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"right\">
                                                    <tr>
                                                        <td style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400;\">
                                                            <p style=\"font-size: 18px; font-weight: 400; margin: 0; color: #ffffff;\"><b>Receipt</b></p>
                                                        </td>                                                
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align=\"center\" style=\"padding: 35px 35px 20px 35px; background-color: #ffffff;\" bgcolor=\"#ffffff\">
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:600px;\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;\"> <img src=\"https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png\" width=\"125\" height=\"120\" style=\"display: block; border: 0px;\" /><br>
                                            <h2 style=\"font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;\"> Thank You For Your Order! </h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px; text-align: center;\">
                                            <p style=\"font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;\"> Hi <span style=\"color: #1E90FF;\">".$name."</span>, we've received your order and are working on it.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align=\"left\" style=\"padding-top: 20px;\">
                                            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" bgcolor=\"#eeeeee\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;\"> Order Information </td>
                                                    <td width=\"25%\" align=\"left\" bgcolor=\"#eeeeee\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;\">  </td>
                                                </tr>
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;\"><b> Order Details </b></td>
                                                </tr>
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\"> Order ID: <span style=\"color:#0e9e59;\">".$razorpay_order_id."</span></td>
                                                </tr>
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\"> Payment Id: <span style=\"color:#0e9e59;\">".$razorpay_payment_id."</span></td>
                                                </tr>
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\"> Shipping Method: Email</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--<tr>
                                        <td align=\"left\" style=\"padding-top: 20px;\">
                                            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" bgcolor=\"#eeeeee\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;\"> Courses Ordered </td>
                                                    <td width=\"25%\" align=\"left\" bgcolor=\"#eeeeee\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;\">  </td>
                                                </tr>
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\"> Shipping + Handling </td>
                                                    <td width=\"25%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\"> 10.00 INR </td>
                                                </tr>
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\"> Sales Tax </td>
                                                    <td width=\"25%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\"> 5.00 INR </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td align=\"left\" style=\"padding-top: 20px;\">
                                            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                                <tr>
                                                    <td width=\"75%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;\"> TOTAL </td>
                                                    <td width=\"25%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;\">".$amount_paid." INR </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align=\"center\" style=\" padding: 5px; background-color: #ff7361;\" bgcolor=\"#1b9ba3\"></td>
                        </tr>
                        <tr>
                            <td align=\"center\" style=\"padding: 35px; background-color: #ffffff;\" bgcolor=\"#ffffff\">
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:600px;\">
                                    <tr>
                                        <td align=\"center\"> <img src=\"https://www.freeiconspng.com/thumbs/thank-you-png-icon/thank-you-png-icon-15.png\" width=\"100\" height=\"100\" style=\"display: block; border: 0px;\" /> </td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;\">
                                            <p style=\"font-size: 14px; font-weight: 800; line-height: 18px; color: #333333;\"> Dighi, Pune - 15<br> Maharashtra, INDIA </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; justify-content:center; text-align: center;\">
                                            <p style=\"font-size: 14px; font-weight: 400; line-height: 20px; color: #777777;\"> If you ever need anything or have any questions about your order, then please email us at <a href=\"mailto:hello@alwayssahi.com\" target=\"_blank\" style=\"color: #777777;\">hello@alwayssahi.com</a> or call us at <a href=\"tel:917875036016\" target=\"_blank\" style=\"color: #777777;\">(+91) 7875036016</a> Mon-Fri 10am-6pm </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <script>
            window.onload = function fun() {
                var elem = document.getElementById(\"cartItem\");
                elem.innerHTML = <?php cartItem();?>
            }
        </script>

    </body>
    
    ";

    $mail->AltBody = "Hello <span style=\"color: #1E90FF;\">".$name."</span>, we've received your order and are working on it.<br/><b>Order Information:</b><br/>Order ID: <span style=\"color:#0e9e59;\">".$razorpay_order_id."</span>,<br/>Payment ID: <span style=\"color:#0e9e59;\">".$razorpay_payment_id."</span><br/><br/>Total Amount Paid: <span style=\"color:#0e9e59;\">".$amount_paid."</span><br/><br/>If you ever need anything or have any questions about your order, then please email us at <a href=\"mailto:hello@alwayssahi.com\" target=\"_blank\" style=\"color: #777777;\">hello@alwayssahi.com</a> or call us at <a href=\"tel:917875036016\" target=\"_blank\" style=\"color: #777777;\">(+91) 7875036016</a> Mon-Fri 10am-6pm";

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $_SESSION['message'] = 'Message has been sent';
    }


    $html = "
    <div class=\"card\">
    <div style=\"border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto; position: relative\">
        <i class=\"checkmark fas fa-check\" aria-hidden=\"true\"></i>
        </div>
            <h1>Success</h1> 
            <p>Your payment was successful</p>
            <p>We've received your purchase request;<br/> we'll notify you by email shortly!</p>
            <br/>
            <p><b>Payment ID: {$_POST['razorpay_payment_id']}</b></p>
        </div>
    </div>
    </div>
    <br/><br/><br/>
    <p style=\"color: #FF0000; padding:0;\">Please wait for 10sec. You will be redirected to our website soon.</p>
    ";
    echo $html;
}
else
{
    global $error;
    $html = "
    <div class=\"card\">
    <div style=\"border-radius:200px; height:200px; width:200px; background: #FF0000; margin:0 auto; position: relative\">
        <i class=\"checkmark far fa-thumbs-down\" aria-hidden=\"true\" style=\"font-size: 8em; color: #FFFFFF\"></i>
        </div>
            <h1 style=\"color: #FF0000;\">Oh no!</h1> 
            <p>Your payment failed</p>
            <p>Oops! Something went wrong,;<br/> you should try again.</p>
            <br/>
            <p><b>{$error}</b></p>
            <br/>
            <button><b>Try Again</b></button>
        </div>
        
    </div>
    </div>
    ";
    echo $html;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv = "refresh" content = "10; url = https://www.google.co.in" /> -->
    <!-- font awesome -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap">
    <link rel="stylesheet" href="verify.css">
    <title>Verification</title>
</head>
<body>
</body>
</html>
