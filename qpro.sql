-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 09:16 AM
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
('812645', 'Masterpiece', 'Pusat', 'Sisma Warehouse', '2018-11-02 10:20:00', 3),
('812645', 'Masterpiece', 'Pusat', 'Bernard Warehouse', '2018-11-02 10:22:00', 5);

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
('812645', 'Masterpiece', 'Ceria Gemilang Sejahtera', 'Pusat', '2018-11-02 10:15:00', 7);

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
-- Table structure for table `xsi`
--

CREATE TABLE `xsi` (
  `isbn` varchar(20) NOT NULL,
  `customer` varchar(40) DEFAULT NULL,
  `trandate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `top` varchar(25) DEFAULT NULL,
  `amount` float NOT NULL,
  `discount` float NOT NULL,
  `tax` float NOT NULL,
  `netamount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xsi`
--

INSERT INTO `xsi` (`isbn`, `customer`, `trandate`, `top`, `amount`, `discount`, `tax`, `netamount`) VALUES
('27637162', 'Waluyo', '2018-10-21 17:00:00', 'Cash', 30000, 5, 10, 31350);

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
-- Table structure for table `ybk`
--

CREATE TABLE `ybk` (
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
-- Dumping data for table `ybk`
--

INSERT INTO `ybk` (`isbn`, `judul`, `pengarang`, `tahun`, `edisi`, `cat`, `sellprice`, `costprice`) VALUES
('62153213', 'Cahaya Ilahi', 'Raihan', 2012, 'Cetakan ke-1', 'Religi', 30000, 25000),
('30033', 'Tsubasa Ozora 2', 'Raihan', 2015, NULL, 'shounen', 23300, 20000),
('812645', 'Masterpiece', 'Frans', 2015, NULL, 'Magic', 200000, 120000),
('67876', 'Fairy Tail', 'Hiro Mashima', 2012, NULL, 'Fantasi, Fiksi', 25000, 20000),
('61253', 'Tauladan', 'Eren', NULL, NULL, 'Rohani', 20000, 15000),
('6523654', 'Dunia Baru', 'Anji', NULL, NULL, 'Rohani', 30000, 17000),
('34522', 'Test Book', 'Andika', NULL, NULL, 'Test', 25000, 2000),
('1234567', '99 Nama Allah', 'Qisthi', NULL, NULL, 'Religi', 30000, 3000),
('1234523', 'Juice 101', 'Andika', NULL, NULL, 'Culinary', 25000, 2000),
('111999', 'Test', 'Andika', NULL, NULL, 'Anime', 100000, 2300),
('90001', 'New Book', 'Raihan', NULL, NULL, 'Thriller', 23300, 16500),
('2137632', 'Cahaya Matahari', 'Ibnu', NULL, NULL, 'Religi', 125000, 100000);

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
-- Table structure for table `ycs`
--

CREATE TABLE `ycs` (
  `code` int(11) NOT NULL,
  `brcode` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ycs`
--

INSERT INTO `ycs` (`code`, `brcode`, `name`, `npwp`, `telp`, `mail`, `contact`, `address`) VALUES
(71240, 'BDG', 'Surya Citra PT', '77288812731', '022553432', 'Surya.cs@surya.com', 'Adi', 'Jl. Demangan 3 Utara'),
(71241, 'JKT', 'Dan\'s Book Collection', '6284639274', '021344535', 'dan.bc@gmail.com', 'Lee Tuk', 'Jl. Amper');

-- --------------------------------------------------------

--
-- Table structure for table `zbr`
--

CREATE TABLE `zbr` (
  `code` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `area` varchar(10) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zbr`
--

INSERT INTO `zbr` (`code`, `name`, `area`, `telp`, `mail`, `contact`, `address`) VALUES
(2, 'Sisma Warehouse', 'East', '0216334457', 'Sisma.w@sisma.co.id', 'Maruf', 'Petrus East'),
(3, 'Bernard Warehouse', 'West', '02161727634', 'Bernard.fto@gmail.co', 'Dinar', 'Jl. Sukamaju Rakyat'),
(4, 'Pusat', 'Bekasi', '021762732', 'email', 'kontak', 'jl Bekasi');

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
('admin', '0192023a7bbd73250516f069df18b500', 'null@gmail.com', 'Superuser', 'admin', 'Pusat'),
('mraihanl', '51899e648dfd6cde439410566dea5b2a', 'raihan.firnadi@aplog.co', 'M. Raihan L.', 'Staff', 'Pusat'),
('andika', '1b7e0e0f2ef72bd844acb756645b4ea3', '', 'Andika P.', 'Warehouse', 'Sisma Warehouse');

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
-- Indexes for table `xsi`
--
ALTER TABLE `xsi`
  ADD PRIMARY KEY (`isbn`);

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
-- Indexes for table `ybk`
--
ALTER TABLE `ybk`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `ych`
--
ALTER TABLE `ych`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `ycs`
--
ALTER TABLE `ycs`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `zbr`
--
ALTER TABLE `zbr`
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
-- AUTO_INCREMENT for table `ycs`
--
ALTER TABLE `ycs`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71242;

--
-- AUTO_INCREMENT for table `zbr`
--
ALTER TABLE `zbr`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zro`
--
ALTER TABLE `zro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
