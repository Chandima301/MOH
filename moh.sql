-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 02:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moh2`
--

-- --------------------------------------------------------

--
-- Table structure for table `babyandteenpreservation`
--

CREATE TABLE `babyandteenpreservation` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `babypreservation`
--

CREATE TABLE `babypreservation` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0,
  `19` int(50) NOT NULL DEFAULT 0,
  `20` int(50) NOT NULL DEFAULT 0,
  `21` int(50) NOT NULL DEFAULT 0,
  `22` int(50) NOT NULL DEFAULT 0,
  `23` int(50) NOT NULL DEFAULT 0,
  `24` int(50) NOT NULL DEFAULT 0,
  `25` int(50) NOT NULL DEFAULT 0,
  `26` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `babypreservation1to5`
--

CREATE TABLE `babypreservation1to5` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0,
  `19` int(50) NOT NULL DEFAULT 0,
  `20` int(50) NOT NULL DEFAULT 0,
  `21` int(50) NOT NULL DEFAULT 0,
  `22` int(50) NOT NULL DEFAULT 0,
  `23` int(50) NOT NULL DEFAULT 0,
  `24` int(50) NOT NULL DEFAULT 0,
  `25` int(50) NOT NULL DEFAULT 0,
  `26` int(50) NOT NULL DEFAULT 0,
  `27` int(50) NOT NULL DEFAULT 0,
  `28` int(50) NOT NULL DEFAULT 0,
  `29` int(50) NOT NULL DEFAULT 0,
  `30` int(50) NOT NULL DEFAULT 0,
  `31` int(50) NOT NULL DEFAULT 0,
  `32` int(50) NOT NULL DEFAULT 0,
  `33` int(50) NOT NULL DEFAULT 0,
  `34` int(50) NOT NULL DEFAULT 0,
  `35` int(50) NOT NULL DEFAULT 0,
  `36` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cliniccare_1`
--

