<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'as_education';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
