-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2024 at 02:29 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmci`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `name`) VALUES
(1, 'admin', '$2y$10$IIRit1a9NSWy0I6QBG4fW.w0aF2yqLyFrK6DgDxPIF8vn7gsrcykS', 'asdasdasd@adasd.casc', 'jlkjlkjlkj'),
(2, '$username', '$2y$10$2h6kZnSjT5fYOTitENu5Yus4KhbT/QszZSqhF59wu7pXjPmBppRje', '$email', '$name'),
(3, 'admin3', '$2y$10$Za237JDQhkMWGJ0YNYxJFOa9suqLwtMCshTmLhP6iFEBhTbWbSoti', 'admin@gmail.com', 'gagagasfafasf'),
(4, 'admin5', '$2y$10$h8bkXs0UMW5rkmgr17Jveu.gYzKUQQykVpCvmFDJsuyOCUfzmMSiu', 'admin5@gmail.com', 'name'),
(5, 'admin11', '$2y$10$Q/hqgxRPMc4mS6qs3P9E.uYnVtDYOYy6osI/adk9Vb9P5/hFD7qfO', 'admin11@gmail.com', 'name'),
(6, 'asdasdasd', '$2y$10$y.afAYcjq8m99FBucnr.A.M4L9oRC776eIHA5F29wlxWFkmM/Lo5C', 'asdasd@asd.c', 'asdasd'),
(7, 'adminadmin', '$2y$10$iMoaOv4zDm/dYer6rJ.JLe/TbaB5OoiXhOPFYy6lG3xzBivqY/tUW', 'ads@gmail.com', 'Jet Sebastian');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE IF NOT EXISTS `enrollment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `bday` date NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_school` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_sy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` int NOT NULL,
  `psa` int NOT NULL,
  `good_moral` int NOT NULL,
  `card` int NOT NULL,
  `ecd` int NOT NULL,
  `fee` int NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

