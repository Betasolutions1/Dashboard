<?php
include 'Console/config.php';
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
        <title>MMS -  My Multi Solution</title>         
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
        <link rel="stylesheet" href="assets/css/custom.css"> 
        <link rel="stylesheet" href="assets/css/pages-style.css"> 
        <script type="text/javascript">
		function get_credential_func()
		{
			document.getElementById('cart_log').style.display='block';
		}
		</script>
    </head>     
    <body> 
        <div id="page-wrapper"> 
            <!-- HEADER -->             
            <header> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-2"> 
                            <!-- LOGO -->                             
                            <a id="logo" href="index-slider.html"> 
                                <img src="images/backgrounds/logo.png" alt=""> 
                            </a>                             
                        </div>
                        <!-- col -->                         
                        <div class="col-md-10"> 
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
                                    <li > 
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
                                    <li class="active">
                                        <a href="shop.php">shop</a>
                                    </li> 
                                     <li class="dropdown "> 
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
                                                <a href="Cart.php">My Cart</a>
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
                                <h4>Shop</h4> 
                            </div>
                            <!-- col -->                             
                            <div class="col-md-6"> 
                                <ol class="breadcrumb"> 
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>                                     
                                    <li class="active">Shop</li>                                     
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
                    <div class="col-md-9">
                    <div class="row"> 
                    <?php
                    $product_dis_exe=mysqli_query($conn,"select * from product where category_id='$_GET[Category]'");
					while($products=mysqli_fetch_array($product_dis_exe))
					{
						$product_desc=strip_tags($products['product_desc']);
						$description=substr($product_desc,0,75);
					?>
                        <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                <!--style="width:360px;height:325px;"-->
                                    <img src="Console/product/<?php echo $products['product_image'];?>"  alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="Console/product/<?php echo $products['product_image'];?>"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6><a href="shop-desc.php?Products=<?php echo $products['product_id'];?>"><?php echo $products['product_name'];?></a></h6> 
                                    <h4><a href="shop-desc.php?Products=<?php echo $products['product_id'];?>">Price: <i class="fa fa-inr"></i><?php echo $products['product_price'];?></a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p><?php echo $description;?>.&nbsp;<a href="shop-desc.php?Products=<?php echo $products['product_id'];?>">Read more</a><br></p> 
                                <?php 
								if($_SESSION['User_id'])
								{
								?>
                                <form method="post" action="backend.php">
                                <input type="hidden" name="cart_cust_id" value="<?php echo $_SESSION['User_id'];?>">
                                <input type="hidden" name="cart_product_id" value="<?php echo $products['product_id'];?>">
                                <input type="hidden" name="cart_pd_qty" value="1">
                                <input type="hidden" name="cart_pd_price" value="<?php echo $products['product_price']?>">
                                <button type="submit" class="btn btn-default" name="cart_sub">Add Cart</button>
                                </form>
                                <?php
								}else
								{
								?>
                                <button type="submit" class="btn btn-default" onClick="return get_credential_func();" name="cart_sub">Add Cart</button>
                                <p id="cart_log" style="display:none;color:#D91A1D;">Please Be Login</p>
                                <?php
								}
								?>
                            </div>
                            <!-- blog-article -->                             
                        </div>
                        <?php
					}
						?>
                        <!-- col -->                         
                       <?php /*?> <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="images/blog/image-6.jpg" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-6.jpg"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6>4 March 2015</h6> 
                                    <h4><a href="shop-desc.php">2015 new design trends</a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan quis mauris vitae faucibus. Nunc quis est vehicula, ultrices leo at, pellentesque enim.Lorem ipsum dolor sit amet, consectetur<br></p> 
                                <a class="btn btn-default" href="shop-desc.php">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div><?php */?>
                        <!-- col -->                         
                      <?php /*?>  <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="images/blog/image-7.jpg" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-7.jpg"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6>3 March 2015</h6> 
                                    <h4><a href="shop-desc.php">interview with a great designer</a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan quis mauris vitae faucibus. Nunc quis est vehicula, ultrices leo at, pellentesque enim.<br></p> 
                                <a class="btn btn-default" href="shop-desc.php">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div><?php */?>
                        <?php /*?> <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="images/blog/image-7.jpg" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-7.jpg"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6>3 March 2015</h6> 
                                    <h4><a href="shop-desc.php">interview with a great designer</a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan quis mauris vitae faucibus. Nunc quis est vehicula, ultrices leo at, pellentesque enim.<br></p> 
                                <a class="btn btn-default" href="shop-desc.php">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div><?php */?>
                         
                        <!-- col -->                         
                    </div>


                 <?php /*?>    <div class="row"> 
                        <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="images/blog/image-5.jpg" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-5.jpg"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6>5 March 2015</h6> 
                                    <h4><a href="shop-desc.php">Design: from thought to print</a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan quis mauris vitae faucibus. Nunc quis est vehicula, ultrices leo at, pellentesque enim.&nbsp;<br></p> 
                                <a class="btn btn-default" href="shop-desc.php">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="images/blog/image-5.jpg" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-5.jpg"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6>5 March 2015</h6> 
                                    <h4><a href="shop-desc.php">Design: from thought to print</a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan quis mauris vitae faucibus. Nunc quis est vehicula, ultrices leo at, pellentesque enim.&nbsp;<br></p> 
                                <a class="btn btn-default" href="shop-desc.php">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="images/blog/image-5.jpg" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-5.jpg"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6>5 March 2015</h6> 
                                    <h4><a href="shop-desc.php">Design: from thought to print</a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan quis mauris vitae faucibus. Nunc quis est vehicula, ultrices leo at, pellentesque enim.&nbsp;<br></p> 
                                <a class="btn btn-default" href="shop-desc.php">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div>
                        <!-- col --> 
                         <div class="col-md-3"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="images/blog/image-7.jpg" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-7.jpg"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <h6>3 March 2015</h6> 
                                    <h4><a href="shop-desc.php">interview with a great designer</a></h4> 
                                </div>
                                <!-- blog-article-details -->                                 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan quis mauris vitae faucibus. Nunc quis est vehicula, ultrices leo at, pellentesque enim.<br></p> 
                                <a class="btn btn-default" href="shop-desc.php">Read more</a>
                            </div>
                            <!-- blog-article -->                             
                        </div>
                        <!--col-->
                    </div><?php */?>


                        
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget-categories"> 
                                <h3 class="widget-title">Categories</h3> 
                                <ul> 
                                <?php 
								$dis_cate_exe=mysqli_query($conn,"select * from category");
								while($ceteis=mysqli_fetch_array($dis_cate_exe))
								{
								?>
                                    <li>
                                        <a href="Category-product.php?Category=<?php echo $ceteis['category_id'];?>"><?php echo $ceteis['category_name'];?></a>
                                    </li>
                                    <?php
								}
									?>                                     
                                    <!--<li>
                                        <a href="#">Business</a>
                                    </li>                                     
                                    <li>
                                        <a href="#">Graphic design</a>
                                    </li>                                     
                                    <li>
                                        <a href="#">Entertainment</a>
                                    </li>                                     
                                    <li>
                                        <a href="#">Living &amp; Travel</a>
                                    </li>                                     
                                    <li>
                                        <a href="#">Uncategorised</a>
                                    </li>-->                                     
                                </ul>                                 
                            </div>
                    </div>
                </div>
                    <!-- row -->                     
                </div>
                <!-- ontainer -->                 
                <div class="container"> 
                   
                    <!-- row -->                     
                </div>
                <!-- ontainer -->                 
                <!-- ontainer -->                 
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
            <footer> 
                <div id="footer-top"> 
