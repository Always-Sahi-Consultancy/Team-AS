<?php

  session_start();

  require 'db.php';

  $result = $mysqli->query("SELECT * FROM courses");

  if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
      foreach ($_SESSION['cart'] as $key => $value) {
        if($value["course_id"] == $_GET['id']) {
          unset($_SESSION['cart'][$key]);
          $courseID = array_column($_SESSION['cart'], 'course_id');
          while ($data = $result->fetch_assoc()) {
            foreach ($courseID as $ID){
              if ($data['id'] == $ID) {
                cartEl($data['course_image'], $data['course_name'], $data['course_price'], $data['id']);
                $total = $total - (float)$data['course_price'];
                $_SESSION['price'] = $total;
              }
            }
          }
          echo "<script>alert('Course has been removed!');</script>";
          echo "<script>window.location = 'cart.php'</script>";
        }
      }
    }
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['payBtn'])) {
      $_SESSION['price'] = $total;
      require './razorpay-api/pay.php';
    }
  }
?>

<!DOCTYPE html>
<html lang="en-IN">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Main-CSS -->
  <link rel="stylesheet" href="css/course.css">
  <title>Courses | AS</title>
</head>

<body style="background-image: linear-gradient(140deg,#29648a 20%,#2e9cca,#aaabb8); background-repeat: no-repeat; background-size: 100% 150%;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(140deg,#29648a 20%,#2e9cca,#aaabb8);">
    <a href="course.php" class="navbar-brand">
      <h3 class="px-5">
        <i class="fas fa-shopping-basket"></i> Courses @ AS
      </h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="mr-auto"></div>
      <div class="navbar-nav">
        <a href="cart.php" class="nav-item nav-link active">
          <h5 class="px-5 cart">
            <i class="fas fa-shopping-cart"></i> Cart
            <?php
            if (isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
              echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
            } else {
              echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
            }
            ?>
          </h5>
        </a>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row px-5 mar">
      <div class="col-md-7">
        <div class="shopping-cart">
          <h6>My Cart</h6>
          <hr>

          <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {
              $courseID = array_column($_SESSION['cart'], 'course_id');
              while ($data = $result->fetch_assoc()) {
                foreach ($courseID as $ID){
                  if ($data['id'] == $ID) {
                    cartEl($data['course_image'], $data['course_name'], $data['course_price'], $data['id']);
                    $total = $total + (float)$data['course_price'];
                    $_SESSION['price'] = $total;
                  }
                }
              }
            } else {
              echo "<h5>Cart is Empty</h5>";
            }
            if ($total == 0) {
              echo "<h5>Cart is Empty</h5>";
            }
          ?>
        </div>
      </div>
      <div class="col-md-4 offset-md-1 border rounded mt-5 bd-white h-25">
        <div class="pt-4">
          <h6>Price Details</h6>
          <hr>
          <div class="row price-details">
            <div class="col-md-6">
              <!-- 
              <h6>Delivery Charges</h6>
              <hr> -->
              <h6>Amount Payable</h6>
            </div>
            <div class="col-md-6">
              <!-- <h6>INR</h6> -->
              <!-- <h6 class="text-success">FREE</h6> -->
              <!-- <hr> -->
              <h6><?php echo $total;?> INR</h6>
            </div>
          </div>
          <hr>
          <form action="./razorpay-api/pay.php" method="post">
            <div class="input-group">
                <input type="text" placeholder="Name" name="name" autocomplete="off" required>
            </div>
            <div class="input-group">
                <input type="number" placeholder="Mobile" name="mobile" pattern="[0-9]{10}" autocomplete="off" required>
            </div>
            <div class="input-group">   
                <input type="email" placeholder="Email" name="email" autocomplete="off" required>
            </div>
            <input type="hidden" name="price" value="<?php echo $total?>">
            <div class="input-group center">
            <button type="submit" id="payButton" class="btn btn-warning pl-5 pr-5 mb-3" name="payBtn" <?php if ($total == '0'){ ?> disabled style='cursor:no-drop'<?php } ?> ><b>Pay</b></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
    function cartEl($courseImg, $courseName, $coursePrice, $courseID) {
      $element = "
      
      <form action=\"cart.php?action=remove&id=$courseID\" method=\"post\" class=\"cart-items\">
        <div class=\"border rounded\">
          <div class=\"row bg-white mar1\">
            <div class=\"col-md-3 pl-0\">
              <img src=$courseImg alt=\"Course Image\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-6\">
              <h5 class=\"pt-2\">$courseName</h5>
              <!--<small class=\"text-secondary\">Seller: dailytuition</small>-->
              <h5 class=\"pt-2\">$coursePrice INR</h5>
              <button type=\"submit\" class=\"btn btn-danger\" name=\"remove\">Remove</button>
            </div>
          </div>
        </div>
      </form>

      ";
      echo $element;
    }
  ?>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>