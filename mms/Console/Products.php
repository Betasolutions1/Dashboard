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
        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- Editatable  Css-->
        <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css" />
        <link rel="stylesheet" href="assets/plugins/jquery-datatables-editable/datatables.css" />

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

        <!-- for popup -->

<script src="popup/libs/jquery-loader.js"></script>

    <!-- Load local QUnit -->
    <link rel="stylesheet" href="popup/libs/qunit/qunit/qunit.css" media="screen">
    <script src="popup/libs/qunit/qunit/qunit.js"></script>

    <!-- Load local lib and tests -->
    <link rel="stylesheet" href="popup/src/remodal.css">
    <link rel="stylesheet" href="popup/src/remodal-default-theme.css">
    <script src="popup/src/remodal.js"></script>
    <script src="remodal_test.js"></script>
    <style>
      .remodal-overlay.without-animation.remodal-is-opening,
      .remodal-overlay.without-animation.remodal-is-closing,
      .remodal.without-animation.remodal-is-opening,
      .remodal.without-animation.remodal-is-closing,
      .remodal-bg.without-animation.remodal-is-opening,
      .remodal-bg.without-animation.remodal-is-closing {
        animation: none;
      }
    </style>

        <!-- end popup -->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           

                <!-- LOGO -->
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

                        
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="m-b-30">
                                                    <a href="#" id="addProduct" data-remodal-target="modal" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>



<div class="remodal" data-remodal-id="modal">
  <a data-remodal-action="close" class="remodal-close"></a>
<div class="row">

                            <div class="col-md-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-md-12">
                                      
                                          
                                            <form class="form-horizontal" role="form" method="post" action="manual_mysqli.php"  enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Product Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="pname" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Description</label>
                                                    <div class="col-md-10">
                                                        <textarea id="elm1" name="pdesc"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Product Price</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="pprice" class="form-control" >
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Image</label>
                                                    <div class="col-md-10">
                                                        <input type="file" class="form-control" name="pimage">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Select Country</label>
                                                    <div class="col-sm-10">
                                                    <!--onChange="getState(this.value)"-->
                                                        <select name="category_id" class="form-control" required >
                                                       
                                                            <option>Select Country</option>
                                                            <?php 
                                                            $res_exe=mysqli_query($conn,"select * from category");
                                                            while($res=mysqli_fetch_array($res_exe))
                                                            {
                                                            ?>
                                                           <option value="<?php echo $res['category_id']?>"><?php echo $res['category_name']; ?></option>
                                                           <?php
                                                            }
                                                           ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="remodal-confirm" type="submit" name="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end col -->
                        </div>
  
</div> 

<div class="editable-responsive">
                                        <table class="table table-striped table-bordered" id="datatable-buttons">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Product Name</th>
                                                        <th>product Desc</th>
                                                        <th>product Price</th>
                                                        <!-- <th>product image</th> -->
                                                        <th>Category</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 

                                                $psel=mysqli_query($conn,"select category_name,product_id,product_name,product_desc,product_price,product_image from product inner join category on product.category_id=category.category_id");
                                                $count=0;
                                                while($psel2=mysqli_fetch_array($psel)){

                                                    echo "<tr>";
                                                    echo "<td>".++$count."</td>";
                                                    echo "<td>".$psel2['product_name']."</td>";
                                                    echo "<td>".$psel2['product_desc']."</td>";
                                                    echo "<td>".$psel2['product_price']."</td>";
                                                    // echo "<td>"?><!-- img src="product/<?php //echo $psel2['product_image'];?>" height=20 width=30> --><?php //"</td>";
                                                    echo "<td>".$psel2['category_name']."</td>";?>
                                                    <td><a href="#" id="addProduct" data-remodal-target="modal1_<?php echo $psel2['product_id'];?>" >edit</a> /
                                                        <a  href="manual_mysqli.php?del_id=<?php echo $psel2['product_id'];?>">delete</a>
                                                    </td>

                                                    <!-- edit -->
                                        
<div class="remodal" data-remodal-id="modal1_<?php echo $psel2['product_id'];?>" >
  <button data-remodal-action="close" class="remodal-close"></button>
  <div>

                                     <div class="col-md-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-md-12">
                                      
                                        <?php 
                                            $pdsp=mysqli_query($conn,"select * from product where product_id='$psel2[product_id]'");
                                            $pdsp2=mysqli_fetch_array($pdsp);
                                        ?>
                                        <form class="form-horizontal" role="form" method="post" action="manual_mysqli.php"  enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Product Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="pname1" class="form-control" value="<?php echo $pdsp2['product_name'];?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" style="margin-left: -91px;margin-top: 30px">Description</label>
                                                    <div class="col-md-10"  style="margin-left: 95px;margin-top: -30px;margin-bottom: 30px">
                                                        <textarea id="elm1" name="pdesc1"><?php echo $pdsp2['product_desc'];?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Product Price</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="pprice1" class="form-control" value="<?php echo $pdsp2['product_price'];?>">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label" style="margin-left: -94px;margin-top: 30px">Image</label>
                                                    <div class="col-md-10" style="margin-left: 95px;margin-top: -30px;margin-bottom: 30px">
                                                        <input type="file" class="form-control" name="pimage1" value="<?php echo $pdsp2['product_image'];?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Select Country</label>
                                                    <div class="col-sm-10">
                                                    <!--onChange="getState(this.value)"-->
                                                        <select name="category_id" class="form-control" required >
                                                       
                                                            <option>Select Country</option>
                                                            <?php 
                                                            $res_exe=mysqli_query($conn,"select * from category");
                                                            while($res=mysqli_fetch_array($res_exe))
                                                            {
                                                            ?>
                                                           <option value="<?php echo $res['category_id']?>"><?php echo $res['category_name']; ?></option>
                                                           <?php
                                                            }
                                                           ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="edit_id1" value="<?php echo $pdsp2['product_id']?>">
                                                <button class="remodal-confirm" type="submit" name="update" style="margin-top: 730px;margin-left: -15px">Update</button>
                                            </form></div></div></div></div>
  </div>
  
</div>
<!-- edit end -->
                                                    
                                                    <?php 
                                                    echo "</tr>";
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end: panel body -->

                                </div> <!-- end panel -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2016 © Adminto.
                </footer>

            </div>


            <!-- MODAL -->
            <div id="dialog" class="modal-block mfp-hide">
                <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p>Are you sure that you want to delete this row?</p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
                                <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                                <button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <!-- end Modal -->


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

        <!-- Editable js -->
        <script src="assets/plugins/tinymce/tinymce.min.js"></script>
        <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
        <!-- init -->
        <script src="assets/pages/datatables.editable.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>


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

        <!-- datatable -->

         <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <!-- App js -->
       

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>

    </body>
</html>