-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2014 at 06:14 AM
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
  `attach` varchar(2000) NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`, `attach`) VALUES
(18, 18, 5, 'Call Latter Send', 'you are invited for written on 2 dec 2014 at qaide college Mardan please bring your original cnic mobile phone are not allowed at test time', ''),
(19, 18, 6, 'Apply', 'No Message', ''),
(20, 18, 18, 'Apply', 'No Message', ''),
(21, 18, 13, 'Apply', 'No Message', ''),
(22, 18, 16, 'Apply', 'No Message', ''),
(23, 18, 23, 'Apply', 'No Message', ''),
(24, 19, 19, 'Apply', 'No Message', ''),
(25, 19, 16, 'Apply', 'No Message', ''),
(26, 19, 17, 'Apply', 'No Message', ''),
(27, 20, 19, 'Apply', 'No Message', ''),
(29, 18, 34, 'Apply', 'No Message', ''),
(30, 18, 19, 'Apply', 'No Message', ''),
(31, 18, 32, 'Call Latter Send', 'adanan', 'one - Copy.doc'),
(32, 18, 24, 'Call Latter Send', 'pakistan', ''),
(33, 18, 26, 'Apply', 'No Message', ''),
(37, 19, 38, 'Call Latter Send', 'majid ali khan', ''),
(38, 19, 35, 'Apply', 'No Message', ''),
(39, 19, 24, 'Call Latter Send', 'AYAZ DALA', ''),
(40, 19, 25, 'Apply', 'No Message', ''),
(41, 19, 26, 'Apply', 'No Message', ''),
(42, 22, 24, 'Call Latter Send', '42 yar', 'one - Copy.doc'),
(43, 22, 25, 'Apply', 'No Message', ''),
(44, 24, 24, 'Apply', 'No Message', ''),
(45, 24, 25, 'Apply', 'No Message', ''),
(46, 23, 24, 'Call Latter Send', 'alaka da sa chql de', 'one - Copy.doc'),
(47, 23, 25, 'Apply', 'No Message', 'one.doc'),
(48, 21, 24, 'Call Latter Send', 'sajid ali ', 'jobsdox1.docx'),
(49, 21, 25, 'Apply', 'No Message', ''),
(50, 25, 24, 'Call Latter Send', 'ANYABGHJGHJSD', ''),
(51, 25, 25, 'Apply', 'No Message', ''),
(52, 18, 25, 'Apply', 'No Message', ''),
(57, 20, 0, 'Apply', 'No Message', ''),
(62, 20, 40, 'Call Latter Send', 'you are invited for written test please bring this call letter with your original cnic', 'Habib Bank Limited.docx'),
(63, 20, 37, 'Apply', 'No Message', ''),
(64, 20, 64, 'Apply', 'No Message', ''),
(68, 20, 29, 'Apply', 'No Message', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`, `logo`) VALUES
(16, 'Ptcl', 'Ali', 'peshawar hayat abad phase 5', 'peshawar', 'Ali1234@yahoo.com', 3418383464, 'Wirless Operator', 'Confirm', 'ptcl', 'ptcl', 'Who is Your Favourite Person?', 'ptcl', 'design/ptcl_logo_15.png'),
(17, 'UBL', 'salam', 'Mardan Pakistan', 'Mardan kpk', 'salam@gmail.com', 3213344122, 'Banking', 'Confirm', 'salam', 'salam', 'Who is Your Favourite Person?', 'salam', 'design/ubl.jpg'),
(18, 'HBL', 'Asad', 'Karachi pakistan', 'Karachi', 'Asad34@gmail.com', 3427788333, 'Manager', 'Confirm', 'hbl', 'hbl', 'What is Your Pet Name?', 'hbl', 'design/HBL.jpg'),
(19, 'Qarshi', 'Bilal khan', 'Lahore Pakistan', 'Lahore', 'qarshi@yahoo.com', 3212345666, 'Pharmacy', 'Confirm', 'qarshi', 'qarshi', 'Who is Your Favourite Person?', 'qarshi', 'design/aw.jpg'),
(20, 'Pepsi', 'jawad ali', 'Mardan near bank road', 'Mardan', 'jawad007@yahoo.com', 3445544122, 'Labortry Assistant', 'Confirm', 'pepsi', 'pepsi', 'Who is Your Favourite Person?', 'pepsi', 'design/Pepsi Logo.JPG'),
(21, 'LG', 'Fawad khan', 'Islam abad Sector 4', 'Isalm abad', 'Lg8808@gmail.com', 3037344566, 'Software', 'Confirm', 'lg', 'lg', 'Who is Your Favourite Person?', 'lg', 'design/500px-LG_Logo.svg.png'),
(22, 'telenor', 'daniyal', 'Peshawar', 'peshawar', 'daniyal22@yahoo.com', 3461234567, 'Networking', 'Confirm', 'telenor', 'telenor', 'What is Your Pet Name?', 'telenor', 'design/telenor.jpg'),
(23, 'soni', 'kashif ali', 'Mardan', 'Mardan', 'soni@hotmail.com', 3212233111, 'Operator', 'Confirm', 'soni', 'soni', 'Who is Your Favourite Person?', 'soni', 'design/soni.jpg'),
(24, 'ABL', 'Nawab khan', 'Rawal pindi', 'Islamabad', 'ABL@gmail.com', 3458899444, 'Managing', 'Confirm', 'abl', 'abl', 'Who is Your Favourite Person?', 'abl', 'design/ABL-Logo.jpg'),
(25, 'zong', 'saleem', 'Lahore', 'Lahore', 'zong3341@hotmail.com', 3102233777, 'Networking', 'Confirm', 'zong', 'zong', 'Who is Your Favourite Person?', 'zong', 'design/4.png'),
(26, 'MCB', 'navid ali', 'Mardan', 'Mardan', 'MCB004@gmail.com', 3446677222, 'Busniss', 'Confirm', 'mcb', 'mcb', 'Who is Your Favourite Person?', 'mcb', 'design/545216-meezan_bankPHOTO-1367865762-818-640x480.jpg'),
(27, 'ARY CHANNEL', 'asad ', 'Lahore', 'Lahore', 'asad4455@gmail.com', 3217788990, 'Editing', 'Confirm', 'ary', 'ary', 'Who is Your Favourite Person?', 'ary', 'design/imagesary.jpg'),
(28, 'Ngo', 'arsalan khan', 'near bank road mardan', 'mardan', 'arslan44@yahoo.com', 3213344543, 'Manager', 'Confirm', 'Ngo', 'ngo', 'Who is Your Favourite Person?', 'Ngo', 'design/ngo.jpg'),
(29, 'National High Way At', 'saqib ali', 'Near phase v peshawar hayat abad', 'peshawar', 'nha@gmail.com', 3213344333, 'Engineering', 'Confirm', 'nha', 'nha', 'Who is Your Favourite Person?', 'nha', 'design/nha.jpg'),
(30, 'USAID ', 'M Salman ', 'islam abad', 'islam abad', 'usaid@gmail.com', 3445566777, 'Any', 'Confirm', 'usaid', 'usaid', 'Who is Your Favourite Person?', 'usaid', 'design/usad.jpg'),
(31, ' The country school ', 'majid ali', 'mardan college chowk', 'mardan', 'majid@gma.com', 3445566770, 'Teachers', 'Confirm', 'city', 'city', 'Who is Your Favourite Person?', 'city', 'design/tcs-logo.jpg'),
(32, 'Beacon house school', 'M. ayaz khan', 'peshawr ', 'peshawr ', 'ayaz@gmail.com', 3319933732, 'Teachers', 'Confirm', 'ayaz', 'ayaz', 'Who is Your Favourite Person?', 'ayaz', 'design/bb.jpg'),
(33, 'Shifa Hospital', 'aslam', 'peshawar near sadar bazar', 'peshawar', 'aslam@yahoo.com', 937520122, 'Doctors', 'Confirm', 'shifa', 'shifa', 'Who is Your Favourite Person?', 'shifa', 'design/hoa.jpg'),
(34, 'ufone', 'shan', 'mardan mall road', 'mardan', 'ufone@yah.com', 3343322111, 'Networking', 'Pending', 'ufone', 'ufone', 'Who is Your Favourite Person?', 'ufone', 'design/uff.jpg'),
(35, 'Hamdard', 'ali khan', 'peshawar hayat abad phase v', 'peshawar', 'ali@gmail.com', 3034411213, 'Health', 'Pending', 'hamdard', 'hamdard', 'Who is Your Favourite Person?', 'hamdard', 'design/hamdard-logo.jpg'),
(36, 'Nokia', 'Sajjad Khan', 'islam sector 3 near abc', 'islam abad', 'sajjadcs4@gamil.com', 3335432123, 'Softwares', 'Pending', 'nokia', 'nokia', 'Who is Your Favourite Person?', 'nokia', 'design/Nokia-no-more.jpg'),
(37, 'COCA COLA', 'Arshad Ali', 'Lahore city street no 4 near minare pakistan', 'lahore', 'arshad321@yahoo.com', 3456234566, 'Pharmacy', 'Pending', 'coca', 'coca', 'Who is Your Favourite Person?', 'coca', 'design/ccc.jpg'),
(38, 'PTV', 'waqas khan', 'islamaba near faisal masjid street no abc', 'islam abad', 'ptvchannel34@yahoo.com', 3423322124, 'Reporters', 'Pending', 'ptv', 'ptv', 'Who is Your Favourite Person?', 'ptv', 'design/ptv-logo-150x1501.gif');

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
(9, 20, 'hi admin', '2014-12-24');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `obt`, `tot`, `Percentage`) VALUES
(7, 18, 'BSC', 'AWKUM', 2012, 400, 550, 83),
(8, 18, 'FSC', 'BISE Mardan', 2007, 700, 1100, 67),
(9, 18, 'SSC', 'BISE Mardan', 2005, 600, 800, 80),
(14, 19, 'Msc CS', 'University of Peshawar', 2007, 790, 900, 86),
(15, 18, 'M.Sc.C.S', 'awkum', 2013, 667, 800, 78),
(16, 20, 'MCS', 'AWKUM', 2013, 480, 600, 80);

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
(4, 19, 'Ngo,s', 'July 2012', 'sep 2014', '30000', '45000', 'DBA', 'office work'),
(5, 18, 'UBL', 'june 2011', 'sep 2014', '30000', '50000', 'DBA', 'database designing');

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
  UNIQUE KEY `UserName` (`UserName`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `logo`, `Question`, `Answer`) VALUES
