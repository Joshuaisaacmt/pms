-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 06:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_info`
--

CREATE TABLE `medical_info` (
  `med_id` int(11) NOT NULL,
  `user_id` int(250) NOT NULL,
  `med_type` varchar(250) NOT NULL,
  `med_status` text NOT NULL,
  `med_purpose` text NOT NULL,
  `pic_location` varchar(250) NOT NULL,
  `med_dalili` text NOT NULL,
  `med_treat` text NOT NULL,
  `product_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_info`
--

INSERT INTO `medical_info` (`med_id`, `user_id`, `med_type`, `med_status`, `med_purpose`, `pic_location`, `med_dalili`, `med_treat`, `product_type`) VALUES
(1, 4, 'CHANJO YA FOWL POX VACCINE', 'NDUI YA KUKU/ FOWL POX', ' Vidonda vyenye utando wa kahawia/purple kwenye sehemu zinazoonekana\r\nKukosa hamu ya kula\r\nVifo vingi\r\nKinga', '../uploads/med_pic/ndui.jpg', ' Virus huambukizwa kupitia jeraha au mbu', ' Chanja vifaranga wanapofikia mwezi 1-2 kwa kutumia chanjo ya Fowl pox vaccine\r\nEpuka kuingiza kuku wageni\r\nZingatia usafi wa mazingira', 'Brolier'),
(2, 0, 'CHANJO (NEW CASTLE VACCINE)', 'MDONDO/NEW CASTLE', ' Virus vinavyosababisha ugonjwa huu huenezwa kwa hewa', '../uploads/med_pic/mdondo.png', ' Kuhalisha choo cha kijani na njano\r\n\r\nKukohoa na kupumua kwa shida\r\nKupinda shingo kwa nyuma\r\nKuficha kichwa katikati ya miguu\r\nKukosa hamu ya kula na kunywa\r\nIdadi kubwa ya vifo hadi 90%\r\nKinga', ' Chanjo New Castle kwa mpango wa siku 3, wiki 3, miezi 3\r\nEpuka kuingiza kuku wageni\r\nChoma au fukie mizoga ya kuku waliokufa kwa ugonjwa\r\nZingatia usafi wa mazingira', 'Brolier');

-- --------------------------------------------------------

--
-- Table structure for table `med_activity`
--

CREATE TABLE `med_activity` (
  `med_id` int(250) NOT NULL,
  `product_type` varchar(250) NOT NULL,
  `user_id` int(250) NOT NULL,
  `med_status` text NOT NULL,
  `med_purpose` varchar(250) NOT NULL,
  `med_time` date NOT NULL,
  `med_treat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `med_activity`
--

