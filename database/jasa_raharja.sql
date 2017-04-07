-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for jasa_raharja
CREATE DATABASE IF NOT EXISTS `jasa_raharja` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jasa_raharja`;

-- Dumping structure for table jasa_raharja.samsat
CREATE TABLE IF NOT EXISTS `samsat` (
  `no_samsat` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama_samsat` varchar(100) NOT NULL,
  PRIMARY KEY (`no_samsat`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Dumping data for table jasa_raharja.samsat: ~33 rows (approximately)
/*!40000 ALTER TABLE `samsat` DISABLE KEYS */;
INSERT INTO `samsat` (`no_samsat`, `nama_samsat`) VALUES
	(1, 'Samsat Pekanbaru Kota'),
	(2, 'Samsat Pekanbaru Selatan'),
	(3, 'Samsat Pekanbaru Utara (Rumbai)'),
	(4, 'Samsat Pekanbaru Barat'),
	(5, 'Samsat Kubang'),
	(6, 'Samsat Bangkinang'),
	(7, 'Samsat Pasir Pangarayan'),
	(8, 'Samsat Siak'),
	(9, 'Samsat Perawang'),
	(10, 'Samsat Pelelawan'),
	(11, 'Samsat Taluk Kuantan'),
	(12, 'Samsat Rengat'),
	(13, 'Samsat Air Molek'),
	(14, 'Samsat Tembilahan'),
	(15, 'Samsat Pulau Kijang'),
	(16, 'Samsat Ujung Batu'),
	(17, 'Samsat Sorek'),
	(18, 'Samsat Kandis'),
	(19, 'Samsat Singgigin Hilir'),
	(20, 'Samsat Kuantan Mudik'),
	(21, 'Samsat Keliling'),
	(22, 'Samsat Dalu - Dalu'),
	(23, 'Samsat Koto Tengah'),
	(24, 'Samsat Lipat Kain'),
	(25, 'Samsat Tapung'),
	(26, 'Samsat Sei Guntung'),
	(27, 'Samsat Dumai'),
	(28, 'Samsat Duri'),
	(29, 'Samsat Bengkalis'),
	(30, 'Samsat Selat Panjang'),
	(31, 'Samsat Bagan Siapi-Api'),
	(32, 'Samsat Bagan Batu'),
	(33, 'Samsat Ujung Tanjung');
/*!40000 ALTER TABLE `samsat` ENABLE KEYS */;

-- Dumping structure for table jasa_raharja.swdkllj
CREATE TABLE IF NOT EXISTS `swdkllj` (
  `tahun` year(4) NOT NULL,
  `no_bulan` tinyint(4) NOT NULL,
  `no_samsat` tinyint(4) NOT NULL,
  `A` int(11) DEFAULT NULL,
  `B` int(11) DEFAULT NULL,
  `C1` int(11) DEFAULT NULL,
  `C2` int(11) DEFAULT NULL,
  `DP` int(11) DEFAULT NULL,
  `DU` int(11) DEFAULT NULL,
  `EP` int(11) DEFAULT NULL,
  `EU` int(11) DEFAULT NULL,
  `F` int(11) DEFAULT NULL,
  `KD` int(11) DEFAULT NULL,
  `SWDKLLJ` int(11) DEFAULT NULL,
  `DENDA` int(11) DEFAULT NULL,
  PRIMARY KEY (`tahun`,`no_bulan`,`no_samsat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table jasa_raharja.swdkllj: ~12 rows (approximately)
/*!40000 ALTER TABLE `swdkllj` DISABLE KEYS */;
INSERT INTO `swdkllj` (`tahun`, `no_bulan`, `no_samsat`, `A`, `B`, `C1`, `C2`, `DP`, `DU`, `EP`, `EU`, `F`, `KD`, `SWDKLLJ`, `DENDA`) VALUES
	('2015', 1, 1, 2, 3, 4, 2, 3, 2, 1, 2, 3, 4, 2000, 100),
	('2015', 1, 2, 4, 1, 4, 8, 5, 6, 4, 4, 1, 4, 1, 2),
	('2015', 1, 3, 5, 1, 2, 6, 5, 6, 4, 3, 2, 4, 2, 3),
	('2015', 2, 1, 4, 6, 6, 6, 5, 6, 4, 4, 3, 3, 3, 1),
	('2015', 2, 2, 3, 5, 4, 6, 5, 6, 4, 6, 1, 4, 2, 2),
	('2015', 2, 3, 5, 4, 2, 6, 5, 6, 4, 7, 1, 4, 1, 3),
	('2016', 1, 1, 4, 1, 6, 3, 5, 6, 4, 1, 3, 4, 1, 2),
	('2016', 1, 2, 3, 2, 1, 2, 5, 6, 4, 2, 4, 7, 8, 2),
	('2016', 1, 3, 6, 1, 6, 3, 5, 6, 4, 3, 2, 1, 3, 6),
	('2016', 2, 1, 8, 3, 1, 6, 5, 6, 4, 2, 1, 1, 3, 5),
	('2016', 2, 2, 7, 2, 2, 6, 5, 6, 4, 1, 3, 1, 3, 4),
	('2016', 2, 3, 9, 1, 3, 6, 5, 6, 4, 5, 2, 1, 2, 3);
/*!40000 ALTER TABLE `swdkllj` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
