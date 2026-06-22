-- MySQL dump 10.13  Distrib 9.6.0, for macos15.7 (arm64)
--
-- Host: 127.0.0.1    Database: daihatsuprm
-- ------------------------------------------------------
-- Server version	8.4.7

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article_news`
--

DROP TABLE IF EXISTS `article_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article_news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` bigint unsigned NOT NULL,
  `author_id` bigint unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `article_news_slug_unique` (`slug`),
  KEY `article_news_category_id_foreign` (`category_id`),
  KEY `article_news_author_id_foreign` (`author_id`),
  CONSTRAINT `article_news_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_news`
--

LOCK TABLES `article_news` WRITE;
/*!40000 ALTER TABLE `article_news` DISABLE KEYS */;
INSERT INTO `article_news` VALUES (1,'Rocky e-Smart Hybrid','<h1>Daihatsu Rocky e-Smart Hybrid: SUV Kompak Modern dengan Teknologi Hybrid Canggih</h1><h2>Mengenal Daihatsu Rocky e-Smart Hybrid</h2><p>Daihatsu Rocky e-Smart Hybrid hadir sebagai inovasi terbaru dari Daihatsu yang menggabungkan desain SUV modern dengan teknologi hybrid canggih. Kendaraan ini dirancang untuk memberikan efisiensi bahan bakar yang optimal, performa responsif, serta pengalaman berkendara yang nyaman untuk kebutuhan sehari-hari maupun perjalanan jarak jauh.</p><p>Dengan tampilan yang sporty dan fitur-fitur modern, Daihatsu Rocky e-Smart Hybrid menjadi pilihan menarik bagi masyarakat yang menginginkan kendaraan ramah lingkungan tanpa mengorbankan kenyamanan dan performa.</p><hr><h2>Teknologi e-Smart Hybrid yang Inovatif</h2><p>Salah satu keunggulan utama Daihatsu Rocky e-Smart Hybrid adalah teknologi <strong>e-Smart Hybrid</strong>. Sistem ini menggunakan mesin bensin sebagai generator untuk mengisi daya baterai, sementara roda kendaraan digerakkan sepenuhnya oleh motor listrik.</p><p>Teknologi tersebut memberikan beberapa keuntungan, antara lain:</p><ul><li><p>Akselerasi lebih responsif dan halus.</p></li><li><p>Konsumsi bahan bakar lebih efisien.</p></li><li><p>Suara mesin lebih senyap.</p></li><li><p>Emisi gas buang lebih rendah.</p></li><li><p>Pengalaman berkendara yang nyaman di berbagai kondisi jalan.</p></li></ul><hr><h2>Desain Eksterior yang Sporty dan Modern</h2><p>Daihatsu Rocky e-Smart Hybrid tampil dengan desain yang gagah dan modern. Bagian depan dilengkapi dengan grille berkarakter serta lampu LED yang memberikan kesan premium.</p><p>Beberapa keunggulan desain eksterior meliputi:</p><ul><li><p>LED Headlamp modern.</p></li><li><p>Desain velg sporty.</p></li><li><p>Ground clearance tinggi.</p></li><li><p>Roof rail yang menunjang aktivitas harian maupun perjalanan jauh.</p></li><li><p>Dimensi kompak yang memudahkan manuver di perkotaan.</p></li></ul><hr><h2>Interior Nyaman dan Fitur Lengkap</h2><p>Masuk ke dalam kabin, Daihatsu Rocky e-Smart Hybrid menawarkan ruang yang lega dan nyaman bagi seluruh penumpang. Material interior yang modern dipadukan dengan berbagai fitur pendukung kenyamanan.</p><p>Fitur unggulan yang tersedia antara lain:</p><ul><li><p>Head Unit touchscreen dengan konektivitas smartphone.</p></li><li><p>Digital Multi Information Display.</p></li><li><p>Keyless Entry dan Push Start Button.</p></li><li><p>Automatic Climate Control.</p></li><li><p>USB Charging Port.</p></li><li><p>Kursi yang ergonomis dan nyaman untuk perjalanan panjang.</p></li></ul><hr><h2>Sistem Keselamatan yang Modern</h2><p>Daihatsu Rocky e-Smart Hybrid juga dilengkapi dengan berbagai fitur keselamatan untuk memberikan perlindungan maksimal selama berkendara, seperti:</p><ul><li><p>Vehicle Stability Control (VSC).</p></li><li><p>Anti-lock Braking System (ABS).</p></li><li><p>Hill Start Assist (HSA).</p></li><li><p>Dual SRS Airbags.</p></li><li><p>Rear Parking Camera.</p></li><li><p>Sensor parkir.</p></li><li><p>Advanced Safety Assist (ASA) pada tipe tertentu.</p></li></ul><p>Dengan fitur keselamatan yang lengkap, pengemudi dapat berkendara dengan lebih aman dan percaya diri.</p><hr><h2>Konsumsi Bahan Bakar yang Lebih Efisien</h2><p>Teknologi e-Smart Hybrid membuat Daihatsu Rocky Hybrid mampu menghadirkan efisiensi bahan bakar yang lebih baik dibandingkan kendaraan konvensional. Hal ini menjadikan Rocky Hybrid sebagai solusi tepat bagi konsumen yang menginginkan SUV modern dengan biaya operasional yang lebih hemat.</p><p>Selain ramah lingkungan, sistem hybrid ini juga membantu mengurangi emisi sehingga lebih mendukung mobilitas yang berkelanjutan.</p><hr><h2>Pilihan Tepat untuk Mobilitas Masa Kini</h2><p>Daihatsu Rocky e-Smart Hybrid merupakan kombinasi sempurna antara desain modern, teknologi hybrid canggih, fitur keselamatan lengkap, dan efisiensi bahan bakar yang tinggi. Kendaraan ini sangat cocok bagi keluarga muda maupun masyarakat aktif yang membutuhkan SUV kompak dengan performa andal serta biaya operasional yang lebih ekonomis.</p><p>Jika Anda ingin mengetahui harga terbaru, promo menarik, maupun simulasi kredit Daihatsu Rocky e-Smart Hybrid, tim <strong>Daihatsu PRM</strong> siap membantu Anda mendapatkan penawaran terbaik sesuai kebutuhan. 🚗✨</p><hr><h3></h3>','articles/01KVGH864K1NF6DTPKK106Y3V8.png',1,3,1,'rocky-e-smart-hybrid',NULL,'2026-06-19 11:10:51','2026-06-19 11:11:37'),(2,'New Ayla','<h1>Daihatsu All New Ayla: City Car Modern yang Irit, Stylish, dan Nyaman untuk Mobilitas Harian</h1><h2>Mengenal Daihatsu All New Ayla</h2><p>Daihatsu All New Ayla hadir sebagai city car modern yang dirancang untuk memenuhi kebutuhan mobilitas masyarakat Indonesia. Dengan desain yang lebih sporty, fitur yang semakin lengkap, serta konsumsi bahan bakar yang efisien, Ayla menjadi pilihan ideal bagi keluarga muda, pengguna mobil pertama, hingga mereka yang membutuhkan kendaraan praktis untuk aktivitas sehari-hari. (<a href=\"https://daihatsu.co.id/product/ayla/?utm_source=chatgpt.com\">Daihatsu Indonesia</a>)</p><hr><h2>Desain Modern dan Sporty</h2><p>All New Ayla tampil dengan desain yang lebih agresif dan modern berkat penggunaan platform DNGA (Daihatsu New Global Architecture). Dimensi yang kompak membuat mobil ini sangat mudah digunakan di jalanan perkotaan maupun saat parkir di area yang terbatas. (<a href=\"https://daihatsu.co.id/product/ayla/?utm_source=chatgpt.com\">Daihatsu Indonesia</a>)</p><p>Beberapa keunggulan eksterior Daihatsu Ayla antara lain:</p><ul><li><p>Tampilan depan yang lebih sporty.</p></li><li><p>Lampu LED pada tipe tertentu.</p></li><li><p>Velg alloy modern.</p></li><li><p>Ground clearance yang ideal untuk berbagai kondisi jalan.</p></li><li><p>Desain aerodinamis yang semakin menarik.</p></li></ul><hr><h2>Interior Nyaman dengan Fitur Modern</h2><p>Masuk ke dalam kabin, Daihatsu Ayla menawarkan ruang yang lega untuk lima penumpang dengan desain interior yang modern dan fungsional. Berbagai fitur kenyamanan juga telah disematkan untuk menunjang pengalaman berkendara yang lebih menyenangkan. (<a href=\"https://daihatsu.co.id/tips-and-event/tips-sahabat/detail-content/daihatsu-ayla-2026-harga-spesifikasi-dan-review-lengkap/?utm_source=chatgpt.com\">Daihatsu Indonesia</a>)</p><p>Fitur unggulan yang tersedia meliputi:</p><ul><li><p>Head Unit Touchscreen 7 inci.</p></li><li><p>Konektivitas Android Auto dan Apple CarPlay.</p></li><li><p>Digital AC.</p></li><li><p>Push Start Button.</p></li><li><p>Tilt Steering.</p></li><li><p>Bagasi yang lebih luas dan praktis.</p></li></ul><hr><h2>Pilihan Mesin yang Efisien dan Responsif</h2><p>Daihatsu Ayla tersedia dengan dua pilihan mesin yang dapat disesuaikan dengan kebutuhan pengguna. (<a href=\"https://www.daihatsujakartaofficial.com/model/20/new-ayla?utm_source=chatgpt.com\">Daihatsu Jakarta Official</a>)</p><h3>Mesin 1.0 Liter</h3><ul><li><p>Kapasitas mesin 998 cc.</p></li><li><p>Teknologi DOHC VVT-i.</p></li><li><p>Konsumsi bahan bakar yang sangat efisien.</p></li><li><p>Cocok untuk penggunaan dalam kota.</p></li></ul><h3>Mesin 1.2 Liter</h3><ul><li><p>Kapasitas mesin 1.198 cc.</p></li><li><p>Mesin WA-VE DOHC Dual VVT-i.</p></li><li><p>Performa lebih bertenaga dan responsif.</p></li><li><p>Tersedia pilihan transmisi Manual maupun D-CVT.</p></li></ul><hr><h2>Kenyamanan Berkendara yang Lebih Baik</h2><p>Platform DNGA memberikan peningkatan pada stabilitas, kenyamanan, dan handling kendaraan. Selain itu, penggunaan transmisi D-CVT pada beberapa tipe memberikan akselerasi yang halus sekaligus membantu meningkatkan efisiensi bahan bakar. (<a href=\"https://www.daihatsujakartaofficial.com/model/20/new-ayla?utm_source=chatgpt.com\">Daihatsu Jakarta Official</a>)</p><p>Keunggulan lainnya:</p><ul><li><p>Kabin lebih senyap.</p></li><li><p>Suspensi nyaman untuk penggunaan harian.</p></li><li><p>Radius putar kecil sehingga mudah bermanuver.</p></li><li><p>Sangat cocok digunakan di area perkotaan.</p></li></ul><hr><h2>Fitur Keselamatan yang Lengkap</h2><p>Daihatsu Ayla juga dilengkapi berbagai fitur keselamatan untuk memberikan rasa aman selama perjalanan, seperti:</p><ul><li><p>Dual SRS Airbags.</p></li><li><p>Anti-lock Braking System (ABS).</p></li><li><p>Vehicle Stability Control (VSC) pada tipe tertentu.</p></li><li><p>Hill Start Assist (HSA).</p></li><li><p>Struktur bodi yang dirancang untuk meningkatkan keselamatan penumpang.</p></li></ul><hr><h2>Pilihan Tepat untuk Mobil Pertama</h2><p>Dengan harga yang kompetitif, biaya perawatan yang terjangkau, serta konsumsi bahan bakar yang irit, Daihatsu All New Ayla menjadi salah satu city car favorit masyarakat Indonesia. Banyak pengguna juga menilai Ayla sebagai kendaraan yang nyaman, mudah dikendarai, dan memiliki biaya operasional yang ekonomis.</p><hr><h2>Kesimpulan</h2><p>Daihatsu All New Ayla merupakan pilihan yang tepat bagi Anda yang menginginkan kendaraan modern, hemat bahan bakar, dan nyaman digunakan sehari-hari. Didukung desain yang stylish, fitur yang lengkap, serta performa yang andal, Ayla siap menjadi sahabat perjalanan bagi keluarga muda maupun pengguna yang menginginkan mobil pertama dengan kualitas terbaik.</p><p>Untuk informasi harga terbaru, promo menarik, dan simulasi kredit Daihatsu All New Ayla, hubungi tim <strong>Daihatsu PRM</strong> dan dapatkan penawaran terbaik sesuai kebutuhan Anda.</p><hr><h3></h3>','articles/01KVGHCNNB77C464BXNRKPTSPK.webp',0,3,1,'new-ayla',NULL,'2026-06-19 11:13:18','2026-06-19 11:13:18'),(3,'New Terios','<h1>Daihatsu All New Terios: SUV Tangguh dan Nyaman untuk Petualangan Bersama Keluarga</h1><h2>Mengenal Daihatsu All New Terios</h2><p>Daihatsu All New Terios hadir sebagai SUV andalan Daihatsu yang menggabungkan desain sporty, kabin yang luas, serta performa tangguh untuk berbagai kebutuhan. Dengan kapasitas hingga tujuh penumpang dan ground clearance yang tinggi, Terios menjadi pilihan tepat bagi keluarga aktif yang menginginkan kendaraan nyaman untuk penggunaan sehari-hari maupun perjalanan jarak jauh.</p><hr><h2>Desain Eksterior Sporty dan Berkarakter</h2><p>Daihatsu All New Terios tampil dengan desain yang modern dan gagah. Tampilan depan yang tegas dipadukan dengan grille beraksen premium dan lampu LED membuat Terios terlihat semakin stylish dan berkelas.</p><p>Keunggulan eksterior Daihatsu Terios antara lain:</p><ul><li><p>Desain SUV yang sporty dan modern.</p></li><li><p>LED Headlamp dengan tampilan premium.</p></li><li><p>Ground clearance tinggi untuk berbagai kondisi jalan.</p></li><li><p>Velg alloy berdesain dinamis.</p></li><li><p>Roof rail yang menunjang aktivitas dan perjalanan keluarga.</p></li></ul><hr><h2>Kabin Luas dan Nyaman untuk Keluarga</h2><p>Masuk ke dalam kabin, Daihatsu Terios menawarkan ruang yang lega dengan konfigurasi tujuh penumpang. Interior yang modern serta berbagai fitur kenyamanan membuat setiap perjalanan menjadi lebih menyenangkan.</p><p>Fitur interior unggulan meliputi:</p><ul><li><p>Head Unit Touchscreen dengan konektivitas smartphone.</p></li><li><p>Keyless Entry dan Push Start Button.</p></li><li><p>Digital AC.</p></li><li><p>Banyak ruang penyimpanan yang praktis.</p></li><li><p>Kursi baris kedua dan ketiga yang fleksibel.</p></li><li><p>Bagasi luas untuk kebutuhan keluarga maupun perjalanan jauh.</p></li></ul><hr><h2>Mesin 1.5L yang Bertenaga dan Efisien</h2><p>Daihatsu All New Terios dibekali mesin 1.5L 2NR-VE Dual VVT-i yang mampu memberikan performa responsif sekaligus konsumsi bahan bakar yang efisien.</p><p>Spesifikasi mesin:</p><ul><li><p>Kapasitas mesin 1.496 cc.</p></li><li><p>Teknologi Dual VVT-i.</p></li><li><p>Tenaga maksimal 104 PS.</p></li><li><p>Torsi maksimal 136 Nm.</p></li><li><p>Pilihan transmisi Manual 5 percepatan dan Automatic 4 percepatan.</p></li></ul><p>Performa tersebut membuat Terios nyaman digunakan baik untuk mobilitas di perkotaan maupun perjalanan luar kota bersama keluarga.</p><hr><h2>Fitur Keselamatan yang Lengkap</h2><p>Daihatsu Terios dilengkapi dengan berbagai fitur keselamatan modern untuk memberikan rasa aman selama perjalanan.</p><p>Fitur keselamatan yang tersedia antara lain:</p><ul><li><p>Vehicle Stability Control (VSC).</p></li><li><p>Hill Start Assist (HSA).</p></li><li><p>Anti-lock Braking System (ABS).</p></li><li><p>Emergency Stop Signal (ESS).</p></li><li><p>Dual SRS Airbags.</p></li><li><p>Rear Parking Camera.</p></li><li><p>Sensor parkir belakang.</p></li></ul><p>Dengan fitur keselamatan yang lengkap, pengemudi dapat berkendara dengan lebih percaya diri di berbagai kondisi jalan.</p><hr><h2>Cocok untuk Berbagai Aktivitas</h2><p>Daihatsu All New Terios merupakan SUV yang sangat fleksibel untuk berbagai kebutuhan, seperti:</p><ul><li><p>Kendaraan keluarga sehari-hari.</p></li><li><p>Perjalanan luar kota.</p></li><li><p>Aktivitas bisnis dan operasional.</p></li><li><p>Liburan bersama keluarga.</p></li><li><p>Menjelajahi berbagai medan dengan lebih percaya diri.</p></li></ul><p>Ground clearance yang tinggi dan kabin yang luas menjadikan Terios sebagai salah satu SUV favorit keluarga Indonesia.</p><hr><h2>Kenyamanan dan Biaya Perawatan yang Terjangkau</h2><p>Selain memiliki performa yang tangguh, Daihatsu Terios juga dikenal memiliki biaya perawatan yang ekonomis serta didukung jaringan bengkel resmi Daihatsu yang luas di seluruh Indonesia. Hal ini memberikan kemudahan bagi pemilik kendaraan dalam melakukan servis berkala dan mendapatkan suku cadang asli.</p><hr><h2>Kesimpulan</h2><p>Daihatsu All New Terios merupakan pilihan ideal bagi Anda yang menginginkan SUV tangguh dengan desain modern, kapasitas tujuh penumpang, serta fitur keselamatan yang lengkap. Dengan performa mesin yang andal dan biaya operasional yang efisien, Terios siap menjadi partner terbaik untuk menemani setiap perjalanan bersama keluarga.</p><p>Untuk informasi harga terbaru, promo menarik, serta simulasi kredit Daihatsu All New Terios, hubungi tim <strong>Daihatsu PRM</strong> dan dapatkan penawaran terbaik sesuai kebutuhan Anda.</p><hr><h3></h3><p><strong>Temukan Daihatsu All New Terios 2026 dengan desain SUV modern, kapasitas 7 penumpang, mesin 1.5L Dual VVT-i, serta fitur keselamatan lengkap. Dapatkan promo dan simulasi kredit terbaik hanya di Daihatsu PRM.</strong> 🚙✨</p>','articles/01KVGHEKSA8DR8VWXSXVHQGDT1.webp',0,3,1,'new-terios',NULL,'2026-06-19 11:14:21','2026-06-19 11:14:21'),(4,'GranMax Makin Kuat Nyaman Aman','<h1>Daihatsu Gran Max: Kendaraan Niaga Andal dengan Kapasitas Besar dan Performa Tangguh</h1><h2>Mengenal Daihatsu Gran Max</h2><p>Daihatsu Gran Max merupakan kendaraan niaga andalan Daihatsu yang telah dipercaya oleh berbagai pelaku usaha di Indonesia. Dengan daya angkut yang besar, mesin yang tangguh, serta biaya operasional yang ekonomis, Gran Max menjadi pilihan ideal untuk mendukung berbagai kebutuhan bisnis, mulai dari distribusi barang hingga transportasi penumpang.</p><p>Tersedia dalam berbagai varian seperti Gran Max Pick Up, Gran Max Blind Van, dan Gran Max Mini Bus, kendaraan ini dirancang untuk memberikan produktivitas maksimal bagi para pengusaha maupun pengguna komersial.</p><hr><h2>Desain Fungsional dan Praktis</h2><p>Daihatsu Gran Max hadir dengan desain yang sederhana namun fungsional. Dimensi kendaraan yang ideal memudahkan pengemudi untuk bermanuver di jalanan perkotaan maupun area usaha yang padat.</p><p>Keunggulan desain Daihatsu Gran Max antara lain:</p><ul><li><p>Dimensi bak yang luas untuk kebutuhan angkut barang.</p></li><li><p>Kabin yang nyaman untuk pengemudi dan penumpang.</p></li><li><p>Bukaan pintu lebar untuk mempermudah proses bongkar muat.</p></li><li><p>Radius putar yang kecil sehingga mudah dikendalikan.</p></li></ul><hr><h2>Pilihan Mesin Bertenaga dan Irit</h2><p>Daihatsu Gran Max tersedia dengan pilihan mesin yang telah terbukti tangguh dan efisien untuk mendukung aktivitas bisnis sehari-hari.</p><p>Pilihan mesin yang tersedia:</p><h3>Mesin 1.3L</h3><ul><li><p>Kapasitas mesin 1.298 cc.</p></li><li><p>Teknologi DOHC VVT-i.</p></li><li><p>Performa responsif dan hemat bahan bakar.</p></li><li><p>Cocok untuk kebutuhan distribusi ringan hingga menengah.</p></li></ul><h3>Mesin 1.5L</h3><ul><li><p>Kapasitas mesin 1.495 cc.</p></li><li><p>Tenaga lebih besar untuk membawa beban yang lebih berat.</p></li><li><p>Cocok untuk kebutuhan usaha dengan mobilitas tinggi.</p></li></ul><p>Kedua pilihan mesin tersebut dipadukan dengan transmisi manual yang terkenal tangguh dan mudah dalam perawatan.</p><hr><h2>Kapasitas Angkut yang Maksimal</h2><p>Salah satu keunggulan utama Daihatsu Gran Max adalah kapasitas angkutnya yang besar. Hal ini menjadikan Gran Max sebagai kendaraan favorit untuk berbagai jenis usaha, seperti:</p><ul><li><p>Distribusi barang.</p></li><li><p>Usaha kuliner dan katering.</p></li><li><p>Toko online dan logistik.</p></li><li><p>UMKM dan usaha perdagangan.</p></li><li><p>Kendaraan operasional perusahaan.</p></li><li><p>Transportasi penumpang dan travel.</p></li></ul><p>Dengan ruang kargo yang luas, Gran Max mampu mendukung produktivitas usaha secara maksimal.</p><hr><h2>Kabin Nyaman dan Ergonomis</h2><p>Meskipun dikenal sebagai kendaraan niaga, Daihatsu Gran Max tetap menawarkan kenyamanan bagi pengemudi maupun penumpang.</p><p>Fitur kenyamanan yang tersedia meliputi:</p><ul><li><p>AC yang sejuk dan nyaman.</p></li><li><p>Posisi duduk ergonomis.</p></li><li><p>Dashboard yang praktis dan mudah dijangkau.</p></li><li><p>Ruang penyimpanan yang fungsional.</p></li><li><p>Visibilitas yang baik untuk mendukung keselamatan berkendara.</p></li></ul><hr><h2>Biaya Perawatan yang Ekonomis</h2><p>Daihatsu Gran Max dikenal memiliki biaya perawatan yang terjangkau dengan ketersediaan suku cadang yang melimpah. Selain itu, jaringan bengkel resmi Daihatsu yang tersebar luas di seluruh Indonesia memberikan kemudahan dalam melakukan servis berkala.</p><p>Keunggulan lainnya:</p><ul><li><p>Suku cadang asli mudah didapatkan.</p></li><li><p>Konsumsi bahan bakar yang efisien.</p></li><li><p>Durabilitas tinggi untuk penggunaan jangka panjang.</p></li><li><p>Nilai jual kembali yang baik.</p></li></ul><hr><h2>Partner Terbaik untuk Mengembangkan Usaha</h2><p>Daihatsu Gran Max bukan hanya sekadar kendaraan, tetapi juga partner bisnis yang dapat membantu meningkatkan produktivitas dan efisiensi usaha. Dengan performa yang tangguh, daya angkut besar, serta biaya operasional yang ekonomis, Gran Max menjadi salah satu kendaraan niaga paling diminati di Indonesia.</p><hr><h2>Kesimpulan</h2><p>Daihatsu Gran Max merupakan pilihan terbaik bagi Anda yang membutuhkan kendaraan niaga yang tangguh, hemat, dan memiliki kapasitas angkut besar. Dengan pilihan varian yang lengkap serta dukungan layanan purna jual Daihatsu yang terpercaya, Gran Max siap menjadi partner andal dalam mengembangkan bisnis Anda.</p><p>Untuk informasi harga terbaru, promo menarik, serta simulasi kredit Daihatsu Gran Max Pick Up maupun Gran Max Mini Bus, hubungi tim <strong>Daihatsu PRM</strong> dan dapatkan penawaran terbaik sesuai kebutuhan usaha Anda.</p><hr><h3></h3><p><strong>Temukan Daihatsu Gran Max 2026 dengan pilihan varian Pick Up dan Mini Bus, mesin tangguh 1.3L dan 1.5L, kapasitas angkut besar, serta biaya operasional yang ekonomis. Dapatkan promo dan simulasi kredit terbaik hanya di Daihatsu PRM.</strong> 🚚✨</p>','articles/01KVGHKQ1K67Y35EQVZRX8JSAG.webp',0,3,1,'granmax-makin-kuat-nyaman-aman',NULL,'2026-06-19 11:17:08','2026-06-19 11:17:08'),(5,'All New Xenia Sahabat Keluarga','<h1>Daihatsu All New Xenia: MPV Keluarga Modern dengan Kenyamanan dan Fitur Lengkap</h1><h2>Mengenal Daihatsu All New Xenia</h2><p>Daihatsu All New Xenia hadir sebagai MPV keluarga andalan yang menawarkan kombinasi sempurna antara kenyamanan, efisiensi bahan bakar, dan teknologi modern. Mengusung platform DNGA (Daihatsu New Global Architecture), All New Xenia memberikan pengalaman berkendara yang lebih nyaman, stabil, dan menyenangkan untuk berbagai kebutuhan keluarga Indonesia.</p><p>Dengan desain yang lebih modern dan kabin yang luas, Daihatsu Xenia menjadi pilihan tepat untuk aktivitas sehari-hari, perjalanan jauh, hingga menemani momen liburan bersama keluarga tercinta.</p><hr><h2>Desain Modern dan Elegan</h2><p>All New Xenia tampil dengan desain yang lebih sporty dan premium. Garis bodi yang tegas serta tampilan depan yang modern memberikan kesan elegan sekaligus dinamis.</p><p>Keunggulan eksterior Daihatsu All New Xenia antara lain:</p><ul><li><p>Grille depan modern dan elegan.</p></li><li><p>LED Headlamp dengan desain stylish.</p></li><li><p>Velg alloy berdesain sporty.</p></li><li><p>Ground clearance tinggi yang cocok untuk berbagai kondisi jalan.</p></li><li><p>Dimensi ideal untuk kenyamanan seluruh keluarga.</p></li></ul><hr><h2>Kabin Luas dan Nyaman untuk 7 Penumpang</h2><p>Masuk ke dalam kabin, Daihatsu All New Xenia menawarkan ruang yang lega dengan konfigurasi hingga tujuh penumpang. Interior yang modern serta berbagai fitur kenyamanan membuat perjalanan menjadi lebih menyenangkan.</p><p>Fitur interior unggulan meliputi:</p><ul><li><p>Head Unit Touchscreen dengan konektivitas smartphone.</p></li><li><p>Digital AC.</p></li><li><p>Keyless Entry dan Push Start Button.</p></li><li><p>USB Charging Port.</p></li><li><p>Banyak ruang penyimpanan yang praktis.</p></li><li><p>Kursi fleksibel dengan konfigurasi yang mudah disesuaikan.</p></li><li><p>Bagasi luas untuk kebutuhan keluarga.</p></li></ul><hr><h2>Pilihan Mesin yang Efisien dan Bertenaga</h2><p>Daihatsu All New Xenia tersedia dengan dua pilihan mesin yang dapat disesuaikan dengan kebutuhan pengguna.</p><h3>Mesin 1.3L</h3><ul><li><p>Kapasitas mesin 1.329 cc.</p></li><li><p>Teknologi Dual VVT-i.</p></li><li><p>Performa responsif dan hemat bahan bakar.</p></li><li><p>Cocok untuk penggunaan harian dan keluarga.</p></li></ul><h3>Mesin 1.5L</h3><ul><li><p>Kapasitas mesin 1.496 cc.</p></li><li><p>Tenaga lebih besar untuk perjalanan jauh maupun membawa muatan penuh.</p></li><li><p>Tersedia pilihan transmisi Manual dan CVT.</p></li></ul><p>Kedua mesin tersebut dirancang untuk memberikan efisiensi bahan bakar yang optimal sekaligus kenyamanan berkendara yang lebih baik.</p><hr><h2>Menggunakan Platform DNGA Modern</h2><p>Daihatsu All New Xenia dibangun menggunakan platform DNGA yang memberikan berbagai keunggulan, seperti:</p><ul><li><p>Stabilitas berkendara yang lebih baik.</p></li><li><p>Kabin lebih senyap dan nyaman.</p></li><li><p>Efisiensi bahan bakar yang meningkat.</p></li><li><p>Handling yang lebih responsif.</p></li><li><p>Suspensi yang nyaman untuk perjalanan jauh.</p></li></ul><p>Teknologi ini menjadikan All New Xenia semakin nyaman digunakan sebagai kendaraan keluarga.</p><hr><h2>Fitur Keselamatan Lengkap</h2><p>Daihatsu All New Xenia dilengkapi berbagai fitur keselamatan modern untuk memberikan perlindungan maksimal selama perjalanan.</p><p>Fitur keselamatan yang tersedia meliputi:</p><ul><li><p>Vehicle Stability Control (VSC).</p></li><li><p>Hill Start Assist (HSA).</p></li><li><p>Anti-lock Braking System (ABS).</p></li><li><p>Emergency Stop Signal (ESS).</p></li><li><p>Dual SRS Airbags.</p></li><li><p>Rear Parking Camera.</p></li><li><p>ISOFIX untuk kursi anak.</p></li><li><p>Advanced Safety Assist (ASA) pada tipe tertentu.</p></li></ul><p>Dengan berbagai fitur tersebut, pengemudi dan seluruh anggota keluarga dapat menikmati perjalanan dengan lebih aman dan nyaman.</p><hr><h2>Cocok untuk Keluarga Modern Indonesia</h2><p>Daihatsu All New Xenia dirancang untuk memenuhi berbagai kebutuhan keluarga modern, seperti:</p><ul><li><p>Mobilitas sehari-hari.</p></li><li><p>Perjalanan luar kota.</p></li><li><p>Liburan bersama keluarga.</p></li><li><p>Aktivitas bisnis dan operasional.</p></li><li><p>Kendaraan dengan kapasitas penumpang yang besar.</p></li></ul><p>Kenyamanan kabin dan biaya operasional yang ekonomis menjadikan All New Xenia sebagai salah satu MPV favorit keluarga Indonesia.</p><hr><h2>Kesimpulan</h2><p>Daihatsu All New Xenia merupakan pilihan ideal bagi Anda yang menginginkan kendaraan keluarga dengan desain modern, kabin luas, fitur lengkap, serta konsumsi bahan bakar yang efisien. Dengan teknologi terkini dan kenyamanan maksimal, All New Xenia siap menemani setiap perjalanan bersama keluarga tercinta.</p><p>Untuk informasi harga terbaru, promo menarik, serta simulasi kredit Daihatsu All New Xenia, hubungi tim <strong>Daihatsu PRM</strong> dan dapatkan penawaran terbaik sesuai kebutuhan Anda.</p><hr><h3></h3><p><strong>Temukan Daihatsu All New Xenia 2026 dengan desain modern, kapasitas 7 penumpang, pilihan mesin 1.3L dan 1.5L, serta fitur keselamatan lengkap. Dapatkan promo dan simulasi kredit terbaik hanya di Daihatsu PRM.</strong> 🚗✨</p>','articles/01KVGHQ210TBD5J9VM539MZ398.webp',0,3,1,'all-new-xenia-sahabat-keluarga',NULL,'2026-06-19 11:18:58','2026-06-19 11:18:58');
/*!40000 ALTER TABLE `article_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `authors_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'daihatsuprm','admin','authors/01KVGH6PD59RQ305SSG5QZ068M.png','daihatsuprm',NULL,'2026-06-19 11:10:02','2026-06-19 11:10:02');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner_advertisements`
--