DROP TABLE IF EXISTS `holiday`;
CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int NOT NULL AUTO_INCREMENT,
  `holiday_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `holiday_name`, `holiday_date`) VALUES
(1, 'New Year\'s Day', '2024-01-01'),
(2, 'EDSA Revolution Anniversary', '2024-02-25'),
(3, 'Araw ng Kagitingan', '2024-04-08'),
(4, 'Labor Day', '2024-05-01'),
(5, 'Araw ng Kalayaan', '2024-06-12'),
(6, 'Ninoy Aquino Day', '2024-08-21'),
(7, 'All Saints\' Day', '2024-11-01'),
(8, 'All Souls Day', '2024-11-02'),
(9, 'Bonifacio Day', '2024-11-30'),
(10, 'Feast of the Immaculate Conception of the Blessed Virgin Mary', '2024-12-08'),
(11, 'Christmas Eve', '2024-12-24'),
(12, 'Christmas Day', '2024-12-25'),
(13, 'Rizal Day', '2024-12-30'),
(14, 'New Year\'s Eve', '2024-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `reg_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image_path`, `title`, `description`, `reg_date`) VALUES
(1, 'newspics/1.jpg', 'PMCI\'s Student Awardees of Malabon Private Schools Athletic Association (MalPriSAA) Competitions', 'In the Kyorugi Taekwondo event, Sean Camello showcased his exceptional skills and secured a well-deserved silver medal. We extend our heartfelt congratulations to Sean and express our gratitude to Ma\'am Lyne, his supportive coach who guided him throughout the journey. \r\nWe also want to acknowledge Ali Marcial Yao and Anthony Paul Yao for their brilliant performance in the Chess competition, where they demonstrated their strategic minds and earned silver medals. Kudos to Ma\'am Raquel for her guidance and support.\r\nLastly, we celebrate Smith O. Yao\'s outstanding achievements in the Table Tennis competition, where he claimed a gold medal at MalPriSAA and a silver medal at the Division Meet. Our sincere thanks go to Ma\'am Jacil Maris for her unwavering support.\r\nCongratulations to all the students of Philippine Malabon Cultural Institute for their hard work and dedication in these competitions!\r\n', '2024-01-11 00:00:00'),
(2, 'newspics/2.jpg', 'Philippine Malabon Cultural Institute Chinese New Year Mall Show: A Journey to a shared Future', 'Saturday, 11th of February, Philippine Malabon Cultural Institute (PMCI) together with the City Government of Malabon, Malabon Chamber of Commerce and Industry, Inc., PMCI Alumni Association, and Rotary Club of Malabon East presented its 2023 Chinese New Year Mall Show: A JOURNEY TO A SHARED FUTURE.\r\nThe program held at Malabon Citisquare (4th floor Entertainment Hall) on February 11, 4:00-6:00PM.\r\n', '2024-02-11 00:00:00'),
(3, 'newspics/3.jpg', 'Chinese New Year celebration of Malabon Chamber of Commerce and Industry and Philippine Malabon Cultural Institute', ' Saturday, 17th of February, Philippine Malabon Cultural Institute (PMCI) celebrates the Chinese New Year together with Malabon Chamber of Commerce and Mayor Jeannie Sandoval.', '2024-02-17 00:00:00'),
(4, 'newspics/4.png', 'Thinking Day of Girls Scout of the Philippines (GSP)', 'Friday, 23rd of February, We are celebrating a significant event that took place at the Philippine Malabon Cultural Institute for the Girl Scout of the Philippines.\r\nThinking Day commemorates the joint birthdays of the founder of Scouting Movement, Lord and Lady Baden Powell, symbolizing the unity of spirit of members of the World Family of Scouting, a day for \"thinking of each other and for circling the world with a chain of warm, friendly thoughts\"\r\n', '2024-02-23 00:00:00'),
(5, 'newspics/5.png', 'Grammar, History and Literature (GraHistoLit) Quiz Bee', 'Monday, 26th of February, students Hannah Sophia Espina of Grade 10, Khrys Jairuz Lim of Grade 9, Anthony Paul Yao of Grade 6 and Jericho Baello of Grade 5 represented PMCI in the Grammar, History and Literature (GraHistoLit) Quiz Bee held at Our Lady of Fatima University Valenzuela Campus.\r\nOut of 9 schools that competed in the JHS category, our delegates for Grades 9–10 bagged 5th place! and out of 11 in the Elementary category we finished 6th!\r\nWe are so proud of you, PMCIans!\r\nHands up also to their trainers for their unceasing support during the training. Thank you so much, Sir Gil Gellangala Jr. and Ma’am Syvel Calimbo and to the very supportive Chief Academic Officer, Ms. Jacil Maris Luma-as.\r\n', '2024-02-26 00:00:00'),
(6, 'newspics/6.jpg', '1st Malabon Filipino-Chinese Cultural Festival', 'The first Malabon Filipino-Chinese Cultural Festival, held this Thursday at C4 Road Barangay Longos infront of Malabon City Square, was a success. This is a cooperation with the Malabon City Government, the Malabon Chamber of Commerce and Industry Inc. (MCCII), and the Philippine Malabon Cultural Institute. \r\n\r\nIn this celebration, students from the Philippine Malabon Cultural Institute presented dance and song performances. There are also various activities that feature the culture of Filipinos and Chinese such as the Lion Dance and a dance piece that shows the friendship between Filipinos and Chinese. The Filipino-Chinese Friendship Arch was also launched during this celebration.\r\n\r\nMayor Jeannie Sandoval praised everyone who took part and came. According to the mayor, he wants to strengthen the local government and organizations so that Malabon\'s culture and tourism can thrive.\r\n', '2024-02-29 00:00:00'),
(7, 'newspics/7.jpg', 'Federation of Filipino-Chinese Chamber of Commerce and Industry, Inc. 70th Anniversary', 'On March 9, the Federation of Filipino Chinese Chamber of Commerce and Industry, Inc. (FFCCCII) President Cecilio Pedro led the celebration of the organization\'s 70th anniversary at the SMX Convention Center. Malabon Chamber of Commerce and Industry, Inc. 嗎拉汶商會 officers and members were invited, led by President Benjamin Chua, to witness the celebration.\r\nFirst Lady Liza Marcos, Former President Gloria Macapagal Arroyo, Department of Trade and Industry Secretary Alfredo Pascual, Senator Cynthia Villar, Senator JV Ejercito, Senator Win Gatchalian, Mayor Jeannie Sandoval, and other government officials were also present during the occasion.\r\n', '2024-03-09 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
