-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2020 at 02:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Riyadh_Season`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  `pageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`, `pageid`) VALUES
(4, 'reem', '2019-12-03 20:08:16', 'hello', 1),
(9, 'reem', '2019-12-03 21:34:06', 'comment from page 1', 1),
(10, 'reem', '2019-12-03 21:34:40', 'comment from page  2', 2),
(11, 'reem', '2019-12-03 21:35:01', 'comment from page 3', 3),
(12, 'reem', '2019-12-03 21:35:19', 'comment from page 4', 4),
(13, 'reem', '2019-12-03 21:35:48', 'comment from page 5', 5),
(14, 'reem', '2019-12-03 21:39:31', 'comment from page 6', 6),
(15, 'reem', '2019-12-04 08:30:41', 'test', 3),
(18, 'mary', '2019-12-04 08:48:53', 'fun', 4),
(19, 'mary', '2019-12-04 08:50:39', 'nice', 1),
(20, 'mary', '2019-12-04 08:52:57', 'hello', 5),
(21, 'mary', '2019-12-04 08:53:23', 'hello', 2),
(22, 'mary', '2019-12-04 08:59:31', 'so beautiful ', 1),
(27, 'reem', '2019-12-04 09:45:10', 'I visited intersting events in Riyadh.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `username` varchar(30) NOT NULL,
  `u_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `u_password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`username`, `u_name`, `email`, `u_password`) VALUES
('mary', 'mary', 'mary@gmail.com', 'mary123.'),
('r', 'r', 'r@g.com', '1'),
('reem', 'reem', 'ree13@gmail.com', 'reem123.'),
('ri3m', 'reem', 'r@g.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `fk_uid` (`uid`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`uid`) REFERENCES `Users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
