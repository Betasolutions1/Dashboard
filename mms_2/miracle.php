<?php
 include("Console/config.php");
 session_start();
 error_reporting(0);
 $file_name= basename(__FILE__,'.php');
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
        <link rel="stylesheet" href="assets/css/custom.css"> 
        <link rel="stylesheet" href="assets/css/pages-style.css"> 
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
                                <form id="search-form" name="search-form" method="get" action="#"> 
                                    <fieldset> 
                                        <input type="text" name="search" placeholder="Enter your keyword here and then press enter..."> 
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
                                    <li class="active"> 
                                        <a href="blog-columns.php">Blog</a> 
                                    </li>
                                    <li>
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
                                <h4>Blog</h4> 
                            </div>
                            <!-- col -->                             
                            <div class="col-md-6"> 
                                <ol class="breadcrumb"> 
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>                                     
                                    <li>
                                        <a href="<?php echo $file_name;?>.php"><?php echo $file_name;?></a>
                                    </li>                                     
                                    <li class="active"><?php echo $file_name;?> Description</li>                                     
                                </ol>                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div>
                    <!-- ontainer -->                     
                </div>
                <!-- page-header -->
                <?php
                $bsel=mysqli_query($conn,"select * from ".$file_name." order by id desc limit 1");
                $bsel2=mysqli_fetch_array($bsel);
                ?>                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-9"> 
                            <div class="blog-article"> 
                                <div class="blog-article-thumbnail"> 
                                    <img src="Console/copy/<?php echo $bsel2['image'];?>" alt=""> 
                                    <div class="blog-article-hover"> 
                                        <a class="fancybox-blog-gallery zoom-action" href="Console/copy/<?php echo $bsel2['image'];?>"><i class="fa fa-eye"></i></a> 
                                    </div>
                                    <!-- blog-article-hover -->                                     
                                </div>
                                <!-- blog-article-thumbnail -->                                 
                                <div class="blog-article-details"> 
                                    <?php /*?><h4><?php echo $bsel2['datetime'];?></h4> <?php */?>
                                    <h2><a href="#"><?php echo $bsel2['title'];?></a></h2> 
                                    <?php /*?><p> <i class="miu-icon-business_namecard_contact_info_outline_stroke"></i> <a href="#">Jane Smith</a><br class="visible-xs"> <i class="miu-icon-editor_folder_add_outline_stroke"></i> <a href="#">Design</a>, <a href="#">Web design</a><br class="visible-xs"> <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i> <a href="#">2</a> </p> <?php */?>
                                </div>
                                <!-- blog-article-details -->                                 
                                <p><?php echo $bsel2['description'];  ?></p> 
                                <!--<a class="btn btn-default" href="#">Continue reading</a>--> 
                            </div>
                                                        
                            
                                                        
                                           
                        </div>
                        <!-- col -->                         
                        <div class="col-md-3"> 
                          <div class="widget widget-search"> 
                                <form name="search" method="get" action="#"> 
                                    <fieldset> 
                                        <input type="text" name="search" placeholder="Search"> 
                                        <input class="btn btn-default" type="submit" name="submit" value=""> 
                                    </fieldset>                                     
                                </form>                                 
                            </div>
                            <div class="widget widget-recent-posts"> 
                                <h3 class="widget-title">Recent Blogs</h3> 
                                <ul> 
                                <?php
                                $bret=mysqli_query($conn,"select * from blogs order by blog_id desc limit 4");
                                while($bret2=mysqli_fetch_array($bret)){
                                ?>
                                    <li> 
                                        <img src="Console/Blog/<?php echo $bret2['blog_image'];?>" alt="" style="max-height: 60px;max-width: 60px;min-height: 60px;min-width: 60px"> 
                                        <a class="post-title" href="blog-post.php?Blog_id=<?php echo $bret2['blog_id']?>"><?php echo $bret2['blog_title'];?></a> 
                                        <p class="post-date"><?php echo $bret2['datetime'];?></p> 
                                    </li> 
                                    <?php } ?>                            
                                </ul>                                 
                            </div>
                            <!-- widget-recent-posts -->                             
                            <!-- <div class="widget widget-categories"> 
                                <h3 class="widget-title">Categories</h3> 
                                <ul> 
                                    <li>
                                        <a href="#">Photgraphy</a>
                                    </li>                                     
                                    <li>
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
                                    </li>                                     
                                </ul>                                 
                            </div> -->
                            <!-- widget-categories -->                             
                            <div class="widget widget-tab"> 
                                <ul class="nav nav-tabs"> 
                                    <li class="active">
                                        <a href="#tab-1" data-toggle="tab">Popular</a>
                                    </li>                                     
                                    <li>
                                        <a href="#tab-2" data-toggle="tab">Comments</a>
                                    </li>                                     
                                </ul>                                 
                                <div class="tab-content"> 
                                    <div class="tab-pane fade in active" id="tab-1"> 
                                        <div class="widget widget-recent-posts"> 
                                            <ul> 
                                            <?php 
                                            $blog1=mysqli_query($conn,"select * from blogs order by rand() limit 3");
                                            while($blog2=mysqli_fetch_array($blog1)){
                                            ?>
                                                <li> 
                                                    <img src="Console/Blog/<?php echo $blog2['blog_image'];?>" alt="" style="max-height: 60px;max-width: 60px;min-height: 60px;min-width: 60px"> 
                                                    <a class="post-title" href="blog-post.php?Blog_id<?php echo $blog2['blog_id'];?>"><?php echo $blog2['blog_title'];?></a> 
                                                    <p class="post-date"><?php echo $blog2['datetime'];?></p> 
                                                </li> 
                                                <?php } ?>                                         
                                            </ul>                                             
                                        </div>
                                        <!-- widget-recent-posts -->                                         
                                    </div>
                                    <!-- tab-pane -->                                     
                                    <div class="tab-pane fade" id="tab-2"> 
                                        <div class="widget widget-recent-posts"> 
                                            <ul> 
                                                <?php 
                                            $blog1=mysqli_query($conn,"select * from blogs order by rand() limit 3");
                                            while($blog2=mysqli_fetch_array($blog1)){
                                            ?>
                                                <li> 
                                                    <img src="Console/Blog/<?php echo $blog2['blog_image'];?>" alt="" style="max-height: 60px;max-width: 60px;min-height: 60px;min-width: 60px"> 
                                                    <a class="post-title" href="blog-post.php?Blog_id<?php echo $blog2['blog_id'];?>"><?php echo $blog2['blog_title'];?></a> 
                                                    <p class="post-date"><?php echo $blog2['datetime'];?></p> 
                                                </li> 
                                                <?php } ?>                                                
                                            </ul>                                             
                                        </div>
                                        <!-- widget-recent-posts -->                                         
                                    </div>
                                    <!-- tab-pane -->                                     
                                </div>
                                <!-- tab-content -->                                 
                            </div>
                            <!-- widget-tab -->                             
                          
                            <!-- widget-search -->                             
                            <!-- <div class="widget widget-flickr"> 
                                <h3 class="widget-title">Flickr</h3> 
                                <div class="flickr-photos"> 
                                    <script src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08"></script>                                     
                                </div>
                                <!-- flickr-photos ->                                 
                            </div> -->
                            <!-- widget-flickr -->                             
                            <div class="widget widget-text"> 
                                <h3 class="widget-title">Quote of the day</h3>
                                <?php
                                $quote_exe=mysqli_query($conn,"select * from qoutes order by quote_id desc limit 1");
								$quotes=mysqli_fetch_array($quote_exe);
								?> 
                                <div> 
                                    <p><?php echo $quotes['quote']?></p> 
                                </div>
                                <div align="right">-<?php echo $quotes['auother'];?></div>                                 
                            </div>
                            <!-- widget-text -->                             
                             <div class="widget widget-slider"> 
                                <h3 class="widget-title">Slider</h3> 
                                <div class="images-slider"> 
                                    <ul> 
                                     <?php $ssel=mysqli_query($conn,"select * from sliders order by rand() limit 3");
                                           while($ssel2=mysqli_fetch_array($ssel)){
                                     ?>
                                        <li>
                                            <img src="Console/slider/<?php echo $ssel2['slider_image'];?>" alt="">
                                        </li> 
                                        <?php } ?>
                                        <!--                                         
                                        <li>
                                            <img src="images/blog/blog-post/image-2.jpg" alt="">
                                        </li>                                         
                                        <li>
                                            <img src="images/blog/blog-post/image-3.jpg" alt="">
                                        </li>   -->                                       
                                    </ul>                                     
                                </div>
                                <!-- images-slider -->                                 
                            </div>
                            <!-- widget-slider -->                             
                        </div>
                        <!-- col -->                         
                    </div>
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
                                     <form id="search-form" name="search-form" method="get" action="search.php"> 
                                    <fieldset> 
                                        <input type="text" name="search_name" placeholder="Enter your keyword here and then press enter..."> 
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
                                            +91 99999 55588

                                            <br> 
                                            +91 8888596257
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
                                    <p class="last text-center text-uppercase">&copy; All Rights Reserved <span class="text-primary">Mms</span> <span class="text-lowercase"> BetaSolutions.</span></p> 
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
