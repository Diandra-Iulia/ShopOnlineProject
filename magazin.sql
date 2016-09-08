-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Sep 2016 la 11:18
-- Versiune server: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categorie`
--

CREATE TABLE `categorie` (
  `id` int(250) NOT NULL,
  `nume` varchar(250) COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Salvarea datelor din tabel `categorie`
--

INSERT INTO `categorie` (`id`, `nume`) VALUES
(1, 'Entryway'),
(2, 'Living Room'),
(3, 'Home office'),
(4, 'Bedroom'),
(5, 'Kitchen'),
(6, 'Accessories');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `cos`
--

CREATE TABLE `cos` (
  `id` int(250) NOT NULL,
  `idutilizator` int(250) NOT NULL,
  `idprodus` int(250) NOT NULL,
  `finalizat` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Salvarea datelor din tabel `cos`
--

INSERT INTO `cos` (`id`, `idutilizator`, `idprodus`, `finalizat`) VALUES
(4, 1, 27, 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `produs`
--

CREATE TABLE `produs` (
  `id` int(250) NOT NULL,
  `nume` varchar(250) COLLATE utf8_romanian_ci NOT NULL,
  `descriere` varchar(250) COLLATE utf8_romanian_ci NOT NULL,
  `cantitate` int(250) NOT NULL,
  `pret` int(250) NOT NULL,
  `idcategorie` int(250) NOT NULL,
  `poza` varchar(200) COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Salvarea datelor din tabel `produs`
--

INSERT INTO `produs` (`id`, `nume`, `descriere`, `cantitate`, `pret`, `idcategorie`, `poza`) VALUES
(23, 'Hanger', 'Wooden', 10, 100, 1, 'uploads/hanger.jpg'),
(25, 'Sofa', 'Color Green', 3, 500, 2, 'uploads/sofa.jpg'),
(26, 'Single Bed', 'Wooden', 3, 400, 4, 'uploads/singlebed.jpg'),
(27, 'Bed', 'Double', 5, 600, 4, 'uploads/bed.jpg'),
(28, 'CoffeeTable', 'Vintage Table', 1, 200, 2, 'uploads/coffeetable.jpg'),
(29, 'Pillow', 'Decorative Pillow', 10, 40, 6, 'uploads/pillows.jpg'),
(30, 'Pillow', 'Decorative Pink Pillow', 15, 40, 6, 'uploads/pillow.jpg'),
(31, 'Desk', 'Color Blue', 2, 300, 3, 'uploads/desk.jpg'),
(32, 'Nightstand', 'Color White', 6, 200, 4, 'uploads/nightstands.jpg'),
(33, 'Nightstand', 'Vintage', 2, 250, 4, 'uploads/night.jpg'),
(34, 'DeskChair', 'Material Leather', 6, 53, 3, 'uploads/deskchair.jpg'),
(35, 'Entryway Seat', 'Vintage', 5, 159, 1, 'uploads/shoeseat.jpg'),
(36, 'Table', 'Simple Table', 3, 164, 5, 'uploads/table.jpg'),
(37, 'Chair', 'Wooden', 10, 19, 5, 'uploads/Kitchenchair.jpg'),
(38, 'Cabinet', 'Color White', 3, 28, 5, 'uploads/cabinet.jpg'),
(39, 'Entryway Seat', 'Dark Color', 1, 123, 1, 'uploads/entryseat.jpg'),
(40, 'Wardrope', 'Color White', 2, 627, 4, 'uploads/wardrope.jpg'),
(41, 'Wardrope', 'Small', 4, 368, 4, 'uploads/smallcloset.jpg'),
(42, 'Chair', 'Dots', 6, 35, 2, 'uploads/chairr.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `utilizator`
--

CREATE TABLE `utilizator` (
  `id` int(250) NOT NULL,
  `nume` varchar(250) COLLATE utf8_romanian_ci NOT NULL,
  `prenume` varchar(250) COLLATE utf8_romanian_ci NOT NULL,
  `adresa` varchar(250) COLLATE utf8_romanian_ci NOT NULL,
  `telefon` int(250) NOT NULL,
  `username` varchar(250) COLLATE utf8_romanian_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_romanian_ci NOT NULL,
  `admin` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Salvarea datelor din tabel `utilizator`
--

INSERT INTO `utilizator` (`id`, `nume`, `prenume`, `adresa`, `telefon`, `username`, `password`, `admin`) VALUES
(1, 'Admin', 'Admin', 'localhost', 700, 'admin@admin.ro', 'admin', 1),
(3, 'test', 'test', '', 0, 'diandra_didii@yahoo.com', 'test', 0),
(5, 'State', 'Iulia', '', 0, 'aa@bb.ro', 'aaa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produs`
--
ALTER TABLE `produs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizator`
--
ALTER TABLE `utilizator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produs`
--
ALTER TABLE `produs`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `utilizator`
--
ALTER TABLE `utilizator`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
