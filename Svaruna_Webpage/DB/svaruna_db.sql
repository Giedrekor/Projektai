-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2018 at 05:52 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svaruna_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(50) UNSIGNED NOT NULL,
  `misija` text COLLATE utf8_unicode_ci NOT NULL,
  `vizija` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `misija`, `vizija`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus fuga cum consequuntur porro mollitia totam necessitatibus, iste reprehenderit dolores voluptatibus unde. Ratione totam odio dicta eos dolores, molestias placeat hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet nobis. Dolore, a vel? Odit ex distinctio, nulla fugiat dolore libero ad tempora dolorem doloribus inventore officiis, explicabo veritatis ipsa.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam praesentium ipsum, ex doloremque quibusdam, laudantium dolorum voluptatem hic eveniet quo quam autem ad ut aut nobis tempore quasi officia! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, distinctio libero enim repellendus suscipit consequuntur deserunt obcaecati corrupti alias minus temporibus iure assumenda perferendis sed tenetur hic, facere provident quis.'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam repellendus dicta adipisci, numquam id in. Nisi obcaecati distinctio quo soluta ipsum, excepturi ex, et pariatur fuga, natus doloribus corporis ut. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet exercitationem temporibus aut? Voluptatem ullam facere voluptas aliquid. Voluptatibus asperiores debitis illo impedit iure iste. Optio modi consequuntur maxime hic eaque.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quas dolor magnam inventore, fugiat tenetur accusantium eius sed quo voluptas ipsam quod sit expedita corrupti, in voluptatem nihil enim eveniet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quisquam blanditiis itaque aspernatur. Eius dolorum qui in, dolorem quam perferendis incidunt provident repellat numquam veniam culpa eos magnam vel expedita! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsam possimus totam earum eum, voluptas dolorem ipsum perspiciatis est perferendis minima tempore quae sequi aut illo facere incidunt magnam non.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(20) NOT NULL,
  `vardas` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `slaptazodis` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `vardas`, `slaptazodis`, `TimeStamp`) VALUES
(1, 'direktorius', 'direktorius', '2018-10-10 13:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `paslaugos`
--

CREATE TABLE `paslaugos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Foto` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `img_alt` varchar(60) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Paslaugos pavadinimas` varchar(60) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Paslaugos aprašymas` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Rezervacija` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paslaugos`
--

INSERT INTO `paslaugos` (`id`, `Foto`, `img_alt`, `Paslaugos pavadinimas`, `Paslaugos aprašymas`, `Rezervacija`) VALUES
(1, 'home_clean1.jpg', 'Namų valymas.', 'Namų valymas', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, laboriosam aliquid provident et magni totam omnis fuga. Adipisci numquam alias doloribus necessitatibus magnam. Fuga asperiores vero adipisci?', 'Rezervuokite laiką!'),
(2, 'office-cleaning.jpg', 'Biurų valymas.', 'Biurų valymas', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quam, eveniet minus numquam porro minima nulla voluptate corporis, et excepturi dolorum necessitatibus libero impedit in! Dolorem fuga nemo aperiam facili!', 'Rezervuokite laiką!'),
(3, 'auto_interior.jpg', 'Automobilių valymas.', 'Automobilių valymas', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quam, eveniet minus numquam porro minima nulla voluptate corporis, et excepturi dolorum necessitatibus libero impedit in! Dolorem fuga nemo aperiam eaque!', 'Rezervuokite laiką!');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `id` int(10) NOT NULL,
  `Paslauga` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL,
  `Vardas` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `El. paštas` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono nr.` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `Adresas` text COLLATE utf8_unicode_ci NOT NULL,
  `Komentarai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`id`, `Paslauga`, `Data`, `Vardas`, `El. paštas`, `Telefono nr.`, `Adresas`, `Komentarai`) VALUES
(1, 'Namų valymas', '2018-11-01', 'Giedrė', 'giedre@mail.lt', '861234567', 'Gatvė g. 1, Kaunas', 'Jokių komentarų.'),
(2, 'Namų valymas', '2018-12-02', 'Vardas', 'vardas@gmail.com', '862222222', 'Adreso g. 115, Miestas', 'Puikūs komentarai'),
(3, 'Namų valymas', '2018-12-02', 'Vardas', 'vardas@gmail.com', '862222222', 'Adreso g. 115, Miestas', 'Puikūs komentarai'),
(4, 'Automobilių valymas', '2018-12-10', 'Vardas', 'vardas@gmail.com', '863333333', 'Adreso g. 88, Miestas', 'Bus komentarai'),
(5, 'Biurų valymas', '2018-12-15', 'Vardas', 'vardas@gmail.com', '863333333', 'Adreso g. 200, Miestas', 'Bus komentarai'),
(9, 'Biurų valymas', '2018-10-18', 'Ona', 'ona@ona.lt', '865555555', 'Onos g. 50, Kaunas', 'Komentarai'),
(13, 'Namų valymas', '2018-10-19', 'Vardas', 'hbjgh@gail.com', '860000000', 'Petrausko g. 5552, Kaunas', 'kommmmm'),
(14, 'Namų valymas', '2018-10-19', 'Vardas', 'hbjgh@gail.com', '860000000', 'Petrausko g. 5552, Kaunas', 'kommmmm'),
(15, 'Namų valymas', '2018-10-19', 'Vardas', 'hbjgh@gail.com', '860000000', 'Petrausko g. 5552, Kaunas', 'kommmmm'),
(17, 'Namų valymas', '2018-11-01', 'giedre', 'giedre@giedre.lt', '552536363', 'vbnmbnjkml', 'hlkcvbjkm,;'),
(18, 'Biurų valymas', '2018-10-17', 'Ona', 'ona@ona.lt', '860000000', 'Gatvė g. 1, Miestas', 'Čia komentarai!');

-- --------------------------------------------------------

--
-- Table structure for table `rekvizitai`
--

CREATE TABLE `rekvizitai` (
  `id` int(99) UNSIGNED NOT NULL,
  `pavadinimas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresas` text COLLATE utf8_unicode_ci NOT NULL,
  `darbo_laikas` text COLLATE utf8_unicode_ci NOT NULL,
  `telefonas` text COLLATE utf8_unicode_ci NOT NULL,
  `el.pastas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rekvizitai`
--

INSERT INTO `rekvizitai` (`id`, `pavadinimas`, `adresas`, `darbo_laikas`, `telefonas`, `el.pastas`) VALUES
(1, '„Švarūna”', 'Pramonės g. 2D\r\n72328 Tauragė, Lietuva', 'I - V 8.00 - 17.00\r\nVI -VII nedirbame', '+370 0000000', 'info@svaruna.lt'),
(2, '\"PAVADINIMAS\"', 'Adreso g. 5, Kaunas', 'I-V 8:00 - 17:00', '860000000', 'info@svaruna.lt'),
(3, '\"PAVADINIMAS\"', 'Adresų g. 15, Kaunas', 'I-V 8:00 - 17:00', '860000000', 'info@svaruna.lt'),
(4, '\"PAVADINIMAS\"', 'Adresų g. 15, Kaunas', 'I-V 8:00 - 17:00', '860000000', 'info@svaruna.lt'),
(5, '\"PAVADINIMAS\"', 'Gatvė g. 1, Miestas', 'I-V 8:00 - 17:00', '860000000', 'info@svaruna.lt'),
(6, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `paslaugos`
--
ALTER TABLE `paslaugos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekvizitai`
--
ALTER TABLE `rekvizitai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paslaugos`
--
ALTER TABLE `paslaugos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `rekvizitai`
--
ALTER TABLE `rekvizitai`
  MODIFY `id` int(99) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
