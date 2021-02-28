-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2021 pada 10.57
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
  `status` int(1) NOT NULL DEFAULT 0,
  `id_periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_dokumen`, `deskripsi`, `nama_dokumen`, `ukuran_dokumen`, `tgl_upload`, `id_user`, `id_komponen`, `id_sub_k`, `id_sub_sub_k`, `status`, `id_periode`) VALUES
(1, 'SK', '1612873027_be7bb86189e124388b4a.pdf', 12528, '2021-02-09', 1, 2, 6, 16, 1, 1),
(7, 'SKOP', '1613448296_4b092f06ff2896ad5ac8.pdf', 166717, '2021-02-15', 1, 4, 15, 45, 0, 1),
(9, 'AAAAAAAA', '1613697993_53bb591657b7d9e6014a.pdf', 12528, '2021-02-18', 1, 2, 7, 20, 1, 1),
(10, 'ABB', '1613698055_582c732f51f4ee0efd01.pdf', 12528, '2021-02-18', 1, 2, 5, 13, 1, 1),
(13, 'AAA', 'Proposal Rencana Kerja_Rifqi Adiyatma_1817051055.pdf-20210218', 12528, '2021-02-18', 1, 6, 22, 78, 0, 1),
(15, 'DSDSDS', '_Proposal Rencana Kerja_Rifqi Adiyatma_1817051055.pdf1', 12528, '2021-02-18', 1, 4, 14, 40, 0, 1),
(16, 'SDDSDS', '[0218d3]Proposal Rencana Kerja_Rifqi Adiyatma_1817051055.pdf', 12528, '2021-02-18', 1, 5, 19, 62, 1, 1),
(17, 'DDSDS', '[BPS-0218bo] 1817051055_RifqiAdiyatma_NilaiPancasila.pdf', 131153, '2021-02-18', 1, 4, 15, 45, 1, 1),
(19, 'SDDSDSDSDSSS', '[BPS-0219Kk] Manajemen Perubahan.docx', 14155, '2021-02-19', 1, 5, 17, 53, 0, 1),
(20, 'DSDDs', '[BPS-02201V] jadwal.docx', 11995, '2021-02-20', 1, 2, 5, 13, 1, 1),
(24, 'KAKAAKAKAK', '[BPS-0224yo] Proposal Rencana Kerja_Rifqi Adiyatma_1817051055.pdf', 12528, '2021-02-24', 1, 5, 17, 55, 0, 1),
(26, 'DSDSD SD SDSDS', '[BPS-02259b] BPS  Dokumen.pdf', 19300, '2022-02-25', 1, 1, 4, 12, 0, 2),
(28, 'DSDCSCXX', '[BPS-0228Df] Proposal Rencana Kerja_Rifqi Adiyatma_1817051055.pdf', 12528, '2021-02-28', 2, 1, 3, 6, 0, 1),
(30, 'ZXZXZXS', '[BPS-0228Oc] Proposal Rencana Kerja_Rifqi Adiyatma_1817051055.pdf', 12528, '2021-02-28', 1, 3, 12, 38, 0, 1);

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
(1, 2021, 1),
(2, 2022, 0),
(3, 2023, 0),
(4, 2024, 0);

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
  ADD PRIMARY KEY (`id_dokumen`);

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
  ADD PRIMARY KEY (`id_sub_k`);

--
-- Indeks untuk tabel `tbl_sub_sub_k`
--
ALTER TABLE `tbl_sub_sub_k`
  ADD PRIMARY KEY (`id_sub_sub_k`);

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
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_komponen`
--
ALTER TABLE `tbl_komponen`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_periode`
--
ALTER TABLE `tbl_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_sub_k`
--
ALTER TABLE `tbl_sub_k`
  MODIFY `id_sub_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_sub_sub_k`
--
ALTER TABLE `tbl_sub_sub_k`
  MODIFY `id_sub_sub_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
