-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(11) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`) VALUES
(8, 'November-16-2020 09:43:47', 'php is awesome', 'php', 'Khaled', '117282142_2375042949467988_6944700431240322614_o.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n'),
(9, 'November-16-2020 09:43:57', 'javascript', 'javascript', 'Khaled', '121439122_3313252378770436_6619454570996178877_o.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n'),
(10, 'November-16-2020 22:09:57', 'php is alright', 'css', 'Khaled', 'fsdf.PNG', 'db2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\ndb2 wah software fy 7ga mohma bkra?\r\n\r\n'),
(11, 'November-20-2020 14:02:23', 'awdawd', 'ai', 'dodo', '96424191_2663296990614110_5027275454944378880_o.jpg', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf'),
(12, 'November-20-2020 14:02:36', '11313', 'javascript', 'dodo', '96751988_2447062048730730_1370585486480900096_n.jpg', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf\r\n\r\n'),
(13, 'November-20-2020 14:02:48', '11313', 'ai', 'dodo', '97266825_1569928409852536_2727520072246493184_o.jpg', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf\r\n'),
(14, 'November-20-2020 14:03:02', '11313dads', 'html', 'dodo', '98200391_238638717562419_967473814722052096_n.jpg', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf\r\n\r\n'),
(15, 'November-20-2020 14:03:15', 'ladd', 'ai', 'dodo', '98355883_3176606635737449_7759931397543821312_n.jpg', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf\r\n'),
(16, 'November-20-2020 14:03:38', 'php is wrong', 'php', 'dodo', ',,,.,.PNG', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf\r\n'),
(17, 'November-20-2020 14:03:49', 'ladsdsd', 'html', 'dodo', ',.,..PNG', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf'),
(18, 'November-20-2020 14:04:01', 'lfgflg', 'css', 'dodo', ';\'.PNG', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf\r\n'),
(19, 'November-20-2020 14:05:12', 'php', 'html', 'dodo', ';kl;kl;.PNG', 'sdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsfsdcsddfsdfsdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `creatorname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `datetime`, `name`, `creatorname`) VALUES
(10, 'November-16-2020 09:43:01', 'php', 'Khaled'),
(11, 'November-16-2020 09:43:04', 'javascript', 'Khaled'),
(12, 'November-16-2020 09:43:06', 'html', 'Khaled'),
(14, 'November-19-2020 19:58:15', 'css', 'Khaled'),
(15, 'November-20-2020 13:36:34', 'ai', 'dodo');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approveby` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL,
  `admin_panel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`, `approveby`, `status`, `admin_panel_id`) VALUES
(9, 'November-17-2020 19:32:41', 'Abdelrahman Ahmed', 'sasdad@yahoo.com', 'hi', '', 'ON', 10),
(10, 'November-19-2020 18:11:08', 'Abdelrahman Ahmed', 'sasdad@yahoo.com', 'anyonehere?\r\n', '', 'ON', 10),
(12, 'November-20-2020 13:45:04', 'Abdelrahman Ahmed', 'adawd2@Yahoo.com', 's', 'dodo', 'ON', 10);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(11) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `addedby` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `datetime`, `addedby`, `username`, `password`) VALUES
(2, 'November-19-2020 22:58:26', 'Khaled', 'dodo', 'khaled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_panel_id` (`admin_panel_id`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
