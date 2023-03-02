-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 04:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hmjti`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_28_181947_add_column_remember_token_to_tb_users', 1),
(2, '2021_03_01_070200_change_nama_to_name_at_tb_users', 2),
(3, '2021_03_05_061921_add_column_slug_to_table_tb_artikel', 3),
(4, '2021_03_09_165409_create_sessions_table', 3),
(5, '2021_03_13_005223_add_role_column_to_tb_users_table', 3),
(6, '2021_04_07_163536_change_length_of_golongan_column_tb_golongan_table', 4),
(7, '2021_04_07_164442_delete_column_periode_on_tb_jabatan_table', 5),
(9, '2021_04_10_160816_add_column_subject_to_table_tb_kritiksaran', 6),
(10, '2021_04_10_172954_add_column_slug_to_table_tb_form', 7),
(11, '2021_04_12_043602_create_tb_info', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZCc6DOqiS3u4sgiLbVPVWWFh4iSFY5jlIAfAhWAU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.72 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZjdaVUxZRDg3c2tCN21lMXRFMnFFYVUxR2VVNGVUWEJkMGg0SGtabyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo1OiJ1c2VycyI7TzoxNToiQXBwXE1vZGVsc1xVc2VyIjoyODp7czo4OiIAKgB0YWJsZSI7czo4OiJ0Yl91c2VycyI7czoxMzoiACoAcHJpbWFyeUtleSI7czo4OiJpZF91c2VycyI7czoxMDoidGltZXN0YW1wcyI7YjowO3M6MTE6IgAqAGZpbGxhYmxlIjthOjY6e2k6MDtzOjQ6Im5hbWUiO2k6MTtzOjg6InVzZXJuYW1lIjtpOjI7czo1OiJlbWFpbCI7aTozO3M6ODoicGFzc3dvcmQiO2k6NDtzOjk6ImZvdG9fdXNlciI7aTo1O3M6NDoicm9sZSI7fXM6OToiACoAaGlkZGVuIjthOjI6e2k6MDtzOjg6InBhc3N3b3JkIjtpOjE7czoxNDoicmVtZW1iZXJfdG9rZW4iO31zOjEzOiIAKgBjb25uZWN0aW9uIjtzOjU6Im15c3FsIjtzOjEwOiIAKgBrZXlUeXBlIjtzOjM6ImludCI7czoxMjoiaW5jcmVtZW50aW5nIjtiOjE7czo3OiIAKgB3aXRoIjthOjA6e31zOjEyOiIAKgB3aXRoQ291bnQiO2E6MDp7fXM6MTA6IgAqAHBlclBhZ2UiO2k6MTU7czo2OiJleGlzdHMiO2I6MTtzOjE4OiJ3YXNSZWNlbnRseUNyZWF0ZWQiO2I6MDtzOjEzOiIAKgBhdHRyaWJ1dGVzIjthOjg6e3M6ODoiaWRfdXNlcnMiO2k6MTtzOjQ6Im5hbWUiO3M6MTI6IkFkbWluIEhNSiBUSSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo1OiJlbWFpbCI7czoyMDoiYWRtaW5ITUpUSUBhZG1pbi5jb20iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxMCRLL3VyTlYuYlRaNGdTcTlaUENTOXZPekpwZ3lzTXlYQk9VcGNOWXVERjNJVEVhVmljV3VtRyI7czo5OiJmb3RvX3VzZXIiO3M6Mjg6ImZvdG8vMTYxODgwNDI0MWxvZ28gdXNlci5wbmciO3M6MTQ6InJlbWVtYmVyX3Rva2VuIjtOO3M6NDoicm9sZSI7czo1OiJhZG1pbiI7fXM6MTE6IgAqAG9yaWdpbmFsIjthOjg6e3M6ODoiaWRfdXNlcnMiO2k6MTtzOjQ6Im5hbWUiO3M6MTI6IkFkbWluIEhNSiBUSSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo1OiJlbWFpbCI7czoyMDoiYWRtaW5ITUpUSUBhZG1pbi5jb20iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxMCRLL3VyTlYuYlRaNGdTcTlaUENTOXZPekpwZ3lzTXlYQk9VcGNOWXVERjNJVEVhVmljV3VtRyI7czo5OiJmb3RvX3VzZXIiO3M6Mjg6ImZvdG8vMTYxODgwNDI0MWxvZ28gdXNlci5wbmciO3M6MTQ6InJlbWVtYmVyX3Rva2VuIjtOO3M6NDoicm9sZSI7czo1OiJhZG1pbiI7fXM6MTA6IgAqAGNoYW5nZXMiO2E6MDp7fXM6ODoiACoAY2FzdHMiO2E6MDp7fXM6MTc6IgAqAGNsYXNzQ2FzdENhY2hlIjthOjA6e31zOjg6IgAqAGRhdGVzIjthOjA6e31zOjEzOiIAKgBkYXRlRm9ybWF0IjtOO3M6MTA6IgAqAGFwcGVuZHMiO2E6MDp7fXM6MTk6IgAqAGRpc3BhdGNoZXNFdmVudHMiO2E6MDp7fXM6MTQ6IgAqAG9ic2VydmFibGVzIjthOjA6e31zOjEyOiIAKgByZWxhdGlvbnMiO2E6MDp7fXM6MTA6IgAqAHRvdWNoZXMiO2E6MDp7fXM6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTA6IgAqAGd1YXJkZWQiO2E6MTp7aTowO3M6MToiKiI7fXM6MjA6IgAqAHJlbWVtYmVyVG9rZW5OYW1lIjtzOjE0OiJyZW1lbWJlcl90b2tlbiI7fXM6MTE6InRpbWVfbG9nZ2VkIjtzOjE5OiIyMDIxLTA0LTIwIDAyOjA2OjQ4Ijt9', 1618885214);

-- --------------------------------------------------------

--
-- Table structure for table `tb_angkatan`
--

CREATE TABLE `tb_angkatan` (
  `id_angkatan` int(2) NOT NULL,
  `angkatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_angkatan`
--

INSERT INTO `tb_angkatan` (`id_angkatan`, `angkatan`) VALUES
(1, 2015),
(2, 2016),
(3, 2017),
(4, 2018),
(5, 2019),
(6, 2020),
(7, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal_penulisan` datetime NOT NULL,
  `tanggal_update` datetime NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id_kategori` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_biro`