CREATE TABLE `cliniccare_1` (
  `id` int(11) NOT NULL,
  `idcardnum` varchar(15) NOT NULL,
  `type` int(10) NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL,
  `5` text NOT NULL,
  `6` text NOT NULL,
  `7` text NOT NULL,
  `8` text NOT NULL,
  `9` text NOT NULL,
  `10` text NOT NULL,
  `11` text NOT NULL,
  `12` text NOT NULL,
  `13` text NOT NULL,
  `14` text NOT NULL,
  `15` text NOT NULL,
  `16` text NOT NULL,
  `17` text NOT NULL,
  `18` text NOT NULL,
  `19` text NOT NULL,
  `20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliniccare_1`
--

INSERT INTO `cliniccare_1` (`id`, `idcardnum`, `type`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
(30, '944561234V', 0, '34 sadsdas', '34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '944561234V', 1, 'asaasdsad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '944561234V', 2, 'ASas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '944561234V', 3, 'Sasa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '944561234V', 4, 'ASas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '944561234V', 5, 'sdasa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '944561234V', 6, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '944561234V', 7, 'ads', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '944561234V', 8, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '944561234V', 9, 'sda', '', '', '', 'hhfhdfhg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cliniccare_2`
--

CREATE TABLE `cliniccare_2` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL,
  `18` varchar(255) DEFAULT NULL,
  `19` varchar(255) DEFAULT NULL,
  `20` varchar(255) DEFAULT NULL,
  `21` varchar(255) DEFAULT NULL,
  `22` varchar(255) DEFAULT NULL,
  `23` varchar(255) DEFAULT NULL,
  `24` varchar(255) DEFAULT NULL,
  `25` varchar(255) DEFAULT NULL,
  `26` varchar(255) DEFAULT NULL,
  `27` varchar(255) DEFAULT NULL,
  `28` varchar(255) DEFAULT NULL,
  `29` varchar(255) DEFAULT NULL,
  `30` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliniccare_2`
--

INSERT INTO `cliniccare_2` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dailyworkreport`
--

CREATE TABLE `dailyworkreport` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `submit_to_approval` int(1) NOT NULL DEFAULT 0,
  `approved` int(1) NOT NULL DEFAULT 0,
  `දිනය_1` varchar(255) DEFAULT NULL,
  `දිනය_2` varchar(255) DEFAULT NULL,
  `දිනය_3` varchar(255) DEFAULT NULL,
  `දිනය_4` varchar(255) DEFAULT NULL,
  `දිනය_5` varchar(255) DEFAULT NULL,
  `දිනය_6` varchar(255) DEFAULT NULL,
  `දිනය_7` varchar(255) DEFAULT NULL,
  `දිනය_8` varchar(255) DEFAULT NULL,
  `දිනය_9` varchar(255) DEFAULT NULL,
  `දිනය_10` varchar(255) DEFAULT NULL,
  `දිනය_11` varchar(255) DEFAULT NULL,
  `දිනය_12` varchar(255) DEFAULT NULL,
  `දිනය_13` varchar(255) DEFAULT NULL,
  `දිනය_14` varchar(255) DEFAULT NULL,
  `දිනය_15` varchar(255) DEFAULT NULL,
  `දිනය_16` varchar(255) DEFAULT NULL,
  `දිනය_17` varchar(255) DEFAULT NULL,
  `දිනය_18` varchar(255) DEFAULT NULL,
  `දිනය_19` varchar(255) DEFAULT NULL,
  `දිනය_20` varchar(255) DEFAULT NULL,
  `දිනය_21` varchar(255) DEFAULT NULL,
  `දිනය_22` varchar(255) DEFAULT NULL,
  `දිනය_23` varchar(255) DEFAULT NULL,
  `දිනය_24` varchar(255) DEFAULT NULL,
  `දිනය_25` varchar(255) DEFAULT NULL,
  `දිනය_26` varchar(255) DEFAULT NULL,
  `දිනය_27` varchar(255) DEFAULT NULL,
  `දිනය_28` varchar(255) DEFAULT NULL,
  `දිනය_29` varchar(255) DEFAULT NULL,
  `දිනය_30` varchar(255) DEFAULT NULL,
  `දිනය_31` varchar(255) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailyworkreport`
--

INSERT INTO `dailyworkreport` (`id`, `period`, `submit_to_approval`, `approved`, `දිනය_1`, `දිනය_2`, `දිනය_3`, `දිනය_4`, `දිනය_5`, `දිනය_6`, `දිනය_7`, `දිනය_8`, `දිනය_9`, `දිනය_10`, `දිනය_11`, `දිනය_12`, `දිනය_13`, `දිනය_14`, `දිනය_15`, `දිනය_16`, `දිනය_17`, `දිනය_18`, `දිනය_19`, `දිනය_20`, `දිනය_21`, `දිනය_22`, `දිනය_23`, `දිනය_24`, `දිනය_25`, `දිනය_26`, `දිනය_27`, `දිනය_28`, `දිනය_29`, `දිනය_30`, `දිනය_31`, `comments`) VALUES
(0, '2020-07', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(14, '2020-08', 1, 0, '', '', '', '', '', 'nnrrrtgrttkkkkk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'j', '', '', '', '', '', '', '', '', NULL),
(14, '2020-08', 1, 0, '', '', '', '', '', 'nnrrrtgrttkkkkk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'j', '', '', '', '', '', '', '', '', NULL),
(0, '2020-08', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(1, '2020-08', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(14, '2020-08', 1, 0, '', '', '', '', '', 'nnrrrtgrttkkkkk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'j', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emergancyplan`
--

CREATE TABLE `emergancyplan` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergancyplan`
--

INSERT INTO `emergancyplan` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`) VALUES
(13, 'මහ රෝහල', 'කිරිබත්ගොඩ රෝහල', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `familieswkp`
--

CREATE TABLE `familieswkp` (
  `id` int(11) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `period` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `familieswkp`
--

INSERT INTO `familieswkp` (`id`, `1`, `2`, `3`, `4`, `period`) VALUES
(0, 0, 0, 0, 0, '2020-06-5'),
(14, 0, 0, 0, 0, '2020-06-5'),
(14, 5, 11, 10, 2, '2020-06-23'),
(14, 5, 11, 10, 2, '2020-06-23'),
(14, 0, 0, 0, 0, '2020-07-9'),
(14, 1, 0, 0, 0, '2020-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `familyhistory`
--

CREATE TABLE `familyhistory` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `familyhistory`
--

INSERT INTO `familyhistory` (`id`, `1`, `2`, `3`, `4`, `5`, `6`) VALUES
(13, 'සාමාන්&zwj;යයි', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී');

-- --------------------------------------------------------

--
-- Table structure for table `familyplan`
--

CREATE TABLE `familyplan` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0,
  `19` int(50) NOT NULL DEFAULT 0,
  `20` int(50) NOT NULL DEFAULT 0,
  `21` int(50) NOT NULL DEFAULT 0,
  `22` int(50) NOT NULL DEFAULT 0,
  `23` int(50) NOT NULL DEFAULT 0,
  `24` int(50) NOT NULL DEFAULT 0,
  `25` int(50) NOT NULL DEFAULT 0,
  `26` int(50) NOT NULL DEFAULT 0,
  `27` int(50) NOT NULL DEFAULT 0,
  `28` int(50) NOT NULL DEFAULT 0,
  `29` int(50) NOT NULL DEFAULT 0,
  `30` int(50) NOT NULL DEFAULT 0,
  `31` int(50) NOT NULL DEFAULT 0,
  `32` int(50) NOT NULL DEFAULT 0,
  `33` int(50) NOT NULL DEFAULT 0,
  `34` int(50) NOT NULL DEFAULT 0,
  `35` int(50) NOT NULL DEFAULT 0,
  `36` int(50) NOT NULL DEFAULT 0,
  `37` int(50) NOT NULL DEFAULT 0,
  `38` int(50) NOT NULL DEFAULT 0,
  `39` int(50) NOT NULL DEFAULT 0,
  `40` int(50) NOT NULL DEFAULT 0,
  `41` int(50) NOT NULL DEFAULT 0,
  `42` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genderhelth`
--

CREATE TABLE `genderhelth` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalclinc`
--

CREATE TABLE `hospitalclinc` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `icematerial`
--

CREATE TABLE `icematerial` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL,
  `18` varchar(255) DEFAULT NULL,
  `19` varchar(255) DEFAULT NULL,
  `20` varchar(255) DEFAULT NULL,
  `21` varchar(255) DEFAULT NULL,
  `22` varchar(255) DEFAULT NULL,
  `23` varchar(255) DEFAULT NULL,
  `24` varchar(255) DEFAULT NULL,
  `25` varchar(255) DEFAULT NULL,
  `26` varchar(255) DEFAULT NULL,
  `27` varchar(255) DEFAULT NULL,
  `28` varchar(255) DEFAULT NULL,
  `29` varchar(255) DEFAULT NULL,
  `30` varchar(255) DEFAULT NULL,
  `31` varchar(255) DEFAULT NULL,
  `32` varchar(255) DEFAULT NULL,
  `33` varchar(255) DEFAULT NULL,
  `34` varchar(255) DEFAULT NULL,
  `35` varchar(255) DEFAULT NULL,
  `36` varchar(255) DEFAULT NULL,
  `37` varchar(255) DEFAULT NULL,
  `38` varchar(255) DEFAULT NULL,
  `39` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icematerial`
--

INSERT INTO `icematerial` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`) VALUES
(13, 'ඇත.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE `immunization` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `immunization`
--

INSERT INTO `immunization` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`) VALUES
(13, '4', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `latepreganacypreservation`
--

CREATE TABLE `latepreganacypreservation` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0,
  `19` int(50) NOT NULL DEFAULT 0,
  `20` int(50) NOT NULL DEFAULT 0,
  `21` int(50) NOT NULL DEFAULT 0,
  `22` int(50) NOT NULL DEFAULT 0,
  `23` int(50) NOT NULL DEFAULT 0,
  `24` int(50) NOT NULL DEFAULT 0,
  `25` int(50) NOT NULL DEFAULT 0,
  `26` int(50) NOT NULL DEFAULT 0,
  `27` int(50) NOT NULL DEFAULT 0,
  `28` int(50) NOT NULL DEFAULT 0,
  `29` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maternitypreservation`
--

CREATE TABLE `maternitypreservation` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0,
  `19` int(50) NOT NULL DEFAULT 0,
  `20` int(50) NOT NULL DEFAULT 0,
  `21` int(50) NOT NULL DEFAULT 0,
  `22` int(50) NOT NULL DEFAULT 0,
  `23` int(50) NOT NULL DEFAULT 0,
  `24` int(50) NOT NULL DEFAULT 0,
  `25` int(50) NOT NULL DEFAULT 0,
  `26` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maternitypreservation`
--

INSERT INTO `maternitypreservation` (`id`, `period`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`) VALUES
(14, '2020-07-7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0),
(14, '2020-07-9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `idcardnum` varchar(15) NOT NULL,
  `sender` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `idcardnum`, `sender`, `status`, `date`, `message`) VALUES
(2, '956432345V', '953451234V', 'sent', '2020-07-17 11:27:24', 'Ado'),
(3, '956432345V', '953451234V', 'sent', '2020-07-15 22:15:43', 'ai'),
(4, '953451231V', '923451234V', 'sent', '0000-00-00 00:00:00', 'idahan'),
(5, '953451234V', '934321235V', 'read', '2020-07-17 11:46:17', 'dads'),
(6, '934321235V', '953451234V', 'sent', '2020-07-17 11:46:00', 'ado'),
(17, '934321235V', '953451234V', 'sent', '2020-07-17 12:41:09', 'erew'),
(18, '934321235V', '953451234V', 'sent', '2020-07-17 12:41:38', 'na'),
(19, '934321235V', '953451234V', 'sent', '2020-07-17 12:43:01', 'er'),
(20, '934321235V', '953451234V', 'sent', '2020-07-17 12:43:55', 'w'),
(21, '953451234V', '934321235V', 'read', '2020-07-17 12:44:42', 'bhhhhh'),
(22, '934321235V', '953451234V', 'sent', '2020-07-17 12:45:43', 'w'),
(23, '934321235V', '953451234V', 'sent', '2020-07-17 12:51:21', 'tr'),
(24, '934321235V', '953451234V', 'sent', '2020-07-17 12:53:18', 'tr'),
(25, '934321235V', '953451234V', 'sent', '2020-07-17 13:26:46', 'tr'),
(26, '934321235V', '953451234V', 'sent', '2020-07-17 13:34:37', 'tr'),
(27, '956432345V', '953451234V', 'sent', '2020-07-17 19:20:53', 'eee'),
(28, '956432345V', '953451234V', 'sent', '2020-07-17 19:31:51', 'asas'),
(29, '956432345V', '953451234V', 'sent', '2020-07-17 19:33:07', 'asas'),
(30, '953451234V', '953451234V', 'read', '2020-07-17 19:37:18', 'sas'),
(31, '944561234V', '953451234V', 'sent', '2020-07-17 19:38:19', 'dsds'),
(32, '943434432V', '953451234V', 'sent', '2020-07-18 00:00:42', 'adeeeee'),
(33, '943434432V', '953451234V', 'sent', '2020-07-18 00:02:55', 'nikn'),
(36, '934321235V', '953451234V', 'sent', '2020-08-03 16:55:58', 'adoooooo'),
(37, '934321235V', '953451234V', 'sent', '2020-08-03 18:18:28', 'hjashjasdh');

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

CREATE TABLE `mother` (
  `id` int(11) NOT NULL,
  `idcardnum` varchar(15) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `confirmation` tinyint(4) NOT NULL DEFAULT 0,
  `blood_group` varchar(20) DEFAULT NULL,
  `height` varchar(20) DEFAULT NULL,
  `mass_index` varchar(20) DEFAULT NULL,
  `allergies` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mother`
--

INSERT INTO `mother` (`id`, `idcardnum`, `name`, `confirmation`, `blood_group`, `height`, `mass_index`, `allergies`) VALUES
(1, '986541234v', 'K.H.K.Kumarasighe', 1, 'B', '146', '1.32', 'No'),
(5, '944561234V', 'D.F.E.Karunasena', 1, 'O+', '146', '1.36', 'No'),
(20, '956737349V', 'SadaruwanKumara', 0, 'ab+', '78', '8.3', 'No'),
(21, '956432398V', 'Sadaruwan', 1, 'ab+', '78', '8.3', 'kasanava');

-- --------------------------------------------------------

--
-- Table structure for table `mtfpj`
--

CREATE TABLE `mtfpj` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0,
  `19` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mtfpj`
--

INSERT INTO `mtfpj` (`id`, `period`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`) VALUES
(14, '2020-07-9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mtpr`
--

CREATE TABLE `mtpr` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0,
  `19` int(50) NOT NULL DEFAULT 0,
  `20` int(50) NOT NULL DEFAULT 0,
  `21` int(50) NOT NULL DEFAULT 0,
  `22` int(50) NOT NULL DEFAULT 0,
  `23` int(50) NOT NULL DEFAULT 0,
  `24` int(50) NOT NULL DEFAULT 0,
  `25` int(50) NOT NULL DEFAULT 0,
  `26` int(50) NOT NULL DEFAULT 0,
  `27` int(50) NOT NULL DEFAULT 0,
  `28` int(50) NOT NULL DEFAULT 0,
  `29` int(50) NOT NULL DEFAULT 0,
  `30` int(50) NOT NULL DEFAULT 0,
  `31` int(50) NOT NULL DEFAULT 0,
  `32` int(50) NOT NULL DEFAULT 0,
  `33` int(50) NOT NULL DEFAULT 0,
  `34` int(50) NOT NULL DEFAULT 0,
  `35` int(50) NOT NULL DEFAULT 0,
  `36` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mtpr`
--

INSERT INTO `mtpr` (`id`, `period`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`) VALUES
(14, '2020-07-7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 0, 0, 0, 0, 0),
(14, '2020-07-9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `otheractivities`
--

CREATE TABLE `otheractivities` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pastobshistory`
--

CREATE TABLE `pastobshistory` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL,
  `18` varchar(255) DEFAULT NULL,
  `19` varchar(255) DEFAULT NULL,
  `20` varchar(255) DEFAULT NULL,
  `21` varchar(255) DEFAULT NULL,
  `22` varchar(255) DEFAULT NULL,
  `23` varchar(255) DEFAULT NULL,
  `24` varchar(255) DEFAULT NULL,
  `25` varchar(255) DEFAULT NULL,
  `26` varchar(255) DEFAULT NULL,
  `27` varchar(255) DEFAULT NULL,
  `28` varchar(255) DEFAULT NULL,
  `29` varchar(255) DEFAULT NULL,
  `30` varchar(255) DEFAULT NULL,
  `31` varchar(255) DEFAULT NULL,
  `32` varchar(255) DEFAULT NULL,
  `33` varchar(255) DEFAULT NULL,
  `34` varchar(255) DEFAULT NULL,
  `35` varchar(255) DEFAULT NULL,
  `36` varchar(255) DEFAULT NULL,
  `37` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastobshistory`
--

INSERT INTO `pastobshistory` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`) VALUES
(13, 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', '', '', '', '', '', '', 'නැත', '', '', '', '', '', '', 'නැත', '', '', '', '', '', '', 'නැත', '', '', '', '', '', '', 'නැත', 'කිසිවක් නැත.');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`) VALUES
(13, 'නැත', 'ඔව්.', 'නැත', '20%', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී');

-- --------------------------------------------------------

--
-- Table structure for table `postnatalcare`
--

CREATE TABLE `postnatalcare` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL,
  `18` varchar(255) DEFAULT NULL,
  `19` varchar(255) DEFAULT NULL,
  `20` varchar(255) DEFAULT NULL,
  `21` varchar(255) DEFAULT NULL,
  `22` varchar(255) DEFAULT NULL,
  `23` varchar(255) DEFAULT NULL,
  `24` varchar(255) DEFAULT NULL,
  `25` varchar(255) DEFAULT NULL,
  `26` varchar(255) DEFAULT NULL,
  `27` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postnatalcare`
--

INSERT INTO `postnatalcare` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`) VALUES
(13, 'කිරිබත්ගොඩ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `postpatumcare`
--

CREATE TABLE `postpatumcare` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL,
  `18` varchar(255) DEFAULT NULL,
  `19` varchar(255) DEFAULT NULL,
  `20` varchar(255) DEFAULT NULL,
  `21` varchar(255) DEFAULT NULL,
  `22` varchar(255) DEFAULT NULL,
  `23` varchar(255) DEFAULT NULL,
  `24` varchar(255) DEFAULT NULL,
  `25` varchar(255) DEFAULT NULL,
  `26` varchar(255) DEFAULT NULL,
  `27` varchar(255) DEFAULT NULL,
  `28` varchar(255) DEFAULT NULL,
  `29` varchar(255) DEFAULT NULL,
  `30` varchar(255) DEFAULT NULL,
  `31` varchar(255) DEFAULT NULL,
  `32` varchar(255) DEFAULT NULL,
  `33` varchar(255) DEFAULT NULL,
  `34` varchar(255) DEFAULT NULL,
  `35` varchar(255) DEFAULT NULL,
  `36` varchar(255) DEFAULT NULL,
  `37` varchar(255) DEFAULT NULL,
  `38` varchar(255) DEFAULT NULL,
  `39` varchar(255) DEFAULT NULL,
  `40` varchar(255) DEFAULT NULL,
  `41` varchar(255) DEFAULT NULL,
  `42` varchar(255) DEFAULT NULL,
  `43` varchar(255) DEFAULT NULL,
  `44` varchar(255) DEFAULT NULL,
  `45` varchar(255) DEFAULT NULL,
  `46` varchar(255) DEFAULT NULL,
  `47` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postpatumcare`
--

INSERT INTO `postpatumcare` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`) VALUES
(13, '', '', '06/09', '', '', '', '', '', '', '', '', '06/09', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `preclinic`
--

CREATE TABLE `preclinic` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preclinic`
--

INSERT INTO `preclinic` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`) VALUES
(13, '06/04', 'නැත', 'ඇත', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `preganacyresult`
--

CREATE TABLE `preganacyresult` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0,
  `7` int(50) NOT NULL DEFAULT 0,
  `8` int(50) NOT NULL DEFAULT 0,
  `9` int(50) NOT NULL DEFAULT 0,
  `10` int(50) NOT NULL DEFAULT 0,
  `11` int(50) NOT NULL DEFAULT 0,
  `12` int(50) NOT NULL DEFAULT 0,
  `13` int(50) NOT NULL DEFAULT 0,
  `14` int(50) NOT NULL DEFAULT 0,
  `15` int(50) NOT NULL DEFAULT 0,
  `16` int(50) NOT NULL DEFAULT 0,
  `17` int(50) NOT NULL DEFAULT 0,
  `18` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `presentobshistory`
--

CREATE TABLE `presentobshistory` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presentobshistory`
--

INSERT INTO `presentobshistory` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`) VALUES
(13, '1', '2', '3', '5', '1', '2', '3', '12', '12', '12', '12', '12', '12', 'නැත', 'නැත', '12/12/12', '12/12/12');

-- --------------------------------------------------------

--
-- Table structure for table `registerdetails`
--

CREATE TABLE `registerdetails` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerdetails`
--

INSERT INTO `registerdetails` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES
(13, 'අමරසේන', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'නොදනී', 'කිසිවක් නැත.'),
(17, 'කොඩිකාර', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supervisionattendance`
--

CREATE TABLE `supervisionattendance` (
  `id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `1` int(50) NOT NULL DEFAULT 0,
  `2` int(50) NOT NULL DEFAULT 0,
  `3` int(50) NOT NULL DEFAULT 0,
  `4` int(50) NOT NULL DEFAULT 0,
  `5` int(50) NOT NULL DEFAULT 0,
  `6` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surgicalhistory`
--

CREATE TABLE `surgicalhistory` (
  `id` int(11) NOT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surgicalhistory`
--

INSERT INTO `surgicalhistory` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`) VALUES
(13, 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත', 'නැත');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `idcardnum` varchar(15) NOT NULL,
  `area` varchar(100) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL,
  `approved` tinyint(4) NOT NULL,
  `approveddate` datetime DEFAULT NULL,
  `approvedby` varchar(50) DEFAULT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL,
  `18` varchar(255) DEFAULT NULL,
  `19` varchar(255) DEFAULT NULL,
  `20` varchar(255) DEFAULT NULL,
  `21` text DEFAULT NULL,
  `22` varchar(255) DEFAULT NULL,
  `23` varchar(255) DEFAULT NULL,
  `24` varchar(255) DEFAULT NULL,
  `25` varchar(255) DEFAULT NULL,
  `26` varchar(255) DEFAULT NULL,
  `27` varchar(255) DEFAULT NULL,
  `28` varchar(255) DEFAULT NULL,
  `29` varchar(255) DEFAULT NULL,
  `30` varchar(255) DEFAULT NULL,
  `31` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `idcardnum`, `area`, `month`, `date`, `approved`, `approveddate`, `approvedby`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`) VALUES
(1, '956432345V', 'ප.සෞ.සේ.නි. පෙතියාගොඩ', '2020/02', '2020/01/28', 1, '2020-06-15 16:13:56', 'H.A.S.P Samarasinghe', 'කාර්යාලය(පිලපිටිය)', 'ඉරිදා', 'බියගම පාර(A) වේල්ල පහළ(C) ගෘ.ඇ', 'රජයේ නිවාඩු', 'සිංහාරමුල්ල බහු සායනය', 'මානෙල්ගම සායනය', 'ප්‍රාදේශීය රැස්වීම MOH කාර්යාලය', 'පෝය නිවාඩු', 'ඉරිදා', 'පෙතියාගොඩ(A)/පතිරණ මාවත/සමගි මාවත ගෘ.ඇ.', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: වීරසිංහ මාවත ගෘ.ඇ.(B) , පස්වරු: බර කිරීම වීරසිංහ මාවත', 'පෙරවරු: පිලපිටිය ගෘ.ඇ. , පස්වරු: පිලපිටිය බර කිරීම', 'මාසික සමුලුව MOH කාර්යාලය', 'නාරම්මිනිය ගෘ.ඇ.(E)', 'ඉරිදා', 'පූර්ව ප්‍රසව සැසිය', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: බියගම පාර (A) ගෘ.ඇ , පස්වරු: නිලමගෙවත්ත බරකිරීම', 'පෙරවරු: වරාගොඩ පාර(G) ගෘ.ඇ පස්වරු: වරාගොඩ පන්සල බර කිරීම', 'රජයේ නිවාඩු', 'සුවනාරි සායනය', 'ඉරිදා', 'දේවලේ පාර(A) ගෘ.ඇ සායන පෙර සූදානම', 'සිංහාරමුල්ල බහු සායනය', '(F) ජයතිලක මාවත/(E)නාරම්මිනිය (D)නිලමෙගෙවත්ත බර කිරීම ', 'විඩෙල්ල/ බර අඩු/ ත්‍රිපෝශ සායනය', 'සේවාස්ථ පුහුණුව', 'කාර්යාලය (පිලපිටිය)', NULL, NULL),
(2, '956432345V', 'ප.සෞ.සේ.නි. කොට්ඨාශය වනවාසල බටහිර', '2020/03', '2020/02/23', 1, '2020-06-12 00:58:04', 'H.A.S.P Samarasinghe', 'කාර්යාලය(පිලපිටිය)', 'ඉරිදා', 'බියගම පාර(A) වේල්ල පහළ(C) ගෘ.ඇ', 'රජයේ නිවාඩු', 'සිංහාරමුල්ල බහු සායනය', 'මානෙල්ගම සායනය', 'ප්‍රාදේශීය රැස්වීම MOH කාර්යාලය', 'පෝය නිවාඩු', 'ඉරිදා', 'පෙතියාගොඩ(A)/පතිරණ මාවත/සමගි මාවත ගෘ.ඇ.', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: වීරසිංහ මාවත ගෘ.ඇ.(B) , පස්වරු: බර කිරීම වීරසිංහ මාවත', 'පෙරවරු: පිලපිටිය ගෘ.ඇ. , පස්වරු: පිලපිටිය බර කිරීම', 'මාසික සමුලුව MOH කාර්යාලය', 'නාරම්මිනිය ගෘ.ඇ.(E)', 'ඉරිදා', 'පූර්ව ප්‍රසව සැසිය', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: බියගම පාර (A) ගෘ.ඇ , පස්වරු: නිලමගෙවත්ත බරකිරීම', 'පෙරවරු: වරාගොඩ පාර(G) ගෘ.ඇ පස්වරු: වරාගොඩ පන්සල බර කිරීම', 'රජයේ නිවාඩු', 'සුවනාරි සායනය', 'ඉරිදා', 'දේවලේ පාර(A) ගෘ.ඇ සායන පෙර සූදානම', 'සිංහාරමුල්ල බහු සායනය', '(F) ජයතිලක මාවත/(E)නාරම්මිනිය (D)නිලමෙගෙවත්ත බර කිරීම ', 'විඩෙල්ල/ බර අඩු/ ත්‍රිපෝශ සායනය', 'සේවාස්ථ පුහුණුව', 'කාර්යාලය (පිලපිටිය)', NULL, NULL),
(3, '956432345V', 'ප.සෞ.සේ.නි. ගගබඩ AB', '2020/04', '2020/03/21', 1, '2020-06-12 00:58:13', 'H.A.S.P Samarasinghe', 'කාර්යාලය(පිලපිටිය)', 'ඉරිදා', 'බියගම පාර(A) වේල්ල පහළ(C) ගෘ.ඇ', 'රජයේ නිවාඩු', 'සිංහාරමුල්ල බහු සායනය', 'මානෙල්ගම සායනය', 'ප්‍රාදේශීය රැස්වීම MOH කාර්යාලය', 'පෝය නිවාඩු', 'ඉරිදා', 'පෙතියාගොඩ(A)/පතිරණ මාවත/සමගි මාවත ගෘ.ඇ.', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: වීරසිංහ මාවත ගෘ.ඇ.(B) , පස්වරු: බර කිරීම වීරසිංහ මාවත', 'පෙරවරු: පිලපිටිය ගෘ.ඇ. , පස්වරු: පිලපිටිය බර කිරීම', 'මාසික සමුලුව MOH කාර්යාලය', 'නාරම්මිනිය ගෘ.ඇ.(E)', 'ඉරිදා', 'පූර්ව ප්‍රසව සැසිය', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: බියගම පාර (A) ගෘ.ඇ , පස්වරු: නිලමගෙවත්ත බරකිරීම', 'පෙරවරු: වරාගොඩ පාර(G) ගෘ.ඇ පස්වරු: වරාගොඩ පන්සල බර කිරීම', 'රජයේ නිවාඩු', 'සුවනාරි සායනය', 'ඉරිදා', 'දේවලේ පාර(A) ගෘ.ඇ සායන පෙර සූදානම', 'සිංහාරමුල්ල බහු සායනය', '(F) ජයතිලක මාවත/(E)නාරම්මිනිය (D)නිලමෙගෙවත්ත බර කිරීම ', 'විඩෙල්ල/ බර අඩු/ ත්‍රිපෝශ සායනය', 'සේවාස්ථ පුහුණුව', 'කාර්යාලය (පිලපිටිය)', NULL, NULL),
(4, '956432345V', 'ප.සෞ.සේ.නි. කොට්ඨාශය වනවාසල උතුර', '2020/05', '2020/02/25', 1, '2020-06-12 00:58:38', 'H.A.S.P Samarasinghe', 'කාර්යාලය(පිලපිටිය)', 'ඉරිදා', 'බියගම පාර(A) වේල්ල පහළ(C) ගෘ.ඇ', 'රජයේ නිවාඩු', 'සිංහාරමුල්ල බහු සායනය', 'මානෙල්ගම සායනය', 'ප්‍රාදේශීය රැස්වීම MOH කාර්යාලය', 'පෝය නිවාඩු', 'ඉරිදා', 'පෙතියාගොඩ(A)/පතිරණ මාවත/සමගි මාවත ගෘ.ඇ.', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: වීරසිංහ මාවත ගෘ.ඇ.(B) , පස්වරු: බර කිරීම වීරසිංහ මාවත', 'පෙරවරු: පිලපිටිය ගෘ.ඇ. , පස්වරු: පිලපිටිය බර කිරීම', 'මාසික සමුලුව MOH කාර්යාලය', 'නාරම්මිනිය ගෘ.ඇ.(E)', 'ඉරිදා', 'පූර්ව ප්‍රසව සැසිය', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: බියගම පාර (A) ගෘ.ඇ , පස්වරු: නිලමගෙවත්ත බරකිරීම', 'පෙරවරු: වරාගොඩ පාර(G) ගෘ.ඇ පස්වරු: වරාගොඩ පන්සල බර කිරීම', 'රජයේ නිවාඩු', 'සුවනාරි සායනය', 'ඉරිදා', 'දේවලේ පාර(A) ගෘ.ඇ සායන පෙර සූදානම', 'සිංහාරමුල්ල බහු සායනය', '(F) ජයතිලක මාවත/(E)නාරම්මිනිය (D)නිලමෙගෙවත්ත බර කිරීම ', 'විඩෙල්ල/ බර අඩු/ ත්‍රිපෝශ සායනය', 'සේවාස්ථ පුහුණුව', 'කාර්යාලය (පිලපිටිය)', NULL, NULL),
(5, '956432345V', 'ප.සෞ.සේ.නි. කොට්ඨාශය ගගබඩ බටහිර', '2020/06', '2020/02/20', 1, '2020-06-12 00:59:12', 'H.A.S.P Samarasinghe', 'කාර්යාලය(පිලපිටිය)', 'ඉරිදා', 'බියගම පාර(A) වේල්ල පහළ(C) ගෘ.ඇ', 'රජයේ නිවාඩු', 'සිංහාරමුල්ල බහු සායනය', 'මානෙල්ගම සායනය', 'ප්‍රාදේශීය රැස්වීම MOH කාර්යාලය', 'පෝය නිවාඩු', 'ඉරිදා', 'පෙතියාගොඩ(A)/පතිරණ මාවත/සමගි මාවත ගෘ.ඇ.', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: වීරසිංහ මාවත ගෘ.ඇ.(B) , පස්වරු: බර කිරීම වීරසිංහ මාවත', 'පෙරවරු: පිලපිටිය ගෘ.ඇ. , පස්වරු: පිලපිටිය බර කිරීම', 'මාසික සමුලුව MOH කාර්යාලය', 'නාරම්මිනිය ගෘ.ඇ.(E)', 'ඉරිදා', 'පූර්ව ප්‍රසව සැසිය', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: බියගම පාර (A) ගෘ.ඇ , පස්වරු: නිලමගෙවත්ත බරකිරීම', 'පෙරවරු: වරාගොඩ පාර(G) ගෘ.ඇ පස්වරු: වරාගොඩ පන්සල බර කිරීම', 'රජයේ නිවාඩු', 'සුවනාරි සායනය', 'ඉරිදා', 'දේවලේ පාර(A) ගෘ.ඇ සායන පෙර සූදානම', 'සිංහාරමුල්ල බහු සායනය', '(F) ජයතිලක මාවත/(E)නාරම්මිනිය (D)නිලමෙගෙවත්ත බර කිරීම ', 'විඩෙල්ල/ බර අඩු/ ත්‍රිපෝශ සායනය', 'සේවාස්ථ පුහුණුව', 'කාර්යාලය (පිලපිටිය)', NULL, NULL),
(8, '934321234V', 'ප.සෞ.සේ.නි. කොට්ඨාශය ගගබඩ', '2020/06', '2020/05/20', 1, '2020-06-12 14:48:49', 'H.A.S.P Samarasinghe', 'කාර්යාලය(පිලපිටිය)', 'ඉරිදා', 'බියගම පාර(A) වේල්ල පහළ(C) ගෘ.ඇ', 'රජයේ නිවාඩු', 'සිංහාරමුල්ල බහු සායනය', 'මානෙල්ගම සායනය', 'ප්‍රාදේශීය රැස්වීම MOH කාර්යාලය', 'පෝය නිවාඩු', 'ඉරිදා', 'පෙතියාගොඩ(A)/පතිරණ මාවත/සමගි මාවත ගෘ.ඇ.', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: පිලපිටිය ගෘ.ඇ. , පස්වරු: පිලපිටිය බර කිරීම', 'පෙරවරු: වීරසිංහ මාවත ගෘ.ඇ.(B) , පස්වරු: බර කිරීම වීරසිංහ මාවත', 'මාසික සමුලුව MOH කාර්යාලය', 'නාරම්මිනිය ගෘ.ඇ.(E)', 'ඉරිදා', 'පූර්ව ප්‍රසව සැසිය', 'සිංහාරමුල්ල බහු සායනය', 'පෙරවරු: බියගම පාර (A) ගෘ.ඇ , පස්වරු: නිලමගෙවත්ත බරකිරීම', 'පෙරවරු: වරාගොඩ පාර(G) ගෘ.ඇ පස්වරු: වරාගොඩ පන්සල බර කිරීම', 'රජයේ නිවාඩු', 'සුවනාරි සායනය', 'ඉරිදා', 'දේවලේ පාර(A) ගෘ.ඇ සායන පෙර සූදානම', 'සිංහාරමුල්ල බහු සායනය', '(F) ජයතිලක මාවත/(E)නාරම්මිනිය (D)නිලමෙගෙවත්ත බර කිරීම ', 'විඩෙල්ල/ බර අඩු/ ත්‍රිපෝශ සායනය', 'සේවාස්ථ පුහුණුව', 'කාර්යාලය (පිලපිටිය)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `idcardnum` varchar(15) NOT NULL,
  `name` varchar(150) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(175) NOT NULL,
  `acl` varchar(100) DEFAULT NULL,
  `user_type` varchar(10) NOT NULL,
  `deleted` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `idcardnum`, `name`, `pwd`, `birthday`, `address`, `phone`, `email`, `acl`, `user_type`, `deleted`) VALUES
(3, '953451234V', 'H.A.S.P Samarasinghe', '$2y$10$UZS5q83ySbiT.5jrQLiBz.zjZIKiiHCp4XRhgzaWbjyntWAWlx79a', '1995/02/12', 'No,454,\r\nParakrama Mv,\r\nPeliyagoda.', '0781231231', 'pushpa12@gmail.com', NULL, 'MO', 0),
(13, '944561234V', 'D.F.E.Karunasena', '$2y$10$UZS5q83ySbiT.5jrQLiBz.zjZIKiiHCp4XRhgzaWbjyntWAWlx79a', '1994/01/13', 'No.23,\r\nParakrama Mv,\r\nKelaniya.', '0763451234', 'karunasena@gmail.com', NULL, 'M', 0),
(14, '956432345V', 'F.D.A.Kodikara', '$2y$10$UZS5q83ySbiT.5jrQLiBz.zjZIKiiHCp4XRhgzaWbjyntWAWlx79a', '1995/2/4', 'No.20, Dutugemunu Mv, Kelaniya.', '0788761234', 'kodikara@gmail.com', NULL, 'MI', 0),
(15, '943434432V', 'K.L.M.Kmalawathi', '$2y$10$Wxztw2aVfnVpoO2UXT6.nOeKgArkjj7.gLs/kv5iqbaAWjPEFxwqK', '1994/3/4', 'No.66, Gamunu Mv, Peliyagoda.', '0762341234', 'kamalawathi123@gmail.com', NULL, 'MI', 0),
(16, '984562349V', 'K.H.K.Kumarasighe', '$2y$10$lPqQ234UFmsvz7T.F9wOW.ivG6Tk76KGAFQeAtDUBfnp3tp9tEwza', '1995/12/2', 'No.66, Gamunu Mv, Peliyagoda.', '0705347', 'kodikara123@gmail.com', NULL, 'MI', 0),
(17, '986541234v', 'K.H.K.Kumarasighe', '$2y$10$qth0HWwFEW/.k/MqAMDlSOZZzVxe5ih9K5cTcdPTQrja9bCMk5Gle', '1996/3/12', 'No.66, Gamunu Mv, Peliyagoda.', '0761234522', 'malidu334@gmail.com', NULL, 'M', 0),
(18, '951231234V', 'D.C.F. Amarasinghe', '$2y$10$rglAo2Rc2Sll21Hy.YhvZ.zyMKt/gX8CHu4LOtltbZKoeKd51hOVG', '1995/2/3', 'No.66, Gamunu Mv, Peliyagoda.', '0781234321', 'amarasinghe@gmail.com', NULL, 'MI', 0),
(19, '923451234V', 'G.H.Kamalawathi', '$2y$10$8OSOXe.OIwdrGvBaGBxEHed1J7Y6MeMzCqFhVLAbGRXIit23bS.bq', '1995/12/2', 'No.66, Gamunu Mv, Peliyagoda.', '0761234321', 'kodikara234@gmail.com', NULL, 'MI', 0),
(20, '934321234V', 'D.G.Soysa', '$2y$10$s4clPBLojWQTNM6UdsDMs.EofDBQhYFEKT/jJ/yWHflmRPjuWLkKe', '1993/3/2', 'No.66, Gamunu Mv, Peliyagoda.', '0781231234', 'soysa13@gmail.com', NULL, 'MI', 0),
(21, '934321235V', 'D.G.Soysa', '$2y$10$OxnYw8lrhQi3mgDLXSAr9O9sh88AzPN2I9bjepwe0LsfLqufV38Om', '1993/3/2', 'No.66, Gamunu Mv, Peliyagoda.', '0781231234', 'soysa12@gmail.com', NULL, 'MI', 0),
(22, '962341234V', 'G.K.Sumanawathi', '$2y$10$pXn1oaINhIS2V8HkVNtGueXtGh1WNx5uD5VaysdpFSqMZ2qGxV5PG', '1996/7/3', 'No.66, Gamunu Mv, Peliyagoda.', '0705347684', 'sumana12@gmail.com', NULL, 'MI', 0),
(23, '953451231V', 'M.G.Smarathunga', '$2y$10$ehzAuWSYHBCKA8nAFc7YQO90rak0VJ0G9EHX6vCHFSJgs5cXI1RYy', '1992/03/02', 'No.66, Varagoda Mv, Kelaniya.', '0761237898', 'smarathunga123@gmail.com', NULL, 'MI', 0),
(27, '956737349V', 'SadaruwanKumara', '$2y$10$YBhq2L4yW9/vvhLIfqHa1urb4NwSt5NwpACXncVjFby5CjrE3WS9O', '1998/05/12', 'NOASSDSADSsasaSAS', '0723456707', 'SANDA@GMAIL.COM', NULL, 'M', 0),
(28, '956432398V', 'Sadaruwan', '$2y$10$q.11D.3GO0807gJV8.JUuujv9JHnxwOP1JqCadfSFJ5YXKs6casB.', '1998/05/10', 'NOASSDSADSsasdasfsaf', '0723456909', 'sadaruwan@gmail.com', NULL, 'M', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `weight_chart`
--

CREATE TABLE `weight_chart` (
  `id` int(11) NOT NULL,
  `idcardnum` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `1` int(10) NOT NULL,
  `2` int(10) NOT NULL,
  `3` int(10) NOT NULL,
  `4` int(10) NOT NULL,
  `5` int(10) NOT NULL,
  `6` int(10) NOT NULL,
  `7` int(10) NOT NULL,
  `8` int(10) NOT NULL,
  `9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight_chart`
--

INSERT INTO `weight_chart` (`id`, `idcardnum`, `type`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`) VALUES
(30, '944561234V', 'week', 3, 5, 10, 12, 20, 21, 22, 30, 42),
(31, '944561234V', 'weight', 100, 250, 350, 400, 500, 700, 1100, 1200, 1500),
(32, '944561234V', 'height', 20, 25, 30, 35, 40, 41, 42, 45, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliniccare_1`
--
ALTER TABLE `cliniccare_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliniccare_2`
--
ALTER TABLE `cliniccare_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergancyplan`
--
ALTER TABLE `emergancyplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `familyhistory`
--
ALTER TABLE `familyhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalclinc`
--
ALTER TABLE `hospitalclinc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icematerial`
--
ALTER TABLE `icematerial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immunization`
--
ALTER TABLE `immunization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message` (`idcardnum`),
  ADD KEY `sender` (`sender`);

--
-- Indexes for table `mother`
--
ALTER TABLE `mother`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idcardnum` (`idcardnum`);

--
-- Indexes for table `pastobshistory`
--
ALTER TABLE `pastobshistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postnatalcare`
--
ALTER TABLE `postnatalcare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postpatumcare`
--
ALTER TABLE `postpatumcare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preclinic`
--
ALTER TABLE `preclinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presentobshistory`
--
ALTER TABLE `presentobshistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerdetails`
--
ALTER TABLE `registerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgicalhistory`
--
ALTER TABLE `surgicalhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcardnum` (`idcardnum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idcardnum` (`idcardnum`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight_chart`
--
ALTER TABLE `weight_chart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliniccare_1`
--
ALTER TABLE `cliniccare_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `cliniccare_2`
--
ALTER TABLE `cliniccare_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `emergancyplan`
--
ALTER TABLE `emergancyplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `familyhistory`
--
ALTER TABLE `familyhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hospitalclinc`
--
ALTER TABLE `hospitalclinc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icematerial`
--
ALTER TABLE `icematerial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `immunization`
--
ALTER TABLE `immunization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mother`
--
ALTER TABLE `mother`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pastobshistory`
--
ALTER TABLE `pastobshistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `postnatalcare`
--
ALTER TABLE `postnatalcare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `postpatumcare`
--
ALTER TABLE `postpatumcare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `preclinic`
--
ALTER TABLE `preclinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `presentobshistory`
--
ALTER TABLE `presentobshistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registerdetails`
--
ALTER TABLE `registerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `surgicalhistory`
--
ALTER TABLE `surgicalhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `weight_chart`
--
ALTER TABLE `weight_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message` FOREIGN KEY (`idcardnum`) REFERENCES `user` (`idcardnum`),
  ADD CONSTRAINT `sender` FOREIGN KEY (`sender`) REFERENCES `user` (`idcardnum`);

--
-- Constraints for table `time_table`
--
ALTER TABLE `time_table`
  ADD CONSTRAINT `time_table_ibfk_1` FOREIGN KEY (`idcardnum`) REFERENCES `user` (`idcardnum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
