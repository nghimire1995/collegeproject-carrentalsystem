-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 10:24 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carental`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('aaaaa', 'adass'),
('nilesh', 'passord'),
('allu', 'adass'),
('samrat', 'basnet'),
('samrat', 'basnet'),
('aaaaa', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CarId` int(11) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `NoOfSeats` int(11) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `Email`, `Password`, `Password2`) VALUES
('', '', 'Nisssa@gmail.com', 'aaaa', ''),
('nilesh', 'Ghimire', 'nghimire@gmail.com', 'password', 'password'),
('', '', 'nghimire@gmail.com', 'password', 'assdada'),
('ram', '', 'nghimire@gmail.com', 'aaaa', ''),
('', '', 'nghimire@gmail.com', 'aadaa', ''),
('', '', 'nghimire@gmail.com', 'aaaaa', 'aa'),
('adadsdd', 'adsd', 'nghimire@gmail.com', 'password', 'asdsd'),
('adadsdd', 'adsd', 'nghimire@gmail.com', 'adsadasda', 'adsad'),
('adadsdd', 'adsd', 'nghimire@gmail.com', 'aadsasa', 'adsadsdas'),
('adadsdd', 'adsda', 'nghimire@gmail.com', 'password', 'aaadssad'),
('adadsdd', 'adsda', 'nghimire@gmail.com', 'aaaa', 'ssss'),
('adadsdd', 'adsda', 'nghimire@gmail.com', 'aaaa', 'ssss'),
('aaaassasa', 'aasddfggf', 'nghimire@gmail.com', 'SsASA', 'SDSFSFGGDGD'),
('aaaassasa', 'aasddfggf', 'nghimire@gmail.com', 'password', 'asdadsa'),
('ritesha', 'adaaaaa', 'nghimire@gmail.com', 'mmmmmm', 'mmmmmm'),
('manisha', 'koirala', 'nghimire@gmail.com', 'kera', 'kefa'),
('manisha', 'koirala', 'nghimire@gmail.com', 'mmmmmm', 'aasasda'),
('raju', 'khan', 'nghimire@gmail.com', 'aaaa', 'aaaa'),
('samrat ', 'psycho', 'halamadrid@gmail.com', 'asdf', 'asdf'),
('anita', 'singh', 'aaaadsd@gmail.com', '12345', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
