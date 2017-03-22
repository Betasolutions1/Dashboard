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
        <title>MMS - My Multy Solutions</title>         
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
                                    <li class=""> 
                                        <a href="index.php">Home</a> 
                                    </li>                                     
                                    <li>
                                        <a href="about-us.php">About</a>
                                    </li>                                     
                                    <li class="dropdown active"> 
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
                                            <!--<li>
                                                <a href="services2.php">Mobile</a>
                                            </li>                                             
                                            <li>
                                                <a href="services3.php">IT</a>
                                            </li> -->                                            
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
                            <div class="col-sm-6"> 
                                <h4>Services</h4> 
                            </div>
                            <!-- col -->                             
                            <div class="col-sm-6"> 
                                <ol class="breadcrumb"> 
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>                                     
                                    <li class="active">Services</li>                                     
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
                <!-- ontainer -->                 
                <div class="container"> 
                    <div class="row"> 
                    <?php
                    $edu_exe=mysqli_query($conn,"select *,SUBSTRING(service_desc ,1,150) from services where service_type='$_GET[Stype_Id]' order by service_id desc");
					while($edu_res=mysqli_fetch_array($edu_exe))
					{
					?>
                        <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown" style=" width: 250px;height: 400px; background-color: #fbfbfb;opacity: .8;"> 
                                <div class="services-boxes-content"> 
                                <img src="Console/services/<?php echo $edu_res['service_img']?>" style="width:250px;height:185px;">
                                    <h3> <a href="single-service.php?Service_id=<?php echo $edu_res['service_id'];?>"><?php echo $edu_res['service_title']?></a> <!--<small>Nice &amp; Clean</small>--> </h3> 
                                    <p><?php echo strip_tags($edu_res['SUBSTRING(service_desc ,1,150)']);?>.</p> 
                                </div>
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
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <?php
					}
						?>
                        <!-- col -->                         
                      <?php /*?>  <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.3s"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php">E-commerce</a> <small>New project</small> </h3> 
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
                                    <h3> <a href="single-service.php">Web developing</a> <small>We are the best</small> </h3> 
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
               <?php /*?> <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php">Project managing</a> <small>All you need</small> </h3> 
                                    <p>Curabitur nulla tellus, suscipit sit amet fringilla vel, porttitor sed nibh. Proin lacinia mi eget ultricies porta. 
                                porttitor elit dolor unde.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.3s"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php">Mind Blowing design</a> <small>Modern and clean</small> </h3> 
                                    <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                justo enim, malesuada quis.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-4"> 
                            <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.6s"> 
                                <div class="services-boxes-content"> 
                                    <h3> <a href="single-service.php">Responsive Design</a> <small>On all devices</small> </h3> 
                                    <p>Cras tempor ullamcorper nibh, quis rhoncus eros pharetra vel. Quisque sollicitudin aliquet tellus ut lacinia 
                                imperdiet ex lobortis. </p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div><?php */?>
                <!-- ontainer -->                 
                <section class="full-section parallax" id="section-5"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-sm-12"> 
                                <div class="process-steps process-6-steps clearfix"> 
                                    <div class="step"> 
                                        <i class="miu-icon-editor_books_library_collection_outline_stroke"></i> 
                                        <div class="step-details"> 
                                            <h5>Land project</h5> 
                                        </div>
                                        <!-- step-details -->                                         
                                    </div>
                                    <!-- step -->                                     
                                    <div class="step"> 
                                        <i class="miu-icon-editor_document_file_2_outline_stroke"></i> 
                                        <div class="step-details"> 
                                            <h5>Make plans</h5> 
                                        </div>
                                        <!-- step-details -->                                         
                                    </div>
                                    <!-- step -->                                     
                                    <div class="step"> 
                                        <i class="miu-icon-device_volume_loudspeaker_speaker_down_outline_stroke"></i> 
                                        <div class="step-details"> 
                                            <h5>Ideas</h5> 
                                        </div>
                                        <!-- step-details -->                                         
                                    </div>
                                    <!-- step -->                                     
                                    <div class="step"> 
                                        <i class="miu-icon-device_power_outline_stroke"></i> 
                                        <div class="step-details"> 
                                            <h5>Work hard</h5> 
                                        </div>
                                        <!-- step-details -->                                         
                                    </div>
                                    <!-- step -->                                     
                                    <div class="step"> 
                                        <i class="miu-icon-common_star_favorite_bookmark_outline_stroke"></i> 
                                        <div class="step-details"> 
                                            <h5>See results</h5> 
                                        </div>
                                        <!-- step-details -->                                         
                                    </div>
                                    <!-- step -->                                     
                                    <div class="step"> 
                                        <i class="miu-icon-food-drink_cocktail_wine_glass_outing_drink_outline_stroke"></i> 
                                        <div class="step-details"> 
                                            <h5>Enjoy</h5> 
                                        </div>
                                        <!-- step-details -->                                         
                                    </div>
                                    <!-- step -->                                     
                                </div>
                                <!-- porcess-steps -->                                 
                            </div>
                            <!-- col -->                             
                        </div>
                        <!-- row -->                         
                    </div>
                    <!-- ontainer -->                     
                </section>
                <!-- full-section -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-right wow fadeInLeft"> 
                                <i class="miu-icon-circle_gear_setting_configure_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">Many features</a></h3> 
                                    <p>Natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
								veritatis.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-left wow fadeInRight"> 
                                <i class="miu-icon-editor_crop_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">Modern Design</a></h3> 
                                    <p>Maecenas lectus tortor, tincidunt ac ipsum ac, aliquet tempus tortor. In quis augue nulla. Vivamus dolor dui, auctor 
								eget nulla non porttitor. </p> 
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
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-right wow fadeInLeft"> 
                                <i class="miu-icon-business_coins_money_stack_salary_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">Revolution slider</a></h3> 
                                    <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo 
								inventore.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-left wow fadeInRight"> 
                                <i class="miu-icon-device_board_presentation_content_text_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">Video background</a></h3> 
                                    <p>Pellentesque faucibus urna nec quam placerat tincidunt. Praesent mauris lacus, tincidunt non arcu in, sodales congue 
								enim felis nec viverra.</p> 
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
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-right wow fadeInLeft"> 
                                <i class="miu-icon-common_star_favorite_bookmark_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">Retina ready</a></h3> 
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
								eaque ipsa.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-left wow fadeInRight"> 
                                <i class="miu-icon-device_tablets_ipads_horizontal_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">Ultra responsive</a></h3> 
                                    <p>Maecenas sit amet gravida velit, in ultrices felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-right wow fadeInLeft"> 
                                <i class="miu-icon-editor_document_file_2_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">All elements included</a></h3> 
                                    <p>Nulla mollis eu neque eu ornare. Proin eget placerat massa, ac maximus massa. Nullam bibendum et velit sed volutpat 
									rutrum nibh.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-6"> 
                            <div class="services-boxes style-3 icon-left wow fadeInRight"> 
                                <i class="miu-icon-other_review_comment_outline_stroke"></i> 
                                <div class="services-boxes-content"> 
                                    <h3><a href="single-service.php">24H Support</a></h3> 
                                    <p>Aenean malesuada condimentum nisl, eu posuere leo porta sodales. Quisque semper faucibus nisl in maximus. Morbi blandit
									eget risus ut aliquam.</p> 
                                </div>
                                <!-- services-boxes-content -->                                 
                            </div>
                            <!-- services-boxes -->                             
                        </div>
                        <!-- col -->                         
                    </div>
                    <!-- row -->                     
                </div>
                <!-- container -->                 
                <section class="full-section" id="section-6"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-sm-12"> 
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
                    <!-- ontainer -->                     
                </section>
                <!-- full-section -->                 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-6"> 
                            <div class="headline style-2"> 
                                <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i> 
                                <h2>What people say</h2> 
                            </div>
                            <!-- headline -->                             
                            <div class="testimonial-slider-2"> 
                                <ul> 
                                    <li> 
                                        <div class="testimonial"> 
                                            <blockquote> 
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dictum eu egestas eget porta.</p> 
                                            </blockquote>                                             
                                            <h5>John Smith, Crazytown inc.</h5> 
                                        </div>
                                        <!-- testimonial -->                                         
                                    </li>                                     
                                    <li> 
                                        <div class="testimonial"> 
                                            <blockquote> 
                                                <p>Quisque neque orci, dictum eu egestas eget, porta vel dolor. Etiam vel nunc pulvinar, suscipit urna 
                                            sit amet, efficitur nibh. Nulla convallis ut lectus a tempor mattis id enim ligula.</p> 
                                            </blockquote>                                             
                                            <h5>Jane Smith, MiloBrand</h5> 
                                        </div>
                                        <!-- testimonial -->                                         
                                    </li>                                     
                                    <li> 
                                        <div class="testimonial"> 
                                            <blockquote> 
                                                <p>Phasellus finibus erat non ligula semper tempor. Curabitur augue lacus, mattis id enim vehicula, 
                                            dictum sollicitudin arcu. Cras sodales dolor quis ligula convallis ut lectus mattis id enim.</p> 
                                            </blockquote>                                             
                                            <h5>Paul Willson, The Muse</h5> 
                                        </div>
                                        <!-- testimonial -->                                         
                                    </li>                                     
                                </ul>                                 
                            </div>
                            <!-- testimonial-slider -->                             
                        </div>
                        <!-- col -->                         
                        <div class="col-sm-6"> 
                            <h2 style="font-weight:400;">We answer your questions</h2> 
                            <div class="panel-group" id="accordion"> 
                                <div class="panel"> 
                                    <div class="panel-heading"> 
                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">How do you work?</a> </h4> 
                                    </div>
                                    <!-- panel-heading -->                                     
                                    <div id="collapse1" class="panel-collapse collapse in"> 
                                        <div class="panel-body"> 
                                            <p>Phasellus rhoncus non mi sed faucibus. Donec sollicitudin posuere ante, in tristique velit pellentesque id. 
                                        Nulla nibh arcu, cursus eu consectetur ut, tincidunt ac magna. Donec vitae orci nunc. </p> 
                                        </div>
                                        <!-- panel-body -->                                         
                                    </div>
                                    <!-- panel-collapse -->                                     
                                </div>
                                <!-- panel -->                                 
                                <div class="panel"> 
                                    <div class="panel-heading"> 
                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Why choose us?</a> </h4> 
                                    </div>
                                    <!-- panel-heading -->                                     
                                    <div id="collapse2" class="panel-collapse collapse"> 
                                        <div class="panel-body"> 
                                            <p>Nullam interdum in purus non porttitor. Nulla mollis eu neque eu ornare. Proin eget placerat massa, ac maximus 
                                        massa. Nullam bibendum et velit sed volutpat. Donec rutrum porttitor nibh.</p> 
                                        </div>
                                        <!-- panel-body -->                                         
                                    </div>
                                    <!-- panel-collapse -->                                     
                                </div>
                                <!-- panel -->                                 
                                <div class="panel"> 
                                    <div class="panel-heading"> 
                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">How can I help you?</a> </h4> 
                                    </div>
                                    <!-- panel-heading -->                                     
                                    <div id="collapse3" class="panel-collapse collapse"> 
                                        <div class="panel-body"> 
                                            <p>Aenean malesuada condimentum nisl, eu posuere leo porta sodales. Quisque semper faucibus nisl in maximus. 
                                        Morbi blandit eget risus ut aliquam. Fusce eget faucibus est, at molestie ex felis mi.</p> 
                                        </div>
                                        <!-- panel-body -->                                         
                                    </div>
                                    <!-- panel-collapse -->                                     
                                </div>
                                <!-- panel -->                                 
                            </div>
                            <!-- accordion -->                             
                        </div>
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
           <?php include 'footer.php';?>
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
