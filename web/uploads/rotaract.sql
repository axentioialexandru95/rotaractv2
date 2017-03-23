-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2017 at 09:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotaract`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `surname`, `position`, `image`, `CV`) VALUES
(2, 'HEy', 'hey', 'advanced', 'uploads/HEy.jpeg', 'hey'),
(3, 'Amigo', 'Amigos', 'teacher', 'uploads/Amigo.jpeg', 'e oky'),
(4, 'Adsareq', 'asdswq', 'weqewq', 'uploads/Adsareq.jpeg', 'area'),
(5, '32131412', '431431', '4321321', 'uploads/32131412.jpeg', 'sdasa'),
(6, '431431431', '341413', '413143143', 'uploads/431431431.jpeg', '3451431'),
(7, '431431413', '13414314', '3134413', 'uploads/431431413.jpeg', '431431'),
(8, 'Kthulu', 'Rao', 'God', 'uploads/Kthulu.jpeg', 'the ged'),
(9, 'Parpalac ', 'Daniel', 'GEEK', 'uploads/Parpalac .jpeg', '2133213');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','future','done') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `date`, `image`, `body`, `status`) VALUES
(9, 'Test', '1994-10-14', 'uploads/Test.jpeg', 'test', 'done'),
(10, 'teste213', '1994-10-14', 'uploads/teste213.jpeg', 'teste', 'done'),
(11, 'teste213', '1994-10-14', 'uploads/teste213.jpeg', 'teste', 'future'),
(12, 'teste21332', '1994-10-14', 'uploads/teste21332.png', 'teste213', 'active'),
(13, 'Testing another project', '0000-00-00', 'uploads/Testing another project.jpeg', 'heyhey', 'active'),
(14, 'Testing another project', '0000-00-00', 'uploads/Testing another project.jpeg', 'aloha', 'active'),
(15, 'project213', '0000-00-00', 'uploads/project213.jpeg', 'Text of the project', 'done'),
(16, 'Testes', '0000-00-00', 'uploads/Testes.jpeg', '421321', 'done'),
(17, 'Reunim Romania', '2017-10-10', 'uploads/Reunim Romania.jpeg', 'Prism lumbersexual listicle woke enamel pin. Letterpress authentic hashtag, affogato jean shorts bitters gochujang shabby chic. Before they sold out mumblecore sustainable prism tumeric kickstarter. Kitsch raclette plaid art party meh hashtag. Post-ironic neutra 90\'s DIY sustainable, viral trust fund franzen mumblecore biodiesel thundercats meditation iPhone farm-to-table copper mug. Pickled cornhole stumptown church-key, readymade blue bottle mumblecore biodiesel. Pug blog roof party, organic kogi lo-fi next level ennui cold-pressed church-key four loko.', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
