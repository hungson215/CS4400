-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 25, 2016 at 05:28 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TrainSystem_v02`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(18) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_student` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `email`, `is_student`) VALUES
('bobama3', 'bobama3@gatech.edu', 1),
('bsanders3', 'bsander3@gatech.edu', 1),
('cbing3', 'cbing3@gmail.com', 0),
('chillary3', 'chillary3@gatech.edu', 1),
('dfa', 'daivinhtran@ff.com', 0),
('dtrump3', 'dtrump3@gatech.edu', 1),
('haha', 'haha@haha.co', 0),
('hchaudhry3', 'hchaudhry3@gmail.com', 0),
('hosna', 'hosnafc@gmail.com', 0),
('jrosenfield3', 'jrosenfield3@gatech.edu', 1),
('jtribbiani3', 'jtribbiani3@gmail.com', 0),
('mgeller3', 'mgeller3@gmail.com', 0),
('mrubio3', 'mrubio3@gatech.edu', 1),
('pbuffay3', 'pbuffay3@gmail.com', 0),
('psaboo3', 'psaboo3@gmail.com', 0),
('rgeller3', 'rgeller3@gmail.com', 0),
('rgreen3', 'rgreen3@gmail.com', 0),
('scagle3', 'scagle3@gatech.edu', 1),
('Sim', 'simkieu@gatech.edu', 0),
('sneh3', 'sneh3@gatech.edu', 1),
('snguyen3', 'snguyen3@gmail.com', 0),
('son', 'abc@gmail.com', 1),
('tcruz3', 'tcruz3@gatech.edu', 1),
('vinh', 'vinh_tran@gatech.edu', 1),
('VinhTran', 'daivinhtran.vt@gmail.com', 0),
('vleblanc3', 'vleblanc3@gatech.edu', 1),
('vtran3', 'vtran3@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(18) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`) VALUES
('admin'),
('bleahy3'),
('csimpkins3'),
('eomiecinski3'),
('iessa3'),
('msweat3');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `card_number` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cvv` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` date NOT NULL,
  `name_on_card` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(18) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`card_number`, `cvv`, `exp_date`, `name_on_card`, `username`) VALUES
