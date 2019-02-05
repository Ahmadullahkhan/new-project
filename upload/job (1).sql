-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2014 at 03:11 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(7, 7, 2, 'Apply', 'No Message'),
(9, 7, 1, 'Apply', 'No Message'),
(10, 7, 4, 'Apply', 'No Message'),
(12, 3, 1, 'Apply', 'No Message'),
(13, 3, 5, 'Apply', 'No Message'),
(15, 3, 6, 'Call Latter Send', 'you are invited for interview on 14 june '),
(16, 9, 6, 'Call Latter Send', 'you are inveted for the post of wirless operator and please you will give written test on 12 june 2015 on peshawar phase 5 near ICMS college');

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
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`, `logo`) VALUES
(2, 'jeo', 'Mr. Mohan Shah', 'Navarangpura1', 'Ahmedabad', 'mohan@gmail.com', 9898989898, 'Software', 'Confirm', 'abl', 'abl', 'Who is Your Favourite Person?', 'sachin', 'design/jeo.gif'),
(3, 'Zong', 'Mr Majid ali', 'tazagram', 'mardan', 'majid@awkum.com', 8989898989, 'Hardware', 'Confirm', 'majid', 'majid', '', '', 'design/4.png'),
(4, 'Solusoft  Pvt Limite', 'Mr. Nirav Soni', 'Narayanpura', 'Ahmedabad', 'nirav@gmail.com', 9898989898, 'Software', 'Confirm', 'nirav', 'nirav', 'What is Your Pet Name?', 'niru', ''),
(5, 'Info Matrics', 'Mr. Narayan', 'Sahibagh', 'Ahmedabad', 'narayan@yahoo.com', 6767676767, 'Software', 'Confirm', 'narayan', 'narayan', 'What is Your Pet Name?', 'nari', ''),
(6, 'gjh', 'hkjhj', 'ghjyh', 'fdff', 'maj@yahoo.com', 988778899, 'ghjg', '', 'majid', 'majid', '', 'majid', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(5, 3, 'asdad', '2018-09-13'),
(6, 3, 'asd', '2013-09-18'),
(7, 4, 'Thanks For Your Support.', '2013-09-18'),
(8, 3, 'asd', '2013-09-22'),
(9, 3, 'hi its very nice site i like such site ', '2014-12-07');

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
  `obt` varchar(55) NOT NULL,
  `tot` varchar(55) NOT NULL,
  `Percentage` float NOT NULL,
  PRIMARY KEY (`EduId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `obt`, `tot`, `Percentage`) VALUES
