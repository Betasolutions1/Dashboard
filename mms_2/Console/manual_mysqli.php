<?php
include 'config.php';
error_reporting(0);
session_start();
if(!$_SESSION['username'])
{
	header("location:index.php");
}





//service_type

if(isset($_POST['sub_services']))
{
	$chk_conu=$conn->prepare("select `stype_name` from `service_type` where `stype_name`=?");
	$chk_conu->bind_param('s',$_POST['service']);
	$chk_conu->execute();
	//$chk_conu->bind_result($countr_namne);
	$chk_conu->store_result();
	if($chk_conu->num_rows !=0)
	{
		echo "<script>alert('service name Already Inserted');</script>";
		header("location:service_type.php");
	}else
	{
	$ins_coutry=$conn->prepare("INSERT INTO `service_type`( `stype_name`) VALUES (?)");
	$ins_coutry->bind_param('s',$_POST['service']);
	$exe=$ins_coutry->execute();
	if($exe)
	{
		header("location:service_type.php");
	}else
	{
		echo "<script>alert('Insertion Fail')</script>";
		header("location:service_type.php");
	}
	}
}
//update service
if(isset($_POST['update_service']))
{
	$upcounty=$conn->prepare("UPDATE `service_type` SET `stype_name`=? WHERE `stype_id`=?");
	$upcounty->bind_param('si',$_POST['service1'],$_POST['service_id']);
	$exe=$upcounty->execute();
	if($exe)
	{
		header("location:service_type.php");
	}else
	{
		echo "<script>alert('Updation Fail')</script>";
		header("location:service_type.php");
	}
}

if(isset($_GET['delete_id']))
{
	$del_con=$conn->prepare("delete from service_type where stype_id=?");
	$del_con->bind_param('i',$_GET['delete_id']);
	$exe=$del_con->execute();
	if($exe)
	{
		header("location:service_type.php");
	}else
	{
		echo "<script>alert('Deletion Fail')</script>";
		header("location:service_type.php");
	}
}
//end service_type




//add product data

if(isset($_POST['submit']))
{
	$product_id=mysqli_query($conn,"select * from product");
	$product=mysqli_num_rows($product_id);
	++$product;
	$img_name=$_FILES['pimage']['name'];
    	$img_tmp_name=$_FILES['pimage']['tmp_name'];
    	$prod_img_path=$product.'_'.$img_name;
		$product_path="product/".$prod_img_path;
    	move_uploaded_file($img_tmp_name,$product_path);
			
			$img=$product.'_'.$_FILES['pimage']['name'];
	
			$ins_product=mysqli_query($conn,"INSERT INTO `product`( `product_name`, `product_price`, `product_image`, `product_desc`,`category_id`) VALUES ('$_POST[pname]','$_POST[pprice]','$img','$_POST[pdesc]','$_POST[category_id]')");
		
	if($ins_product)
	{
		echo "<script>
		alert('product Inserted');
		window.location.href='Products.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('product Insertion Fail As May be Image size is more than 2 MB');
		window.location.href='Products.php';
		</script>";
	}
}
//product update
if(isset($_POST['update']))
{
	$blog_rand=mt_rand();
	if(is_uploaded_file($_FILES['pimage1']['tmp_name']))
	{
		$blupim=$_FILES['pimage1']['name'];
		$setbim=$blog_rand.'_'.$blupim;
		move_uploaded_file($_FILES['pimage1']['tmp_name'],"product/$setbim");
	}
	if($blupim!='')
	{
		$up_blg=mysqli_query($conn,"UPDATE `product` SET `product_name`='$_POST[pname1]',`product_desc`='$_POST[pdesc1]',`product_image`='$setbim',`product_price`='$_POST[pprice1]' WHERE `product_id`='$_POST[edit_id1]'");
	}
	else
	{
		$up_blg=mysqli_query($conn,"UPDATE `product` SET `product_name`='$_POST[pname1]',`product_desc`='$_POST[pdesc1]',`product_price`='$_POST[pprice1]' WHERE `product_id`='$_POST[edit_id1]'");
	}
	if($up_blg)
	{
		echo "<script>
		alert('product Updated');
		window.location.href='Products.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('product Updation Fail As May be Image size is more than 2 MB');
		window.location.href='Products.php';
		</script>";
	}
}
//product Blog
if(isset($_GET['del_id']))
{
	$del_pdt=mysqli_query($conn,"delete from product where product_id='$_GET[del_id]'");
	if($del_pdt)
	{
		echo "<script>
		alert('product Deleted');
		window.location.href='Products.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('Products Updation Fail');
		window.location.href='Products.php';
		</script>";
	}
}


//add category