('1111222233334444', '111', '2014-06-01', 'Pragya Saboo', 'psaboo3'),
('1111999922228888', '333', '2016-12-01', 'Rachel Green', 'rgreen3'),
('1234567823456789', '459', '2017-06-05', 'Son Nguyen', 'son'),
('1234567890123456', '123', '2016-08-21', 'Pragya Saboo', 'psaboo3'),
('123456789456', '124', '2016-04-23', 'nhan dai tran', 'vinh'),
('2222111133336666', '222', '2016-09-15', 'Donald Trump', 'dtrump3'),
('2222111144443333', '628', '2017-03-08', 'Hosna Chaudhry', 'hchaudhry3'),
('2222333344445555', '222', '2016-06-08', 'Hillary Clinton', 'chillary3'),
('3111716289360375', '937', '2016-09-28', 'Son Nguyen', 'snguyen3'),
('3333444455556666', '333', '2017-11-10', 'Hillary Clinton', 'chillary3'),
('5555444433332222', '555', '2017-07-17', 'Donald Trump', 'dtrump3'),
('6123999944562386', '986', '2016-06-28', 'Rachel Green', 'rgreen3'),
('9876222210121', '678', '2016-03-17', 'Hoang', 'vinh'),
('9999888800007777', '777', '2017-03-15', 'Vinh Tran', 'vtran3'),
('9999888877776666', '999', '2016-02-14', 'Vinh Tran', 'vtran3');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationid` int(11) NOT NULL,
  `username` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_number` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_cancel` tinyint(1) DEFAULT '0',
  `total_cost` float(100,2) DEFAULT '0.00',
  `departure_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationid`, `username`, `card_number`, `is_cancel`, `total_cost`, `departure_date`) VALUES
(1, 'vinh', NULL, 1, 42.40, '0000-00-00'),
(2, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(3, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(4, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(5, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(6, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(7, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(8, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(9, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(10, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(11, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(12, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(13, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(14, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(15, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(16, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(17, 'vinh', '9876222210121', 1, 42.40, '0000-00-00'),
(18, 'vinh', '123456789456', 1, 53.92, '0000-00-00'),
(19, 'vinh', '123456789456', 0, 236.00, '2016-04-14'),
(20, 'vinh', '9876222210121', 0, 144.00, '2016-04-14'),
(21, 'vinh', '9876222210121', 0, 144.00, '2016-04-14'),
(22, 'vinh', '123456789456', 0, 212.00, '2016-06-09'),
(23, 'dtrump3', '2222111133336666', 0, 150.00, '2016-05-01'),
(24, 'chillary3', '3333444455556666', 0, 150.00, '2016-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `reservationid` int(11) NOT NULL,
  `train_number` varchar(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `class` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `depart_arrival_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passenger_name` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_bags` int(11) NOT NULL,
  `depart_from` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `arrive_at` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(100,2) NOT NULL,
  `departure_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`reservationid`, `train_number`, `class`, `depart_arrival_time`, `passenger_name`, `number_of_bags`, `depart_from`, `arrive_at`, `price`, `departure_date`) VALUES
(4, '1331 Regional', 'first', '0000-00-00', 'Vinh', 3, 'Atlanta', 'Vietnam', 0.00, '0000-00-00'),
(14, '1332 Express', 'second', '02:05:00-South Carolina(Clemson)', 'fdas', 3, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 0.00, '0000-00-00'),
(14, '4400 Express', 'second', '01:25:00-South Carolina(Clemson)', 'jkhkj', 0, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 0.00, '0000-00-00'),
(16, '1332 Express', 'first', '02:05:00-04:00:00', 'fdsa', 4, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 0.00, '0000-00-00'),
(17, '1332 Express', 'first', '02:05:00-04:00:00', 'fdsa', 0, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 265.00, '0000-00-00'),
(18, '4400 Express', 'second', '01:25:00-03:00:0', 'dfas', 4, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 97.00, '0000-00-00'),
(19, '1332 Express', 'first', '02:05:00-04:00:00', 'fdsa', 3, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 265.00, '0000-00-00'),
(21, '4400 Express', 'first', '01:25:00-03:00:00', 'tra', 3, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 150.00, '2016-04-13'),
(22, '1332 Express', 'first', '02:05:00-04:00:00', 'vinh', 0, 'Georgia(Atlanta)', 'South Carolina(Clemson)', 265.00, '2016-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `username` varchar(18) COLLATE utf8_unicode_ci DEFAULT NULL,
  `train_number` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `rating` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `username`, `train_number`, `comment`, `rating`) VALUES
(5, 'vinh', '2110 Regional', 'WOWOWW It''s amazing', 'Neutral'),
(6, 'vinh', '1332 Express', 'trahhthahs', 'Good'),
(7, 'vinh', '1331 Regional', 'fdsafd', 'Good'),
(8, 'vinh', '1331 Regional', 'fdasfasdf', 'Good'),
(9, 'vinh', '1331 Regional', 'jlkfdjsaf;dsa', 'Good'),
(90, 'hchaudhry3', '1332 Express', 'The ride was just okay. A little bumpy.', '4'),
(91, 'psaboo3', '4400 Express', 'Great ride', '5'),
(110, 'bobama3', '2050 Express', 'Uncomfortable and slow', '2'),
(111, 'vtran3', '1331 Regional', 'Great value!', '5'),
(112, 'chillary3', '2110 Regional', 'HORRIBLE!! Would not recommend', '1'),
(113, 'snguyen3', '3311 Express', 'It was okay, could have been cleaner', '4'),
(114, 'tcruz3', '2200 Regional', 'Awful experience', '2'),
(115, 'rgreen3', '3012 Regional', 'Great ride', '5'),
(116, 'cbing3', '4400 Express', 'OK', '3'),
(117, 'mrubio3', '2050 Express', 'Not horrible', '3'),
(140, 'scagle3', '4400 Express', 'Mediocre', '3'),
(141, 'jtribbiani3', '2050 Express', 'Great service', '4'),
(142, 'pbuffay3', '1331 Regional', 'OK', '4'),
(143, 'jrosenfield3', '2110 Regional', 'Great ride!', '4'),
(144, 'vleblanc3', '3311 Express', 'Would ride again', '5'),
(148, 'dtrump3', '3012 Regional', 'Dirty and uncomfortable train. Dont waste your money', '1');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_name` varchar(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `location` varchar(36) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_name`, `location`) VALUES
('Atlanta', 'Georgia'),
('Chicago', 'Illinois'),
('Clemson', 'South Carolina'),
('Dallas', 'Texas'),
('Detroit', 'Michigan'),
('Manhattan', 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `stop_at`
--

CREATE TABLE `stop_at` (
  `train_number` varchar(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `station_name` varchar(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `arrival_time` time NOT NULL,
  `depart_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stop_at`
--

INSERT INTO `stop_at` (`train_number`, `station_name`, `arrival_time`, `depart_time`) VALUES
('1331 Regional', 'Clemson', '02:10:00', '02:15:00'),
('1331 Regional', 'Detroit', '11:00:00', '11:05:00'),
('1331 Regional', 'Manhattan', '07:00:00', '07:05:00'),
('1332 Express', 'Atlanta', '02:00:00', '02:05:00'),
('1332 Express', 'Clemson', '04:00:00', '04:05:00'),
('1332 Express', 'Dallas', '07:00:00', '07:05:00'),
('2050 Express', 'Chicago', '10:00:00', '10:05:00'),
('2050 Express', 'Detroit', '05:00:00', '05:05:00'),
('2050 Express', 'Manhattan', '03:00:00', '03:05:00'),
('2110 Regional', 'Atlanta', '10:00:00', '10:05:00'),
('2110 Regional', 'Clemson', '08:00:00', '08:05:00'),
('2110 Regional', 'Manhattan', '01:15:00', '01:20:00'),
('2200 Regional', 'Atlanta', '11:00:00', '11:05:00'),
('2200 Regional', 'Chicago', '02:15:00', '02:20:00'),
('2200 Regional', 'Dallas', '08:00:00', '08:05:00'),
('3012 Regional', 'Chicago', '08:30:00', '08:35:00'),
('3012 Regional', 'Clemson', '04:15:00', '04:20:00'),
('3012 Regional', 'Manhattan', '11:20:00', '11:25:00'),
('3311 Express', 'Chicago', '06:00:00', '06:05:00'),
('3311 Express', 'Dallas', '04:00:00', '04:15:00'),
('3311 Express', 'Detroit', '10:00:00', '10:05:00'),
('4400 Express', 'Atlanta', '01:20:00', '01:25:00'),
('4400 Express', 'Clemson', '03:00:00', '03:05:00'),
('4400 Express', 'Manhattan', '08:15:00', '08:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `max_baggages` int(11) NOT NULL DEFAULT '0',
  `free_baggages` int(11) DEFAULT NULL,
  `student_discount` float(4,2) DEFAULT '0.00',
  `change_fee` float(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `train_route`
--

CREATE TABLE `train_route` (
  `train_number` varchar(36) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `first_class_price` float(5,2) NOT NULL,
  `second_class_price` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `train_route`
--

INSERT INTO `train_route` (`train_number`, `first_class_price`, `second_class_price`) VALUES
('1331 Regional', 185.00, 99.00),
('1332 Express', 265.00, 150.00),
('2050 Express', 205.00, 135.00),
('2110 Regional', 300.00, 220.00),
('2200 Regional', 280.00, 164.00),
('3012 Regional', 99.00, 50.00),
('3311 Express', 125.00, 70.00),
('4400 Express', 150.00, 97.00),
('ATL12', 101.01, 102.01);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(18) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '$2y$10$aLnNfUzVYargZTglYLe5Iei6IQj/n5qaiCPFxKJGBM48qpQozq6Oi'),
('bleahy3', '123'),
('bobama3', '$2y$10$h.1e3hhYmTBEoul44c9r3ey76lS3zO7eqw6YNN8cfArQR0CnP8/SG'),
('bsanders3', '$2y$10$mQ4f8mli9J92oORuJ2NDtuKuI/ndtxpI3Bz89j3aDsAYPwY67ObO.'),
('cbing3', '$2y$10$wqhuYUsSuITnjw9dEdHsru80Q3FNefqukOpvVMCN1sGf3I2lU3ro6'),
('chillary3', '$2y$10$jK4RQ.MQGyjViFP07ikKy./WC7VmZjxN2WKoX/SMzfmKi0KPj4HEK'),
('csimpkins3', '123'),
('dfa', '$2y$10$ydPAtnYF6mY0vJ5m0T9G9O0czC2dCbw3r8u8/cGhrCw6ejsh9It7y'),
('dtrump3', '$2y$10$IRV5WeZ6RqQQ3E04BEu7SeJVU.l1jvEDHY6OgpNikW9eqed0.Gx9i'),
('eomiecinski3', '123'),
('haha', '$2y$10$wHQcwFo5h1ohNFrqc/70He9UYHJpJPQ77nLDvNWTXAOgKhSF0pggG'),
('hchaudhry3', '$2y$10$fcS0IhUYlSJcSFl.qq0zh.uiJuyhLa3Ybp7K1bZdQS1jovz89Wgom'),
('hosna', '$2y$10$x1O4AOQqGWFzVF5.IDeRQeM6R7IryCtW4NAVRjquwUv2PoWZVDHZm'),
('iessa3', '123'),
('jrosenfield3', '$2y$10$/QOqrL9EG9dzvH7XeBLkguDBXv.5PI0087lg32J8cWoMKSR1GTAuy'),
('jtribbiani3', '$2y$10$Ph04dYCzlaD7zDu5551KVeLo0e4Kse.NzhrxchlApDaYIZ5z0vJW6'),
('mgeller3', '$2y$10$hSjdpPysABYnrBfV.FLgee5DnF0oPhb6VN4dqax8KnlY1lNlXPEwG'),
('mrubio3', '$2y$10$41Lgk6Xsg.5te0pM1ykRBepR4q4ivQm.ka/ypTJSq3rAa/wVNnwWK'),
('msweat3', '123'),
('pbuffay3', '$2y$10$5k7.PuEEGaLZ1SMKUJlPSOh8n8Ks/O7HwWY31Q.1MV3rmWVnxtrg6'),
('psaboo3', '$2y$10$R46h4ShXNgELK82r317QqunHX4lUgtUGP0YT/4cu//ztsKISIYplS'),
('rgeller3', '$2y$10$VdPlvyu4T4b45UAp7ww8UeBgf5QoEDHT7h2/ZGjZM3oHq4pKESTOa'),
('rgreen3', '$2y$10$s5M8ZK3K6YYJ5W32W6t7EeCMJ203qZgSU4vhSjo1psiSDsPzYytIK'),
('scagle3', '$2y$10$SYjxTVWSKYyomasU9pkofegS.9zpcI0ddh9eEHzmqbP/cgkyaBpkK'),
('Sim', '$2y$10$Vcc0A36Gsl8h/Y19c91VAOr598o9qS7NdAx0CjZcI7wmB3/01iE2S'),
('sneh3', '$2y$10$b3jE8fKt2teB3KcJl1swteYckgbyyEfZjTDCWaNZ1.rDjo5yEix1e'),
('snguyen3', '$2y$10$B7OzRVZ6I1dxVx/wZdz5zeNGwhXnGGQ4jrOhwOLyMCYDCdSTKouby'),
('son', '$2y$10$w5DpvRsdNRVATaIhjMGtV.DbPb3N6IkDiWmfq1tZdECUzps3hU0di'),
('tcruz3', '$2y$10$PH.qkbZdxCjY1LRTrAAEQ.PPrLMob3.WOIVOeXkAvVFWHiUIxOMay'),
('vinh', '$2y$10$5VTNmYlskPAapVWIIkb2ZO9tqg3gmCXB1x.ycDESjh/fTwSOn5S/2'),
('VinhTran', '$2y$10$Vs.nDBUrrgbYso3jgl3aTufhh5TGwxCFNbW4Urf2uoC87mkkIQMJq'),
('vleblanc3', '$2y$10$ByTUr5PKNKbq.jUcTs7DfOLKT4BSNH2i8xdFj3SbokPVH9rSe6ZDW'),
('vtran3', '$2y$10$6sNrvmfnGwkXdxptcM/W8.b4upKPQJ.zfjH61FiDMvexEHX4Zs5r6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`card_number`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationid`),
  ADD KEY `username` (`username`),
  ADD KEY `card_number` (`card_number`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`reservationid`,`train_number`),
  ADD KEY `train_number` (`train_number`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `username` (`username`),
  ADD KEY `train_number` (`train_number`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_name`);

--
-- Indexes for table `stop_at`
--
ALTER TABLE `stop_at`
  ADD PRIMARY KEY (`train_number`,`station_name`),
  ADD KEY `station_name` (`station_name`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`max_baggages`);

--
-- Indexes for table `train_route`
--
ALTER TABLE `train_route`
  ADD PRIMARY KEY (`train_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD CONSTRAINT `payment_info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`card_number`) REFERENCES `payment_info` (`card_number`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`reservationid`) REFERENCES `reservation` (`reservationid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`train_number`) REFERENCES `train_route` (`train_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`train_number`) REFERENCES `train_route` (`train_number`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `stop_at`
--
ALTER TABLE `stop_at`
  ADD CONSTRAINT `stop_at_ibfk_1` FOREIGN KEY (`train_number`) REFERENCES `train_route` (`train_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stop_at_ibfk_2` FOREIGN KEY (`station_name`) REFERENCES `station` (`station_name`) ON DELETE CASCADE ON UPDATE CASCADE;
