-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2014 at 08:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.5.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `address`, `phone`, `email`, `password`) VALUES
(1, 'AKIB', 'ramupra', 12345678, 'AKIBtanjim76@gmail.com', 'admin'),
(2, 'rakesh', '12/c,moghbazar', 1233456, 'rakeshbose74@yahoo.com', 'admin'),
(3, 'tonmoy', '575/2/b,modhubagh', 1673582219, 'akibtanjim@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `co_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  UNIQUE KEY `ph` (`ph`),
  KEY `co_id` (`co_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`co_id`, `name`, `email`, `ph`, `msg`) VALUES
(1, 'akib', 'akib_007@gmail.com', 1233, 'salfosnfsnfsfnsknf'),
(2, 'akib', 'yyy@gmail.com', 34567, 'bbbb'),
(3, 'rakesh', 'abcd@yahoo.com', 1234567, 'bla bla'),
(4, 'ashik', 'babu@gmail.com', 1683292375, 'kisu na'),
(5, 'rajesh', 'rajeshbose99@gmail.com', 1813998484, 'I am the brother of lukaku');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `credit` int(11) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `credit`) VALUES
(1, 'Database', 3),
(2, 'DSD', 3),
(3, 'Cmath', 3),
(4, 'Eco $ acc', 3),
(5, 'Microprocessor', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) NOT NULL,
  `news` varchar(1000) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news`) VALUES
(1, 'Carry Info', 'The undergraduate students of AUST having the backlog of carryover course(s), are advised to apply in prescribed application form available in the Office of the Controller of Examinations of the University (Block D, Level 5). Filled in application after payment of requisite fees must be submitted to the office of the controller of examinations by Thursday, the 24th July 2014. No application will be received after the time limit mentioned above.  The students of 1st/ 2nd/ 3rd/ 4th/5th year 2nd semester can clear the backlog of carryover course(s) along with the students of 1st/ 2nd/ 3rd/ 4th/5th year 1st semester and the students of 2nd/ 3rd/ 4th/5th year 1st semester can clear such course(s) along with the students of 1st/ 2nd/ 3rd/4th year 2nd semester.  A student can appear at the carryover examination of a course provided that the examination date of the course does not coincide with any examination date of the student concerned.     	  '),
(2, 'Provesional Grade sheet', '	  	    	 NOTIFICATION     	  	    	It is hereby notified for information of all concerned that the undergraduate students of AUST will be issued provisional grade sheets of the last semester (Fall 2013). The students are asked to apply in the prescribed application form for taking delivery of their provisional grade sheets. Filled in application after payment of requisite fees (One hundred taka for each grade sheet) must be submitted to the Office of the Controller of Examinations by the 6th July 2014. No application will be received after the time limit mentioned above.	    	  	    	  	    	  	    	  	    	(M. Abul Hossain)	    	Controller of Examinations (In-charge)	    	AUST	'),
(3, 'Achievement of Aust', 'Achievement of AUST students in Imagine Cup 2014     	  	    	 The final round of one of the biggest science & technology based contest in Bangladesh, Microsoft Imagine Cup 2014, was held on 26thApril at IUB auditorium. Of the three categories AUST students showed extraordinary performances in two. The team “Karigor” consisting of three CSE students, Md. Yousuf Azad, Monesul Haque and Sourav Paul stood Champion in the gaming category, while the team “AUST Geeks”, consisting of two EEE students, Safayat Hossain Saajan and Farrukh Ahmad Uzzal, and two CSE students, Sarker Miraz Mahfuz and Srijon Chakraborti stood runners-up in world citizenship category. The Champion team contested with a very enjoyable computer game named “Not prince charming”, and the runners-up team was awarded for their outstanding combination of hardware and software titled “Safety on click”, which is a round-the-clock security monitoring system through mobile phones.  The high profile yearly contest under the name '),
(4, 'Provesional', ' 	  	    	 NOTIFICATION     	  	    	It is hereby notified for information of all concerned that the undergraduate students of AUST will be issued provisional grade sheets of the last semester (Fall 2013). The students are asked to apply in the prescribed application form for taking delivery of their provisional grade sheets. Filled in application after payment of requisite fees (One hundred taka for each grade sheet) must be submitted to the Office of the Controller of Examinations by the 6th July 2014. No application will be received after the time limit mentioned above.	    	  	    	  	    	  	    	  	    	(M. Abul Hossain)	    	Controller of Examinations (In-charge)	    	AUST	  ');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `s_id` bigint(9) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(50) NOT NULL,
  `s_add` varchar(100) NOT NULL,
  `s_bg` varchar(3) NOT NULL,
  `dob` date NOT NULL,
  `s_ph` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120104012 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`s_id`, `s_name`, `s_add`, `s_bg`, `dob`, `s_ph`, `email`, `pass`) VALUES
