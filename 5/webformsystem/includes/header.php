<?php

include 'config/config.php';
include 'includes/classes/User.php';
include 'includes/classes/Fom.php';

if($_SESSION['username']){

$userLoggedIn=$_SESSION['username'];

$user_details=mysqli_query($con,"SELECT * FROM users WHERE username='$userLoggedIn'");
$user=mysqli_fetch_array($user_details);

}else{

header("Location:login.php");

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Jaba Consultancy</title>
  </head>
  <body>

