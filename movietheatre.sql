-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2024 at 06:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movietheatre`
--
CREATE DATABASE IF NOT EXISTS `movietheatre` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `movietheatre`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL DEFAULT 1,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password_hash`) VALUES
(1, 'Admin', 'admin@email.com', '$2y$10$MsCHBzNjxAYz//fk8NwwgejQDX8VtWEfN2LNm4HjHaCExH4Eac7bi'),
(1, 'Admin2', 'admin2@email.com', '$2y$10$HHBbEy.LoSMGzR4pirV6au1k/ZR.t7qTLaneOmvTYGbaflkCu536e');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `length` int(11) NOT NULL,
  `director` varchar(50) NOT NULL,
  `trailer` varchar(500) NOT NULL,
  `release_date` date NOT NULL,
  `ticket_revenue` double NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `title`, `image`, `description`, `length`, `director`, `trailer`, `release_date`, `ticket_revenue`, `status`) VALUES
(4, 'Monkey Man', 'https://upload.wikimedia.org/wikipedia/en/2/2b/Monkey_Man_film.jpg', 'Oscar® nominee Dev Patel (Lion, Slumdog Millionaire) achieves an astonishing, tour-de-force feature directing debut with an action', 122, 'Dev Patel', 'https://www.youtube.com/watch?v=g8zxiB5Qhsc', '2024-04-22', 0, 1),
(18, 'Abigail', 'https://upload.wikimedia.org/wikipedia/en/b/bc/Abigail_Official_Poster.jpg', 'A group of would-be criminals kidnaps the 12-year-old daughter of a powerful underworld figure. Holding her for ransom in an isolated mansion, their plan starts to unravel when they discover their young captive is actually a bloodthirsty vampire.', 109, 'Matt Bettinelli-Olpin', 'https://www.youtube.com/watch?v=3PsP8MFH8p0', '2024-04-22', 0, 1),
(19, 'Spy X Family Code: White', 'https://upload.wikimedia.org/wikipedia/en/a/ad/Spy_%C3%97_Family_Code_White_movie_poster.png', 'A spy and an assassin keep their double lives to themselves while pretending to be the perfect family.', 111, 'Takashi Katagiri', 'https://www.youtube.com/watch?v=m5TxWbtQ7qU', '2024-04-22', 0, 1),
(20, 'The Fall Guy', 'https://upload.wikimedia.org/wikipedia/en/1/1f/The_Fall_Guy_%282024%29_poster.jpg', 'After leaving the business one year earlier, battle-scarred stuntman Colt Seavers springs back into action when the star of a big studio movie suddenly disappears. As the mystery surrounding the missing actor deepens, Colt soon finds himself ensnared in a sinister plot that pushes him to the edge of a fall more dangerous than any stunt.', 127, 'David Leitch', 'https://www.youtube.com/watch?v=EySdVK0NK1Y', '2024-04-22', 0, 1),
(21, 'Challengers', 'https://upload.wikimedia.org/wikipedia/en/b/b4/Challengers_2024_poster.jpeg', 'Tashi, a tennis player turned coach, has transformed her husband from a mediocre player into a world-famous grand slam champion. To jolt him out of his recent losing streak, she makes him play a challenger event -- close to the lowest level of tournament on the pro tour. Tensions soon run high when he finds himself standing across the net from the once-promising, now burnt-out Patrick, his former best friend and Tashi\'s former boyfriend.', 131, 'Luca Guadagnino', 'https://www.youtube.com/watch?v=-2N3hmRmwHQ', '2024-04-22', 0, 1),
(22, 'Civil War', 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0d/Civil_War_2024_film_poster.jpeg/220px-Civil_War_2024_film_poster.jpeg', 'In a dystopian future America, a team of military-embedded journalists races against time to reach Washington, D.C., before rebel factions descend upon the White House.', 109, 'Alex Garland', 'https://www.youtube.com/watch?v=aDyQxtg0V2w', '2024-04-22', 0, 1),
(23, 'Unsung Hero', 'https://upload.wikimedia.org/wikipedia/en/c/c4/Unsung_Hero_poster.jpg', 'David Smallbone, his pregnant wife and their seven children leave Australia to rebuild their lives in America. David and Helen realize the musical talent of their children, who become two of the most successful acts in Inspirational Music history.', 112, 'Joel Smallbone and Richard Ramsey', 'https://www.youtube.com/watch?v=UHyrHRNX9Rk', '2024-04-22', 0, 1),
(24, 'Dune: Part Two', 'https://upload.wikimedia.org/wikipedia/en/5/52/Dune_Part_Two_poster.jpeg', 'Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the universe, he must prevent a terrible future only he can foresee.', 166, 'Denis Villeneuve', 'https://www.youtube.com/watch?v=Way9Dexny3w', '2024-04-22', 0, 1),
(25, 'Irena\'s Vow', 'https://m.media-amazon.com/images/M/MV5BZjkyMmY4YTAtZGFjMS00ZTk3LWIzYTEtODk2OWYzY2Y0ZDY4XkEyXkFqcGdeQXVyNDExMzMxNjE@._V1_.jpg', 'Caught in a German roundup to be used as a slave labourer, Polish nurse Irena Gut becomes a German army major\'s housekeeper during World War II. Irena risks her life to conceal a dozen Jews within the major\'s home.', 121, 'Louise Archambault', 'https://www.youtube.com/watch?v=yy7SM6TN4pw', '2024-04-22', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_genre`
--

DROP TABLE IF EXISTS `movie_genre`;
CREATE TABLE `movie_genre` (
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie_schedule`
--

DROP TABLE IF EXISTS `movie_schedule`;
CREATE TABLE `movie_schedule` (
  `schedule_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `time_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_schedule`
--

INSERT INTO `movie_schedule` (`schedule_id`, `movie_id`, `day`, `time_id`) VALUES
(4, 4, 'Wednesday', 7),
(7, 4, 'Tuesday', 3),
(8, 18, 'Monday', 2),
(9, 18, 'Monday', 5),
(10, 18, 'Wednesday', 7),
(11, 18, 'Friday', 5),
(12, 19, 'Thursday', 6),
(13, 19, 'Monday', 2),
(14, 19, 'Friday', 3),
(15, 20, 'Tuesday', 3),
(16, 21, 'Wednesday', 5),
(17, 22, 'Friday', 4),
(18, 23, 'Monday', 3),
(19, 24, 'Tuesday', 5),
(20, 25, 'Monday', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` double NOT NULL,
  `number_tickets` int(11) NOT NULL,
  `order_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `review_text` varchar(500) NOT NULL,
  `review_date` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

DROP TABLE IF EXISTS `seat`;
CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `movie_day` date NOT NULL,
  `movie_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

DROP TABLE IF EXISTS `times`;
CREATE TABLE `times` (
  `time_id` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`time_id`, `time`) VALUES
(1, '01:00:00'),
(2, '03:20:00'),
(3, '06:30:00'),
(4, '07:05:00'),
(5, '08:20:00'),
(6, '09:15:00'),
(7, '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password_hash`, `is_admin`) VALUES
(1, 'John', 'john@email.com', '$2y$10$UMiR4aGebyAxFRdzDKFIj.hcGsk93IPZf9eDSXQr7BOP61x16FXy.', 0),
(2, 'Admin', 'admin@email.com', '$2y$10$FIKrGIYkZ9eHrJCkPlCFwu1mXTOSfn4AgmyGdc8Vax9pF/vElTxsS', 1),
(4, 'Melissa', 'melissa@email.com', '$2y$10$.KUKTJksSpu336HBAx3xkOWgc8/87/9cR6hNU.A/C7EJSiMCUdp4K', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `movie_schedule`
--
ALTER TABLE `movie_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `time_id` (`time_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `seat_id` (`seat_id`),
  ADD KEY `movie_day` (`movie_day`),
  ADD KEY `movie_time` (`movie_time`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `movie_schedule`
--
ALTER TABLE `movie_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD CONSTRAINT `movie_genre_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_genre_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `movie_schedule`
--
ALTER TABLE `movie_schedule`
  ADD CONSTRAINT `movie_schedule_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_schedule_ibfk_2` FOREIGN KEY (`time_id`) REFERENCES `times` (`time_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
