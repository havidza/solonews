-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 05:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `gambar` varchar(50) NOT NULL,
  `waktu_terbit` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `headline` varchar(100) DEFAULT NULL,
  `link` varchar(50) NOT NULL,
  `penulis_id` int(11) NOT NULL,
  `berita_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `waktu_terbit`, `isi`, `headline`, `link`, `penulis_id`, `berita_jenis_id`) VALUES
(1, 'PDIP Kecewa NasDem Capreskan Anies: Kasihan Pak Jokowi', 'img1.jpeg', '2019-07-24', '<p>Jakarta - PDIP menyayangkan sikap Partai NasDem yang menyatakan siap mencalonkan Gubernur DKI Jakarta Anies Baswedan di Pilpres 2024. PDIP mengaku kaget dan kecewa.</p>\r\n\r\n<p>\"Hmm... kasihan Pak Jokowi, ya, koalisinya tidak fokus membantu beliau. Pak Jokowi sedang bekerja keras untuk konsolidasi pasukan, membersihkan residu-residu pemilu yang menyebabkan polarisasi untuk bersatu bekerja mewujudkan Nawacita yang merupakan amanah rakyat,\" kata Sekretaris Bidang Pendidikan dan Pelatihan DPP PDIP Eva Kusuma Sundari kepada wartawan, Rabu (24/7/2019)</p>\r\n\r\n<p>Eva khawatir manuver NasDem itu akan membuat polarisasi baru pasca-Pilpres 2019. Padahal, kata Eva, Jokowi saat ini tengah bekerja keras menghilangkan polarisasi di masyarakat.</p>\r\n\r\n<p>\"Manuver Pak Surya Paloh dengan mendukung Anies Baswedan tentu mengagetkan dan mengecewakan, walau itu hak beliau sih. Saya khawatir bikin polarisasi baru dan mewadahi residu-residu yang potensial mengganggu konsolidasi Pak Jokowi,\" tutur Eva.</p>\r\n\r\n<p>Kendati demikian, Eva mengatakan tidak bisa melarang manuver NasDem itu. Eva pun berharap semua parpol koalisinya untuk bersabar dan tidak memunculkan manuver-manuver baru.</p>\r\n\r\n<p>\"Walau agak menyesali, tapi kita tidak bisa melarang, hanya berharap saat ini kita semua memenangkan kepentingan bersama, bukan pribadi atau golongan. Kedua, harusnya nunggu sampai KPU menetapkan tahapan pilpres baru 2024. Sabarlah, kecuali ada maksud tertentu misalnya naikin bargaining ke Pak Jokowi. Jadi keingat Pak ahok, pasti dia yang paling kaget, kok cepet pindah ke lain hati,\" katanya.</p>\r\n\r\n<p>Diberitakan, Ketua Umum Partai NasDem Surya Paloh siap mengusung Gubernur DKI Jakarta Anies Baswedan menjadi capres di Pilpres 2024. Paloh siap mendukung Anies lahir dan batin.</p>\r\n\r\n<p>\"Sudah pastilah dukungan. Lahiriyah batiniyahlah dukungan, ha-ha-ha...,\" kata Surya Paloh setelah bertemu dengan Anies di kantor DPP NasDem, Gondangdia, Jakarta Pusat, Rabu (24/7). Surya Paloh menjawab pertanyaan soal dukungan politik terhadap Anies pada 2024.</p>\r\n\r\n<p>Sementara itu, mendengar hal itu, Anies hanya tersenyum. Enggan berkomentar banyak, Anies hanya menjawab kalau dirinya ingin mengurus Jakarta. \"Saya bilang lagi ngurus Jakarta,\" kata Anies.</p>\r\n\r\n<p>NasDem sudah mengklarifikasi soal pemberitaan dukungan Surya Paloh ke Anies. NasDem menegaskan Surya mendukung Anies sebagai gubernur DKI, bukan capres 2024.</p>\r\n\r\n<p>\"Pemimpin yang bisa melaksanakan harapan rakyat itu manifesto NasDem dan itu Pak Anies tahu. Karenanya datang ke sini Pak Ketum NasDem Bang Surya mengingatkan Pak Anies sebagai Gubernur terpilih, terlepas dari NasDem nggak dukung dulu ya, itu mempunyai kapasitas yang sampai saat ini belum secara optimal digunakannya. Tadi Bang Surya bilang baru 5 dari 10, masih ada 5 lagi,\" kata Sekjen NasDem Johnny G Plate.</p>\r\n', 'PDIP menyayangkan sikap Partai NasDem yang menyatakan siap mencalonkan Gubernur DKI Jakarta Anies Ba', 'politik', 2, 1),
(2, 'Menyempurnakan Makro Pariwisata Kita', 'img5.jpeg', '2019-07-24', '<p>&nbsp;<b>Jakarta </b>- Sektor pariwisata Indonesia mengalami pertumbuhan yang apik dalam lima tahun terakhir. Berdasarkan data Badan Pusat Statistik (BPS), jumlah wisatawan mancanegara pada periode 2014-2018 tumbuh sebesar 67,6 persen. Naik hampir dua kali lipat dibandingkan pertumbuhan periode 2009-2013 yang sebesar 39,2 persen. Selain itu, menurut Travel and Tourism Competitiveness Index yang dikeluarkan World Economic Forum, daya saing pariwisata Indonesia merangsek naik dari peringkat 81 di 2009 menjadi urutan 42 pada 2017.</p>\r\n\r\n<p>Kinerja pariwisata yang apik turut mendongkrak penerimaan devisa negara di mana pada 2018 angka sementaranya mencapai 16,11 miliar dolar AS. Lebih tinggi dibandingkan 2017 yang sebesar 15,24 miliar dolar AS. Tentu, menurut Kemenpar, berbagai capaian tersebut tidak lepas dari berbagai strategi yang dilakukan. Di antaranya program empat destinasi super prioritas \"Bali Baru\" yakni Danau Toba, Candi Borobudur, Mandalika, dan Labuan Bajo, serta penerapan strategi branding, advertising, dan selling. Penguatan branding Wonderful Indonesia juga terus digalakkan di mana selama periode 2016 sampai Maret 2019 berhasil mendapatkan 150 penghargaan</p>\r\n\r\n<p>BPS mencatat kunjungan turis asing Januari-Mei 2019 sebesar 6,37 juta orang, meningkat 2,7% dibanding periode yang sama tahun lalu sebesar 6,2 juta kunjungan. Adapun realisasi 6,37 juta wisatawan tersebut baru mencapai sekitar 35% terhadap total wisatawan mancanegara yang ditargetkan pemerintah tahun ini sebanyak 18 juta orang. Sementara pada tahun lalu, total kunjungan turis asing juga hanya mencapai 15,81 juta orang. Angka itu meleset dari target yang ditetapkan sebesar 17 juta kunjungan.</p>', 'pariwisata Indonesia mengalami pertumbuhan yang apik', 'travelling', 1, 2),
(3, 'Tidak Laku, Neymar Batal Pindah dari PSG', 'img7.jpg', '2019-07-24', '<p><b>Bola.net</b> - Keinginan Neymar untuk pindah dari PSG nampaknya tidak akan terwujud di musim panas ini. Sang penyerang diberitakan sulit dijual di bursa transfer musim panas ini.</p>\r\n\r\n<p>Dua tahun yang lalu, Neymar resmi bergabung dengan PSG. Kepindahannya ke Paris memecahkan rekor transfer termahal dunia, di mana PSG menyetorkan uang sebesar 222 juta Euro kepada Barcelona.</p>\r\n\r\n<p>Namun pada musim panas ini Neymar membuat ulah. Ia mengatakan bahwa ia ingin pergi dari Parc Des Princes kendati ia masih seumur jagung berada di klub Prancis tersebut.</p>\r\n\r\n<p>L\'Equipe mengklaim bahwa Neymar kemungkinan besar tidak akan berpindah klub. Pasalnya ia sulit dijual di musim panas ini.</p>', 'Sang penyerang diberitakan sulit dijual di bursa transfer musim panas ini', 'olahraga', 1, 3),
(4, '4 Tips Ampuh Berburu Mobil Baru dan Berkualitas Saat Pameran', 'img6.jpeg', '2019-07-24', '<p><strong style=\"color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;\">Jakarta</strong><span style=\"color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;\">&nbsp;-</span></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;\">Promosi besar-besaran dengan iming-iming hadiah yang lebih banyak, membuat setiap pameran otomotif menjadi salah satu pilihan tepat untuk memilih kendaraan baru.<br /><br />Membeli kendaraan saat pameran memang lebih menarik dibanding mengunjungi showroom. Karena biasanya, beberapa produsen berlomba-lomba menyediakan beragam promo dan hadiah untuk menggaet konsumen.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;\">Namun, membeli mobil di pameran harus memiliki persiapan yang matang. Untuk itu, ada beberapa strategi yang harus dipersiapkan sebagai konsumen, agar waktu Anda mengunjungi pameran tersebut tidak malah membuat Anda rugi.<br /><br /><strong>1. Cari Mobil Sesuai Kebutuhan<br /><br /></strong>Membeli mobil tentu harus disesuaikan dengan kebutuhan. Apabila mobil menjadi suatu keputusan yang bulat, berikutnya adalah memperhatikan tipe mobil yang yang memang sesuai kebutuhan.<br /><br />Seiring perkembangan kebutuhan masyarakat, tentu setiap orang memiliki kebutuhan berbeda. Para produsen mobil pun terus berupaya mengeluarkan model sesuai kebutuhan, baik itu untuk keperluan sehari-hari, bertualang, atau pun untuk gaya.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;\"><strong>2. Cek Diskon dan Promo<br /><br /></strong>Saat datang ke pameran, manfaatkanlah promo atau diskon terhadap mobil idaman Anda. Carilah informasi sebanyak mungkin tentang diskon atau promo mobil idaman Anda.<br /><br />Agar lebih matang lagi, sebelum datang ke pameran, Anda harus berbekal informasi produk yang cukup, agar Anda juga bisa lebih menghemat waktu dan tenaga. Selain itu, jika sudah mengetahui informasi promo yang berlaku selama pameran, Anda punya lebih banyak kesempatan untuk mendapatkan diskon besar.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;\"><strong>3. Cek Tipe Mobil yang Mirip/Sekelas, Bandingkan Fiturnya<br /><br /></strong>Saat membeli mobil di pameran, Anda tak perlu terburu-buru memilih salah satu mobil incaran. Bandingkanlah lebih dari satu produk, karena para konsumen dapat melihat fisik produk secara langsung di pameran. Bahkan, Anda juga bisa memanfaatkan test ride saat pameran, sehingga bisa betul-betul merasakan kondisi kendaraan sesuai yang Anda harapkan.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;\"><strong>4. Cek Pembiayaan dan Promonya<br /><br /></strong>Terakhir, jika Anda akan membeli mobil secara kredit, cek pula pembiayaan dan promonya. Salah satunya melalui PT BCA Finance, selaku anak perusahaan PT Bank Central Asia (BCA) yang bergerak dibidang pembiayaan.<br /><br />Selain menawarkan suku bunga yang sangat kompetitif, BCA Finance juga memberikan promo yang sangat menarik untuk calon konsumen dengan Program Kredit Mobil Gratis Asuransi 1 Tahun.</p>', 'Membeli mobil di pameran harus memiliki persiapan yang matang', 'otomotif', 1, 4),
(11, 'Tips Travelling di Masa Pandemi Covid-19', 'img8.jpg', '2021-01-07', '<p>Jakarta - Larangan bepergian demi mencegah penularan Covid-19 sejak Maret 2020 membuat masyarakat berdiam di rumah. Namun, niat untuk travelling kini bisa diwujudkan pada masa adaptasi kebiasaan baru (AKB).</p>\r\n<p>Dibukanya sejumlah sektor, termasuk pariwisata, adalah upaya pemerintah menggenjot kembali perekonomian masyarakat. Tentu saja dengan tetap mengedepankan protokol kesehatan demi meredam Covid-19.</p>\r\n<p>&nbsp;</p>\r\n<p>Nah, bagi siapa saja yang sudah tak sabar untuk kembali jalan-jalan, ingat-ingat pesan yang disampaikan Travel Blogger, Muhammad Arif Rahman, dalam dialog di Media Center Gugus Tugas Nasional Covid-19, Jakarta, belum lama ini.</p>\r\n<p>Menurut pemilik Backpackstory.me ini, hal paling utama yang harus diperhatikan adalah status kesehatan diri sendiri.</p>\r\n<p>\"Kita harus tahu kondisi fisik kita seperti apa ketika ingin melakukan travelling. Jika sudah siap travelling, harus patuh dengan protokol kesehatan,\" ujarnya.</p>\r\n<p>Melakukan perjalanan jauh di era new normal tak lagi sama kayak enam bulan yang lalu. Dulu, kata Arif, ketika mau jalan-jalan tinggal beli tiket, pesan hotel, dan berangkat. Sedangkan sekarang, para traveller harus tahu zona mana yang aman untuk didatangi.</p>\r\n<p>\"Kalau kita lihat situs Gugus Tugas covid19.go.id ada zona hijau, kuning, oranye, merah. Nah, yang aman dikunjungi yang mana,\" kata Arif.</p>\r\n<p>\"Habis itu protokol transportasi, apakah transportasi ke sana sudah dibolehkan dengan bus, kereta, atau pesawat,\" ujar pria yang juga memiliki usaha travel Whatravel.&nbsp;</p>\r\n<p>Tidak sampai di situ, pejalan harus mencari informasi tambahan, apakah butuh surat-surat pendukung seperti SIKM dan surat bebas COVID-19 dengan terlebih dahulu melakukan rapid test dan swab test.</p>\r\n<p>\"Cek juga kesiapan lokasi di sana, apakah mereka siap dengan protokol yang baru,\" Arif melanjutkan.</p>', 'Larangan bepergian demi mencegah penularan Covid-19 sejak Maret 2020 membuat masyarakat berdiam di r', 'TRAVELLING', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `berita_jenis`
--

CREATE TABLE `berita_jenis` (
  `id` int(11) NOT NULL,
  `jenis` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_jenis`
