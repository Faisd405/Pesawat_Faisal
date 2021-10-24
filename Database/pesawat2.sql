-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 09:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesawat2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_konsumen` (IN `nama` VARCHAR(50), IN `email` VARCHAR(32), IN `password` VARCHAR(32), IN `alamat` VARCHAR(32), IN `no_telp` INT(11), IN `kelamin` VARCHAR(32), IN `TTL` VARCHAR(50))  NO SQL
BEGIN INSERT INTO konsumen ( nama_konsumen, alamat, no_telp, kelamin, TTL, email, password) 
VALUES (nama, alamat, no_telp, kelamin, TTL, email, password);END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'zzz', '123'),
(2, 'buah', 'mangga');

-- --------------------------------------------------------

--
-- Table structure for table `bandara_asal`
--

CREATE TABLE `bandara_asal` (
  `id_bandara_asal` int(11) NOT NULL,
  `nama_bandara_asal` varchar(35) NOT NULL,
  `tempat_bandara_asal` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bandara_asal`
--

INSERT INTO `bandara_asal` (`id_bandara_asal`, `nama_bandara_asal`, `tempat_bandara_asal`) VALUES
(5, 'Soekarno-Hatta', 'Jakarta'),
(7, 'Hasanudin', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `bandara_tujuan`
--

CREATE TABLE `bandara_tujuan` (
  `id_bandara_tujuan` int(11) NOT NULL,
  `nama_bandara_tujuan` varchar(35) NOT NULL,
  `tempat_bandara_tujuan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bandara_tujuan`
--

INSERT INTO `bandara_tujuan` (`id_bandara_tujuan`, `nama_bandara_tujuan`, `tempat_bandara_tujuan`) VALUES
(5, 'Soekarno-Hatta', 'Jakarta'),
(7, 'Hasanudin', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `id_bandara_tujuan` int(11) NOT NULL,
  `id_bandara_asal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(40) NOT NULL,
  `jumlah_tiket` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_maskapai`, `id_bandara_tujuan`, `id_bandara_asal`, `tanggal`, `harga`, `jumlah_tiket`) VALUES
(45, 2, 7, 5, '2021-04-14', 5000000, 13),
(47, 1, 7, 5, '2021-04-10', 500000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas_pesawat` varchar(32) NOT NULL,
  `harga_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas_pesawat`, `harga_kelas`) VALUES
(1, 'Ekonomi', 1000000),
(2, 'Bisnis', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `kelamin` varchar(32) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_konsumen`, `alamat`, `no_telp`, `kelamin`, `TTL`, `email`, `password`) VALUES
(1, 'Faisal asik', 'Bandung', 821, 'Pria', 'Bandung, 21-9-2019', 'faisd405@gmail.com', 'a'),
(4, 'isal', 'isal', 12, 'isal', 'isal', 'isal@gmail.com', 'isal'),
(7, 'angga aditia', 'soreang', 821, 'Pria', 'Yogyakarta, 2021-04-02', 'angga@gmail.com', 'angga');

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(11) NOT NULL,
  `metode` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode`
--

INSERT INTO `metode` (`id_metode`, `metode`) VALUES
(5, 'Kredit Card - Danamon'),
(6, 'Kredit Card - BNI'),
(7, 'Kredit Card - BRI'),
(9, 'Transfer Bank');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `kelamin` varchar(32) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `kelamin`, `no_telp`, `username`, `password`) VALUES
(1, 'nama', 'Wanita', 21, 'masaa', 'bogor');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `harga` int(50) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_konsumen`, `id_jadwal`, `jumlah_tiket`, `id_kelas`, `harga`, `id_metode`, `status`) VALUES
(45, 1, 47, 2, 1, 3000000, 5, 'sudah dibayar'),
(46, 7, 45, 2, 1, 12000000, 5, 'Belum Dibayar'),
(47, 7, 45, 5, 2, 32500000, 7, 'Belum Dibayar');

--
-- Triggers `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `update_bangku` AFTER INSERT ON `pembayaran` FOR EACH ROW BEGIN
UPDATE jadwal SET jumlah_tiket = jumlah_tiket - NEW.jumlah_tiket WHERE
id_jadwal = NEW.id_jadwal;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_maskapai` int(11) NOT NULL,
  `nama_maskapai` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_maskapai`, `nama_maskapai`) VALUES
(1, 'Lion'),
(2, 'Airasia');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_jadwal`
-- (See below for the actual view)
--
CREATE TABLE `tampil_jadwal` (
`id_jadwal` int(11)
,`nama_maskapai` varchar(35)
,`nama_bandara_tujuan` varchar(35)
,`tempat_bandara_tujuan` varchar(35)
,`nama_bandara_asal` varchar(35)
,`tempat_bandara_asal` varchar(35)
,`tanggal` date
,`harga` int(40)
,`jumlah_tiket` int(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_pembayaran`
-- (See below for the actual view)
--
CREATE TABLE `tampil_pembayaran` (
`id_pembayaran` int(11)
,`id_konsumen` int(11)
,`nama_konsumen` varchar(50)
,`nama_maskapai` varchar(35)
,`nama_bandara_tujuan` varchar(35)
,`tempat_bandara_tujuan` varchar(35)
,`nama_bandara_asal` varchar(35)
,`tempat_bandara_asal` varchar(35)
,`tanggal` date
,`harga` int(50)
,`jumlah_tiket` int(11)
,`kelas_pesawat` varchar(32)
,`metode` varchar(35)
,`status` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `tampil_jadwal`
--
DROP TABLE IF EXISTS `tampil_jadwal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_jadwal`  AS  select `jadwal`.`id_jadwal` AS `id_jadwal`,`pesawat`.`nama_maskapai` AS `nama_maskapai`,`bandara_tujuan`.`nama_bandara_tujuan` AS `nama_bandara_tujuan`,`bandara_tujuan`.`tempat_bandara_tujuan` AS `tempat_bandara_tujuan`,`bandara_asal`.`nama_bandara_asal` AS `nama_bandara_asal`,`bandara_asal`.`tempat_bandara_asal` AS `tempat_bandara_asal`,`jadwal`.`tanggal` AS `tanggal`,`jadwal`.`harga` AS `harga`,`jadwal`.`jumlah_tiket` AS `jumlah_tiket` from (((`jadwal` join `pesawat`) join `bandara_asal`) join `bandara_tujuan`) where ((`jadwal`.`id_jadwal` = `jadwal`.`id_jadwal`) and (`jadwal`.`id_maskapai` = `pesawat`.`id_maskapai`) and (`jadwal`.`id_bandara_asal` = `bandara_asal`.`id_bandara_asal`) and (`jadwal`.`id_bandara_tujuan` = `bandara_tujuan`.`id_bandara_tujuan`)) order by `jadwal`.`tanggal` ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_pembayaran`
--
DROP TABLE IF EXISTS `tampil_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_pembayaran`  AS  select `pembayaran`.`id_pembayaran` AS `id_pembayaran`,`konsumen`.`id_konsumen` AS `id_konsumen`,`konsumen`.`nama_konsumen` AS `nama_konsumen`,`pesawat`.`nama_maskapai` AS `nama_maskapai`,`bandara_tujuan`.`nama_bandara_tujuan` AS `nama_bandara_tujuan`,`bandara_tujuan`.`tempat_bandara_tujuan` AS `tempat_bandara_tujuan`,`bandara_asal`.`nama_bandara_asal` AS `nama_bandara_asal`,`bandara_asal`.`tempat_bandara_asal` AS `tempat_bandara_asal`,`jadwal`.`tanggal` AS `tanggal`,`pembayaran`.`harga` AS `harga`,`pembayaran`.`jumlah_tiket` AS `jumlah_tiket`,`kelas`.`kelas_pesawat` AS `kelas_pesawat`,`metode`.`metode` AS `metode`,`pembayaran`.`status` AS `status` from (((((((`jadwal` join `pesawat`) join `bandara_asal`) join `bandara_tujuan`) join `konsumen`) join `pembayaran`) join `kelas`) join `metode`) where ((`pembayaran`.`id_pembayaran` = `pembayaran`.`id_pembayaran`) and (`pembayaran`.`id_jadwal` = `jadwal`.`id_jadwal`) and (`jadwal`.`id_maskapai` = `pesawat`.`id_maskapai`) and (`jadwal`.`id_bandara_asal` = `bandara_asal`.`id_bandara_asal`) and (`jadwal`.`id_bandara_tujuan` = `bandara_tujuan`.`id_bandara_tujuan`) and (`kelas`.`id_kelas` = `pembayaran`.`id_kelas`) and (`konsumen`.`id_konsumen` = `pembayaran`.`id_konsumen`) and (`pembayaran`.`id_metode` = `metode`.`id_metode`)) order by `jadwal`.`tanggal` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bandara_asal`
--
ALTER TABLE `bandara_asal`
  ADD PRIMARY KEY (`id_bandara_asal`);

--
-- Indexes for table `bandara_tujuan`
--
ALTER TABLE `bandara_tujuan`
  ADD PRIMARY KEY (`id_bandara_tujuan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pesawat` (`id_maskapai`,`id_bandara_tujuan`),
  ADD KEY `id_bandara` (`id_bandara_tujuan`),
  ADD KEY `id_bandara_asal` (`id_bandara_asal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_konsumen` (`id_konsumen`,`id_jadwal`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bandara_asal`
--
ALTER TABLE `bandara_asal`
  MODIFY `id_bandara_asal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bandara_tujuan`
--
ALTER TABLE `bandara_tujuan`
  MODIFY `id_bandara_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id_maskapai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `pesawat` (`id_maskapai`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_bandara_asal`) REFERENCES `bandara_asal` (`id_bandara_asal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_bandara_tujuan`) REFERENCES `bandara_tujuan` (`id_bandara_tujuan`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_metode`) REFERENCES `metode` (`id_metode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
