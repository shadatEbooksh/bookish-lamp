-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 08:55 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--
CREATE DATABASE IF NOT EXISTS `sms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `name`, `email`, `password`, `phone`, `phone2`, `address`, `address2`, `city`, `photo`, `dates`) VALUES
(1, 'Sadik', 'MD SOUAT SADI KHAN', 'sadik.cse15@gmail.com', '000sk000', '+8801703960157', '+8801880756157', 'Khalishpur, Dashuria-6620 , Ishwardi, Pabna', '', 'Noagon', '25_06_2019_10_35_21_images.jpeg', '25-June-2019');

-- --------------------------------------------------------

--
-- Table structure for table `cgpa`
--

CREATE TABLE `cgpa` (
  `id` int(11) NOT NULL,
  `iroll` varchar(255) NOT NULL,
  `broll` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `third` varchar(255) NOT NULL,
  `fourth` varchar(255) NOT NULL,
  `fifth` varchar(255) NOT NULL,
  `six` varchar(255) NOT NULL,
  `seven` varchar(255) NOT NULL,
  `eight` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `probidhan` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cgpa`
--

INSERT INTO `cgpa` (`id`, `iroll`, `broll`, `first`, `second`, `third`, `fourth`, `fifth`, `six`, `seven`, `eight`, `total`, `probidhan`, `technology`) VALUES
(16, '50', '286634', '3.68', '2.89', '3.07', '3.5', '3.55', '3.44', '3.3', '3.5', '3.4', '2010', 'Computer'),
(17, '13', '286613', '4', '4', '4', '4', '4', '4', '4', '3', '3.9', '2010', 'Computer'),
(18, '45', '286641', '3', '4', '3', '4', '3', '3', '4', '3', '3.45', '2010', 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `cmsg`
--

CREATE TABLE `cmsg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmsg`
--

INSERT INTO `cmsg` (`id`, `name`, `email`, `subject`, `msg`, `dates`) VALUES
(1, 'ABDUS SALAM CHOWDHURI', '01945878517JANEALOM999', 'Graphics Design  expert', 'ukjkjhkjkhjkhjkhjkhjk', '02-July-2019 01:38 PM'),
(2, 'ABDUS SALAM CHOWDHURI', '01945878517JANEALOM999', 'Graphics Design  expert', 'ukjkjhkjkhjkhjkhjkhjk', '02-July-2019 01:38 PM'),
(3, 'ABDUS SALAM CHOWDHURI', 'sujonsatt@gmail.com', 'fgfgdsg', 'fdgfdgsfdsgfgg', '02-July-2019 01:40 PM'),
(4, 'ABDUS SALAM CHOWDHURI', 'sujonsatt@gmail.com', 'Graphics Design  expert', 'ghjhgjhgjhjhgjhgj', '02-July-2019 01:41 PM'),
(5, 'ABDUS SALAM CHOWDHURI', 'sujonsatt@gmail.com', 'Graphics Design  expert', 'ghjhgjhgjhjhgjhgj', '02-July-2019 01:41 PM'),
(6, 'ABDUS SALAM CHOWDHURI', 'sujonsatt@gmail.com', 'Graphics Design  expert', 'ghjhgjhgjhjhgjhgj', '02-July-2019 01:41 PM'),
(7, 'ABDUS SALAM CHOWDHURI', '01945878517JANEALOM999', 'aa', 'sfewrewrwerewrewre', '02-July-2019 01:42 PM'),
(8, 'ABDUS SALAM CHOWDHURI', 'jellyaniligron@outlook.com', 'Graphics Design  expert', 'hello', '04-July-2019 01:50 AM'),
(9, 'MD ABDUS SALAM CHOWDHURI ', 'jellyaniligron@outlook.com', 'Graphics Design  expert', 'hello', '04-July-2019 01:50 AM');

-- --------------------------------------------------------

--
-- Table structure for table `deparment`
--

CREATE TABLE `deparment` (
  `id` int(11) NOT NULL,
  `ccode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deparment`
--

INSERT INTO `deparment` (`id`, `ccode`, `name`, `tcode`) VALUES
(27, '15', 'Marine', '85'),
(28, '15', 'Ship Buliding', '86'),
(29, '15', 'Power', '87'),
(30, '15', 'Automobile', '88'),
(31, '15', 'Ac &amp; Refregaretion', '&lt;script&gt;alert(1);&lt;/script&gt;'),
(32, '15', 'Computer', '66'),
(33, 'MD SHADAT HOSSAIN', 'Junior Instructor', 'Diploma is CSE');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session`) VALUES
(1, '1011'),
(2, '1112'),
(3, '1213'),
(4, '1314'),
(5, '1415'),
(6, '1516'),
(7, '1617'),
(8, '1718'),
(9, '2010-2011'),
(10, '2011-2012');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `iroll` varchar(255) NOT NULL,
  `ayear` varchar(255) NOT NULL,
  `broll` varchar(255) NOT NULL,
  `rroll` varchar(255) NOT NULL,
  `ccode` varchar(255) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `tcode` varchar(255) NOT NULL,
  `pyear` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gphone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `Industry` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `entry_date` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `phone`, `email`, `iroll`, `ayear`, `broll`, `rroll`, `ccode`, `tname`, `tcode`, `pyear`, `fname`, `mname`, `gname`, `gphone`, `address`, `remarks`, `skill`, `Industry`, `session`, `entry_date`, `semester`, `otp`) VALUES
(55, 'MD SOUAT SADI KHAN SADIK', '1703960157', 'sadik.cse15@gmail.com', '50', '2015', '286634', '107608', '15', 'Computer', '66', '2019', 'MD ABDUR RAZZAK KHAN', 'MST SABIRA PERVIN', 'MD ABDUR RAZZAK KHAN', '1722671725', 'Dashuria, Ishwardi, pabna', 'Good', 'Web Development', 'Satt IT', '1516', '01-January-1970', '8', 'ea30818dd9410d6eab77'),
(56, 'MD SHADAT HOSSAIN', '0188022220', 'shadat@gmail.com', '13', '2015', '286613', '107613', '15', 'Computer', '66', '2019', '', '', '', '', 'Mirosrai, Chottogram', 'Good', '', '', '', '', '', '5d810bae54d1aa83eaf2'),
(57, 'SHEULY AKTER', '1703960157', 'sheuly@gmail.com', '45', '2015', '286641', '107631', '15', 'Computer', '66', '2019', '', '', '', '', 'Hamzarbag, Chattogram', '', '', '', '1516', '01-January-1970', '8', '910486e915c814c7f122');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `position`, `qualification`, `age`, `startdate`, `salary`) VALUES
(146, 'MD SOUAT SADI KHAN SADIK', 'Junior Instructor', 'Diploma in CSE', '20', '01-January-1970', '2500'),
(147, 'MD SHADAT HOSSAIN', 'Junior Instructor', 'Diploma in CSE', '20', '01-January-1970', '2500'),
(148, 'SHEULY AKTER', 'Junior Instructor', 'Diploma is CSE', '19', '01-January-1970', '8000'),
(149, 'MD SAIFUL ISLAM', 'Junior Instructor', 'Diploma is CSE', '20', '01-January-1970', '8000'),
(150, 'MD AFTABUZZAM', 'Junior Instructor', 'Diploma is CSE', '19', '01-January-1970', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `position`, `qualification`, `age`, `startdate`, `salary`, `username`, `password`) VALUES
(10, 'MD SHAHADAT HOSSAIN', 'User', 'Diploma in CSE', '20', '2019-06-01', '5000', 'shadat', '000sk000'),
(11, 'MRS SHEULY AKTER', 'User', 'Diploma in CSE', '20', '2019-06-01', '5000', 'sheuly', '000sk000'),
(12, 'MD SAIFUL ISLAM', 'User', 'Diploma in CSE', '20', '2019-04-01', '5000', 'saiful', '000sk000'),
(13, 'AFTABUZZAMAN TUHIN', 'User', 'Diploma in CSE', '20', '2019-06-01', '5000', 'tuhin', '000sk000');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `uname`, `name`, `phone`, `phone2`, `address`, `address2`, `city`, `photo`, `dates`, `email`) VALUES
(2, 'shadat', 'MD SHAHADAT HOSSAIN', '', '', '', '', '', '', '', ''),
(3, 'sheuly', 'MRS SHEULY AKTER', '01880756157', '018728q9q29', 'Hamzarbag, Chitagong', '', 'Chittagong', '04_07_2019_02_23_49_6.jpg', '04-July-2019', 'sheuly@gmail.com'),
(4, 'saiful', 'MD SAIFUL ISLAM', '', '', '', '', '', '', '', ''),
(5, 'tuhin', 'AFTABUZZAMAN TUHIN', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgpa`
--
ALTER TABLE `cgpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmsg`
--
ALTER TABLE `cmsg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deparment`
--
ALTER TABLE `deparment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cgpa`
--
ALTER TABLE `cgpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cmsg`
--
ALTER TABLE `cmsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `deparment`
--
ALTER TABLE `deparment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
