<?php include("console/config.php");?>
<!doctype html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"> 
        <meta name="keywords" content=""> 
        <meta name="description" content=""> 
<<<<<<< HEAD
        <title>MMS - My Multi Solutions</title>         
=======
        <title>MMS - &amp;  My Multi Solutions</title>         
>>>>>>> c1868448eae0974f750ecaf4a56d58dd3db4f0fc
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
    <body id="fullscreen"> 
        <div id="page-wrapper"> 
            <!-- HEADER -->             
            <header> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-2"> 
                            <!-- LOGO -->                             
                            <a id="logo" href="index-slider.html"> 
                                <!--<img src="images/backgrounds/logo.png" alt="">--> 
                                <h4 >MMS</h4>
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
                                    <li class="active"> 
                                        <a href="index.php">Home</a> 
                                    </li>                                     
                                    <li>
                                        <a href="about-us.php">About</a>
                                    </li>                                     
                                    <li class="dropdown"> 
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

                <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        <li data-transition="slotfade-horizontal">
                            
                            <img src="images/index/revolution-slider/bg-slide-1.jpg" alt="">
                            
                            <div class="tp-caption fade" data-x="-150" data-y="70" data-speed="700" data-start="1000" data-easing="easeOutBack">
                                <img src="images/index/revolution-slider/slide-1-image-1.png" alt="">
                            </div>
                            
                            <div class="tp-caption fade" data-x="270" data-y="120" data-speed="700" data-start="1400" data-easing="easeOutBack">
                                <img src="images/index/revolution-slider/slide-1-image-2.png" alt="">
                            </div>
                            
                            <div class="tp-caption fade" data-x="300" data-y="50" data-speed="700" data-start="1800" data-easing="easeOutBack">
                                <img src="images/index/revolution-slider/slide-1-image-3.png" alt="">
                            </div>
                            
                            <div class="tp-caption sfb" data-x="530" data-y="220" data-speed="700" data-start="2400" data-easing="easeOutBack">
                                <img src="images/index/revolution-slider/slide-1-image-4.png" alt="">
                            </div>
                            
                            <div class="tp-caption fade" data-x="650" data-y="340" data-speed="700" data-start="2800" data-easing="easeOutBack">
                                <img src="images/index/revolution-slider/slide-1-image-5.png" alt="">
                            </div>
                            
                            <div class="tp-caption title sft" data-x="830" data-y="150" data-speed="700" data-start="3200" data-easing="easeOutBack">
                                Clean cut, <br>
                                Inovative Design
                            </div>
                            
                            <div class="tp-caption text sfr" data-x="830" data-y="240" data-speed="700" data-start="3700" data-easing="easeOutBack">
                                <em>Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                eiusmod tempor incididunt ut labore et dolore magna. </em>
                            </div>
                            
                            <div class="tp-caption social-icon sfl" data-x="830" data-y="310" data-speed="700" data-start="4400" data-easing="easeOutBack">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            
                            <div class="tp-caption social-icon sfl" data-x="865" data-y="310" data-speed="700" data-start="4700" data-easing="easeOutBack">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            
                            <div class="tp-caption social-icon sfl" data-x="910" data-y="310" data-speed="700" data-start="5000" data-easing="easeOutBack">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            
                            <div class="tp-caption sfb"  data-x="830" data-y="360" data-speed="700" data-start="5400" data-easing="easeOutBack">
                                <a class="btn btn-default" href="#">Follow the project <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                        <li data-transition="slotfade-horizontal">
                            
                            <img src="images/index/revolution-slider/bg-slide-2.jpg" alt="">
                            
                            <div class="tp-caption sft"  data-x="540" data-y="125" data-speed="700" data-start="1200" data-easing="easeOutBack">
                                <img src="images/index/revolution-slider/slide-2-image-1.png" alt="">
                            </div>
                            
                            <div class="tp-caption title-white text-center sft"  data-x="245" data-y="285" data-speed="700" data-start="1700" data-easing="easeOutBack">
                                A new way to build your <br>
                                business online
                            </div>
                            
                            <div class="tp-caption sfb"  data-x="450" data-y="450" data-speed="700" data-start="2200" data-easing="easeOutBack">
                                <a class="btn btn-default" href="#">Buy it on themeforest <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                        <li data-transition="slotfade-horizontal">
                            
                            <img src="images/index/revolution-slider/bg-slide-3.jpg" alt="">
                            
                            <div class="tp-caption sfl"  data-x="0" data-y="75" data-speed="700" data-start="1700" data-easing="easeOutBack">
                                <img src="images/index/revolution-slider/slide-3-image-1.png" alt="">
                            </div>
                            
                            <div class="tp-caption title sft" data-x="830" data-y="180" data-speed="700" data-start="2200" data-easing="easeOutBack">
                                Multiple <br>
                                Portfolio pages
                            </div>
                            
                            <div class="tp-caption text-white sfr" data-x="830" data-y="270" data-speed="700" data-start="2700" data-easing="easeOutBack">
                                Cras vestibulum ante in fermentum pretium. <br>
                                Odio ipsum, ac feugiat tellus facilisis id nullam. <br>
                                Etiam at dictum quam. Nunc ac ultrices orci duis <br>
                                hendrerit, efficitur metus quis, finibus elit. 
                            </div>
                            
                            <div class="tp-caption sfb" data-x="830" data-y="390" data-speed="700" data-start="3200" data-easing="easeOutBack">
                                <a class="btn btn-default" href="#">View portfolio pages <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                    </ul>
                </div><!-- banner -->
            </div>

                <!--<section class="full-section full-screen parallax" style="background-image:url(images/backgrounds/bg-6.jpg);"> 
                    <div class="full-section-content"> 
                        <div class="container"> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <h1 class="text-center">A new way to build your <br> business online</h1> 
                                    <br> 
                                    <p class="text-center"><a class="btn btn-default" href="#">Buy it on themeforest <i class="fa fa-arrow-right"></i></a></p> 
                                </div>
                                <!-- col ->                                 
                            </div>
                            <!-- row ->                             
                        </div>
                        <!-- container ->                         
                    </div>
                    <!-- full-section-content ->                     
                </section>
                <!-- full-section -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="headline style-3"> 
                                <h5>All in one</h5> 
                                <h2>Services</h2> 
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p> 
                            </div>
                            <!-- headline -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- ontainer --> <?php 
                $sel1=mysqli_query($conn,"select * from services where service_type='Education' order by service_id desc limit 1");
                $sel2=mysqli_fetch_array($sel1);
                $string =$sel2['service_title'];