if(isset($_POST['sub_category']))
{
	$chk_conu=$conn->prepare("select `category_name` from `category` where `category_name`=?");
	$chk_conu->bind_param('s',$_POST['category']);
	$chk_conu->execute();
	//$chk_conu->bind_result($countr_namne);
	$chk_conu->store_result();
	if($chk_conu->num_rows !=0)
	{
		echo "<script>alert('category name Already Inserted');</script>";
		header("location:category.php");
	}else
	{
	$ins_coutry=$conn->prepare("INSERT INTO `category`( `category_name`) VALUES (?)");
	$ins_coutry->bind_param('s',$_POST['category']);
	$exe=$ins_coutry->execute();
	if($exe)
	{
		header("location:category.php");
	}else
	{
		echo "<script>alert('Insertion Fail')</script>";
		header("location:category.php");
	}
	}
}

if(isset($_POST['update_category']))
{
	$upcounty=$conn->prepare("UPDATE `category` SET `category_name`=? WHERE `category_id`=?");
	$upcounty->bind_param('si',$_POST['category1'],$_POST['category_id']);
	$exe=$upcounty->execute();
	if($exe)
	{
		header("location:category.php");
	}else
	{
		echo "<script>alert('Updation Fail')</script>";
		header("location:category.php");
	}
}

