-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 09:14 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_nr` int(11) NOT NULL,
  `CUI` int(11) NOT NULL,
  `company_representative` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representative_function` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` int(11) NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `company_name`, `company_address`, `company_nr`, `CUI`, `company_representative`, `representative_function`, `payment`, `company_email`) VALUES
(1, 'Alexander', 'axaslkdjsa', 32121, 23112, 'Alex', 'CEO', 21321321, 'axentioialexandru95@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Gabi', 'gabrieldornianu@yahoo.com', 'Stuff', 'AWDAWDWADAWD'),
(48, 'Iulian', 'pimpim@pimpim.com', 'mau', 'AUUUUUUUUUUUUUUUUUUUUF'),
(49, 'Iulian', 'pimpim@pimpim.com', 'mau', 'auuuuuuuuuuuuuuuf'),
(50, 'Gabi', 'pimpim@pimpim.com', 'awdawd', '12903123231'),
(51, 'Iulian', 'pimpim@pimpim.com', 'mau', 'AUUUUUUUUUF'),
(52, 'Iulian', 'pimpim@pimpim.com', 'mau', 'I AM A SCUMBAG'),
(53, 'Test', 'gabrieldornianu@yahoo.com', '123901230912381230', 'If you see this message you are screwed'),
(0, 'Alexander', 'axentioialexandru95@gmail.com', '0751683911', '321321312');

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
(11, 'Axentioi ', 'Alexandru', 'member', 'uploads/Axentioi .jpeg', 'dasda');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1489568308),
('m170315_085348_rotaractv2', 1489568311),
('m170315_090345_users', 1489568647);

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
(13, 'Testing another project', '0000-00-00', 'uploads/Testing another project.jpeg', 'heyhey', 'active'),
(14, 'Testing another project', '0000-00-00', 'uploads/Testing another project.jpeg', 'aloha', 'active'),
(15, 'project213', '0000-00-00', 'uploads/project213.jpeg', 'Text of the project', 'done'),
(16, 'Testes', '0000-00-00', 'uploads/Testes.jpeg', '421321', 'done'),
(17, 'Reunim Romania', '2017-10-10', 'uploads/Reunim Romania.jpeg', 'Prism lumbersexual listicle woke enamel pin. Letterpress authentic hashtag, affogato jean shorts bitters gochujang shabby chic. Before they sold out mumblecore sustainable prism tumeric kickstarter. Kitsch raclette plaid art party meh hashtag. Post-ironic neutra 90\'s DIY sustainable, viral trust fund franzen mumblecore biodiesel thundercats meditation iPhone farm-to-table copper mug. Pickled cornhole stumptown church-key, readymade blue bottle mumblecore biodiesel. Pug blog roof party, organic kogi lo-fi next level ennui cold-pressed church-key four loko.', 'active'),
(18, 'test', '1994-10-14', 'uploads/test.jpeg', 'etstest', 'active'),
(19, 'adssad', '0000-00-00', 'uploads/adssad.jpg', 'sxadasdag342 2', 'active'),
(20, 'dsa', '2017-10-23', 'uploads/dsa.jpeg', 'ew21', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
