<?php
include 'config.php';
error_reporting(0);
session_start();
if(!$_SESSION['username'])
{
	header("location:index.php");
}
if(isset($_POST['change_pwd']))
{
	if($_POST['new_pwd']==$_POST['con_pwd'])
	{
		
		$exe=$conn->prepare("UPDATE `admin` SET `admin_pwd`=? WHERE `admin_pwd`=?");
		$exe->bind_param('ss',$new,$old);
		$new=md5($_POST['new_pwd']);
		$old=md5($_POST['old_pwd']);
		$exe->execute();
		if($exe)
		{
			echo "<script>alert('Password Changed, Please Be Login');</script>";
			session_destroy();
			header("location:index.php");
		}
		
	}
	else
	{
		echo "<script>alert('Doesnt Match the Confirm Password');</script>";
	}
	
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>Change Password</title>

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="#" class="logo"><span>Website<span>Name</span></span></a>
                <h5 class="text-muted m-t-0 font-600">Website Tagline</h5>
            </div>
        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Update Password</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="" method="post">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="old_pwd" required="" placeholder="Old Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="new_pwd" required="" placeholder="New Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="con_pwd" required="" placeholder="Re Enter Password">
                            </div>
                        </div>

                        

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button name="change_pwd" class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Update</button>
                            </div>
                        </div>

                       
                    </form>

                </div>
            </div>
            <!-- end card-box-->

            
        </div>
        <!-- end wrapper page -->
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>