(18, 'Adnan Khan', 'city mardan near bank road', 'mardan', 'khan@gmail.com', 342776611, 'M.Sc.C.S', 'Male', '1994-12-06', 'one.doc', 'Confirm', 'khan', 'khan', 'design/p5.jpg', 'What is Your Pet Name?', 'khan'),
(19, 'ayaz', 'Mardan College chowk', 'Mardan', 'ayaz@gmail.com', 3445566777, 'M.Sc.C.S', 'Male', '1998-12-14', 'job (1).sql', 'Confirm', 'ayaz', 'ayaz', 'design/p6.jpg', 'What is Your Pet Name?', 'ayaz'),
(20, 'Majid Ali', 'tazagram', 'mardan', 'majid@yahoo.com', 3224455333, 'M.B.A', 'Male', '2014-12-02', 'one.doc', 'Confirm', 'majid', 'majid', 'design/pp.jpg', 'What is Your Pet Name?', 'majid'),
(21, 'Sajid Ali', 'tazagram village swat', 'Mardan', 'sajid@yahoo.com', 3445566777, 'BA', 'Male', '1997-12-08', 'one.doc', 'Confirm', 'sajid', 'sajid', 'design/p2.jpg', 'What is Your Pet Name?', 'sajid'),
(22, 'waqas', 'malakand swat', 'Malakand', 'waqs@yahoo.com', 3442211555, 'B.B.A', 'Male', '1996-12-09', 'job.sql', 'Confirm', 'waqas', 'waqas', 'design/p8.jpg', 'What is Your Pet Name?', 'waqas'),
(23, 'ahmad', 'charsada', 'charsada', 'ahmad21@gmail.com', 3021122432, 'M.B.A', 'Male', '1993-12-06', 'one.doc', 'Confirm', 'ahmad', 'ahmad', 'design/p3.jpg', 'What is Your Pet Name?', 'ahmad'),
(24, 'sajjad', 'peshawar', 'peshawar', 'sajjdc3@yahoo.com', 3452266432, 'M.Sc.C.S', 'Male', '1998-12-07', 'one - Copy.doc', 'Confirm', 'sajjad', 'sajjad', 'design/p4.jpg', 'What is Your Pet Name?', 'sajjad'),
(25, 'Faheem', 'Tazagram Swat', 'Mingora', 'faheem@yahoo.com', 3214432113, 'DVM', 'Male', '2014-12-08', 'one.doc', 'Confirm', 'faheem', 'faheem', 'design/p7.jpg', 'What is Your Pet Name?', 'faheem'),
(26, 'Abdullah', 'lahore minare pakistan', 'lahor', 'abdullah_08@yahoo.com', 3123877321, 'MCS', 'Male', '1997-12-08', 'one - Copy.doc', 'Pending', 'abdullah', 'abdullah', 'design/kk.jpg', 'What is Your Pet Name?', 'abdullah'),
(27, 'saeed', 'peshwar phase 5 hayat abad', 'peshawar', 'saeed556@yahoo.com', 3445533213, 'MA English', 'Male', '1998-12-07', 'one - Copy.doc', 'Pending', 'saeed', 'saeed', 'design/jhkj.jpg', 'What is Your Pet Name?', 'saeed'),
(28, 'Farooq Khan', 'katlang village disst mardan tehsil katlang', 'Mardan', 'farooq255@gmail.com', 3213322111, 'M.B.A', 'Male', '1994-12-12', 'one - Copy.doc', 'Pending', 'farooq', 'farooq', 'design/k.jpg', 'What is Your Pet Name?', 'farooq'),
(29, 'Talha ', 'Village and po tazagram disst swat ', 'Swat', 'talha@yahoo.com', 3134455333, 'B.B.A', 'Male', '1995-12-04', 'one.doc', 'Pending', 'talha', 'talha', 'design/kkkk.jpg', 'What is Your Pet Name?', 'talha'),
(30, 'saad', 'qasmi', 'katlang', 'saad@yahoo.com', 3446677888, 'M.B.A', 'Male', '2014-12-22', 'Document.rtf', 'Pending', 'saad', 'saad', 'design/our jobseek.png', 'What is Your Pet Name?', 'vv'),
(31, 'Abbas', 'Mardan bank road', 'Mardan', 'sad@yahoo.com', 3445566213, 'M.C.A', 'Male', '2014-12-16', 'Document.rtf', 'Confirm', 'abbas', 'abbas', 'design/walkin.png', 'What is Your Pet Name?', 'aaa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(24, 'Ptcl', 'Database Administrator Required', 4, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience \r\n2:condidate should have breif knowledge of database designing \r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 45000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(25, 'Ptcl', 'Web Developer Required', 14, 'MCS/BCS', '1:Master degree in Computer sciences with one years relevant experience \r\n2:condidate should have breif knowledge of web designing \r\n3:having good php and mysql skill with Css3 and html5.\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 65000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(26, 'Ptcl', 'System Analysit', 2, 'MCS/BCS', '1:Master degree in Computer sciences with one years relevant experience \r\n2:condidate should have breif knowledge of system designing \r\n3:having good skill in system designing like ERD DFD software models etc\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 75000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(29, 'telenor', 'Network Engineer', 2, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience \r\n2:condidate should have breif knowledge of network designing \r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 40000 with allounces.\r\n6:Eligible condidate can apply till 28 December 2014 application after due date will be not accepted'),
(30, 'telenor', 'Database Administrator Required', 6, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience \r\n2:condidate should have breif knowledge of database designing \r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at islamabad.\r\n5:Monthly salary will be 45000 with allounces.\r\n6:Eligible condidate can apply till 28 December 2014 application after due date will be not accepted'),
(31, 'telenor', 'Assistant', 5, 'BA', '1:Bachler degree from recognize university with two years relevant experience \r\n2:one year diploma  in IT or equvilent\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at mardan.\r\n5:Monthly salary will be 15000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(32, 'telenor', 'wireless operator', 8, 'DAE Electronics', '1:Dipolma in Electronics from recognize board with one years relevant experience \r\n2:one year diploma  in IT or equvilent\r\n3:preference will be given to those who have well experience in relavant field\r\n4:selected condidate will be performed his duty at mardan.\r\n5:Monthly salary will be 15000 with allounces.\r\n6:Eligible condidate can apply till 30 December 2014 application after due date will be not accepted'),
(33, 'Qarshi', 'Pharmacist', 23, 'Pharmacy', 'we need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date.\r\nfor more detail plz visit our site www.qarshi.com.pk'),
(34, 'Qarshi', 'Chemist', 3, 'MSC Chemistry', 'we need a talent chemist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in  pharmacy store.minimum qualification is Master degree in chimistry  from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pk'),
(35, 'Qarshi', 'Nurse ', 8, 'Diploma in Peramidical', 'we need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pkwe need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pkwe need a talent pharmacist for our company which have deep knowledge about chemical farmulas.condidate should have 1 year experience in pharmacy field.minimum qualification is Master degree in pharmacy from recognize university.no 3rd division in all acadmic record although one 2nd division is allowed expect the last degree.eligible condidate can apply till 1 january 2015 no application will accepted after due date. for more detail plz visit our site www.qarshi.com.pk'),
(36, 'HBL', 'cashier', 8, 'BA', 'Habib bank limited need a well experience person for mardan branch who have two years experience as a cashier in any bank. Minimum qualification for required post is bachler degree in any subject although preference will be given to those who have knowledge of computer.Last date of submission application is 4 january 2015 application after due date will be not accepted.Habib bank limited need a well experience person for mardan branch who have two years experience as a cashier in any bank. Minimum qualification for required post is bachler degree in any subject although preference will be given to those who have knowledge of computer.Last date of submission application is 4 january 2015 application after due date will be not accepted.\r\nHabib bank limited need a well experience person for mardan branch who have two years experience as a cashier in any bank. Minimum qualification for required post is bachler degree in any subject although preference will be given to those who have knowledge of computer.Last date of submission application is 4 january 2015 application after due date will be not accepted.'),
(37, 'HBL', 'Manager', 2, 'M.B.A', ' 	\r\nHabib bank limited need a well experience person for mardan branch who have two years experience as a Manager in any bank. Minimum qualification for required post is Master degree  in  business, although preference will be given to those who have knowledge of computer.Last date of submission application is 3 january 2015 application after due date will be not accepted.Eligible condidate can apply on this job portal. 	\r\nHabib bank limited need a well experience person for mardan branch who have two years experience as a Manager in any bank. Minimum qualification for required post is Master degree  in  business, although preference will be given to those who have knowledge of computer.Last date of submission application is 3 january 2015 application after due date will be not accepted.Eligible condidate can apply on this job portal. 	\r\nHabib bank limited need a well experience person for mardan branch who have two years experience as a Manager in any bank. Minimum qualification for required post is Master degree  in  business, although preference will be given to those who have knowledge of computer.Last date of submission application is 3 january 2015 application after due date will be not accepted.Eligible condidate can apply on this job portal.'),
(38, 'HBL', 'Assistant', 2, 'BA', ' 	\r\nHabib bank limited need a well experience person for mardan branch who have 1 years experience as an Assistant in any bank. Minimum qualification for required post is BA/BSC degree  in  any subject , although preference will be given to those who have knowledge of computer.Last date of submission application is 3 january 2015 application after due date will be not accepted.Eligible condidate can apply on this job portal. 	\r\nHabib bank limited need a well experience person for mardan branch who have 1 years experience as an Assistant in any bank. Minimum qualification for required post is BA/BSC degree  in  any subject , although preference will be given to those who have knowledge of computer.Last date of submission application is 3 january 2015 application after due date will be not accepted.Eligible condidate can apply on this job portal.'),
(39, 'Shifa Hospital', 'Medical Specialist Required', 2, 'MBBS', 'we have need a medical specialist for our private hospital.Minimum qualification for required post is MBBS from any any govt or non govt insitute. Minimum Experience for this post is 5 years after completing MBBS degree. the basic scale is BPS 18 Monthly salary will be 2,00000. Eligible condidate can apply on this portal till 10 january 2015.\r\nwe have need a medical specialist for our private hospital.Minimum qualification for required post is MBBS from any any govt or non govt insitute. Minimum Experience for this post is 5 years after completing MBBS degree. the basic scale is BPS 18 Monthly salary will be 2,00000. Eligible condidate can apply on this portal till 10 january 2015.'),
(40, 'UBL', 'Manager', 4, 'M.B.A', 'we need a manger for our cantt branch who have two years experience in relevant field we need a manger for our cantt branch who have two years experience in relevant field we need a manger for our cantt branch who have two years experience in relevant field we need a manger for our cantt branch who have two years experience in relevant field we need a manger for our cantt branch who have two years experience in relevant field we need a manger for our cantt branch who have two years experience in relevant field we need a manger for our cantt branch who have two years experience in relevant field we need a manger for our cantt branch who have two years experience in relevant field '),
(42, 'National High Way At', 'Civil Engineer Required', 22, 'BSC(Civil)', 'we need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Civil Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute'),
(43, 'National High Way At', 'Survay Engineer', 12, 'DAE Civil', 'we need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute'),
(44, 'National High Way At', 'Computer operator', 2, 'BA', 'we need a computer operator  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a survay Engineer  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute'),
(45, 'National High Way At', 'Assistant', 4, 'BA', 'we need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute\r\nwe need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Assistant  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute'),
(46, 'MCB', 'cashier', 2, 'BA', 'we need a Cashier  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute\r\nwe need a Cashier  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Cashier  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Cashier  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Cashier  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a Cashier  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute'),
(47, 'MCB', 'Manager', 1, 'M.B.A', 'we need a manger  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a manger  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a manger  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a manger  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need a manger  who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute'),
(48, 'MCB', 'Assistant', 1, 'BA', 'we need an assistant who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need an assistant who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need an assistant who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need an assistant who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institutewe need an assistant who have two years experience in relevant field minimum qualification for required post is bsc civil from any govt or non govt recognize institute'),
(49, 'ARY CHANNEL', 'News Reporter', 5, 'Master in journalism', 'News Editor: A  morning daily community newspaper, located in a college town (Mississippi State University) looking for an individual who wants to make a difference in their career and guide a staff to make a community proud of what is being produced in their local newspaper each day. If you are a talented, self-starter that can motivate a news  of staff of six and take our news product to the next level we have a place for you. The news editor is responsible for the helping the editor plan daily budget, writing, editing, assigning stories, and making deadlines. Must be experienced with Apple, In-Design, and Photoshop and pagination. Benefits include: Bonuses, paid vacation, sick leave, mileage, health insurance and 401K available. Send resume to Don Norman, Publisher, The Starkville Daily News, P.O. Box 1068, Starkville, Ms. 39760, e-mail: sdnpub@starkvilledailynews.com.'),
(50, 'ARY CHANNEL', 'Sports Reporter', 2, 'Master in journalism', 'News Editor: A  morning daily community newspaper, located in a college town (Mississippi State University) looking for an individual who wants to make a difference in their career and guide a staff to make a Master in journalism one year experience in field community proud of what is being produced in their local newspaper each day. If you are a talented, self-starter that can motivate a news  of staff of six and take our news product to the next level we have a place for you. The news editor is responsible for the helping the editor plan daily budget, writing, editing, assigning stories, and making deadlines. Must be experienced with Apple, In-Design, and Photoshop and pagination. Benefits include: Bonuses, paid vacation, sick leave, mileage, health insurance and 401K available. Send resume to Don Norman, Publisher, The Starkville Daily News, P.O. Box 1068, Starkville, Ms. 39760, e-mail: sdnpub@starkvilledailynews.com.'),
(51, 'ARY CHANNEL', 'Cameraman', 7, 'FA', 'condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos condiate have experience in camera videos '),
(52, 'ARY CHANNEL', 'Hosts/Program Presenters', 4, 'MA English', 'we need a talent person for our channel who have good communication skill ability to present program etcwe need a talent person for our channel who have good communication skill ability to present program etcwe need a talent person for our channel who have good communication skill ability to present program etcwe need a talent person for our channel who have good communication skill ability to present program etcwe need a talent person for our channel who have good communication skill ability to present program etcwe need a talent person for our channel who have good communication skill ability to present program etcwe need a talent person for our channel who have good communication skill ability to present program etcwe need a talent person for our channel who have good communication skill ability to present program etc'),
(53, 'ngo', 'Assistant', 3, 'BA', 'we need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etcwe need a talent person for our company who have good communication skill ability to manage office work etc'),
(54, 'ngo', 'Computer operator', 5, 'BA', 'we need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etcwe need a computer operator  for our company who have good communication skill ability to manage office work etc'),
(55, 'ngo', 'Manager', 2, 'M.B.A', 'we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014we need a manager  for our company who have good communication skill ability to manage office work etc minimum qualification is MBA Eligible condidate can apply till 2 dec 2014'),
(56, 'ngo', 'Web developer', 2, 'MCS/BCS', 'we need a webdeveloper  for our company who have good communication skill ability to manage office work etc minimum qualification is MCS/BCS good php skill Eligible condidate can apply till 2 dec 2014we need a webdeveloper  for our company who have good communication skill ability to manage office work etc minimum qualification is MCS/BCS good php skill Eligible condidate can apply till 2 dec 2014we need a webdeveloper  for our company who have good communication skill ability to manage office work etc minimum qualification is MCS/BCS good php skill Eligible condidate can apply till 2 dec 2014we need a webdeveloper  for our company who have good communication skill ability to manage office work etc minimum qualification is MCS/BCS good php skill Eligible condidate can apply till 2 dec 2014we need a webdeveloper  for our company who have good communication skill ability to manage office work etc minimum qualification is MCS/BCS good php skill Eligible condidate can apply till 2 dec 2014'),
(57, 'UBL', 'Accountant', 1, 'B.COM', 'minimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 decminimum qualification is B.COM having one year experience last date of submission of application is 20 dec'),
(58, 'UBL', 'Web Developer Required', 3, 'MCS/BCS', 'minimum qualification is MCS/BCS  having one year experience php and mysql expert css3 and html 5 knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience php and mysql expert css3 and html 5 knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience php and mysql expert css3 and html 5 knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience php and mysql expert css3 and html 5 knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience php and mysql expert css3 and html 5 knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience php and mysql expert css3 and html 5 knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience php and mysql expert css3 and html 5 knowledgelast date of submission of application is 20 dec'),
(59, 'UBL', 'Database Administrator Required', 3, 'MCS/BCS', 'minimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decminimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 dec'),
(60, 'zong', 'Database Administrator Required', 4, 'MCS/BCS', 'Zong Company need a talent DBA.minimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decZong Company need a talent DBA.minimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decZong Company need a talent DBA.minimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decZong Company need a talent DBA.minimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 decZong Company need a talent DBA.minimum qualification is MCS/BCS  having one year experience VB.net and mysql expert  and  knowledgelast date of submission of application is 20 dec'),
(61, 'zong', 'Manager', 8, 'M.B.A', 'Manager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business educationManager Required in our company who have pass Master in business education'),
(62, 'zong', 'Accountant', 6, 'B.COM', 'Accontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT DiplomaAccontant Required in our company who have pass B.COM with one year IT Diploma'),
(63, 'zong', 'Computer operator', 2, 'BA', 'Computer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/mComputer operator  Required in our company who have pass B.A with one year IT Diploma\r\ntyping speed 40 w/m'),
(64, 'zong', 'Network Engineer', 2, 'MCS/BCS', '1:Master degree in Computer sciences with two years relevant experience 2:condidate should have breif knowledge of network designing 3:preference will be given to those who have well experience in relavant field 4:selected condidate will be performed his duty at islamabad. 5:Monthly salary will be 40000 with allounces. 6:Eligible condidate can apply till 28 December 2014 application after due date will be not accepted1:Master degree in Computer sciences with two years relevant experience 2:condidate should have breif knowledge of network designing 3:preference will be given to those who have well experience in relavant field 4:selected condidate will be performed his duty at islamabad. 5:Monthly salary will be 40000 with allounces. 6:Eligible condidate can apply till 28 December 2014 application after due date will be not accepted1:Master degree in Computer sciences with two years relevant experience 2:condidate should have breif knowledge of network designing 3:preference will be given to those who have well experience in relavant field 4:selected condidate will be performed his duty at islamabad. 5:Monthly salary will be 40000 with allounces. 6:Eligible condidate can apply till 28 December 2014 application after due date will be not accepted'),
(65, 'Ptcl', 'Network Engineer', 6, 'MS(Networking/Telecom)', 'Ptcl company need a network engineer who have minimum qualification MS in networking or telecom or wireless networking \r\ncondidate having 2 years experience will be given preference \r\nlast date for apply is 20 deceber 2014 only online application will be accepted   Ptcl company need a network engineer who have minimum qualification MS in networking or telecom or wireless networking \r\ncondidate having 2 years experience will be given preference \r\nlast date for apply is 20 deceber 2014 only online application will be accepted   Ptcl company need a network engineer who have minimum qualification MS in networking or telecom or wireless networking \r\ncondidate having 2 years experience will be given preference \r\nlast date for apply is 20 deceber 2014 only online application will be accepted   Ptcl company need a network engineer who have minimum qualification MS in networking or telecom or wireless networking \r\ncondidate having 2 years experience will be given preference \r\nlast date for apply is 20 deceber 2014 only online application will be accepted   Ptcl company need a network engineer who have minimum qualification MS in networking or telecom or wireless networking \r\ncondidate having 2 years experience will be given preference \r\nlast date for apply is 20 deceber 2014 only online application will be accepted   Ptcl company need a network engineer who have minimum qualification MS in networking or telecom or wireless networking \r\ncondidate having 2 years experience will be given preference \r\nlast date for apply is 20 deceber 2014 only online application will be accepted   ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
(8, 20, 'Urdu', 'Advanced', 'Advanced'),
(9, 19, 'Urdu', 'Advanced', 'Advanced'),
(10, 20, 'Pashto', 'Advanced', 'Advanced');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE IF NOT EXISTS `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(3, 'New Jobs in NGO,S', '2014-12-13'),
(4, 'Select your own choice of jobs', '2014-12-14'),
(6, 'Civil Eng jobs Announced  NHA', '2014-12-18'),
(7, 'Wireless operator jobs In zong', '2014-12-16'),
(8, 'Ptcl need Database and webdeveloper & system analyist', '2014-12-18'),
(9, 'HbL and UBL need Cashier qualification is BA', '2014-12-19'),
(10, 'We need Network Engineer (zong)', '2014-12-20'),
(11, 'We need sports and news editors also host/programer presenter (ARY CAHANNEL )', '2014-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`) VALUES
(10, 'design/webmaster.jpg', ''),
(13, 'design/1233.png', ''),
(15, 'design/h9.jpg', ''),
(16, 'design/ubl.jpg', ''),
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
(50, 'design/a6.jpg', ''),
(51, 'design/p6.jpg', ''),
(52, 'design/pp.jpg', ''),
(53, '20140730_171656.jpg', ''),
(54, 'design/Profile.png', ''),
(55, 'design/p5.jpg', ''),
(56, 'design/jobseekr index.png', ''),
(57, 'design/jobseekr index.png', ''),
(58, 'design/jobseekr index.png', ''),
(59, '20140730_171552.jpg', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`train_id`, `JobseekId`, `title`, `inst`, `st_date`, `end_date`) VALUES
(1, 19, 'CCNA', 'Vision', 'may 2013', 'dec 2014'),
(8, 18, 'BED', 'AIOU islamabad', 'april 2012', 'april 2014');

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
(2, 'telenor', 'Assistant', 5, 'BA', '1:Bachler degree from recognize university with two years relevant experience \r\n2:one year diploma  ', '2015-12-04', '09:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