DROP TABLE IF EXISTS `banner_advertisements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banner_advertisements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner_advertisements`
--

LOCK TABLES `banner_advertisements` WRITE;
/*!40000 ALTER TABLE `banner_advertisements` DISABLE KEYS */;
/*!40000 ALTER TABLE `banner_advertisements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maps_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branches`
--

LOCK TABLES `branches` WRITE;
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` VALUES (1,'PRM Serpong','Tangerang Selatan','taman tekno boulevard blok b 19-20 bsd city Setu, Setu, Serpong Sub-District, South Tangerang City, Banten 15311','085222300036','https://maps.app.goo.gl/uNhoDHG4HguT3BK96','branches/01KVNSK5HQR65Q99BK0W93YZVS.jpeg',1,0,'2026-06-21 12:12:51','2026-06-21 12:12:51'),(2,'Pandeglang','Serang','Jl. Raya Serang - Pandeglang, Pandeglang, Kec. Karang Tj., Kabupaten Pandeglang, Banten 42251','08999898970','https://maps.app.goo.gl/mXatgj27h9z4Qgpz9','branches/01KVNSQT88ZNRATHQPZK73MTVK.webp',1,0,'2026-06-21 12:15:24','2026-06-21 12:15:24'),(3,'Pameran Pasar Kemis','Tangerang','JL.bumi indah \nRuko Union no RPR 05','085222300036','https://maps.app.goo.gl/9Ucm7tytScpXZ6keA','branches/01KVNSYQCZ64M3QTVWVJBD54FJ.png',1,0,'2026-06-21 12:19:10','2026-06-21 12:19:10');
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_categories`
--

DROP TABLE IF EXISTS `car_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_categories`
--

LOCK TABLES `car_categories` WRITE;
/*!40000 ALTER TABLE `car_categories` DISABLE KEYS */;
INSERT INTO `car_categories` VALUES (1,'SUV','suv','2026-06-19 03:56:11','2026-06-19 03:56:11',NULL),(2,'LGCC','lgcc','2026-06-19 03:56:34','2026-06-19 03:56:34',NULL),(3,'Commercial','commercial','2026-06-19 03:58:38','2026-06-19 03:58:38',NULL),(4,'Pickup','pickup','2026-06-19 03:58:45','2026-06-19 03:58:45',NULL),(5,'Van','van','2026-06-19 03:58:51','2026-06-19 03:58:51',NULL),(6,'Hybrid','hybrid','2026-06-19 03:58:58','2026-06-19 03:58:58',NULL),(7,'Special Edition','special-edition','2026-06-19 03:59:05','2026-06-19 03:59:05',NULL),(8,'City Car','city-car','2026-06-19 09:41:40','2026-06-19 09:41:40',NULL),(9,'MPV','mpv','2026-06-19 09:56:20','2026-06-19 09:56:20',NULL),(10,'Custom','custom','2026-06-19 09:58:20','2026-06-19 09:58:20',NULL);
/*!40000 ALTER TABLE `car_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_credit_simulations`
--

DROP TABLE IF EXISTS `car_credit_simulations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_credit_simulations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `car_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otr_price` bigint unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_credit_simulations_car_id_foreign` (`car_id`),
  CONSTRAINT `car_credit_simulations_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_credit_simulations`
--

LOCK TABLES `car_credit_simulations` WRITE;
/*!40000 ALTER TABLE `car_credit_simulations` DISABLE KEYS */;
INSERT INTO `car_credit_simulations` VALUES (2,4,'X AT',200000000,1,'2026-06-19 04:37:08','2026-06-19 04:37:08'),(3,4,'Ayla 1.0 M MT',155200000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(4,4,'Ayla 1.0 X MT',168100000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(5,4,'Ayla 1.0 X CVT',188100000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(6,4,'Ayla 1.2 R MT',180200000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(7,4,'Ayla 1.2 R CVT',200200000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(8,14,'Sigra 1.0 D MT',157250000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(9,14,'Sigra 1.0 M MT',169650000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(10,14,'Sigra 1.2 X MT',173400000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(11,14,'Sigra 1.2 X AT',186700000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(12,14,'Sigra 1.2 R MT',180100000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(13,14,'Sigra 1.2 R AT',194900000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(14,13,'Xenia 1.3 X MT',243950000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(15,13,'Xenia 1.3 X CVT',261350000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(16,13,'Xenia 1.3 R MT',254950000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(17,13,'Xenia 1.3 R CVT',272450000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(18,8,'Terios 1.5 X MT',268250000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(19,8,'Terios 1.5 X AT',279150000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(20,8,'Terios 1.5 R MT',295850000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(21,8,'Terios 1.5 R AT',306750000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(22,6,'Rocky 1.2 X MT',241650000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(23,6,'Rocky 1.2 X CVT',259550000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(24,6,'Rocky 1.0 R TC MT',264550000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(25,6,'Rocky 1.0 R TC CVT',279550000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(26,6,'Rocky Hybrid 1.2 X',301800000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(27,15,'Luxio 1.5 D MT',248850000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(28,15,'Luxio 1.5 X MT',268050000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(29,15,'Luxio 1.5 X AT',280150000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(30,11,'Pickup 1.3 STD',179450000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(31,11,'Pickup 1.5 STD',189350000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(32,11,'Pickup 1.5 ACPS',196450000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(33,9,'Minibus 1.3 D FH',221750000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(34,9,'Minibus 1.3 D FF',228550000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(35,9,'Minibus 1.5 D PS',242250000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(36,10,'Blindvan 1.3 AC',194250000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15'),(37,7,'Rocky e-Smart Hybrid 1.2 X',301800000,1,'2026-06-19 12:20:15','2026-06-19 12:20:15');
/*!40000 ALTER TABLE `car_credit_simulations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_features`
--

DROP TABLE IF EXISTS `car_features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_features` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `car_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_features_car_id_foreign` (`car_id`),
  CONSTRAINT `car_features_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_features`
--

LOCK TABLES `car_features` WRITE;
/*!40000 ALTER TABLE `car_features` DISABLE KEYS */;
INSERT INTO `car_features` VALUES (1,4,'Eksterior','Hatchback dengan platform DNGA (Daihatsu New Global Architecture), memberikan tampilan yang agresif & sporty serta kenyamanan yang lebih baik untuk sahabat keluarga muda Indonesia','car-features/01KVFT7KS6RR0GSS14MA2XT5XG.png',0,'2026-06-19 04:28:35','2026-06-19 04:28:35'),(2,7,'Eksterior','Compact SUV yang didukung dengan teknologi Strong Series Hybrid yang canggih dan efisien, membuat Sahabat bisa tampil aktif dan tangguh dalam setiap perjalanan.','car-features/01KVGEP5JGQ7Z2Q92G5QAVWGV6.png',0,'2026-06-19 10:26:03','2026-06-19 10:26:03'),(3,7,'Interior','Desain modern dan dinamis, dilengkapi dengan fitur kenyamanan dan keselamatan untuk pengalaman berkendara yang lebih aman dan tetap stylish.','car-features/01KVGEQC1K5NR4JJVCXJJ7NJKG.png',0,'2026-06-19 10:26:42','2026-06-19 10:26:42'),(4,7,'Real Hybrid','Daihatsu Rocky e-SMART Hybrid, digerakkan secara sepenuhnya oleh motor listrik, yang memberikan performa akselerasi yang responsif, konsumsi bahan bakar yang irit, serta ramah lingkungan.','car-features/01KVGERB5TV8EN8RJ13JXVFWCJ.jpeg',0,'2026-06-19 10:27:14','2026-06-19 10:27:14'),(5,7,'Advanced Features','Dilengkapi fitur-fitur pintar seperti Advanced Safety Assist dan Smart Pedal, untuk kemudahan dan kenyamanan berkendara yang semakin praktis, aman, dan modern.','car-features/01KVGESFG3036F0DD3CDKGZV8Y.jpeg',0,'2026-06-19 10:27:52','2026-06-19 10:27:52');
/*!40000 ALTER TABLE `car_features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `careers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Full Time',
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `requirement` longtext COLLATE utf8mb4_unicode_ci,
  `benefit` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `careers_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `careers`
--

LOCK TABLES `careers` WRITE;
/*!40000 ALTER TABLE `careers` DISABLE KEYS */;
INSERT INTO `careers` VALUES (1,'Sales Eksekutif','sales-eksekutif','Serpong','Full Time',NULL,'Lamar Sekarang','https://wa.me/6285222300036','careers/01KVGPH2023P4A3BJX5M6F1J01.jpg','<p></p>','<p></p>','<p></p>',1,1,'2026-06-19 12:43:04','2026-06-19 12:54:21'),(3,'Sales Eksekutif Pasar Kemis','sales-eksekutif-pasar-kemis','Pasar Kemis','Full Time',NULL,'Lamar Sekarang','https://wa.me/6285222300036','careers/01KVGPP8HQR2ZE952FS8EB60VT.png','<p></p>','<p></p>','<p></p>',3,1,'2026-06-19 12:45:55','2026-06-19 12:54:31'),(4,'Sales Eksekutif Pandeglang','sales-eksekutif-pandeglang','Pandeglang','Full Time',NULL,'Lamar Sekarang','https://wa.me/6285222300036','careers/01KVGPQGMFWM4VTETBWYCKEM43.jpg','<p></p>','<p></p>','<p></p>',2,1,'2026-06-19 12:46:36','2026-06-19 12:54:05');
/*!40000 ALTER TABLE `careers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `car_category_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `specification` longtext COLLATE utf8mb4_unicode_ci,
  `engine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat_capacity` int DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cars_slug_unique` (`slug`),
  KEY `cars_car_category_id_foreign` (`car_category_id`),
  CONSTRAINT `cars_car_category_id_foreign` FOREIGN KEY (`car_category_id`) REFERENCES `car_categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (4,'2026-06-19 04:24:47','2026-06-19 10:20:50',8,'New Ayla','new-ayla',200000000,'cars/01KVFT0NM3HZA7NAFT63B6TD7B.png','cars/hero/01KVFT0NM5QM2YXZ57FFRC339G.png','https://www.youtube.com/watch?v=xd3SFXHn2SU','Daihatsu All New Ayla hadir dengan desain modern, konsumsi bahan bakar yang irit, serta fitur keselamatan dan kenyamanan yang semakin lengkap. Cocok untuk kebutuhan mobilitas harian, keluarga muda, maupun penggunaan di perkotaan dengan biaya operasional yang efisien.','• Desain modern dan sporty\n• Head Unit Touchscreen\n• Digital AC\n• Dual Airbags\n• ABS & Vehicle Stability Control (tipe tertentu)\n• Push Start Button (tipe tertentu)\n• Ground clearance tinggi\n• Kabin luas dan nyaman\n• Konsumsi bahan bakar irit','1.2L WA-VE DOHC Dual VVT-i 3 Silinder 88 PS @ 6.000 rpm 113 Nm @ 4.500 rpm','Bensin','Manual 5-Speed / D-CVT Automatic',5,6,1,1,'Daihatsu All New Ayla 2026 - Harga, Spesifikasi dan Promo Terbaru | Daihatsu PRM','Temukan Daihatsu All New Ayla 2026 dengan harga terbaik, spesifikasi lengkap, simulasi kredit mudah, dan promo menarik hanya di Daihatsu PRM. Hubungi kami sekarang untuk penawaran terbaik.',NULL),(5,'2026-06-19 04:34:56','2026-06-19 09:50:53',2,'ayla2','ayla2',200000000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL,'2026-06-19 09:50:53'),(6,'2026-06-19 09:50:41','2026-06-19 10:30:53',1,'New Rocky','new-rocky',241605000,'cars/01KVGDS03DCGPSS17B2EYWY59C.png','cars/hero/01KVGDS03EN3GYFBAJ4K6NTB71.webp','https://www.youtube.com/results?search_query=daihatsu+rocky','SUV modern dengan desain sporty, fitur keselamatan lengkap, dan kabin nyaman untuk keluarga muda.','LED Headlamp, Digital Meter Cluster, Smart Entry, ASA (tipe tertentu), Ground Clearance Tinggi','1.2L WA-VE','Bensin','MT / CVT',5,0,0,1,'New Rocky - Harga dan Promo Terbaru | Daihatsu PRM','Temukan New Rocky dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(7,'2026-06-19 09:50:41','2026-06-19 13:17:53',1,'Rocky e-Smart Hybrid','rocky-e-smart-hybrid',301799997,'cars/01KVGRGT96E5ARA3SP0XV1WPK8.png','cars/hero/01KVGEKKD1Z5MSKFWZJ35B9TQJ.webp','https://www.youtube.com/watch?v=uUQIFKndQRs','SUV hybrid inovatif dengan efisiensi bahan bakar tinggi dan teknologi e-Smart Hybrid terbaru.','e-Smart Hybrid System, Digital Meter, Smart Entry, Push Start Button','1.2L Hybrid','Bensin + Listrik','e-CVT',5,0,0,1,'Rocky e-Smart Hybrid - Harga dan Promo Terbaru | Daihatsu PRM','Temukan Rocky e-Smart Hybrid dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(8,'2026-06-19 09:50:41','2026-06-19 10:51:52',1,'New Terios','new-terios',245550000,'cars/01KVGG5EF3AVB2MH12FSMDNY57.png','cars/hero/01KVGG5EF4PPVW5S000W0ME3K9.webp','https://www.youtube.com/watch?v=Qsd9NooZ4yM&list=PL0anAIBm-UKVTvU8ewB1js1z0sNFS7wXm','SUV tangguh untuk keluarga dan petualangan dengan ground clearance tinggi dan kapasitas 7 penumpang.','Hill Start Assist, Vehicle Stability Control, Rear Camera, Ground Clearance Tinggi','1.5L 2NR-VE','Bensin','MT / AT',7,0,0,1,'New Terios - Harga dan Promo Terbaru | Daihatsu PRM','Temukan New Terios dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(9,'2026-06-19 09:50:41','2026-06-19 11:57:28',3,'Granmax MB','granmax-mb',175900000,'cars/01KVGG74DBKR3YFVWBXAMPBR4K.png',NULL,'https://www.youtube.com/results?search_query=gran+max+minibus','Kendaraan niaga dan penumpang yang luas, cocok untuk transportasi usaha maupun travel.','Kabin Luas, AC Double Blower, Sliding Door','1.3L / 1.5L','Bensin','MT',8,7,0,1,'Gran Max MiniBus - Harga dan Promo Terbaru | Daihatsu PRM','Temukan Gran Max MiniBus dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(10,'2026-06-19 09:50:41','2026-06-19 11:58:52',3,'Granmax BV','granmax-bv',163550000,'cars/01KVGG7TAAY0DVEC6VRP0VTS8T.png',NULL,'https://www.youtube.com/results?search_query=gran+max+blind+van','Kendaraan niaga andalan dengan ruang kargo besar untuk distribusi dan logistik bisnis.','Cargo Space Luas, Suspensi Tangguh, Perawatan Mudah','1.3L / 1.5L','Bensin','MT',2,8,0,1,'Gran Max Blind Van - Harga dan Promo Terbaru | Daihatsu PRM','Temukan Gran Max Blind Van dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(11,'2026-06-19 09:50:41','2026-06-19 11:57:04',3,'Granmax PU','granmax-pu',161450000,'cars/01KVGG8DCTZV2903QA44ZAW7JV.png',NULL,'https://www.youtube.com/results?search_query=gran+max+pick+up','Pick up tangguh dengan bak luas untuk mendukung berbagai kebutuhan usaha.','Bak Terluas di Kelasnya, Chassis Kuat, Radius Putar Kecil','1.3L / 1.5L','Bensin','MT',3,9,0,1,'Gran Max Pick Up - Harga dan Promo Terbaru | Daihatsu PRM','Temukan Gran Max Pick Up dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(12,'2026-06-19 09:50:41','2026-06-19 10:53:54',8,'Sirion','sirion',236850000,'cars/01KVGG954THN5B3GC2TRC5KYC8.png',NULL,'https://www.youtube.com/results?search_query=daihatsu+sirion','Hatchback stylish dengan fitur modern, cocok untuk mobilitas perkotaan yang dinamis.','Keyless Entry, Push Start, LED Headlamp, Digital AC','1.3L 1NR-VE','Bensin','CVT',5,6,0,1,'Sirion - Harga dan Promo Terbaru | Daihatsu PRM','Temukan Sirion dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(13,'2026-06-19 09:56:20','2026-06-19 11:56:33',9,'All New Xenia','all-new-xenia',226150000,'cars/01KVGG9Q2ATHQWS15HVQKRMCHK.png',NULL,'https://www.youtube.com/results?search_query=daihatsu+xenia','MPV keluarga modern dengan kabin luas, fitur lengkap, dan konsumsi bahan bakar efisien.','Push Start, Digital AC, VSC, HSA, Touchscreen Audio','1.3L / 1.5L','Bensin','MT / CVT',7,5,0,1,'New Xenia - Harga dan Promo Terbaru | Daihatsu PRM','Temukan New Xenia dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(14,'2026-06-19 09:56:20','2026-06-19 10:54:39',9,'New Sigra','new-sigra',141700000,'cars/01KVGGAHMMXT569DAF3CZ9A3W4.png',NULL,'https://www.youtube.com/results?search_query=daihatsu+sigra','Mobil LCGC keluarga dengan harga terjangkau, irit bahan bakar, dan kapasitas hingga 7 penumpang.','Dual Airbag, ABS, Rear Parking Sensor, Audio Steering Switch','1.0L / 1.2L','Bensin','MT / AT',7,3,0,1,'New Sigra - Harga dan Promo Terbaru | Daihatsu PRM','Temukan New Sigra dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(15,'2026-06-19 09:56:20','2026-06-19 10:55:20',9,'Luxio','luxio',240750000,'cars/01KVGGBS180GP6ZVZ9CXB4AH70.png',NULL,'https://www.youtube.com/results?search_query=daihatsu+luxio','MPV premium dengan kabin lega dan pintu geser yang memudahkan akses penumpang.','Captain Seat, Double Blower, Chrome Exterior','1.5L 2NR-VE','Bensin','MT / AT',8,10,0,1,'Luxio - Harga dan Promo Terbaru | Daihatsu PRM','Temukan Luxio dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL),(16,'2026-06-19 10:02:49','2026-06-19 10:58:26',10,'Gran Max Custom','gran-max-custom',300000000,'cars/01KVGGHEVSS8D2H61N3C3MR3NB.webp',NULL,'https://www.youtube.com/results?search_query=gran+max+custom','Daihatsu Gran Max yang dimodifikasi sesuai kebutuhan bisnis, instansi, maupun pelayanan publik seperti ambulance, mobil desa, food truck, mobil toko, perpustakaan keliling, kendaraan operasional pemerintah, hingga puskesmas keliling.','Karoseri custom sesuai kebutuhan, desain interior dan eksterior fleksibel, pilihan box atau kabin khusus, branding kendaraan, lampu rotator opsional, rak penyimpanan, kitchen set, ruang pelayanan, dan berbagai fitur tambahan sesuai proyek.','1.5L 2NR-VE','Bensin','MT',2,11,0,1,'Gran Max Custom - Harga dan Promo Terbaru | Daihatsu PRM','Temukan Gran Max Custom dengan promo terbaik dan simulasi kredit mudah di Daihatsu PRM.',NULL);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'SUV','suv','categories/01KVFR4CQ51HETEREGKKET0KCP.webp','2026-06-19 03:52:42','2026-06-19 03:51:52','2026-06-19 03:52:42'),(2,'Promo dan Penawaran','promo-dan-penawaran','categories/01KVFRG0645MFQ4KDQGJ6F7S5P.webp',NULL,'2026-06-19 03:58:12','2026-06-19 03:58:12'),(3,'Produk Daihatsu','produk-daihatsu','categories/01KVGH49TP6EH17WRAX2NMWZCQ.webp',NULL,'2026-06-19 11:08:43','2026-06-19 11:08:43');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit_cars`
--

DROP TABLE IF EXISTS `credit_cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credit_cars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit_cars`
--

LOCK TABLES `credit_cars` WRITE;
/*!40000 ALTER TABLE `credit_cars` DISABLE KEYS */;
INSERT INTO `credit_cars` VALUES (1,'Ayla 1.0 M MT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(2,'Ayla 1.0 X MT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(3,'Ayla 1.0 X CVT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(4,'Ayla 1.2 R MT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(5,'Ayla 1.2 R CVT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(6,'Sigra 1.0 D MT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(7,'Sigra 1.0 M MT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(8,'Sigra 1.2 X MT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(9,'Sigra 1.2 X AT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(10,'Sigra 1.2 R MT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(11,'Sigra 1.2 R AT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(12,'Xenia 1.3 X MT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(13,'Xenia 1.3 X CVT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(14,'Xenia 1.3 R MT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(15,'Xenia 1.3 R CVT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(16,'Terios X MT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(17,'Terios X AT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(18,'Terios R MT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(19,'Terios R AT MC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(20,'Rocky 1.2 X MT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(21,'Rocky 1.2 X CVT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(22,'Rocky 1.0 R TC MT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(23,'Rocky 1.0 R TC CVT',1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(24,'Rocky Hybrid 1.2 X',1,'2026-06-19 02:10:24','2026-06-19 02:10:24');
/*!40000 ALTER TABLE `credit_cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit_installments`
--

DROP TABLE IF EXISTS `credit_installments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credit_installments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `credit_program_id` bigint unsigned NOT NULL,
  `dp_percent` tinyint unsigned NOT NULL,
  `tenor` tinyint unsigned NOT NULL,
  `installment` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `credit_installments_credit_program_id_foreign` (`credit_program_id`),
  CONSTRAINT `credit_installments_credit_program_id_foreign` FOREIGN KEY (`credit_program_id`) REFERENCES `credit_programs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit_installments`
--

LOCK TABLES `credit_installments` WRITE;
/*!40000 ALTER TABLE `credit_installments` DISABLE KEYS */;
INSERT INTO `credit_installments` VALUES (1,1,5,12,13916000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(2,1,5,24,7305900,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(3,1,5,36,5218500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(4,1,5,48,4105220,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(5,1,5,60,3479000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(6,2,13,12,14684000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(7,2,13,24,7709100,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(8,2,13,36,5506500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(9,2,13,48,4331780,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(10,2,13,60,3671000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(11,3,17,12,16348000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(12,3,17,24,8582700,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(13,3,17,36,6130500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(14,3,17,48,4822660,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(15,3,17,60,4087000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(16,4,19,12,15680000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(17,4,19,24,8232000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(18,4,19,36,5880000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(19,4,19,48,4625600,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(20,4,19,60,3920000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(21,5,23,12,17292000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(22,5,23,24,9078300,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(23,5,23,36,6484500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(24,5,23,48,5101140,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(25,5,23,60,4323000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(26,6,5,12,14092000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(27,6,5,24,7398300,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(28,6,5,36,5284500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(29,6,5,48,4157140,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(30,6,5,60,3523000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(31,7,11,12,14816000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(32,7,11,24,7778400,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(33,7,11,36,5556000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(34,7,11,48,4370720,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(35,7,11,60,3704000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(36,8,15,12,15132000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(37,8,15,24,7944300,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(38,8,15,36,5674500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(39,8,15,48,4463940,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(40,8,15,60,3783000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(41,9,18,12,16228000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(42,9,18,24,8519700,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(43,9,18,36,6085500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(44,9,18,48,4787260,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(45,9,18,60,4057000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(46,10,17,12,15672000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(47,10,17,24,8227800,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(48,10,17,36,5877000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(49,10,17,48,4623240,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(50,10,17,60,3918000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(51,11,19,12,16920000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(52,11,19,24,8883000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(53,11,19,36,6345000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(54,11,19,48,4991400,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(55,11,19,60,4230000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(56,12,25,12,20928000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(57,12,25,24,10987200,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(58,12,25,36,7848000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(59,12,25,48,6173760,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(60,12,25,60,5232000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(61,13,28,12,22408000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(62,13,28,24,11764200,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(63,13,28,36,8403000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(64,13,28,48,6610360,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(65,13,28,60,5602000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(66,14,27,12,21872000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(67,14,27,24,11482800,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(68,14,27,36,8202000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(69,14,27,48,6452240,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(70,14,27,60,5468000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(71,15,30,12,22636000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(72,15,30,24,11883900,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(73,15,30,36,8488500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(74,15,30,48,6677620,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(75,15,30,60,5659000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(76,16,21,12,23016000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(77,16,21,24,12083400,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(78,16,21,36,8631000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(79,16,21,48,6789720,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(80,16,21,60,5754000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(81,17,22,12,23932000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(82,17,22,24,12564300,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(83,17,22,36,8974500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(84,17,22,48,7059940,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(85,17,22,60,5983000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(86,18,33,12,25316000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(87,18,33,24,13290900,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(88,18,33,36,9493500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(89,18,33,48,7468220,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(90,18,33,60,6329000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(91,19,35,12,26232000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(92,19,35,24,13771800,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(93,19,35,36,9837000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(94,19,35,48,7738440,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(95,19,35,60,6558000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(96,20,30,12,20752000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(97,20,30,24,10894800,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(98,20,30,36,7782000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(99,20,30,48,6121840,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(100,20,30,60,5188000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(101,21,34,12,22276000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(102,21,34,24,11694900,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(103,21,34,36,8353500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(104,21,34,48,6571420,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(105,21,34,60,5569000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(106,22,33,12,22692000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(107,22,33,24,11913300,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(108,22,33,36,8509500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(109,22,33,48,6694140,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(110,22,33,60,5673000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(111,23,37,12,23940000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(112,23,37,24,12568500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(113,23,37,36,8977500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(114,23,37,48,7062300,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(115,23,37,60,5985000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(116,24,54,12,25708000,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(117,24,54,24,13496700,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(118,24,54,36,9640500,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(119,24,54,48,7583860,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(120,24,54,60,6427000,'2026-06-19 02:10:24','2026-06-19 02:10:24');
/*!40000 ALTER TABLE `credit_installments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit_programs`
--

DROP TABLE IF EXISTS `credit_programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credit_programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `credit_car_id` bigint unsigned NOT NULL,
  `leasing_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otr_price` bigint unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `credit_programs_leasing_id_foreign` (`leasing_id`),
  KEY `credit_programs_credit_car_id_foreign` (`credit_car_id`),
  CONSTRAINT `credit_programs_credit_car_id_foreign` FOREIGN KEY (`credit_car_id`) REFERENCES `credit_cars` (`id`) ON DELETE CASCADE,
  CONSTRAINT `credit_programs_leasing_id_foreign` FOREIGN KEY (`leasing_id`) REFERENCES `leasings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit_programs`
--

LOCK TABLES `credit_programs` WRITE;
/*!40000 ALTER TABLE `credit_programs` DISABLE KEYS */;
INSERT INTO `credit_programs` VALUES (1,1,1,'Ayla 1.0 M MT',213740000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(2,2,1,'Ayla 1.0 X MT',233260000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(3,3,1,'Ayla 1.0 X CVT',262220000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(4,4,1,'Ayla 1.2 R MT',254200000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(5,5,1,'Ayla 1.2 R CVT',282380000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(6,6,1,'Sigra 1.0 D MT MC',216380000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(7,7,1,'Sigra 1.0 M MT MC',233240000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(8,8,1,'Sigra 1.2 X MT MC',241980000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(9,9,1,'Sigra 1.2 X AT MC',261420000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(10,10,1,'Sigra 1.2 R MT MC',252080000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(11,11,1,'Sigra 1.2 R AT MC',272800000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(12,12,1,'Xenia 1.3 X MT',338920000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(13,13,1,'Xenia 1.3 X CVT',364120000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(14,14,1,'Xenia 1.3 R MT',355080000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(15,15,1,'Xenia 1.3 R CVT',369540000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(16,16,1,'Terios X MT MC',366240000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(17,17,1,'Terios X AT MC',380980000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(18,18,1,'Terios R MT MC',412740000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(19,19,1,'Terios R AT MC',428480000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(20,20,1,'Rocky 1.2 X MT',341280000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(21,21,1,'Rocky 1.2 X CVT',368140000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(22,22,1,'Rocky 1.0 R TC MT',373380000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(23,23,1,'Rocky 1.0 R TC CVT',396100000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24'),(24,24,1,'Rocky Hybrid 1.2 X',439620000,1,'2026-06-19 02:10:24','2026-06-19 02:10:24');
/*!40000 ALTER TABLE `credit_programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hero_banners`
--

DROP TABLE IF EXISTS `hero_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hero_banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desktop_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hero_banners`
--

LOCK TABLES `hero_banners` WRITE;
/*!40000 ALTER TABLE `hero_banners` DISABLE KEYS */;
INSERT INTO `hero_banners` VALUES (1,'Mid Year Suprise Deal','hero-banner/01KVFTEZ51GAVSKK5DR9NAEGYV.png','hero-banner/01KVFTEZ52WTCWPSGHM58WZ17F.png',0,NULL,1,'2026-06-19 04:32:36','2026-06-19 04:33:28'),(2,'New Rocky Hybrid','hero-banner/01KVFTHNZCQEMY3Z1QYCQYM4JA.webp','hero-banner/01KVFTHNZD5N26NFWHFXAX25N0.webp',1,NULL,1,'2026-06-19 04:34:05','2026-06-19 04:34:05');
/*!40000 ALTER TABLE `hero_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_cars`
--

DROP TABLE IF EXISTS `image_cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image_cars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_cars`
--

LOCK TABLES `image_cars` WRITE;
/*!40000 ALTER TABLE `image_cars` DISABLE KEYS */;
/*!40000 ALTER TABLE `image_cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leads`
--

LOCK TABLES `leads` WRITE;
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leasings`
--

DROP TABLE IF EXISTS `leasings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leasings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `leasings_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leasings`
--

LOCK TABLES `leasings` WRITE;
/*!40000 ALTER TABLE `leasings` DISABLE KEYS */;
INSERT INTO `leasings` VALUES (1,'ACC',1,'2026-06-19 02:10:24','2026-06-19 02:10:24');
/*!40000 ALTER TABLE `leasings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_06_05_084011_create_categories_table',1),(5,'2026_06_05_084042_create_authors_table',1),(6,'2026_06_05_084340_create_banner_advertisements_table',1),(7,'2026_06_05_084422_create_article_news_table',1),(8,'2026_06_05_092317_create_branches_table',1),(9,'2026_06_05_092317_create_car_categories_table',1),(10,'2026_06_05_092317_create_cars_table',1),(11,'2026_06_05_092317_create_leads_table',1),(12,'2026_06_05_092317_create_promotions_table',1),(13,'2026_06_05_092317_create_sales_consultants_table',1),(14,'2026_06_05_093329_create_test_drives_table',1),(15,'2026_06_05_093343_create_image_cars_table',1),(16,'2026_06_10_185706_change_is_active_column_on_banner_advertisements',1),(17,'2026_06_11_082825_change_is_featured_column_on_article_news',1),(18,'2026_06_15_141317_add_fields_to_cars_table',1),(19,'2026_06_17_044146_create_testimonials_table',1),(20,'2026_06_18_030315_add_hero_and_youtube_to_cars_table',1),(21,'2026_06_18_030531_create_car_features_table',1),(22,'2026_06_18_043728_add_fields_to_car_categories_table',1),(23,'2026_06_18_044937_add_deleted_at_to_car_categories_table',1),(24,'2026_06_18_174417_create_hero_banners_table',1),(25,'2026_06_18_192620_create_services_table',1),(26,'2026_06_19_023938_create_credit_programs_table',1),(27,'2026_06_19_031859_create_credit_installments_table',1),(28,'2026_06_19_033052_add_leasing_to_credit_programs_table',1),(29,'2026_06_19_033640_create_leasings_table',1),(30,'2026_06_19_033818_add_leasing_id_to_credit_programs_table',1),(31,'2026_06_19_072944_create_credit_cars_table',1),(32,'2026_06_19_073039_alter_credit_programs_table',1),(33,'2026_06_19_075300_remove_leasing_column_from_credit_programs',1),(34,'2026_06_19_104105_create_car_credit_simulations_table',2),(35,'2026_06_19_171114_add_sort_order_to_cars_table',3),(36,'2026_06_19_193357_create_careers_table',4),(37,'2026_06_21_185348_create_branches_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions`
--

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_consultants`
--

DROP TABLE IF EXISTS `sales_consultants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales_consultants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_consultants`
--

LOCK TABLES `sales_consultants` WRITE;
/*!40000 ALTER TABLE `sales_consultants` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales_consultants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Test Drive','Rasakan langsung kenyamanan dan performa mobil Daihatsu pilihan Anda melalui layanan Test Drive dari Daihatsu PRM. Dapatkan pengalaman berkendara yang sesungguhnya, mulai dari kenyamanan kabin, fitur modern, hingga performa mesin yang responsif. Tim kami siap membantu Anda menemukan kendaraan yang paling sesuai dengan kebutuhan dan gaya hidup Anda.','services/01KVGGP8NYTKSH5B3FYZ3KE2G8.webp',NULL,0,1,'2026-06-19 11:01:03','2026-06-19 11:01:03'),(2,'Garansi Resmi','Daihatsu PRM menghadirkan kendaraan berkualitas yang didukung oleh Garansi Resmi Daihatsu untuk memberikan perlindungan dan kenyamanan maksimal. Dengan layanan purna jual terpercaya serta jaringan bengkel resmi yang luas, Anda dapat menikmati setiap perjalanan dengan rasa aman dan percaya diri.','services/01KVGGQM1V3BXPS5H14MNZYXF7.webp',NULL,0,1,'2026-06-19 11:01:48','2026-06-19 11:01:48'),(3,'Konsultasi','Tim Daihatsu PRM siap memberikan konsultasi terbaik untuk membantu Anda memilih kendaraan yang sesuai dengan kebutuhan dan anggaran. Dapatkan informasi lengkap mengenai spesifikasi, promo terbaru, simulasi kredit, hingga proses pembelian dengan pelayanan yang ramah dan terpercaya.','services/01KVGGRQ1VN949WZFWC2KV1SF6.webp',NULL,0,1,'2026-06-19 11:02:24','2026-06-19 11:02:24');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_drives`
--

DROP TABLE IF EXISTS `test_drives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test_drives` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_drives`
--

LOCK TABLES `test_drives` WRITE;
/*!40000 ALTER TABLE `test_drives` DISABLE KEYS */;
/*!40000 ALTER TABLE `test_drives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint NOT NULL DEFAULT '5',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Hanny','Tangerang','testimonials/01KVGRWDQ1ESK3VF5KPYFDMENG.webp','Pelayanan luar biasa untuk dealer dan salesnya.\nTidak mengecewakan',5,1,0,'2026-06-19 13:24:14','2026-06-19 13:24:14'),(2,'Rangga Saca','Tangerang','testimonials/01KVGRXYT2Z16V0W330C5AYRCZ.webp','alhamdulillah mobil sudah di terima,pelayanan seles bang nurman sangat memuaskan',5,1,0,'2026-06-19 13:25:04','2026-06-19 13:25:04'),(3,'Andreas Angriawan','Tangerang','testimonials/01KVGRZGVYVXM3FH10QBVHWYWJ.webp','Sales dan team memberikan pelayanan yg sangat baik dan memuaskan',5,1,0,'2026-06-19 13:25:55','2026-06-19 13:25:55');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'adminprm','prmgroup01@gmail.com',NULL,'$2y$12$tm.E4w3/VlHnZ3.gQsPdH.VKVQK1Go4mIDwL/fcLEgG5G1R1JEeBC',NULL,'2026-06-19 02:03:56','2026-06-19 02:03:56');
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

-- Dump completed on 2026-06-22  2:36:46