$string1 = strip_tags($string);
if (strlen($string1) > 20) {

    // truncate string
    $strCut3 = substr($string1, 0, 20);
    }    

                $sel3=mysqli_query($conn,"select * from services where service_type='Mobile' order by service_id desc limit 1");
                $sel4=mysqli_fetch_array($sel3);
                $string =$sel4['service_title'];
$string1 = strip_tags($string);
if (strlen($string1) > 20) {

    // truncate string
    $strCut1 = substr($string1, 0, 20);
    }    


                $sel5=mysqli_query($conn,"select * from services where service_type='IT' order by service_id desc limit 1");
                $sel6=mysqli_fetch_array($sel5);
                $string =$sel6['service_title'];
$string1 = strip_tags($string);
if (strlen($string1) > 20) {

    // truncate string
    $strCut2 = substr($string1, 0, 20);
    }    

                ?>                
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-4"> 
                            <div class="services-boxes style-2 wow fadeInDown"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php"><?php echo $sel2['service_title'];?></a> <small>Nice &amp; Clean</small> </h3> 
                                    <p><?php echo $sel2['service_desc'];?>&nbsp;<br></p>
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-md-4"> 
                            <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.3s"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php"><?php echo $sel4['service_title'];?></a> <small>New project</small> </h3> 
                                    <p><?php echo $strCut1;?>&nbsp;<br></p>
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-md-4"> 
                            <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php"><?php echo $sel6['service_desc'];?></a> <small>We are the best</small> </h3> 
                                    <p><?php echo $sel6['service_desc'];?>&nbsp;<br></p>
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- ontainer -->                 
                <!-- ontainer -->                 
                <section class="full-section parallax" id="section-9"> 
<<<<<<< HEAD
                    <?php /*?><div class="container"> 
                        <div class="row"> 
                            <div class="col-sm-3"> 
                                <div class="counter"> 
                                    <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i> 
                                    <div class="counter-value" data-value="139"></div>                                     
                                    <div class="counter-details"> 
                                        <p>Satisfied clients</p> 
                                    </div>
                                    <!-- counter-details -->                                     
                                </div>
                                <!-- counter -->                                 
                            </div>
                            <!-- col -->                             
                            <div class="col-sm-3"> 
                                <div class="counter"> 
                                    <i class="miu-icon-editor_alarm_clock_outline_stroke"></i> 
                                    <div class="counter-value" data-value="24"></div>                                     
                                    <div class="counter-details"> 
                                        <p>Hours a day</p> 
                                    </div>
                                    <!-- counter-details -->                                     
                                </div>
                                <!-- counter -->                                 
                            </div>
                            <!-- col -->                             
                            <div class="col-sm-3"> 
                                <div class="counter"> 
                                    <i class="miu-icon-editor_setting_gear_outline_stroke"></i> 
                                    <div class="counter-value" data-value="1127"></div>                                     
                                    <div class="counter-details"> 
                                        <p>Project in work</p> 
                                    </div>
                                    <!-- counter-details -->                                     
                                </div>
                                <!-- counter -->                                 
                            </div>
                            <!-- col -->                             
                            <div class="col-sm-3"> 
                                <div class="counter"> 
                                    <i class="miu-icon-editor_documents_files_outline_stroke"></i> 
                                    <div class="counter-value" data-value="253"></div>                                     
                                    <div class="counter-details"> 
                                        <p>Employes</p> 
                                    </div>
                                    <!-- counter-details -->                                     
                                </div>
                                <!-- counter -->                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div><?php */?><br>
