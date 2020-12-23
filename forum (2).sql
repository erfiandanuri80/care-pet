-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2020 pada 08.50
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(255) DEFAULT NULL,
  `email_admin` varchar(255) DEFAULT NULL,
  `password_admin` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `email_admin`, `password_admin`) VALUES
(1, 'adminsatu', 'admin1@gmail.com', '8c4b4ae9a38a7984da5d3d03865f9ea9262d2914ca36e97d09e0fb8100bca7f1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_question` int(11) DEFAULT NULL,
  `content_answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answer`
--

INSERT INTO `answer` (`id_answer`, `id_user`, `id_question`, `content_answer`) VALUES
(1, 2, 1, 'alhamdulillah'),
(2, 2, 2, 'Mencegah rabies :\r\n- Menghindari binatang yang bisa menularkan rabies adalah cara terbaik untuk mencegah rabies \r\n- Binatang peliharaan di rumah disarankan untuk diberikan vaksin rabies sehingga tidak diinfeksi oleh virus lyssa \r\n- Apabila digigit atau dicakar binatang yang dicurigai menderita rabies, segera melapor ke puskesmas atau rumah sakit terdekat untuk mendapatkan virus anti rabies (VAR) \r\n- Segeralah melapor ke pusat penanggulangan rabies apabila mengetahui ada binatang yang dicurigai menderita rabies \r\n- Dianjurkan tidak membiarkan hewan peliharaan berkeliaran di luar rumah sembarangan\r\n'),
(3, 2, 3, '1.Makanan Rendah Kalori \r\n\r\nObesitas pada kucing bisa terjadi karena banyak faktor, salah satunya porsi makan yang berlebih. Maka dari itu, cobalah untuk memberikan makanan yang rendah kalori untuk membantu mengontrol berat badan kucing. Namun, pastikan untuk tetap memperhatikan asupan nutrisi pada kucing. Biar tetap sehat, pastikan memberi makan kucing dengan makanan yang kaya nutrisi tapi rendah kalori. \r\n\r\n\r\n2.Aktif Bergerak \r\n\r\nSelain mengontrol makanan, menjaga berat badan kucing peliharaan juga bisa dilakukan dengan mengajaknya aktif bergerak. Kamu bisa mencoba untuk mengajak peliharaan berjalan mengelilingi rumah atau sekadar bermain bersama agar tubuhnya lebih banyak bergerak. \r\n\r\n\r\n3.Rutin Menimbang \r\n\r\nRutin menimbang berat badan kucing bisa membantu mengatasi masalah obesitas. Sebab, hal ini bisa membantu menentukan metode diet, asupan makanan, serta aktivitas fisik yang perlu diterapkan untuk mengontrol berat badan kucing peliharaan.'),
(4, 2, 4, 'anjing enggan berolahraga atau melakukan kegiatan yang berlebihan. anjing akan lebih sering tidur dan diam saja. '),
(5, 2, 5, '- Pembengkakan kelenjar getah bening\r\n- Penurunan berat badan\r\n- Muntah dan diare kronis\r\n- Pendarahan tanpa sebab\r\n- Batuk\r\n- Pincang\r\n- Kencing berdarah\r\n- Bau mulut\r\n- Pembesaran benjolan'),
(6, 2, 6, 'Infeksi jamur dapat diatasi dengan beberapa cara, seperti penggunaan sampo anti jamur untuk kucing. Selain penggunaan sampo, penggunaan krim atau salep anti jamur juga bisa digunakan untuk mengatasi gangguan kesehatan ini pada kucing. Gunakan sampo anti jamur maupun krim dan salep yang disarankan langsung oleh dokter hewan agar hewan dapat pulih.'),
(7, 2, 7, NULL),
(8, 2, 8, NULL),
(9, 2, 9, NULL),
(10, 2, 10, NULL),
(11, 4, 11, 'bunuh saja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_topic` int(11) DEFAULT NULL,
  `content_question` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `question`
--

INSERT INTO `question` (`id_question`, `id_user`, `id_topic`, `content_question`) VALUES
(1, 1, 1, 'Dok.. bagaimana memastikan kondisi hewan yang terkena rabies ?'),
(2, 3, 1, 'Dok mau bertanya bagaimana cara mencegah rabies ?\r\n'),
(3, 1, 2, 'Dok bagaimana cara menangani anjing yang mengalami obesitas ?\r\n'),
(4, 3, 3, 'Dok bagaimana ciri anjing mengalami obesitas?'),
(5, 1, 4, 'Dokter mau bertanya apa tanda-tanda seekor kucing terkena kanker?'),
(6, 3, 5, 'Bagaimana cara menyembuhkan anjing dan kucing yang terkena jamur dok?'),
(7, 1, 6, 'Dok anjing saya pupnya itu cairan dan berwarna merah ?'),
(8, 3, 7, 'Dok anjing saya kehilangan nafsu makan , demam dan pincang. apa itu tanda-tanda penyakit lyme dan bagaimana cara menyembuhkannya?'),
(9, 1, 8, 'Apa saja yang biasa dialami oleh anjing yang mengalami penyakit canine distemper ?'),
(10, 3, 9, 'apakan anjing dan kucing dapat terkena coronavirus dok ?\r\n'),
(11, 1, 10, 'Gejala kucing yang terkena hepatitis  ?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `name_status`) VALUES
(1, 'client'),
(2, 'expert');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topic`
--

CREATE TABLE `topic` (
  `id_topic` int(11) NOT NULL,
  `name_topic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `topic`
--

INSERT INTO `topic` (`id_topic`, `name_topic`) VALUES
(1, 'Rabies'),
(2, 'Gangguan Pernafasan'),
(3, 'Obesitas'),
(4, 'Kanker'),
(5, 'Jamur'),
(6, 'Gangguan Pencernaan'),
(7, 'Lyme'),
(8, 'Canine Distemper'),
(9, 'Coronavirus'),
(10, 'Hepatitis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `name_user` varchar(255) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `password_user` varchar(64) DEFAULT NULL,
  `phone_user` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `id_status`, `name_user`, `email_user`, `password_user`, `phone_user`) VALUES
(1, 1, 'Michelle Tuchell', 'michelletu88@gmail.com', '4e1d1591166fc05c19596c423d3cf07b6b7d2448b2c855a11047cdb9e3c0d7b1', '083857787776'),
(2, 2, 'Duscha Pavlyuchenko, Ph.D', 'pavlyuchenko10@gmail.com', '6dd78b1f3595ecd5d2ec48e1ed758b8d05964de88d7e037093216ddbb42a795c', '089877772828'),
(3, 1, 'Alex Smith', 'alexsmith256@gmail.com', '293a76eb3adb2730f37d17c30b652e115846648a8d2d82763fd88d231895d5cf', '085762312231'),
(4, 2, 'James McConvile, BVSc., M.Vet', 'jamesconvile99@gmail.com', '324d1efc682360eb9c0d2ebe9e5f054f394862d877578bb78d551d0fc4a17109', '081234567728');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `fk_question_have_answer` (`id_question`),
  ADD KEY `fk_user_can_make_answer` (`id_user`);

--
-- Indeks untuk tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `fk_question_have_topic` (`id_topic`),
  ADD KEY `fk_user_can_make_question` (`id_user`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_have_status` (`id_status`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_question_have_answer` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`),
  ADD CONSTRAINT `fk_user_can_make_answer` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_question_have_topic` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id_topic`),
  ADD CONSTRAINT `fk_user_can_make_question` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_have_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
