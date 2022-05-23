-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Maj 2019, 01:51
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `filmy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `film`
--

CREATE TABLE `film` (
  `ID` int(11) NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `obrazek_duzy` text COLLATE utf8_polish_ci NOT NULL,
  `obrazek_maly` text COLLATE utf8_polish_ci NOT NULL,
  `szczegoly` text COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `youtube` text COLLATE utf8_polish_ci NOT NULL,
  `gatunek` text COLLATE utf8_polish_ci NOT NULL,
  `powtorka` int(11) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `film`
--

INSERT INTO `film` (`ID`, `tytul`, `cena`, `obrazek_duzy`, `obrazek_maly`, `szczegoly`, `opis`, `youtube`, `gatunek`, `powtorka`, `data`) VALUES
(1, 'Avengers: koniec gry', 32, 'av1.jpg', 'av1.jpg', 'Czas trwania: 182 min. Od lat: 13 Produkcja: USA [2019]\r\nPremiera: 25.04.2019 (Polska)\r\n', 'Po wymazaniu połowy życia we Wszechświecie przez Thanosa, Avengersi starają się zrobić wszystko co konieczne, aby pokonać szalonego tytana.\r\n', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 'Akcja / Fantasy', 0, '2019-05-19 10:00:00'),
(2, 'Praziomek', 28, 'pra.jpg', 'pra1.jpg', 'Czas trwania: 95 min. Od lat: 7 Produkcja: USA [2019]\r\nPremiera: 25.04.2019 (Polska)', 'Charyzmatyczny sir Lionel Frost to najwybitniejszy na świecie tropiciel mitów i potworów. W każdym razie za takiego sam się uważa. Problem w tym, że cieszy się raczej opinią postrzelonego dziwaka niż szacownego naukowca. Nic dziwnego zatem, że chętnie skorzysta z okazji, by udowodnić całemu światu jaki to z niego Indiana Jones.', 'https://www.youtube.com/watch?v=JUIbjaQLFdQ', 'Komedia / Animacja', 0, '2019-05-19 15:00:00'),
(3, 'Kapitan marvel', 28, 'ka.jpg', 'ka1.jpg', 'Czas trwania: 124 min. Od lat: 13 Produkcja: USA [2019]\r\nPremiera: 25.04.2019 (Polska)', 'Ziemia dostaje się w sam środek galaktycznej wojny. Gdy tytułowa bohaterka, Carol Danvers, będzie musiała się zmierzyć z własnym przeznaczeniem, odkryje prawdę o sobie i zostanie jedną z najpotężniejszych postaci Wszechświata.', 'https://www.youtube.com/watch?v=CuhVr4MXKLs', 'Akcja / Fantasy', 0, '2019-05-19 18:00:00'),
(4, 'Batman poczatek', 23, 'batman.jpg', 'batman.jpg', 'Czas trwania: 140 min. Od lat: 16 Produkcja: USA [2005]\r\nPremiera: 29.07.2005 (Polska)', 'Historia milionera Bruce\'a Wayne\'a, który przemienia się w Batmana – postrach przestępców Gotham City.', 'https://www.youtube.com/watch?v=IvHJWK04nek', 'Akcja / Sci-Fi ', 0, '2019-05-20 10:00:00'),
(5, 'Gladiator', 20, 'gladiator.jpg', 'gladiator.jpg', 'Czas trwania: 155 min. Od lat: 16 Produkcja: USA [2000]\r\nPremiera: 01.05.2000 (Polska)', 'Generał Maximus - prawa ręka cesarza, szczęśliwy mąż i ojciec - w jednej chwili traci wszystko. Jako niewolnik-gladiator musi walczyć na arenie o przeżycie.', 'https://www.youtube.com/watch?v=Y93XWgr9IuU', 'Dramat historyczny ', 1, '2019-05-20 14:00:00'),
(6, 'Kler', 22, 'kler.jpg', 'kler.jpg', 'Czas trwania: 133 min. Od lat: 16 Produkcja: Polska [2018]\r\nPremiera: 28.09.2005 (Polska)', 'Życie trzech księży ulega zmianie, kiedy ich drogi krzyżują się ponownie.', 'https://www.youtube.com/watch?v=N9Asxqvr2m8', 'Obyczajowy', 1, '2019-05-20 19:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `IDklienta` int(11) NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`IDklienta`, `email`, `telefon`) VALUES
(2, 'w@w.w', 3254),
(3, 'lysy@gmail.com', 54323123),
(4, 'haba@gmail.com', 23456),
(5, '1@g.l', 123),
(6, 'h@k.k', 54),
(7, 'a@2.c', 0),
(8, '23@g.k', 0),
(9, 'd@g.com', 5857757),
(10, '', 5555),
(11, '2@g.com', 44),
(12, 'asd@g.com', 213123),
(13, 'a@gm.com', 5555),
(14, 'da@hm.com', 2333),
(15, 'asd@c.com', 6),
(16, 'a@g.com', 4),
(17, 'e@g.com', 2333),
(18, 'sa@g.com', 3),
(19, '2@g.com', 43),
(20, 'as@g.com', 1),
(21, 's@g.com', 2),
(22, 'w@g.com', 23),
(23, 'q@g.com', 12312),
(24, '3@c.com', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `repertuar`
--

CREATE TABLE `repertuar` (
  `IDrepertuar` int(11) NOT NULL,
  `data` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `godzina` varchar(4) COLLATE utf8_polish_ci NOT NULL,
  `nazfilmu` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `ID` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `kiedy` datetime NOT NULL,
  `miejsce` int(11) NOT NULL,
  `klient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`ID`, `film_id`, `kiedy`, `miejsce`, `klient_id`) VALUES
