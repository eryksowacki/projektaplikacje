-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Cze 2021, 22:18
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `project`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rejestracja` int(10) NOT NULL,
  `logowanie` int(10) NOT NULL,
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`id`, `login`, `haslo`, `email`, `rejestracja`, `logowanie`, `ip`) VALUES
(1, 'admin', '207023ccb44feb4d7dadca005ce29a64', 'admin@admin.pl', 1357063200, 1357063200, '127.0.0.1'),
(12, 'erykkkkk', '25d55ad283aa400af464c76d713c07ad', 'eryk.sowacki@Op.pl', 1623194236, 1623194236, '::1'),
(13, 'Ekseral123', 'e2ecc81f9411c0f3445e2deb85663710', 'ekseral@wp.pl', 1623195795, 1623195795, '::1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `godzina` time NOT NULL,
  `intruktor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `reservations`
--

INSERT INTO `reservations` (`id`, `data`, `godzina`, `intruktor`) VALUES
(22, '2021-06-02', '19:01:00', 'Krzysztof Nowak'),
(23, '2021-06-02', '17:00:00', 'Magdalena PoznaÅ„ska'),
(24, '2021-06-02', '18:01:00', 'Marcin Kowalski'),
(25, '2021-06-10', '20:00:00', 'Marcin Kowalski');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
