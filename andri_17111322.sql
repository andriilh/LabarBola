-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: andri_17111322
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_berita`
--

DROP TABLE IF EXISTS `tb_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_berita` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul_berita` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `ket_gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_berita`
--

LOCK TABLES `tb_berita` WRITE;
/*!40000 ALTER TABLE `tb_berita` DISABLE KEYS */;
INSERT INTO `tb_berita` VALUES (16,'Prediksi Arema FC vs Persib Bandung 30 Juli 2019','Bola.net || Andri Ilham','2019-07-30','<p>Bola.net - Arema FC akan menjamu Persib Bandung dalam lanjutan kompetisi Shopee Liga 1 2019 yang disiarkan Indosiar, Selasa (30/7). Big match di Stadion Kanjuruhan Malang ini merupakan partai tunda dari pekan ke-4.</p>\r\n\r\n<p>Arema dan Persib sama-sama tak bisa menurunkan komposisi terbaik. Beberapa pemain utama dari masing-masing tim harus absen di laga ini. Namun, duel mereka nanti tetap berpotensi sengit.</p>\r\n\r\n<p>Di laga terakhirnya, Arema menang 3-2 menjamu Bhayangkara FC. Arema bangkit usai takluk 0-1 di Madura. Sementara itu, Persib sempat menang 2-0 menjamu Kalteng Putra dan menang tipis 1-0 di markas PSIS Semarang, sebelum akhirnya kalah 0-2 menjamu Bali United.</p>\r\n\r\n<p>Arema saat ini menempati peringkat lima klasemen Shopee Liga 1 2019 yang disiarkan Indosiar dengan perolehan 15 poin dari sembilan pertandingan (M5 S0 K4). Sementara itu, Persib berada di posisi 11 dengan 13 poin dari sepuluh laga (M3 S4 K3).</p>\r\n\r\n<p>Pada pertemuan terakhir, di babak 16 besar Piala Indonesia 2018, Arema ditahan imbang Persib 2-2 di Malang. Sebelum itu, Arema juga bermain imbang 2-2 menjamu Persib di Liga 1 2018.</p>\r\n\r\n<p>Arema selalu menang dalam tiga pertandingan kandang terakhirnya di Liga 1. Tiga kemenangan kandang beruntun Arema itu adalah 3-1 vs Persipura Jayapura, 4-1 vs Perseru Badak Lampung, dan 3-2 vs Bhayangkara FC.</p>\r\n\r\n<p>Arema bertekad melanjutkan tren positif tersebut sekaligus meraih meraih hasil lebih baik daripada pertemuan sebelumnya. Namun, Persib pun pasti siap berusaha maksimal supaya tak pulang dengan tangan hampa. </p>','arema-vs-persibg_d3de115.jpg','Arema vs. Persib Bandung'),(17,'Moyes Prediksi Solskjaer Akan Kesulitan di MU pada Musim Ini','Bola.net || Andri Ilham','2019-07-30','Bola.net - Mantan manajer Manchester United David Moyes memprediksi Ole Gunnar Solskjaer akan mengalami kesulitan bersama Setan Merah pada musim ini. Ia mengatakan menangani klub sebesar United adalah pekerjaan yang sulit.\r\n\r\n<p>Solskjaer menggantikan Jose Mourinho sebagai manajer Setan Merah pada Desember 2018. Di bawah Solskjaer, MU sempat meraih hasil impresif dalam 19 pertandingan pertama.\r\n\r\nPosisi Solskjaer yang awalnya sebagai pelatih interim pun kemudian dipermanenkan oleh pihak klub. Meskipun begitu, perjalanan Setan Merah pada akhir musim justru terseok-seok.\r\n\r\nMU akhirnya hanya mampu finis di peringkat keenam pada ajang Premier League. Pencapaian itu membuat Setan Merah gagal tampil di Liga Champions. </p>\r\n\r\n<p>Setelah bertahun-tahun meninggalkan Old Trafford, Moyes mencoba mengirim pesan kepada Solskjaer. Moyes percaya kalau manajer Norwegia itu akan menjalani waktu yang sulit selama musim penuh pertamanya di klub.\r\n\r\n\"Ini adalah pekerjaan yang sulit,\" kata Moyes kepada The Mirror.\r\n\r\n\"Anda telah melihat betapa sulitnya bagi saya, Louis van Gaal dan Jose Mourinho - manajer yang sangat berpengalaman merasa kesulitan.\r\n\r\n“Saya pikir ini akan menjadi musim yang sulit bagi Ole, tetapi dia berusaha melakukan segalanya untuk memperbaikinya. Saya harap dia berhasil. Tapi ada harapan besar.\"</p>','ole-gunnar-solskjaer_5abe73a.jpg','Ole Gunnar Solkjaer @All Photo'),(18,'Berita Transfer: Jiangsu Suning Akhiri Perburuan Gareth Bale Dari Real Madrid',' Eric Novianto, Goal.com','2019-07-31','<p>Kuota pemain asing Jiangsu sudah lengkap dan bursa transfer CSL akan segera ditutup pada pertengahan pekan ini.</p>\r\n\r\n<p>Jiangsu Suning telah merekrut striker Kroasia, Ivan Santini yang mengindikasikan mereka mengakhiri perburuan Gareth Bale dari Real Madrid.</p>\r\n\r\n<p>Sky Sports News melaporkan pada akhir pekan kemarin bahwa rencana transfer superstar asal Wales tersebut ke Chinese Super League (CSL) sulit terlaksana.</p>\r\n\r\n<p>Kubu Bale sebelum ini telah terlibat dalam negosiasi transfer yang berpotensi membuat sang pemain menerima gaji £1 juta per pekan.</p>\r\n\r\n<p>Hanya saja, dengan perekrutan Santini kini menunjukkan bahwa peluang Bale untuk merapat ke Tiongkok sangat tipis karena bursa transfer musim panas CSL akan tutup pada Rabu (31/7) esok.</p>\r\n\r\n<p>Kedatangan Santini dari Anderlecht bersama dengan akuisisi bek Brasil, Joao Miranda dari Inter Milan pada pekan lalu berarti membuat Jiangsu kini sudah memiliki lima pemain asing.</p>\r\n\r\n<p>Aturan CSL hanya mengizinkan klub untuk memiliki empat pemain asing dalam skuad pertandingan. Dan dengan bek Italia, Gabriel Paletta diyakini bakal pergi, maka kuota asing Jiangsu sudah lengkap.</p>\r\n\r\n<p>Situasinya sekarang adalah Jiangsu harus mendepak salah satu dari Alex Teixeira atau Eder Martins untuk membuka ruang bagi Bale, tapi keduanya merupakan pemain kunci pelatih Cosmin Olaroiu sehingga kansnya kecil.</>','gareth-bale-el-clasico-232019_5i7x7uenvsbz13ghnw21tx39n.jpg','Gareth Bale');
/*!40000 ALTER TABLE `tb_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_epl`
--

DROP TABLE IF EXISTS `tb_epl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_epl` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `point` int(3) NOT NULL,
  `bermain` int(3) NOT NULL,
  `menang` int(3) NOT NULL,
  `draw` int(3) NOT NULL,
  `kalah` int(3) NOT NULL,
  `memasukan` int(3) NOT NULL,
  `kemasukan` int(3) NOT NULL,
  `selisih` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_epl`
--

LOCK TABLES `tb_epl` WRITE;
/*!40000 ALTER TABLE `tb_epl` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_epl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_laliga`
--

DROP TABLE IF EXISTS `tb_laliga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_laliga` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `point` int(3) NOT NULL,
  `bermain` int(3) NOT NULL,
  `menang` int(3) NOT NULL,
  `draw` int(3) NOT NULL,
  `kalah` int(3) NOT NULL,
  `memasukan` int(3) NOT NULL,
  `kemasukan` int(3) NOT NULL,
  `selisih` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_laliga`
--

LOCK TABLES `tb_laliga` WRITE;
/*!40000 ALTER TABLE `tb_laliga` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_laliga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Kevin','Kevin','21232f297a57a5a743894a0e4a801fc3'),(5,'rey','rey','d2b3ea2dfddc40efdc6941359436c847'),(6,'Andri Ilham','admin','21232f297a57a5a743894a0e4a801fc3'),(7,'Budi Hadi','hadi','76671d4b83f6e6f953ea2dfb75ded921');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-31 23:57:33
