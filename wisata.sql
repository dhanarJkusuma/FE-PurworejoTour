-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2016 pada 22.53
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` int(10) NOT NULL,
  `nama_desa` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `nama_desa`, `created_at`, `updated_at`) VALUES
(2, 'Desa Satu', '2016-12-16 16:35:05', '2016-12-16 09:35:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `nama_photo` varchar(255) DEFAULT NULL,
  `id_konten` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `nama_photo`, `id_konten`, `created_at`, `updated_at`) VALUES
(115, 'galeri201611291026331.jpg', 14, '2016-11-29 03:26:33', '2016-11-29 03:26:33'),
(116, 'galeri201611291026332.jpg', 14, '2016-11-29 03:26:33', '2016-11-29 03:26:33'),
(117, 'galeri201611291027261.jpg', 15, '2016-11-29 03:27:26', '2016-11-29 03:27:26'),
(118, 'galeri201611291027262.jpg', 15, '2016-11-29 03:27:26', '2016-11-29 03:27:26'),
(119, 'galeri201611291027263.jpg', 15, '2016-11-29 03:27:26', '2016-11-29 03:27:26'),
(120, 'galeri201611291028131.jpg', 16, '2016-11-29 03:28:13', '2016-11-29 03:28:13'),
(121, 'galeri201611291029001.jpg', 17, '2016-11-29 03:29:01', '2016-11-29 03:29:01'),
(122, 'galeri201611291029012.jpg', 17, '2016-11-29 03:29:01', '2016-11-29 03:29:01'),
(123, 'galeri201611291030261.jpg', 18, '2016-11-29 03:30:27', '2016-11-29 03:30:27'),
(124, 'galeri201611291030272.JPG', 18, '2016-11-29 03:30:27', '2016-11-29 03:30:27'),
(125, 'galeri201611291030273.jpg', 18, '2016-11-29 03:30:27', '2016-11-29 03:30:27'),
(126, 'galeri201611291030274.jpg', 18, '2016-11-29 03:30:27', '2016-11-29 03:30:27'),
(127, 'galeri201611291030275.JPG', 18, '2016-11-29 03:30:27', '2016-11-29 03:30:27'),
(128, 'galeri201611291030276.jpg', 18, '2016-11-29 03:30:27', '2016-11-29 03:30:27'),
(129, 'galeri201611291030277.JPG', 18, '2016-11-29 03:30:28', '2016-11-29 03:30:28'),
(130, 'galeri201611291031161.jpg', 19, '2016-11-29 03:31:16', '2016-11-29 03:31:16'),
(131, 'galeri201611291031162.jpg', 19, '2016-11-29 03:31:16', '2016-11-29 03:31:16'),
(132, 'galeri201611291031163.jpg', 19, '2016-11-29 03:31:16', '2016-11-29 03:31:16'),
(133, 'galeri201611291031164.jpg', 19, '2016-11-29 03:31:16', '2016-11-29 03:31:16'),
(134, 'galeri201611291031501.jpg', 20, '2016-11-29 03:31:50', '2016-11-29 03:31:50'),
(135, 'galeri201611291031512.jpg', 20, '2016-11-29 03:31:51', '2016-11-29 03:31:51'),
(136, 'galeri201611291031513.jpg', 20, '2016-11-29 03:31:51', '2016-11-29 03:31:51'),
(137, 'galeri201611291032261.jpg', 21, '2016-11-29 03:32:26', '2016-11-29 03:32:26'),
(138, 'galeri201611291032262.jpg', 21, '2016-11-29 03:32:26', '2016-11-29 03:32:26'),
(139, 'galeri201611291032263.jpg', 21, '2016-11-29 03:32:26', '2016-11-29 03:32:26'),
(140, 'galeri201611291033291.jpg', 22, '2016-11-29 03:33:30', '2016-11-29 03:33:30'),
(141, 'galeri201611291033302.jpg', 22, '2016-11-29 03:33:30', '2016-11-29 03:33:30'),
(142, 'galeri201611291033303.jpg', 22, '2016-11-29 03:33:30', '2016-11-29 03:33:30'),
(143, 'galeri201611291033304.jpg', 22, '2016-11-29 03:33:30', '2016-11-29 03:33:30'),
(144, 'galeri201611291034121.jpg', 23, '2016-11-29 03:34:12', '2016-11-29 03:34:12'),
(145, 'galeri201611291034122.jpg', 23, '2016-11-29 03:34:12', '2016-11-29 03:34:12'),
(146, 'galeri201611291034123.jpg', 23, '2016-11-29 03:34:12', '2016-11-29 03:34:12'),
(147, 'galeri201611291034124.jpg', 23, '2016-11-29 03:34:12', '2016-11-29 03:34:12'),
(148, 'galeri201611291035491.jpg', 24, '2016-11-29 03:35:49', '2016-11-29 03:35:49'),
(149, 'galeri201611291035492.JPG', 24, '2016-11-29 03:35:49', '2016-11-29 03:35:49'),
(150, 'galeri201611291035493.JPG', 24, '2016-11-29 03:35:49', '2016-11-29 03:35:49'),
(151, 'galeri201611291036241.jpg', 25, '2016-11-29 03:36:24', '2016-11-29 03:36:24'),
(152, 'galeri201611291036242.jpg', 25, '2016-11-29 03:36:24', '2016-11-29 03:36:24'),
(153, 'galeri201611291036243.jpg', 25, '2016-11-29 03:36:24', '2016-11-29 03:36:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_penginapan`
--