INSERT INTO `med_activity` (`med_id`, `product_type`, `user_id`, `med_status`, `med_purpose`, `med_time`, `med_treat`) VALUES
(1, 'Layering', 4, 'Chanjo ya Newcastle', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(2, 'Layering', 4, 'Chanjo ya Gumboro masaa 2 tu', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(3, 'Layering', 4, 'Coccidiosis', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Zifuatavyo aina ya Dawa:-\r\n                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji\r\n                            <br> Hii dawa inatumika kwanzia tarehe  hadi tarehe  '),
(4, 'Layering', 4, 'Gumboro', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hii newcastle vaccine (lasota) inachanganywa kwenye maji. \r\n                             Hii dawa inatumika kwanzia tarehe '),
(5, 'Layering', 4, 'Ndui fowl pox vaccine', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. \r\n                            Hii dawa inatumika kwanzia tarehe  kila siku mpaka tarehe '),
(6, 'Layering', 4, 'Minyoo pipperazine cirtratte', 'Hii dawa inasaidia kuongeza nguvu kwa vifaranga.', '2022-07-08', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku mpaka tarehe '),
(7, 'Layering', 4, '', '', '0000-00-00', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku'),
(8, 'Chotara', 5, 'Chanjo ya Newcastle', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '2022-07-06', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(9, 'Chotara', 5, 'Chanjo ya Gumboro masaa 2 tu', '', '0000-00-00', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(10, 'Chotara', 5, 'Coccidiosis', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '1970-01-08', 'Zifuatavyo aina ya Dawa:-\r\n                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji\r\n                            <br> Hii dawa inatumika kwanzia tarehe  hadi tarehe  '),
(11, 'Chotara', 5, 'Gumboro', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '1970-01-07', 'Hii newcastle vaccine (lasota) inachanganywa kwenye maji. \r\n                             Hii dawa inatumika kwanzia tarehe '),
(12, 'Chotara', 5, 'Ndui fowl pox vaccine', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '1970-01-02', 'Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. \r\n                            Hii dawa inatumika kwanzia tarehe  kila siku mpaka tarehe '),
(13, 'Chotara', 5, 'Minyoo pipperazine cirtratte', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '1970-01-15', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku mpaka tarehe '),
(14, 'Chotara', 5, 'Chanjo ya Newcastle kwa masaa 2 tu', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-06', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku'),
(15, 'Layering', 4, 'Chanjo ya Newcastle', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(16, 'Layering', 4, 'Chanjo ya Gumboro masaa 2 tu', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(17, 'Layering', 4, 'Coccidiosis', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Zifuatavyo aina ya Dawa:-\r\n                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji\r\n                            <br> Hii dawa inatumika kwanzia tarehe  hadi tarehe  '),
(18, 'Layering', 4, 'Gumboro', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hii newcastle vaccine (lasota) inachanganywa kwenye maji. \r\n                             Hii dawa inatumika kwanzia tarehe '),
(19, 'Layering', 4, 'Ndui fowl pox vaccine', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga', '2022-07-08', 'Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. \r\n                            Hii dawa inatumika kwanzia tarehe  kila siku mpaka tarehe '),
(20, 'Layering', 4, 'Minyoo pipperazine cirtratte', 'Hii dawa inasaidia kuongeza nguvu kwa vifaranga.', '2022-07-08', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku mpaka tarehe '),
(21, 'Layering', 4, '', '', '0000-00-00', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku'),
(22, 'Brolier', 4, 'Chanjo ya Newcastle', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '2022-07-25', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(23, 'Brolier', 4, 'Chanjo ya Gumboro ', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Gumboro', '1970-01-08', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(24, 'Brolier', 4, 'Coccidiosis', 'Hii chanjo inasaidia kuongeza nguvu kwa vifaranga kujikinga na magonjwa.', '1970-01-07', 'Zifuatavyo aina ya Dawa:-\r\n                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji\r\n                            <br> Hii dawa inatumika kwanzia tarehe  hadi tarehe  '),
(25, 'Brolier', 4, 'Gumboro', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '1970-01-02', 'Hii newcastle vaccine (lasota) inachanganywa kwenye maji. \r\n                             Hii dawa inatumika kwanzia tarehe '),
(26, 'Brolier', 4, 'Ndui fowl pox vaccine', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Ndui', '1970-02-12', 'Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. \r\n                            Hii dawa inatumika kwanzia tarehe  kila siku mpaka tarehe '),
(27, 'Brolier', 4, 'Minyoo pipperazine cirtratte', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga zidiya ya ugonjwa wa mnyoo', '1970-01-08', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku mpaka tarehe '),
(28, 'Brolier', 4, 'Chanjo ya Newcastle kwa masaa 2 tu', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '1970-04-02', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku'),
(29, 'Brolier', 4, 'Chanjo ya Newcastle', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '2022-07-25', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(30, 'Brolier', 4, 'Chanjo ya Gumboro ', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Gumboro', '1970-01-08', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(31, 'Brolier', 4, 'Coccidiosis', 'Hii chanjo inasaidia kuongeza nguvu kwa vifaranga kujikinga na magonjwa.', '1970-01-07', 'Zifuatavyo aina ya Dawa:-\r\n                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji\r\n                            <br> Hii dawa inatumika kwanzia tarehe  hadi tarehe  '),
(32, 'Brolier', 4, 'Gumboro', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '1970-01-02', 'Hii newcastle vaccine (lasota) inachanganywa kwenye maji. \r\n                             Hii dawa inatumika kwanzia tarehe '),
(33, 'Brolier', 4, 'Ndui fowl pox vaccine', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Ndui', '1970-02-12', 'Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. \r\n                            Hii dawa inatumika kwanzia tarehe  kila siku mpaka tarehe '),
(34, 'Brolier', 4, 'Minyoo pipperazine cirtratte', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga zidiya ya ugonjwa wa mnyoo', '1970-01-08', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku mpaka tarehe '),
(35, 'Brolier', 4, 'Chanjo ya Newcastle kwa masaa 2 tu', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '1970-04-02', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku'),
(36, 'Brolier', 4, 'Chanjo ya Newcastle', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '2022-07-25', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(37, 'Brolier', 4, 'Chanjo ya Gumboro ', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Gumboro', '1970-01-08', 'Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo'),
(38, 'Brolier', 4, 'Coccidiosis', 'Hii chanjo inasaidia kuongeza nguvu kwa vifaranga kujikinga na magonjwa.', '1970-01-07', 'Zifuatavyo aina ya Dawa:-\r\n                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji\r\n                            <br> Hii dawa inatumika kwanzia tarehe  hadi tarehe  '),
(39, 'Brolier', 4, 'Gumboro', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '1970-01-02', 'Hii newcastle vaccine (lasota) inachanganywa kwenye maji. \r\n                             Hii dawa inatumika kwanzia tarehe '),
(40, 'Brolier', 4, 'Ndui fowl pox vaccine', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Ndui', '1970-02-12', 'Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. \r\n                            Hii dawa inatumika kwanzia tarehe  kila siku mpaka tarehe '),
(41, 'Brolier', 4, 'Minyoo pipperazine cirtratte', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga zidiya ya ugonjwa wa mnyoo', '1970-01-08', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku mpaka tarehe '),
(42, 'Brolier', 4, 'Chanjo ya Newcastle kwa masaa 2 tu', 'Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo', '1970-04-02', 'Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji \r\n                            Hii dawa inatumika kwanzia tarehe  \r\n                            kila siku');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sms_id` int(11) NOT NULL,
  `sender` varchar(250) NOT NULL,
  `receiver` varchar(250) NOT NULL,
  `sms_subject` varchar(250) NOT NULL,
  `sms_content` text NOT NULL,
  `sms_status` enum('0','1') NOT NULL,
  `sms_time_sent` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sms_id`, `sender`, `receiver`, `sms_subject`, `sms_content`, `sms_status`, `sms_time_sent`) VALUES
(1, 'System', 'Dorcus', 'Broiler Pre-Starter', 'Muda wa Kuwapa Chakula aina <h3>Broiler Pre-Starter</h3>\r\n                            <h3> Maelezo ya Chakula </h3>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum\r\n                            <h3> Kiwango cha Maji </h3> 8 lita kwa siku nzima  \r\n                            <h3> Kiwango cha Chakula </h3> 4 kilo kwa siku nzima ', '1', '2022-07-18 14:19:31'),
(2, 'System', 'Ebeneza', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                            <b> Maelezo ya Chakula </b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>\r\n                            <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                            <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>', '0', '2022-07-18 16:43:07'),
(3, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(4, 'System', 'Ebeneza', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-18 16:26:32'),
(5, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(6, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(7, 'System', 'PRIINCES', 'Chanjo ya Newcastle', ' Muda wa Kuwapa <b>Chanjo ya Newcastle</b><br>Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo<br><br>Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo', '1', '2022-07-16 21:30:19'),
(8, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(9, 'System', 'PRIINCES', 'Chanjo ya Newcastle', ' Muda wa Kuwapa <b>Chanjo ya Newcastle</b><br>Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo<br><br>Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo', '1', '2022-07-16 21:30:19'),
(10, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                    <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                    <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                    <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(11, 'System', 'PRIINCES', 'Chanjo ya Newcastle', ' Muda wa Kuwapa <b>Chanjo ya Newcastle</b><br>Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo<br><br>Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo', '1', '2022-07-16 21:30:19'),
(12, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                    <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                    <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                    <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(13, 'System', 'PRIINCES', 'Chanjo ya Newcastle', ' Muda wa Kuwapa <b>Chanjo ya Newcastle</b><br>Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo<br><br>Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo', '1', '2022-07-16 21:30:19'),
(14, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                    <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                    <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                    <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(15, 'System', 'PRIINCES', 'Chanjo ya Newcastle', ' Muda wa Kuwapa <b>Chanjo ya Newcastle</b><br>Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo<br><br>Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo', '1', '2022-07-16 21:30:19'),
(16, 'System', 'PRIINCES', 'Broiler Pre-Starter', ' Muda wa Kuwapa Chakula aina <b>Broiler Pre-Starter</b><br>\r\n                                    <b> Kiwango cha Maji : </b> 8 lita kwa siku nzima <br>\r\n                                    <b> Kiwango cha Chakula: </b> 4 kilo kwa siku nzima <br>    \r\n                                    <b> Maelezo ya Chakula <br></b>  Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum<br>', '1', '2022-07-16 21:30:19'),
(17, 'System', 'PRIINCES', 'Chanjo ya Newcastle', ' Muda wa Kuwapa <b>Chanjo ya Newcastle</b><br>Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo<br><br>Hatua zifuatavyo namna ya kuaandaa Dawa:-\r\n                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu \r\n                                    kwanzia siku ya pili baada ya ingia hadi tarehe \r\n                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo', '1', '2022-07-16 21:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `my_activity`
--

CREATE TABLE `my_activity` (
  `activity _id` int(150) NOT NULL,
  `user_id` int(150) NOT NULL,
  `food_subject` varchar(150) NOT NULL,
  `food_details` text NOT NULL,
  `schedule_activity` date NOT NULL,
  `product_type` varchar(150) NOT NULL,
  `product_qnty` int(150) NOT NULL,
  `water_activity` int(150) NOT NULL,
  `food_qnty` int(150) NOT NULL,
  `food_bags` int(150) NOT NULL,
  `data_actvty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_activity`
--

INSERT INTO `my_activity` (`activity _id`, `user_id`, `food_subject`, `food_details`, `schedule_activity`, `product_type`, `product_qnty`, `water_activity`, `food_qnty`, `food_bags`, `data_actvty`) VALUES
(1, 4, 'Broiler Pre-Starter', ' Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-16 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum', '2022-07-16', 'Brolier', 200, 8, 4, 0, '  Kiwango na ulishaji wake ni ifuatavyo:-\r\n                            <br> Wiki ya 1: Gramu 4400 Utakuwa Unawapa kwa siku 7, \r\n                            kwanzia tarehe 2022-07-09 kwa kila siku moja. '),
(2, 4, 'Broiler Starter', 'Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, \r\n            hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na \r\n            kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale \r\n            chakula gani bora, hawawezi kutoa mazao bora', '2022-08-05', 'Brolier', 200, 12, 5, 0, 'Kiwango na ulishaji wake ni ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 5400  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe 2022-07-16 kwa kila siku moja. \r\n            '),
(3, 4, 'Broiler Grower', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-08-14', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe  kwa kila siku moja. \r\n            '),
(4, 4, 'Broiler Finisher', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-08-29', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                 <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                 kwanzia tarehe  kwa kila siku moja hadi tarehe 2022-09-01'),
(5, 4, 'Super Starter', ' Super Starter chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                                tarehe 2022-07-15 <br> Chakula hiki kwa ajili ya kuwatengenezea \r\n                                kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                                wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum', '2022-07-15', 'Layering', 200, 10, 7, 0, '  Kiwango na ulishaji wake ni ifuatavyo:-\r\n                                <br> Wiki ya 1: Gramu 2400 kwanzia tarehe 2022-07-01 kwa kila siku moja. \r\n                                <br> Wiki ya 2: Gramu 4400 kwanzia tarehe 2022-07-09 kwa kila siku moja. '),
(6, 4, 'Chick Starter', 'Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, \r\n                hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na \r\n                kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale \r\n                chakula gani bora, hawawezi kutoa mazao bora, lakini kwa kuwapa “Chick Starter” itawapelekea\r\n                kuwa na virutubisho hivyo muhimu.', '2022-08-26', 'Layering', 200, 14, 47, 1, 'Kiwango na ulishaji wake ni ifuatavyo:-\r\n                    <br> Wiki ya 3: Gramu 5400 kwanzia tarehe 2022-07-15 kwa kila siku moja. \r\n                    <br> Wiki ya 4: Gramu 6400 kwanzia tarehe 2022-07-31 kwa kila siku moja. \r\n                    <br> Wiki ya 5: Gramu 7600 kwanzia tarehe 2022-08-08 kwa kila siku moja. \r\n                    <br> Wiki ya 6: Gramu 8400 kwanzia tarehe 2022-08-08 kwa kila siku moja. \r\n                    <br> Wiki ya 7: Gramu 9200 kwanzia tarehe 2022-08-16 kwa kila siku moja. \r\n                    <br> Wiki ya 8: Gramu 10000 kwanzia tarehe 2022-08-24 kwa kila siku moja. \r\n                '),
(7, 4, 'Grower Mash', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-09-03', 'Layering', 200, 40, 143, 3, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                    <br> Wiki ya 9: Gramu 11200 kwanzia tarehe  kwa kila siku moja. \r\n                    <br> Wiki ya 10: Gramu 12400 kwanzia tarehe 2022-09-11 kwa kila siku moja. \r\n                    <br> Wiki ya 11: Gramu 12800 kwanzia tarehe 2022-09-19 kwa kila siku moja. \r\n                    <br> Wiki ya 12: Gramu 13200 kwanzia tarehe 2022-09-27 kwa kila siku moja. \r\n                    <br> Wiki ya 13: Gramu 13600 kwanzia tarehe 2022-10-05 kwa kila siku moja. \r\n                    <br> Wiki ya 14: Gramu 14800 kwanzia tarehe 2022-10-13 kwa kila siku moja.\r\n                    <br> Wiki ya 15: Gramu 14800 kwanzia tarehe 2022-10-21 kwa kila siku moja.\r\n                    <br> Wiki ya 16: Gramu 16000 kwanzia tarehe 2022-10-29 kwa kila siku moja.\r\n                    <br> Wiki ya 17: Gramu 16400 kwanzia tarehe 2022-11-06 kwa kila siku moja.\r\n                    <br> Wiki ya 18: Gramu 17600 kwanzia tarehe 2022-11-14 kwa kila siku moja.\r\n                '),
(8, 4, '“Layers Phase 1', 'Huu ni umri ambao kuku wanataga kwa kiwango kikubwa sana (85% hadi 100%) \r\n                hali ambayo inawafanya kutumia nguvu nyingi mno, hivyo hupewa chakula hiki kwa ajili ya \r\n                kufidia nguvu ya ziada wanayotumia ili waendelee kutaga kwa kiwango hichohicho.', '2022-10-04', 'Layering', 200, 16, 156, 3, 'Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                    <br> Wiki ya 19: Gramu 18400 kwanzia tarehe 2022-09-03 kwa kila siku moja. \r\n                    <br> Wiki ya 20: Gramu 20400 kwanzia tarehe 2022-09-11 kwa kila siku moja. \r\n                    <br> Wiki ya 21: Gramu 21600 kwanzia tarehe 2022-09-19 kwa kila siku moja. \r\n                    <br> Wiki ya 22: Gramu 22800 kwanzia tarehe 2022-09-27 kwa kila siku moja. \r\n                    <br> Wiki ya 23: Gramu 23200 kwanzia tarehe 2022-10-05 kwa kila siku moja. \r\n                    <br> Wiki ya 24: Gramu 24000 kwanzia tarehe 2022-10-13 kwa kila siku moja.\r\n                    <br> Wiki ya 25 mpaka wiki mwisho: Gramu 26000 kwanzia tarehe 2022-10-21 kwa kila siku moja.\r\n                '),
(9, 5, 'Broiler Pre-Starter', ' Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-06 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum', '2022-07-06', 'Chotara', 200, 8, 4, 0, '  Kiwango na ulishaji wake ni ifuatavyo:-\r\n                            <br> Wiki ya 1: Gramu 4400 Utakuwa Unawapa kwa siku 7, \r\n                            kwanzia tarehe 2022-06-29 kwa kila siku moja. '),
(10, 5, 'Broiler Starter', 'Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, \r\n            hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na \r\n            kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale \r\n            chakula gani bora, hawawezi kutoa mazao bora', '2022-07-26', 'Chotara', 200, 12, 5, 0, 'Kiwango na ulishaji wake ni ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 5400  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe 2022-07-06 kwa kila siku moja. \r\n            '),
(11, 5, 'Broiler Grower', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-08-04', 'Chotara', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe  kwa kila siku moja.'),
(12, 5, 'Broiler Finisher', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-08-19', 'Chotara', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                 <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                 kwanzia tarehe  kwa kila siku moja hadi tarehe 2022-08-22'),
(13, 4, 'Super Starter', ' Super Starter chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                                tarehe 2022-07-15 <br> Chakula hiki kwa ajili ya kuwatengenezea \r\n                                kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                                wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum', '2022-07-15', 'Layering', 200, 10, 7, 0, '  Kiwango na ulishaji wake ni ifuatavyo:-\r\n                                <br> Wiki ya 1: Gramu 2400 kwanzia tarehe 2022-07-01 kwa kila siku moja. \r\n                                <br> Wiki ya 2: Gramu 4400 kwanzia tarehe 2022-07-09 kwa kila siku moja. '),
(14, 4, 'Chick Starter', 'Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, \r\n                hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na \r\n                kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale \r\n                chakula gani bora, hawawezi kutoa mazao bora, lakini kwa kuwapa “Chick Starter” itawapelekea\r\n                kuwa na virutubisho hivyo muhimu.', '2022-08-26', 'Layering', 200, 14, 47, 1, 'Kiwango na ulishaji wake ni ifuatavyo:-\r\n                    <br> Wiki ya 3: Gramu 5400 kwanzia tarehe 2022-07-15 kwa kila siku moja. \r\n                    <br> Wiki ya 4: Gramu 6400 kwanzia tarehe 2022-07-31 kwa kila siku moja. \r\n                    <br> Wiki ya 5: Gramu 7600 kwanzia tarehe 2022-08-08 kwa kila siku moja. \r\n                    <br> Wiki ya 6: Gramu 8400 kwanzia tarehe 2022-08-08 kwa kila siku moja. \r\n                    <br> Wiki ya 7: Gramu 9200 kwanzia tarehe 2022-08-16 kwa kila siku moja. \r\n                    <br> Wiki ya 8: Gramu 10000 kwanzia tarehe 2022-08-24 kwa kila siku moja. \r\n                '),
(15, 4, 'Grower Mash', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-09-03', 'Layering', 200, 40, 143, 3, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                    <br> Wiki ya 9: Gramu 11200 kwanzia tarehe  kwa kila siku moja. \r\n                    <br> Wiki ya 10: Gramu 12400 kwanzia tarehe 2022-09-11 kwa kila siku moja. \r\n                    <br> Wiki ya 11: Gramu 12800 kwanzia tarehe 2022-09-19 kwa kila siku moja. \r\n                    <br> Wiki ya 12: Gramu 13200 kwanzia tarehe 2022-09-27 kwa kila siku moja. \r\n                    <br> Wiki ya 13: Gramu 13600 kwanzia tarehe 2022-10-05 kwa kila siku moja. \r\n                    <br> Wiki ya 14: Gramu 14800 kwanzia tarehe 2022-10-13 kwa kila siku moja.\r\n                    <br> Wiki ya 15: Gramu 14800 kwanzia tarehe 2022-10-21 kwa kila siku moja.\r\n                    <br> Wiki ya 16: Gramu 16000 kwanzia tarehe 2022-10-29 kwa kila siku moja.\r\n                    <br> Wiki ya 17: Gramu 16400 kwanzia tarehe 2022-11-06 kwa kila siku moja.\r\n                    <br> Wiki ya 18: Gramu 17600 kwanzia tarehe 2022-11-14 kwa kila siku moja.\r\n                '),
(16, 4, '“Layers Phase 1', 'Huu ni umri ambao kuku wanataga kwa kiwango kikubwa sana (85% hadi 100%) \r\n                hali ambayo inawafanya kutumia nguvu nyingi mno, hivyo hupewa chakula hiki kwa ajili ya \r\n                kufidia nguvu ya ziada wanayotumia ili waendelee kutaga kwa kiwango hichohicho.', '2022-10-04', 'Layering', 200, 16, 156, 3, 'Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                    <br> Wiki ya 19: Gramu 18400 kwanzia tarehe 2022-09-03 kwa kila siku moja. \r\n                    <br> Wiki ya 20: Gramu 20400 kwanzia tarehe 2022-09-11 kwa kila siku moja. \r\n                    <br> Wiki ya 21: Gramu 21600 kwanzia tarehe 2022-09-19 kwa kila siku moja. \r\n                    <br> Wiki ya 22: Gramu 22800 kwanzia tarehe 2022-09-27 kwa kila siku moja. \r\n                    <br> Wiki ya 23: Gramu 23200 kwanzia tarehe 2022-10-05 kwa kila siku moja. \r\n                    <br> Wiki ya 24: Gramu 24000 kwanzia tarehe 2022-10-13 kwa kila siku moja.\r\n                    <br> Wiki ya 25 mpaka wiki mwisho: Gramu 26000 kwanzia tarehe 2022-10-21 kwa kila siku moja.\r\n                '),
(17, 4, 'Broiler Pre-Starter', ' Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-25 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum', '2022-07-25', 'Brolier', 200, 8, 4, 0, '  Kiwango na ulishaji wake ni ifuatavyo:-\r\n                            <br> Wiki ya 1: Gramu 4400 Utakuwa Unawapa kwa siku 7, \r\n                            kwanzia tarehe 2022-07-18 kwa kila siku moja. '),
(18, 4, 'Broiler Starter', 'Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, \r\n            hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na \r\n            kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale \r\n            chakula gani bora, hawawezi kutoa mazao bora', '2022-08-14', 'Brolier', 200, 12, 5, 0, 'Kiwango na ulishaji wake ni ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 5400  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe 2022-07-25 kwa kila siku moja. \r\n            '),
(19, 4, 'Broiler Grower', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-08-23', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe  kwa kila siku moja. \r\n            '),
(20, 4, 'Broiler Finisher', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-09-07', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                 <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                 kwanzia tarehe  kwa kila siku moja hadi tarehe 2022-09-10'),
(21, 4, 'Broiler Pre-Starter', ' Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-25 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum', '2022-07-25', 'Brolier', 200, 8, 4, 0, '  Kiwango na ulishaji wake ni ifuatavyo:-\r\n                            <br> Wiki ya 1: Gramu 4400 Utakuwa Unawapa kwa siku 7, \r\n                            kwanzia tarehe 2022-07-18 kwa kila siku moja. '),
(22, 4, 'Broiler Starter', 'Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, \r\n            hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na \r\n            kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale \r\n            chakula gani bora, hawawezi kutoa mazao bora', '2022-08-14', 'Brolier', 200, 12, 5, 0, 'Kiwango na ulishaji wake ni ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 5400  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe 2022-07-25 kwa kila siku moja. \r\n            '),
(23, 4, 'Broiler Grower', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-08-23', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe  kwa kila siku moja. \r\n            '),
(24, 4, 'Broiler Finisher', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-09-07', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                 <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                 kwanzia tarehe  kwa kila siku moja hadi tarehe 2022-09-10'),
(25, 4, 'Broiler Pre-Starter', ' Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi\r\n                            tarehe 2022-07-25 <br> Ili kuwatengenezea \r\n                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri \r\n                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum', '2022-07-25', 'Brolier', 200, 8, 4, 0, '  Kiwango na ulishaji wake ni ifuatavyo:-\r\n                            <br> Wiki ya 1: Gramu 4400 Utakuwa Unawapa kwa siku 7, \r\n                            kwanzia tarehe 2022-07-18 kwa kila siku moja. '),
(26, 4, 'Broiler Starter', 'Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, \r\n            hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na \r\n            kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale \r\n            chakula gani bora, hawawezi kutoa mazao bora', '2022-08-14', 'Brolier', 200, 12, 5, 0, 'Kiwango na ulishaji wake ni ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 5400  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe 2022-07-25 kwa kila siku moja. \r\n            '),
(27, 4, 'Broiler Grower', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-08-23', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                kwanzia tarehe  kwa kila siku moja. \r\n            '),
(28, 4, 'Broiler Finisher', 'Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.', '2022-09-07', 'Brolier', 200, 40, 11, 0, ' Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-\r\n                 <br> Wiki ya 3: Gramu 11200  Utakuwa Unawapa kwa siku 7, \r\n                 kwanzia tarehe  kwa kila siku moja hadi tarehe 2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `user_id` int(11) NOT NULL,
  `tarh_arrival` varchar(250) NOT NULL,
  `tarh_depart` varchar(250) NOT NULL,
  `product_qnty` int(11) NOT NULL,
  `product_type` varchar(250) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`user_id`, `tarh_arrival`, `tarh_depart`, `product_qnty`, `product_type`, `product_id`) VALUES
(1, '2022-07-09', '2022-08-06', 200, 'Brolier', 1),
(5, '2022-06-29', '2022-07-27', 200, 'Chotara', 3),
(4, '2022-07-18', '2022-08-15', 200, 'Brolier', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `role` varchar(50) NOT NULL,
  `home_place` varchar(250) NOT NULL,
  `image_location` varchar(250) NOT NULL,
  `reg_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `mobile`, `email`, `password`, `status`, `role`, `home_place`, `image_location`, `reg_time`) VALUES
(1, 'JOSHUA', 'MATEMBA', 625664752, 'Joshuaisaacmt@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'Admin', 'Tabata', '../uploads/users/profile.jpg', '2022-07-08 11:53:05'),
(3, 'DORCUS', 'MATEMBA', 754029956, 'dorcus@gmail.com', '00a809937eddc44521da9521269e75c6', '1', 'Veterian', 'Tabata', '../uploads/users/profile.jpg', '2022-07-08 16:29:18'),
(4, 'PRIINCES', 'MATEMBA', 625664752, 'princess@gmail.com', '00a809937eddc44521da9521269e75c6', '1', 'Mfugaji', 'TABATA', '../uploads/users/profile.jpg', '2022-07-08 20:51:19'),
(5, 'EBENEZA', 'MATEMBA', 625664752, 'ebeneza@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'Mfugaji', 'Tabata', '../uploads/users/profile.jpg', '2022-07-17 05:38:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_info`
--
ALTER TABLE `medical_info`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `med_activity`
--
ALTER TABLE `med_activity`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `my_activity`
--
ALTER TABLE `my_activity`
  ADD PRIMARY KEY (`activity _id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `fname` (`fname`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fname_2` (`fname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_info`
--
ALTER TABLE `medical_info`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `med_activity`
--
ALTER TABLE `med_activity`
  MODIFY `med_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `my_activity`
--
ALTER TABLE `my_activity`
  MODIFY `activity _id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