--

CREATE TABLE `tb_biro` (
  `id_biro` int(4) NOT NULL,
  `id_departemen` int(4) NOT NULL,
  `biro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biro`
--

INSERT INTO `tb_biro` (`id_biro`, `id_departemen`, `biro`) VALUES
(1, 1, 'Kesekretariatan'),
(2, 1, 'Sarana Dan Prasarana'),
(3, 2, 'Multimedia'),
(4, 2, 'Sistem Informasi'),
(5, 2, 'IT Support'),
(6, 2, 'Hardware'),
(7, 2, 'Game Development'),
(8, 3, 'Kewirausahaan'),
(9, 3, 'Usaha Mandiri'),
(10, 4, 'Internal TIF'),
(11, 4, 'Internal MIF'),
(12, 4, 'Internal TKK'),
(13, 4, 'Eksternal'),
(14, 4, 'Kominfo'),
(17, 7, 'BPH'),
(18, 1, 'Kadep Administrasi'),
(19, 1, 'Kadep Keilmuan'),
(20, 1, 'Kadep Perhubungan'),
(21, 1, 'Kadep Kewirausahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `id_departemen` int(4) NOT NULL,
  `departemen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`id_departemen`, `departemen`) VALUES
(1, 'Administrasi'),
(2, 'Keilmuan'),
(3, 'Kewirausahaan'),
(4, 'Perhubungan'),
(7, 'Badan Pengurus Harian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_form`
--

CREATE TABLE `tb_form` (
  `id_form` int(4) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `judul_form` varchar(100) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `link_form` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id_golongan` int(2) NOT NULL,
  `golongan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`id_golongan`, `golongan`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'A BONDOWOSO'),
(7, 'B BONDOWOSO'),
(8, 'INTERNASIONAL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_hero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kahim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_wakahim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kahim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wakahim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_struktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_proker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_adart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id`, `gambar_hero`, `visi`, `misi`, `slogan`, `foto_kahim`, `foto_wakahim`, `nama_kahim`, `nama_wakahim`, `foto_struktur`, `tahun`, `link_proker`, `link_adart`) VALUES
(3, 'user/img/1618803617background-section-1-min.png', 'Terwujudnya HMJ TI yang aktif, inovaitf, dan komunikatif serta meningkatkan pelayanan pengabdian untukJTI yang lebih baik.', 'Menjalin rasa kekeluargaan dan solidaritas antar pengurus HMJ TI, Menjadi wadah aspirasi bagi mahasiswa JTI, Menjalin Komunikasi yang baik antar elemen JTI, Mengembangkan kreativitas minat bakat mahasiswa dalam bidang akademik maupun non akademik', 'Bersinergi Dari Hati, Berdedikasi Untuk TI', 'user/img/1618803617alvin-1.png', 'user/img/1618803617bambang-1.png', 'Alvin Eko Cahyo Febrianto', 'Henri Bambang Suratno', 'user/img/1618803617struktur.png', '2021', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(4) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Ketua Himpunan'),
(2, 'Wakil Ketua Himpunan'),
(3, 'Co'),
(4, 'Anggota'),
(5, 'Sekretaris 1'),
(6, 'Sekretaris 2'),
(7, 'Bendahara'),
(8, 'Badan Semi Ortonom'),
(9, 'Kepala Departemen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(4) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Artikel'),
(2, 'Berita'),
(4, 'Mading'),
(5, 'Pengumuman'),
(6, 'Event');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritiksaran`
--

CREATE TABLE `tb_kritiksaran` (
  `id_kritiksaran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `kritiksaran` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(4) NOT NULL,
  `nim` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_angkatan` int(4) NOT NULL,
  `id_prodi` int(4) NOT NULL,
  `id_golongan` int(4) NOT NULL,
  `id_jabatan` int(4) NOT NULL,
  `id_biro` int(4) NOT NULL,
  `id_periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `nim`, `nama`, `email`, `no_hp`, `foto`, `id_angkatan`, `id_prodi`, `id_golongan`, `id_jabatan`, `id_biro`, `id_periode`) VALUES
(9, 'E41191422', 'Alvin Eko Cahyo Febrianto', 'alvinfebrian2318@gmail.com', '081525734924', 'foto/1618884663alvin.png', 5, 3, 3, 1, 17, 1),
(10, '-', 'Henri Bambang Suratno', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618817399bambang.png', 5, 1, 1, 2, 17, 1),
(11, '-', 'winda', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618817546winda.png', 6, 3, 1, 5, 17, 1),
(12, '-', 'mita', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618817592mita.png', 5, 3, 1, 6, 17, 1),
(13, 'E31201706', 'Eka Fahrika Nariswari', 'ekapahrika23@gmail.com', '083845625181', 'foto/1618817644eka.png', 6, 1, 3, 7, 17, 1),
(14, 'E31190658', 'Rofina Aulia Noviati', 'rofinaaulia11@gmail.com', '082249422678', 'foto/1618817926fina.png', 5, 1, 1, 9, 18, 1),
(15, 'E31192463', 'Hermawan Yoga P', 'hermawandanang1999@gmail.com', '082140835653', 'foto/1618817992yoga.png', 5, 1, 4, 3, 1, 1),
(16, '-', 'fahmi', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618818054fahmi.png', 6, 1, 1, 3, 2, 1),
(17, '-', 'erlinda', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618818110erlinda.png', 6, 1, 1, 4, 1, 1),
(18, 'E41190441', 'Sinta Nuriyah Wulandari', 'sintanur096@gmail.com', '085235138387', 'foto/1618818161sinta.png', 5, 3, 1, 4, 1, 1),
(19, 'E31201459', 'Fikriatul Ilmi', 'fikriilmi3@gmail.com', '082234055684', 'foto/1618818226ilmi.png', 6, 1, 3, 4, 2, 1),
(20, 'E32191237', 'Ageng Wijaya', 'agengwijaya003@gmail.com', '08980342135', 'foto/1618818296ageng.png', 5, 2, 3, 9, 19, 1),
(21, 'E41190322', 'Kana Farira Salsabila', 'kanafarira@gmail.com', '085854001418', 'foto/1618818347fara.png', 5, 3, 1, 3, 3, 1),
(22, 'E41190528', 'Iqbal Ikhlasul Amal', 'e41190528@student.polije.ac.id', '082229741767', 'foto/1618818392iqbal.png', 5, 3, 1, 3, 4, 1),
(23, 'E31192043', 'M. Tahajudin Arrofi', 'mtarrofi4@gmail.com', '081225451965', 'foto/1618818447rafli.png', 5, 1, 3, 3, 7, 1),
(24, '-', 'Dwi Prasetyo', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618818508pras.png', 5, 3, 2, 4, 3, 1),
(25, 'E41200059', 'Vivi Handayani', 'vivihandayaniprob@gmail.com', '6289697670964', 'foto/1618818569vivi.png', 6, 3, 1, 4, 3, 1),
(26, 'E41201456', 'Ahmad Saifur Rohman', 'e41201456@student.polije.ac.id', '082214100363', 'foto/1618818639saifur.png', 1, 3, 3, 4, 4, 1),
(27, 'E31200844', 'Lukman Afandi', 'lukmanafandi10@gmail.com', '085156426240', 'foto/1618818674lukman.png', 6, 1, 2, 4, 4, 1),
(28, '-', 'dwki', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618818719dwiki.png', 6, 1, 1, 4, 7, 1),
(29, '-', 'indra', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618818769indra.png', 6, 1, 1, 4, 7, 1),
(30, 'E32191840', 'Wahyu Musthofa', 'wahyumusthofa12@gmail.com', '085159908115', 'foto/1618818826wahyu.png', 5, 2, 4, 3, 6, 1),
(31, 'E41191039', 'Firgo Bhaktiar Hamsah', 'igobhaktiar07@gmail.com', '082331562744', 'foto/1618818871igo.png', 5, 3, 2, 3, 5, 1),
(32, 'E32191197', 'Saiful Bahri', 'Saifulplj8@gmail.com', '085231855492', 'foto/1618818934saiful.png', 5, 2, 2, 4, 6, 1),
(33, 'E32200185', 'Bayu Cahya Khurnia Yudha', 'Bayuyudha@gmail.com', '085732020093', 'foto/1618818975bayu.png', 6, 2, 1, 4, 6, 1),
(34, '-', 'puja', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618819048puja.png', 6, 1, 1, 4, 5, 1),
(35, '-', 'sirojudin', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618819119sirojudin.png', 6, 1, 1, 4, 5, 1),
(36, 'E41192287', 'Sulistyawati', 'e41192287@student.polije.ac.id', '085230010525', 'foto/1618819186sulis.png', 5, 3, 8, 9, 20, 1),
(37, 'E41190904', 'Fajriansyah Decky Setiawan', 'deckys096@gmail.com', '085335165316', 'foto/1618819239decky.png', 5, 3, 2, 3, 13, 1),
(38, 'E41190239', 'Mohammad Hidayatullah', 'mohammadhidayatullah85@gmail.com', '082141125513', 'foto/1618819289dayat.png', 5, 3, 1, 4, 13, 1),
(39, 'E31201773', 'Ardyas setya nugraha', 'ardyassetya@gmail.com', '085606683326', 'foto/1618819335tyo.png', 6, 1, 3, 4, 13, 1),
(40, 'E31200973', 'Devi Aryaning Tyas', 'deviaryaning03@gmail.com', '081554347187', 'foto/1618819386devi.png', 6, 1, 2, 3, 11, 1),
(41, 'E41201427', 'M Hasan', 'hasanmuhammad197@gmail.com', '082232139882', 'foto/1618819434hasan.png', 6, 3, 3, 3, 10, 1),
(42, 'E32190138', 'Tinche Nabilah Shalawati Her', 'tinche.nabilah12@gmail.com', '087865947055', 'foto/1618819487nabila.png', 5, 2, 1, 3, 12, 1),
(43, 'E32191442', 'Muhammad Hafizhuddin', 'didinsdit@gmail.com', '082111624304', 'foto/1618819554didin.png', 5, 2, 3, 3, 14, 1),
(44, 'E41200048', 'Alvioni Tineke Risqianti', 'alvionirisqianti@gmail.com', '082249652927', 'foto/1618819633alvioni.png', 6, 3, 1, 4, 14, 1),
(45, 'E31200102', 'Haris Faqih Darmawan', 'faqihharis60@gmail.com', '081348103182', 'foto/1618884525fafa.png', 6, 1, 1, 4, 14, 1),
(46, 'E31201690', 'Nur Afifah', 'vv.nafifah7@gmail.com', '088217283172', 'foto/1618819793nura.png', 6, 1, 3, 4, 14, 1),
(47, '-', 'Liga Bayu Herdianto', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618819903liga.png', 5, 3, 1, 9, 21, 1),
(48, '-', 'Adi Wijaya', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618819948adi.png', 5, 3, 2, 3, 8, 1),
(49, '-', 'Nanda Raditya Akbar', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618820007radit.png', 5, 3, 1, 3, 9, 1),
(50, '-', 'M. Syaifudin', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618820084udin.png', 5, 3, 1, 4, 8, 1),
(51, 'E31201687', 'Shafa Thaliah', 'Shafathalia@gmail.com', '089630263559', 'foto/1618820142shafa.png', 6, 1, 3, 4, 8, 1),
(52, '-', 'Vigo Ensas Fii Sabilillah', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618820216ensas.png', 5, 3, 1, 4, 9, 1),
(53, '-', 'Ruary Vina', 'e31190000@student.polije.ac.id', '081525000000', 'foto/1618820267ruary.png', 6, 3, 1, 4, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_periode` int(4) NOT NULL,
  `periode` int(4) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `periode`, `status`) VALUES
(1, 2021, 'aktif'),
(2, 2020, 'anggota_khusus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(4) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `prodi`) VALUES
(1, 'Manajemen Informatika'),
(2, 'Teknik Komputer'),
(3, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(3) NOT NULL,
  `name` varchar(35) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `name`, `username`, `email`, `password`, `foto_user`, `remember_token`, `role`) VALUES
(1, 'Admin HMJ TI', 'admin', 'adminHMJTI@admin.com', '$2y$10$K/urNV.bTZ4gSq9ZPCS9vOzJpgysMyXBOUpcNYuDF3ITEaVicWumG', 'foto/1618804241logo user.png', NULL, 'admin'),
(7, 'Departemen Administrasi', 'departemen.administrasi', 'dep.administrasi@hmjti.com', '$2y$10$FkVx48D1nPTXR/qyfeAvcOzXu6lnHo7X7UT9soPOK4cZnGIajp/y6', 'foto/1618821428logo user.png', NULL, 'departemen'),
(8, 'Departemen Keilmuan', 'departemen.keilmuan', 'dep.keilmuan@hmjti.com', '$2y$10$LEjOQA4PS2OVsosnxVxsH.6qnScMduBdZoMAi2hqTr04asgHjfD06', 'foto/1618821467logo user.png', NULL, 'departemen'),
(9, 'Departemen Perhubungan', 'departemen.perhubungan', 'dep.perhubungan@hmjti.com', '$2y$10$JOpf/VbyzlyeapxToVxB9.BV9AuKsqX.BadsfMFlvp6rARUn.RkV.', 'foto/1618821496logo user.png', NULL, 'departemen'),
(10, 'Departemen Kewirausahaan', 'departemen.kewirausahaan', 'dep.kewirausahaan@hmjti.com', '$2y$10$75dVNW5zrgHwDTjYL.j.7.q/JtIfOLiAjRC/7GXqyKX4031j2lgUm', 'foto/1618821540logo user.png', NULL, 'departemen'),
(11, 'Biro Kesekretariatan', 'biro.kesekretariatan', 'biro.kesekretariatan@hmjti.com', '$2y$10$lr4zBdEOy2MNEyrD3OddCuIQeKNeaCNgbqmiaD85tY1d3lwn061AK', 'foto/1618821626logo user.png', NULL, 'biro'),
(12, 'Biro Sarana dan Prasarana', 'biro.sarpras', 'biro.sarpras@hmjti.com', '$2y$10$QuYBqhjAI.h.QetA2G.2pu.vBSEcYEMc/nuZvmM23QWNHMYkNjtMS', 'foto/1618821674logo user.png', NULL, 'biro'),
(13, 'Biro Multimedia', 'biro.multimedia', 'biro.multimedia@hmjti.com', '$2y$10$TlzeEHL6G9fLkNYAA1geK.Q4qCjNDZ.rpVdv9ocTjrRE1A3pAQiF2', 'foto/1618821717logo user.png', NULL, 'biro'),
(14, 'Biro Sistem Informasi', 'biro.sisteminformasi', 'biro.sisteminformasi@hmjti.com', '$2y$10$xTxzGXnqPWT5UAcuB.D1pOp7F7xR0CNoU97wVqbyGqs502WqNT3vi', 'foto/1618821759logo user.png', NULL, 'biro'),
(15, 'Biro IT Support', 'biro.itsupport', 'biro.itsupport@hmjti.com', '$2y$10$QCTX9jBQfoeUOk2ALm14Cepyxp1E3jqkNHsZAUl7t/epc6qK/JWRC', 'foto/1618821804logo user.png', NULL, 'biro'),
(16, 'Biro Hardware', 'biro.hardware', 'biro.hardware@hmjti.com', '$2y$10$Wp5QDQ7V4BIQ2kzXrdmHTuXBLvjLBkZel1NpZI5jsVvR80cmPjMSW', 'foto/1618821872logo user.png', NULL, 'biro'),
(17, 'Biro Game Development', 'biro.gamedev', 'biro.gamedev@hmjti.com', '$2y$10$wZtJbz7GFAVjB3pNO22oMe1AZW6RAYt/e3CqhM59wfbusCQafibQi', 'foto/1618821905logo user.png', NULL, 'biro'),
(18, 'Biro Kewirausahaan', 'biro.kewirausahaan', 'biro.kewirausahaan@hmjti.com', '$2y$10$PjmVqkTqY2iKLy76WnTYX.dkAESv1gvYblI9.oHToVoaBvnofc0FS', 'foto/1618821952logo user.png', NULL, 'biro'),
(19, 'Biro Usaha Mandiri', 'biro.usahamandiri', 'biro.usahamandiri@hmjti.com', '$2y$10$I7Ywss93aY8scBM/UalHW.pqBFoNPMUaLuVrM0QWJ8qNAFhGBhfjK', 'foto/1618821987logo user.png', NULL, 'biro'),
(20, 'Biro Eksternal', 'biro.eksternal', 'biro.eksternal@hmjti.com', '$2y$10$1Eg74kg/hjqLkJKLKyZdS.o9Sof8B4GsJbpIgWwqwX26v14zMesHC', 'foto/1618822025logo user.png', NULL, 'biro'),
(21, 'Biro Internal MIF', 'biro.internalmif', 'biro.internalmif@hmjti.com', '$2y$10$koULZNRTGB/Z.Zsap7o/f.Y37ezv6SE0hbdz2W6oKFKolu8SIR19i', 'foto/1618822075logo user.png', NULL, 'biro'),
(22, 'Biro Internal TIF', 'biro.internaltif', 'biro.internaltif@hmjti.com', '$2y$10$yjGSkJ3Oli6NvigCnJP4RupJPhi9TAk2xDWD/hGXmNd4hGw3oHwzm', 'foto/1618822105logo user.png', NULL, 'biro'),
(23, 'Biro Internal TKK', 'biro.internaltkk', 'biro.internaltkk@hmjti.com', '$2y$10$KfJbM2TW9C25muaiFKsRDeM2ebIjmuOpYUnstwI0lxmkC25d9AwN.', 'foto/1618822139logo user.png', NULL, 'biro'),
(24, 'Biro Kominfo', 'biro.kominfo', 'biro.kominfo@hmjti.com', '$2y$10$o/joeZFbRJHEQcyw6d6wu.afGPCOdLYupicoaxiDW.8tTuDs5otXy', 'foto/1618822202logo user.png', NULL, 'biro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_biro`
--
ALTER TABLE `tb_biro`
  ADD PRIMARY KEY (`id_biro`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD PRIMARY KEY (`id_kritiksaran`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD KEY `id_prodi` (`id_prodi`,`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_biro` (`id_biro`),
  ADD KEY `id_golongan` (`id_golongan`),
  ADD KEY `id_periode` (`id_periode`) USING BTREE,
  ADD KEY `id_angkatan` (`id_angkatan`) USING BTREE;

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  MODIFY `id_angkatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_biro`
--
ALTER TABLE `tb_biro`
  MODIFY `id_biro` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  MODIFY `id_departemen` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_form`
--
ALTER TABLE `tb_form`
  MODIFY `id_form` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id_golongan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  MODIFY `id_kritiksaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_biro`
--
ALTER TABLE `tb_biro`
  ADD CONSTRAINT `tb_biro_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `tb_departemen` (`id_departemen`);

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`);

--
-- Constraints for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD CONSTRAINT `tb_angkatan_ibfk_4` FOREIGN KEY (`id_angkatan`) REFERENCES `tb_angkatan` (`id_angkatan`),
  ADD CONSTRAINT `tb_biro_ibfk_3` FOREIGN KEY (`id_biro`) REFERENCES `tb_biro` (`id_biro`),
  ADD CONSTRAINT `tb_golongan_ibfk_4` FOREIGN KEY (`id_golongan`) REFERENCES `tb_golongan` (`id_golongan`),
  ADD CONSTRAINT `tb_jabatan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `tb_pengurus_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `tb_periode` (`id_periode`),
  ADD CONSTRAINT `tb_periode_ibfk_2` FOREIGN KEY (`id_periode`) REFERENCES `tb_periode` (`id_periode`),
  ADD CONSTRAINT `tb_prodi_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
