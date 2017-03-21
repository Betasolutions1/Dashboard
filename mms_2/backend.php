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

if(isset($_POST['cart_sub']))
{
	$ins_cart=mysqli_query($conn,"INSERT INTO `cart`( `customer_id`, `product_id`, `product_qty`, `product_price`) VALUES ('$_POST[cart_cust_id]','$_POST[cart_product_id]','$_POST[cart_pd_qty]','$_POST[cart_pd_price]')");
	if($ins_cart)
	{
		echo "<script>alert('Item Inserted Into cart')</script>";
		header("location:shop.php");
	}
}
if($_GET['cart_id'])
{
	$del_cart_item=mysqli_query($conn,"delete from cart where cart_id='$_GET[cart_id]'");
	if($del_cart_item)
	{
		echo "<script>alert('Item Deleted from Cart')</script>";
		header("location:Cart.php");
	}else
	{
		header("location:Cart.php");
	}
}

if(isset($_POST['place_order']))
{
	$ins_order=mysqli_query($conn,"INSERT INTO `orders`( `customer_id`, `no_items`, `bill_amount`,  `order_date`, `dispatch_date`) VALUES ('$_POST[order_cust_id]','$_POST[order_prd_qty]','$_POST[order_amount]','$_POST[order_date]','$_POST[order_dispa_date]')");
	$order_id=mysqli_insert_id($conn);
	if($ins_order)
	{
		$_SESSION['order_id']=$order_id;
		header("location:billing.php");
	}
}

if(isset($_POST['payment']))
{
	if($_POST['payment_type']=='payumoney')
	{
		$up_order=mysqli_query($conn,"update `orders` set order_type='".$_POST['payment_type']."' where customer_id='$_SESSION[User_id]'");
		$up_cart=mysqli_query($conn,"update `cart` set status='1' where customer_id='$_SESSION[User_id]'");
		if($up_order && $up_cart)
		{
			header("location:PayUMoney_form.php");
		}
	}else{
		header("location:Payment.php");
	}
}
if($_POST['billing'])
{
	$ins_bill_address=mysqli_query($conn,"INSERT INTO `billing_address`( `name`, `email`, `phone`, `country`, `state`, `city`, `address1`, `address2`, `zipcode`) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[country]','$_POST[state]','$_POST[city]','$_POST[address1]','$_POST[address2]','$_POST[zipcode]')");
	if($ins_bill_address)
	{
		$_SESSION['bill_adname']=$_POST['name'];
		$_SESSION['bill_email']=$_POST['email'];
		$_SESSION['bill_phone']=$_POST['phone'];
		$_SESSION['bill_country']=$_POST['country'];
		$_SESSION['bill_state']=$_POST['state'];
		$_SESSION['bill_city']=$_POST['city'];
		$_SESSION['bill_address1']=$_POST['address1'];
		$_SESSION['bill_address2']=$_POST['address2'];
		$_SESSION['bill_zipcode']=$_POST['zipcode'];
		header("location:Payment.php");
		
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