-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Gru 2018, 19:32
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `czytelnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `IDAutor` int(10) UNSIGNED NOT NULL,
  `Imie` text,
  `Nazwisko` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`IDAutor`, `Imie`, `Nazwisko`) VALUES
(1, 'Henryk', 'Sienkiewicz'),
(2, 'Adam', 'Mickiewicz'),
(3, 'Adam', 'Asnyk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `egzemplarze`
--

CREATE TABLE `egzemplarze` (
  `IDEgzemplarz` int(10) UNSIGNED NOT NULL,
  `KsiazkaID` int(10) UNSIGNED NOT NULL,
  `DoWypozyczenia` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `egzemplarze`
--

INSERT INTO `egzemplarze` (`IDEgzemplarz`, `KsiazkaID`, `DoWypozyczenia`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 0),
(4, 2, 1),
(5, 2, 1),
(6, 3, 1),
(7, 4, 0),
(8, 4, 1),
(9, 4, 1),
(10, 5, 1),
(11, 5, 0),
(12, 2, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `IDKsiazki` int(10) UNSIGNED NOT NULL,
  `AutorID` int(10) UNSIGNED NOT NULL,
  `Tytul` text,
  `Wydawnictwo` text,
  `RokWydania` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`IDKsiazki`, `AutorID`, `Tytul`, `Wydawnictwo`, `RokWydania`) VALUES
(1, 1, 'W pustyni i w puszczy', 'Znak', 2014),
(2, 1, 'Quo vadis', 'Greg', 2014),
(3, 2, 'Pan Tadeusz', 'Ossolineum', 2005),
(4, 2, 'Ballady i romanse', 'Zielona Sowa', 2010),
(5, 2, 'Dziady', 'Ossolineum', 2009);

--
-- Indeksy dla zrzut??w tabel
--

--
-- Indeksy dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  ADD PRIMARY KEY (`IDAutor`);

--
-- Indeksy dla tabeli `egzemplarze`
--
ALTER TABLE `egzemplarze`
  ADD PRIMARY KEY (`IDEgzemplarz`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`IDKsiazki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  MODIFY `IDAutor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `egzemplarze`
--
ALTER TABLE `egzemplarze`
  MODIFY `IDEgzemplarz` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `IDKsiazki` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
