   <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft" >

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="#">Mat Helme</a> </h5>
                        <ul class="list-inline">
                            <li>
                                <a href="#" >
                                    <i class="zmdi zmdi-settings"></i>
                                </a>
                            </li>

                            <li>
                                <a href="logout.php" class="text-custom">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Dashboard</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span>Static Pages</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="About.php">About Us</a></li>
                                    <li><a href="Contact.php">Contact Us</a></li>
                                    <li><a href="add_services.php">Services</a></li>
                                     <li><a href="vedios.php">Vedios</a></li>
                                </ul>
                            </li>
							<li class="has_sub">
                                <a href="country.php" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span>Add Country</span> <!--<span class="menu-arrow"></span> --></a>
                               
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span>Home Page</span><span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li class=""><a href="slider.php">Slider</a></li>
                                    <li><a href="Testmonial.php">Testmonials</a></li>
                                    <li><a href="Quote.php">Quote Of The Day</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span>Blog</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="Blog.php">Blogs</a></li>
                                    <li><a href="Reviews.php">Reviews</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span>Dynamic Pages</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Add-menu.php">Add Menu</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="category.php" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span>Add Category</span> <!--<span class="menu-arrow"></span> --></a>
                               
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-layers"></i><span>Pages</span> <span class="menu-arrow"></span></a>
                                
                                <ul class="list-unstyled">
                                <?php
                                $ret_me=$conn->prepare("select `page_name` from pages");
												$ret_me->execute();
												$ret_me->bind_result($pgname);
												$ret_me->store_result();
												while($ret_me->fetch())
												{
								?>
                                    <li><a href="<?php echo $pgname;?>.php"><?php echo $pgname;?></a></li>
                                    <?php
												}
									?>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span>Inventory</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Order.php">Orders</a></li>
                                    <li><a href="Products.php">Products</a></li>
                                    <li><a href="Cart.php">Cart</a></li>
                                    <li><a href="shipping.php">Shipping</a></li>
                                </ul>
                            </li>
                            
                             

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-layers"></i><span>Settings</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Change-password.php">Change Password</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix">
                            
                        </div>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>
<div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 44.1041px; visibility: visible;"></div>
                </div>

            </div>