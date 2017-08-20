<?php
	
	session_start();

	if(isset($_POST['btnSubmit'])){
		if(isset($_POST['txtAppid']) && !empty($_POST['txtAppid'])){
			$email = $_POST['txtAppid'];
			$id = "@lnmiit.ac.in";
			if(strpos($email, $id) !== false){
				
				$otp = mt_rand(100000, 999999);
				$subject = "OTP";
				$message =  "Use this OTP to use to give Feedback " + $otp;

				$_SESSION['otp'] = $otp;

				if(mail($email, $subject, $message)){
					header('Location: otp.php');
				}else{
					echo "<script type='text/javascript'>alert('Server Down.. Try Later');</script>";
				}
			}else{
				echo "<script type='text/javascript'>alert('Use Lnmiit Id');</script>";
			}
			
		}else{
			echo "<script type='text/javascript'>alert('Enter Email-Id');</script>";
		}
	}	
?>