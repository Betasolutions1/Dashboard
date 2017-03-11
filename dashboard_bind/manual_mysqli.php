<?php
include 'config.php';
error_reporting(0);
session_start();
if(!$_SESSION['username'])
{
	header("location:index.php");
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
//about update

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

//add menus or pages

if(isset($_POST['sub_menu']))
{
	
	$page=$_POST['page_name'];
	$pg_type=$_POST['dynamic_page'];
	
	$create=mysqli_query($conn,"CREATE TABLE ".$page." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL,
data VARCHAR(5000) NOT NULL
)");
 if($create)
  {
	  $inspage_name=mysqli_query($conn,"INSERT INTO `pages`(`page_name`) VALUES ('$page')");
	if($pg_type=='left')
	{
		 if($file = fopen("../$page.php", "w")) 
		 {
	      echo copy("../left_side.php","../$page.php");
          fclose($file); 
	     }
		 if($file = fopen("$page.php", "w")) 
		 {
	      echo copy("copy_page.php","$page.php");
          fclose($file); 
	     }
	}else if($pg_type=='middle')
	{
		if($file = fopen("../$page.php", "w")) 
		 {
	      echo copy("../middle.php","../$page.php");
          fclose($file); 
	     }
		 if($file = fopen("$page.php", "w")) 
		 {
	      echo copy("copy_page.php","$page.php");
          fclose($file); 
	     }
	}
	header("location:Add-menu.php");
}
	
}



?>
<?php 
if($_GET['menu_delete_id'])
{
	$pg_name=mysqli_query($conn,"select * from pages where page_id='".$_GET['menu_delete_id']."'");
	$pgs=mysqli_fetch_array($pg_name);
	$drop_tb=mysqli_query($conn,"drop table ".$pgs['page_name']);
	$ghy=$pgs['page_name'].".php";
	unlink($ghy);
	$path2="../".$pgs['page_name'].".php";
	unlink($path2);
	//echo delete($pgs['page_name'].'php');
     $sql_query="DELETE FROM `pages` WHERE page_id='".$_GET['menu_delete_id']."'";
     mysqli_query($conn,$sql_query);
    header("location:Add-menu.php");
}



?>
