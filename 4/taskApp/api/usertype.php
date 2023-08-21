<?php

header("Access-Control-Allow-Origin: *");

include('../config/config.php');


$mail = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$pass=hash('sha512',$pass);


$user="select * from users where  email='$mail' AND password='$pass' ";
$run_user=mysqli_query($con,$user);
$userData=array();
$count=mysqli_num_rows($run_user);
if($count == "1"){

	$sql="select * from users where email='$mail' ";
	$query=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($query);
	$userData=$data;
	 	 
	 echo json_encode($userData);

}else{

	 echo json_encode("Wrong Password or Email");

}


?>




1L@$o[7l