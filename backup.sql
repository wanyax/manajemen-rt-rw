-- MySQL dump 10.13  Distrib 5.5.8, for Win32 (x86)
--
-- Host: localhost    Database: rt_rw
-- ------------------------------------------------------
-- Server version	5.5.8

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blok`
--

DROP TABLE IF EXISTS `blok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blok` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `perumahan_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_blok_index` (`nama`),
  KEY `perumahan_id_blok_fk_idx` (`perumahan_id`),
  CONSTRAINT `perumahan_id_blok_fk` FOREIGN KEY (`perumahan_id`) REFERENCES `perumahan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blok`
--

LOCK TABLES `blok` WRITE;
/*!40000 ALTER TABLE `blok` DISABLE KEYS */;
INSERT INTO `blok` VALUES (1,'Blok I',2),(2,'Blok D',1);
/*!40000 ALTER TABLE `blok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hubungan_keluarga`
--

DROP TABLE IF EXISTS `hubungan_keluarga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hubungan_keluarga` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `warga1_id` int(10) unsigned NOT NULL,
  `warga2_id` int(10) unsigned NOT NULL,
  `tipe_hubungan_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `warga1_id_hubungan_keluarga_fk_idx` (`warga1_id`),
  KEY `warga2_id_hubungan_keluarga_fk_idx` (`warga2_id`),
  KEY `tipe_hubungan_id_hubungan_keluarga_index_idx` (`tipe_hubungan_id`),
  CONSTRAINT `tipe_hubungan_id_hubungan_keluarga_index` FOREIGN KEY (`tipe_hubungan_id`) REFERENCES `tipe_hubungan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `warga1_id_hubungan_keluarga_fk` FOREIGN KEY (`warga1_id`) REFERENCES `warga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `warga2_id_hubungan_keluarga_fk` FOREIGN KEY (`warga2_id`) REFERENCES `warga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hubungan_keluarga`
--

