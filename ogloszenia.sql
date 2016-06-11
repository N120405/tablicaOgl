-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 11 Cze 2016, 08:34
-- Wersja serwera: 5.5.16-log
-- Wersja PHP: 5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE IF NOT EXISTS `ogloszenia` (
  `id_o` int(255) unsigned NOT NULL,
  `Id_u` int(255) unsigned NOT NULL,
  `tresc` varchar(2550) COLLATE utf8_polish_ci NOT NULL,
  `data` date DEFAULT NULL,
  `waznosc` date DEFAULT NULL,
  `widocznosc` char(1) COLLATE utf8_polish_ci DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`id_o`, `Id_u`, `tresc`, `data`, `waznosc`, `widocznosc`) VALUES
(14, 75, 'aa', '2016-04-10', '0000-00-00', 'T'),
(21, 84, 'a1', '2016-04-12', '2016-07-10', 'T'),
(93, 97, 'Jak widaÄ‡, w kodzie zostaÅ‚a uÅ¼yta klasa pomocnicza o nazwie label-default, informujÄ…ca\r\nBootstrapa, ktÃ³rego wariantu etykiety chcesz uÅ¼yÄ‡. DostÄ™pnych wersji etykiet i odpowiadajÄ…cych\r\nim klas jest kilka', '2016-05-15', '0000-00-00', 'T'),
(94, 97, 'Bardzo przydatny komponent well sÅ‚uÅ¼y do umieszczania treÅ›ci w ramce o szarym tle i zaokrÄ…glonych\r\nkrawÄ™dziach, z zachowaniem pewnego marginesu od wewnÄ…trz. Utworzone\r\nw ten sposÃ³b wyimki mogÄ… sÅ‚uÅ¼yÄ‡ do wyeksponowania waÅ¼nych fragmentÃ³w', '2016-05-15', '2016-07-11', 'T'),
(141, 97, 'PHP udostÄ™pnia kilka funkcji sÅ‚uÅ¼Ä…cych do zapisywania daty w preferowanym formacie. Podstawowa to date. Pierwszym jej argumentem jest ciÄ…g tekstowy, ktÃ³ry sÅ‚uÅ¼y jako opis formatu. KaÅ¼da litera wstawiona do tego ciÄ…gu zostanie zamieniona na pewien element daty. Na przykÅ‚ad litera â€šYâ€™ zostanie zamieniona na rok w postaci czterocyfrowej. ', '2016-05-29', '2016-06-28', 'T'),
(142, 97, 'Funkcja date wszelkie â€žtekstoweâ€ wartoÅ›ci zwraca w jÄ™zyku angielskim. Istnieje jednak inna funkcja, strftime, ktÃ³ra, podobnie jak funkcja date, sÅ‚uÅ¼y do formatowania daty, jednak rÃ³Å¼ni siÄ™ trochÄ™ zachowaniem. Po pierwsze, elementy formatu (inne niÅ¼ w funkcji date) sÄ… nie pojedyÅ„czymi literami, ale zawsze poprzedzone sÄ… znakiem procenta, przez co moÅ¼na wstawiaÄ‡ do formatu zwykÅ‚y tekst. Druga waÅ¼na rÃ³Å¼nica to uwzglÄ™dnianie ustwieÅ„ regionalnych systemu locale. Wystarczy ustawiÄ‡ odpowiednie locale (dla jÄ™zyka polskiego â€“ pl_PL i strftime zacznie mÃ³wiÄ‡ po naszemu). ', '2016-05-29', '2016-08-27', 'T'),
(143, 97, 'W PHP niejako standardowym sposobem przechowywania informacji o dacie jest wspomniany wczeÅ›niej format timestamp. Modyfikacje takiego zapisu przeprowadza siÄ™ przez dodanie lub odjÄ™cie odpowiedniej liczby sekund. Na przykÅ‚ad, aby stworzyÄ‡ datÄ™ o godzinÄ™ w przÃ³d od aktualnej, wystarczy dodaÄ‡ do niej 3600 sekund, czyli tyle, ile jest w sekund w godzinie. ', '2016-05-29', '2016-08-27', 'T'),
(147, 104, 'aaaaaaaaaaaaaaaaaaaaaa', '2016-06-11', '2016-06-13', 'T'),
(149, 104, 'ddddddddddddddddd', '2016-06-11', '2016-06-16', 'T');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE IF NOT EXISTS `uzytkownik` (
  `id_u` int(255) unsigned NOT NULL,
  `login` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(22) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_u`, `login`, `haslo`) VALUES
(7, 'eeeeee', 'rrrrr'),
(11, 'rrr', 'ggg'),
(14, 'v', 'v'),
(17, 'ddddd', 'ggggg'),
(18, 'f', 'f'),
(19, 'z', 'z'),
(21, 'g', 'g'),
(25, 'x', 'x'),
(38, 'gggg', 'g'),
(41, 'dddd', 'dd'),
(42, 'dddddddddddddd', 'dd'),
(49, 'w', 'w'),
(52, 's', 's'),
(56, 'eee', 's'),
(58, 'ede', ''),
(59, 'frd', 'c3'),
(63, 'ssss', 'sss'),
(67, 'xxxxxx', 'x'),
(68, 'gggggg', 'ggggg'),
(69, 'f3', 'f3'),
(70, 'x1', 'x1'),
(71, 's2', 's2'),
(73, 's1', 's1'),
(74, 'wwereeeeee', ''),
(75, 'ff', 'ff'),
(76, 'ffd', 'ffd'),
(77, 'ffffff', 'gggg'),
(78, 'r', 'r'),
(79, 'sss', 'sss'),
(83, 'q1', 'q1'),
(84, 'q1q2', 'q1q2'),
(97, 'Tadek', 'tadek'),
(98, 'fffffffffff', 'ggggggggggggg'),
(104, 'a', 'a'),
(105, 'admin', 'j23');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`id_o`),
  ADD KEY `Id_u` (`Id_u`);

--
-- Indexes for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id_u`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `id_o` int(255) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_u` int(255) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD CONSTRAINT `ogloszenia_ibfk_1` FOREIGN KEY (`Id_u`) REFERENCES `uzytkownik` (`id_u`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