=======
>>>>>>> c1868448eae0974f750ecaf4a56d58dd3db4f0fc
                    <!-- ontainer -->
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="headline style-2"> 
                                    <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i> 
                                    <h2>quote of the day</h2> 
                                </div>
                                <!-- headline -->                                 
                                <div class="testimonial-slider"> 
                                    <ul> 
                                    <?php 
                                    $qret=mysqli_query($conn,"select * from qoutes order by quote_id desc limit 3");
                                    while($qret2=mysqli_fetch_array($qret)){
                                    ?>
                                        <li> 
                                            <div class="testimonial"> 
                                                <blockquote> 
                                                    <p><?php echo $qret2['quote'];?></p> 
                                                </blockquote>                                                 
                                                <h5><?php echo $qret2['auother'];?></h5> 
                                            </div>
                                            <!-- testimonial -->                                             
                                        </li>                                         
                                          <?php }?>                                      
                                                                                 
                                    </ul>                                     
                                    <div id="thumb-pager"> 
                                        <a data-slide-index="0" href="">
                                            <img src="images/testimonials/image-1.jpg" alt="">
                                        </a>                                         
                                        <a data-slide-index="1" href="">
                                            <img src="images/testimonials/image-2.jpg" alt="">
                                        </a>                                         
                                        <a data-slide-index="2" href="">
                                            <img src="images/testimonials/image-3.jpg" alt="">
                                        </a>                                         
                                    </div>
                                    <!-- thumb-pager -->                                     
                                </div>
                                <!-- testimonial-slider -->                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div>                     
                </section>
                <!-- fullsection -->                 
             <!--    <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-4"> 
                            <div class="headline style-1"> 
                                <h4>Skills</h4> 
                                <h2>Progress</h2> 
                            </div>
                            <!-- headline ->                             
                            <div class="progress"> 
                                <div class="progress-bar" data-width="90"></div>                                 
                            </div>
                            <!-- progess ->                             
                            <div class="progress-bar-title"> 
                                <h5>Marketing <span style="left:90%">90%</span></h5> 
                            </div>
                            <!-- progress-bar-title ->                             
                            <div class="progress"> 
                                <div class="progress-bar" data-width="95"></div>                                 
                            </div>
                            <!-- progess ->                             
                            <div class="progress-bar-title"> 
                                <h5>Design <span style="left:95%">95%</span></h5> 
                            </div>
                            <!-- progress-bar-title ->                             
                            <div class="progress"> 
                                <div class="progress-bar" data-width="85"></div>                                 
                            </div>
                            <!-- progess ->                             
                            <div class="progress-bar-title"> 
                                <h5>Team work <span style="left:85%">85%</span></h5> 
                            </div>
                            <!-- progress-bar-title ->                             
                        </div>
                        <!-- col ->                         
                        <div class="col-md-4"> 
                            <div class="headline style-1"> 
                                <h4>Some text</h4> 
                                <h2>Our Work</h2> 
                            </div>
                            <!-- headline ->                             
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Praesent et justo 
                        vitae nunc venenatis. </p> 
                        </div>
                        <!-- col ->                         
                        <div class="col-md-4"> 
                            <div class="headline style-1"> 
                                <h4>Checklist</h4> 
                                <h2>The List</h2> 
                            </div>
                            <!-- headline ->                             
                            <ul class="check-list"> 
                                <li>Nullam commodo sapien ac</li>                                 
                                <li>Fusce et turpis massa sed</li>                                 
                                <li>Quisque vel elit ac omis</li>                                 
                                <li>Lorem ipsum dolor sit amet</li>                                 
                                <li>Ut enim ad minim veniam</li>                                 
                                <li>Praesent ullamco laboris</li>                                 
                            </ul>                             
                        </div>
                        <!-- col ->                         
                    </div>
                    <!-- row ->                     
                </div> -->
                <!-- container -->                 
               
                <!-- container -->                 
               <!--  <section class="full-section parallax" id="section-1"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="headline style-2"> 
                                    <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i> 
                                    <h2>quote of the day</h2> 
                                </div>
                                <!-- headline ->                                 
                                <div class="testimonial-slider"> 
                                    <ul> 
                                        <li> 
                                            <div class="testimonial"> 
                                                <blockquote> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                                aliquip ex ea commodo consequat.</p> 
                                                </blockquote>                                                 
                                                <h5>swaroopa,india</h5> 
                                            </div>
                                            <!-- testimonial ->                                             
                                        </li>                                         
                                        <li> 
                                            <div class="testimonial"> 
                                                <blockquote> 
                                                    <p>Quisque neque orci, dictum eu egestas eget, porta vel dolor. Etiam vel nunc pulvinar, suscipit urna 
                                                sit amet, efficitur nibh. Nulla convallis ut lectus a tempor. Nullam tincidunt pulvinar sodales. Nunc 
                                                sed erat et risus luctus sollicitudin.</p> 
                                                </blockquote>                                                 
                                                <h5>gowthami,india</h5> 
                                            </div>
                                            <!-- testimonial ->                                             
                                        </li>                                         
                                        <li> 
                                            <div class="testimonial"> 
                                                <blockquote> 
                                                    <p>Phasellus finibus erat non ligula semper tempor. Curabitur augue lacus, mattis id enim vehicula, 
                                                dictum sollicitudin arcu. Cras sodales dolor quis ligula hendrerit, auctor dapibus nibh sagittis. Sed 
                                                congue, purus semper dapibus sagittis arcu.</p> 
                                                </blockquote>                                                 
                                                <h5>sandhya,india</h5> 
                                            </div>
                                            <!-- testimonial ->                                             
                                        </li>                                         
                                    </ul>                                     
                                    <div id="thumb-pager"> 
                                        <a data-slide-index="0" href="">
                                            <img src="images/testimonials/image-1.jpg" alt="">
                                        </a>                                         
                                        <a data-slide-index="1" href="">
                                            <img src="images/testimonials/image-2.jpg" alt="">
                                        </a>                                         
                                        <a data-slide-index="2" href="">
                                            <img src="images/testimonials/image-3.jpg" alt="">
                                        </a>                                         
                                    </div>
                                    <!-- thumb-pager ->                                     
                                </div>
                                <!-- testimonial-slider ->                                 
                            </div>
                            <!-- col ->                             
                        </div>
                        <!-- row ->                         
                    </div>
                    <!-- container ->                     
                </section> -->
                <!-- full-section -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="headline style-3"> 
                                <h5>Mms</h5> 
                                <h2>Blog</h2> 
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p> 
                            </div>
                            <!-- headline -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- ontainer -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="isotope col-3 clearfix"> 
                            <?php 
                            $bret=mysqli_query($conn,"select * from blogs order by blog_id desc limit 3");
                            while($bret2=mysqli_fetch_array($bret)){
                                $str=$bret2['blog_desc'];
                                $str1=strip_tags($str);
                                if(strlen($str1)>10){
                                    $Strcut4=substr($str1,0,10);
                                }
                            ?>
                                <div class="isotope-item"> 
                                    <div class="blog-article wow fadeIn"> 
                                        <div class="blog-article-thumbnail"> 
                                            <img src="images/blog/image-8.jpg" alt=""> 
                                            <div class="blog-article-hover"> 
                                                <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-8.jpg"><i class="fa fa-eye"></i></a> 
                                            </div>
                                            <!-- blog-article-hover -->                                             
                                        </div>
                                        <!-- blog-article-thumbnail -->                                         
                                        <div class="blog-article-details"> 
                                            <h6><?php echo $bret2['datetime'];?></h6> 
                                            <h4><a href="blog-post.php"><?php echo $bret2['blog_title'];?></a></h4> 
                                        </div>
                                        <!-- blog-article-details -->                                         
                                        <p><?php echo $Strcut4;?>&nbsp;<br></p> 
                                        <a class="btn btn-default" href="blog-post.php">Read more</a>
                                    </div>
                                    <!-- blog-article -->                                     
                                </div>
                                <?php } ?>
                                <!-- isotope-item -->                             
                            </div>
                            <!-- isotope -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <div class="container"> 
                    <div class="row"> 
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <br>
                <br> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <ul class="logos clearfix"> 
                                <li>
                                    <img src="images/logos/image-1.png" alt="">
                                </li>                                 
                                <li>
                                    <img src="images/logos/image-2.png" alt="">
                                </li>                                 
                                <li>
                                    <img src="images/logos/image-3.png" alt="">
                                </li>                                 
                                <li>
                                    <img src="images/logos/image-4.png" alt="">
                                </li>                                 
                                <li>
                                    <img src="images/logos/image-5.png" alt="">
                                </li>                                 
                            </ul>                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <br>
                <br>
                <br> 
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
                                    <p class="last text-center text-uppercase">&copy; All Rights Reserved <span class="text-primary">MMS</span> <span class="text-lowercase"> template.</span></p> 
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
