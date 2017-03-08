<?php
include 'config.php';
session_start();


if(isset($_POST['login'])){
   
   $username = $_POST['user_name'];
    $password = $_POST['password'];

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





/*if(isset($_POST['login']))
{
	$log_cred=$conn->prepare("select * from admin where admin_name=? AND admin_pwd=?");
	$log_cred->bind_param("ss",$admin_name,$ad_pwd);
	$admin_name=$_POST['user_name'];
	$ad_pwd=$_POST['password'];
	$result=$log_cred->execute(MYSQLI_ASSOC);
	$result->bind_result($name, $bio);
	if(count($result) != 0)
	{
	$logged = $result->fetch_array();
	
		
		$_SESSION['admin_name']=$logged['admin_name'];
		header("location:About.php");
		
	}
	else{
		echo "invalid";
	}
	
	
}
*/

/*if(isset($_POST['sub_about']))
{
	$ins_about=$conn->prepare("INSERT INTO `about_us`( `title`, `data`) VALUES (?,?)");
	// prepare and bind
    //$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
    $ins_about->bind_param("ss", $title, $data);

   // set parameters and execute
   $title = $_POST[''];
   $data = $_POST[''];
   $ins_about->execute();
	
}
if(isset($_POST['sub_blogs']))
{
	$ins_blog=$conn->prepare("INSERT INTO `blogs`( `blog_title`, `blog_desc`, `blog_image`) VALUES (?,?,?)");
   $ins_blog->bind_param("sss", $blog_title, $blog_desc,$blog_image);
   $blog_title = $_POST[''];
   $blog_desc = $_POST[''];
   $blog_image=$_POST[''];
   $ins_blog->execute();
}
if(isset($_POST['sub_quotes']))
{
	$ins_quote=$conn->prepare("INSERT INTO `qoutes`( `quote`, `auother`) VALUES (?,?)");
   $ins_quote->bind_param("ss", $quote, $auother);
   $quote = $_POST[''];
   $auother = $_POST[''];
   $ins_quote->execute();
}
if(isset($_POST['sub_testimonials']))
{
	$ins_tesies=$conn->prepare("INSERT INTO `testimonials`( `testimonial`, `author`) VALUES (?,?)");
   $ins_tesies->bind_param("ss", $tesimi, $testi_auother);
   $tesimi = $_POST[''];
   $testi_auother = $_POST[''];
   $ins_tesies->execute();
}
if(isset($_POST['sub_webinfo']))
{
	$ins_wdinf=$conn->prepare("INSERT INTO `website_info`( `title`, `webs_info`) VALUES (?,?)");
   $ins_wdinf->bind_param("ss", $w_title, $w_info);
   $w_title = $_POST[''];
   $w_info = $_POST[''];
   $ins_wdinf->execute();
}
?>

<!---Select Queries--->

<?php
 $cust_rev = $conn->prepare("SELECT * FROM coustomer_reviews"); 
    $cust_rev->execute();

    // set the resulting array to associative
    $cust_result = $cust_rev->fetch_array(MYSQLI_ASSOC); 
	foreach($cust_result as $row)
	{ 
        echo $row['customer_name'];
		echo $row['customer_phone'];
		echo $row['review'];
		echo $row['customer_email'];
		echo $row['review_product_code'];
    }
	
	
	$blog_review = $conn->prepare("SELECT * FROM blog_reviews"); 
    $blog_review->execute();

    // set the resulting array to associative
    $blog_result = $blog_review->fetch_array(MYSQLI_ASSOC); 
	foreach($blog_result as $row)
	{ 
        echo $row['customer_name'];
		echo $row['customer_phone'];
		echo $row['customer_email'];
		echo $row['blog_review'];
		
    }
	*/

?>
