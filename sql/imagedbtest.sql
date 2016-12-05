-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 05 dec 2016 kl 15:51
-- Serverversion: 10.1.10-MariaDB
-- PHP-version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `imagedbtest`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `srcOrg` varchar(255) NOT NULL,
  `srcMini` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `image`
--

INSERT INTO `image` (`image_id`, `srcOrg`, `srcMini`, `text`, `fname`, `lname`) VALUES
(1, 'https://dummyimage.com/1920x1920/000000/fff', 'https://dummyimage.com/480x480/000000/fff', 'text1 - ', 'Donald', 'Duck'),
(2, 'https://dummyimage.com/1920x1920/6b226b/fff', 'https://dummyimage.com/480x480/6b226b/fff', 'text2 - ', 'Donald', 'Duck'),
(3, 'https://dummyimage.com/1920x1920/222869/fff', 'https://dummyimage.com/480x480/222869/fff', 'text3 - ', 'Donald', 'Duck');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
