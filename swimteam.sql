-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2011 at 03:34 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swimteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `families`
--
drop database swimteam;
create database swimteam;
use swimteam;


CREATE TABLE IF NOT EXISTS `families` (
  `familyID` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `parentFirstName` varchar(20) DEFAULT NULL,
  `parentLastName` varchar(20) DEFAULT NULL,
  `yearJoined` int(4) DEFAULT NULL,
  `streetAddress` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `homePhone` varchar(20) DEFAULT NULL,
  `workPhone` varchar(20) DEFAULT NULL,
  `cellPhone` varchar(20) DEFAULT NULL,
  `accessLevel` char(1) DEFAULT NULL,
  `overallAFD` decimal(8,2) DEFAULT NULL,
  `currentAFD` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`familyID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`familyID`, `email`, `password`, `parentFirstName`, `parentLastName`, `yearJoined`, `streetAddress`, `city`, `state`, `zip`, `homePhone`, `workPhone`, `cellPhone`, `accessLevel`, `overallAFD`, `currentAFD`) VALUES
(1, 'tester1', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'tester1', 'tester1', 2011, 'add', 'city', 'state', 'zip', '5', '5', '5', '1', '0.00', '0.00'),
(2, 'tester2', '2aa60a8ff7fcd473d321e0146afd9e26df395147', 'tester2', 'tester2', 2011, 'add', 'city', 'state', 'zip', '5', '5', '5', '1', '0.00', '0.00'),
(4, 'tester4', 'a1d7584daaca4738d499ad7082886b01117275d8', 'tester4', 'tester4', 2011, 'add', 'city', 'state', 'zip', '5', '5', '5', '2', '0.00', '0.00'),
(5, 'pconnell89@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Patrick', 'Connelly', 2009, 'add', 'fred', 'va', '22401', '5404551673', '5407710492', '', '2', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `giftcards`
--

CREATE TABLE IF NOT EXISTS `giftcards` (
  `cardID` int(11) NOT NULL AUTO_INCREMENT,
  `orderFormCardID` varchar(10) NOT NULL,
  `vendor` varchar(60) NOT NULL,
  `cost` double NOT NULL DEFAULT '0',
  `percent` double NOT NULL DEFAULT '0',
  `type` varchar(30) NOT NULL,
  `isAvailable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cardID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=213 ;

--
-- Dumping data for table `giftcards`
--

INSERT INTO `giftcards` (`cardID`, `orderFormCardID`, `vendor`, `cost`, `percent`, `type`, `isAvailable`) VALUES
(1, '214', 'Applebee''s', 25, 8, 'National Restaurants', 1),
(2, '211', 'Applebee''s', 10, 8, 'National Restaurants', 1),
(3, '203', 'Arby''s', 10, 8, 'National Restaurants', 1),
(4, '234', 'Bob Evans', 20, 12, 'National Restaurants', 1),
(5, '226', 'Boston Market', 10, 12, 'National Restaurants', 1),
(6, '232', 'Bruster''s Ice Cream', 5, 8, 'National Restaurants', 1),
(7, '233', 'Burger King', 10, 4, 'National Restaurants', 1),
(8, '316', 'California Pizza Kitchen', 10, 4, 'National Restaurants', 1),
(9, '236', 'Carl''s Jrs.', 10, 9, 'National Restaurants', 1),
(10, '300', 'Cheesecake Factory', 25, 3, 'National Restaurants', 1),
(11, '302', 'Chili''s', 10, 10, 'National Restaurants', 1),
(12, '303', 'Chili''s', 25, 10, 'National Restaurants', 1),
(13, '301', 'Chipotle', 10, 10, 'National Restaurants', 1),
(14, '311', 'Chuck E. Cheese', 10, 8, 'National Restaurants', 1),
(15, '296', 'Cold Stone Creamery', 10, 8, 'National Restaurants', 1),
(16, '282', 'Cracker Barrel', 10, 9, 'National Restaurants', 1),
(17, '283', 'Cracker Barrel', 25, 9, 'National Restaurants', 1),
(18, '320', 'Dave & Buster''s', 25, 14, 'National Restaurants', 1),
(19, '325', 'Denny''s', 10, 7, 'National Restaurants', 1),
(20, '327', 'Domino''s Pizza', 10, 8, 'National Restaurants', 1),
(21, '32750', 'Dominos', 50, 8, 'National Restaurants', 1),
(22, '324', 'Dunkin Donuts', 10, 4, 'National Restaurants', 1),
(23, '374', 'Friendly''s', 25, 7, 'National Restaurants', 1),
(24, '373', 'Friendly''s', 5, 7, 'National Restaurants', 1),
(25, '350', 'Golden Corral', 25, 3, 'National Restaurants', 1),
(26, '328', 'Great Harvest Bread Company', 10, 8, 'National Restaurants', 1),
(27, '382', 'Hard Rock Cafe', 25, 8, 'National Restaurants', 1),
(28, '376', 'Hardee''s', 10, 8, 'National Restaurants', 1),
(29, '395', 'HoneyBaked Ham', 25, 15, 'National Restaurants', 1),
(30, '329', 'Islands Restaurant', 25, 8, 'National Restaurants', 1),
(31, '381', 'KFC', 5, 9, 'National Restaurants', 1),
(32, '383', 'Landry''sSeafood/RainforestCafe/ChartHouse/Saltgras', 20, 10, 'National Restaurants', 1),
(33, '385', 'Logan''s RoadHouse', 25, 8, 'National Restaurants', 1),
(34, '384', 'Long John Silver''s', 5, 9, 'National Restaurants', 1),
(35, '386', 'Max & Erma''s', 10, 13, 'National Restaurants', 1),
(36, '387', 'Mimi''s Cafe', 10, 8, 'National Restaurants', 1),
(37, '38725', 'Mimi''s Cafe', 25, 8, 'National Restaurants', 1),
(38, '405', 'Noodles Restaurants', 25, 4, 'National Restaurants', 1),
(39, '401', 'O''Charley''s', 10, 13, 'National Restaurants', 1),
(40, '402', 'O''Charley''s', 25, 13, 'National Restaurants', 1),
(41, '404', 'Old Country Buffet/Ryans', 25, 8, 'National Restaurants', 1),
(42, '342', 'OliveGarden/RedLobster/LONGHORN/BahamaBreeze/Capit', 10, 9, 'National Restaurants', 1),
(43, '343', 'OliveGarden/RedLobster/LONGHORN/BahamaBreeze/TheCa', 25, 9, 'National Restaurants', 1),
(44, '408', 'OutBack/Carrabba''s/Roy''s/Bonefish/Fleming''s', 25, 9, 'National Restaurants', 1),
(45, '418', 'P.F. Chang''s China Bistro', 25, 7, 'National Restaurants', 1),
(46, '820', 'Panera Bread', 10, 9, 'National Restaurants', 1),
(47, '411', 'PaPa John''s Pizza', 10, 8, 'National Restaurants', 1),
(48, '41150', 'Papa John''s Pizza', 50, 8, 'National Restaurants', 1),
(49, '412', 'Pizza Hut', 10, 8, 'National Restaurants', 1),
(50, '441', 'Qdoba Mexican Grill', 25, 7, 'National Restaurants', 1),
(51, '44510', 'Quiznos', 10, 11, 'National Restaurants', 1),
(52, '450', 'Red Robin', 10, 7, 'National Restaurants', 1),
(53, '454', 'Restaurant.com value)', 20, 50, 'National Restaurants', 1),
(54, '462', 'Ruby Tuesday', 10, 8, 'National Restaurants', 1),
(55, '463', 'Ruby Tuesday''s', 25, 8, 'National Restaurants', 1),
(56, '531', 'Starbucks', 10, 7, 'National Restaurants', 1),
(57, '532', 'Starbucks', 25, 7, 'National Restaurants', 1),
(58, '530', 'Starbucks', 5, 7, 'National Restaurants', 1),
(59, '489', 'Steak n Shake', 10, 8, 'National Restaurants', 1),
(60, '536', 'Subway', 10, 3, 'National Restaurants', 1),
(61, '485', 'Texas RoadHouse', 10, 8, 'National Restaurants', 1),
(62, '506', 'TGIFriday''s', 10, 9, 'National Restaurants', 1),
(63, '507', 'TGIFriday''s', 25, 9, 'National Restaurants', 1),
(64, '512', 'Wendy''s', 10, 4, 'National Restaurants', 1),
(65, '581', 'A?ropostale', 25, 8, 'National Retailers', 1),
(66, '619', 'American Eagle', 25, 8, 'National Retailers', 1),
(67, '603', 'AutoZone', 25, 9, 'National Retailers', 1),
(68, '633', 'Bass Pro Shops', 25, 8, 'National Retailers', 1),
(69, '621', 'Bath & Body Works', 10, 1, 'National Retailers', 1),
(70, '622', 'Bath & Body Works', 25, 1, 'National Retailers', 1),
(71, '634', 'Bath and Beyond', 25, 6, 'National Retailers', 1),
(72, '636', 'Belk', 100, 10, 'National Retailers', 1),
(73, '635', 'Belk''s', 25, 10, 'National Retailers', 1),
(74, '677', 'Brooks Brothers', 25, 14, 'National Retailers', 1),
(75, '654', 'Claire''s', 10, 9, 'National Retailers', 1),
(76, '671', 'Crate and Barrel', 25, 4, 'National Retailers', 1),
(77, '668', 'Dick''s Sporting Goods', 25, 5, 'National Retailers', 1),
(78, '667', 'Dillard''s', 25, 9, 'National Retailers', 1),
(79, '673', 'Disney', 25, 2, 'National Retailers', 1),
(80, '681', 'Eddie Bauer', 25, 7, 'National Retailers', 1),
(81, '68425', 'Express', 25, 11, 'National Retailers', 1),
(82, '682', 'Fashion Bug', 25, 7, 'National Retailers', 1),
(83, '689', 'Finishline', 25, 11, 'National Retailers', 1),
(84, '686', 'Footlocker', 25, 9, 'National Retailers', 1),
(85, '691', 'Gap, Old Navy, Banana Republic', 25, 9, 'National Retailers', 1),
(86, '68725', 'Guitar Center', 25, 5, 'National Retailers', 1),
(87, '692', 'Hallmark', 25, 4, 'National Retailers', 1),
(88, '370', 'Harry and David', 25, 11, 'National Retailers', 1),
(89, '720', 'J Jill', 25, 9, 'National Retailers', 1),
(90, '722', 'JCPenney', 25, 5, 'National Retailers', 1),
(91, '724', 'JCPenneys', 100, 5, 'National Retailers', 1),
(92, '731', 'Jo-Ann Fabrics', 20, 6, 'National Retailers', 1),
(93, '762', 'Kmart', 25, 4, 'National Retailers', 1),
(94, '790', 'Lord & Taylor', 25, 8, 'National Retailers', 1),
(95, '9829', 'Macy''s', 100, 10, 'National Retailers', 1),
(96, '829', 'Macy''s', 25, 10, 'National Retailers', 1),
(97, '805', 'Men''s WearHouse', 25, 7, 'National Retailers', 1),
(98, '795', 'Michael''s', 25, 4, 'National Retailers', 1),
(99, '823', 'Payless Shoes', 10, 18, 'National Retailers', 1),
(100, '818', 'PetSmart', 25, 4, 'National Retailers', 1),
(101, '825', 'Pier 1 Imports', 25, 9, 'National Retailers', 1),
(102, '817', 'Regis Salons', 25, 9, 'National Retailers', 1),
(103, '804', 'REI Stores', 25, 8, 'National Retailers', 1),
(104, '824', 'ROSS Dress For Less', 25, 9, 'National Retailers', 1),
(105, '850', 'Sally Beauty', 25, 14, 'National Retailers', 1),
(106, '833', 'Sears', 100, 4, 'National Retailers', 1),
(107, '830', 'Sears', 25, 4, 'National Retailers', 1),
(108, '832', 'Sears', 250, 4, 'National Retailers', 1),
(109, '83620', 'Sephora', 20, 5, 'National Retailers', 1),
(110, '828', 'Shoe Carnival', 25, 4, 'National Retailers', 1),
(111, '8262', 'Sport''s Authority', 25, 8, 'National Retailers', 1),
(112, '842', 'Sunglass Hut', 25, 9, 'National Retailers', 1),
(113, '8525', 'Talbots Gift Card', 25, 9, 'National Retailers', 1),
(114, '851', 'Tanger Outlet Stores', 25, 9, 'National Retailers', 1),
(115, '863', 'The Container Store', 25, 9, 'National Retailers', 1),
(116, '807', 'TJMaxx/Marshalls/HomeGoods/AJWright', 25, 7, 'National Retailers', 1),
(117, '928', 'Ulta Cosmetics', 25, 4, 'National Retailers', 1),
(118, '9892', 'Walmart', 100, 2, 'National Retailers', 1),
(119, '9890', 'Walmart', 25, 2, 'National Retailers', 1),
(120, '997', 'Williams & Sonoma', 25, 8, 'National Retailers', 1),
(121, '660', 'Build-A-Bear Workshop', 25, 8, 'Childrens Specialty Stores', 1),
(122, '696', 'Gymboree', 25, 13, 'Childrens Specialty Stores', 1),
(123, '772', 'The Children''s Place', 25, 9, 'Childrens Specialty Stores', 1),
(124, '8472', 'Toys R Us', 25, 2, 'Childrens Specialty Stores', 1),
(125, '846', 'ToysRUs', 10, 2, 'Childrens Specialty Stores', 1),
(126, '600', 'AMC Use Admission', 9.5, 16, 'Movie/Entertainment', 1),
(127, '779', 'AMC Loews Cineplex', 25, 7, 'Movie/Entertainment', 1),
(128, '925', 'Cinemark SuperSaver Ticket', 8.3, 10, 'Movie/Entertainment', 1),
(129, '711', 'F.Y.E.', 25, 6, 'Movie/Entertainment', 1),
(130, '698', 'Game Crazy', 25, 16, 'Movie/Entertainment', 1),
(131, '694', 'GameStop', 25, 3, 'Movie/Entertainment', 1),
(132, '687', 'Goodrich Quality Theaters', 10, 4, 'Movie/Entertainment', 1),
(133, '697', 'Hollywood Video', 25, 16, 'Movie/Entertainment', 1),
(134, '927', 'Regal/ United Artist SINGLE USE', 8.5, 11, 'Movie/Entertainment', 1),
(135, '843', 'Showcase Cinema', 9.5, 7, 'Movie/Entertainment', 1),
(136, '926', 'United Artists/Regal Theaters', 10, 8, 'Movie/Entertainment', 1),
(137, '640', 'Best Buy', 100, 2, 'Electronic/Technology', 1),
(138, '638', 'Best Buy', 25, 2, 'Electronic/Technology', 1),
(139, '810', 'Office Depot', 25, 3, 'Office Supplies', 1),
(140, '811', 'Office Max', 25, 4, 'Office Supplies', 1),
(141, '838100', 'Staples', 100, 5, 'Office Supplies', 1),
(142, '839', 'Staples', 25, 5, 'Office Supplies', 1),
(143, '612', 'Amazon.com', 25, 5, 'Catalog and On-line Stores', 1),
(144, '613', 'Amazon.com', 50, 5, 'Catalog and On-line Stores', 1),
(145, '623', 'Art.com', 25, 8, 'Catalog and On-line Stores', 1),
(146, '647', 'Cabela''s', 25, 11, 'Catalog and On-line Stores', 1),
(147, '710', 'iTunes', 15, 5, 'Catalog and On-line Stores', 1),
(148, '712', 'iTunes', 25, 5, 'Catalog and On-line Stores', 1),
(149, '7972', 'Jeff Gordon Gift Card', 25, 9, 'Catalog and On-line Stores', 1),
(150, '776', 'L.L.Bean', 25, 18, 'Catalog and On-line Stores', 1),
(151, '768100', 'Land''s End', 100, 14, 'Catalog and On-line Stores', 1),
(152, '768', 'Land''s End', 25, 14, 'Catalog and On-line Stores', 1),
(153, '398', 'Omaha Steaks', 25, 10, 'Catalog and On-line Stores', 1),
(154, '400', 'Omaha Steaks', 50, 10, 'Catalog and On-line Stores', 1),
(155, '399', 'Omaha Steaks Boardroom Collection', 115, 15, 'Catalog and On-line Stores', 1),
(156, '396', 'Omaha Steaks Chairman Collection', 85, 15, 'Catalog and On-line Stores', 1),
(157, '390', 'Omaha Steaks Executive Collection', 40, 15, 'Catalog and On-line Stores', 1),
(158, '391', 'Omaha Steaks President Collection', 60, 15, 'Catalog and On-line Stores', 1),
(159, '802', 'Orvis Retail&Catalog/On-line', 25, 18, 'Catalog and On-line Stores', 1),
(160, '814', 'Overstock.com', 25, 9, 'Catalog and On-line Stores', 1),
(161, '483', 'See''s Candies 1 lb', 16.1, 18, 'Catalog and On-line Stores', 1),
(162, '827', 'Shutterfly', 25, 9, 'Catalog and On-line Stores', 1),
(163, '657', 'CVS Gift Card', 25, 4, 'Pharmacy/Drug Stores', 1),
(164, '657100', 'CVS Gift Card', 100, 4, 'Pharmacy/Drug Stores', 1),
(165, '936', 'Walgreen''s', 100, 2, 'Pharmacy/Drug Stores', 1),
(166, '935', 'Walgreens', 25, 2, 'Pharmacy/Drug Stores', 1),
(167, '626', 'Barnes & Noble', 10, 9, 'Book Stores', 1),
(168, '627', 'Barnes & Noble', 25, 9, 'Book Stores', 1),
(169, '625', 'Barnes and Noble', 5, 9, 'Book Stores', 1),
(170, '981', 'Borders Books', 10, 9, 'Book Stores', 1),
(171, '982', 'Borders Books', 25, 9, 'Book Stores', 1),
(172, '599100', 'Ace Hardware', 100, 4, 'Home Improvement', 1),
(173, '599', 'Ace Hardware', 25, 4, 'Home Improvement', 1),
(174, '707', 'Home Depot', 1000, 4, 'Home Improvement', 1),
(175, '706', 'Home Depot', 500, 4, 'Home Improvement', 1),
(176, '709', 'Home Depot', 5000, 4, 'Home Improvement', 1),
(177, '704', 'Home Depot', 100, 4, 'Home Improvement', 1),
(178, '702', 'Home Depot', 25, 4, 'Home Improvement', 1),
(179, '703', 'Home Depot', 50, 4, 'Home Improvement', 1),
(180, '787', 'Lowe''s', 1000, 4, 'Home Improvement', 1),
(181, '784', 'Lowe''s', 100, 4, 'Home Improvement', 1),
(182, '782', 'Lowe''s', 25, 4, 'Home Improvement', 1),
(183, '783', 'Lowe''s', 50, 4, 'Home Improvement', 1),
(184, '786', 'Lowe''s', 500, 4, 'Home Improvement', 1),
(185, '789', 'Lowe''s', 5000, 4, 'Home Improvement', 1),
(186, '999', 'Carnival Cruise Lines', 100, 8, 'Hotels and Travel', 1),
(187, '1005', 'Choice Hotels', 100, 4, 'Hotels and Travel', 1),
(188, '674', 'Disney', 100, 2, 'Hotels and Travel', 1),
(189, '1020', 'Hyatt Hotels', 25, 8, 'Hotels and Travel', 1),
(190, '1003', 'Marriott', 100, 9, 'Hotels and Travel', 1),
(191, '1002', 'Marriott', 50, 9, 'Hotels and Travel', 1),
(192, '931', 'Advance Auto Parts', 25, 7, 'Automobile Care/Gas Cards', 1),
(193, '962100', 'BP', 100, 2, 'Automobile Care/Gas Cards', 1),
(194, '962', 'BP', 50, 2, 'Automobile Care/Gas Cards', 1),
(195, '900', 'Chevron Gas', 100, 2, 'Automobile Care/Gas Cards', 1),
(196, '902', 'Chevron Gas', 250, 2, 'Automobile Care/Gas Cards', 1),
(197, '901', 'Chevron Gas', 50, 2, 'Automobile Care/Gas Cards', 1),
(198, '953', 'Exxon/Mobil', 100, 2, 'Automobile Care/Gas Cards', 1),
(199, '952', 'Exxon/Mobil', 50, 2, 'Automobile Care/Gas Cards', 1),
(200, '721', 'Jiffy Lube', 25, 9, 'Automobile Care/Gas Cards', 1),
(201, '965', 'Sheetz', 50, 3, 'Automobile Care/Gas Cards', 1),
(202, '977', 'Shell', 100, 3, 'Automobile Care/Gas Cards', 1),
(203, '976', 'Shell', 25, 3, 'Automobile Care/Gas Cards', 1),
(204, '978', 'Shell', 50, 3, 'Automobile Care/Gas Cards', 1),
(205, '990', 'Speedway', 100, 4, 'Automobile Care/Gas Cards', 1),
(206, '989', 'Speedway', 50, 4, 'Automobile Care/Gas Cards', 1),
(207, '969100', 'Sunoco', 100, 2, 'Automobile Care/Gas Cards', 1),
(208, '969', 'Sunoco', 50, 2, 'Automobile Care/Gas Cards', 1),
(209, '1', 'Giant', 50, 5, 'Local Vendors', 1),
(210, '2', 'Bloom/ Food Lion', 50, 5, 'Local Vendors', 1),
(211, '3', 'Kohl''s', 25, 5, 'Local Vendors', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itemizedorder`
--

CREATE TABLE IF NOT EXISTS `itemizedorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  `cost` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `itemizedorder`
--


-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `familyID` int(11) NOT NULL,
  `datePlaced` date NOT NULL,
  `dateConfirmed` date DEFAULT NULL,
  `totalPaid` double(8,2) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------

--
-- Table structure for table `swimmers`
--

CREATE TABLE IF NOT EXISTS `swimmers` (
  `swimmerID` int(20) NOT NULL AUTO_INCREMENT,
  `swimmerFirstName` varchar(20) DEFAULT NULL,
  `swimmerMiddleInitial` char(1) DEFAULT NULL,
  `swimmerLastName` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `swimGroup` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`swimmerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `swimmers`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
