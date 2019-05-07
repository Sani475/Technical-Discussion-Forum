-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 08:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(255) NOT NULL,
  `q_id` int(255) NOT NULL,
  `q_reply` text COLLATE utf8_bin NOT NULL,
  `replier_name` varchar(55) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `q_id`, `q_reply`, `replier_name`) VALUES
(1, 2, 'In the star topology there is a centralized hub. The communication between various nodes through the hub.\r\nIn this type of network there is a bottleneck of the centralized hub.It is widely used in LAN connection.', 'Sani'),
(2, 1, 'Simple just using the connectivity query.', 'Sani'),
(3, 1, 'Create a form on the appropriate page including the â€œactionâ€ and â€œmethodâ€ attributes in the form definition tag as follows: <form action=â€info.phpâ€ method=â€postâ€>', 'Nur'),
(4, 4, 'In computer science, a thread of execution is the smallest sequence of programmed instructions that can be managed independently by a scheduler, which is typically a part of the operating system.', 'Nur'),
(5, 5, 'In Windows 7, open the Control Panel, click Appearance and Personalization, and then select Preview, delete, or show and hide fonts.', 'Dipu');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Rana', 'rana@gmail.com', 'Greetings', 'Hello guys, good work. keep it up....'),
(2, 'Nayem', 'nayem@gmail.com', 'Hello', 'Good Work, want to meet you guys soon!!');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `q_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `q_id`) VALUES
(4, 1, 4),
(2, 2, 2),
(3, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ping`
--

CREATE TABLE `ping` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `q_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ping`
--

INSERT INTO `ping` (`id`, `user_id`, `q_id`) VALUES
(1, 2, 1),
(2, 3, 5),
(3, 1, 5),
(5, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `q_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `q_desc` text COLLATE utf8_bin NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `user_id`, `q_title`, `q_desc`, `view`) VALUES
(1, 1, 'Connectivity', 'how to connect form with database?', 5),
(2, 1, 'STAR topology', 'how connection established in the star topology?', 4),
(3, 2, 'Thread life cycle', 'What are the different stages of thread life cycle?', 0),
(4, 2, 'Thread ', 'explain the  various stages of thread?', 4),
(5, 3, 'Window 7', 'how to make uninstall set up?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Dipu', 'sdipu4444@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4'),
(2, 'Sani', 'soursani475@gmail.com', '301bd17344eb5f9bc51f15c6cb91ae5b'),
(3, 'Nur', 'nur862@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(4, 'Soman', 'soman@gmail.com', '698d51a19d8a121ce581499d7b701668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ping`
--
ALTER TABLE `ping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ping`
--
ALTER TABLE `ping`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