CREATE TABLE `gallery_penginapan` (
  `id` int(11) NOT NULL,
  `nama_photo` varchar(255) NOT NULL,
  `id_penginapan` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery_penginapan`
--

INSERT INTO `gallery_penginapan` (`id`, `nama_photo`, `id_penginapan`, `created_at`, `updated_at`) VALUES
(10, 'galeri201612170823281.jpg', 2, '2016-12-17 08:23:29', '2016-12-17 08:23:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_jajan`
--

CREATE TABLE `kategori_jajan` (
  `id` int(10) NOT NULL,
  `nama_jajan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `judul_konten` varchar(255) DEFAULT NULL,
  `isi_konten` text,
  `thumbnail` varchar(255) DEFAULT NULL,
  `permalink` varchar(255) DEFAULT NULL,
  `alamat` text,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `id_user`, `judul_konten`, `isi_konten`, `thumbnail`, `permalink`, `alamat`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(14, 2, 'Masjid Agung Purworejo', 'Masjid Agung Purworejo digunakan sebagai tempat ibadah utama di Purworejo bagi masyarakat muslim. Selain sebagai tempat ibadah, Masjid Agung Purworejo juga terkadang dijadikan tempat wisata di Purworejo yang banyak diminati pengunjung. Di masjid agung ini anda akan menjumpai sebuah bedug tua yang pembuatannya sekitar tahun 1800 an dan berdiameter 2 meter, akan terlihat sangat besar untuk ukuran sebuah bedug. Keistimewaaan bedug ini adalah bahwa bedug ini hanya digunakan pada saat hari raya dan selama bulan ramadhan saja.', 'Masjid_Agung_Purworejo.jpg', 'Masjid_Agung_Purworejo', 'Jalan Mayjend Sutoyo, Desa Sindurjan, Kecamatan Purworejo, Kabupaten Purworejo', '-7.711884727397485', '110.00759482383728', '2016-11-29 08:40:38', '2016-11-29 01:40:38'),
(15, 2, 'Pantai Jatimalang', 'Keindahan Pantai Jatimalang sudah menjadi idola para wisatawan jika sedang berkunjung ke Purworejo. Sehingga tidak asing jika banyak di sekitar pantai sudah menjadi bangunan-bangunan untuk berjualan atau sekedar menyediakan tempat istirahat para wisatawan. Pantai Jatimalang menawarkan keindahan pantai laut selatan pulau Jawa yang dikenal memiliki ombak yang cukup besar tetapi masih bisa digunakan untuk bermain. Pantai Jatimalang berada di Desa Jatimalang, Kecamatan Purwodadi, atau berjarak sekitar 18 km dari pusat Kota Purworejo.', 'Pantai_Jatimalang.jpg', 'Pantai_Jatimalang', 'Desa Jatimalang, Kecamatan Purwodadi, Kabupaten Purworejo', '-7.879822923997166', '109.98310089111328', '2016-11-29 08:45:00', '2016-11-29 01:45:00'),
(16, 2, 'Curug Silangit', 'Curug Silangit merupakan tempat wisata di Purworejo yang menjadi aset wisata kota Purworejo. Dinamakan Curug Silangit karena ketinggian curug ini mencapai 50 meter yang dibagi atas 3 tingkatan curug. Pada curug paling atas setinggi 30meter, curug kedua dan ketiga memiliki tinggi yang sama yaitu 10 meter. Tapi jika anda bermain air di sekitar curug ini sebaiknya hati-hati karena jika anda tidak bisa berenang sebaiknya anda bermain di tepian saja. Curug ini dikenal memiliki kedalaman kedung yang sangat dalam. Akses ke Curug Silangit dapat ditempuh dengan kendaraan umum atau kendaraan pribadi dan letaknya pun mudah dijangkau karena lokasinya berada di Desa Somongari, Kecamatan Kaligesing, Kabupaten Purworejo.', 'Curug_Silangit.jpg', 'Curug_Silangit', 'Desa Somongari, Kecamatan Kaligesing, Kabupaten Purworejo', '-7.746649276037423', '110.0973629951477', '2016-11-20 22:28:10', '2016-11-20 22:28:10'),
(17, 2, 'Pantai Ketawang', 'Pantai Ketawang merupakan tempat wisata di Purworejo yang masih asri dan natural. Masih sedikit bangunan yang menunjang akses pantai meskipun terbilang cukup dekat dengan pusat kota. Keadaan pantai masih sepi pengunjung karena belum terjamah para investor, padahal potensi Pantai Ketawang sangat indah. Jika anda berkunjung ke Pantai Ketawang dan jika beruntung akan menjumpai lomba balap kuda yang diadakan warga setempat di Pantai Ketawang. Namun kegiatan ini sangat jarang anda temui karena belum menjadi kegiatan rutin warga setempat. Jika anda tertarik mengunjungi Pantai Ketawang, silahkan datang ke di Desa Ketawang, Kecamatan Grabag, atau berjarak sekitar 22 km dari pusat Kota Purworejo.', 'Pantai_Ketawang.jpg', 'Pantai_Ketawang', 'Desa Ketawang, Kecamatan Grabag, Kabupaten Purworejo', '-7.853727967630354', '109.90913629466377', '2016-11-20 22:37:55', '2016-11-20 22:37:55'),
(18, 2, 'Goa Seplawan', 'Goa Seplawan terletak di Desa Donorejo, Kecamatan Kaligesing dengan jarak tempuh 20 km ke arah timur dari pusat kota dengan ketinggian 700 m di atas permukaan laut sehingga udaranya sangat sejuk. Goa ini memiliki ciri khusus ornamen yang terdapat di dalam goa, antara lain: stalaktit, stalakmit, flow stone, helekit, soda straw, gouwer dam, dan dinding-dinding berornamen seperti bentuk kerangka ikan.\r\n\r\nKeadaan sekitar goa ini sangat mengesankan dengan pemandangan alam yang begitu indah ditumbuhi flora antara lain lumut (di mulut goa), paku-pakuan dan panorama hutan pinus yang asri. Para pengunjung juga dapat menikmati taman bunga di sekitar goa.\r\n\r\nPanjang Goa Seplawan + 700 m dengan cabang-cabang goa sekitar 150 – 300 m dan berdiameter 15 m. Goa alam yang sangat menakjubkan ini menjadi sangat terkenal dengan diketemukannya arca emas Dewa Syiwa dan Dewi Pawestri seberat 1,5 kg pada tanggal 28 Agustus 1979 yang kini disimpan di Museum Nasional Jakarta.\r\n\r\nObyek wisata ini merupakan potensi wisata yang sangat digemari oleh wisatawan karena disamping keindahan obyeknya, goa ini juga telah dilengkapi beberapa fasilitas penunjang lain seperti listrik sebagai penerang dalam goa, MCK, dan taman. Bahkan pada kawasan ini sudah dibangun gardu pandang dan arena perkemahan (camping ground).', 'Goa_Seplawan.jpg', 'Goa_Seplawan', 'Desa Donorejo, Kecamatan Kaligesing, Kabupaten Purworejo', '-7.772970616390418', '110.11024832725525', '2016-11-20 22:47:39', '2016-11-20 22:47:39'),
(19, 2, 'Museum Tosan Aji', 'Museum Tosan Aji atau dikenal dengan nama Museum Pusaka ini menjadi tempat wisata di Purworejo yang menyimpan sejarah yang tinggi. Banyak peninggalan pusaka jaman kerajaan yang disimpan di Museum Tosan Aji. Banyak Pusaka yang dulunya berasal dari tanah Jawa disimpan di museum ini. Museum ini menghadirkan suasana masa lampau dengan kelengkapan koleksi pusaka tanah Jawa.', 'Museum_Tosan_Aji.jpg', 'Museum_Tosan_Aji', 'Jalan Mayjend Sutoyo No. 10 Kecamatan Purworejo, Kabupaten Purworejo', '-7.713963238776886', '110.0070583820343', '2016-11-22 17:53:26', '2016-11-22 17:53:26'),
(20, 2, 'Puncak Geger Menjangan', 'Merupakan kawasan wisata alam, obyek utama yang banyak dinimkati pengunjung adalah keindahan Kota Purworejo dan Pantai Selatan dipandang dari ketinggian puncak bukit. Selain itu, kawasan Geger Menjangan masih menawarkan beberapa obyek rekreasi lainnya, yaitu taman permainan anak, kolam renang dan meja bilyard. Kolam renang dan taman pemancingan terletak di pintu masuk kawasan. Sedang meja bilyard berada di puncak bukit. Suguhan yang lebih dikhususkan untuk kawula muda adalah arena minicross, panjat tebing dan lokasi berbagai pertunjukan umum. Arena minicross berupa lahan cukup luas dengan kontur tanah yang sangat menantang.Di lokasi tersebut juga dapat dimanfaatkan untuk pertunjukan umum. Sedang panjat tebih telah dibuat secara permanen dengan konstruksi baja berketinggian 15 meter. Memandang keindahan panorama alam dari ketinggian itulah yang ditawarkan kawasan tersebut. Keindahan yang dapat dinikmati dengan biaya yang sangat murah dan mudah dijangkau. Keindahan panorama memang merupakan obyek pokok yang banyak disukai masyarakat, terutama para remaja. Untuk dapat menikmati indahnya panorama tersebut, pengunjung ditantang untuk berolah raga jalan kaki sejaun 1.800 m menyusuri jalan setapak yang telah dibangun dengan paving block.\r\n\r\nPerjalanan dari pintu masuk obyek hingga puncak bukit memang cukup menyenangkan. Wisatawan ditantang untuk membuktikan kehandalan tenaga dengan mendaki bukit yang tingginya sekitar 175 m di atas permukaan laun. Setelah sampai di puncak, wisatawan akan menemukan sebuah bangunan berukuran 6 x 10 meter, itulah gardu pemandangan yang sengaja dibangun untuk menikmati keindahan Kota Purworejo dan Pantai Selatan. Keindahan tersebut akan menikmati secara lebih sempurna dikala cuaca cerah. Satu lagi tempat yang menarik di Kawasan Geger Menjangan adalah sebuah makam tua yakni makan Kyai Imam Puro. Konon merupakan cerita Kyai tersebut merupakan salah satu tokoh yang besar andilnya bagi keberadaan Kabupaten Purworejo. Bahkan karena besarnya andil Kyai Imam Puro, sampai-sampai sejarahnya pernah ditawarkan menjadi tonggak hari jadi Kabupaten Purworejo. Lokasi taman wisata Geger Menjangan terletak di timur laut Kota Purworejo. Masuk dalam wilayah Kelurahan Baledono Kabupaten Purworejo. Jaraknya hanya satu kilometer dari pusat kota. Tidak perlu kendaran angkutan umum untuk mencapainya. Dengan berjalan kaki justru terasa lebih nikmat. Sayangnya, kawasan seluas 20 hektar tersebut hingga kini masih ada kendala. Panduan tentang pola pengembangannya telah ada, berupa rencana tapak kawasan lengkap dengan berbagai programnya. Juga sudah ditetapkan dalam rencana umum tata ruang kota (RUTRK) dan rencana tata ruang wilayah (RTRW). Akan tetapi belum ada investor yang dengan sungguh0sungguh berani menanamkan modalnya untuk membuka usaha di kawasan ini.', 'Puncak_Geger_Menjangan.jpg', 'Puncak_Geger_Menjangan', 'Kelurahan Trirejo, Kecamatan Loano, Kabupaten Purworejo', '-7.699253963095039', '110.02779722213745', '2016-11-22 18:07:52', '2016-11-22 18:07:52'),
(21, 2, 'Benteng Pendem', 'Bagi anda mungkin memang asing mendengar kata Benteng Pendem khususnya anda yang berda di luar daerah Purworejo, Kota Purworejo juga pernah dijadikan tempat pangakaln militer penjajah Jepang, hal itu dibuktikan dengan adanya peningggalan sebuah benteng kuno masa penjajahan Jepang, dimana benteng ini dulunya digunakan oleh militer Jepang untuk menahan gempuran Serangan dari arah pantai Selatan.Namun kini Benteng itu bisa berpotensi sebagai objek wisata yang menarik apabila ada dana infrastuktur untuk pengolahannya.\r\n\r\nBenteng Pendem terletak di perbukitan Dukuh Kaliwaru, Dusun Bapangsari Krendetan, Kec. Bagelen di ketinggian 200 m di atas permukaan laut. Benteng Pendem ini merupakan peninggalan tentara Jepang yang dibangun pada 1945 dengan jumlah seluruhnya 29 buah. Di masa perang dulu tujuan dibangunnya benteng ini adalah sebagai tempat pertahanan dan pengintaian Jepang dalam menghadapi musuh, terutama yang datang dari arah Laut Selatan. Sayangnya, sebagai saksi bisu sejarah, benteng ini kurang terawat. Di masa datang diharapkan benteng ini dapat menjadi perhatian Pemda terutama aspek perawatannya sehingga dapat menarik minat wisatawan untuk berkunjung. Selama ini lokasi Benteng banyak dikunjungi muda-mudi sebagai tempat rekreasi.', 'Benteng_Pendem.jpg', 'Benteng_Pendem', 'Desa Dadirejo, Kecamatan Purworejo, Kabupaten Purworejo', '-7.845483945135993', '110.04131555557251', '2016-11-22 18:38:04', '2016-11-22 18:38:04'),
(22, 2, 'Curug Muncar', 'Tidak hanya curug Silangit yang terdapat n terkenal di purworejo tapi lebih dari itu sebetulnya ada bnyak curug di Kab.Purworejo slaha satunya adalah Curug Muncar berikut ini. Air terjun Curug Muncar terletak 45 km arah barat laut dari pusat Kota Purworejo. Tepatnya terletak di Desa Kaliwungu, Kec. Bruno, di Kawasan Perhutani. Air terjun ini berada di ketinggian 900 m diatas permukaan laut. Curug Muncar ini masih sangat alami, belum tersentuh oleh bermacam-macam teknologi manusia. Oleh karena itu jika Anda menyukai petualangan alam maka Curug Muncar dapat menjadi pilihan yang tepat.\r\n\r\nDisarankan, bila Anda ingin berpetualang ke lokasi ini, sebaiknya persiapkan fisik Anda karena jalan menuju lokasi relatif menanjak, sehingga dikhawatirkan bila fisik anda lemah tidak dapat sampai ke tujuan. Bagaimanapun lokasi ini cocok bagi para pencinta alam dan pendaki gunung.\r\nBila Anda tiba di lokasi akan terasa betapa agungnya Sang Pencipta alam ini. Kesejukan air dan udara akan menyertai Anda sepanjang waktu. Bila Anda ingin mencoba mandi alam, disinilah pilihan yang tepat. Pengunjung yang pernah ke lokasi ini umumnya mengaku puas dapat menikmati keasrian alam sebagai kekayaan bumi nusantara.', 'Curug_Muncar.jpg', 'Curug_Muncar', 'Desa Kaliwungu, Kecamatan Bruno, Kabupaten Purworejo', '-7.540742223393138', '109.94741678237915', '2016-11-22 18:42:44', '2016-11-22 18:42:44'),
(23, 2, 'Pantai Keburuhan', 'Pantai keburuhan atau yang dikenal dengan pantai pasir pancu ini bisa menjadi destinasi wisata anda senjutnya ketika sedang berkunjung ke purworejo. Anda perlu menempuh jarak sekitar 22 kilometerdari pusat kota untuk dapat menikmati deburan ombak dengan pasir hitam di pantai keburuhan.', 'Pantai_Keburuhan.jpg', 'Pantai_Keburuhan', 'Desa Keburuhan, Kecamatan Ngombol, Kabupaten Purworejo', '-7.855006893118641', '109.91410374641418', '2016-11-22 18:44:34', '2016-11-22 18:44:34'),
(24, 2, 'Taman Sidandang', 'Lokasi Taman Sidandang relatif dekat, hanya perlu nenempuh 20 menit atau sekiat 17 kilometer saja. Jalanan menuju lokasipun cukup bagus dan sudah beraspal. Disini anda dapat berenang dan berfotoria dengan potret alam yang indah.', 'Taman_Sidandang.JPG', 'Taman_Sidandang', 'Desa Kaligono, Kecamatan Kaligesing, Kabupaten Purworejo', '-7.734210913311654', '110.09810328483582', '2016-11-22 18:46:26', '2016-11-22 18:46:26'),
(25, 2, 'Curug Siklotok', 'Curug Siklotok memang lebih kecil dibandingkan Curug Silangit, karena curug ini menampung air terjun yang turun dari atas dengan ketinggian hanya sekitar 10 meter saja. Kesegaran air terjun bisa dinikmati secara langsung di bawah air terjun dan banyak bebatuan yang dapat digunakan untuk bersantai menikmati pemandangan alam dari Curug Siklotok yang masih terlihat alami.', 'Curug_Siklotok.jpg', 'Curug_Siklotok', 'Dusun Jeketro, Desa Kaligono, Kecamatan Kaligesing, Kabupaten Purworejo', '-7.740839436906397', '110.09507238864899', '2016-11-29 08:47:21', '2016-11-29 01:47:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(10) NOT NULL,
  `nama_penginapan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `permalink` text,
  `kapasitas` int(10) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `url_gambar` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `id_desa` int(10) DEFAULT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama_penginapan`, `alamat`, `permalink`, `kapasitas`, `fasilitas`, `url_gambar`, `latitude`, `longitude`, `id_desa`, `kontak`, `created_at`, `updated_at`) VALUES
(2, 'Hotel 1', 'asdf', 'asdfasdf', 123, NULL, 'asdfasdf.jpg', '-7.706781433646315', '110.01322746276855', 2, '123123123', '2016-12-17 00:19:44', '2016-12-17 00:19:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_makan`
--

CREATE TABLE `tempat_makan` (
  `id` int(10) NOT NULL,
  `nama_tempat_makan` varchar(255) DEFAULT NULL,
  `sumber` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text,
  `url_gambar` varchar(255) DEFAULT NULL,
  `id_jajan` int(10) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'eko', 'eko@gmail.com', '$2y$10$kt8WtRB5BwZQzArkp5nhsO.F/3wS7FlnALVC3RWgrmm0BOJWoFFxK', 'Dy8VfUbTs3UVPyDy40BIvrDK523HsiJM0Dc6crSSwHw4fSs1YowbqWlXQqaK', '2016-11-26 16:59:55', '2016-11-26 09:59:55'),
(4, 'riyan', 'riyan@gmail.com', '$2y$10$.y1FE.ksd8lioRGmRKjHdu8yKriISVeBgYXEeATPD61cOexUonvce', NULL, '2016-11-26 10:01:22', '2016-11-26 10:01:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_konten` (`id_konten`);

--
-- Indexes for table `gallery_penginapan`
--
ALTER TABLE `gallery_penginapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_konten` (`id_penginapan`);

--
-- Indexes for table `kategori_jajan`
--
ALTER TABLE `kategori_jajan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_desa` (`id_desa`),
  ADD KEY `id` (`id`),
  ADD KEY `kontak` (`kontak`);

--
-- Indexes for table `tempat_makan`
--
ALTER TABLE `tempat_makan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jajan` (`id_jajan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `gallery_penginapan`
--
ALTER TABLE `gallery_penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kategori_jajan`
--
ALTER TABLE `kategori_jajan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tempat_makan`
--
ALTER TABLE `tempat_makan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_konten`) REFERENCES `konten` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `konten_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `penginapan_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `tempat_makan`
--
ALTER TABLE `tempat_makan`
  ADD CONSTRAINT `tempat_makan_ibfk_1` FOREIGN KEY (`id_jajan`) REFERENCES `kategori_jajan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
