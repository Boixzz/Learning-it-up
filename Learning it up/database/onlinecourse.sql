-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 11:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Language` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `InstrustorName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Prize` int(11) NOT NULL,
  `CourseType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cimg` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `Language`, `InstrustorName`, `Prize`, `CourseType`, `Cimg`) VALUES
(14, 'How to Build Foundation for Your Brand', 'English', 'ffff ffff', 37000, 'Other', 'co1.jpg'),
(15, 'Sourse Code Management for Beginners', 'Burmese', 'ffff ffff', 50000, 'Programming', 'co2.jpg'),
(16, 'Building Digital Partnership an Ecosystem', 'Japanese', 'ffff ffff', 82000, 'Business', 'co3.jpg'),
(17, 'English language Foundation', 'English', 'ffff ffff', 69500, 'Other', 'download (2).jpg'),
(18, 'Basics of South Indian Kitchen', 'Burmese', 'ffff ffff', 74800, 'Cooking', 'download (3).jpg'),
(19, 'Graphics Design', 'Chinese', 'ffff ffff', 23400, 'Design', 'download (4).jpg'),
(20, 'Advance Maths', 'Spanish', 'ffff ffff', 66700, 'Mathematic', 'download (5).jpg'),
(21, 'Music Production', 'English', 'ffff ffff', 65000, 'Music', 'images (1).jpg'),
(22, 'Basics Photography', 'Burmese', 'ffff ffff', 12000, 'Photography', 'download (6).jpg'),
(23, 'Advance Chemistry', 'Japanese', 'ffff ffff', 75400, 'Science', 'images (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetail`
--

CREATE TABLE `coursedetail` (
  `CourseDetailID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursedetail`
--

INSERT INTO `coursedetail` (`CourseDetailID`, `StudentID`, `CourseID`) VALUES
(1, 16, 23),
(2, 16, 20),
(3, 16, 17),
(4, 2, 19),
(5, 17, 23);

-- --------------------------------------------------------

--
-- Table structure for table `coursefile`
--

CREATE TABLE `coursefile` (
  `CourseFileID` int(11) NOT NULL,
  `File` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CourseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `LanguageID` int(11) NOT NULL,
  `Language` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`LanguageID`, `Language`) VALUES
(1, 'English'),
(2, 'Burmese'),
(3, 'Japanese'),
(4, 'Chinese'),
(5, 'Spanish');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Language` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UserType` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FName`, `LName`, `DOB`, `Email`, `Language`, `Password`, `UserType`) VALUES
(1, '', '', '0000-00-00', '', '', '', ''),
(2, 'Soe Say', 'Linn', '2001-07-02', 'ss@gmail.com', 'English', '123', 'Admin'),
(3, 'Soe Say', 'Linn', '2022-11-01', 'slin63799@gmail.com', 'Myanmer', '752339207', ''),
(4, 'Paing', 'Kyaw', '2017-06-07', 'paing0kyaw8@gmail.com', 'spanish', '780104889', 'Admin'),
(5, '', '', '0000-00-00', '', '', '', ''),
(6, 'apple', 'green', '2022-11-05', 'greena123@gmail.com', 'english', 'eatapple', 'assistant'),
(7, 'asdfgjk', 'sdfghjkl', '2022-11-23', 'aabbccdd@gmail.com', 'English', 'asdfghjkl', 'Instructor'),
(8, 'qq', 'dfg', '0000-00-00', 'sdf', 'asd', '12345', 'asdfg'),
(9, 'asdfghjkl', 'sdfghjkl;', '2022-11-11', 'asdfkkk@gmail.com', 'bla bla', 'bpla', 'dog'),
(10, 'asdfghjk', 'lkjh', '2022-11-17', 'asdfghjk', 'asdfghj', '12345', ',mnbcx'),
(11, 'asdfghjk', 'lkjh', '2022-11-17', 'asdfghjk@gmail.com', 'asdfghj', '12345', ',mnbcx'),
(12, 'sdfghjkl', 'ghjkl', '0344-05-07', 'jkl', 'English', '54321', 'Itudent'),
(13, 'dfghjkl', 'dfghjkl', '2022-11-16', 'sdfghj', 'Burmese', '7890', 'Instructor'),
(14, 'asdf', 'asdf', '2022-11-11', 'asdf', 'English', 'asdf', 'Itudent'),
(15, 'asdf', 'jkl;', '2022-11-04', 'asdf@gmail.com', 'Spanish', '12345', 'Itudent'),
(16, '7777', '7777', '2022-11-24', '7777@gmail.com', 'English', '7777', 'Student'),
(17, 'ffff', 'ffff', '2022-12-01', 'ffff@gmail.com', 'English', 'ffff', 'Instructor'),
(18, 'sdfghjkl', 'sdfghjkl', '2002-07-22', 'fghjk@gmail.com', 'Spanish', '333', 'Instructor'),
(19, 'ddff', 'gghh', '2022-11-08', 'ssdd@gmail.com', 'English', '123', 'Admin'),
(20, 'asdf', 'asdf', '1233-12-31', '1234@gmail.com', 'Non', '12345', 'Admin'),
(21, 'Aung', 'Hein', '1984-10-21', 'aunghein007@gmail.com', 'Burmese', '22222', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `coursedetail`
--
ALTER TABLE `coursedetail`
  ADD PRIMARY KEY (`CourseDetailID`);

--
-- Indexes for table `coursefile`
--
ALTER TABLE `coursefile`
  ADD PRIMARY KEY (`CourseFileID`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`LanguageID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `coursedetail`
--
ALTER TABLE `coursedetail`
  MODIFY `CourseDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coursefile`
--
ALTER TABLE `coursefile`
  MODIFY `CourseFileID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `LanguageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