LOCK TABLES `hubungan_keluarga` WRITE;
/*!40000 ALTER TABLE `hubungan_keluarga` DISABLE KEYS */;
/*!40000 ALTER TABLE `hubungan_keluarga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iuran`
--

DROP TABLE IF EXISTS `iuran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iuran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `periode_id` int(10) unsigned NOT NULL,
  `rumah_id` int(10) unsigned NOT NULL,
  `nominal` int(10) unsigned NOT NULL,
  `pembayar_id` int(10) unsigned NOT NULL,
  `penerima_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `periode_id_iuran_fk_idx` (`periode_id`),
  KEY `rumah_id_fk_idx` (`rumah_id`),
  KEY `pembayar_id_idx` (`pembayar_id`),
  KEY `penerima_id_iuran_fk_idx` (`penerima_id`),
  CONSTRAINT `pembayar_id_iuran_fk` FOREIGN KEY (`pembayar_id`) REFERENCES `warga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `penerima_id_iuran_fk` FOREIGN KEY (`penerima_id`) REFERENCES `warga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `periode_id_iuran_fk` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `rumah_id_fk` FOREIGN KEY (`rumah_id`) REFERENCES `rumah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iuran`
--

LOCK TABLES `iuran` WRITE;
/*!40000 ALTER TABLE `iuran` DISABLE KEYS */;
/*!40000 ALTER TABLE `iuran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan_rt`
--

DROP TABLE IF EXISTS `jabatan_rt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan_rt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan_rt`
--

LOCK TABLES `jabatan_rt` WRITE;
/*!40000 ALTER TABLE `jabatan_rt` DISABLE KEYS */;
/*!40000 ALTER TABLE `jabatan_rt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan_rw`
--

DROP TABLE IF EXISTS `jabatan_rw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan_rw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_UNIQUE` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan_rw`
--

LOCK TABLES `jabatan_rw` WRITE;
/*!40000 ALTER TABLE `jabatan_rw` DISABLE KEYS */;
/*!40000 ALTER TABLE `jabatan_rw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengurus_rt`
--

DROP TABLE IF EXISTS `pengurus_rt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengurus_rt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rt_id` int(10) unsigned NOT NULL,
  `warga_id` int(10) unsigned NOT NULL,
  `jabatan_rt_id` int(10) unsigned NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rt_id_pengurus_rt_fk_idx` (`rt_id`),
  KEY `warga_id_pengurus_rt_fk_idx` (`warga_id`),
  KEY `jabatan_rt_id_pengurus_rt_fk_idx` (`jabatan_rt_id`),
  CONSTRAINT `jabatan_rt_id_pengurus_rt_fk` FOREIGN KEY (`jabatan_rt_id`) REFERENCES `jabatan_rt` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `rt_id_pengurus_rt_fk` FOREIGN KEY (`rt_id`) REFERENCES `rt` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `warga_id_pengurus_rt_fk` FOREIGN KEY (`warga_id`) REFERENCES `warga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengurus_rt`
--

LOCK TABLES `pengurus_rt` WRITE;
/*!40000 ALTER TABLE `pengurus_rt` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengurus_rt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengurus_rw`
--

DROP TABLE IF EXISTS `pengurus_rw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengurus_rw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rw_id` int(10) unsigned NOT NULL,
  `warga_id` int(10) unsigned NOT NULL,
  `jabatan_rw_id` int(10) unsigned NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `warga_id_pengurus_rw_fk_idx` (`warga_id`),
  KEY `rw_id_pengurus_rw_fk_idx` (`rw_id`),
  KEY `jabatan_rw_id_fk_idx` (`jabatan_rw_id`),
  CONSTRAINT `jabatan_rw_id_fk` FOREIGN KEY (`jabatan_rw_id`) REFERENCES `jabatan_rw` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `rw_id_pengurus_rw_fk` FOREIGN KEY (`rw_id`) REFERENCES `rw` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `warga_id_pengurus_rw_fk` FOREIGN KEY (`warga_id`) REFERENCES `warga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengurus_rw`
--

LOCK TABLES `pengurus_rw` WRITE;
/*!40000 ALTER TABLE `pengurus_rw` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengurus_rw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periode`
--

DROP TABLE IF EXISTS `periode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipe_iuran_id` int(10) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipe_iuran_id_periode_fk_idx` (`tipe_iuran_id`),
  CONSTRAINT `tipe_iuran_id_periode_fk` FOREIGN KEY (`tipe_iuran_id`) REFERENCES `tipe_iuran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periode`
--

LOCK TABLES `periode` WRITE;
/*!40000 ALTER TABLE `periode` DISABLE KEYS */;
/*!40000 ALTER TABLE `periode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perumahan`
--

DROP TABLE IF EXISTS `perumahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perumahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota_madya` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `propinsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_UNIQUE` (`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perumahan`
--

LOCK TABLES `perumahan` WRITE;
/*!40000 ALTER TABLE `perumahan` DISABLE KEYS */;
INSERT INTO `perumahan` VALUES (1,'Melati Regency','Pasar Minggu','','Jakarta Selatan','DKI Jakarta'),(2,'Kebagusan Village','Pasar Minggu','','Jakarta Selatan','DKI Jakarta');
/*!40000 ALTER TABLE `perumahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rt`
--

DROP TABLE IF EXISTS `rt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `rw_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rw_id_rt_fk_idx` (`rw_id`),
  CONSTRAINT `rw_id_rt_fk` FOREIGN KEY (`rw_id`) REFERENCES `rw` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rt`
--

LOCK TABLES `rt` WRITE;
/*!40000 ALTER TABLE `rt` DISABLE KEYS */;
INSERT INTO `rt` VALUES (1,'007',2),(2,'001',3);
/*!40000 ALTER TABLE `rt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rumah`
--

DROP TABLE IF EXISTS `rumah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rumah` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `blok_id` int(10) unsigned DEFAULT NULL,
  `rt_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blok_id_rumah_fk_idx` (`blok_id`),
  KEY `rt_id_rumah_fk_idx` (`rt_id`),
  CONSTRAINT `blok_id_rumah_fk` FOREIGN KEY (`blok_id`) REFERENCES `blok` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `rt_id_rumah_fk` FOREIGN KEY (`rt_id`) REFERENCES `rt` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rumah`
--

LOCK TABLES `rumah` WRITE;
/*!40000 ALTER TABLE `rumah` DISABLE KEYS */;
INSERT INTO `rumah` VALUES (1,'49','Rumah Pak Nana',1,1),(6,'11','Ibu Titin',NULL,2);
/*!40000 ALTER TABLE `rumah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rw`
--

DROP TABLE IF EXISTS `rw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota_madya` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `propinsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_rw_index` (`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rw`
--

LOCK TABLES `rw` WRITE;
/*!40000 ALTER TABLE `rw` DISABLE KEYS */;
INSERT INTO `rw` VALUES (2,'002','Kebagusan','Pasar Minggu','','Jakarta Selatan','DKI Jakarta'),(3,'004','Kebagusan','Pasar Minggu','','Jakarta Selatan','DKI Jakarta'),(4,'008','Kebagusan','Pasar Minggu','','Jakarta Selatan','DKI Jakarta');
/*!40000 ALTER TABLE `rw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_hubungan`
--

DROP TABLE IF EXISTS `tipe_hubungan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipe_hubungan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_hubungan`
--

LOCK TABLES `tipe_hubungan` WRITE;
/*!40000 ALTER TABLE `tipe_hubungan` DISABLE KEYS */;
INSERT INTO `tipe_hubungan` VALUES (1,'Ayah'),(2,'Ibu'),(3,'Anak'),(5,'Kakak'),(7,'Adik'),(9,'Paman'),(10,'Bibi'),(11,'Keponakan'),(12,'Sepupu'),(13,'Kakek'),(14,'Nenek'),(15,'Cucu'),(16,'Suami'),(17,'Istri');
/*!40000 ALTER TABLE `tipe_hubungan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_iuran`
--

DROP TABLE IF EXISTS `tipe_iuran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipe_iuran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rt_id` int(10) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe_periode_id` int(10) unsigned NOT NULL,
  `nominal` int(10) unsigned NOT NULL,
  `status_berlaku` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rt_id_tipe_iuran_fk_idx` (`rt_id`),
  KEY `tipe_periode_id_tipe_iuran_fk_idx` (`tipe_periode_id`),
  CONSTRAINT `rt_id_tipe_iuran_fk` FOREIGN KEY (`rt_id`) REFERENCES `rt` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tipe_periode_id_tipe_iuran_fk` FOREIGN KEY (`tipe_periode_id`) REFERENCES `tipe_periode` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_iuran`
--

LOCK TABLES `tipe_iuran` WRITE;
/*!40000 ALTER TABLE `tipe_iuran` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipe_iuran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_periode`
--

DROP TABLE IF EXISTS `tipe_periode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipe_periode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_periode`
--

LOCK TABLES `tipe_periode` WRITE;
/*!40000 ALTER TABLE `tipe_periode` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipe_periode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warga`
--

DROP TABLE IF EXISTS `warga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warga` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `kelamin` tinyint(1) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_kepala_keluarga` tinyint(1) NOT NULL,
  `rumah_id` int(10) unsigned NOT NULL,
  `tanggal_wafat` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_depan_warga_index` (`nama_depan`),
  KEY `nama_belakang_warga_index` (`nama_belakang`),
  KEY `rumah_id_warga_fk_idx` (`rumah_id`),
  CONSTRAINT `rumah_id_warga_fk` FOREIGN KEY (`rumah_id`) REFERENCES `rumah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warga`
--

LOCK TABLES `warga` WRITE;
/*!40000 ALTER TABLE `warga` DISABLE KEYS */;
/*!40000 ALTER TABLE `warga` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-09 16:41:30
