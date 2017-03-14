<?php 
session_start();
if(!$_SESSION['id']){
    header("location:index.php");
}
include 'config.php';
if(isset($_POST['submit'])){
    $state=$_POST['state'];
    $c=$_POST['cname'];
    $ret=mysql_query("select state from state where `state`='$state'");
    $ret2=mysql_fetch_array($ret);
    if($ret2!=0){ 
        echo "state already existed";
}
else{
$ins=mysql_query("insert into state(`state`,`country_id`) values('$state','$c')");
}
}
if(isset($_POST['update'])){
    $s=$_POST['state1'];
    $up=mysql_query("update state set `state`='$s' where `s_id`='$_POST[update_id]'");
}
if($_GET['del_id']){
    $del=mysql_query("delete from state where `s_id`='$_GET[del_id]'");
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
        <title>Adminto - Responsive Admin Dashboard Template</title>

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
      
         if(document.form.text.value == "" )
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
                                        <?php error_reporting(0); if($_GET['edit_id']){

                                            $r1=mysql_query("select * from state where `s_id`='$_GET[edit_id]'");
                                            $r2=mysql_fetch_array($r1);
                                            ?>
                                        <form class="form-horizontal" method="post" role="form" name="form" onsubmit="return validate()">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">State</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="state1" value="<?php echo $r2['state'];?>">
                                                    </div>
                                                </div>    
                                                <?php
                                                $sel=mysql_query("select * from country");
                                                ?>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Input Select</label>
                                                    <div class="col-sm-10">
                                                    <!--onChange="getState(this.value)"-->
                                                        <select name="cname" class="form-control" >
                                                            <option>1</option>
                                                            <?php 
                                                            while($sel2=mysql_fetch_array($sel)){
                                                            ?><option value="<?php echo $sel2['c_id'];?>"><?php echo $sel2['country'];?></option><?php }?>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5" name="update">Update</button>
                                                </div><input type="hidden" name="update_id" value="<?php echo $r2['s_id']?>">
                                            </form>
                                            <?php } else {?>
                                            <form class="form-horizontal" method="post" role="form" name="form" onsubmit="return validate()">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">State</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="state" >
                                                    </div>
                                                </div>    
                                                <?php
                                                $sel=mysql_query("select * from country");
                                                ?>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Input Select</label>
                                                    <div class="col-sm-10">
                                                    <!--onChange="getState(this.value)"-->
                                                        <select name="cname" class="form-control" >
                                                            <option>1</option>
                                                            <?php 
                                                            while($sel2=mysql_fetch_array($sel)){
                                                            ?><option value="<?php echo $sel2['c_id'];?>"><?php echo $sel2['country'];?></option><?php }?>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5" name="submit">Submit</button>
                                                </div>
                                            </form>
                                            <?php } ?>
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
                                                        <th>S.No</th>
                                                        <th data-priority="1">State</th>
                                                        <th data-priority="1">Cid</th>
                                                        <th data-priority="3">Manage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $count=0;
                                                    $sel3=mysql_query("select * from state");
                                                    while ($sel4=mysql_fetch_array($sel3)){
                                                        echo "<tr>";
                                                        echo "<td>".++$count."</td>";
                                                        echo "<td>".$sel4['state']."</td>";
                                                        echo "<td>".$sel4['country_id']."</td>";
                                                        ?>
                                                        <td><a href="State.php?edit_id=<?php echo $sel4['s_id'];?>">edit</a>/<a href="State.php?del_id=<?php echo $sel4['s_id'];?>">delete</a></td>
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