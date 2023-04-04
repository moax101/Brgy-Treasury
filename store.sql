-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2019 at 05:27 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `viewall`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `viewall` ()  begin 
select * from resident;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `history`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
`surname` varchar(150)
,`status` varchar(150)
,`brgy` varchar(150)
,`transaction1` varchar(150)
,`payment1` int(50)
,`pending1` varchar(150)
,`exec_time` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `history2`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `history2`;
CREATE TABLE IF NOT EXISTS `history2` (
`surname` varchar(150)
,`status` varchar(150)
,`brgy` varchar(150)
,`transaction2` varchar(150)
,`payment2` int(50)
,`pending2` varchar(150)
,`exec_time` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `history3`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `history3`;
CREATE TABLE IF NOT EXISTS `history3` (
`surname` varchar(150)
,`status` varchar(150)
,`brgy` varchar(150)
,`transaction3` varchar(150)
,`payment3` int(50)
,`pending3` varchar(150)
,`exec_time` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `payment1`
--

DROP TABLE IF EXISTS `payment1`;
CREATE TABLE IF NOT EXISTS `payment1` (
  `pay_no` int(11) NOT NULL AUTO_INCREMENT,
  `brgy_id` int(11) NOT NULL,
  `transaction1` varchar(150) DEFAULT NULL,
  `payment1` int(50) NOT NULL,
  `pending1` varchar(150) NOT NULL,
  PRIMARY KEY (`pay_no`),
  KEY `brgy_id` (`brgy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment1`
--

INSERT INTO `payment1` (`pay_no`, `brgy_id`, `transaction1`, `payment1`, `pending1`) VALUES
(1, 3, 'Barangay Clearance', 15, 'Pending');

--
-- Triggers `payment1`
--
DROP TRIGGER IF EXISTS `trig1`;
DELIMITER $$
CREATE TRIGGER `trig1` BEFORE INSERT ON `payment1` FOR EACH ROW insert into trigger_time(brgy_id, exec_time)
           values ( '3', '2019-01-10 16-43:30')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payment2`
--

DROP TABLE IF EXISTS `payment2`;
CREATE TABLE IF NOT EXISTS `payment2` (
  `pay_no` int(11) NOT NULL AUTO_INCREMENT,
  `brgy_id` int(11) DEFAULT NULL,
  `transaction2` varchar(150) DEFAULT NULL,
  `payment2` int(50) DEFAULT NULL,
  `pending2` varchar(150) NOT NULL,
  PRIMARY KEY (`pay_no`),
  KEY `brgy_id` (`brgy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment2`
--

INSERT INTO `payment2` (`pay_no`, `brgy_id`, `transaction2`, `payment2`, `pending2`) VALUES
(1, 3, 'Barangay Certificate', 15, 'Pending');

--
-- Triggers `payment2`
--
DROP TRIGGER IF EXISTS `trig2`;
DELIMITER $$
CREATE TRIGGER `trig2` BEFORE INSERT ON `payment2` FOR EACH ROW insert into trigger_time2(brgy_id, exec_time)
       values ( '3', '2019-01-10 16-49:30')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payment3`
--

DROP TABLE IF EXISTS `payment3`;
CREATE TABLE IF NOT EXISTS `payment3` (
  `pay_no` int(11) NOT NULL AUTO_INCREMENT,
  `brgy_id` int(11) DEFAULT NULL,
  `transaction3` varchar(150) DEFAULT NULL,
  `payment3` int(50) DEFAULT NULL,
  `pending3` varchar(150) NOT NULL,
  PRIMARY KEY (`pay_no`),
  KEY `brgy_id` (`brgy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment3`
--

INSERT INTO `payment3` (`pay_no`, `brgy_id`, `transaction3`, `payment3`, `pending3`) VALUES
(1, 8, 'Cedula', 8, 'Pending');

--
-- Triggers `payment3`
--
DROP TRIGGER IF EXISTS `trig3`;
DELIMITER $$
CREATE TRIGGER `trig3` BEFORE INSERT ON `payment3` FOR EACH ROW insert into trigger_time3(brgy_id, exec_time)
     values ( '8', '2019-01-10 16-51:11')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE IF NOT EXISTS `resident` (
  `brgy_id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `midname` varchar(150) NOT NULL,
  `bday` varchar(150) NOT NULL,
  `sex` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `brgy` varchar(150) NOT NULL,
  `district` varchar(150) NOT NULL,
  `purok` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  PRIMARY KEY (`brgy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`brgy_id`, `surname`, `firstname`, `midname`, `bday`, `sex`, `status`, `brgy`, `district`, `purok`, `city`) VALUES
(3, 'hermoso', 'romel', 'm', '1998-10-10', 'male', 'student', 'm', 'District 1', 'Purok 1', 'm'),
(6, 'm', 'Rhodel', 'N', '1998-10-11', 'male', 'single', 'N', 'District 1', 'Purok 1', 'N'),
(7, 'Buscas', 'M', 'M', '1998-09-09', 'male', 'married', 'M', 'District 1', 'Purok 1', 'M'),
(8, 'Nini', 'Q', 'Q', '1991-11-11', 'male', 'widow', '76-B', 'District 1', 'Purok 1', 'Q');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `single` int(50) DEFAULT NULL,
  `student` int(50) DEFAULT NULL,
  `widow` int(50) DEFAULT NULL,
  `married` int(50) DEFAULT NULL,
  `clearance` int(50) DEFAULT NULL,
  `certificate` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`single`, `student`, `widow`, `married`, `clearance`, `certificate`) VALUES
(0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time`
--

DROP TABLE IF EXISTS `trigger_time`;
CREATE TABLE IF NOT EXISTS `trigger_time` (
  `brgy_id` int(11) NOT NULL,
  `exec_time` datetime NOT NULL,
  KEY `brgy_id` (`brgy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time`
--

INSERT INTO `trigger_time` (`brgy_id`, `exec_time`) VALUES
(3, '2019-01-10 16:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time2`
--

DROP TABLE IF EXISTS `trigger_time2`;
CREATE TABLE IF NOT EXISTS `trigger_time2` (
  `brgy_id` int(11) NOT NULL,
  `exec_time` datetime NOT NULL,
  KEY `brgy_id` (`brgy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time2`
--

INSERT INTO `trigger_time2` (`brgy_id`, `exec_time`) VALUES
(3, '2019-01-10 16:48:23'),
(3, '2019-01-10 16:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time3`
--

DROP TABLE IF EXISTS `trigger_time3`;
CREATE TABLE IF NOT EXISTS `trigger_time3` (
  `brgy_id` int(11) NOT NULL,
  `exec_time` datetime NOT NULL,
  KEY `brgy_id` (`brgy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time3`
--

INSERT INTO `trigger_time3` (`brgy_id`, `exec_time`) VALUES
(8, '2019-01-10 16:51:11');

-- --------------------------------------------------------

--
-- Structure for view `history`
--
DROP TABLE IF EXISTS `history`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `history`  AS  select `resident`.`surname` AS `surname`,`resident`.`status` AS `status`,`resident`.`brgy` AS `brgy`,`payment1`.`transaction1` AS `transaction1`,`payment1`.`payment1` AS `payment1`,`payment1`.`pending1` AS `pending1`,`trigger_time`.`exec_time` AS `exec_time` from ((`resident` join `payment1`) join `trigger_time`) where ((`resident`.`brgy_id` = `payment1`.`brgy_id`) and (`resident`.`brgy_id` = `trigger_time`.`brgy_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `history2`
--
DROP TABLE IF EXISTS `history2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `history2`  AS  select `resident`.`surname` AS `surname`,`resident`.`status` AS `status`,`resident`.`brgy` AS `brgy`,`payment2`.`transaction2` AS `transaction2`,`payment2`.`payment2` AS `payment2`,`payment2`.`pending2` AS `pending2`,`trigger_time2`.`exec_time` AS `exec_time` from ((`resident` join `payment2`) join `trigger_time2`) where ((`resident`.`brgy_id` = `payment2`.`brgy_id`) and (`resident`.`brgy_id` = `trigger_time2`.`brgy_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `history3`
--
DROP TABLE IF EXISTS `history3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `history3`  AS  select `resident`.`surname` AS `surname`,`resident`.`status` AS `status`,`resident`.`brgy` AS `brgy`,`payment3`.`transaction3` AS `transaction3`,`payment3`.`payment3` AS `payment3`,`payment3`.`pending3` AS `pending3`,`trigger_time3`.`exec_time` AS `exec_time` from ((`resident` join `payment3`) join `trigger_time3`) where ((`resident`.`brgy_id` = `payment3`.`brgy_id`) and (`resident`.`brgy_id` = `trigger_time3`.`brgy_id`)) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment1`
--
ALTER TABLE `payment1`
  ADD CONSTRAINT `payment1_ibfk_1` FOREIGN KEY (`brgy_id`) REFERENCES `resident` (`brgy_id`);

--
-- Constraints for table `payment2`
--
ALTER TABLE `payment2`
  ADD CONSTRAINT `payment2_ibfk_1` FOREIGN KEY (`brgy_id`) REFERENCES `resident` (`brgy_id`);

--
-- Constraints for table `payment3`
--
ALTER TABLE `payment3`
  ADD CONSTRAINT `payment3_ibfk_1` FOREIGN KEY (`brgy_id`) REFERENCES `resident` (`brgy_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
