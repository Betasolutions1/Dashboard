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
                        <div class="col-sm-2"> 
                            <!-- LOGO -->                             
                            <a id="logo" href="index-slider.html"> 
                                <img src="images/backgrounds/logo.png" alt=""> 
                            </a>                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-10"> 
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
                                    <li class=""> 
                                        <a href="index.php">Home</a> 
                                    </li>                                     
                                    <li>
                                        <a href="about-us.php">About</a>
                                    </li>                                     
                                    <li class="dropdown active"> 
                                        <a href="services1.php">Services</a> 
                                        <ul> 
                                            <li>
                                                <a href="services1.php">Education</a>
                                            </li>                                             
                                            <li>
                                                <a href="services2.php">Mobile</a>
                                            </li>                                             
                                            <li>
                                                <a href="services3.php">IT</a>
                                            </li>                                             
                                        </ul>                                         
                                    </li>                                     
                                    <li class=""> 
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
                                <h4>Services</h4> 
                            </div>
                            <!-- col -->                             
                            <div class="col-sm-6"> 
                                <ol class="breadcrumb"> 
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>                                     
                                    <li>
                                        <a href="services.php">service</a>
                                    </li>
                                    <li class="active">Services description</li>                                     
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
                    <?php
                    $sing_ser_exe=mysqli_query($conn,"select * from services where service_id='$_GET[Service_id]'");
					$ser_sin=mysqli_fetch_array($sing_ser_exe);
					?>
                        <div class="col-sm-6"> 
                            <div class="headline style-1"> 
                                <h4>service description</h4> 
                                <h2><?php echo $ser_sin['service_title'];?></h2> 
                            </div>
                            <!-- headline -->                             
                            <p><?php echo $ser_sin['service_desc'];?></p> 
                            <a class="btn btn-default" href="register.php">Register now</a> 
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-6"> 
                            <p class="text-center wow pulse"><img src="Console/Services/<?php echo $ser_sin['service_img'];?>" style="height:395px;width:485px;" alt=""></p> 
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- ontainer -->                 
                <!-- full-section -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-12"> 
                            <div class="headline style-1"> 
                                <h4>In case you didn't know</h4> 
                                <h2>This service comes with</h2> 
                            </div>
                            <!-- headline -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-6"> 
                            <ul class="circle-list"> 
                                <li>Maecenas accumsan tortor eu tellus ullamcorper vel blandit</li>                                 
                                <li>Maecenas sollicitudin tellus et velit varius, ut tempus elit</li>                                 
                                <li>Phasellus congue dolor ut risus feugiat, a mauris vulputate</li>                                 
                                <li>Phasellus congue dolor ut risus feugiat, a faucibus mauris</li>                                 
                                <li>Aenean id quam interdum, finibus risus digest read elit</li>                                 
                                <li>Curabitur faucibus est a faucibus condimentum finibus eu</li>                                 
                                <li>Class aptent taciti sociosqu ad litora torquent per conubia</li>                                 
                            </ul>                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-6"> 
                            <ul class="nav nav-tabs"> 
                                <li class="active">
                                    <a href="#tab-1" data-toggle="tab">About</a>
                                </li>                                 
                                <li>
                                    <a href="#tab-2" data-toggle="tab">Why choose</a>
                                </li>                                 
                                <li>
                                    <a href="#tab-3" data-toggle="tab">Features</a>
                                </li>                                 
                            </ul>                             
                            <div class="tab-content"> 
                                <div class="tab-pane fade in active" id="tab-1"> 
                                    <img src="images/services/tabs/image-1.jpg" alt=""> 
                                    <p>Etiam a suscipit erat. Vestibulum placerat nec sapien sed bibendum. Pellentesque lobortis est vitae 
                                pulvinar rutrum. Praesent et venenatis.</p> 
                                </div>
                                <!-- tab-pane -->                                 
                                <div class="tab-pane fade" id="tab-2"> 
                                    <img src="images/services/tabs/image-2.jpg" alt=""> 
                                    <p>Curabitur iaculis sapien porta leo fermentum, nec rutrum orci eleifend. Vestibulum sollicitudin lacinia 
                                metus, non malesuada quam placerat.</p> 
                                </div>
                                <!-- tab-pane -->                                 
                                <div class="tab-pane fade" id="tab-3"> 
                                    <img src="images/services/tabs/image-3.jpg" alt=""> 
                                    <p>Omis a suscipit erat. Vestibulum placerat nec sapien sed bibendum. Pellentesque lobortis est vitae 
                                pulvinar rutrum. Praesent et venenatis.</p> 
                                </div>
                                <!-- tab-pane -->                                 
                            </div>
                            <!-- tab-content -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <br>
                <br>
                <br> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-12"> 
                            <div class="embed-responsive embed-responsive-16by9"> 
                                <iframe src="http://player.vimeo.com/video/30316012" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                                 
                            </div>
                            <!-- embed-responsive -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <br>
                <br>
                <br>
                <br> 
                <!-- container -->                 
                <!-- container -->                 
                <br> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-12"> 
                            <div class="headline style-3"> 
                                <h5>All in one</h5> 
                                <h2>Related services</h2> 
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p> 
                            </div>
                            <!-- headline -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <div class="container"> 
                    <div class="row"> 
                     <?php
                    $simi_ser_exe=mysqli_query($conn,"select *,SUBSTRING(service_desc ,1,150) from services where service_id='$_GET[Service_id]' AND service_type='$ser_sin[service_type]' order by RAND() limit 3");
					while($simi_ser=mysqli_fetch_array($simi_ser_exe))
					{
					?>
                        <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php?Service_id=<?php echo $simi_ser['service_id'];?>"><?php echo $simi_ser['service_title'];?></a> <!--<small>Nice &amp; Clean</small>--> </h3> 
                                    <p><?php echo $simi_ser['SUBSTRING(service_desc ,1,150)'];?></p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <?php
					}
						?>
                        <!-- col -->                         
                       <?php /*?> <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.3s"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.html">E-commerce</a> <small>New project</small> </h3> 
                                    <p>Praesent volutpat libero justo, ac ornare dui aliquet fermentum. Suspendisse dolor tellus, cursus at sapien ac 
                                porttitor sed nibh.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div><?php */?>
                        <!-- col -->                         
                       <?php /*?> <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.6s"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.html">Web developing</a> <small>We are the best</small> </h3> 
                                    <p>Quisque pharetra egestas libero ut congue. Curabitur justo enim, malesuada quis purus eget, porta porttitor mauris
                                dolor amet.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div><?php */?>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- ontainer -->                 
                <section class="full-section parallax" id="section-4"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-sm-12"> 
                                <p class="text-center"><a class="btn btn-default" href="contact.html">Contact us<i class="fa fa-arrow-right"></i></a></p> 
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
                            <div class="col-sm-3"> 
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
                            <div class="col-sm-3"> 
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
                            <div class="col-sm-3"> 
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
                            <div class="col-sm-3"> 
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
                            <div class="col-sm-12"> 
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
