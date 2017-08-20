<?php

session_start();

if(!$_SESSION['otp']){
	header('Location: index.php');
}


	if(isset($_POST['btnSubmit'])){
		if(isset($_POST['otp']) && !empty($_POST['otp'])){

			 $otp = $_POST['otp'];
			 if($otp==$_SESSION['otp']){
			 	header('Location: form.php');
			 	$_SESSION['valid'] = true;
			 }else{
			 	echo "<script type='text/javascript'>alert('OTP NOT VALID');</script>";
			 }

		}else{
			echo "<script type='text/javascript'>alert('Enter OTP');</script>";
		}
	}


?>