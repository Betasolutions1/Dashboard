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
        <title>Dynamic Pages Creations</title>

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

        <script src="assets/js/modernizr.min.js"></script>
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
                                            <form class="form-horizontal" role="form" method="post" action="manual_mysqli.php">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Text</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="page_name" class="form-control" >
                                                    </div>
                                                </div><div class="row" align="center">
                                                <div class="col-md-4">
                                            <div class="radio">
                                                <input type="radio" name="dynamic_page" id="radio1" value="left" checked>
                                                <label for="radio1">
                                                    <img src="images/page1.png" width="100">
                                                </label>
                                            </div></div>
                                              <div class="col-md-4">
                                            <div class="radio">
                                                <input type="radio" name="dynamic_page" id="radio1" value="middle" checked>
                                                <label for="radio1">
                                                    <img src="images/page2.png" width="100">
                                                </label>
                                            </div></div>
                                              <div class="col-md-4">
                                            <div class="radio">
                                                <input type="radio" name="dynamic_page" id="radio1" value="right" checked>
                                                <label for="radio1">
                                                    <img src="images/right.png" width="100">
                                                </label>
                                            </div></div></div><br>
                                                <div class="form-group" align="center">
                                                <button type="submit" name="sub_menu" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Success</button>
                                                </div>
                                            </form>
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
                                                        <th>Sno</th>
                                                        <th data-priority="6">Page name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
												$sno=0;
                                                $ret_me=$conn->prepare("select `page_id`,`page_name` from pages");
												$ret_me->execute();
												$ret_me->bind_result($id,$pgname);
												$ret_me->store_result();
												while($ret_me->fetch())
												{	++$sno;											
												?>
                                                    <tr>
                                                        <th><?php echo $sno;?></th>
                                                        <td><?php echo $pgname; ?></td>
                                                        <td><a href="manual_mysqli.php?menu_delete_id=<?php echo $id; ?>">Delete</td>
                                                        
                                                    </tr>
                                                  <?php
												}
												  ?>  
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
                    2016 © Adminto.
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