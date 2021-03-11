-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2021 pada 13.42
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `nama_dokumen` varchar(255) DEFAULT NULL,
  `ukuran_dokumen` int(15) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `id_sub_k` int(11) NOT NULL,
  `id_sub_sub_k` int(11) NOT NULL,
  `id_kelengkapan` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `id_periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_dokumen`, `deskripsi`, `nama_dokumen`, `ukuran_dokumen`, `tgl_upload`, `id_user`, `id_komponen`, `id_sub_k`, `id_sub_sub_k`, `id_kelengkapan`, `status`, `id_periode`) VALUES
(31, '', '[BPS-0311VN] Proposal Rencana Kerja_Rifqi Adiyatma_1817051055.pdf', 12528, '2021-03-11', 1, 1, 4, 9, 18, 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelengkapan`
--

CREATE TABLE `tbl_kelengkapan` (
  `id_kelengkapan` int(11) NOT NULL,
  `nama_kelengkapan` varchar(255) NOT NULL,
  `id_sub_sub_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelengkapan`
--

INSERT INTO `tbl_kelengkapan` (`id_kelengkapan`, `nama_kelengkapan`, `id_sub_sub_k`) VALUES
(1, 'Sudah ada SK tim kerja pembangunan ZI menuju WBK/WBBM', 1),
(2, 'SOP/mekanisme yang menjelaskan tata cara pemilihan anggota tim', 2),
(3, 'Kertas kerja penentuan anggota tim kerja', 2),
(4, 'Undangan,daftar hadir, dan dokumentasi rapat penyusunan dokumen rencana pembangunan ZI', 3),
(5, 'Notulen/laporan pelaksanaan penyusunan rencana pembangunan ZI', 3),
(6, 'Dokumen rencana aksi yang memuat target prioritas', 3),
(7, '0', 4),
(8, '0', 5),
(9, 'Laporan pelaksanaan rencana aksi oleh Tim Kerja', 6),
(10, 'Undangan, daftar hadir, dan notulen rapat evaluasi', 6),
(11, 'Dokumentasi pelaksanaan rencana aksi', 6),
(12, 'Laporan monitoring dan evaluasi pelaksanaan kegiatan', 7),
(13, 'Undangan, daftar hadir, dan notulen pelaksanaan rapat evaluasi', 7),
(14, 'Notulen/laporan monitoring dan evaluasi yang memuat rekomendasi', 8),
(15, 'Laporan hasil tindak lanjut rekomendasi', 8),
(16, 'Dokumentasi pelaksanaan tindak lanjut', 8),
(17, 'Absensi pimponan satker / pejabat struktural', 9),
(18, 'Dokumentasi kegiatan kerja sama, pelayanan & pengabdian kepada masyarakat ataupun press release terkait pembangunan ZI yang dilakukan oleh pimpinan satker / pejabat struktural', 9),
(19, 'SK Agen Perubahan', 10),
(20, 'Undangan, daftar hadir, dan notulen pelaksanaan rapat pembentukan agen perubahan', 10),
(21, 'Notulen / laporan pelaksanaan kegiatan penerapan budaya kerja', 11),
(22, 'Domumentasi pelaksanaan kegiatan', 11),
(23, 'Absensi pegawai', 11),
(24, 'Dokumen pakta integritas', 12),
(25, 'Laporan pelaksanaan kegiatan pembangunan ZI', 12),
(26, 'Dokumentasi pelaksanaan kegiatan', 12),
(27, 'Peta proses bisnis utama instansi (BPS Pusat)', 13),
(28, 'SOP yang mengacu pada proses bisnis instansi, SOP yang ada pada tiap bidang/bagian, selain itu mengacu pada pengawasan dan pelayanan', 13),
(29, 'SOP inovasi unit kerja', 13),
(30, 'Memorandum pelaksanaan tugas sesuai SOP pada tiap penugasan', 14),
(31, 'Laporan kegiatan-kegiatan dicantumkan bahwa pelaksanaan sesuai SOP', 14),
(32, 'Bukti rapat evaluasi suatu kegiatan sekaligus membahas penerapan SOP nya', 14),
(33, 'Bukti dukung yang disebuatkan dalam SOP terkait', 14),
(34, 'Bukti pelaksanaan rapat evaluasi atas SOP, misalnya undangan, daftar hadir, notulen', 15),
(35, 'Bukti tindak lanjut atas hasil evaluasi rapat, misal progres perbaikan SOP', 15),
(36, 'Laporan evaluasi pelaksanaan SOP, dapat dibuat seacara periodik sebagai hasil pelaksanaan rapat evaluasi SOP', 15),
(37, 'Dokumen SOP awal dan SOP perbaikan', 15),
(38, 'Aplikasi terkait pengukuran kinerja dan sudah berubah', 16),
(39, 'Aplikasi terkait manajemen SDM dan sudah berjalan', 17),
(40, 'Aplikasi terkait pelayanan publik dan sudah berjalan', 18),
(41, 'Memuat panduan kejelasan prosedur waktu dan biaya serta mekanisme pengaduan', 18),
(42, 'Screen capture website, media sosial, ataupun aplikasi', 18),
(43, 'Bukti pelaksanaan rapat evaluasi penggunaan TI, misalnya undangan, daftar hadir, notulen', 19),
(44, 'Bukti tindak lanjut atas hasil evaluasi rapat tersebut', 19),
(45, 'Kebijakan KIP', 20),
(46, 'Bukti foto / gambar / screenshoot atas pelaksanaan KIP yang telah berjalan', 20),
(47, 'SK/ST/SOP yang menunjukkan penanngung jawab kegiatan dan uraian tugas', 20),
(48, 'Buktu rapat evaluasi pelaksanaan KIP, misalnya undangan, daftar hadir, notulen', 21),
(49, 'Bukti tindak lanjut atas hasil evaluasi rapat tersebut, misal progres perbaikan yang dilakukan, dll', 21),
(50, 'Laporan monitoring dan evaluasi pelaksanaan KIP, dapat dibuat secara periodik', 21),
(51, 'Screenshoot website atas pengumuman layanan informasi tahunan', 21),
(52, 'Dokumen Rencana kebutuhan pegawai yang berbasis pada peta jabatan dan hasil analisis beban kerjanya', 22),
(53, 'Undangan, notula, daftar hadir, dan dokumentasi rapat penentuan kebutuhan pegawai', 22),
(54, 'SUrat usulan kebutuhan pegawai', 22),
(55, 'Bukti rotasi pegawai, dapat berupa SK', 23),
(56, 'Bukti usulan pengajuan pegawai baru', 23),
(57, 'Perka BPS tentang ABK', 23),
(58, 'SK kolektif atas penempatan pegawai hasil rekrutmen', 23),
(59, 'Surat pengantar penempatan pegawai dari BPS provinsi ke BPS Kab/Kota', 23),
(60, 'Surat perintah melaksanakan tugas dari kepala unit kerja', 23),
(61, 'Laporan monitoring dan evaluasi penempatan pegawai (dievaluasi juga peningkatan kinerjanya)', 24),
(62, 'Undangan, daftar hadir, dan notulen pelaksanaan rapat evaluasi', 24),
(63, 'Dokumen monev kinerja pegawai baru terhadap kinerja unit', 24),
(64, 'Dokumen mutasi pegawai (SK)', 25),
(65, 'Dokumen pola dasar untuk mutasi', 25),
(66, 'Undangan, notula, daftar hadir, dan dokumentasi pelaksanaan rapat mutasi internal', 25),
(67, 'Surat mutasi/rotasi internal atau usulannya', 25),
(68, 'Riwayat pendidikan / diklat / pengembangan karir lainnya untuk pegawai yang dimutasi', 25),
(69, 'Dokumen mutasi pegawai (SK)', 26),
(70, 'Dokumen pola dasar untuk mutasi', 26),
(71, 'Daftar pegawai dengan kompetensinya masing-masing', 26),
(72, 'Undangan, notula, daftar hadir, dan dokumentasi pelaksanaan rapat mutasi internal', 26),
(73, 'SK dan surat usulan mutasi internal', 26),
(74, 'Riwayat pendidikan / diklat / bimtek pegawai yang akan atau telah dimutasi', 26),
(75, 'Kertas kerja/laporan yang memuat pertimbangan unit kerja untuk melakukan mutasi internal', 26),
(76, 'Laporan monitoring dan evaluasi mutasi pegawai (dievaluasi juga peningkatan kinerjanya)', 27),
(77, 'Dokumen training need analysis pegawai', 28),
(78, 'Kebijakan pengembangan kompetensi pegawai', 28),
(79, 'Undangan, notula, daftar hadir, dan dokumentasi rapat penyusunan training need analysis pegawai', 28),
(80, 'Dokumen Rencana Pengembangan Kompetensi Pegawai yang berbasis pada hasil pengelolaan kinerja pegawai ', 29),
(81, 'Undangan, notula, daftar hadir, dan dokumentasi penyusunan rencana pengembangan kompetensi pegawai', 29),
(82, 'Laporan mengenai kesenjangan kompetensi yang ditetapkan', 30),
(83, 'Dokumen Kebijakan pengembangan kompetensi pegawai', 31),
(84, 'Undangan diklat / pelatihan yang lain dan usulan pengajuannya', 31),
(85, 'Dokumen kebijakan pengembangan kompetensi pegawai', 32),
(86, 'Undangan diklat / pelatihan yang lain dan usulan pengajuannya (pada tahun yang relevan)', 32),
(87, 'Laporan pelaksanaan kegiatan training yang diselenggarakan oleh unit kerja dan POK terkait', 32),
(88, 'Sertifikat atau bukti keikutsertaan pengembangan kompetensi lainnya oleh pegawai ybs jika tidak menggunakan dana unit kerja', 32),
(89, 'Laporan monitoring dan evaluasi hasil pengembangan kompetensi pegawai (dievaluasi juga peningkatan kinerjanya)', 33),
(90, 'Undangan, daftar hadir, dan notulen pelaksanaan rapat evaluasi', 33),
(91, 'SKP pegawai yang disetujui dan ditandatangani oleh atasan langsungnya', 34),
(92, 'IKI', 34),
(93, 'PK yang disetujui dan ditandatangani oleh atasan', 34),
(94, 'RENSTRA', 34),
(95, 'SKP pegawai secara berjenjang', 35),
(96, 'IKI', 35),
(97, 'PK', 35),
(98, 'RENSTRA', 35),
(99, 'Laporan pengukuran kinerja setiap level per bulan', 36),
(100, 'Laporan pengukuran kinerja setiap level', 37),
(101, 'Dokumen reward pegawai, dapat berupa pengembangan karir, pemberian penghargaan, dll', 37),
(102, 'Undangan, daftar hadir, notulen, dan dokumentasi rapat penentuan pemberian reward pada pegawai', 37),
(103, 'SK pemberian reward pegawai', 37),
(104, 'Peraturan disipin / kode etik, dll (internal)', 38),
(105, 'Laporan pelaksanaan penerapan peraturan diatas', 38),
(106, 'Laporan / dokumentasi pelaksanaan sosialisasi aturan disiplin / kode etik / kode perilaku', 38),
(107, 'Laporan / dokumentasi penerapan dan penegakan hukuman atas pelanggaran aturan disiplin / kode etik / kode perilaku', 38),
(108, 'Jadwal pemutakhiran data informasi kepegawaian', 39),
(109, 'Laporan pemutakhiran data informasi kepegawaian (bulanan) melalui aplikasi SIMPEG', 39),
(110, 'Screenshot pelaksanaan update data secara mandiri oleh masing-masing pegawai melalui aplikasi SIMPEG', 39),
(111, 'Bukti rapat penyusunan perencanaan kegiatan dan anggaran, misalnya undangan, daftar hadir, notulen', 40),
(112, 'Laporan perencanaan kegiatan dan anggaran yang disahkan pimpinan', 40),
(113, 'Bukti rapat penyusunan PK, misalnya undangan, daftar hadir, notulen', 41),
(114, 'Dokumen PK yang disahkan pimpinan', 41),
(115, 'Bukti rapat monitoring / pemantauan pencapaian PK, misalnya undangan, daftar hadir, notulen (bulanan)', 42),
(116, 'Laporan hasil pemantauan pencapaian PK yang disahkan pimpinan (bulanan)', 42),
(117, 'RENSTRA', 43),
(118, 'Rencana kerja tahunan atau rencana kerja jangka pendek (Renja) tahunan', 43),
(119, 'Perjanjian kinerja / penetapan kinerja', 43),
(120, 'Dokumen turunan renja yang mendukung peningkatan pelayanan publik serta mendukung kegiatan anti korupsi', 44),
(121, 'IKU organisasi (pusat)', 45),
(122, 'IKU tambahan yang mendukung peningkatan pelayanan publik serta mendukung kegiatan anti korupsi', 45),
(123, 'IKU', 46),
(124, 'Laporan kinerja instansi pemerintah (LKIP) yang disahkan pimpinan secara tepat waktu dan dipublikasikan di website', 47),
(125, 'Laporan kinerja instansi pemerintah (LKIP) yang memuat informasi kinerja', 48),
(126, 'Dokumen laporan penyelenggaraan bimtek / pelatihan / sosialisasi , dll dalam rangka peningkatan kapasitas SDM yang menangani akuntabilitas kinerja', 49),
(127, 'Data pegawai yang mengelola akuntabilitas kinerja', 50),
(128, 'Bukti kompetensi pegawai tsb. diatas, misal sertifikat, piagam, dll dalam bidang pengelolaan akuntabilitas kinerja', 50),
(129, 'Spanduk / banner / leaflet dll tentang larangan gratifikasi', 51),
(130, 'Dokumen sosialisasi larangan gratifikasi dalam rapat internal maupun eksternal (undangan, notulen, daftar hadir)', 51),
(131, 'SK terkait unit pengendalian gratifikasi (UPG)', 52),
(132, 'Laporan kegiatan dari tim UPG', 52),
(133, 'Dokumen sosialisasi SPIP', 53),
(134, 'SK tim SPIP', 53),
(135, 'Dokumen laporan penyelenggaraan SPIP', 53),
(136, 'Dokumen peta resiko atau matrik identifikasi resiko beserta penilaian resikonya', 54),
(137, 'Dokumen laporan pengendalian yang dilakukan untuk meminimalisir resiko yang telah diidentifikasi', 55),
(138, 'Dokumen sosialisasi SPI, apel pagi / sore (bukti foto dan teks arahan pimpinan terkait SPI)', 56),
(139, 'Dokumen sosialisasi SPI, rapat internal (bukti undangan, daftar hadir, notulen yang memuat internalisasi SPI)', 56),
(140, 'SK petugas pengaduan masyarakat', 57),
(141, 'Capture petugas / ruang / loket / kotak khusus pengaduan', 57),
(142, 'Capture spanduk / banner berisi informasi sarana penyampaian pengaduan', 57),
(143, 'Capture sarana pengaduan melalui Media online (Web, Facebook, Twitter, Instagram, WA)', 57),
(144, 'Capture respon pengaduan masyarakat', 58),
(145, 'Nota dinas penyampaian pengaduan masyarakat kepada bagian terkait', 58),
(146, 'Laporan pengaduan masyarakat dan tindak lanjutinya secara berkala', 58),
(147, 'Nota dinas penyampaian pengaduan masyarakat kepada bagian terkait untuk ditindaklanjuti', 59),
(148, 'Laporan monev atas penanganan pengaduan masyarakat secara bulanan', 59),
(149, 'Dokumen laporan tindak lanjut (tindakan perbaikan pelayanan) atas laporan monitoring dan evaluasi penanganan pengaduan masyarakat', 60),
(150, 'Dokumen dan capture internalisasi whistle blowing system (WBS), rapat(undangan, daftar hadir, notulen, foto)', 61),
(151, 'Dokumen dan capture internalisasi whistle blowing system (WBS), bimtek (laporan, foto)', 61),
(152, 'Dokumen dan capture internalisasi whistle blowing system (WBS), apel pagi / sore (foto, teks arahan pimpinan)', 61),
(153, 'Dokumen dan capture internalisasi whistle blowing system (WBS), dll', 61),
(154, 'SK tim / unit yang menangani WBS ', 62),
(155, 'Kebijakan pimpinan terkait WBS', 62),
(156, 'Capture aplikasi WBS', 62),
(157, 'Laporan pengelolaan WBS oleh unit terkait', 62),
(158, 'Laporan monev atas penerapan WBS secara bulanan', 63),
(159, 'Dokumen laporan tindak lanjut atas hasil evaluasi bulanan diatas', 64),
(160, 'Dokumen identifikasi / pemetaan benturan kepentingan dalam tugas fungsi utama', 65),
(161, 'Perka BPS tentang penanganan benturan kepentingan', 65),
(162, 'Dokumen dan capture internalisasi penanganan benturan kepentingan, rapat (undangan, daftar hadir, notulen, foto)', 66),
(163, 'Dokumen dan capture internalisasi penanganan benturan kepentingan, bimtek (laporan, foto)', 66),
(164, 'Dokumen dan capture internalisasi penanganan benturan kepentingan, apel pagi / sore (foto, teks arahan pimpinan)', 66),
(165, 'Dokumen dan capture internalisasi penanganan benturan kepentingan, dll', 66),
(166, 'SK tim / unit yang menangani penangan benturan kepentingan', 67),
(167, 'Kebijakan pimpinan terkait penanganan benturan kepentingan', 67),
(168, 'Dokumen surat pernyataan bebas dari benturan kepentingan', 67),
(169, 'Laporan monev atas penanganan benturan kepentingan secara berkala', 68),
(170, 'Dokumen laporan tindak lanjut atas hasil evaluasi berkala di atas', 69),
(171, 'Dokumen standar pelayanan', 70),
(172, 'Dokumen maklumat standar pelayanan', 71),
(173, 'Capture maklumat standar pelayanan di tempat pelayanan', 71),
(174, 'SOP pelaksanaan pelayanan', 72),
(175, 'Capture pelaksanaan pelayanan yang ada dan sesuai SOP', 72),
(176, 'Dokumen reviu standar pelayanan dan SOP', 73),
(177, 'Dokumen tindak lanjut atas reviu berupa perbaikan standar pelayanan dan SOP', 73),
(178, 'Dokumen sosialisai / pelatihan pelayanan prima kepada pegawai, rapat (undangan, daftar hadir, notulen)', 74),
(179, 'Dokumen sosialisai / pelatihan pelayanan prima kepada pegawai, sosialisasi / pelatihan / bimtek (laporan dan materi)', 74),
(180, 'Dokumen sosialisai / pelatihan pelayanan prima kepada pegawai, dll', 74),
(181, 'Capture sarana informasi tentang pelayanan yang disediakan', 75),
(182, 'Dokumen sistem reward dan punishment', 76),
(183, 'Dokumen penghargaan atas pelaksanaan pelayanan yang baik dan punishment untuk sebaliknya', 76),
(184, 'Dokumen kompensasi kepada penerima layanan', 76),
(185, 'Capture aplikasi layanan terpadu / terintegrasi (PST)', 77),
(186, 'Capture inovasi pelayanan', 78),
(187, 'Dokumen laporan survei kepuasan masyarakat terhadap pelayanan', 79),
(188, 'Capture media informasi pengumuman hasil survei', 80),
(189, 'Dokumen laporan perbaikan pelayanan sebagai tindak lanjut dari hasil survei kepuasan masyarakat', 81);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komponen`
--

CREATE TABLE `tbl_komponen` (
  `id_komponen` int(11) NOT NULL,
  `nama_komponen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komponen`
--

INSERT INTO `tbl_komponen` (`id_komponen`, `nama_komponen`) VALUES
(1, 'Manajemen Perubahan'),
(2, 'Penataan Tatalaksana'),
(3, 'Penataan Sistem Manajemen SDM'),
(4, 'Penguatan Akuntabilitas'),
(5, 'Penguatan Pengawasan'),
(6, 'Peningkatan Kualitas Pelayanan Publik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_periode`
--

CREATE TABLE `tbl_periode` (
  `id_periode` int(11) NOT NULL,
  `tahun_periode` int(5) NOT NULL,
  `status_periode` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_periode`
--

INSERT INTO `tbl_periode` (`id_periode`, `tahun_periode`, `status_periode`) VALUES
(1, 2019, 0),
(2, 2020, 0),
(3, 2021, 1),
(4, 2022, 0),
(5, 2023, 0),
(6, 2024, 0),
(7, 2025, 0),
(8, 2026, 0),
(9, 2027, 0),
(10, 2028, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sub_k`
--

CREATE TABLE `tbl_sub_k` (
  `id_sub_k` int(11) NOT NULL,
  `nama_sub_k` varchar(255) DEFAULT NULL,
  `id_komponen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sub_k`
--

INSERT INTO `tbl_sub_k` (`id_sub_k`, `nama_sub_k`, `id_komponen`) VALUES
(1, 'Tim Kerja', 1),
(2, 'Dokumen Rencana Pembangunan Zona Integritas', 1),
(3, 'Pemantauan dan Evaluasi Pembangunan WBK/WBBM', 1),
(4, 'Perubahan pola pikir budaya kerja', 1),
(5, 'Prosedural Operasional tetap(SOP) kegiatan utama', 2),
(6, 'E-Office', 2),
(7, 'Keterbukaan Informasi Publik', 2),
(8, 'Perencanaan kebutuhan pegawai sesusai dengan kebutuhan organisasi', 3),
(9, 'Pola Mutasi Internal', 3),
(10, 'Pengembangan pegawai berbasis kompetensi', 3),
(11, 'Penetapan kinerja individu', 3),
(12, 'Penegakan aturan disiplin / kode etik / kode perilaku pegawai', 3),
(13, 'Sistem Informasi Kepegawaian', 3),
(14, 'Keterlibatan pimpinan', 4),
(15, 'Pengelolaan Akuntabilitas Kinerja', 4),
(16, 'Pengendalian Gratifikasi', 5),
(17, 'Penerapan SPIP', 5),
(18, 'Pengaduan Masyarakat', 5),
(19, 'Whistle-Blowing System', 5),
(20, 'Penanganan Benturan Kepentingan', 5),
(21, 'Standar Pelayanan', 6),
(22, 'Budaya Pelayanan Prima', 6),
(23, 'Penilaian kepuasan terhadap pelayanan', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sub_sub_k`
--

CREATE TABLE `tbl_sub_sub_k` (
  `id_sub_sub_k` int(11) NOT NULL,
  `nama_sub_sub_k` varchar(255) NOT NULL,
  `id_sub_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sub_sub_k`
--

INSERT INTO `tbl_sub_sub_k` (`id_sub_sub_k`, `nama_sub_sub_k`, `id_sub_k`) VALUES
(1, 'Unit kerja telah membentuk tim untuk melakukan pembangungan Zona Integritas', 1),
(2, 'Penentuan anggota Tim selain pimpinan dipilih melalui prosedur/mekanisme yang jelas', 1),
(3, 'Dokumen rencana kerja pembangunan Zona Integritas menuju WBK/WBBM', 2),
(4, 'Dalam dokumen pembangunan terdapat target-target prioritas yang relevan dengan tujuan pembangunan WBK/WBBM', 2),
(5, 'Terdapat mekanisme atau media untuk mensosialisasikan pembangunan WBK/WBBM', 2),
(6, 'Seluruh kegiatan pembangunan sudah dilaksanakan sesuai dengan rencana', 3),
(7, 'Terdapat monitoring dan evaluasi terhadap pembangunan Zona Integritas', 3),
(8, 'Hasil Monitoring dan Evaluasi telah ditindaklanjuti', 3),
(9, 'Pimpinan berperan sebagai role model dalam pelaksanaan pembangunan WBK/WBBM', 4),
(10, 'Sudah ditetapkan agen perubahan', 4),
(11, 'Telah dibangun budaya kerja dan pola pikir di lingkungan organisasi', 4),
(12, 'Anggota organisasi terlibat dalam pembangunan Zona Intergritas menuju WBK/WBBM', 4),
(13, 'SOP mengacu pada peta proses bisnis instansi', 5),
(14, 'Prosedur operasional tetap (SOP) telah diterapkan', 5),
(15, 'Prosedur operasional tetap (SOP) telah dievaluasi', 5),
(16, 'Sistem pengukuran kinerja unit sudah menggunakan teknologi informasi', 6),
(17, 'Operasionaliasi Manajemen SDM sudah menggunakan teknologi informasi', 6),
(18, 'Pemberian pelayanan kepada publik sudah menggunakan teknologi informasi', 6),
(19, 'Telah dilakukan monitoring dan evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik', 6),
(20, 'Kebijakan tentang keterbukaan informasi publik telah diterapkan', 7),
(21, 'Melakukan monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik', 7),
(22, 'Kebutuhan pegawai yang disusun oleh unit kerja mengacu kepada peta jabatan dan hasil analisis beban kerja untuk masing-masing jabatan', 8),
(23, 'Penempatan pegawai hasil rekrutmen murni mengacu kepada kebutuhan pegawai yang telah disusun per jabatan', 8),
(24, 'Telah dilakukan monitoring dan evaluasi terhadap penempatan pegawai rekrutmen untuk memenuhi kebutuhan jabatan dalam organisasi telah memberikan perbaikan terhadap kinerja unit kerja', 8),
(25, 'Dalam melakukan pengembangan karier pegawai, telah dilakukan mutasi pegawai antar jabatan', 9),
(26, 'Dalam melakukan mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan', 9),
(27, 'Telah dilakukan monitoring dan evaluasi terhadap kegiatan mutasi yang dilakukan dalam kaitannya dengan perbaikan kinerja', 9),
(28, 'Unit Kerja melakukan Training Need Analysis Untuk pengembangan kompetensi', 10),
(29, 'Dalam menyusun rencana pengembangan kompetensi pegawai, mempertimbangkan hasil pengelolaan kinerja pegawai', 10),
(30, 'Presentase kesenjangan kompetensi pegawai yang ada dengan standar kompetensi yang ditetapkan untuk masing-masing jabatan', 10),
(31, 'Pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya', 10),
(32, 'Dalam pelaksanaan pengembangan kompetensi, unit kerja melakukan upaya pengembangan kompetensi kepada pegawai (dapat melalui pengikutsertaan pada lembaga pelatihan,in-house training, atau melalui coaching atau mentoring,dll', 10),
(33, 'Telah dilakukan monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja', 10),
(34, 'Terdapat penetapan kinerja individu yang terkait dengan kinerja organisasi', 11),
(35, 'Ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level diatasnya', 11),
(36, 'Pengukuran kinerja individu dilakukan secara periodik', 11),
(37, 'Hasil penilaian kerja individu telah dijadikan dasar untuk pemberian reward (pengembangan karir individu, penghargaan dll)', 11),
(38, 'Aturan disiplin / kode etik / kode perilaku telah dilaksanakan / diimplementasikan', 12),
(39, 'Data informasi kepegawaian unit kerja telah dimutakhirkan secara berkala', 13),
(40, 'Pimpinan terlibat secara langsung pada saat penyusunan Perencanaan', 14),
(41, 'Pimpinan terlibat secara langsung pada saat penyusunan Penetapan Kinerja', 14),
(42, 'Pimpinan memantau pencapaian kinerja secara berkala', 14),
(43, 'Dokumen perencanaan sudah ada', 15),
(44, 'Dokumen perencanaan telah berorientasi hasil', 15),
(45, 'Terdapat Indikator Kinerja Utama (IKU)', 15),
(46, 'Indikator kinerja telah SMART', 15),
(47, 'Laporan kinerja telah disusun tepat waktu', 15),
(48, 'Pelaporan kinerja telah memberikan informasi tentang kinerja', 15),
(49, 'Terdapat upaya peningkatan kapasitas SDM yang menangani akuntabilitas kinerja', 15),
(50, 'Pengelolaan akuntabilitas kinerja dilaksanakan oleh SDM yang kompeten', 15),
(51, 'Telah dilakukan public campaign tentang pengendalian gratifikasi', 16),
(52, 'Pengendalian gratifikasi telah diimplementasikan', 16),
(53, 'Telah dibangun lingkungan pengendalian', 17),
(54, 'Telah dilakukan penilaian risiko atas pelaksanaan kebijakan', 17),
(55, 'Telah dilakukan kegiatan pengendalian untuk meminimalisir risiko yang telah diidentifikasi', 17),
(56, 'SPI telah diinformasikan dan dikomunikasikan kepada seluruh pihak terkait', 17),
(57, 'Kebijakan Pengaduan masyarakat telah diimplementasikan', 18),
(58, 'Hasil penanganan pengaduan masyarakat telah ditindaklanjuti', 18),
(59, 'Telah dilakukan monitoring dan evaluasi atas penanganan pengaduan masyarakat', 18),
(60, 'Hasil evaluasi atas penanganan pengaduan masyarakat telah ditindaklanjuti', 18),
(61, 'Whistle Blowing System sudah di internalisasi', 19),
(62, 'Whistle Blowing System telah diterapkan', 19),
(63, 'Telah dilakukan evaluasi atas penerapan Whistle Blowing System', 19),
(64, 'Hasil evaluasi atas penerapan Whistle Blowing System telah ditindaklanjuti', 19),
(65, 'Telah terdapat identifikasi/pemetaan benturan kepentingan dalam tugas fungsi utama', 20),
(66, 'Penanganan Benturan Kepentingan telah disosialisasikan/internalisasi', 20),
(67, 'Penanganan Benturan Kepentingan telah diimplementasikan', 20),
(68, 'Telah dilakukan evaluasi atas Penanganan Benturan Kepentingan', 20),
(69, 'Hasil evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti', 20),
(70, 'Terdapat kebijakan standar pelayanan', 21),
(71, 'Standar pelayanan tealh dimaklumatkan', 21),
(72, 'Terdapat SOP bagi pelaksanaan standar pelayanan', 21),
(73, 'Dilakukan reviu dan perbaikan atas standar pelayanan dan SOP', 21),
(74, 'Telah dilakukan sosialisasi/pelatihan dalam upaya penerapan Budaya Pelayanan Prima', 22),
(75, 'Informasi tentang pelayanan mudah diakses melalui berbagai media', 22),
(76, 'Tekah terdapat sistem punishment (sanksi)/reward bagi pelaksana laayanan serta pemberian kompensasi kepada penerima layanan bila layanan tidak sesuai standar', 22),
(77, 'Telah terdapat sarana layanan terpadu/terintegrasi', 22),
(78, 'Terdapat inovasi pelayanan', 22),
(79, 'Dilakukan survey kepuasan masyarakat terhadap pelayanan', 23),
(80, 'Hasil Survey kepuasan masyarakat dapat diakses secara terbuka', 23),
(81, 'Dilakukan tindak lanjut atas hasil survey kepuasan masyarakat', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT 0,
  `foto` varchar(255) DEFAULT 'avatar5.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `nama_user`, `password`, `level`, `foto`) VALUES
(1, 'admin@gmail.com', 'adminn', '12345678', 1, 'avatar5.png'),
(2, 'user1@gmail.com', 'user1', '12345678', 0, '1613908283_d471ecbbcd41e323fd77.jpg'),
(3, 'user2@gmail.com', 'user2', '12345678', 0, '1614171832_31c2eaa40046abe286da.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_komponen` (`id_komponen`),
  ADD KEY `id_sub_k` (`id_sub_k`),
  ADD KEY `id_sub_sub_k` (`id_sub_sub_k`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indeks untuk tabel `tbl_kelengkapan`
--
ALTER TABLE `tbl_kelengkapan`
  ADD PRIMARY KEY (`id_kelengkapan`),
  ADD KEY `tbl_kelengkapan_ibfk_1` (`id_sub_sub_k`);

--
-- Indeks untuk tabel `tbl_komponen`
--
ALTER TABLE `tbl_komponen`
  ADD PRIMARY KEY (`id_komponen`);

--
-- Indeks untuk tabel `tbl_periode`
--
ALTER TABLE `tbl_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indeks untuk tabel `tbl_sub_k`
--
ALTER TABLE `tbl_sub_k`
  ADD PRIMARY KEY (`id_sub_k`),
  ADD KEY `tbl_sub_k_ibfk_1` (`id_komponen`);

--
-- Indeks untuk tabel `tbl_sub_sub_k`
--
ALTER TABLE `tbl_sub_sub_k`
  ADD PRIMARY KEY (`id_sub_sub_k`),
  ADD KEY `tbl_sub_sub_k_ibfk_1` (`id_sub_k`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelengkapan`
--
ALTER TABLE `tbl_kelengkapan`
  MODIFY `id_kelengkapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT untuk tabel `tbl_komponen`
--
ALTER TABLE `tbl_komponen`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_periode`
--
ALTER TABLE `tbl_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_sub_k`
--
ALTER TABLE `tbl_sub_k`
  MODIFY `id_sub_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_sub_sub_k`
--
ALTER TABLE `tbl_sub_sub_k`
  MODIFY `id_sub_sub_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD CONSTRAINT `tbl_dokumen_ibfk_2` FOREIGN KEY (`id_komponen`) REFERENCES `tbl_komponen` (`id_komponen`),
  ADD CONSTRAINT `tbl_dokumen_ibfk_3` FOREIGN KEY (`id_sub_k`) REFERENCES `tbl_sub_k` (`id_sub_k`),
  ADD CONSTRAINT `tbl_dokumen_ibfk_4` FOREIGN KEY (`id_sub_sub_k`) REFERENCES `tbl_sub_sub_k` (`id_sub_sub_k`),
  ADD CONSTRAINT `tbl_dokumen_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_dokumen_ibfk_6` FOREIGN KEY (`id_periode`) REFERENCES `tbl_periode` (`id_periode`);

--
-- Ketidakleluasaan untuk tabel `tbl_kelengkapan`
--
ALTER TABLE `tbl_kelengkapan`
  ADD CONSTRAINT `tbl_kelengkapan_ibfk_1` FOREIGN KEY (`id_sub_sub_k`) REFERENCES `tbl_sub_sub_k` (`id_sub_sub_k`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_sub_k`
--
ALTER TABLE `tbl_sub_k`
  ADD CONSTRAINT `tbl_sub_k_ibfk_1` FOREIGN KEY (`id_komponen`) REFERENCES `tbl_komponen` (`id_komponen`);

--
-- Ketidakleluasaan untuk tabel `tbl_sub_sub_k`
--
ALTER TABLE `tbl_sub_sub_k`
  ADD CONSTRAINT `tbl_sub_sub_k_ibfk_1` FOREIGN KEY (`id_sub_k`) REFERENCES `tbl_sub_k` (`id_sub_k`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
