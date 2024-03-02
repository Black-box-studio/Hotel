-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 04:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `picture2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `comment`, `picture2`) VALUES
(1, 'About', 'luxury-pool-villa-spectacular-contemporary-design-digital-art-real-estate-home-house-property-ge.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_photos`
--

CREATE TABLE `about_photos` (
  `id` int(11) NOT NULL,
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_photos`
--

INSERT INTO `about_photos` (`id`, `pic1`, `pic2`, `pic3`, `pic4`) VALUES
(1, 'john-fornander-y3_AHHrxUBY-unsplash.jpg', 'pexels-deeana-arts-2565222.jpg', 'pexels-rene-asmussen-2504911.jpg', 'pexels-ahmad-faiyaz-1058253.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `back`
--

CREATE TABLE `back` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `back`
--

INSERT INTO `back` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'rio', '19mb04@gmail.com', 'thanks for your service', 'your service very nice'),
(2, 'ramamoorthy', 'rio2000@gmail.com', 'thanks for your service', 'your service very nice'),
(11, 'vengat', 'vengatbotany@gmail.com', 'thanks for your ', 'good service');

-- --------------------------------------------------------

--
-- Table structure for table `client_comments_1`
--

CREATE TABLE `client_comments_1` (
  `id` int(11) NOT NULL,
  `line4` text NOT NULL,
  `line5` text NOT NULL,
  `line6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_comments_1`
--

INSERT INTO `client_comments_1` (`id`, `line4`, `line5`, `line6`) VALUES
(1, '		Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos																																', '		Simran																															', '		cheif																																');

-- --------------------------------------------------------

--
-- Table structure for table `client_comments_2`
--

CREATE TABLE `client_comments_2` (
  `id` int(11) NOT NULL,
  `line7` text NOT NULL,
  `line8` text NOT NULL,
  `line9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_comments_2`
--

INSERT INTO `client_comments_2` (`id`, `line7`, `line8`, `line9`) VALUES
(1, '		Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos																																																	', '				Rahul																																															', '		driver																																																	');

-- --------------------------------------------------------

--
-- Table structure for table `client_comments_3`
--

CREATE TABLE `client_comments_3` (
  `id` int(11) NOT NULL,
  `line10` text NOT NULL,
  `line11` text NOT NULL,
  `line12` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_comments_3`
--

INSERT INTO `client_comments_3` (`id`, `line10`, `line11`, `line12`) VALUES
(1, '					Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos																																														', '				vimal																																															', '	conctactor																																	');

-- --------------------------------------------------------

--
-- Table structure for table `contact_front_image`
--

CREATE TABLE `contact_front_image` (
  `id` int(11) NOT NULL,
  `frontcomment` text NOT NULL,
  `pic1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_front_image`
--

INSERT INTO `contact_front_image` (`id`, `frontcomment`, `pic1`) VALUES
(1, 'contact', 'pool_skyscraper_hotel_124522_1920x1080.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `deluxe_suite`
--

CREATE TABLE `deluxe_suite` (
  `id` int(11) NOT NULL,
  `rate5` text NOT NULL,
  `roomname5` text NOT NULL,
  `bed5` text NOT NULL,
  `bath5` text NOT NULL,
  `wifi5` text NOT NULL,
  `feature5` text NOT NULL,
  `pic8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deluxe_suite`
--

INSERT INTO `deluxe_suite` (`id`, `rate5`, `roomname5`, `bed5`, `bath5`, `wifi5`, `feature5`, `pic8`) VALUES
(1, '5000 INR PER DAR', 'DELUXE SUITE', '1 BED', '1 DELUX BATH', 'FREE WIFI', '				Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																															', 'wallpaperflare.com_wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `duble_room`
--

CREATE TABLE `duble_room` (
  `id` int(11) NOT NULL,
  `rate1` text NOT NULL,
  `roomname1` text NOT NULL,
  `bed1` text NOT NULL,
  `bath1` text NOT NULL,
  `wifi1` text NOT NULL,
  `feature1` text NOT NULL,
  `pic3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `duble_room`
--

INSERT INTO `duble_room` (`id`, `rate1`, `roomname1`, `bed1`, `bath1`, `wifi1`, `feature1`, `pic3`) VALUES
(1, '1500 INR PER DAY', 'DOUBLE ROOM', '2 BED', '2 BATH', 'PAID WIFI', '		Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																																', 'bed-976597_1280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `executive_suite`
--

CREATE TABLE `executive_suite` (
  `id` int(11) NOT NULL,
  `rate3` text NOT NULL,
  `roomname3` text NOT NULL,
  `bed3` text NOT NULL,
  `bath3` text NOT NULL,
  `wifi3` text NOT NULL,
  `feature3` text NOT NULL,
  `pic6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `executive_suite`
--

INSERT INTO `executive_suite` (`id`, `rate3`, `roomname3`, `bed3`, `bath3`, `wifi3`, `feature3`, `pic6`) VALUES
(1, '2500 INR PER DAY', 'EXECUTIVE SUITE', '2 BED', '2 BATH', 'FREE WIFI', '				Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																																															', 'executive room.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_body`
--

CREATE TABLE `home_body` (
  `id` int(11) NOT NULL,
  `line1` text NOT NULL,
  `line2` text NOT NULL,
  `line3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_body`
--

INSERT INTO `home_body` (`id`, `line1`, `line2`, `line3`) VALUES
(1, '					Luxury Living																																																																														', '						Luxury Living																																																																									', '						Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet																																																																					');

-- --------------------------------------------------------

--
-- Table structure for table `junior_suite`
--

CREATE TABLE `junior_suite` (
  `id` int(11) NOT NULL,
  `rate4` text NOT NULL,
  `roomname4` text NOT NULL,
  `bed4` text NOT NULL,
  `bath4` text NOT NULL,
  `wifi4` text NOT NULL,
  `feature4` text NOT NULL,
  `pic7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `junior_suite`
--

INSERT INTO `junior_suite` (`id`, `rate4`, `roomname4`, `bed4`, `bath4`, `wifi4`, `feature4`, `pic7`) VALUES
(1, '3500 INR PER DAY', 'JUNIOR SUITE', '1 BED', '1 DELUX BATH', 'FREE WIFI', '			Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																															', 'HH-EXEC-KING02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'vengat', 'vengadesanmech2000@gmail.com', 909090),
(2, 'vengat', 'vengadesanmech2000@gmail.com', 0),
(3, 'vengat', 'vengadesanmech2000@gmail.com', 0),
(4, 'rio', 'rio2000@gmail.com', 67890),
(5, 'vengat', 'vengadesanmech2000@gmail.com', 7890),
(6, 'ramamoorthy', 'vengadesanmech2000@gmail.com', 7890),
(7, 'vengat', 'vengadesanmech2000@gmail.com', 890),
(8, 'vengat', 'vengadesanmech2000@gmail.com', 0),
(9, 'vengat', 'vengadesanmech2000@gmail.com', 0),
(10, 'vengat', '19mb04@gmail.com', 9090),
(11, 'vengat', '19mb04@gmail.com', 909),
(12, 'vengat', '19mb04@gmail.com', 0),
(13, 'vengat', 'thalaivarseker567@gmail.com', 90);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `email` text NOT NULL,
  `number` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `email`, `number`) VALUES
(7, 'Aariyas', 'rio2000@gmail.com', 6379546280);

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `bookingmail` varchar(250) NOT NULL,
  `generalmail` varchar(250) NOT NULL,
  `technicalmail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `bookingmail`, `generalmail`, `technicalmail`) VALUES
(1, 'vengadesanmech2000@gmail.com', 'ria@3000gmail.com', 'ram@arrriyalgmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `main_content`
--

CREATE TABLE `main_content` (
  `id` int(11) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_content`
--

INSERT INTO `main_content` (`id`, `content1`, `content2`, `picture`) VALUES
(38, 'Luxury Living', 'Discover A Brand Luxurious Hotel', 'kempinski-hotel-residences-palm-jumeirah-5120x2880-dubai-best-hotels-2879.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_content_1`
--

CREATE TABLE `main_content_1` (
  `id` int(11) NOT NULL,
  `content3` text NOT NULL,
  `content4` text NOT NULL,
  `picture1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_content_1`
--

INSERT INTO `main_content_1` (`id`, `content3`, `content4`, `picture1`) VALUES
(1, 'LUXRIOUS HOTEL', 'Discover A Brand Luxurious Hotel', 'paradisus-palma-real-2560x1440-punta-kana-best-hotels-of-2017-best-3124.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `card` bigint(100) NOT NULL,
  `expiry` text NOT NULL,
  `ccv` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card`, `expiry`, `ccv`) VALUES
(2, 12345678, '12/23', 124),
(10, 12345678, '12/23', 787),
(12, 6789456701, '22/24', 244);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_1`
--

CREATE TABLE `reservation_1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` bigint(250) NOT NULL,
  `adults` text NOT NULL,
  `Children` text NOT NULL,
  `checkinDate` date NOT NULL,
  `checkOutDate` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_1`
--

INSERT INTO `reservation_1` (`id`, `name`, `email`, `phone`, `adults`, `Children`, `checkinDate`, `checkOutDate`, `message`) VALUES
(20, 'vengadesan', '19mb04@gmail.com', 7339388024, '2', '2', '2023-12-28', '2023-12-23', 'no'),
(21, 'ram', '19mb04@gmail.com', 9361382702, '1', '1', '2023-12-30', '2024-01-05', 'update'),
(22, 'ram', 'vengatbotany@gmail.com', 7339567890, '1', '1', '2023-12-30', '2023-12-30', 'urgent'),
(23, 'seker', 'thalaivarseker567@gmail.com', 7339388024, '2', '3', '2023-12-30', '2023-12-23', 'i want peackup taxi');

-- --------------------------------------------------------

--
-- Table structure for table `reserv_front_image`
--

CREATE TABLE `reserv_front_image` (
  `id` int(11) NOT NULL,
  `frontcomment` text NOT NULL,
  `pic1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserv_front_image`
--

INSERT INTO `reserv_front_image` (`id`, `frontcomment`, `pic1`) VALUES
(1, 'Reservation', 'dar-al-masyaf-at-madinat-jumeirah-3840x2160-dubai-best-hotels-of-2017-2874.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reserv_side_image`
--

CREATE TABLE `reserv_side_image` (
  `id` int(11) NOT NULL,
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserv_side_image`
--

INSERT INTO `reserv_side_image` (`id`, `pic1`, `pic2`, `pic3`, `pic4`) VALUES
(1, 'aran-mtnez-sTvu6hK3ul4-unsplash.jpg', 'joshua-fuller-jinVHaPYvRc-unsplash.jpg', 'pexels-rene-asmussen-2504911.jpg', 'vita-vilcina-KtOid0FLjqU-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_front`
--

CREATE TABLE `rooms_front` (
  `id` int(11) NOT NULL,
  `frontcomment` text NOT NULL,
  `pic1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms_front`
--

INSERT INTO `rooms_front` (`id`, `frontcomment`, `pic1`) VALUES
(1, 'Rooms', 'gili-lankanfushi-5120x2880-maldives-best-hotels-of-2017-best-beaches-2863.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `pic1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `comment`, `pic1`) VALUES
(11, 'Service', 'reisetopia-bkdPrItKrrY-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_1`
--

CREATE TABLE `service_1` (
  `id` int(11) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_1`
--

INSERT INTO `service_1` (`id`, `content1`, `content2`) VALUES
(1, 'Our Services ', 'Explore Our ');

-- --------------------------------------------------------

--
-- Table structure for table `service_event`
--

CREATE TABLE `service_event` (
  `id` int(11) NOT NULL,
  `para9` text NOT NULL,
  `para10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_event`
--

INSERT INTO `service_event` (`id`, `para9`, `para10`) VALUES
(1, 'Event & Party ', '		Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																																');

-- --------------------------------------------------------

--
-- Table structure for table `service_fitness`
--

CREATE TABLE `service_fitness` (
  `id` int(11) NOT NULL,
  `para5` text NOT NULL,
  `para6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_fitness`
--

INSERT INTO `service_fitness` (`id`, `para5`, `para6`) VALUES
(1, 'Spa & Fitness ', '								Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																										');

-- --------------------------------------------------------

--
-- Table structure for table `service_food`
--

CREATE TABLE `service_food` (
  `id` int(11) NOT NULL,
  `para3` text NOT NULL,
  `para4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_food`
--

INSERT INTO `service_food` (`id`, `para3`, `para4`) VALUES
(0, 'Food & Restaurant ', '					Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																													');

-- --------------------------------------------------------

--
-- Table structure for table `service_room`
--

CREATE TABLE `service_room` (
  `id` int(11) NOT NULL,
  `para1` text NOT NULL,
  `para2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_room`
--

INSERT INTO `service_room` (`id`, `para1`, `para2`) VALUES
(1, 'Rooms & Appartment ', '		Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																																	');

-- --------------------------------------------------------

--
-- Table structure for table `service_sports`
--

CREATE TABLE `service_sports` (
  `id` int(11) NOT NULL,
  `para7` text NOT NULL,
  `para8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_sports`
--

INSERT INTO `service_sports` (`id`, `para7`, `para8`) VALUES
(1, 'Sports & Gaming ', '								Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																											');

-- --------------------------------------------------------

--
-- Table structure for table `service_yoga`
--

CREATE TABLE `service_yoga` (
  `id` int(11) NOT NULL,
  `para11` text NOT NULL,
  `para12` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_yoga`
--

INSERT INTO `service_yoga` (`id`, `para11`, `para12`) VALUES
(1, 'GYM & Yoga ', '										Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																								');

-- --------------------------------------------------------

--
-- Table structure for table `single_room`
--

CREATE TABLE `single_room` (
  `id` int(11) NOT NULL,
  `rate` text NOT NULL,
  `roomname` text NOT NULL,
  `bed` text NOT NULL,
  `bath` text NOT NULL,
  `wifi` text NOT NULL,
  `feature` text NOT NULL,
  `pic2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `single_room`
--

INSERT INTO `single_room` (`id`, `rate`, `roomname`, `bed`, `bath`, `wifi`, `feature`, `pic2`) VALUES
(4, '800 INR PER DAY ', 'SINGLE ROOM', '1 BED', '1 BATH', 'NON WIFI', '				Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																																																																', 'bed-1150578_1280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_1`
--

CREATE TABLE `staff_1` (
  `id` int(11) NOT NULL,
  `name1` text NOT NULL,
  `jobrole1` text NOT NULL,
  `pic5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_1`
--

INSERT INTO `staff_1` (`id`, `name1`, `jobrole1`, `pic5`) VALUES
(1, 'RAJ KUMAR', 'CEO', 'hr2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_2`
--

CREATE TABLE `staff_2` (
  `id` int(11) NOT NULL,
  `name2` text NOT NULL,
  `jobrole2` text NOT NULL,
  `pic6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_2`
--

INSERT INTO `staff_2` (`id`, `name2`, `jobrole2`, `pic6`) VALUES
(1, 'VIMAL', 'Revenue dept', 'hr3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `staff_3`
--

CREATE TABLE `staff_3` (
  `id` int(11) NOT NULL,
  `name3` text NOT NULL,
  `jobrole3` text NOT NULL,
  `pic7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_3`
--

INSERT INTO `staff_3` (`id`, `name3`, `jobrole3`, `pic7`) VALUES
(1, 'SOLAI', 'Cheif', 'mukesh ambani.webp');

-- --------------------------------------------------------

--
-- Table structure for table `staff_4`
--

CREATE TABLE `staff_4` (
  `id` int(11) NOT NULL,
  `name4` text NOT NULL,
  `jobrole4` text NOT NULL,
  `pic8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_4`
--

INSERT INTO `staff_4` (`id`, `name4`, `jobrole4`, `pic8`) VALUES
(1, 'Ziva', 'reseptionist', 'preety zinda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `id` int(11) NOT NULL,
  `para` text NOT NULL,
  `rooms` bigint(255) NOT NULL,
  `staffs` bigint(255) NOT NULL,
  `clients` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `para`, `rooms`, `staffs`, `clients`) VALUES
(1, 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet v\r\n													\r\n																																																																				', 100, 189, 101);

-- --------------------------------------------------------

--
-- Table structure for table `triple_room`
--

CREATE TABLE `triple_room` (
  `id` int(11) NOT NULL,
  `rate2` text NOT NULL,
  `roomname2` text NOT NULL,
  `bed2` text NOT NULL,
  `bath2` text NOT NULL,
  `wifi2` text NOT NULL,
  `feature2` text NOT NULL,
  `pic4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `triple_room`
--

INSERT INTO `triple_room` (`id`, `rate2`, `roomname2`, `bed2`, `bath2`, `wifi2`, `feature2`, `pic4`) VALUES
(1, '1900 INR PER DAY', 'TRIPLE ROOM', '3 BED', '3 BATH', 'PAID WIFI', '				Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.																																													', 'triple-bedroom.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_photos`
--
ALTER TABLE `about_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `back`
--
ALTER TABLE `back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_comments_1`
--
ALTER TABLE `client_comments_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_comments_2`
--
ALTER TABLE `client_comments_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_comments_3`
--
ALTER TABLE `client_comments_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_front_image`
--
ALTER TABLE `contact_front_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deluxe_suite`
--
ALTER TABLE `deluxe_suite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duble_room`
--
ALTER TABLE `duble_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive_suite`
--
ALTER TABLE `executive_suite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_body`
--
ALTER TABLE `home_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junior_suite`
--
ALTER TABLE `junior_suite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_content`
--
ALTER TABLE `main_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_content_1`
--
ALTER TABLE `main_content_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_1`
--
ALTER TABLE `reservation_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserv_front_image`
--
ALTER TABLE `reserv_front_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserv_side_image`
--
ALTER TABLE `reserv_side_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms_front`
--
ALTER TABLE `rooms_front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_1`
--
ALTER TABLE `service_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_event`
--
ALTER TABLE `service_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_fitness`
--
ALTER TABLE `service_fitness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_food`
--
ALTER TABLE `service_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_room`
--
ALTER TABLE `service_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_sports`
--
ALTER TABLE `service_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_yoga`
--
ALTER TABLE `service_yoga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_room`
--
ALTER TABLE `single_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_1`
--
ALTER TABLE `staff_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_2`
--
ALTER TABLE `staff_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_3`
--
ALTER TABLE `staff_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_4`
--
ALTER TABLE `staff_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triple_room`
--
ALTER TABLE `triple_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_photos`
--
ALTER TABLE `about_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `back`
--
ALTER TABLE `back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `client_comments_1`
--
ALTER TABLE `client_comments_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_comments_2`
--
ALTER TABLE `client_comments_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_comments_3`
--
ALTER TABLE `client_comments_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_front_image`
--
ALTER TABLE `contact_front_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deluxe_suite`
--
ALTER TABLE `deluxe_suite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `duble_room`
--
ALTER TABLE `duble_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `executive_suite`
--
ALTER TABLE `executive_suite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_body`
--
ALTER TABLE `home_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `junior_suite`
--
ALTER TABLE `junior_suite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_content`
--
ALTER TABLE `main_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `main_content_1`
--
ALTER TABLE `main_content_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservation_1`
--
ALTER TABLE `reservation_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reserv_front_image`
--
ALTER TABLE `reserv_front_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reserv_side_image`
--
ALTER TABLE `reserv_side_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms_front`
--
ALTER TABLE `rooms_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_1`
--
ALTER TABLE `service_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_event`
--
ALTER TABLE `service_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_fitness`
--
ALTER TABLE `service_fitness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_room`
--
ALTER TABLE `service_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_sports`
--
ALTER TABLE `service_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_yoga`
--
ALTER TABLE `service_yoga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `single_room`
--
ALTER TABLE `single_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff_1`
--
ALTER TABLE `staff_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_2`
--
ALTER TABLE `staff_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_3`
--
ALTER TABLE `staff_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_4`
--
ALTER TABLE `staff_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `triple_room`
--
ALTER TABLE `triple_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
