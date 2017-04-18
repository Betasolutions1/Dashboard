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
        <title>Dashboard - Vedios Upload</title>

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
                                        <?php
                                        if($_GET['vlang'])
										{
											$rety=mysqli_query($conn,"select * from vedios where vedio_id='$_GET[vlang]'");
											$res=mysqli_fetch_array($rety);
											$get_ser_exe=mysqli_query($conn,"select * from services where service_id='$res[service_id]'");
											$get_ser_type=mysqli_fetch_array($get_ser_exe);
										?>
                        					<form class="form-horizontal" role="form" method="post" action="manual_mysqli.php" enctype="multipart/form-data">
                                             <?php
                                            $service_type_exe=mysqli_query($conn,"select * from service_type where stype_name='Education'");
											$ser_type=mysqli_fetch_array($service_type_exe);
											$ser_exe=mysqli_query($conn,"select * from services where service_type='$ser_type[stype_id]'");
											?>
                                             <div class="form-group">
	                                                <label class="col-md-2 control-label">Service Type</label>
	                                                <div class="col-md-10">
	                                                    <select class="form-control" name="service_type1">
                                                        <option value="<?php echo $get_ser_type['service_id'];?>"><?php echo $get_ser_type['service_title'];?></option>
                                                        <?php while($services=mysqli_fetch_array($ser_exe))
														{
															?>
                                                        <option value="<?php echo $services['service_id']?>"><?php echo $services['service_title'];?></option>
                                                        <?php } ?>
                                                        </select>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Video Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="video_title1" class="form-control" value="<?php echo $res['vedio_title'];?>" >
	                                                </div>
	                                            </div>
                                                 <div class="form-group">
	                                                <label class="col-md-2 control-label">video Path</label>
	                                                <div class="col-md-10">
	                                                    <textarea  name="video_path1" class="form-control" ><?php echo $res['vedio_path'];?></textarea>
	                                                </div>
                                                     
	                                            </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Video Image</label>
                                                    <div class="col-md-10">
                                                        <input type="file" class="form-control" name="vedio_image1"/><?php echo $res['video_image'];?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Description</label>
                                                    <div class="col-md-10">
                                                        <textarea id="elm1" name="video_desc1"><?php echo $res['vedio_desc'];?></textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="video_id" value="<?php echo $_GET['vlang'];?>">
                                                <div class="form-group" align="center">
	                                            <button type="submit" name="video_update" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Update</button>
                                                </div>
	                                        </form>
                                            <?php
										}else
										{
										
											?>
                                            <form class="form-horizontal" role="form" method="post" action="manual_mysqli.php" enctype="multipart/form-data">
                                            <?php
                                            $service_type_exe=mysqli_query($conn,"select * from service_type where stype_name='Education'");
											$ser_type=mysqli_fetch_array($service_type_exe);
											$ser_exe=mysqli_query($conn,"select * from services where service_type='$ser_type[stype_id]'");
											?>
                                             <div class="form-group">
	                                                <label class="col-md-2 control-label">Service Type</label>
	                                                <div class="col-md-10">
	                                                    <select class="form-control" name="service_type">
                                                        <option >Select Service Type</option>
                                                        <?php while($services=mysqli_fetch_array($ser_exe))
														{?>
                                                        <option value="<?php echo $services['service_id']?>"><?php echo $services['service_title'];?></option>
                                                        <?php } ?>
                                                        </select>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Video Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="vedio_title" class="form-control" >
	                                                </div>
	                                            </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Video Path</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="vedio_path"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Video Image</label>
                                                    <div class="col-md-10">
                                                        <input type="file" class="form-control" name="vedio_image"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Description</label>
                                                    <div class="col-md-10">
                                                        <textarea id="elm1" name="vedio_desc"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group" align="center">
	                                            <button type="submit" name="vedio_submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Success</button>
                                                </div>
	                                        </form>
                                            <?php
										}
											?>
                        				</div>
                        			</div><!-- end row -->
                        		</div>
                        	</div><!-- end col -->
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->
                <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">


                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                    <th>Service Type</th>
                                                        <th>Title</th>
                                                        <th data-priority="1">Video Path</th>
                                                        <th data-priority="1">Description</th>
                                                         <th data-priority="1">Image</th>
                                                       <th colspan="2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $rete_video=$conn->prepare("SELECT vedio_id,service_id,vedio_title,vedio_path,video_image,vedio_desc FROM `vedios`");
												$rete_video->execute();
												
												 $rete_video->bind_result($id,$stype,$title,$path,$img,$data);
                                                $rete_video->store_result();
                                               //if($rete_about->num_rows !=0)  
												 while($rete_video->fetch()) {
												 $get_seres_exe=mysqli_query($conn,"select * from services where service_id='$stype'");
												 $get_sert=mysqli_fetch_array($get_seres_exe);
											
												?>
                                                    <tr>
                                                    <td><?php echo $get_sert['service_title'];?></td>
                                                        <td><?php echo $title;?></td>
                                                         <td><?php echo $path;?></td>
                                                        <td><?php echo $data;?></td>
                                                        <td><img src="vedios/<?php echo $img;?>" height="50"></td>
                                                        <td><a href="vedios.php?vlang=<?php echo $id;?>">Edit</a></td>
                                                        <td><a href="manual_mysqli.php?vedio_del_id=<?php echo $id;?>">Delete</a></td>
                                                      
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
                    2017 © BetaSolutions.
                </footer>
            </div>
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
<script src="assets/plugins/tinymce/tinymce.min.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js" type="text/javascript"></script>
 <script type="text/javascript">
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>

    </body>
</html>