</div>
                <!-- footer-top -->                 
                <div id="footer"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-md-3"> 
                                <div class="widget widget-text"> 
                                    <h3 class="widget-title">About MMS</h3> 
                                    <p>Lorem ipsum dolor sit amet unde ligula, sodales et quam non, omis finibus eros. Pharetra nulla lactus arcu non, 
                                venenatis orci pharetra. Nunc sed odio a velit placerat sit eget hendrerit elit.</p> 
                                </div>
                                <!-- widget-text -->                                 
                                <div class="widget widget-newsletter"> 
                                    <form name="newsletter" method="post" action="#"> 
                                        <fieldset> 
                                            <input type="text" name="email" placeholder="Email address"> 
                                            <input class="btn btn-default" type="submit" name="submit" value=""> 
                                        </fieldset>                                         
                                    </form>                                     
                                    <p>Nemo enim ipsam voluptatem</p> 
                                </div>
                                <!-- widget-newsletter -->                                 
                            </div>
                            <!-- col -->                             
                            <div class="col-md-3"> 
                                <div class="widget widget-latest-news"> 
                                    <h3 class="widget-title">Latest news</h3> 
                                    <ul> 
                                        <li> 
                                            <img src="images/blog/blog-post/news-1.jpg" alt=""> 
                                            <p class="news-title"><a href="#">Lorem ipsum dolor amet...</a></p> 
                                            <p class="news-date">March 05, 2015</p> 
                                        </li>                                         
                                        <li> 
                                            <img src="images/blog/blog-post/news-2.jpg" alt=""> 
                                            <p class="news-title"><a href="#">Omis unde tortor lactus...</a> <p class="news-date">March 04, 2015</p> 
                                        </li>                                         
                                        <li> 
                                            <img src="images/blog/blog-post/news-3.jpg" alt=""> 
                                            <p class="news-title"><a href="#">Mauris in orci id placerat...</a> <p class="news-date">March 03, 2015</p> 
                                        </li>                                         
                                    </ul>                                     
                                </div>
                                <!-- widget-recent-posts -->                                 
                            </div>
                            <!-- col -->                             
                            <div class="col-md-3"> 
                                <div class="widget widget-flickr"> 
                                    <h3 class="widget-title">Flickr</h3> 
                                    <div class="flickr-photos"> 
                                        <script src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08"></script>                                         
                                    </div>
                                    <!-- flickr-photos -->                                     
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                deserunt</p> 
                                </div>
                                <!-- widget-flickr -->                                 
                            </div>
                            <!-- col -->                             
                            <div class="col-md-3"> 
                                <div class="widget widget-contact"> 
                                    <h3 class="widget-title">Contact Us</h3> 
                                    <ul> 
                                        <li> 
                                            <span>Address</span> 
                                            1713 Hide A Way Road
                                            <br> 
                                            San Jose, CA 95118
                                        </li>                                         
                                        <li> 
                                            <span>Phone &amp; Fax</span> 
                                            +408-267-8351
                                            <br> 
                                            +408-267-8344
                                        </li>                                         
                                        <li> 
                                            <span>E-mail</span> 
                                            <a href="mailto:support@milo.com">support@milo.com</a> 
                                        </li>                                         
                                    </ul>                                     
                                </div>
                                <!-- widget-contact -->                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div>
                    <!-- container -->                     
                </div>
                <!-- footer -->                 
                <div id="footer-bottom"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="widget widget-text"> 
                                    <p class="last text-center text-uppercase">&copy; All Rights Reserved <span class="text-primary">MMS</span> <span class="text-lowercase"> BetaSolutions.</span></p> 
                                </div>
                                <!-- widget-text -->                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div>
                    <!-- container -->                     
                </div>
                <!-- footer-bottom -->                 
            </footer>
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
