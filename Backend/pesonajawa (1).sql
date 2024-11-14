-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 15.34
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesonajawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `kategoriKODE` char(4) NOT NULL,
  `destinasiKET` text NOT NULL,
  `destinasiFOTO` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`destinasiKODE`, `destinasiNAMA`, `kategoriKODE`, `destinasiKET`, `destinasiFOTO`) VALUES
('w001', 'Gunung Bromo', 'K003', 'Gunung Bromo, sebuah ikon alam yang menakjubkan di Jawa Timur, menawarkan pengalaman wisata yang tak terlupakan. Terletak dalam kawasan Taman Nasional Bromo Tengger Semeru, tempat ini memikat dengan keindahan lanskap yang sangat khas. Ketika matahari terbit, pengunjung dapat menyaksikan pemandangan spektakuler di Kawah Bromo yang terletak di tengah-tengah dataran pasir.', 'wisata1.jpg'),
('w002', 'pantai papuma', 'K003', 'Pantai Papuma, tersembunyi di ujung selatan Jawa Timur, adalah surga alami yang menawarkan pesona pantai yang memukau. Pasir putih yang halus terhampar luas, sementara batu-batu karang yang menonjol dan hamparan lautan biru memberikan kesan yang mengagumkan. Pantai ini memikat pengunjung dengan keindahan alam yang tenang dan suasana yang santai.', 'wisat2.jpg'),
('w003', 'Kawah Ijen', 'K003', 'Kawah Ijen, terletak di perbatasan antara Kabupaten Bondowoso dan Kabupaten Banyuwangi, Jawa Timur, adalah tempat wisata alam yang menakjubkan dengan keunikan yang menarik perhatian banyak orang. Kawah ini memiliki daya tarik utama yaitu api biru di dalamnya, yang sebenarnya adalah hasil dari pembakaran gas belerang yang menghasilkan nyala biru kehijauan yang memukau.', 'wisata3.jpg'),
('w004', 'Pantai Klayar', 'K003', 'Pantai Klayar, terletak di Pacitan, Jawa Timur, adalah destinasi pantai yang menawarkan keindahan alam yang memesona dengan ciri khasnya yang unik. Pantai ini memukau dengan formasi batu karang yang menonjol dari pasir putih yang lembut, menciptakan pemandangan yang mengagumkan.', 'wisata4.jpg'),
('w005', 'Pulau Sempu', 'K003', 'Pulau Sempu, terletak di lepas pantai selatan Malang, Jawa Timur, adalah destinasi alam yang memukau dengan keindahan alamnya yang asli dan terpencil. Pulau ini menawarkan pengalaman wisata yang unik dengan hutan hujan tropis yang lebat, danau air asin yang indah, serta pantai-pantai yang menakjubkan.', 'wisata5.jpg'),
('w006', 'Museum Gedung Sate', 'K001', 'Beberapa dari Anda tentu sudah tidak asing dengan salah satu wisata budaya di Jawa Barat yakni Museum Gedung Sate. Museum yang satu ini berlokasi di Jalan Diponegoro Nomor 22, Citarum, Kecamatan Bandung Wetan, Kota Bandung, Jawa Barat.  Pengunjung akan dimanjakan dengan berbagai koleksi yang ditawarkan. Tidak hanya itu, adanya teater tertutup hingga virtual reality tentu menjadi daya tarik tersendiri yang menjadikan museum ini sayang untuk dilewatkan. Dengan banyaknya aktivitas menarik yang bisa Anda coba, pengunjung hanya dikenakan biaya tiket masuk sekitar Rp 5.000,- per orang.', 'wisata6.jpg'),
('w007', 'Keraton Kesepuhan Cirebon', 'K001', 'idak hanya wisatawan lokal saja, ada banyak wisatawan yang datang dari berbagai daerah dan ingin menikmati wisata budaya yang satu ini. Pengunjung hanya dikenakan tiket masuk sebesar Rp 5.000,- untuk pelajar dan Rp 15.000,- untuk umum. Menghabiskan waktu berlibur dengan menyusuri Keraton serta menikmati budaya yang ditawarkan tentu menjadi hal menarik yang bisa Anda coba.', 'wisata7.jpg'),
('w008', 'Museum Barli', 'K001', 'Salah satu wisata budaya di Jawa Barat yang cukup populer adalah museum Barli. Museum ini berlokasi di Jalan Profesor Dr Sutami nomor 91 Sukarasa, Kecamatan Sukasari, Kota Bandung, Jawa Barat.  Museum yang satu ini mengusung kehidupan dan karya seni pelukis terkenal di Bandung yakni Barli Sasmitawinata. Barli merupakan pelukis asli Bandung yang lahir pada tahun 1921. Menikmati berbagai lukisan indah yang dibuatnya dari waktu ke waktu. Museum Barli menempati bangunan bekas peninggalan Belanda.', 'wisata8.jpg'),
('w009', 'Museum Sri Baduga', 'K001', 'Salah satu wisata budaya di Jawa Barat yang cukup populer dan ramai didatangi wisatawan adalah Museum Sri Baduga. Museum yang satu ini berlokasi di Kecamatan Astanaanyar, Kota Bandung, Jawa Barat.  Museum ini cocok dikunjungi bagi Anda yang ingin menghabiskan waktu berlibur saat berada di Jawa Barat. Anda dapat menyusuri luasnya museum sekaligus mempelajari budaya dan nilai-nilai sejarah. Museum Sri Baduga memiliki 3 lantai yang dapat diakses oleh pengunjung.', 'wisata9.jpg'),
('w010', 'Situs Rumah Adat Cikondong', 'K001', 'Salah satu wisata budaya di Jawa Barat yang bisa Anda kunjungi adalah Situs Rumah Adat Cikondang. Anda dapat mengunjungi wisata budaya yang satu ini di daerah Kecamatan Pengalengan, Bandung, Jawa Barat..  Pengunjung dapat mempelajari sejarah perjalanan kehidupan suku Sunda di lokasi wisata budaya yang satu ini. Bangunannya yang tampak unik menjadi daya tarik tersendiri bagi pengunjung. Tidak hanya bangunan rumah, pengunjung juga akan dimanjakan dengan berbagai peralatan lengkap di dalam maupun luar rumah adat.', 'wisata10.jpg'),
('w011', 'Sagara Anakan Pulau Sempu', 'K002', 'Salah satu wisata bahari terkenal di Jawa Timur yang dapat Anda datangi adalah Segara Anakan Pulau Sempu. Wisata yang satu ini dapat Anda datangi di Kecamatan Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur. Banyak yang menyebut bahwa Segara Anakan merupakan surga tersembunyi di Malang karena belum banyak yang tahu tentang keberadaan wisata ini.  Pengunjung akan dimanjakan dengan indahnya panorama alam serta suasana yang sejuk dan nyaman. Danau yang satu ini cocok dikunjungi bagi Anda yang ingin menyegarkan pikiran atau menenangkan diri. Adanya beberapa monyet liar juga menjadi daya tarik tersendiri yang khas dari Segara Anakan.', 'wisata11.jpg'),
('w012', 'Wisata Bahari Lamongan', 'K002', 'salah satu wisata bahari terkenal di Jawa Timur. Pengunjung yang datang ke WBL berasal dari berbagai daerah. Anda dapat menikmati panorama laut yang indah dan berbagai permainan yang ditawarkan. Untuk menikmati berbagai fasilitas yang ditawarkan, pengunjung dikenakan biaya tiket masuk yang berkisar Rp 100.000,- per orang.', 'wisata12.jpg'),
('w013', 'Pantai Pulau Merah Banyuwangi', 'K002', 'Tempat wisata yang satu ini menjadi salah satu wisata bahari terkenal di Jawa Timur yang kerap didatangi wisatawan dari berbagai daerah. Anda dapat mengunjungi Pantai Pulau Merah di Kecamatan Pesanggaran, Banyuwangi.  Disebut Pantai Pulau Merah karena saat matahari tenggelam membuat pulau seakan berwarna merah. Ada banyak kegiatan yang bisa Anda lakukan saat berkunjung ke pantai ini diantaranya mendaki bukit, snorkeling, hingga surfing.', 'wisata13.jpg'),
('w014', 'Surabaya North Quay', 'K002', 'Surabaya North Quay menjadi pilihan tepat bagi Anda yang ingin menikmati pantai atau wisata bahari di Surabaya.  Pengunjung dapat bersantai sembari menikmati matahari terbenam. Adanya kapal yang berlalu-lalang juga menjadi daya tarik tersendiri yang dapat dinikmati oleh pengunjung. Surabaya North Quay juga dilengkapi dengan fasilitas kuliner lengkap yang bisa Anda coba. Adanya live music menjadikan suasana wisata bahari yang satu ini semakin mengesankan.', 'wisata14.jpg'),
('w015', 'Pantai Kayar Pacitan', 'K002', 'Ada cukup banyak wisata bahari terkenal di Jawa Timur, salah satunya adalah Pantai Klayar. Pantai Klayar dapat Anda datangi di Kecamatan Donorojo, Pacitan. Pantai yang satu ini dikenal karena menawarkan keindahan alam yang luar biasa. Pengunjung akan dimanjakan dengan suasana yang masih sangat alami.  Salah satu hal menarik dari pantai ini adalah adanya batu karang yang menyerupai spinx dan air mancur alami. Indahnya pemandangan laut juga sayang untuk tidak Anda datangi.', 'wisata15.jpg'),
('w016', 'Agro wisata Kebun Teh Puncak', 'K004', 'Di sini kalian bisa jalan-jalan, foto-foto denga latar belakang hijaunya tanaman teh sejauh mata memandang. Pemandangannya tentu saja sangat mempesona untuk diabadikan dengan kamera!', 'wisata16.jpg'),
('w017', 'Kebun Porang di Sukabumi', 'Kate', 'Selanjutnya ada kebun porang di Sukabumi yang menawarkan pemandangan asri yang tidak bisa traveler temui di kota besar. Agrowisata ini berada di Kampung/Desa Ubrug, Kecamatan Warkir, Kabupaten Sukabumi, tepatnya di area bekas lahan persemaian sawit milik PTPN VIII di kaki Gunung Salak.  Di sini ada Saung Porang, dimana anak-anak bisa belajar sambil berwisata. Ada juga kolam renang kulah gupak yang murah meriah. Tiket masuknya cum Rp 3.000 saja.', 'wisata17.jpg'),
('w018', 'wisata Petik Jeruk Ciamis', 'K004', 'Di Ciamis ada wisata agro yang menarik, bisa petik jeruk sendiri sampai puas. Lokasinya ada di Perkebunan Ladur, Cisinduk, Desa Janggala, Kecamatan Cidolog, Kabupaten Ciamis, Jawa Barat.  Pengunjung cukup membayar tiket masuk Rp 5 ribu saja bisa makan jeruk sepuasnya di kebun. Di Kebun Jeruk Ladur ini terdapat sekitar 1.300 pohon jeruk yan ditanam di lahan seluas 400 meter persegi.', 'wisata18.jpg'),
('w019', 'Kebun Anggur Brasil Majalengka', 'K004', 'Majalengka punya agrowisata anggur seluas 3.500 meter persegi. Spesies yang ditanam di sini adalah anggur Brasil. Lokasinya ada di Desa Teja, Kecamatan Rajagaluh, Kabupaten Majalengka.  Buah Anggur Brasil sendiri dibilang unik karena tidak tumbuh dari ranting seperti anggur pada umumnya. Namun Anggur Brasil justru tumbuh di batang pohonnya. Anggur Brasil juga dikenal dengan nama jaboticaba.', 'wisata19.jpg'),
('w020', 'Kampung Labu Acar Bandung', 'K004', 'Salah satu kawasan yang kini berpotensi dikembangkan menjadi agrowisata di Kabupaten Bandung ialah Kampung Labu Acar yang ada di Desa Cukanggenteng, Kecamatan Pasir Jambu.  Lokasi ini dapat ditempuh sekitar 20-30 menit menggunakan motor atau mobil dari Gerbang Tol (GT) Soreang atau sekitar 30 menit dari kawasan Kawah Putih di Ciwidey.  Jika berkunjung pagi-pagi sekali, pengunjung akan mendapati banyak petani yang sedang memanen labu maupun sayuran hortikultura lain. Kalian juga bisa belajar soal pertanian di sini. ', 'wisata20.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotodestinasi`
--

CREATE TABLE `fotodestinasi` (
  `fotodestinasiKODE` char(4) NOT NULL,
  `fotodestinasiNAMA` char(120) NOT NULL,
  `fotodestinasiFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fotodestinasi`
--

INSERT INTO `fotodestinasi` (`fotodestinasiKODE`, `fotodestinasiNAMA`, `fotodestinasiFILE`, `destinasiKODE`) VALUES
('0001', 'Bromo', 'wisata1.jpg', ''),
('0021', 'Pantai Biru', 'wisata4.jpg', ''),
('0333', 'Kawah Putih', 'wisata3.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriberita`
--

CREATE TABLE `kategoriberita` (
  `kategoriberitaKODE` char(4) NOT NULL,
  `kategoriberitaNAMA` varchar(60) NOT NULL,
  `kategoriberitaKET` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategoriberita`
--

INSERT INTO `kategoriberita` (`kategoriberitaKODE`, `kategoriberitaNAMA`, `kategoriberitaKET`) VALUES
('0023', 'gunung meletus', 'di purbalingga'),
('B001', 'Es Kutub Utara Mencair', 'Es kutub Utara mencair akibat pemanasan global yang tak henti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriwisata`
--

CREATE TABLE `kategoriwisata` (
  `kategoriKODE` char(4) NOT NULL,
  `kategoriNAMA` char(25) NOT NULL,
  `kategoriKET` text NOT NULL,
  `kategoriREFFERENCE` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategoriwisata`
--

INSERT INTO `kategoriwisata` (`kategoriKODE`, `kategoriNAMA`, `kategoriKET`, `kategoriREFFERENCE`) VALUES
('K001', 'Budaya', 'Budaya Indonesia yang dijaga dengan baik', 'sejarah'),
('K002', 'Wisata Bahari', ' \"Wisata Bahari\" merupakan istilah yang dapat diartikan sebagai kegiatan pariwisata yang berkaitan dengan objek atau destinasi wisata yang terkait dengan laut atau perairan.', 'Wisata'),
('K003', 'Cagar Alam', 'Wisata Cagar Alam adalah pengalaman wisata yang menghadirkan keunikan alam dan ekosistem yang dilindungi oleh pemerintah. Cagar Alam merupakan kawasan yang memiliki keanekaragaman hayati tinggi dan sering kali dianggap sebagai laboratorium alam yang penting untuk pelestarian flora dan fauna', 'Cagar Alam'),
('K004', 'wisata pertanian', 'Wisata pertanian adalah jenis wisata yang memberikan pengalaman kepada pengunjung untuk mengenal dan berpartisipasi langsung dalam kegiatan-kegiatan pertanian', 'pertanian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oleh`
--

CREATE TABLE `oleh` (
  `olehKODE` char(6) NOT NULL,
  `olehNAMA` char(100) NOT NULL,
  `olehASAL` char(100) NOT NULL,
  `olehDES` char(250) NOT NULL,
  `olehREVIEW` char(100) NOT NULL,
  `olehFOTO` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `oleh`
--

INSERT INTO `oleh` (`olehKODE`, `olehNAMA`, `olehASAL`, `olehDES`, `olehREVIEW`, `olehFOTO`) VALUES
('o001', 'Pasar Klewer', 'Bekasi', 'Pasar Klewer merupakan destinasi belanja berharga bagi wisatawan yang mencari batik dengan harga terjangkau. Terdapat lebih dari 2.000 kios di pasar dua lantai ini yang menawarkan berbagai macam koleksi batik, antara lain batik tulis, batik cap', '⭐ ⭐ ⭐', 'oleh1.jpg'),
('o002', 'Atap Rasa', 'Surabaya', 'Bila berkunjung ke Surabaya dan ingin membeli oleh-oleh, maka kamu dapat berkunjung ke Atap Rasa Pusat Oleh-Oleh Khas Surabaya.  Di tempat ini, kamu bisa menemukan berbagai jenis makanan mulai dari keripik, terasi, kue, sambal hingga minuman.  Tak ha', '⭐⭐⭐', 'oleh2.jpg'),
('o003', 'Surabaya Square', 'Surabaya', 'Jika ingin membeli souvenir atau accecoris dari Surabaya, kamu bisa datang langsung ke Surabaya Square, Pusat Oleh-Oleh Khas Surabaya. Tempat ini memiliki berbagai macam koleksi pernak pernik yang lengkap mulai dari tas, baju, gantungan kunci dan lai', '⭐⭐⭐', 'oleh3.jpg'),
('o004', 'Toko Panen raya', 'Surabaya', 'Toko Panen Raya merupakan salah satu pusat oleh-oleh yang cukup ternama di Surabaya. Tempat ini menyediakan berbagai jenis oleh-oleh khas Surabaya mulai dari makanan ringan hingga yang berat.  Bahkan, di Toko Panen Raya juga tersedia oleh-oleh khas d', '⭐⭐', 'oleh4.jpg'),
('o006', 'Toko Wisata Rasa', 'Surabaya', 'Bila kamu ingin membawa pulang makanan khas yang modern di Kota Surabaya seperti almond crispy, lapis Surabaya, lapis kukus, lapis durian, lapis legit, kue mente, kue melinjo dan sebagainya, kamu bisa berkunjung ke Toko Wisata Rasa.  Selain itu, Wisa', '⭐⭐', 'oleh6.jpg'),
('o007', 'Pusat oleh-oleh Bu Rudy', 'Surabaya', 'Pecinta sambal yang lagi berkunjung ke Surabaya wajib banget nih mampir ke Pusat Oleh-oleh Bu Rudy. Pasalnya, toko ini merupakan surganya sambal dengan berbagai varian lengkap yang enak dan pedas pastinya.  Selain sambal, toko ini menyediakan berbaga', '⭐⭐⭐', 'oleh7.jpg'),
('o008', 'Bhek-Genteng besar', 'Surabaya', 'Selain Bhek Putra, di Jalan Genteng Besar juga ada pusat oleh-oleh Bhek - Genteng Besar yang menyediakan berbagai jenis oleh-oleh khas Surabaya yang cukup lengkap. Makanan ringan mulai dari kerupuk udang, kerupuk puli, kerupuk keju, sambel pecel, ban', '⭐⭐', 'oleh8.jpg'),
('o009', 'Toko Bogajaya Indragiri', 'Surabaya', 'Toko oleh-oleh lengkap di Surabaya selanjutnya adalah Toko Bogajaya Indragiri. Tak hanya menyediakan makanan matang, namun toko ini juga menawarkan kerupuk mentah seperti kerupuk puli, kerupuk ikan, kerupuk bawang, kerupuk sayur dan lain sebagainya.', '⭐⭐⭐', 'oleh9.jpg'),
('o010', 'Toko Sudi Mampir', 'Surabaya', 'alah satu pelopor pusat oleh-oleh di Surabaya adalah Toko Sudi Mampir yang telah berdiri sejak tahun 1970-an dan masih eksis hingga saat ini. Di toko ini tersedia berbagai pilihan oleh-oleh khas Surabaya hingga dari daerah lain seperti Gresik, Lamong', '⭐⭐⭐', 'oleh10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbangan`
--

CREATE TABLE `penerbangan` (
  `penerbanganKODE` char(4) NOT NULL,
  `penerbanganNAMA` char(100) NOT NULL,
  `penerbanganJENIS` char(100) NOT NULL,
  `penerbanganTUJUAN` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerbangan`
--

INSERT INTO `penerbangan` (`penerbanganKODE`, `penerbanganNAMA`, `penerbanganJENIS`, `penerbanganTUJUAN`) VALUES
('0001', 'garuda', '1way', 'kotakota'),
('0002', 'CityLink', '2way', 'Luxemburg'),
('9239', 'ryan air', '2way', 'bandungg'),
('s994', 'emirates', '1way', 'bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurantKODE` char(6) NOT NULL,
  `restaurantNAMA` char(100) NOT NULL,
  `restaurantALAMAT` char(200) NOT NULL,
  `restaurantDES` char(250) NOT NULL,
  `restaurantFOTO` char(100) NOT NULL,
  `restaurantREVIEW` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `restaurant`
--

INSERT INTO `restaurant` (`restaurantKODE`, `restaurantNAMA`, `restaurantALAMAT`, `restaurantDES`, `restaurantFOTO`, `restaurantREVIEW`) VALUES
('f001', 'Warung mbah jingkrak setia budi', 'Bandung', 'Tak hanya nama dan arsitekturnya saja yang khas Jawa, pengunjung juga akan merasakan suasana Jawa adem saat makan di sana.  Memang benar, desain restoran Joglo yang khas dengan deretan menu Jawa membuat Waroeng Solo menjadi salah satu restoran popule', 'resto1.jpg', '⭐⭐⭐'),
('f002', 'Waroeng solo', 'Bandung', 'Tak hanya nama dan arsitekturnya saja yang khas Jawa, pengunjung juga akan merasakan suasana Jawa adem saat makan di sana.  Memang benar, desain restoran Joglo yang khas dengan deretan menu Jawa membuat Waroeng Solo menjadi salah satu restoran popule', 'restoran2.jpg', '⭐⭐⭐'),
('f003', 'Selera maneer', 'Surabaya', 'Dengan menawarkan restoran Jawa modern, Selera Meneer juga menjadi pilihan restoran buat menikmati masakan khas Jawa.  Berlokasi di kawasan Radio Dalam, restoran ini menyajikan sederet menu favorit bangsawan keraton yang terpengaruh oleh cita rasa Er', 'restoran3.jpg', '⭐⭐'),
('f004', 'Mie jogja pak Karso', 'Bandung', 'Menu andalan restoran Jawa ini tentu saja mie Jawa.  Cita rasanya seperti masakan rumahan orang-orang asli Jawa.  Ada beragam menu, yaitu mie goreng, bihun goreng, mie godog Jawa, bihun godog, aneka masakan kwetiau, nasi goreng, ayam penyet, masakan', 'restoran4.jpg', '⭐⭐⭐'),
('f005', 'Mie Jawa Lembang', 'Bandung', 'Kedai yang nuansanya Jawa ini masih di tanah Sunda, lebih tepatnya ada di Jalan Lembang.  Tempat yang cozy banget dengan nuansa Jawa yang kental lengkap dengan musik Jawa yang syahdu.  Ini pasti membuat pengunjung semakin rindu dengan suasana khas Ja', 'restoran5.jpg', '⭐⭐⭐'),
('f006', 'Angkringan Joss', 'Bandung', 'Di sini menjual aneka sate-satean, nasi yang beragam, dan aneka wedang.  Harga setiap menunya cukup terjangkau, letaknya di tengah kota dan mudah ditemukan.', 'restoran6.jpg', '⭐⭐⭐'),
('f007', 'Warung Makan nikmat Kuta', 'Bogor', 'Sedang mencari restoran Jawa di Bali? Berkunjung saja ke Warung Makan Nikmat Kuta.  Pengunjung akan langsung jatuh hati dengan rasa masakan khas Jawa di restoran ini.  Warung Nikmat menyediakan masakan ala Jawa yang enak dan murah.', 'restoran7.jpg', '⭐⭐'),
('f008', 'Ayam bakar Wong Solo', 'Cirebon', 'Seperti namanya, menu utama resto ini adalah ayam bakar.  Seporsi ayam bakar disajikan dengan sambal, tahu goreng, irisan mentimun, dan nasi putih.  Selain itu, menu lain seperti ayam penyet juga populer di kalangan pelancong.  Setiap kuliner yang di', 'restoran8.jpg', '⭐⭐⭐'),
('f009', 'Gudeg Kanjdengan', 'Jakarta', 'Ngomongin masakan Jawa nggak akan lengkap tanpa menyebut gudeg, masakan khas Yogyakarta. Rajanya gudeg di Jakarta di mana lagi kalau bukan di Gudeg Kandjeng. Gudeg di sini rasanya autentik banget, manisnya pas, dan tidak terlalu basah.   Makan gudeg', 'restoran9.jpg', '⭐⭐'),
('f010', 'Suwe Ora Jamu', 'Surabaya', 'Ada kedai jamu bernama Suwe Ora Jamu yang menjadikan jamu nge-hip lagi. Konsep unik ini bikin banyak orang penasaran dan tertarik mampir ke sini. Pilihan jamunya ada banyak, tapi nggak ada yang bisa ngalahin kedahsyatan jamu kunyit asem di restoran J', 'restoran10.jpg', '⭐⭐⭐'),
('f011', 'Lali Omah', 'Cirebon', 'Satu lagi restoran yang menyediakan masakan Jawa di Jakarta adalah Lali Omah. Restoran ini spesial menyuguhkan menu tengkleng yang rasanya luar biasa. Buktikan sendiri saat menyantap tengkleng sumsum yang selalu jadi favorit pengunjung. Kuahnya gurih', 'restoran11.jpg', '⭐⭐');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sultan`
--

CREATE TABLE `sultan` (
  `hotel0151` char(4) NOT NULL,
  `hotelNAMA` char(160) NOT NULL,
  `hotelALAMAT` varchar(250) NOT NULL,
  `kategori0151` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sultan`
--

INSERT INTO `sultan` (`hotel0151`, `hotelNAMA`, `hotelALAMAT`, `kategori0151`) VALUES
('0001', 'iskandar', 'kebonjeruk', 'b068'),
('0002', 'Bagus', 'MH Thamrin', 'K001'),
('s023', 'Bakti Mulia', 'Jalan Kelapa Dua', 'K001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel`
--

CREATE TABLE `travel` (
  `travelKODE` char(6) NOT NULL,
  `travelNAMA` char(100) NOT NULL,
  `travelLOKASI` char(100) NOT NULL,
  `travelTEL` char(100) NOT NULL,
  `travelFOTO` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `travel`
--

INSERT INTO `travel` (`travelKODE`, `travelNAMA`, `travelLOKASI`, `travelTEL`, `travelFOTO`) VALUES
('t001', 'Syakira Tour', 'Semarang', '023883238271', 'travel1.jpg'),
('t002', 'Himmah Tour & Travel', 'Surabaya', '085656565656', 'travel2.jpg'),
('t003', 'FazaTrans Tour & Traveling', 'Bekasi', '088989898989', 'travel3.jpg'),
('t004', 'Travel Amanah', 'Bandung', '0878787878787', 'travel4.jpg'),
('t005', 'Bosnya Travel', 'Depok', '085454545454', 'travel5.jpg'),
('t006', 'Travelatos', 'Surabaya', '089765389217', 'travel6.jpg'),
('t007', 'Eka Mandiri Transport', 'Bekasi', '085482197653', 'travel7.jpg'),
('t008', 'Eltrans Travel', 'Tangerang', '085427618876', 'travel8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `useradmin`
--

CREATE TABLE `useradmin` (
  `userKODE` char(4) NOT NULL,
  `userNAME` char(30) NOT NULL,
  `userEMAIL` char(60) NOT NULL,
  `userPASS` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `useradmin`
--

INSERT INTO `useradmin` (`userKODE`, `userNAME`, `userEMAIL`, `userPASS`) VALUES
('0001', 'sultan', 'sultansaid@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indeks untuk tabel `fotodestinasi`
--
ALTER TABLE `fotodestinasi`
  ADD PRIMARY KEY (`fotodestinasiKODE`);

--
-- Indeks untuk tabel `kategoriberita`
--
ALTER TABLE `kategoriberita`
  ADD PRIMARY KEY (`kategoriberitaKODE`);

--
-- Indeks untuk tabel `kategoriwisata`
--
ALTER TABLE `kategoriwisata`
  ADD PRIMARY KEY (`kategoriKODE`);

--
-- Indeks untuk tabel `oleh`
--
ALTER TABLE `oleh`
  ADD PRIMARY KEY (`olehKODE`);

--
-- Indeks untuk tabel `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`penerbanganKODE`);

--
-- Indeks untuk tabel `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurantKODE`);

--
-- Indeks untuk tabel `sultan`
--
ALTER TABLE `sultan`
  ADD PRIMARY KEY (`hotel0151`);

--
-- Indeks untuk tabel `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travelKODE`);

--
-- Indeks untuk tabel `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`userKODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
