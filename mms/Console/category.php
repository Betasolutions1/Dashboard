<?php
include 'config.php';
error_reporting(0);
session_start();
if(!$_SESSION['username'])
{
	header("location:index.php");
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
        <title>Dashboard Country</title>

        <!-- Table css -->
        <link href="assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

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

    <script type="text/javascript">
function validate()
      {
      
         if(document.form.country.value == "" )
         {
            alert( "Please provide text!" );
            document.form.text.focus() ;
            return false;
         }
}
</script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include("topbar.php");?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include("sidemenu.php");?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-md-12">
                                        <?php
                                        if($_GET['upcid'])
										{
											$ret_code=mysqli_query($conn,"select * from category where category_id='$_GET[upcid]'");
											$fer=mysqli_fetch_array($ret_code);
										?>
                                            <form class="form-horizontal" action="manual_mysqli.php" role="form" name="form" method="post" onsubmit="return validate()">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="category1" value="<?php echo $fer['category_name'];?>">
                                                    </div>
                                                    <input type="hidden" name="category_id" value="<?php echo $_GET['upcid']?>">
                                                </div><br>
                                                <div class="form-group" align="center">
                                                <button type="submit" name="update_category" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">update</button>
                                                </div>
                                            </form>
                                            <?php
										}else
										{
											?>
                                            <form class="form-horizontal" action="manual_mysqli.php" role="form" name="form" method="post" onsubmit="return validate()">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="category" >
                                                    </div>
                                                </div><br>
                                                <div class="form-group" align="center">
                                                <button type="submit" name="sub_category" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Submit</button>
                                                </div>
                                            </form>
                                            <?php
										}
											?>
                                        </div>
                                    </div><!-- end row -->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card-box">


                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sno.</th>
                                                        <th data-priority="1">Category Name</th>
                                                        <th colspan="2">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
												$sno=0;
                                                $conty=$conn->prepare("SELECT `Category_id`, `category_name` FROM `category`");
												$conty->execute();
												$conty->bind_result($cid,$cname);
												$conty->store_result();
												while($conty->fetch())
												{  ++$sno;
												?>
                                                    <tr>
                                                        <th><?php echo $sno;?></th>
                                                        <td><?php echo $cname;?></td>
                                                        <td><a href="category.php?upcid=<?php echo $cid;?>">Edit</a></td>
                                                        <td><a href="manual_mysqli.php?delete_cid=<?php echo $cid;?>">Delete</a></td>
                                                        
                                                    </tr>
                                                    <?php
												}
													?>
                                                   <!-- <tr>
                                                        <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                        <td>25.50</td>
                                                        <td>12:27PM</td>
                                                        <td>0.66 (2.67%)</td>
                                                        <td>24.84</td>
                                                        <td>25.37</td>
                                                        <td>25.50 x 71100</td>
                                                        <td>25.51 x 17800</td>
                                                        <td>31.50</td>
                                                    </tr>-->
                                                   
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2016 © BetaSolutions
                </footer>

            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



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
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- responsive-table-->
        <script src="assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>