(22, 9, 'B.C.A', 'dd', 1998, '', '', 0),
(23, 9, 'abc', 'abcc', 2014, '44', '55', 66),
(24, 9, 'B.C.A', 'xxxx', 1998, '33', '22', 111),
(25, 9, 'B.C.A', '222', 1998, '`1', '2', 3),
(26, 9, 'B.C.A', 'dfdf', 1998, '44', '55', 0),
(27, 9, 'B.C.A', 'awhm', 1998, '44', '66', 77),
(28, 9, 'B.C.A', 'dd', 1998, '33', '4', 0),
(29, 9, 'B.C.A', 'rer', 1998, '3', '3', 0),
(30, 9, 'B.C.A', 'ccc', 1998, '3', '4', 0),
(31, 9, 'B.C.A', 'vv', 1998, '3', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_exp`
--

CREATE TABLE IF NOT EXISTS `jobseeker_exp` (
  `Expid` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `organizaton` varchar(100) NOT NULL,
  `st_date` varchar(22) NOT NULL,
  `end_date` varchar(22) NOT NULL,
  `st_salary` int(20) NOT NULL,
  `end_salary` int(20) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `duty` longtext NOT NULL,
  PRIMARY KEY (`Expid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `jobseeker_exp`
--

INSERT INTO `jobseeker_exp` (`Expid`, `JobSeekId`, `organizaton`, `st_date`, `end_date`, `st_salary`, `end_salary`, `job_title`, `duty`) VALUES
(66, 9, 'abc', 'july 2014', 'june 2015', 25000, 35000, 'database admin', 'perform office work design database for company');

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
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(3, 'Jalpa Prajapati', 'Near Dena Bank', 'Mehsana', 'jalpa@gmail.com', 9898989898, 'M.C.A', 'Female', '2013-09-10', 'Marksheet.pdf', 'Confirm', 'jalpa', 'jalpa', 'What is Your Pet Name?', 'jalpa'),
(4, 'Krunal Prajapati', 'Patan', 'Patan', 'krunal@gmail.com', 8989898989, 'M.B.A', 'Male', '2013-09-16', 'Marksheet.pdf', 'Confirm', 'krunal', 'krunal', '', ''),
(5, 'Gopal Patel', 'Patan', 'Patan', 'gopal@gmail.com', 9898989898, 'MA', 'Male', '2013-10-15', 'admin.jpg', 'Confirm', 'gopal', 'gopal', '', ''),
(6, 'Mehul Mistry', 'Swastik SOciety', 'Baroda', 'mehul@gmail.com', 8989898998, 'BE', 'Male', '2013-10-09', '470X310_1.jpg', 'Confirm', 'mehul', 'mehul', 'What is Your Pet Name?', 'mehu'),
(7, 'majid', 'tazagram', 'mardan', 'majidcs44@yahoo.com', 937536999, 'msc', 'Male', '2014-12-02', '01-Chapter I-Introduction.docx', 'Confirm', 'majid', 'majid', 'What is Your Pet Name?', 'majid'),
(8, 'sajid', 'tazagram', 'mardan', 'saji@yah.com', 976556677, 'B.C.A', 'Male', '2014-12-15', 'Acc. No. DC 941.pdf', 'Confirm', 'sajid', 'sajid', 'What is Your Pet Name?', 'sajid'),
(9, 'ali', 'qasmi', 'katlang', 'ali@awkum.com', 833667722, 'M.Sc.C.S', 'Male', '2014-12-01', 'Acc. No. DC 941.pdf', 'Confirm', 'ali', 'ali', 'What is Your Pet Name?', 'ali');

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
  `Description` varchar(200) NOT NULL,
  `strat_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `strat_date`, `end_date`) VALUES
(1, 'Wipro Infotech', 'Software Professional Required', 2, 'M.C.A', 'ASP.NET', '0000-00-00', '0000-00-00'),
(2, 'Wipro Infotech', 'Marketing Executive Required', 5, 'M.B.A', 'Freshers Are Invited', '0000-00-00', '0000-00-00'),
(3, 'TCS Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 5000', '0000-00-00', '0000-00-00'),
(4, 'Wipro Infotech', 'Cleaners Required', 3, 'S.S.C', 'N', '0000-00-00', '0000-00-00'),
(5, 'Wipro Infotech', 'clerk', 2, 'FA', 'condidate having will experience will be given preference breif knowlede of computer having one year diploma in IT or 6 month comuter cource in any laguage', '0000-00-00', '0000-00-00'),
(6, 'Zong', 'wirless operator', 1, 'M.Sc.C.S', 'wirelss engneer', '0000-00-00', '0000-00-00'),
(7, 'jeo', 'Software Professional Required', 3, 'M.C.A', 'mkhkfk', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `oral` varchar(50) NOT NULL,
  `write` varchar(50) NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE IF NOT EXISTS `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2013-09-24'),
(3, 'office admin jobs', '2014-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE IF NOT EXISTS `train` (
  `trid` int(11) NOT NULL AUTO_INCREMENT,
  `JobseekerId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `roll` int(11) NOT NULL,
  PRIMARY KEY (`trid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `train_id` int(11) NOT NULL AUTO_INCREMENT,
  `JobseekId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `inst` varchar(255) NOT NULL,
  `st_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  PRIMARY KEY (`train_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`train_id`, `JobseekId`, `title`, `inst`, `st_date`, `end_date`) VALUES
(3, 9, 'computer', 'vision institute of technology', 'june 2013', 'july 2014');

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
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2013-09-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2013-10-07', '09:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