if(isset($_GET['delete_cid']))
{
	$del_con=$conn->prepare("DELETE from category where category_id=?");
	$del_con->bind_param('i',$_GET['delete_cid']);
	$exe=$del_con->execute();
	if($exe)
	{
		header("location:category.php");
	}else
	{
		echo "<script>alert('Deletion Fail')</script>";
		header("location:category.php");
	}
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

//add country
if(isset($_POST['sub_country']))
{
	$chk_conu=$conn->prepare("select `country_name` from `country` where `country_name`=?");
	$chk_conu->bind_param('s',$_POST['country']);
	$chk_conu->execute();
	//$chk_conu->bind_result($countr_namne);
	$chk_conu->store_result();
	if($chk_conu->num_rows !=0)
	{
		echo "<script>alert('Country name Already Inserted');</script>";
		header("location:country.php");
	}else
	{
	$ins_coutry=$conn->prepare("INSERT INTO `country`( `country_name`) VALUES (?)");
	$ins_coutry->bind_param('s',$_POST['country']);
	$exe=$ins_coutry->execute();
	if($exe)
	{
		header("location:country.php");
	}else
	{
		echo "<script>alert('Insertion Fail')</script>";
		header("location:country.php");
	}
	}
}

if(isset($_POST['upda_country']))
{
	$upcounty=$conn->prepare("UPDATE `country` SET `country_name`=? WHERE `country_id`=?");
	$upcounty->bind_param('si',$_POST['country1'],$_POST['country_id']);
	$exe=$upcounty->execute();
	if($exe)
	{
		header("location:country.php");
	}else
	{
		echo "<script>alert('Updation Fail')</script>";
		header("location:country.php");
	}
}

if(isset($_GET['delete_cid']))
{
	$del_con=$conn->prepare("delete from country where country_id=?");
	$del_con->bind_param('i',$_GET['delete_cid']);
	$exe=$del_con->execute();
	if($exe)
	{
		header("location:country.php");
	}else
	{
		echo "<script>alert('Deletion Fail')</script>";
		header("location:country.php");
	}
}

//add state
if(isset($_POST['sub_state']))
{
	$ins_state=$conn->prepare("INSERT INTO `state`( `country_id`, `state_name`) VALUES (?,?)");
	$ins_state->bind_param('is',$_POST['country_id'],$_POST['state_name']);
	$exe=$ins_state->execute();
	if($exe)
	{
		header("location:state.php");
	}else
	{
		echo "<script>alert('insertion Fail')</script>";
		header("location:state.php");
	}
}

//add bolg data

if(isset($_POST['blog_sub']))
{
	$blog_id=mysqli_query($conn,"select * from blogs");
	$blogy=mysqli_num_rows($blog_id);
	++$blogy;
	$img_name=$_FILES['file']['name'];
    	$img_tmp_name=$_FILES['file']['tmp_name'];
    	$prod_img_path=$blogy.'_'.$img_name;
		$blog_path="Blog/".$prod_img_path;
    	move_uploaded_file($img_tmp_name,$blog_path);
			
			$img=$blogy.'_'.$_FILES['file']['name'];
	
			$ins_blog=mysqli_query($conn,"INSERT INTO `blogs`( `blog_title`, `blog_desc`, `blog_image`, `datetime`) VALUES ('$_POST[blog_title]','$_POST[blog_desc]','$img','$_POST[blog_date]')");
		
	if($ins_blog)
	{
		echo "<script>
		alert('Blog Inserted');
		window.location.href='Blog.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('Blog Insertion Fail As May be Image size is more than 2 MB');
		window.location.href='Blog.php';
		</script>";
	}
}
//bloog update
if(isset($_POST['blog_update']))
{
	$blog_rand=mt_rand();
	if(is_uploaded_file($_FILES['file1']['tmp_name']))
	{
		$blupim=$_FILES['file1']['name'];
		$setbim=$blog_rand.'_'.$blupim;
		move_uploaded_file($_FILES['file1']['tmp_name'],"Blog/$setbim");
	}
	if($blupim!='')
	{
		$up_blg=mysqli_query($conn,"UPDATE `blogs` SET `blog_title`='$_POST[blog_title1]',`blog_desc`='$_POST[blog_desc1]',`blog_image`='$setbim',`datetime`='$_POST[blog_date1]' WHERE `blog_id`='$_POST[blog_id]'");
	}
	else
	{
		$up_blg=mysqli_query($conn,"UPDATE `blogs` SET `blog_title`='$_POST[blog_title1]',`blog_desc`='$_POST[blog_desc1]',`datetime`='$_POST[blog_date1]' WHERE `blog_id`='$_POST[blog_id]'");
	}
	if($up_blg)
	{
		echo "<script>
		alert('Blog Updated');
		window.location.href='Blog.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('Blog Updation Fail As May be Image size is more than 2 MB');
		window.location.href='Blog.php';
		</script>";
	}
}
//Delete Blog
if(isset($_GET['Blog_delete_id']))
{
	$del_blg=mysqli_query($conn,"delete from blogs where blog_id='$_GET[Blog_delete_id]'");
	if($del_blg)
	{
		echo "<script>
		alert('Blog Deleted');
		window.location.href='Blog.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('Blog Updation Fail');
		window.location.href='Blog.php';
		</script>";
	}
}

//add service --

if(isset($_POST['Service_sub']))
{
	$serv_id=mysqli_query($conn,"select * from services");
	$servy=mysqli_num_rows($serv_id);
	++$servy;
	$ser_img_name=$_FILES['service_img']['name'];
    	$serimg_tmp_name=$_FILES['service_img']['tmp_name'];
    	$serv_img_path=$servy.'_'.$ser_img_name;
		$service_path="Services/".$serv_img_path;
    	move_uploaded_file($serimg_tmp_name,$service_path);
			
			$serv_img=$servy.'_'.$_FILES['service_img']['name'];
	
			$ins_blog=mysqli_query($conn,"INSERT INTO `services`(`service_title`, `service_desc`, `service_img`,`servicetype_id`) VALUES ('$_POST[service_title]','$_POST[service_desc]','$serv_img','$_POST[service_type]')");
	
	if($ins_blog)
	{
		echo "<script>
		alert('Service Inserted');
		window.location.href='add_services.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('Service Insertion Fail As May be Image size is more than 2 MB');
		window.location.href='add_services.php';
		</script>";
	}
}

//service update

if(isset($_POST['Service_update']))
{
	
	$servy1=mt_rand();
	
	$ser_img_name1=$_FILES['service_img1']['name'];
    	$serimg_tmp_name1=$_FILES['service_img1']['tmp_name'];
    	$serv_img_path1=$servy1.'_'.$ser_img_name1;
		$service_path1="Services/".$serv_img_path1;
    	move_uploaded_file($serimg_tmp_name1,$service_path1);
			$ser_oimg=$_FILES['service_img1']['name'];
			$serv_img1=$servy1.'_'.$_FILES['service_img1']['name'];
			if($ser_oimg!='')
			{
			$up_ser=mysqli_query($conn,"UPDATE `services` SET `service_type`='$_POST[service_type1]',`service_title`='$_POST[service_title1]',`service_desc`='$_POST[service_desc1]',`service_img`='$serv_img1' WHERE `service_id`='$_POST[service_id]'");
			}else{
				$up_ser=mysqli_query($conn,"UPDATE `services` SET `service_type`='$_POST[service_type1]',`service_title`='$_POST[service_title1]',`service_desc`='$_POST[service_desc1]' WHERE `service_id`='$_POST[service_id]'");
			}
	if($up_ser)
	{
		echo "<script>
		alert('Service Updated');
		window.location.href='add_services.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('Service Updation Fail As May be Image size is more than 2 MB');
		window.location.href='add_services.php';
		</script>";
	}
}

if(isset($_GET['service_delte_id']))
{
	$del_ser=mysqli_query($conn,"delete from services where service_id='$_GET[service_delte_id]'");
	if($del_ser)
	{
		echo "<script>
		alert('Service Deleted');
		window.location.href='add_services.php';
		</script>";

		
	}
	
	else
	{
		echo "<script>
		alert('Service Deletion');
		window.location.href='add_services.php';
		</script>";
	}
}

//if()
?>
