<?php
include 'config.php';
session_start();


if(isset($_POST['login'])){
   
   $username = $_POST['user_name'];
    $password = md5($_POST['password']);

   $stmt = $conn->prepare("SELECT  admin_name,admin_pwd FROM admin WHERE admin_name=? AND admin_pwd=?");
    $stmt->bind_param("ss",$username,$password);
	
    $stmt->execute();
    $stmt->bind_result($admin_name,$admin_pwd);
    $stmt->store_result();
    if($stmt->num_rows == 1)  //To check if the row exists
        {
            if($stmt->fetch()) //fetching the contents of the row
            {
              
                  // $_SESSION['Logged'] = 1;
                   $_SESSION['user_id'] = $id;
                   $_SESSION['username'] = $admin_name;
                   header("location:About.php");
                   //exit();
               
           }

    }
    else {
        echo "INVALID USERNAME/PASSWORD Combination!";
    }
    $stmt->close();
}

// about insert
if(isset($_POST['about_submit']))
{
	$ins_about=$conn->prepare("INSERT INTO `about_us`( `title`, `data`) VALUES (?,?)");
	$ins_about->bind_param('ss',$_POST['about_title'],$_POST['about_desc']);
	$exe=$ins_about->execute();
	if($exe)
	{
		header("location:About.php");
	}else
	{
		echo "<script>alert('Insertion Fail')</script>";
		header("location:About.php");
	}
	
}
//about about

if(isset($_POST['about_update']))
{
	$ins_about=$conn->prepare("UPDATE `about_us` SET `title`=?,`data`=? WHERE `id`=?");
	$ins_about->bind_param('ssi',$_POST['about_title1'],$_POST['about_desc1'],$_POST['get_id']);
	$exe=$ins_about->execute();
	if($exe)
	{
		header("location:About.php");
	}else
	{
		echo "<script>alert('Updation  Fail')</script>";
		header("location:About.php");
	}
}
//about delete
if($_GET['abde'])
{
	$del=mysqli_query($conn,"delete from about_us where id='$_GET[abde]'");
	header("location:About.php");
}

//Tesimonials

if(isset($_POST['sub_testies']))
{
	$ins_tesies=$conn->prepare("INSERT INTO `testimonials`( `testimonial`, `author`) VALUES (?,?)");
	$ins_tesies->bind_param('ss',$_POST['testimoni'],$_POST['testi_auth']);
	$exe=$ins_tesies->execute();
	if($exe)
	{
		header("location:Testmonial.php");
	}else 
	{
		echo "<script>alert('Insertion Fail')</script>";
		header("location:Testmonial.php");
	}
}
//testi update
if(isset($_POST['upda_testies']))
{
	$uptes=$conn->prepare("UPDATE `testimonials` SET `testimonial`=?,`author`=? WHERE `id`=?");
	$uptes->bind_param('ssi',$_POST['testimoni1'],$_POST['testi_auth1'],$_POST['getid']);
	$exe=$uptes->execute();
	if($exe)
	{
		header("location:Testmonial.php");
	}else
	{
		echo "<script>alert('Updation  Fail')</script>";
		header("location:Testmonial.php");
	}
}

//test_delete
if($_GET['tedel'])
{
	$del=mysqli_query($conn,"delete From `testimonials` where id='$_GET[tedel]' ");
	header("location:Testmonial.php");
}
//quote of the day
if(isset($_POST['sub_Quote']))
{
	$ins_quote=$conn->prepare("INSERT INTO `qoutes`( `quote`, `auother`) VALUES (?,?)");
	$ins_quote->bind_param('ss',$_POST['qote_day'],$_POST['qauthor']);
	$exe=$ins_quote->execute();
	if($exe)
	{
		header("location:Quote.php");
	}else
	{
		echo "<script>alert('Insertion Fail')</script>";
		header("location:Quote.php");
	}
}
//quote update
if(isset($_POST['Update_Quote']))
{
	$ins_quote=$conn->prepare("UPDATE `qoutes` SET `quote`=?,`auother`=? WHERE `quote_id`=?");
	$ins_quote->bind_param('ssi',$_POST['qote_day1'],$_POST['qauthor1'],$_POST['quote_id']);
	$exe=$ins_quote->execute();
	if($exe)
	{
		header("location:Quote.php");
	}else
	{
		echo "<script>alert('Updation Fail')</script>";
		header("location:Quote.php");
	}
}

//quote delete
if($_GET['Quote'])
{
	$del_quo=mysqli_query($conn,"delete from `qoutes` where `quote_id`='".$_GET['Quote']."'");
	header("location:Quote.php");
}




?>
