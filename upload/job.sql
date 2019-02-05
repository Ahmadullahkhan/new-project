-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2014 at 05:39 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE IF NOT EXISTS `application_master` (
  `ApplicationId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(18, 18, 5, 'Call Latter Send', 'you are invited for written on 2 dec 2014 at qaide college Mardan please bring your original cnic mobile phone are not allowed at test time'),
(19, 18, 6, 'Apply', 'No Message'),
(20, 18, 18, 'Apply', 'No Message'),
(21, 18, 13, 'Apply', 'No Message'),
(22, 18, 16, 'Apply', 'No Message'),
(23, 18, 23, 'Apply', 'No Message'),
(24, 19, 19, 'Apply', 'No Message'),
(25, 19, 16, 'Apply', 'No Message'),
(26, 19, 17, 'Apply', 'No Message'),
(27, 20, 19, 'Apply', 'No Message'),
(28, 20, 35, 'Apply', 'No Message'),
(29, 18, 34, 'Apply', 'No Message');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE IF NOT EXISTS `employer_reg` (
  `EmployerId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`, `logo`) VALUES
(16, 'Ptcl', 'Ali', 'peshawar hayat abad phase 5', 'peshawar', 'Ali1234@yahoo.com', 3418383464, 'Wirless Operator', 'Confirm', 'ptcl', 'ptcl', 'Who is Your Favourite Person?', 'ptcl', 'design/ptcl_logo_15.png'),
(17, 'ubl', 'salam', 'Mardan Pakistan', 'Mardan kpk', 'salam@gmail.com', 3213344122, 'Banking', 'Confirm', 'salam', 'salam', 'Who is Your Favourite Person?', 'salam', 'design/ubl.jpg'),
(18, 'HBL', 'Asad', 'Karachi pakistan', 'Karachi', 'Asad34@gmail.com', 3427788333, 'Manager', 'Confirm', 'hbl', 'hbl', 'What is Your Pet Name?', 'hbl', 'design/HBL.jpg'),
(19, 'Qarshi', 'Bilal khan', 'Lahore Pakistan', 'Lahore', 'qarshi@yahoo.com', 3212345666, 'Pharmacy', 'Confirm', 'qarshi', 'qarshi', 'Who is Your Favourite Person?', 'qarshi', 'design/aw.jpg'),
(20, 'Pepsi', 'jawad ali', 'Mardan near bank road', 'Mardan', 'jawad007@yahoo.com', 3445544122, 'Labortry Assistant', 'Confirm', 'pepsi', 'pepsi', 'Who is Your Favourite Person?', 'pepsi', 'design/Pepsi Logo.JPG'),
(21, 'LG', 'Fawad khan', 'Islam abad Sector 4', 'Isalm abad', 'Lg8808@gmail.com', 3037344566, 'Software', 'Confirm', 'lg', 'lg', 'Who is Your Favourite Person?', 'lg', 'design/500px-LG_Logo.svg.png'),
(22, 'telenor', 'daniyal', 'Peshawar', 'peshawar', 'daniyal22@yahoo.com', 3461234567, 'Networking', 'Confirm', 'telenor', 'telenor', 'What is Your Pet Name?', 'telenor', 'design/telenor.jpg'),
(23, 'soni', 'kashif ali', 'Mardan', 'Mardan', 'soni@hotmail.com', 3212233111, 'Operator', 'Confirm', 'soni', 'soni', 'Who is Your Favourite Person?', 'soni', 'design/soni.jpg'),
(24, 'ABL', 'Nawab khan', 'Rawal pindi', 'Islamabad', 'ABL@gmail.com', 3458899444, 'Managing', 'Confirm', 'abl', 'abl', 'Who is Your Favourite Person?', 'abl', 'design/ABL-Logo.jpg'),
(25, 'zong', 'saleem', 'Lahore', 'Lahore', 'zong3341@hotmail.com', 3102233777, 'Networking', 'Confirm', 'zong', 'zong', 'Who is Your Favourite Person?', 'zong', 'design/4.png'),
(26, 'MCB', 'navid ali', 'Mardan', 'Mardan', 'MCB004@gmail.com', 3446677222, 'Busniss', 'Confirm', 'mcb', 'mcb', 'Who is Your Favourite Person?', 'mcb', 'design/545216-meezan_bankPHOTO-1367865762-818-640x480.jpg'),
(27, 'ARY CHANNEL', 'asad ', 'Lahore', 'Lahore', 'asad4455@gmail.com', 3217788990, 'Editing', 'Confirm', 'ary', 'ary', 'Who is Your Favourite Person?', 'ary', 'design/imagesary.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(5, 3, 'asdad', '2018-09-13'),
(6, 3, 'asd', '2013-09-18'),
(7, 4, 'Thanks For Your Support.', '2013-09-18'),
(8, 3, 'asd', '2013-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE IF NOT EXISTS `jobseeker_education` (
  `EduId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `obt` int(11) NOT NULL,
  `tot` int(11) NOT NULL,
  `Percentage` float NOT NULL,
  PRIMARY KEY (`EduId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `obt`, `tot`, `Percentage`) VALUES
(6, 18, 'MSC ', 'Abdul wali khan university Mardan', 2012, 600, 900, 77),
(7, 18, 'BSC', 'AWKUM', 2012, 400, 550, 83),
(8, 18, 'FSC', 'BISE Mardan', 2007, 700, 1100, 67),
(9, 18, 'SSC', 'BISE Mardan', 2005, 600, 800, 80),
(12, 20, 'B.C.A', 'AWKUM', 2007, 770, 900, 87),
(14, 19, 'B.B.A', 'University of Peshawar', 2007, 790, 900, 86);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_exp`
--

CREATE TABLE IF NOT EXISTS `jobseeker_exp` (
  `Expid` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `organizaton` varchar(255) NOT NULL,
  `st_date` varchar(55) NOT NULL,
  `end_date` varchar(55) NOT NULL,
  `st_salary` varchar(255) NOT NULL,
  `end_salary` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `duty` longtext NOT NULL,
  PRIMARY KEY (`Expid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jobseeker_exp`
--

INSERT INTO `jobseeker_exp` (`Expid`, `JobSeekId`, `organizaton`, `st_date`, `end_date`, `st_salary`, `end_salary`, `job_title`, `duty`) VALUES
(3, 20, 'Ngo,s', '2 june 2014', '4 sep 2015', '20000', '34000', 'Manager', 'office duty work'),
(4, 19, 'Ngo,s', 'July 2012', 'sep 2014', '30000', '45000', 'Manager', 'office work'),
(5, 18, 'mk', '87', '8', 'mhkj', 'nkkl', 'kjkj', 'kklj');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE IF NOT EXISTS `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `logo`, `Question`, `Answer`) VALUES
(18, 'Adnan Khan', 'city mardan near bank road', 'mardan', 'khan@gmail.com', 342776611, 'MSC Physics', 'Male', '1994-12-06', 'one.doc', 'Confirm', 'khan', 'khan', 'design/p5.jpg', 'What is Your Pet Name?', 'khan'),
(19, 'ayaz', 'Mardan College chowk', 'Mardan', 'ayaz@gmail.com', 3445566777, 'B.B.A', 'Male', '1998-12-14', 'job (1).sql', 'Confirm', 'ayaz', 'ayaz', 'design/p6.jpg', 'What is Your Pet Name?', 'ayaz'),
(20, 'majid', 'tazagram', 'mardan', 'majid@yahoo.com', 3224455333, 'B.C.A', 'Male', '2014-12-02', 'one.doc', 'Confirm', 'majid', 'majid', 'design/pp.jpg', 'What is Your Pet Name?', 'majid'),
(21, 'Sajid Ali', 'tazagram village swat', 'Mardan', 'sajid@yahoo.com', 3445566777, 'BA', 'Male', '1997-12-08', 'one.doc', 'Confirm', 'sajid', 'sajid', 'design/p2.jpg', 'What is Your Pet Name?', 'sajid');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE IF NOT EXISTS `job_master` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` longtext NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(19, 'ubl', 'Software Developer', 12, 'MSC Software Engineering', 'well Experience'),
(20, 'ubl', 'Cashier', 3, 'BA', 'no'),
(23, 'zong', 'Wirless operator Required', 2, 'M.Sc.C.S', '1:Minimum Qaualification Master Degree in CS or IT With CCNA course from recognize Institute\r\n2:condidate having 2 year Relevant Experience will be given Preference\r\n3:Condidate should have breif knowledge of Wirless Networking installation configuration of Networking\r\n4:Monthly salary will be given on the basic 17 scale\r\n5:condidate should apply till 28 december 2014\r\n'),
(24, 'Ptcl', 'Database Administrator Required', 4, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience \r\n2:condidate should have breif knowledge of database designing \r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 45000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(25, 'Ptcl', 'Web Developer Required', 14, 'MCS/BCS', '1:Master degree in Computer sciences with one years relevant experience \r\n2:condidate should have breif knowledge of web designing \r\n3:having good php and mysql skill with Css3 and html5.\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 65000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(26, 'Ptcl', 'System Analysit', 2, 'MCS/BCS', '1:Master degree in Computer sciences with one years relevant experience \r\n2:condidate should have breif knowledge of system designing \r\n3:having good skill in system designing like ERD DFD software models etc\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 75000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(27, 'Ptcl', 'Network Engineer', 0, 'MCS/BCS', '1:Master degree in Computer sciences with one years relevant experience \r\n2:condidate should have breif knowledge of networking and its installation \r\n3:having good skill in wirless communication\r\n*one year CCNA course from recognize institute\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 75000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(29, 'telenor', 'Network Engineer', 2, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience \r\n2:condidate should have breif knowledge of network designing \r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 40000 with allounces.\r\n6:Eligible condidate can apply till 28 December 2014 application after due date will be not accepted'),
(30, 'telenor', 'Database Administrator Required', 6, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience \r\n2:condidate should have breif knowledge of database designing \r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 45000 with allounces.\r\n6:Eligible condidate can apply till 28 December 2014 application after due date will be not accepted'),
(31, 'telenor', 'Assistant', 5, 'BA', '1:Bachler degree from recognize university with two years relevant experience \r\n2:one year diploma  in IT or equvilent\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at mardan.\r\n5:Monthly salary will be 15000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(32, 'telenor', 'wireless operator', 8, 'DAE Electronics', '1:Dipolma in Electronics from recognize board with one years relevant experience \r\n2:one year diploma  in IT or equvilent\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at mardan.\r\n5:Monthly salary will be 15000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(33, 'Qarshi', 'Pharmacist', 23, 'Pharmacy', 'we need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date.\r\nfor more detail plz visit our site www.qarshi.com.pk'),
(34, 'Qarshi', 'Chemist', 3, 'MSC Chemistry', 'we need a talent chemist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in  pharmacy store.minimum qualification is Master degree in chimistry  from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pk'),
(35, 'Qarshi', 'Nurse ', 8, 'Diploma in Peramidical', 'we need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pkwe need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pkwe need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pk');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `lang` varchar(55) NOT NULL,
  `oral` varchar(55) NOT NULL,
  `write` varchar(55) NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lang_id`, `JobSeekId`, `lang`, `oral`, `write`) VALUES
(1, 5, 'English', 'Bigginer', 'Bigginer'),
(2, 18, 'English', 'intermidiate', 'Advanced'),
(3, 18, 'Urdu', 'Advanced', 'Advanced'),
(4, 18, 'Arabic', 'Bigginer', 'intermidiate'),
(5, 18, 'English', 'Bigginer', 'Bigginer'),
(6, 19, 'English', 'intermidiate', 'Advanced'),
(7, 20, 'English', 'intermidiate', 'Advanced'),
(8, 20, 'Urdu', 'Advanced', 'Advanced');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE IF NOT EXISTS `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2013-09-24'),
(3, 'All Category Jobs Availible', '2014-12-13'),
(4, 'Select your own choice of jobs', '2014-12-14'),
(5, 'UBL Have Announced New Jobs', '2014-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`) VALUES
(10, 'design/webmaster.jpg', ''),
(13, 'design/1233.png', ''),
(15, 'design/h9.jpg', ''),
(16, 'design/ubl.jpg', ''),
(17, 'design/4.png', ''),
(18, 'design/imagesary.jpg', ''),
(19, 'design/djuice-logo.jpg', ''),
(20, 'design/18.jpg', ''),
(21, 'design/abc.jpg', ''),
(22, 'design/5.jpg', ''),
(23, 'design/500px-LG_Logo.svg.png', ''),
(39, 'design/123.jpg', ''),
(44, 'design/123.jpg', ''),
(45, 'design/17.jpg', ''),
(46, 'design/16.jpg', ''),
(47, 'design/7.jpg', ''),
(48, 'design/111.jpg', ''),
(49, 'design/222111.jpg', ''),
(50, 'design/a6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `train_id` int(11) NOT NULL AUTO_INCREMENT,
  `JobseekId` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `inst` varchar(255) NOT NULL,
  `st_date` varchar(55) NOT NULL,
  `end_date` varchar(55) NOT NULL,
  PRIMARY KEY (`train_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`train_id`, `JobseekId`, `title`, `inst`, `st_date`, `end_date`) VALUES
(1, 19, 'CCNA', 'Vision', 'may 2013', 'dec 2014'),
(7, 20, 'CCNA', 'IT Developer', 'june 2013', 'june 2014');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admin', 'admin'),
(10, 'xyz', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_master`
--

CREATE TABLE IF NOT EXISTS `walkin_master` (
  `WalkInId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL,
  PRIMARY KEY (`WalkInId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `walkin_master`
--

INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES
(1, 'Ptcl', 'Database administrator', 4, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience \r\n2:condidate should have br', '2015-01-10', '00:00:10'),
(2, 'telenor', 'Assistant', 5, 'BA', '1:Bachler degree from recognize university with two years relevant experience \r\n2:one year diploma  ', '2015-12-04', '09:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
