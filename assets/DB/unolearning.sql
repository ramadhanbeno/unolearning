-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 01:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unolearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional`
--

CREATE TABLE `additional` (
  `id_add` int(2) NOT NULL,
  `nama_add` varchar(255) NOT NULL,
  `desc_add` longtext NOT NULL,
  `image_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional`
--

INSERT INTO `additional` (`id_add`, `nama_add`, `desc_add`, `image_add`) VALUES
(1, 'LED', 'Light Emitting Diode atau sering disingkat dengan LED adalah komponen elektronika yang dapat memancarkan  cahaya monokromatik ketika diberikan tegangan maju. LED merupakan keluarga Dioda yang terbuat dari bahan semikonduktor. Warna-warna Cahaya yang dipancarkan oleh LED tergantung pada jenis bahan semikonduktor yang dipergunakannya. LED juga dapat memancarkan sinar inframerah yang tidak tampak oleh mata seperti yang sering kita jumpai pada Remote Control TV ataupun Remote Control perangkat elektronik lainnya.', 'LED1.jpg'),
(2, 'Push Button', 'Push button switch merupakan sebuah saklar dimana komponen ini berfungsi untuk mengubungkan atau memutus arus listrik. Saklar jenis ini bersifat tidak mengunci, namun akan kembali lagi ke posisi semula setelah ditekan. Untuk implementasi dari push button ini antara lain untuk tombol reset, select, input nilai, menyalakan lampu dan masih banyak lainnya.', 'pushbutton.jpg'),
(3, 'Buzzer', 'Buzzer merupakan sebuah komponen elektronika yang masuk dalam keluarga transduser, yang dimana dapat mengubah sinyal listrik menjadi getaran suara. ... Dikarenakan tipe ini memiliki kelebihan seperti harganya yang relatif murah, mudah diaplikasikan ke dalam rangkaian elektronika', 'buzzer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component`
--

CREATE TABLE `component` (
  `no_component` int(2) NOT NULL,
  `nama_component` varchar(255) NOT NULL,
  `desc_component` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component`
--

INSERT INTO `component` (`no_component`, `nama_component`, `desc_component`) VALUES
(1, 'Arduino Reset', 'menyegarkan kembali project yang kita buat jika terjadi kesalahan atau program tidak berjalan'),
(2, 'Analog Refrence', 'mengkonfigurasi tegangan yag digunakan untuk masukan analog, seperti nilai yang digunakan sebagai rentang masukan tertinggi'),
(3, 'Digital I/O', 'Secara umum pin pada Arduino dapat dikonfigurasi ke dalam dua mode, yaitu mode input dan output. Mode input berarti mengeset pin agar dapat digunakan untuk menerima masukan sinyal. Mode output berarti mengeset pin agar dapat mengirimkan sinyal.'),
(4, 'Power Usb', 'digunakan untuk memberikan catu daya ke Papan Arduino menggunakan kabel USB dari komputer.'),
(5, 'ICSP Headers pins', 'meng-upload kode baru tanpa menggunakan programmer hardware eksternal.'),
(6, 'LEDs', 'LED ini harus menyala jika menghubungkan Arduino ke sumber daya. Jika LED tidak menyala, maka terdapat sesuatu yang salah dengan sambungannya.'),
(7, 'TX & RX LEDs', 'bertanggung jawab untuk komunikasi serial. Kedua, TX dan RX LED. TX LED akan berkedip dengan kecepatan yang berbeda saat mengirim data serial. Kecepatan kedip tergantung pada baud rate yang digunakan oleh papan arduino. RX berkedip selama menerima proses.'),
(8, 'USB interface chip', 'sarana komunikasi serial antara Arduino UNO dengan komputer yang mana dilakukan melalui port USB.'),
(9, 'Voltage Regulator', 'mengendalikan atau menurunkan tegangan yang diberikan ke papan Arduino dan menstabilkan tegangan DC yang digunakan oleh prosesor dan elemen-elemen lain.'),
(10, 'Crystal oscillator', 'menghasilkan detak-detak yang dikirim kepada mikrokontroler agar melakukan sebuah operasi untuk setiap detak-nya. Kristal ini dipilih yang berdetak 16 juta kali per detik (16MHz).'),
(11, 'Main microcontroller', 'Setiap papan Arduino memiliki Mikrokontroler. Kita dapat menganggapnya sebagai otak dari papan Arduino. IC (integrated circuit) utama pada Arduino sedikit berbeda antara papan arduino yang satu dengan yang lainnya. Mikrokontroler yang sering digunakan adalah ATMEL. Kita harus mengetahui IC apa yang dimiliki oleh suatu papan Arduino sebelum memulai memprogram arduino melalui Arduino IDE. Informasi tentang IC terdapat pada bagian atas IC. Untuk mengetahui kontruksi detai dari suatu IC, kita dapat melihat lembar data dari IC yang bersangkutan.'),
(12, 'Barrel Jack', 'Papan Arduino dapat juga diberikan colokan catu daya secara langsung dari sumber daya AC dengan menghubungkannya ke Barrel Jack yang tersedia. Tegangan maksimal yang dapat diberikan kepada Arduino maksimal 12volt dengan range arus maksimal 2A (Agar regulator tidak panas).'),
(13, 'Kapasitor', ' komponen elektronika yang berfungsi untuk menyimpan arus listrik.'),
(14, 'IOREF', 'perisai untuk beradaptasi dengan tegangan yang tersedia pada papan.'),
(15, 'Supply 3.3 output volt', 'Menyuplai tegangan yang keluar senilai 3.3V'),
(16, 'Supply 5 volt output', 'Menyuplai tegangan yang keluar senilai 3.3V'),
(17, 'Ground', 'Sebagai beda potensial sama dengan 0'),
(18, 'Voltage input', 'Sebagai tegangan masukan '),
(19, 'Analog pins', 'Papan Arduino Uno memiliki enam pin input analog A0 sampai A5. Pin-pin ini dapat membaca tegangan dan sinyal yang dihasilkan oleh sensor analog seperti sensor kelembaban atau temperatur dan mengubahnya menjadi nilai digital yang dapat dibaca oleh mikroprosesor. Program dapat membaca nilai sebuah pin input antara 0 – 1023, dimana hal itu mewakili nilai tegangan 0 – 5V.');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `no_exercise` int(2) NOT NULL,
  `soal` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional`
--
ALTER TABLE `additional`
  ADD PRIMARY KEY (`id_add`);

--
-- Indexes for table `component`
--
ALTER TABLE `component`
  ADD PRIMARY KEY (`no_component`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`no_exercise`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional`
--
ALTER TABLE `additional`
  MODIFY `id_add` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `component`
--
ALTER TABLE `component`
  MODIFY `no_component` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `no_exercise` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
