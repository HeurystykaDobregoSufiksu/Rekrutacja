-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Wrz 2020, 20:37
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `articlemanager2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article`
--

CREATE TABLE `article` (
  `ID` int(11) NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `author` int(11) NOT NULL,
  `content` text COLLATE utf8_polish_ci NOT NULL,
  `category` int(11) DEFAULT NULL,
  `status` enum('accepted','waiting','rejected') COLLATE utf8_polish_ci NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `article`
--

INSERT INTO `article` (`ID`, `title`, `author`, `content`, `category`, `status`) VALUES
(67, 'Artykul', 2, 'tresc edited', 38, 'waiting');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`ID`, `category`, `description`) VALUES
(38, 'Test kategorii', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `status` enum('admin','moderator','viewer') COLLATE utf8_polish_ci NOT NULL DEFAULT 'viewer',
  `email` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID`, `name`, `password`, `status`, `email`) VALUES
(1, 'marcin', 'nn', '', 'das'),
(2, 'nordcom', '$2y$10$uIRY0lq4E0DQTlcEkD7caeBD4INm0Us0tW8QjP8oKz//yF9232Df2', 'admin', 'adsasd@o2.pl'),
(3, 'dsa', '$2y$10$JfDFYHc7Emj4cKPUSsJvhO3CctDW/U2GMtHFMwwwxUzmL8/4iCLbS', 'admin', 'mrmqs159@gmail.com'),
(4, '', '$2y$10$VtI8TEnX4M20hSSc19wT4O01MfxDDxNZS4fsohff8E7MTb1d7qrGG', 'admin', 'mrmqs159@gmail.com'),
(5, 'nordcom', '$2y$10$KDE1U/vW5yQHPigicsgGpuDkwJnulTl.lAlV/Uzuc7Z5PPZCa2Pim', 'admin', 'mrmqs159@gmail.com'),
(6, 'nordcom', '$2y$10$CyeI5oJENuNIEq5aUH8li.wIXFa5m6UOB1uOAn5Hbwiy7jNxcDYvi', 'admin', 'mrmqs159@gmail.com'),
(7, 'nordcom', '$2y$10$kxK5c1r41xOwIBPfyRE2NOPVJoq4V2qKowbo.PwhBpgG4C0Y.gedy', 'admin', 'mrmqs159@gmail.com'),
(8, 'nordcoms', '$2y$10$0xfYCCVADV4CNGrV3yT5AurmNlF8Invphc0SizthWv1WFau0CxMda', 'admin', 'mrmqs159@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `author` (`author`),
  ADD KEY `category` (`category`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