(44, 1, '0000-00-00 00:00:00', 23, 2),
(45, 1, '0000-00-00 00:00:00', 25, 2),
(46, 1, '0000-00-00 00:00:00', 27, 2),
(47, 1, '0000-00-00 00:00:00', 29, 2),
(48, 1, '0000-00-00 00:00:00', 46, 2),
(49, 1, '0000-00-00 00:00:00', 52, 2),
(50, 1, '0000-00-00 00:00:00', 4, 3),
(51, 1, '0000-00-00 00:00:00', 5, 3),
(52, 1, '0000-00-00 00:00:00', 6, 3),
(53, 1, '0000-00-00 00:00:00', 1, 4),
(54, 1, '0000-00-00 00:00:00', 8, 4),
(55, 1, '0000-00-00 00:00:00', 32, 5),
(56, 1, '0000-00-00 00:00:00', 42, 5),
(57, 1, '0000-00-00 00:00:00', 39, 6),
(58, 1, '0000-00-00 00:00:00', 49, 6),
(59, 1, '0000-00-00 00:00:00', 50, 6),
(60, 1, '0000-00-00 00:00:00', 17, 7),
(61, 1, '0000-00-00 00:00:00', 12, 8),
(62, 1, '0000-00-00 00:00:00', 13, 8),
(63, 1, '0000-00-00 00:00:00', 14, 8),
(64, 3, '0000-00-00 00:00:00', 1, 9),
(65, 3, '0000-00-00 00:00:00', 2, 9),
(66, 2, '0000-00-00 00:00:00', 15, 10),
(67, 2, '0000-00-00 00:00:00', 16, 10),
(68, 2, '0000-00-00 00:00:00', 2, 11),
(69, 2, '0000-00-00 00:00:00', 12, 12),
(70, 2, '0000-00-00 00:00:00', 23, 12),
(71, 1, '0000-00-00 00:00:00', 11, 13),
(72, 1, '0000-00-00 00:00:00', 2, 14),
(73, 1, '0000-00-00 00:00:00', 3, 14),
(74, 1, '0000-00-00 00:00:00', 45, 15),
(75, 1, '0000-00-00 00:00:00', 55, 15),
(76, 2, '0000-00-00 00:00:00', 55, 16),
(77, 3, '0000-00-00 00:00:00', 17, 17),
(78, 3, '0000-00-00 00:00:00', 18, 17),
(79, 1, '0000-00-00 00:00:00', 54, 18),
(80, 1, '0000-00-00 00:00:00', 22, 19),
(81, 3, '0000-00-00 00:00:00', 54, 20),
(82, 3, '0000-00-00 00:00:00', 55, 20),
(83, 2, '0000-00-00 00:00:00', 45, 21),
(84, 2, '0000-00-00 00:00:00', 54, 22),
(85, 3, '0000-00-00 00:00:00', 42, 23),
(86, 3, '0000-00-00 00:00:00', 45, 24);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`IDklienta`);

--
-- Indeksy dla tabeli `repertuar`
--
ALTER TABLE `repertuar`
  ADD PRIMARY KEY (`IDrepertuar`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `film`
--
ALTER TABLE `film`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `IDklienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
