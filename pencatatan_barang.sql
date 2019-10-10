-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.35-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pencatatan_barang
CREATE DATABASE IF NOT EXISTS `pencatatan_barang` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pencatatan_barang`;

-- Dumping structure for table pencatatan_barang.bom
CREATE TABLE IF NOT EXISTS `bom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produkid` int(11) DEFAULT NULL,
  `label` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `produkid` (`produkid`),
  CONSTRAINT `FK_bom_produk` FOREIGN KEY (`produkid`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.bom: ~2 rows (approximately)
/*!40000 ALTER TABLE `bom` DISABLE KEYS */;
INSERT INTO `bom` (`id`, `produkid`, `label`, `keterangan`, `created_at`, `updated_at`) VALUES
	(2, 6, 'asd', 'gggg', '2019-10-10 00:20:32', '2019-10-10 00:49:58'),
	(3, 13, 'Jaket - Hitam - XL', 'asdad', '2019-10-10 14:12:12', NULL);
/*!40000 ALTER TABLE `bom` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.bom_detail
CREATE TABLE IF NOT EXISTS `bom_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bomid` int(11) DEFAULT NULL,
  `materialid` int(11) DEFAULT NULL,
  `satuanid` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `materialid` (`materialid`),
  KEY `FK_bom_detail_bom` (`bomid`),
  KEY `FK_bom_detail_satuans` (`satuanid`),
  CONSTRAINT `FK_bom_detail_bom` FOREIGN KEY (`bomid`) REFERENCES `bom` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_bom_detail_material` FOREIGN KEY (`materialid`) REFERENCES `material` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_bom_detail_satuans` FOREIGN KEY (`satuanid`) REFERENCES `satuans` (`id_satuan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.bom_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `bom_detail` DISABLE KEYS */;
INSERT INTO `bom_detail` (`id`, `bomid`, `materialid`, `satuanid`, `qty`, `created_at`, `updated_at`) VALUES
	(4, 3, 12, 1, 2, '2019-10-10 14:29:01', '2019-10-10 14:30:11');
/*!40000 ALTER TABLE `bom_detail` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table pencatatan_barang.groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.login_attempts
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table pencatatan_barang.login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.material
CREATE TABLE IF NOT EXISTS `material` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `qty_awal` int(11) DEFAULT NULL,
  `qty_retur` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT '0',
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.material: ~10 rows (approximately)
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` (`id_material`, `label`, `jenis`, `qty_awal`, `qty_retur`, `stok`) VALUES
	(1, 'asd', NULL, NULL, NULL, 0),
	(3, 'ddd', NULL, NULL, NULL, 0),
	(5, NULL, NULL, NULL, NULL, 0),
	(6, 'HHH', NULL, NULL, NULL, 0),
	(7, 'sss', NULL, NULL, NULL, 0),
	(8, 'asd', NULL, NULL, NULL, 0),
	(9, 'bbbb', NULL, NULL, NULL, 0),
	(10, 'bbbb', NULL, NULL, NULL, 0),
	(11, 'rrrrr', NULL, NULL, NULL, 0),
	(12, 'Kancing', NULL, NULL, NULL, 5);
/*!40000 ALTER TABLE `material` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.pembelian
CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `nofaktur` varchar(255) DEFAULT NULL,
  `suplier` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pembelian`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.pembelian: ~4 rows (approximately)
/*!40000 ALTER TABLE `pembelian` DISABLE KEYS */;
INSERT INTO `pembelian` (`id_pembelian`, `nofaktur`, `suplier`, `tanggal`, `keterangan`, `status`) VALUES
	(10, '786786', 'PT. ABC', '2019-10-07', 'kkkkjjjjjhhg', 'SELESAI'),
	(12, '', NULL, NULL, NULL, NULL),
	(13, '0222333', 'PT. BCS', '2019-10-10', 'Test kancing', NULL),
	(14, '', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `pembelian` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.pembelian_detail
CREATE TABLE IF NOT EXISTS `pembelian_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pembelianid` int(11) DEFAULT '0',
  `materialid` int(11) DEFAULT '0',
  `jumlah` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_pembelian_detail_pembelian` (`pembelianid`),
  KEY `FK_pembelian_detail_material` (`materialid`),
  CONSTRAINT `FK_pembelian_detail_material` FOREIGN KEY (`materialid`) REFERENCES `material` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pembelian_detail_pembelian` FOREIGN KEY (`pembelianid`) REFERENCES `pembelian` (`id_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.pembelian_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `pembelian_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembelian_detail` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.permintaan
CREATE TABLE IF NOT EXISTS `permintaan` (
  `id_permintaan` int(11) DEFAULT NULL,
  `produkid` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `qty_permintaan` int(11) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.permintaan: ~0 rows (approximately)
/*!40000 ALTER TABLE `permintaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `permintaan` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) DEFAULT NULL,
  `stok` int(11) DEFAULT '0',
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.produk: ~12 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id_produk`, `label`, `stok`) VALUES
	(1, 'Kaos', 5),
	(2, 'Jaket', 6),
	(3, 'asdadasdas', NULL),
	(4, 'gggg', NULL),
	(6, 'bbbb', NULL),
	(7, 'ccccbbbsss', 0),
	(8, 'hhhh', 0),
	(9, 'kkkkk', 0),
	(10, 'yyyy', 0),
	(11, 'rrrrr', 0),
	(12, 'ssssvvcc', 0),
	(13, 'Jaket - Hitam', 0);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.satuans
CREATE TABLE IF NOT EXISTS `satuans` (
  `id_satuan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan_barang.satuans: ~3 rows (approximately)
/*!40000 ALTER TABLE `satuans` DISABLE KEYS */;
INSERT INTO `satuans` (`id_satuan`, `nama_satuan`, `created_at`, `updated_at`) VALUES
	(1, 'Kg', NULL, NULL),
	(2, 'Cm', '2019-10-10 12:09:07', '2019-10-10 12:09:49'),
	(3, 'Pcs', '2019-10-10 14:12:54', NULL);
/*!40000 ALTER TABLE `satuans` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table pencatatan_barang.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$argon2i$v=19$m=16384,t=4,p=2$OXh1VDZSNy5KbEdJTUZTdQ$+YLiXPrLipe7qMPqmJ45Atmlz57HUVhDFUbgCysnZNM', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Administrator', '', 'ADMIN', '0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table pencatatan_barang.users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table pencatatan_barang.users_groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
