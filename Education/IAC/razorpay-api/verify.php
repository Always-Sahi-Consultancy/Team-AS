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
    $html = "
    ";
    echo $html;
}
else
{
    global $error;
    $html = "
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
