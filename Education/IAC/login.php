<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$id = $mysqli->escape_string($_POST['id']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
$resultdash = $mysqli->query("SELECT * FROM dash WHERE email='$email'");

if ( $result->num_rows == 0 ) { // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    $dash = $resultdash->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['active_email'] = $user['active_email'];
        $_SESSION['uid'] = $user['uid'];
        $_SESSION['phone'] = $dash['phone'];
        $_SESSION['level'] = $dash['level'];
        $_SESSION['currPCP'] = $dash['currPCP'];
        $_SESSION['currGCP'] = $dash['currGCP'];
        $_SESSION['currTCP'] = $dash['currTCP'];
        $_SESSION['totalPCP'] = $dash['totalPCP'];
        $_SESSION['totalGCP'] = $dash['totalGCP'];
        $_SESSION['totalTCP'] = $dash['totalTCP'];
        $_SESSION['totalSales'] = $dash['totalSales'];
        $_SESSION['totalEarn'] = $dash['totalEarn'];
        $_SESSION['totalJoin'] = $dash['totalJoin'];
        $_SESSION['target'] = $dash['target'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        $_SESSION['login_time'] = time();

        header("location: dashboard(TAC).php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

