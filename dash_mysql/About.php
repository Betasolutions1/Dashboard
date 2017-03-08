<?php 
session_start();
if(!$_SESSION['id']){
    header("location:index.php");
}
include 'config.php';
if(isset($_POST['submit'])){
     $title=$_POST['title'];
    $desc=$_POST['description'];
    $ins=mysql_query("insert into about_us(`title`,`data`) values('$title','$desc')");
   }
if(isset($_POST['update'])){
    $t=$_POST['title1'];
    $d=$_POST['description1'];
    $up=mysql_query("update about_us set `title`='$t',`data`='$d' where `id`='$_POST[edit_id]' ");
}
if(isset($_GET['del_id'])){
    $del=mysql_query("delete from about_us where `id`='$_GET[del_id]'");
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

         if(document.form.area.value == "" )
         {
            alert( "Please provide Description" );
            document.form.area.focus() ;
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
                                        error_reporting(0);
                                        if($_GET['edit_id']){
                                            $sel3=mysql_query("select * from about_us where id='$_GET[edit_id]'");
                                            $sel4=mysql_fetch_array($sel3);
                                            ?>
                                        <form class="form-horizontal" method="post" role="form" name="form" onsubmit="return validate()">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Title</label>
                                                    <div class="col-md-10">
                                                        <input type="text"  class="form-control" name="title1" value="<?php echo $sel4['title'];?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                               
                                                    <label class="col-md-2 control-label" >Description</label>
                                                    <div class="col-md-10">
                                                   
                                                        <textarea id="elm1" name="description1"><?php echo $sel4['data'];?>"</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group" align="center">
                                                <button type="submit" na class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5" name="update">Update</button>
                                                </div>
                                            </form>
                                            <?php } else {?>
                        					<form class="form-horizontal" method="post" role="form" name="form" onsubmit="return validate()">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text"  class="form-control" name="title">
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                               
                                                    <label class="col-md-2 control-label" >Description</label>
                                                    <div class="col-md-10">
                                                   
                                                        <textarea id="elm1" name="description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group" align="center">
	                                            <button type="submit" na class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5" name="submit">Submit</button>
                                                </div>
	                                        </form>
                                            <?php }?>
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
                                                        <th>sno</th>
                                                        <th data-priority="1">title</th>
                                                        <th data-priority="3">desc</th>
                                                        <th data-priority="1">manage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php 
                                                   $sel=mysql_query("select * from  about_us");
                                                   $count=0;
                                                   while($sel2=mysql_fetch_array($sel)){
                                                    echo "<tr>";
                                                    echo "<td>".++$count."</td>";
                                                    echo "<td>".$sel2['title']."</td>";
                                                    echo "<td>".$sel2['data']."</td>";
                                                    ?>
                                                    <td><a href="About.php?edit_id=<?php echo $sel2['id'];?>">edit</a>/<a href="About.php?del_id=<?php echo $sel2['id'];?>">delete</a></td>
                                                    <?php 
                                                    echo "</tr>";
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