--

INSERT INTO `berita_jenis` (`id`, `jenis`) VALUES
(1, 'POLITIK'),
(2, 'TRAVELLING'),
(3, 'OLAHRAGA'),
(4, 'OTOMOTIF');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `nama`, `telepon`, `alamat`, `email`) VALUES
(1, 'Paijo', '081823112394', 'Denpasar, Bali', 'sylkef@gmail.com'),
(2, 'Havid', '087122891230', 'Solo', 'maksimaltamvan7@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, '20e162f896e16506367f1229be5fb8', 1, '2021-01-06'),
(2, 'e76833f4bb1560aa231fcefe166f8a', 1, '2021-01-06'),
(3, '4453da6f64f509b94ae5961639c8e1', 1, '2021-01-06'),
(4, '9336936508f1efc80d14d0cf4dfdca', 1, '2021-01-06'),
(5, '2d88c7cfe083b06faa49f1a0b292b3', 3, '2021-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`) VALUES
(3, 'Dimas12', '0192023a7bbd73250516f069df18b500', 'Dimas', 'dimas@gmail.com'),
(1, 'Havid12', 'c1f64af5c8fb5e9699f69cd4632c4100', 'Havid', 'havid@gmail.com'),
(4, 'Kiki12', '0192023a7bbd73250516f069df18b500', 'Kiki', 'kiki@gmail.com'),
(2, 'Nurma12', '$2y$10$wFOPq442gdy5KaaUPiDyEuI19QbVF.a.1TIb.PfxQjq1a/Xz1wkZa', 'nurma', 'nurma@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_berita_penulis1_idx` (`penulis_id`),
  ADD KEY `fk_berita_berita_jenis1_idx` (`berita_jenis_id`);

--
-- Indexes for table `berita_jenis`
--
ALTER TABLE `berita_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `berita_jenis`
--
ALTER TABLE `berita_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_berita_berita_jenis1` FOREIGN KEY (`berita_jenis_id`) REFERENCES `berita_jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_berita_penulis1` FOREIGN KEY (`penulis_id`) REFERENCES `penulis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
