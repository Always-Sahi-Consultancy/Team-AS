<?php

$keyId = 'rzp_test_JU7GQy7JlVhFsq';
$keySecret = 'HescUbvyAK75if2xyNWBs6PB';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'as_education';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
