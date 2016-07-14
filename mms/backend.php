<?php
include 'Console/config.php';
session_start();
error_reporting(0);
if(isset($_POST['Register']))
{
	$ins_users=mysqli_query($conn,"INSERT INTO `register`(`Name`, `Email`, `Phone`, `Password`) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[Password]')");
	if($ins_users)
	{
		echo "Ok";
	}else{
		echo "Registration Fail";
	}
}

if(isset($_POST['add_service']))
{
	$chk_ser=mysqli_query($conn,"select * from `account_services` where `service_id`='$_POST[service_id]' AND `user_reg_id`='$_POST[user_reg_id]'");
	if(mysqli_num_rows($chk_ser)==0)
	{
	$ins_add_service=mysqli_query($conn,"INSERT INTO `account_services`( `service_id`, `user_reg_id`) VALUES ('$_POST[service_id]','$_POST[user_reg_id]')");
	if($ins_add_service)
	{
		header('location:index.php');
	}
	}else
	{
		echo "<script>alert('This Service Already added into ur account')</script>";
		header('location:index.php');
	}
}


/*
error_reporting (E_ALL ^ E_NOTICE);

	function validate_email($email)
	{
		$regex = '/([a-z0-9_.-]+)'. 
		'@'. 
		'([a-z0-9.-]+){2,255}'. 
		'.'. 
		'([a-z]+){2,10}/i'; 
		
		if($email == '') 
			return false;
		else
			$eregi = preg_replace($regex, '', $email);
		return empty($eregi) ? true : false;
	}

	$post = (!empty($_POST)) ? true : false;
	
	if($post)
	{
		$name 	 = stripslashes($_POST['name']);
		$email 	 = trim($_POST['email']);
		$phone = stripslashes($_POST['phone']);
		$password = stripslashes($_POST['Password']);
	
		$error = '';
	
		if(!$name)
			$error .= 'Name required! ';
	
		if(!$email)
			$error .= 'E-mail required! ';
	
		if($email && !validate_email($email))
			$error .= 'E-mail address is not valid! ';
	
		if(!$password)
			$error .= "Please enter your Password!";
	
		if(!$error)
		{
			$mail = mysqli_query($conn,"INSERT INTO `register`(`Name`, `Email`, `Phone`, `Password`) VALUES ('name','email','phone','password')");
			
			if($mail){
				echo 'OK';
			}else{
				echo 'Could not send email!';
			}
		}
		else
			echo $error;
	}*/
?>