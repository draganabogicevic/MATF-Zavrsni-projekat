-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 11:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbzavrsniprojekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FirstLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`Id`, `Username`, `FirstLastName`, `Email`, `Password`) VALUES
(1, 'DraganaB', 'Dragana Bogicevic', 'dragana.bogicevic83@gmail.com', 'dd64bd3a27ae39b9a3f8e854b0d8c14a');

-- --------------------------------------------------------

--
-- Table structure for table `restorani`
--

CREATE TABLE `restorani` (
  `Id` int(20) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TelephoneNo` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `About` text COLLATE utf8_unicode_ci NOT NULL,
  `WorkingHours` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restorani`
--

INSERT INTO `restorani` (`Id`, `Name`, `Address`, `TelephoneNo`, `Email`, `About`, `WorkingHours`) VALUES
(1, 'Ambar.', 'Karadjordjeva 2-4,11000 Beograd', '+381 11 32 86 637', 'belgrade@ambarrestaurant.com', 'Ambar is the first modern, international chain of Balkan cuisine restaurants. Inside its three locations in Belgrade and Washington DC and Clarendon, Ambar blends tradition and heritage with creativity and modern design. The result is an unforgettable visitor experience that reaches all the senses with delicious food, unbelievable drinks and an atmosphere that blends comfort and high style. From rich food, fine furniture, interior design and the widest choice of the finest Balkan rakias, to our first class service – every detail is meticulously woven into an unique experience that will leave you breathless. Welcome to the best of the Balkans.', 'Open:10–02h'),
(2, 'Durmitor', 'Olimpijskih brigada 16a', '+381 11 26 02 330', ' restorandurmitor@open.telekom', 'Restoran Durmitor National home was built in 1993 on the present site in the center of the business world in New Belgrade and eventually got the look that has today. Here you can enjoy a wide range of national dishes and specialties among which are the veal and goat pie, potato pie, homemade bread, pie, steak in olive oil, daily cooked meals, barbecue, homemade cakes.We offer also is a large selection of local and international drinks. We are especially proud of the wine list, which contains over 100 different types of wine. ', 'Open:10-02h'),
(3, 'Dva Jelena', 'Skadarska 32', '+381 11 72 34 885', 'info@dvajelena.rs ', 'Established a while back, in year 1832, “The Two Deer” restaurant is the classic symbol of Belgrade, a keeper of tradition and bohemian spirit. It is well known for its premium quality traditional national cuisine specialties, its warm environment and its traditional acoustic music.  The restaurant comprises of several large rooms and five terraces exuding hedonism. At lunch time, the sounds of a piano embellish the daily atmosphere, while the evenings are reserved for memorable fun and entertainment with tambura orchestras playing folk and evergreen music.  ', 'Open:10-02h'),
(4, 'Franš', 'Bulevar oslobođenja 18a', '+ 381 11 26 41 944', 'pr@frans.rs ', '“Franš“ is Belgrade. It’s a first-rate of social life, where you show your new clothes, where you present your new love, make business arrangements and celebrate your birthday.‘’Franš’’… That’s the stairs and glamorous garden … The lamps and pleasant atmosphere…The paravane with glued corks that have marked a lot of break ups and reconciliations, political victories, business success and the excellent school marks.‘’Franš’’ means all diopter glasses for those who can not see well, it’s a blanket to wrap in the garden during chilly nights, candy mints on the way out and rose for each lady, on Fridays and Saturdays. It means gifts for those who are celebrating birthdays and friendly waiters who sing the birthday song, colored umbrellas when it’s pouring outside, and it means Julio, Eros, Charles Aznavour, Norah Jones, and light jazz for lunch. It means toys and menus for children, and even bibs, it means thickly lined pictures on the walls and of course the fountain in the garden which reminds of Paris.‘’Franš’’ means forty five salads and a symbolic small gourmet burger, the menus for ladies and the menus for gentlemen. ‘’Franš’’ means fried peppers stuffed with cheese, homemade gnocchi, hot buns from our own bakery, pastries from patisserie, and of course an amazing selection of wines. With restaurants own laboratory that checks complete food every day, ‘’Franš’’ belongs to the line of most caring restaurants in Serbia.It’s the place where those who are far away come back, it', 'Open:10-02h'),
(5, 'Lovac', 'Alekse Nenadovića 19', '+381 11 24 36 128', 'info@restoranlovac.rs', 'In the distinctive Belgrade ambiance packed with hunter\'s secrets that, thanks to the displayed rifles and belts, the venison gallery and the choice of colors, resembles a natural forest environment, our guests enjoy a \"cup of warm friendly conversation\", in an oasis of almost forgotten serenity, satisfaction and enjoyment. \"Lovac\" offers a relaxed homely atmosphere with hints of bohemia, skilled waiters and the national cuisine, that many consider as one of the best in town - the right measure for the restaurant. The restaurant is located on the corner of the streets Njegoševa and Alekse Nenadovića, just a few steps away from the city commotion, which can not be felt in our garden at all. One of the biggest and most beautiful restaurant gardens in Vračar, with a thick shade of the old lime tree, is a pleasant ambiance, filled with the taste of food and a rich assortment of drinks.', 'Open: 10-02h'),
(6, 'Lorenco i Kakalamba', 'Cvijićeva 110', '+381 11 32 95 351', 'restoran@lk.rs', '\'Whereyoueatwell Lorenzo and KAKALAMBA\' is the original space with the unique conception based on the conflict between Florence and Pirot. The whole idea came from one simple and sincere promise of a caring husband to his beloved wife at the beginning of the marriage: \"Honey, I can promise you one thing: You will never be hungry!\" Impressive amateur venture of this gourmand enthusiast got its shocking outcome that surely will not leave you indifferent. If you don\'t  trip up at the entrance to one of the clumsily hidden cables, or God forbid, fall through the hole in the floor directly to the kitchen into the pot with delicious delicacies, you will find your way to one of the unusual chairs and order some of  divine specialties from the Florentine or Pirot cuisine. Once you satisfy your gourmet appetite you will notice around a multitude of interesting details, from goat witch is peacefully grazing grass on the ceiling, through the comic reproductions of the famous Florentine sculptures to the fantastic paintings of the famous Botero.', 'Open: 10-02h'),
(7, 'Madera', 'Bulevar kralja Aleksandra 43', '+381 11 32 31 332', 'maderabg@eunet.rs', 'Madera is located in the metropolitan area with a long history. Part of today\'s Boulevard of King Alexander - from Takovska to Beogradska street - was known as \"Fišegdžijska čaršija\" (Cornet market) because, by order of Prince Miloš Obrenović, this area has been designated for the sale of gun-powder cornets. The place where Madera restaurant stands today, had been occupied by a \"kafana\" called Smederevo - a gethering place of coachmen and blue-collars. Then, in the spirit of Modernism, a new building was erected whose lobby was populated by the restaurant Madera in 1937. ', 'Open: 10-02h'),
(8, 'Mala fabrika ukusa', 'Nebojšina 49', '+381 11 24 35 727', 'office@malafabrikaukusa.com ', 'Mi smo „Mala Fabrika Ukusa“, porodični restoran u jednom od najlepših delova starog Beograda, čarobnom Neimaru. Taj deo grada oplemenili smo predivnom, velikom baštom i još lepšim konceptom...\r\n\r\nNaš restoran nastao je iz inspiracije posle jednog divnog putovanja i spleta srećnih okolnosti i najzad je otvoren 2009. Zamišljen je kao toplo, prijatno i udobno sklonište od užurbanog gradskog ritma, mesto za predah i ukusan zalogaj koga ste baš željni jer naš koncept je srpska tradicija oplemenjena savremenim dodirom...\r\n\r\nAli ovde je tradicija predstavljena na naš način, neobično oplemenjena modernim tehnikama i kreativnim idejama našeg mladog tima. U igri učestvuju lokalne namirnice i moderni načini pripreme, stari srpski recepti i sjajne kreacije naših kuvara, a sve smo začinili maštom i ljubavlju prema ovom našem divnom poslu. ', 'Open: 10-02h'),
(9, 'Šešir moj', 'Skadarska 21', '+381 11 72 28 750', 'info@sesirmoj.rs', 'Welcome to the best tavern in South Eastern Europe! In the tavern „Sesir moj“ (This Hat of Mine) you will encounter the spirit of Skadarlija, the rhythm of Belgrade, the flavours of Serbia and guests from around the world.\r\nThe moment you step foot in our tavern you will enter a hidden world, only found in some places – like our tavern “Sesir moj”.', 'Open: 10-02h');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `Id` int(11) NOT NULL,
  `UserId` int(15) NOT NULL,
  `RestaurantId` int(15) NOT NULL,
  `TableNo` int(11) NOT NULL,
  `ReservationTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `restorani`
--
ALTER TABLE `restorani`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `RestId` (`RestaurantId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restorani`
--
ALTER TABLE `restorani`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD CONSTRAINT `RestId` FOREIGN KEY (`RestaurantId`) REFERENCES `restorani` (`Id`),
  ADD CONSTRAINT `UserId` FOREIGN KEY (`UserId`) REFERENCES `korisnici` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
