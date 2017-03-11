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
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div><div class="row" align="center">
                                                <div class="col-md-4">
                                            <div class="radio">
                                                <input type="radio" name="radio" id="radio1" value="left" checked>
                                                <label for="radio1">
                                                    <img src="images/page1.png" width="100">
                                                </label>
                                            </div></div>
                                              <div class="col-md-4">
                                            <div class="radio">
                                                <input type="radio" name="radio" id="radio1" value="middle" checked>
                                                <label for="radio1">
                                                    <img src="images/page2.png" width="100">
                                                </label>
                                            </div></div>
                                              <div class="col-md-4">
                                            <div class="radio">
                                                <input type="radio" name="radio" id="radio1" value="right" checked>
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
                                                        <th>Company</th>
                                                        <th data-priority="1">Last Trade</th>
                                                        <th data-priority="3">Trade Time</th>
                                                        <th data-priority="1">Change</th>
                                                        <th data-priority="3">Prev Close</th>
                                                        <th data-priority="3">Open</th>
                                                        <th data-priority="6">Bid</th>
                                                        <th data-priority="6">Ask</th>
                                                        <th data-priority="6">1y Target Est</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                        <td>597.74</td>
                                                        <td>12:12PM</td>
                                                        <td>14.81 (2.54%)</td>
                                                        <td>582.93</td>
                                                        <td>597.95</td>
                                                        <td>597.73 x 100</td>
                                                        <td>597.91 x 300</td>
                                                        <td>731.10</td>
                                                    </tr>
                                                    <tr>
                                                        <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                        <td>25.50</td>
                                                        <td>12:27PM</td>
                                                        <td>0.66 (2.67%)</td>
                                                        <td>24.84</td>
                                                        <td>25.37</td>
                                                        <td>25.50 x 71100</td>
                                                        <td>25.51 x 17800</td>
                                                        <td>31.50</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                        <td>18.65</td>
                                                        <td>12:45PM</td>
                                                        <td>0.97 (5.49%)</td>
                                                        <td>17.68</td>
                                                        <td>18.23</td>
                                                        <td>18.65 x 10300</td>
                                                        <td>18.66 x 24000</td>
                                                        <td>21.12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                        <td>15.81</td>
                                                        <td>12:25PM</td>
                                                        <td>0.11 (0.67%)</td>
                                                        <td>15.70</td>
                                                        <td>15.94</td>
                                                        <td>15.79 x 6100</td>
                                                        <td>15.80 x 17000</td>
                                                        <td>18.16</td>
                                                    </tr>
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