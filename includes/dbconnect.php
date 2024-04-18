<?php
$servername = "ec2-52-8-168-99.us-west-1.compute.amazonaws.com";
$username = "atom";
$password = "@tomPWD";
$dbname = "rishabh_test";

$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>