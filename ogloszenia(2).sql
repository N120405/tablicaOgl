-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 12 Cze 2016, 16:22
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
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`id_o`, `Id_u`, `tresc`, `data`, `waznosc`, `widocznosc`) VALUES
(93, 97, 'Jak widaÄ‡, w kodzie zostaÅ‚a uÅ¼yta klasa pomocnicza o nazwie label-default, informujÄ…ca\r\nBootstrapa, ktÃ³rego wariantu etykiety chcesz uÅ¼yÄ‡. DostÄ™pnych wersji etykiet i odpowiadajÄ…cych\r\nim klas jest kilka', '2016-05-15', '2016-06-01', 'T'),
(94, 97, 'Bardzo przydatny komponent well sÅ‚uÅ¼y do umieszczania treÅ›ci w ramce o szarym tle i zaokrÄ…glonych\r\nkrawÄ™dziach, z zachowaniem pewnego marginesu od wewnÄ…trz. Utworzone\r\nw ten sposÃ³b wyimki mogÄ… sÅ‚uÅ¼yÄ‡ do wyeksponowania waÅ¼nych fragmentÃ³w', '2016-05-15', '2016-05-20', 'T'),
(141, 97, 'PHP udostÄ™pnia kilka funkcji sÅ‚uÅ¼Ä…cych do zapisywania daty w preferowanym formacie. Podstawowa to date. Pierwszym jej argumentem jest ciÄ…g tekstowy, ktÃ³ry sÅ‚uÅ¼y jako opis formatu. KaÅ¼da litera wstawiona do tego ciÄ…gu zostanie zamieniona na pewien element daty. Na przykÅ‚ad litera â€šYâ€™ zostanie zamieniona na rok w postaci czterocyfrowej. ', '2016-05-29', '2016-06-28', 'T'),
(142, 97, 'Funkcja date wszelkie â€žtekstoweâ€ wartoÅ›ci zwraca w jÄ™zyku angielskim. Istnieje jednak inna funkcja, strftime, ktÃ³ra, podobnie jak funkcja date, sÅ‚uÅ¼y do formatowania daty, jednak rÃ³Å¼ni siÄ™ trochÄ™ zachowaniem. Po pierwsze, elementy formatu (inne niÅ¼ w funkcji date) sÄ… nie pojedyÅ„czymi literami, ale zawsze poprzedzone sÄ… znakiem procenta, przez co moÅ¼na wstawiaÄ‡ do formatu zwykÅ‚y tekst. Druga waÅ¼na rÃ³Å¼nica to uwzglÄ™dnianie ustwieÅ„ regionalnych systemu locale. Wystarczy ustawiÄ‡ odpowiednie locale (dla jÄ™zyka polskiego â€“ pl_PL i strftime zacznie mÃ³wiÄ‡ po naszemu). ', '2016-05-29', '2016-08-27', 'T'),
(143, 97, 'W PHP niejako standardowym sposobem przechowywania informacji o dacie jest wspomniany wczeÅ›niej format timestamp. Modyfikacje takiego zapisu przeprowadza siÄ™ przez dodanie lub odjÄ™cie odpowiedniej liczby sekund. Na przykÅ‚ad, aby stworzyÄ‡ datÄ™ o godzinÄ™ w przÃ³d od aktualnej, wystarczy dodaÄ‡ do niej 3600 sekund, czyli tyle, ile jest w sekund w godzinie. ', '2016-05-29', '2016-08-27', 'T'),
(150, 104, 'Syed Fazle Rahman jest programistÄ… i projektantem stron internetowych oraz blogerem,\r\nz ponad czteroletnim staÅ¼em jako freelancer. Specjalizuje siÄ™ w HTML5, CSS3, Less, Java-\r\nScripcie, jQuery i Ember.js. Obecnie pracuje nad hybrydowymi aplikacjami dla smartfonÃ³w\r\ni inteligentnych telewizorÃ³w.', '2016-06-12', '2016-07-12', 'T'),
(151, 104, 'KsiÄ…Å¼ki z serii Technologia na start! stanowiÄ… bÅ‚yskawiczne wprowadzenie do praktycznych\r\naspektÃ³w posÅ‚ugiwania siÄ™ rÃ³Å¼nymi jÄ™zykami i technologiami stosowanymi w projektach\r\nzwiÄ…zanych z internetem. Na ogÃ³Å‚ majÄ… okoÅ‚o 150 stron i moÅ¼na je przeczytaÄ‡ w weekend,\r\nale w tym krÃ³tkim czasie pozwalajÄ… opanowaÄ‡ podstawy danego zagadnienia i zyskaÄ‡ wiedzÄ™\r\npozwalajÄ…cÄ… na samodzielne eksperymenty.', '2016-06-12', '2016-07-12', 'T'),
(152, 104, 'Zaprojektowanie od zera nowoczesnej, profesjonalnej strony internetowej wymaga wiele\r\nczasu i wysiÅ‚ku. WspÃ³Å‚czesne strony powinny byÄ‡ elastyczne, eleganckie i szybkie oraz poprawnie\r\ndziaÅ‚aÄ‡ na urzÄ…dzeniach mobilnych. Bootstrap uÅ‚atwia projektantom i programistom\r\npracÄ™, oferujÄ…c szerokÄ… gamÄ™ gotowych komponentÃ³w HTML oraz elastycznÄ… strukturÄ™\r\nw postaci systemu siatkowego, dziÄ™ki ktÃ³rym tworzenie profesjonalnych, responsywnych\r\nszablonÃ³w stron internetowych jest bardzo proste i trwa zdecydowanie krÃ³cej niÅ¼ w przypadku\r\ntradycyjnych rozwiÄ…zaÅ„.', '2016-06-12', '2016-06-15', 'N'),
(153, 104, 'Bootstrap moÅ¼e siÄ™ przydaÄ‡ kaÅ¼demu, ale nieocenione usÅ‚ugi oddaje zwÅ‚aszcza poczÄ…tkujÄ…cym\r\nprojektantom. ZawiÅ‚y kod CSS i JavaScript, niezbÄ™dny przy tworzeniu zaawansowanych\r\nkomponentÃ³w stron WWW, jest juÅ¼ gotowy. Wystarczy trochÄ™ kodu HTML, by zaczÄ…Ä‡\r\ntych komponentÃ³w uÅ¼ywaÄ‡. Bardziej doÅ›wiadczeni deweloperzy mogÄ… skorzystaÄ‡ z wielu\r\nzaawansowanych moÅ¼liwoÅ›ci, takich jak obsÅ‚uga Less i Sass, uÅ‚atwiajÄ…cych dostosowanie\r\nBootstrapa do konkretnych potrzeb.', '2016-06-12', '2016-06-17', 'N'),
(154, 104, 'StaraÅ‚em siÄ™ napisaÄ‡ tÄ™ ksiÄ…Å¼kÄ™ tak, by staÅ‚a siÄ™ kompletnym przewodnikiem po platformie\r\nBootstrap. Dowiesz siÄ™ z niej, w jaki sposÃ³b projektowaÄ‡ piÄ™kne, responsywne strony internetowe\r\nbez koniecznoÅ›ci uczenia siÄ™ zaawansowanych technik programowania. Przeczytasz\r\nw niej o rÃ³Å¼nych przydatnych komponentach CSS i rozszerzeniach JavaScript dla Bootstrapa.\r\nDowiesz siÄ™ z niej teÅ¼, w jaki sposÃ³b zmodyfikowaÄ‡ wyglÄ…d i dziaÅ‚anie Bootstrapa,\r\nby mÃ³c tworzyÄ‡ oryginalne, nietypowe projekty.', '2016-06-12', '2016-06-15', 'N'),
(155, 106, 'Mam nadziejÄ™, Å¼e rozpaliÅ‚em w Tobie chÄ™Ä‡ tworzenia stron internetowych przy uÅ¼yciu Bootstrapa.\r\nJestem zarazem pewien, Å¼e po przeczytaniu tej ksiÄ…Å¼ki bÄ™dziesz dysponowaÄ‡ umiejÄ™tnoÅ›ciami\r\numoÅ¼liwiajÄ…cymi szybkie stworzenie eleganckiego, elastycznego szablonu\r\nstrony internetowej. WierzÄ™, Å¼e ta ksiÄ…Å¼ka w poÅ‚Ä…czeniu z platformÄ… Bootstrap w peÅ‚ni zaspokoi\r\nTwoje potrzeby w zakresie projektowania stron WWW.', '2016-06-12', '2016-07-12', 'N'),
(158, 108, 'Aby zarejestrowaÄ‡ siÄ™ jako administrator naleÅ¼y podaÄ‡ login â€žAdminâ€  i dowolne hasÅ‚o.\r\nW tej bazie â€žAdminâ€ ma hasÅ‚o â€ž j23â€.\r\nAdministrator poza wszystkimi  cechami zalogowanego uÅ¼ytkownika  do ktÃ³rych prowadzÄ… odnoÅ›niki poniÅ¼ej tekstu powitalnego umoÅ¼liwia zatwierdzanie ogÅ‚oszeÅ„, usuwanie uÅ¼ytkownikÃ³w.\r\n Do tych funkcji dostÄ™p jest za pomocÄ… odnoÅ›nikÃ³w znajdujÄ…cych siÄ™ w gÃ³rnej czÄ™Å›ci strony.\r\nZatwierdzanie ogÅ‚oszeÅ„ polega na klikniÄ™ciu pola znajdujÄ…cego siÄ™ miÄ™dzy dwoma nawiasami .\r\nNa tej stronie administrator moÅ¼e rÃ³wnieÅ¼ zmieniaÄ‡ i usuwaÄ‡ ogÅ‚oszenia klikajÄ…c na odpowiednie odnoÅ›niki. Zmiana i usuwanie przebiega w taki sam sposÃ³b jak zalogowanego uÅ¼ytkownika. RÃ³Å¼ni siÄ™ tylko tym Å¼e administrator ma dostÄ™p do wszystkich ogÅ‚oszeÅ„.\r\nZe strony zatwierdzania ogÅ‚oszeÅ„ moÅ¼na przejÅ›Ä‡ do strony usuwania uÅ¼ytkownika.\r\nAdministrator moÅ¼e usunÄ…Ä‡ kaÅ¼dego uÅ¼ytkownika klikajÄ…c przy wybranym uÅ¼ytkowniku na odnoÅ›nik â€žusuÅ„â€.\r\nUsuwanie na bazie przebiega dwuetapowo, najpierw usuwane sÄ… wszystkie ogÅ‚oszenia danego uÅ¼ytkownika a nastÄ™pnie usuwany jest uÅ¼ytkownik. Zmiany te sÄ… nieodwracalne.\r\n', '2016-06-12', '2016-09-10', 'T'),
(159, 108, 'StronÄ… startowÄ… aplikacji jest  â€žTablica ogÅ‚oszeÅ„â€ zawierajÄ…ca ogÅ‚oszenia  ktÃ³re zostaÅ‚y zaakceptowane przez administratora  i posiadajÄ…ce  aktualnÄ… datÄ™ waÅ¼noÅ›ci.\r\nPorzÄ…dkowanie na stronie jest za pomocÄ… datt w sposÃ³b malejÄ…cy.\r\nStrona posiada odnoÅ›niki  do  logowania i rejestracji.\r\nKaÅ¼dy moÅ¼e siÄ™ zarejestrowaÄ‡ podajÄ…c jako login nazwisko i imiÄ™ oraz hasÅ‚o.\r\nPodczas rejestracji aplikacja sprawdza j czy w bazie danych nie znajduje siÄ™ juÅ¼ identyczny login.\r\nJeÅ¼eli nie, to nowy uÅ¼ytkownik zostanie zarejestrowany, co znajduje potwierdzenie na ekranie. \r\nJeden z odnoÅ›nikÃ³w na tej stronie umoÅ¼liwia powrÃ³t do poprzedniej strony , czyli przeglÄ…dania ogÅ‚oszeÅ„, a drugi umoÅ¼liwia zalogowanie siÄ™. Podczas logowania zostaje sprawdzone hasÅ‚o odpowiadajÄ…ce danemu loginowi. JeÅ¼eli logowanie przebiegÅ‚o poprawnie to moÅ¼liwe jest przejÅ›cie do edycji ogÅ‚oszeÅ„, powrotu do przeglÄ…dania ogÅ‚oszeÅ„ , jak rÃ³wnieÅ¼ wylogowania i zmiany hasÅ‚a.\r\n-Po zmianie hasÅ‚a wymagane jest powtÃ³rne zalogowanie siÄ™ z nowym hasÅ‚em.\r\n-Po wylogowaniu nastÄ™puje przejÅ›cie do pierwszej strony. \r\n-Edycja ogÅ‚oszeÅ„  umoÅ¼liwia dodawanie nowej treÅ›ci  i okreÅ›lenie waÅ¼noÅ›ci  ogÅ‚oszenia. WaÅ¼noÅ›Ä‡ okreÅ›la siÄ™ przez podanie liczby dni przez ktÃ³re ogÅ‚oszenie ma obowiÄ…zywaÄ‡ (max 90 dni). Pozostawienie tej rubryki pustej lub podanie liczby z poza zakresu powoduje wprowadzenie wartoÅ›ci domyÅ›lnej tj. 30 dni. W bazie danych zapisywana jest data przesuniÄ™ta o podanÄ… liczbÄ™ dni wzglÄ™dem daty aktualnej.\r\nNa tej stronie wyÅ›wietlajÄ… siÄ™ wszystkie ogÅ‚oszenia zalogowanego uÅ¼ytkownika uporzÄ…dkowane datÄ… w sposÃ³b malejÄ…cy. Pod treÅ›ciÄ… oprÃ³cz dat uÅ¼ytkownik moÅ¼e sprawdziÄ‡ czy dane ogÅ‚oszenie zostaÅ‚o zaakceptowane przez administratora.  Zaakceptowane  oznaczone sÄ… literÄ… â€žTâ€ , a nie zaakceptowane literÄ… â€žNâ€.\r\nPoniÅ¼ej kaÅ¼dego ogÅ‚oszenia znajdujÄ… siÄ™ odnoÅ›niki  pozwalajÄ…ce usunÄ…Ä‡  jak rÃ³wnieÅ¼ zmieniÄ‡ jego treÅ›Ä‡ i waÅ¼noÅ›Ä‡ .\r\nZ edycji ogÅ‚oszeÅ„ moÅ¼na wyjÅ›Ä‡  powracajÄ…c do przeglÄ…dania, lub poprzez wylogowanie.\r\nMoÅ¼liwa jest teÅ¼ z tego miejsca zmiana hasÅ‚a.', '2016-06-12', '2016-09-10', 'T'),
(160, 108, 'ZaÅ‚oÅ¼enia  funkcjonalne  aplikacji â€žTablica OgÅ‚oszeÅ„â€.\r\nCelem aplikacji jest udostÄ™pnianie ogÅ‚oszeÅ„ w obrÄ™bie zakÅ‚adu pracy, urzÄ™du, szkoÅ‚y itp.  w sieci lokalnej lub za poÅ›rednictwem Internetu.\r\nAplikacja umoÅ¼liwia:\r\n- przeglÄ…danie ogÅ‚oszeÅ„ wszystkim uÅ¼ytkownikom  zalogowanym jak rÃ³wnieÅ¼ niezalogowanym.\r\n -zamieszczanie , edycjÄ™ i  usuwanie wÅ‚asnych ogÅ‚oszeÅ„ osobom zalogowanym.\r\n- zatwierdzanie , edycjÄ™ i usuwanie ogÅ‚oszeÅ„ przez administratora\r\n- usuwanie uÅ¼ytkownikÃ³w  wraz wszystkimi ich ogÅ‚oszeniami  przez administratora.', '2016-06-12', '2016-09-10', 'T'),
(161, 108, 'ZaÅ‚oÅ¼enia  niefunkcjonalne  aplikacji â€žTablica OgÅ‚oszeÅ„â€.\r\nAplikacja napisana jest zgodnie z reguÅ‚ami HTML5 w przewaÅ¼ajÄ…cej czÄ™Å›ci pomocÄ… jÄ™zyka PHP5.3.\r\nW celu osiÄ…gniecia responsywnoÅ›ci stron zastosowano front-end framework   Bootstrap.\r\n', '2016-06-12', '2016-09-10', 'T');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE IF NOT EXISTS `uzytkownik` (
  `id_u` int(255) unsigned NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `haslo` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_u`, `login`, `haslo`) VALUES
(97, 'Tadek', 'tadek'),
(104, 'a', 'q'),
(106, 'Wojtek', 'wojtek12345'),
(108, 'Åabaj CzesÅ‚aw', 'c12345'),
(109, 'Kowalski Piotr', 'piotr12345'),
(110, 'Admin', 'j23');

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
  MODIFY `id_o` int(255) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_u` int(255) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
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