(120104001, 'akib', '575/2/b modhubag', 'AB+', '1991-08-28', 1673582219, 'akibtanjim@gmail.com', '1234'),
(120104002, 'tonmoy', '17/c moghbazar', 'B+', '1992-09-24', 1673061901, 'tonmo_007y@yahoo.com', '1234'),
(120104003, 'rakesh', 'rampura', 'A-', '1993-08-09', 1832581261, 'rakeshbose74@yahoo.com', '1234'),
(120104004, 'Reza', 'rampura', 'A+', '1991-08-20', 1680462796, 'nishat_reza2@gmail.com', '1234'),
(120104005, 'fuad', 'airport', 'AB+', '1991-06-21', 1689678423, 'fuad76@yahoo.com', '12345'),
(120104006, 'mamun', 'bonosree', 'A-', '1992-04-22', 1685467291, 'mamunmia89@gmail.com', '45632'),
(120104007, 'imran', 'rampura', 'AB+', '1990-01-28', 1738297263, 'imranaust22@yahoo.com', '781234'),
(120104008, 'sagar', 'mogbazar', 'A-', '1991-03-04', 1883333221, 'Sagarcse67@gmail.com', '122334'),
(120104009, 'SHUVO', 'mirpur', 'B+', '0000-00-00', 1678956433, 'shuvo75@yahoo.com', '12342'),
(120104011, 'fahad', 'modhubagh', 'B+ ', '1994-09-03', 1673582222, 'fahad@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE IF NOT EXISTS `takes` (
  `s_id` bigint(9) NOT NULL,
  `c_id` int(11) NOT NULL,
  `ct1` float NOT NULL,
  `ct2` float NOT NULL,
  `ct3` float NOT NULL,
  `avg` float NOT NULL,
  `attendance` float NOT NULL,
  `final` float NOT NULL,
  `total` float NOT NULL,
  `grade` varchar(3) NOT NULL,
  KEY `s_id` (`s_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`s_id`, `c_id`, `ct1`, `ct2`, `ct3`, `avg`, `attendance`, `final`, `total`, `grade`) VALUES
(120104001, 1, 15, 20, 12, 16, 9, 50, 75, 'A'),
(120104002, 1, 10, 10, 10, 10, 5, 55, 70, 'A-'),
(120104001, 2, 20, 15, 10, 15, 10, 55, 80, 'A+'),
(120104001, 3, 13, 13, 12, 13, 8, 49, 70, 'A-'),
(120104001, 4, 12, 10, 11, 11, 7, 32, 50, 'c+'),
(120104001, 5, 12, 20, 16, 16, 8, 44, 68, 'B+'),
(120104002, 2, 20, 15, 10, 15, 10, 55, 75, 'A'),
(120104002, 3, 10, 12, 17, 13, 10, 48, 71, 'A-'),
(120104002, 3, 15, 15, 15, 15, 10, 55, 80, 'a+'),
(120104002, 5, 5, 10, 10, 8.25, 10, 40, 58.25, 'B-'),
(120104002, 4, 12, 13, 14, 13, 10, 43, 66, 'B+'),
(120104003, 1, 8, 12, 10, 10, 5, 25, 40, 'D'),
(120104003, 2, 12, 8, 11, 10.33, 7, 43, 50.33, 'C+'),
(120104003, 3, 13, 10, 13, 11, 9, 40, 60, 'B'),
(120104003, 4, 15, 10, 15, 11.75, 7, 32, 50.75, 'C+'),
(120104003, 5, 15, 15, 15, 15, 10, 57, 82, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE IF NOT EXISTS `teacher_info` (
  `t_id` int(255) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  `t_add` varchar(50) NOT NULL,
  `t_ph` int(11) NOT NULL,
  `t_salary` int(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `t_ph` (`t_ph`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`t_id`, `t_name`, `t_add`, `t_ph`, `t_salary`, `pass`) VALUES
(1, 'paris', 'shantinagar', 1762555272, 50000, '1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student_info` (`s_id`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `courses` (`c_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
