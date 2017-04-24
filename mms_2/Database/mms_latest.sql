-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 02:18 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--


-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `data`) VALUES
(1, 'hello', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam erat, feugiat at velit tincidunt, dapibus congue nunc. Cras quis oreet turpis, ut volutpat purus. Suspendisse porttitor commodo elit, eget fringilla arcu tincidunt id. Sed non sollicitudin eros, suscipit enatis leo. Aenean risus justo, auctor sed sollicitudin vel, suscipit id magna. In tincidunt, leo amet pharetra euismod, nunc ante aliquet cu, sit amet pretium nisi leo tristique purus.</p>'),
(2, 'Lorium Ipsum', '<div class="col-sm-9">\r\n<div class="blog-article">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam erat, feugiat at velit tincidunt, dapibus congue nunc. Cras quis oreet turpis, ut volutpat purus. Suspendisse porttitor commodo elit, eget fringilla arcu tincidunt id. Sed non sollicitudin eros, suscipit enatis leo. Aenean risus justo, auctor sed sollicitudin vel, suscipit id magna. In tincidunt, leo amet pharetra euismod, nunc ante aliquet cu, sit amet pretium nisi leo tristique purus.</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-3">&nbsp;</div>');

-- --------------------------------------------------------

--
-- Table structure for table `account_services`
--

CREATE TABLE IF NOT EXISTS `account_services` (
  `acs_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `user_reg_id` int(11) NOT NULL,
  PRIMARY KEY (`acs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `account_services`
--

INSERT INTO `account_services` (`acs_id`, `service_id`, `user_reg_id`) VALUES
(1, 3, 1),
(2, 1, 1),
(3, 5, 1),
(4, 10, 1),
(5, 8, 1),
(6, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(55) NOT NULL,
  `admin_pwd` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pwd`) VALUES
(1, 'admin123', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE IF NOT EXISTS `billing_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(125) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `country` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `zipcode` varchar(55) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`address_id`, `customer_id`, `name`, `email`, `phone`, `country`, `state`, `city`, `address1`, `address2`, `zipcode`) VALUES
(1, 1, 'valli gowthami', 'sharmila.gowthami@gmail.com', '08179562049', '1', '1', 'Gajuwaka', 'Sankaramatam road', 'Sankaramatam road', '531173'),
(4, 1, 'valli gowthami', 'sharmila.gowthami@gmail.com', '8179562049', '1', '1', 'RTC complex', 'Sankaramatam road', 'Sankaramatam road', '531173'),
(5, 1, 'valli gowthami', 'sharmila.gowthami@gmail.com', '8179562049', '1', '1', 'NAD', 'Sankaramatam road', 'Sankaramatam road', '531173'),
(6, 1, 'valli gowthami', 'sharmila.gowthami@gmail.com', '8179562049', '1', '1', 'Gajuwaka', 'Sankaramatam road', 'Sankaramatam road', '531173'),
(7, 1, 'valli gowthami', 'sharmila.gowthami@gmail.com', '8179562049', '1', '1', 'NAD', 'Sankaramatam road', 'Sankaramatam road', '531173'),
(8, 1, 'valli gowthami', 'sharmila.gowthami@gmail.com', '8179562049', '1', '1', 'NAD', 'Sankaramatam road', 'Sankaramatam road', '531173'),
(9, 1, 'rajesh raj', 'stevejobs1024@gmail.com', '9515103611', '1', '1', 'RTC complex', 'gkgkouojkgvjhgi', 'gkgkouojkgvjhgi', '530016');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(55) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `datetime` varchar(55) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_desc`, `blog_image`, `datetime`) VALUES
(1, 'lorium ipsum', '<p>eas rgsrd t&nbsp;</p>', '1_ws.jpg', '03/14/2017'),
(3, 'lorium ipsum', '<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>', '2_working-area.jpg', '03/15/2017');

-- --------------------------------------------------------

--
-- Table structure for table `blog_reviews`
--

CREATE TABLE IF NOT EXISTS `blog_reviews` (
  `blog_review_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `customer_phone` varchar(25) NOT NULL,
  `customer_email` varchar(55) NOT NULL,
  `blog_review` text NOT NULL,
  PRIMARY KEY (`blog_review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_reviews`
--

INSERT INTO `blog_reviews` (`blog_review_id`, `blog_id`, `customer_name`, `customer_phone`, `customer_email`, `blog_review`) VALUES
(1, 25, 'vdf ', ' 453468038603', 'valli@gmail.com', 'x tyujhtrxrhytr h ujh t'),
(2, 85, 'xtr nhz r', '48321856', 'dtr h', 'gt ryhrth tryh');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `status` int(11) NOT NULL,
  `order_date` varchar(55) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `product_id`, `product_qty`, `product_price`, `status`, `order_date`) VALUES
(2, 1, 2, 1, 352, 1, ''),
(3, 1, 3, 1, 599, 1, ''),
(6, 1, 2, 1, 352, 1, ''),
(7, 1, 5, 1, 567, 1, ''),
(8, 1, 4, 1, 45665, 1, ''),
(9, 1, 5, 1, 567, 1, ''),
(10, 1, 4, 1, 45665, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(55) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Garments');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(55) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer_reviews`
--

CREATE TABLE IF NOT EXISTS `coustomer_reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(55) NOT NULL,
  `customer_phone` varchar(25) NOT NULL,
  `review` text NOT NULL,
  `customer_email` varchar(55) NOT NULL,
  `review_product_code` varchar(55) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coustomer_reviews`
--

INSERT INTO `coustomer_reviews` (`review_id`, `customer_name`, `customer_phone`, `review`, `customer_email`, `review_product_code`) VALUES
(1, 'valli', '8179562049', 'Also, if you want an easy way to grab associative arrays (for use with SELECT *) instead of having to specify exactly what variables to bind to, here''s a handy function:', 'valli@gmail.com', 'RS_5');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(55) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `no_items` int(11) NOT NULL,
  `bill_amount` double NOT NULL,
  `order_type` varchar(55) NOT NULL,
  `order_date` varchar(55) NOT NULL,
  `dispatch_date` varchar(55) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `no_items`, `bill_amount`, `order_type`, `order_date`, `dispatch_date`) VALUES
(1, 1, 2, 951, 'payumoney', '21-03-2017', '28-03-2017'),
(2, 1, 2, 919, 'payumoney', '21-03-2017', '28-03-2017'),
(3, 1, 1, 45665, 'payumoney', '22-03-2017', '29-03-2017'),
(4, 1, 1, 567, 'payumoney', '22-03-2017', '29-03-2017'),
(5, 1, 1, 45665, 'payumoney', '17-04-2017', '24-04-2017');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(55) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(55) NOT NULL,
  `product_desc` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_image`, `product_desc`) VALUES
(2, 1, 'xrtf yhdrt yhdrt', 352, '1_1.jpg', '<p>&nbsp;drt yhrt hjtdy dty jhnyr h</p>'),
(3, 2, 'lorium ipsun', 599, '2_slides-images-1-600x428-86.png', '<p>AW dASfc WEtfg Sefv SEtgfse r5sEtg reyg rgy</p>\r\n<p>zes biuje&nbsp;</p>'),
(4, 2, 'yuhg', 45665, '3_132.jpg', '<p>ghb bjhyhujhkiujkljl</p>'),
(5, 1, 'zdf ghzed ', 567, '1444426573_Lighthouse.jpg', '<p>hzdx fhbdx tyh</p>');

-- --------------------------------------------------------

--
-- Table structure for table `qoutes`
--

CREATE TABLE IF NOT EXISTS `qoutes` (
  `quote_id` int(11) NOT NULL AUTO_INCREMENT,
  `quote` text NOT NULL,
  `auother` varchar(55) NOT NULL,
  PRIMARY KEY (`quote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `qoutes`
--

INSERT INTO `qoutes` (`quote_id`, `quote`, `auother`) VALUES
(1, 'Everyday is urs lets make it Special', '-valli');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Register_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(55) NOT NULL,
  `Email` varchar(125) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Password` varchar(55) NOT NULL,
  PRIMARY KEY (`Register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Register_id`, `Name`, `Email`, `Phone`, `Password`) VALUES
(1, 'valli gowthami', 'sharmila.gowthami@gmail.com', '8179562049', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(55) NOT NULL,
  `service_title` varchar(55) NOT NULL,
  `service_desc` text NOT NULL,
  `service_img` varchar(125) NOT NULL,
  `servicetype_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_type`, `service_title`, `service_desc`, `service_img`, `servicetype_id`) VALUES
(1, '3', 'zfg hbxdfh  sertg', '<p>zrae gr htrfg hyjf ;pu if jfp &nbsp;wye bcjof &nbsp;uahd bjc/ wu an.l er geryt srt gyaezr er&nbsp;</p>', '3_user.png', 0),
(3, '4', 'lorium ipsum', '<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>', '2_working-area.jpg', 0),
(4, '4', 'lorium ipsum', '<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>', '3_slides-images-6-1400x930-47.jpg', 0),
(5, '5', 'fcxv', '<p>dfcvx</p>', '10_1.jpg', 0),
(6, '3', 'fdcx', '<p>dcx</p>', '10_2b.jpg', 0),
(7, '4', 'yhgfbvyhj', '<p>hbvyjhnbhgb v</p>', '10_7b.jpg', 0),
(8, '5', 'ghfjhghuj', '<p>jfgvuybvjhg</p>', '10_3.jpg', 4),
(9, '5', 'hugbv', '<p>hnjb jhnm b</p>', '8_Jellyfish.jpg', 4),
(10, '6', 'uhgbjhg', '<p>uyjhguyhui</p>', '9_Lighthouse.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `stype_id` int(11) NOT NULL AUTO_INCREMENT,
  `stype_name` varchar(100) NOT NULL,
  PRIMARY KEY (`stype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`stype_id`, `stype_name`) VALUES
(3, 'Mobile'),
(4, 'Education'),
(5, 'IT'),
(6, 'Trining');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(100) NOT NULL,
  `slider_desc` varchar(1000) NOT NULL,
  `slider_image` varchar(500) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_title`, `slider_desc`, `slider_image`) VALUES
(1, 'gftv ', '<p>gtfbv&nbsp;</p>', '_Tulips.jpg'),
(3, 'yutguyhg', '<p>ydfytfytgb</p>', '_Penguins.jpg'),
(4, 'bgfv', '<p>tgfvcgfc</p>', '4_Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(55) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'Andhra pradesh'),
(2, 1, 'Chenni');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonial` text NOT NULL,
  `author` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial`, `author`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, dtr tf hdtdtuyjmtfg hj', 'Valli'),
(2, 'Using the methods in the steps below, you will not need to use any other SQL injection filtering techniques such as mysql_real_escape_string(). This is because with prepared statements it is not possible to do conventional SQL injection.', 'Valli tdy ujtdy ');

-- --------------------------------------------------------

--
-- Table structure for table `vedios`
--

CREATE TABLE IF NOT EXISTS `vedios` (
  `vedio_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `vedio_title` varchar(55) NOT NULL,
  `vedio_path` varchar(500) NOT NULL,
  `video_image` varchar(255) NOT NULL,
  `vedio_desc` text NOT NULL,
  PRIMARY KEY (`vedio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE IF NOT EXISTS `website_info` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `webs_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
