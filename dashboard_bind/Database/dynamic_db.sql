-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 06:06 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dynamic_db`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `data`) VALUES
(1, 'hello', '<p>fxg</p>');

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
(1, 'admin123', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(55) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `no_items` int(11) NOT NULL,
  `bill_amount` double NOT NULL,
  `order_date` date NOT NULL,
  `dispatch_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `product_id` int(11) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(55) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
