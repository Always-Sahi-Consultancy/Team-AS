<?php

  session_start();

  require 'db.php';

  $result = $mysqli->query("SELECT * FROM courses");

  if (isset($_POST['add'])) {
    if (isset($_SESSION['cart'])) {
      $item_arr_id = array_column($_SESSION['cart'], "course_id");
      if (in_array($_POST['course_id'], $item_arr_id)) {
        echo "<script>alert('Course is already added in the Cart!')</script>";
        echo "<script>window.location = 'course.php'</script>";
      } else {
        $count = count($_SESSION['cart']);
        $item_arr = array('course_id'=>$_POST['course_id']);
        $_SESSION['cart'][$count] = $item_arr;
      }
    } else {
      $item_arr = array('course_id'=>$_POST['course_id']);
      $_SESSION['cart'][0] = $item_arr;
      // print_r($_SESSION['cart']);
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

<body style="background-image: linear-gradient(140deg,#29648a 20%,#2e9cca,#aaabb8);">
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
  <div class="container">
    <div class="row text-center py-5">
      <?php
        while ($data = $result->fetch_assoc()) {
          component($data['course_name'], $data['course_price'], $data['course_image'], $data['id']);
        }
      ?>
    </div>
  </div>
  
  <?php
    function component($courseName, $coursePrice, $courseImg, $productID) {
      $element = "

      <div class=\"card-pad col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"course.php\" method=\"post\">
          <div class=\"card shadow\">
            <div>
              <img src=\"$courseImg\" alt=\"Course 1\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-body\">
              <!--<h5 class=\"card-title\">$courseName</h5>-->
              <h6>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
              </h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
              <h5>
                <small><s class=\"text-secondary\">599 INR</s></small>
                <span class=\"price\">$coursePrice INR</span>
              </h5>

              <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
              <input type=\"hidden\" name=\"course_id\" value=\"$productID\">
            </div>
          </div>
        </form>
      </div>
      
      ";

      echo $element;
    }
  ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>