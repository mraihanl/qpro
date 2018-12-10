-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 03:29 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qpro`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `lap_stockonhand` (IN `isbnget` VARCHAR(13))  BEGIN
SELECT * FROM xgr WHERE isbn=isbnget;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'raihan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `do1`
--

CREATE TABLE `do1` (
  `id` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gr1`
--

CREATE TABLE `gr1` (
  `id` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rt1`
--

CREATE TABLE `rt1` (
  `id` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `si1`
--

CREATE TABLE `si1` (
  `id` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockbranch`
--

CREATE TABLE `stockbranch` (
  `id` int(11) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view1`
-- (See below for the actual view)
--
CREATE TABLE `view1` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_branch_data`
-- (See below for the actual view)
--
CREATE TABLE `v_branch_data` (
`id` varchar(5)
,`branch` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `xbranch`
--

CREATE TABLE `xbranch` (
  `id` varchar(5) NOT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `prefix` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xbranch`
--

INSERT INTO `xbranch` (`id`, `branch`, `prefix`) VALUES
('QPHO', 'Qisthi Press Pusat', NULL),
('QPJB', 'Qisthi Press Jawa Barat', 'XJB'),
('QPSU', 'Qisthi Press Sumatera Utara', 'XSU');

-- --------------------------------------------------------

--
-- Table structure for table `xbuku`
--

CREATE TABLE `xbuku` (
  `isbn` varchar(13) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `edisi` varchar(50) DEFAULT NULL,
  `cat` varchar(30) NOT NULL,
  `sellprice` int(11) NOT NULL,
  `costprice` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xbuku`
--

INSERT INTO `xbuku` (`isbn`, `judul`, `pengarang`, `tahun`, `edisi`, `cat`, `sellprice`, `costprice`) VALUES
('67890', 'Kupinang Engkau dengan Bismillah', 'Ustadz Fulan Lc', 2016, '10', 'Religi', 100000, 90000),
('12345', 'Pencerah Qolbu', 'Ibn Athaillah', 2015, '1', 'Religi', 125000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `xcust`
--

CREATE TABLE `xcust` (
  `id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `brcode` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `mail` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xcust`
--

INSERT INTO `xcust` (`id`, `code`, `brcode`, `name`, `npwp`, `telp`, `mail`, `contact`, `address`) VALUES
(4, 'TGA', 'QPHO', 'Toko Gunung Agung', '', '', '', '', 'Jl. Kwitang No. 6 Jakarta Pusat, Indonesia'),
(5, 'TGA', 'QPHO', 'Toko Gunung Agung', '', '', '', '', 'Jl. Kramat Kwitang No. 38, kwitang, senen, Jakarta Pusat 10420');

-- --------------------------------------------------------

--
-- Table structure for table `xdo`
--

CREATE TABLE `xdo` (
  `code` varchar(20) NOT NULL,
  `isbn` varchar(14) DEFAULT NULL,
  `tujuan` varchar(14) DEFAULT NULL,
  `trandate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xdo`
--

INSERT INTO `xdo` (`code`, `isbn`, `tujuan`, `trandate`) VALUES
('12345', '651235765123', 'Surya Citra PT', '2018-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `xgi`
--

CREATE TABLE `xgi` (
  `isbn` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `from` varchar(100) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL,
  `trandate` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xgi`
--

INSERT INTO `xgi` (`isbn`, `judul`, `from`, `to`, `trandate`, `qty`) VALUES
('812645', 'Masterpiece', 'QPHO', 'Sisma Warehouse', '2018-11-02 10:20:00', 3),
('812645', 'Masterpiece', 'QPHO', 'Bernard Warehouse', '2018-11-02 10:22:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `xgr`
--

CREATE TABLE `xgr` (
  `isbn` varchar(50) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL,
  `trandate` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xgr`
--

INSERT INTO `xgr` (`isbn`, `judul`, `from`, `to`, `trandate`, `qty`) VALUES
('812645', 'Masterpiece', 'Ceria Gemilang Sejahtera', 'Pusat', '2018-11-02 10:12:00', 8),
('812645', 'Masterpiece', 'Ceria Gemilang Sejahtera', 'Pusat', '2018-11-02 10:15:00', 7),
('30033', 'Tsubasa Ozora 2', 'Ceria Gemilang Sejahtera', 'Pusat', '2018-11-22 10:10:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `xgs`
--

CREATE TABLE `xgs` (
  `isbn` varchar(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `customer` varchar(40) DEFAULT NULL,
  `cabang` varchar(100) DEFAULT NULL,
  `trandate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `top` varchar(25) DEFAULT NULL,
  `amount` float NOT NULL,
  `discount` float NOT NULL,
  `tax` float NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `netamount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xgs`
--

INSERT INTO `xgs` (`isbn`, `judul`, `customer`, `cabang`, `trandate`, `top`, `amount`, `discount`, `tax`, `qty`, `netamount`) VALUES
('27637162', NULL, 'Waluyo', NULL, '2018-10-21 17:00:00', 'Cash', 30000, 5, 10, NULL, 31350),
('123', 'tes', 'Waluyo', 'Pusat', '2018-11-16 08:00:00', 'Cash', 40000, 0, 10, 1, 44000);

-- --------------------------------------------------------

--
-- Table structure for table `xip`
--

CREATE TABLE `xip` (
  `code` varchar(20) NOT NULL,
  `brcode` varchar(5) NOT NULL,
  `cscode` varchar(10) NOT NULL,
  `trandate` date NOT NULL,
  `sicode` varchar(20) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xip`
--

INSERT INTO `xip` (`code`, `brcode`, `cscode`, `trandate`, `sicode`, `amount`) VALUES
('1', '19', '18', '2018-06-21', '1', 20);

-- --------------------------------------------------------

--
-- Table structure for table `xrt`
--

CREATE TABLE `xrt` (
  `code` varchar(20) NOT NULL,
  `brcode` varchar(5) NOT NULL,
  `cscode` varchar(10) NOT NULL,
  `trandate` date NOT NULL,
  `sicode` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `discount` float NOT NULL,
  `tax` float NOT NULL,
  `netamount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xsp`
--

CREATE TABLE `xsp` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xsp`
--

INSERT INTO `xsp` (`id`, `nama`) VALUES
(3, 'Ceria Gemilang Sejahtera');

-- --------------------------------------------------------

--
-- Table structure for table `xst`
--

CREATE TABLE `xst` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xst`
--

INSERT INTO `xst` (`id`, `nama`) VALUES
(1, 'Store Name');

-- --------------------------------------------------------

--
-- Table structure for table `ych`
--

CREATE TABLE `ych` (
  `code` varchar(5) NOT NULL,
  `bpcode` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addsub` int(11) NOT NULL,
  `pct` int(11) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zro`
--

CREATE TABLE `zro` (
  `id` int(11) NOT NULL,
  `rolename` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zro`
--

INSERT INTO `zro` (`id`, `rolename`) VALUES
(1, 'Staff'),
(2, 'Warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `zus`
--

CREATE TABLE `zus` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rocode` varchar(100) NOT NULL,
  `cabang` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zus`
--

INSERT INTO `zus` (`username`, `password`, `mail`, `name`, `rocode`, `cabang`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'null@gmail.com', 'Superuser', 'admin', 'QPHO'),
('mraihanl', '51899e648dfd6cde439410566dea5b2a', 'raihan.firnadi@aplog.co', 'M. Raihan L.', 'Staff', 'Pusat'),
('andika', '1b7e0e0f2ef72bd844acb756645b4ea3', '', 'Andika P.', 'Warehouse', 'Sisma Warehouse');

-- --------------------------------------------------------

--
-- Structure for view `view1`
--
DROP TABLE IF EXISTS `view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view1`  AS  select `ybk`.`isbn` AS `isbn`,`ybk`.`judul` AS `judul`,`ybk`.`pengarang` AS `pengarang`,`ybk`.`tahun` AS `tahun`,`ybk`.`edisi` AS `edisi`,`ybk`.`cat` AS `cat`,`ybk`.`sellprice` AS `sellprice`,`ybk`.`costprice` AS `costprice` from `ybk` ;

-- --------------------------------------------------------

--
-- Structure for view `v_branch_data`
--
DROP TABLE IF EXISTS `v_branch_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_branch_data`  AS  select `xbranch`.`id` AS `id`,`xbranch`.`branch` AS `branch` from `xbranch` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `do1`
--
ALTER TABLE `do1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gr1`
--
ALTER TABLE `gr1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rt1`
--
ALTER TABLE `rt1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si1`
--
ALTER TABLE `si1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockbranch`
--
ALTER TABLE `stockbranch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xbranch`
--
ALTER TABLE `xbranch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xbuku`
--
ALTER TABLE `xbuku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `xcust`
--
ALTER TABLE `xcust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xdo`
--
ALTER TABLE `xdo`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `xip`
--
ALTER TABLE `xip`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `xrt`
--
ALTER TABLE `xrt`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `xsp`
--
ALTER TABLE `xsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xst`
--
ALTER TABLE `xst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ych`
--
ALTER TABLE `ych`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `zro`
--
ALTER TABLE `zro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zus`
--
ALTER TABLE `zus`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `do1`
--
ALTER TABLE `do1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gr1`
--
ALTER TABLE `gr1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rt1`
--
ALTER TABLE `rt1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `si1`
--
ALTER TABLE `si1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stockbranch`
--
ALTER TABLE `stockbranch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xcust`
--
ALTER TABLE `xcust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `xsp`
--
ALTER TABLE `xsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xst`
--
ALTER TABLE `xst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zro`
--
ALTER TABLE `zro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
