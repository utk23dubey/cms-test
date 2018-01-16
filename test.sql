-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2017 at 10:11 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img`, `title`) VALUES
(2, 'themes/images/clients/googleLogo.jpg', 'Google'),
(4, 'themes/images/clients/facebook.png', 'My web');

-- --------------------------------------------------------

--
-- Table structure for table `contactedus`
--

CREATE TABLE IF NOT EXISTS `contactedus` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactedus`
--

INSERT INTO `contactedus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'as', 'ssssss', 'ssss', 'sasasa');

-- --------------------------------------------------------

--
-- Table structure for table `corelsection`
--

CREATE TABLE IF NOT EXISTS `corelsection` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `urlname` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `corelsection`
--

INSERT INTO `corelsection` (`id`, `img`, `heading`, `content`, `url`, `urlname`) VALUES
(1, 'themes/images/corousel/1.jpg', 'What we do?', 'We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.  We recently introduce cheapest and best mobile web design packages in our services.', 'service.html', 'Read'),
(2, 'themes/images/carousel/business_website_templates_2.jpg', 'Portfolio', 'A website with portfolio ', '', 'Read'),
(4, 'themes/images/carousel/business_website_templates_2.jpg', 'Heading3', 'Hello Everyone ', '', 'Read'),
(13, 'themes/images/carousel/1466670249wuy69ejztndxfpmbgqFinished Steel Frame Hotel Blg.jpg', 'a', ' b', '', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `address`, `email`, `phone`, `fax`) VALUES
(1, '2601 Mission St.<br/>San Francisco, CA 94110', 'info@bussiness.com', '+123456790', '+841231655');

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `name`, `url`) VALUES
(1, 'Home', 'inde11x.php'),
(2, 'What we do?', 'services.php'),
(3, 'Who we Are', 'about_us.php'),
(4, 'PortFolio', 'portfolio.php'),
(5, 'Blog', 'blog.php'),
(6, 'Contact', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) DEFAULT NULL,
  `header` varchar(100) DEFAULT NULL,
  `content` varchar(150) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `img`, `header`, `content`, `category`) VALUES
(1, 'themes/images/portfolio/1.jpg', 'my web apps', 'Our aim is simple - to provide affordable web design and development services for different devices. ', 'new'),
(2, 'themes/images/portfolio/9.jpg', 'my web apps', 'Superhero ', 'popular'),
(3, 'themes/images/portfolio/carousel5.jpg', 'hello2', 'iassadjhasd ouashdsadas d sadh sahkjdashdjksa hdiusa d ', 'comingsoon');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `date` varchar(20) DEFAULT NULL,
  `urlname` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `content`, `date`, `urlname`) VALUES
(1, 'A very wonderful environment', '12/12/2017', 'Alex'),
(4, 'A very good afternoon', '11/04/2017', 'Sam'),
(5, 'Good Staff and Supporting Team', '11/18/2016', 'Alex');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail`
--

CREATE TABLE IF NOT EXISTS `thumbnail` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `header` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `content` varchar(999) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `thumbnail`
--

INSERT INTO `thumbnail` (`id`, `header`, `img`, `content`, `category`) VALUES
(1, 'Mobile Apps', 'themes/images/thumbnail/1.jpg', 'We specialise in web design', 'service'),
(11, 'à¤¹à¥ˆà¤²à¥‹ à¤¸à¤¬ à¤•à¥‹ ', 'themes/images/thumbnail/404.png', 'asdas', 'service'),
(12, 'A', 'themes/images/thumbnail/images_on.bmp', ' BCD', 'service'),
(13, 'Welcome ', 'themes/images/thumbnail/mywebsolution.jpg', 'Our aim is simple - to provide affordable web design and development services for different devices.', 'aboutus'),
(14, 'Business Ltd', 'themes/images/thumbnail/business_website_templates_3.jpg', 'We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.<br/>\r\n				We recently introduce cheapest and best mobile web design packages in our services. This is most popular and beneficial for everyone. \r\n				If you are looking for upgrade your website computable in mobiles and tablets, Even if you don''t have any website, \r\n				then just remember us and makes your dream success. We are giving the best solution for your best value of money<br/>\r\n				We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.<br/><br/>\r\n				We recently introduce cheapest and best mobile web design packages in our services. This is most popular and beneficial for everyone. \r\n				If you are looking for upgrade your website computable in mobiles and tablets, Even if you don''t have any website, \r\n				then just remember us and makes your dream success. We are giving the best solution for your best value of money\r', 'mainheader');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail2`
--

CREATE TABLE IF NOT EXISTS `thumbnail2` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `header` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `list1` varchar(50) NOT NULL,
  `list2` varchar(50) NOT NULL,
  `list3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `thumbnail2`
--

INSERT INTO `thumbnail2` (`id`, `header`, `heading`, `list1`, `list2`, `list3`) VALUES
(1, 'SEO', 'for online activities', 'Item1', 'Item2', 'Item3'),
(6, 'BigData', 'Hello', '1', '2', '3'),
(7, 'BigData123', 'Hello`', 'A', 'B ', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `welcomeheader`
--

CREATE TABLE IF NOT EXISTS `welcomeheader` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) DEFAULT NULL,
  `content` varchar(999) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `welcomeheader`
--

INSERT INTO `welcomeheader` (`id`, `heading`, `content`, `category`) VALUES
(1, 'Welcome', 'We specialize in web design, web development and graphic design for different Desktop, Mobiles and Tablets.We recently introduce cheapest and best mobile web design packages in our services.', 'welcomeheader'),
(2, 'My web pages', 'We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.We recently introduce cheapest and best mobile web design packages in our services.We are giving the best solution for your best value of money.........', 'news'),
(3, 'My app Store', 'We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.We recently introduce cheapest and best mobile web design packages in our services.We are giving the best solution for your best value of money.........	', 'news'),
(7, 'My web solutions', 'We recently introduce cheapest and best mobile web design packages in our services. This is most popular and beneficial for everyone. ', 'welcomeportfolio');
