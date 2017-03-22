<?php 
include("Console/config.php");
session_start();
error_reporting(0);

?>
<!doctype html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"> 
        <meta name="keywords" content=""> 
        <meta name="description" content=""> 
        <title>MMS -  My Multi Solutions</title>         
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
                        <div class="col-md-1"> 
                            <!-- LOGO -->                             
                            <a id="logo" href="index.php"> 
                                <img src="images/backgrounds/logo.png" alt=""> 
                            </a>                             
                        </div>
                        <!-- col -->                         
                        <div class="col-md-11"> 
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
                                        <a href="#">Services</a> 
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
                                    <li > 
                                        <a href="blog-columns.php">Blog</a> 
                                    </li>
                                    <li>
                                        <a href="shop.php">shop</a>
                                    </li>  
                                     <li class="dropdown"> 
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
                                                <a href="my-order.php">My Order</a>
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
                            <div class="col-md-6"> 
                                <h4>Search</h4> 
                            </div>
                            <!-- col -->                             
                            <div class="col-md-6"> 
                                <ol class="breadcrumb"> 
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>                                     
                                    <li class="active">Search</li>                                     
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
                    <h2>Blog Result</h2>
                    <?php 
					$search=$_GET['search_name'];
                    $serach34=mysqli_query($conn,"select * from `blogs` where `blog_title` LIKE '%".$search."%'");
					if(mysqli_num_rows($search)==0)
					{
					?>
                    <h4>No result Found in Blogs</h4>
                    <?php	
					}
                    while($search_res=mysqli_fetch_array($serach34)){
                        $str=$search_res['blog_desc'];
                        $str1=strip_tags($str);
                            $strcut1=substr($str1,0,10);
                    ?>
                        <div class="col-md-4"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="Console/Blog/<?php echo $search_res['blog_image'];?>" alt="" style="width:360px;height:200px;"> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="Console/Blog/<?php echo $search_res['blog_image'];?>"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6><?php echo $search_res['datetime'];?></h6> 
                                    <h4><a href="blog-post.php?Blog_id=<?php echo $search_res['blog_id'];?>"><?php echo $search_res['blog_title'];?></a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p><?php echo $strcut1;?>&nbsp;<br></p> 
                                <a class="btn btn-default" href="blog-post.php?Blog_id=<?php echo $search_res['blog_id'];?>">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div>
                        <?php } 
					?>
                        <!-- col --> 
                                              
                    </div>
                    <!-- row -->                     
                </div>
                
                <!--Services result-->
                 <div class="container"> 
                    <div class="row"> 
                    <h2>Services Result</h2>
                    <?php 
                    $serachss=mysqli_query($conn,"select * from `services` where `service_title` LIKE '%".$search."%'");
					$serv_count=mysqli_num_rows($serachss);
					if($serv_count==0)
					{
						?>
                        <h2>No results found in Services</h2>
                        <?php
					}
                    while($search_ser=mysqli_fetch_array($serachss)){
                        $str2=$search_ser['service_desc'];
                        $str12=strip_tags($str2);
                            $strcut12=substr($str12,0,10);
                    ?>
                        <div class="col-md-4"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="Console/Services/<?php echo $search_ser['service_img'];?>" alt="" style="width:360px;height:200px;"> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="Console/Services/<?php echo $search_ser['service_img'];?>"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                 
                                    <h4><a href="single-service.php?Service_id=<?php echo $search_ser['service_id'];?>"><?php echo $search_ser['service_title'];?></a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p><?php echo $strcut12;?>&nbsp;<br></p> 
                                <!--<a class="btn btn-default" href="single-service.php?Service_id=<?php echo $search_ser['service_id'];?>">Read more</a>-->
                                <?php
                                if($_SESSION['MMS_User'])
								{
								?>
                                <div align="center">
                                <form method="post" action="backend.php">
                                <input type="hidden" name="service_id" value="<?php echo $edu_res['service_id'];?>">
                                <input type="hidden" name="user_reg_id" value="<?php echo $_SESSION['User_id'];?>">
                                <input type="submit" class="btn btn-default" name="add_service" value="Add Account">
                                </form>
                                </div>
                                <?php
								}
								?>
                            </div>
                            <!-- blog-article -->                             
                        </div>
                        <?php } ?>
                        <!-- col --> 
                                              
                    </div>
                    <!-- row -->                     
                </div>
                <!--End Services Result-->
                <!-- container -->                 
                <!-- container -->                 
                <section class="full-section" id="section-8"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-md-11"> 
                                <div class="widget widget-twitter"> 
                                    <div id="tweet"></div>                                     
                                </div>
                                <!-- end .widget-twitter-->                                 
                            </div>
                            <!-- col -->                             
                            <div class="col-md-1"> 
                                <div id="twitter-slider-controls"> 
                                    <span id="twitter-slider-prev"></span> 
                                    <span id="twitter-slider-next"></span> 
                                </div>                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div>
                    <!-- ontainer -->                     
                </section>
                <!-- full-section -->                 
            </div>
            <!-- CONTENT -->             
            <!-- FOOTER -->             
           <?php include 'footer.php'; ?>
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
