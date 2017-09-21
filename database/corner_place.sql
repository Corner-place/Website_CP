-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 05:16 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corner_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
  `recd` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(5, 'janedoe', 'babydoe', '10', '2017-04-26 23:04:00', 0),
(6, 'sebinbabu', 'sebinbabu', 'lol', '2017-04-27 01:40:20', 1),
(7, 'sonamchophel', 'sebinbabu', 'hey', '2017-04-27 01:42:04', 1),
(8, 'sebinbabu', 'sonamchophel', 'oye', '2017-04-27 01:42:42', 1),
(9, 'sebinbabu', 'sonamchophel', 'hello?', '2017-04-27 01:43:57', 1),
(10, 'sonamchophel', 'sebinbabu', 'Alllo?', '2017-04-27 01:44:11', 1),
(11, 'sebinbabu', 'sonamchophel', '???', '2017-04-27 01:47:19', 1),
(12, 'sonamchophel', 'sebinbabu', '??w', '2017-04-27 01:47:27', 1),
(13, 'sebinbabu', 'bb', 'Hey!', '2017-04-27 01:48:15', 1),
(14, 'sebinbabu', 'sonamchophel', 'Hey!', '2017-04-27 07:48:56', 1),
(15, 'sonamchophel', 'sebinbabu', 'jjj', '2017-04-27 07:51:01', 1),
(16, 'sonamchophel', 'sebinbabu', 'I', '2017-04-27 07:53:15', 1),
(17, 'sonamchophel', 'sebinbabu', 'efwer', '2017-04-27 07:53:44', 1),
(18, 'sonamchophel', 'sebinbabu', 'wer', '2017-04-27 07:53:45', 1),
(19, 'sonamchophel', 'sebinbabu', 'wer', '2017-04-27 07:53:45', 1),
(20, 'sonamchophel', 'sebinbabu', 'werwerwer', '2017-04-27 07:53:46', 1),
(21, 'sonamchophel', 'sebinbabu', 'werwer', '2017-04-27 07:53:47', 1),
(22, 'sonamchophel', 'sebinbabu', 'werewrw', '2017-04-27 07:53:48', 1),
(23, 'sonamchophel', 'sebinbabu', 'ewrewr', '2017-04-27 07:53:49', 1),
(24, 'sonamchophel', 'sebinbabu', 'wer', '2017-04-27 07:53:50', 1),
(25, 'sonamchophel', 'sebinbabu', 'wer', '2017-04-27 07:53:51', 1),
(26, 'sebinbabu', 'sonamchophel', 'ewrewr', '2017-04-27 07:53:56', 1),
(27, 'sebinbabu', 'sebinbabu', 'Oye', '2017-04-27 08:14:30', 1),
(28, 'sonamchophel', 'sebinbabu', 'Oleeee', '2017-04-27 08:19:12', 1),
(29, 'sebinbabu', 'sonamchophel', 'Hey sweetums!', '2017-04-27 09:21:48', 1),
(30, 'sebinbabu', 'sonamchophel', 'dddd', '2017-04-27 13:46:29', 1),
(31, 'sebinbabu', 'sonamchophel', 'ddd', '2017-04-27 13:46:30', 1),
(32, 'sebinbabu', 'sonamchophel', 'dddd', '2017-04-27 13:46:31', 1),
(33, 'sebinbabu', 'sonamchophel', 'dddd', '2017-04-27 13:46:31', 1),
(34, 'sebinbabu', 'sonamchophel', 'ddddd', '2017-04-27 13:46:32', 1),
(35, 'sebinbabu', 'sonamchophel', 'ddddd', '2017-04-27 13:46:33', 1),
(36, 'sebinbabu', 'sonamchophel', 'dddd', '2017-04-27 13:46:34', 1),
(37, 'sebinbabu', 'sonamchophel', 'Hey!', '2017-04-28 11:51:11', 1),
(38, 'sebinbabu', 'sonamchophel', 'Whaddup!', '2017-04-28 11:51:17', 1),
(39, 'sonamchophel', 'sebinbabu', 'ewer', '2017-04-28 13:03:17', 1),
(40, 'sebinbabu', 'sonamchophel', 'Hello', '2017-04-28 13:17:09', 1),
(41, 'sebinbabu', 'sebinbabu', 'hi', '2017-04-28 13:59:50', 1),
(42, 'sebinbabu', 'sonamchophel', 'Hellio', '2017-04-28 15:32:52', 0),
(43, 'sebinbabu', 'sonamchophel', 'Hello!4', '2017-04-28 15:37:37', 0),
(44, 'sebinbabu', 'sonamchophel', 'H', '2017-04-28 21:32:01', 0),
(45, 'babusebastian', 'sebinbabu', 'mds,m,,', '2017-06-06 19:35:14', 1),
(46, 'babusebastian', 'sebinbabu', '32320', '2017-06-06 19:35:25', 1),
(47, 'babusebastian', 'sebinbabu', 'Hello', '2017-06-06 19:48:48', 1),
(48, 'sebinbabu', 'sonamchophel', 'hbyseyuf', '2017-09-03 19:25:07', 0),
(49, 'sebinbabu', 'sonamchophel', 'fsjehdbh', '2017-09-03 19:25:08', 0),
(50, 'sebinbabu', 'sonamchophel', 'kjdjha', '2017-09-03 19:25:09', 0),
(51, 'bb', 'bb', 'hello', '2017-09-03 19:39:53', 1),
(52, 'bb', 'bb', 'hello', '2017-09-03 19:40:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `rid` int(11) NOT NULL,
  `rname` varchar(64) NOT NULL,
  `description` varchar(512) NOT NULL,
  `published` int(4) NOT NULL,
  `category` varchar(64) NOT NULL,
  `type` int(2) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `uploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(128) NOT NULL,
  `author` varchar(81) NOT NULL,
  `isActive` int(1) NOT NULL DEFAULT '0',
  `isFeatured` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`rid`, `rname`, `description`, `published`, `category`, `type`, `uid`, `uploaded`, `location`, `author`, `isActive`, `isFeatured`) VALUES
(1, 'Discrete Mathematics', 'Discrete Mathematics Book\r\n', 1999, 'Maths', 1, 0, '2017-04-27 17:27:29', 'dmbookmaths3.pdf', 'L. Lovasz, K Vesztergombi\r\n', 1, 0),
(2, 'Discrete Mathematics', 'Discrete Mathematics Book', 2007, 'Mathematics', 1, 0, '2017-04-27 17:41:21', 'DSm4.pdf', 'Seymour Lipschutz', 1, 1),
(3, 'Engineering Physics', 'Engineering Physics Book', 2011, 'Physics', 1, 0, '2017-04-27 17:41:21', 'EngineeringPhysicsSem-1&2.pdf', 'Dr. K. Sivakumar', 1, 1),
(4, 'Engineering Physics\r\n', 'Engineering Physics Book\r\n', 2010, 'Physics', 1, 0, '2017-04-27 17:51:56', 'PhysiqueEN.pdf', 'Perumal Pillai ', 1, 0),
(5, 'Advanced Engineering Mathematics', 'This book was set in Times Roman. The book was composed by PreMedia Global, and printed and bound by RR Donnelley & Sons Company, Jefferson City, MO. The cover was printed by RR Donnelley & Sons Company, Jefferson City, MO. \r\n', 2011, 'Mathematics', 1, 0, '2017-04-27 17:51:56', 'AdvancedEngineeringMathematics10thEdition2.pdf', 'Erwin Kreyszig', 1, 1),
(6, 'Engineering Chemistry\r\n', 'Chemistry is the back bone in designing and understanding the nature of various engineering materials. Many advances in engineering and technology either produce a chemical demand like polymers, chemical developments for their application in powder metallurgy and alloys, preventing methods of pollution etc. ', 2011, 'Chemistry', 1, 0, '2017-04-27 18:17:36', 'EngineeringChemistry.pdf', 'Thiru K. Subramanian ', 1, 0),
(7, 'Introduction to Algorithms', 'This book is one of a series of texts written by faculty of the Electrical Engineering and Computer Science Department at the Massachusetts Institute of Technology. It was edited and produced by The MIT Press under a joint production-distribution agreement with the McGraw-Hill Book Company', 2001, 'Computer Science', 1, 0, '2017-04-27 18:48:18', 'introductiontoalgorythm.pdf', 'Thomas H. Cormen ', 1, 0),
(8, 'The Art of Computer Programming ', 'The Art of Computer Programming', 2012, 'Computer Science', 1, 0, '2017-04-27 18:53:38', 'The_Art_of_Computer_Programming - Vol1.pdf', '', 1, 0),
(9, 'Introduction to Theory of Computation', 'This is a free textbook for an undergraduate course on the Theory of Computation, which we have been teaching at Carleton University since 2002', 2011, 'Computer Science', 1, 0, '2017-04-27 18:58:32', 'TheoryOfComputation.pdf', 'Anil Maheshwari, Michiel Smid\r\n', 1, 1),
(10, 'Engineering Graphics Basics\r\n', 'Engineering Graphics Basics Book', 2013, 'Engineering Graphics', 1, 0, '2017-04-27 19:07:11', '2012-ws-graphichandout1.pdf', 'Tshering Tobgyel', 1, 0),
(15, 'The C Programming Language', 'rr', 2000, 'Computer Science', 1, 7, '2017-04-28 15:32:06', 'The_C_Programming_Language.pdf', 'r43', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessioninfo`
--

CREATE TABLE `sessioninfo` (
  `uid` int(11) NOT NULL,
  `login` datetime NOT NULL,
  `active` datetime NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(11) NOT NULL,
  `fname` varchar(81) NOT NULL,
  `lname` varchar(81) NOT NULL,
  `uname` varchar(21) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(21) NOT NULL,
  `doj` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  `collegeId` int(10) NOT NULL,
  `collegeName` int(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `year` int(1) NOT NULL,
  `branch` int(1) NOT NULL,
  `dob` date NOT NULL,
  `about` varchar(512) NOT NULL,
  `gender` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `fname`, `lname`, `uname`, `email`, `password`, `doj`, `status`, `collegeId`, `collegeName`, `phone`, `year`, `branch`, `dob`, `about`, `gender`) VALUES
(8, 'Sonam', 'Chophel', 'sonamchophel', 'sonamax809@gmail.com', '00000000', '2017-04-22 11:05:29', 1, 1611981429, 1, '8352865867', 1, 0, '1998-12-08', 'I love Coding!', 1),
(7, 'Sebin', 'Babu', 'sebinbabu', 'sebin1998@gmail.com', '00000000', '2017-04-22 10:58:41', 1, 1611981345, 1, '9451998421', 1, 0, '1998-06-14', 'Obsessive Compulsive Gearhead', 1),
(9, 'Saurabh', 'Singh', 'saurabhsingh', 'saurabh@gmail.com', '00000000', '2017-04-22 11:26:12', 1, 1611981343, 1, '9451999999', 1, 0, '1998-12-08', 'Something', 1),
(10, 'Birendra', 'Bhujel', 'bb', 'bb@gmail.com', '00000000', '2017-04-22 12:33:30', 1, 1611981427, 1, '9999999999', 1, 0, '1998-12-08', 'LOL', 1),
(11, 'Saikat', 'Choudhury', 'saikat', 'saikatchoudhury1998@gmail.com', '00000000', '2017-04-22 15:24:47', 1, 1611981329, 1, '9531621070', 1, 0, '1998-12-03', 'Dope!', 1),
(12, 'Saurabh', 'Singh', 'babusebastian', 'demo@demo.lk', '00000000', '2017-04-22 22:51:00', 1, 1611981341, 1, '9999999991', 1, 0, '1998-12-08', '8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `sessioninfo`
--
ALTER TABLE `sessioninfo`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `collegeId` (`collegeId`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
