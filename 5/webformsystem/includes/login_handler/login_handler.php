<?php

if(isset($_POST['submit'])){

$mail = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
//$pass=hash('sha512',$pass);



$ad=mysqli_query($con,"SELECT * FROM users WHERE email='$mail' AND password='$pass'");
$count=mysqli_num_rows($ad);

if($count==1){

$row=mysqli_fetch_array($ad);
			$ema=$row['username'];
			session_regenerate_id();//avoid session hyjacking
			$_SESSION['username']=$ema;
			header("Location:index.php");
			echo "<span style='color:green;'>Logged in Successfully</span>";
			exit();
}else{



		echo "<span style='color:red;'>Wrong email or password</span>";

}
 

}

?>