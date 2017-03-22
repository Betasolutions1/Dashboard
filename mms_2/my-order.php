<?php
include 'Console/config.php';
session_start();
error_reporting(0);
if(!$_SESSION['MMS_User'])
{
	header("location:login.php");
}

?>
<!doctype html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"> 
        <meta name="keywords" content=""> 
        <meta name="description" content=""> 
        <title>MMS - My Multi Solutions</title>         
        <!-- FAVICON AND APPLE TOUCH -->         
        <link rel="shortcut icon" href="images/icons/favicon.png"> 
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/icons/apple-touch-57x57.png"> 
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icons/apple-touch-72x72.png"> 
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icons/apple-touch-114x114.png"> 
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icons/apple-touch-144x144.png"> 
        <!-- FONTS -->         
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic"> 
        <!-- BOOTSTRAP CSS -->         
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
        <!-- FONT AWESOME -->         
        <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css"> 
        <!-- MIU ICON FONT -->         
        <link rel="stylesheet" href="assets/miuiconfont/miuiconfont.css"> 
        <!-- FANCYBOX -->         
        <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css"> 
        <!-- REVOLUTION SLIDER -->         
        <link rel="stylesheet" href="assets/js/revolutionslider/css/settings.css"> 
        <!-- BxSLIDER -->         
        <link rel="stylesheet" href="assets/js/bxslider/jquery.bxslider.css"> 
        <!-- YOUTUBE PLAYER -->         
        <link rel="stylesheet" href="assets/js/ytplayer/css/YTPlayer.css"> 
        <!-- ANIMATIONS -->         
        <link rel="stylesheet" href="assets/js/animations/animate.min.css"> 
        <!-- CUSTOM & PAGES STYLE -->         
        <link rel="stylesheet" href="assets/css/custom1.css"> 
        <link rel="stylesheet" href="assets/css/pages-style1.css"> 
    </head>     
    <body> 
        <div id="page-wrapper"> 
            <!-- HEADER -->             
            <header> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-1"> 
                            <!-- LOGO -->                             
                            <a id="logo" href="index.php"> 
                                <img src="images/backgrounds/logo.png" alt=""> 
                            </a>                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-11"> 
                            <!-- SEARCH -->                             
                            <div id="search-container"> 
                                 <form id="search-form" name="search-form" method="get" action="search.php"> 
                                    <fieldset> 
                                        <input type="text" name="search_name" placeholder="Enter your keyword here and then press enter..."> 
                                    </fieldset>                                     
                                </form>                               
                            </div>
                            <!-- search-container -->                             
                            <a class="search-button" href="#"></a> 
                            <!-- MENU -->                             
                           <nav> 
                                <a id="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a> 
                                <ul class="menu clearfix" id="menu"> 
                                    <li> 
                                        <a href="index.php">Home</a> 
                                    </li>                                     
                                    <li>
                                        <a href="about-us.php">About</a>
                                    </li>                                     
                                    <li class="dropdown"> 
                                        <a href="services1.php">Services</a> 
                                        <ul> 
                                            <?php 
										$get_service_type_exe=mysqli_query($conn,"select * from service_type");
										while($get_styps=mysqli_fetch_array($get_service_type_exe))
										{
										?>
                                            <li>
                                                <a href="services1.php?Stype_Id=<?php echo $get_styps['stype_id'];?>"><?php echo $get_styps['stype_name'];?></a>
                                            </li>  
                                            
                                            <?php
										}
											?>                                                 
                                        </ul>                                         
                                    </li>                                     
                                    <li class=""> 
                                        <a href="blog-columns.php">Blog</a> 
                                    </li>
                                    <li>
                                        <a href="shop.php">shop</a>
                                    </li>
                                     <li class="dropdown active"> 
                                        <a href="">Pages</a> 
                                        <ul> 
                                        <?php
                                        if(!$_SESSION['MMS_User'])
										{
										?>
                                            <li>
                                                <a href="login.php">Login</a>
                                            </li>                                             
                                            <li>
                                                <a href="register.php">Register</a>
                                            </li> 
                                            <?php
										}else{
											?>                                            
                                            <li>
                                                <a href="Myaccount.php">My Account</a>
                                            </li>
                                             <li>
                                                <a href="my-order.php">My Account</a>
                                            </li>
                                            <li>
                                                <a href="logout.php">Logout</a>
                                            </li> 
                                            <?php
										}
											?>                                            
                                        </ul>                                         
                                    </li>                                          
                                    <li class=""> 
                                        <a href="contact.php">Contact</a>
                                    </li>
                                          <li class="dropdown"> 
                                        <a href="#">Others</a> 
                                        <ul> 
                                        <?php
                                        $new_pgs=mysqli_query($conn,"select * from pages");
                                        while($res_pages=mysqli_fetch_array($new_pgs))
                                        {
                                        ?>
                                            <li>
                                                <a href="<?php echo $res_pages['page_name']?>.php"><?php echo $res_pages['page_name']?></a>
                                            </li>                                             
                                            
                                            <?php
                                        }
                                            ?>                                            
                                        </ul>                                         
                                    </li> 
                                    <li><a href="Cart.php" style="font-size:20px;"><i class="fa fa-shopping-cart"></i></a></li>                                    
                                </ul>                                 
                            </nav>                              
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
            </header>
            <!-- HEADER -->             
            <!-- CONTENT -->             
            <div class="content"> 
                <div id="page-header"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <h4>Register</h4> 
                            </div>
                            <!-- col -->                             
                            <div class="col-sm-6"> 
                                <ol class="breadcrumb"> 
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li>
                                    <li class="active">Register</li>                                     
                                </ol>                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div>
                    <!-- ontainer -->                     
                </div>
                <!-- page-header -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-12"> 
                            <div class="headline style-3"> 
                                <h5>Say hello</h5> 
                                <h2>Order And Billing DetailsS</h2> 
                                <p> Temporibus autem quibusdam et aut officiis debitis aut rerum.</p> 
                            </div>
                            <!-- headline -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <div class="container"> 
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-offset-2 col-md-8 col-sm-12 "> 
                      
                        <div class="col-md-6 " style="border-color:solid 1px #ccc;"> 
                            <div class="headline style-1"> 
                                <h4>Order Details</h4> 
                                <!--<h2>Our Work</h2>--> 
                            </div>
                            <?php 
							$get_or_dets_exe=mysqli_query($conn,"select * from orders where customer_id='$_SESSION[User_id]' order by order_id desc limit 1");
							$ger_ordet=mysqli_fetch_array($get_or_dets_exe);
							?>
                            <!-- headline -->                             
                            <p>Order Id: <?php echo $ger_ordet['order_id'];?></p>
                            <p>Order Date: <?php echo $ger_ordet['order_date'];?> </p>
                            <p>Diapatch Date: <?php echo $ger_ordet['dispatch_date'];?></p>
                            <p>Order Status:On The Way </p>
                            <p>Order Type:<?php echo $ger_ordet['order_type'];?> </p>
                            <p>Order Bill: <?php echo $ger_ordet['bill_amount'];?></p> 
                            <p>No. of items: <?php echo $ger_ordet['no_items'];?></p>
                        </div>
                         <div class="col-md-6 "> 
                            <div class="headline style-1"> 
                                <h4>Billing Address</h4> 
                                <!--<h2>Our Work</h2>--> 
                            </div>
                            <?php
							 $get_biil_addexe=mysqli_query($conn,"select * from billing_address where customer_id='$_SESSION[User_id]' order by address_id desc limit 1");
							$get_billadre=mysqli_fetch_array($get_biil_addexe);
							$country_name_exe=mysqli_query($conn,"select * from country where country_id='$get_billadre[country]'");
							$con_name=mysqli_fetch_array($country_name_exe);
							$state_exe=mysqli_query($conn,"select * from state where state_id='$get_billadre[state]'");
							$state_name=mysqli_fetch_array($state_exe);
							?>
                            <!-- headline -->                             
                            <p>Name: <?php echo $get_billadre['name'];?></p>
                            <p>Email: <?php echo $get_billadre['email'];?></p>
                            <p>Phone: <?php echo $get_billadre['phone'];?></p>
                            <p>Country: <?php echo $con_name['country_name'];?></p>
                            <p>State: <?php echo $state_name['state_name'];?></p>
                            <p>City: <?php echo $get_billadre['city'];?> </p>
                            <p>Address 1: <?php echo $get_billadre['address1'];?> </p>
                            <p>Address 2: <?php echo $get_billadre['address2'];?></p>
                            <p>Zipcode: <?php echo $get_billadre['zipcode'];?></p> 
                        </div>
                                                   
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->  
                
                
                  <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-12"> 
                            <div class="services-boxes style-2 wow fadeInDown"> 
                               <table class="table">
                               <tbody>
                               <tr>
                               <th>Ctegory Name</th><th>Product Name</th><th>Product Image</th><th>Quntity</th><th>Price</th><th>Total Price</th>
                               <!--<th>Action</th>-->
                               </tr>
                                <?php
                            $cart_dis_exe=mysqli_query($conn,"select * from cart where customer_id='$_SESSION[User_id]' AND status='1'");
							while($csrt_pdts=mysqli_fetch_array($cart_dis_exe))
							{
								
										$products_exe=mysqli_query($conn,"select * from product where product_id='$csrt_pdts[product_id]'");
										$prd_name=mysqli_fetch_array($products_exe);
										
                                        $cate_name_exe=mysqli_query($conn,"select * from category where category_id='$prd_name[category_id]'");
										$cate_name=mysqli_fetch_array($cate_name_exe);
										
							?>
                               <tr>
                               <td><?php echo $cate_name['category_name'];?></td>
                               <td><?php echo $prd_name['product_name'];?></td>
                               <td><img src="Console/product/<?php echo $prd_name['product_image'];?>" style="height:100px;width:100px;"></td>
                               <td><?php echo $csrt_pdts['product_qty'];?></td>
                               <td><?php echo $csrt_pdts['product_price'];?></td>
                               <td><?php echo $csrt_pdts['product_price'];?></td>
                              <?php /*?> <td><a href="backend.php?cart_id=<?php echo $csrt_pdts['cart_id'];?>"><i class="fa fa-close"></i></a></td><?php */?>
                               </tr>
                               <?php
							}
							   ?>
                               <tr>
                               <?php
                               $total_amt=mysqli_query($conn,"select SUM(product_price)as total_amt,SUM(product_qty)as total_qty from cart where customer_id='$_SESSION[User_id]' AND status='1'");
							   $get_total=mysqli_fetch_array($total_amt);
							   $_SESSION['total_amt']=$_get_total['total_amt'];
							   ?>
                               <td align="right" colspan="5">Sub Total</td>
                               <td align="left" colspan="2"><i class="fa fa-inr"><?php echo $get_total['total_amt'];?></td>
                               </tr>
                               <tr>
                               <?php
                              // $tax_total=$get_total*(2/100);
							   ?>
                               <td align="right" colspan="5">Tax(2%)</td>
                               <td align="left" colspan="2"><i class="fa fa-inr"><?php echo $tax_total;?></td>
                               </tr>
                               <tr>
                              
                               <td align="right" colspan="5">Shipping Charges</td>
                               <td align="left" colspan="2"><i class="fa fa-inr"></i>200</td>
                               </tr>
                               <tr>
                               <?php
                              // $grand_total=$get_total+$tax_total+200;
							   ?>
                               <td align="right" colspan="5">Grand Total</td>
                               <td align="left" colspan="2"><i class="fa fa-inr"></i><?php echo $grand_total;?></td>
                               </tr>
                               <tr>
                               <td align="right" colspan="7">
                               <?php
                               $order_cart_exe=mysqli_query($conn,"Select ")
							   ?>
                               <form method="post" action="backend.php">
                               <input type="hidden" name="order_cust_id" value="<?php echo $_SESSION['User_id'];?>">
                               <input type="hidden" name="order_prd_qty" value="<?php echo $get_total['total_qty'];?>">
                               <input type="hidden" name="order_amount" value="<?php echo $get_total['total_amt'];?>">
                               <?php 
							   $order_dat=date('d-m-Y');
							   $dipat_date=date("d-m-Y", strtotime("+1 week"));
							   ?>
                               <input type="hidden" name="order_date" value="<?php echo $order_dat;?>">
                               <input type="hidden" name="order_dispa_date" value="<?php echo $dipat_date;?>">
                               <button class="btn btn-default" name="place_order" type="submit">CheckOut</button>
                               </form>
                               </td>
                               </tr>
                               </tbody>
                               </table> 
                                                   
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                       
                        <!-- col -->                         
                     
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>               
                <!-- <div class="map" style="margin-bottom:0;"></div>  -->                
            </div>
            <!-- CONTENT -->             
            <!-- FOOTER -->             
            <?phpb include'footer.php';?>
            <!-- FOOTER -->             
        </div>
        <!-- PAGE-WRAPPER -->         
        <!-- GO TOP -->         
        <a id="go-top"><i class="miu-icon-circle_arrow-up_glyph"></i></a> 
        <!-- jQUERY -->         
        <script src="assets/js/jquery-2.1.3.min.js"></script>         
        <!-- BOOTSTRAP JS -->         
        <script src="assets/js/bootstrap.min.js"></script>         
        <!-- VIEWPORT -->         
        <script src="assets/js/viewport/jquery.viewport.js"></script>         
        <!-- MENU -->         
        <script src="assets/js/menu/hoverIntent.js"></script>         
        <script src="assets/js/menu/superfish.js"></script>         
        <!-- FANCYBOX -->         
        <script src="assets/js/fancybox/jquery.fancybox.pack.js"></script>         
        <!-- REVOLUTION SLIDER -->         
        <script src="assets/js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>         
        <script src="assets/js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>         
        <!-- BxSLIDER -->         
        <script src="assets/js/bxslider/jquery.bxslider.min.js"></script>         
        <!-- PARALLAX -->         
        <script src="assets/js/parallax/jquery.parallax-scroll.min.js"></script>         
        <!-- ISOTOPE -->         
        <script src="assets/js/isotope/imagesloaded.pkgd.min.js"></script>         
        <script src="assets/js/isotope/isotope.pkgd.min.js"></script>         
        <!-- PLACEHOLDER -->         
        <script src="assets/js/placeholders/jquery.placeholder.min.js"></script>         
        <!-- CONTACT FORM VALIDATE & SUBMIT -->         
        <script src="assets/js/validate/jquery.validate.min.js"></script>         
        <script src="assets/js/submit/jquery.form.min.js"></script>         
        <!-- GOOGLE MAPS -->         
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>         
        <script src="assets/js/googlemaps/jquery.gmap.min.js"></script>         
        <!-- CHARTS -->         
        <script src="assets/js/charts/chart.min.js"></script>         
        <script src="assets/js/charts/jquery.easypiechart.min.js"></script>         
        <!-- COUNTER -->         
        <script src="assets/js/counter/jQuerySimpleCounter.js"></script>         
        <!-- YOUTUBE PLAYER -->         
        <script src="assets/js/ytplayer/jquery.mb.YTPlayer.js"></script>         
        <!-- TWITTER -->         
        <script src="assets/js/twitter/twitterfetcher.js"></script>         
        <!-- ANIMATIONS -->         
        <script src="assets/js/animations/wow.min.js"></script>         
        <!-- CUSTOM JS -->         
        <script src="assets/js/custom.js"></script>         
    </body>     
</html>
