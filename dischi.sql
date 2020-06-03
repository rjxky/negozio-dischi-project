-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 03, 2020 alle 19:36
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dischi`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dischi`
--

CREATE TABLE `dischi` (
  `id` int(11) NOT NULL,
  `autore` varchar(32) DEFAULT NULL,
  `titolo` varchar(64) DEFAULT NULL,
  `prezzo` double DEFAULT NULL,
  `anno` int(11) DEFAULT NULL,
  `genre` varchar(64) DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `dischi`
--

INSERT INTO `dischi` (`id`, `autore`, `titolo`, `prezzo`, `anno`, `genre`, `img`) VALUES
(1, 'A$AP Rocky', 'AT.LONG.LAST.A$AP', 18.99, 2015, 'Hip hop, Alternative hip hop', 'https://upload.wikimedia.org/wikipedia/en/a/ab/AtLongLastASAPCover.jpg'),
(2, 'Kendrick Lamar', 'DAMN.', 10.92, 2017, 'Hip hop, West Coast hip hop', 'https://upload.wikimedia.org/wikipedia/en/5/51/Kendrick_Lamar_-_Damn.png'),
(3, 'Kid Cudi', 'Man On The Moon II: The Legend Of Mr. Rager', 19.9, 2010, 'Alternative rock, Alternative hip hop, Neo-psychedelia', 'https://upload.wikimedia.org/wikipedia/en/0/0a/Kidcudimanonthemoonthelegendof.jpg'),
(4, 'Tyler, The Creator', 'IGOR', 19.88, 2019, 'Hip hop, Funk, R&B, Neo soul', 'https://upload.wikimedia.org/wikipedia/en/5/51/Igor_-_Tyler%2C_the_Creator.jpg'),
(5, 'Kanye West', 'The Life Of Pablo', 15.59, 2016, 'Hip hop, Art pop, Gospel', 'https://upload.wikimedia.org/wikipedia/en/4/4d/The_life_of_pablo_alternate.jpg'),
(6, 'Frank Ocean', 'Blonde', 17.19, 2016, 'R&B, Avant-garde soul, psychedelic pop', 'https://upload.wikimedia.org/wikipedia/en/a/a0/Blonde_-_Frank_Ocean.jpeg');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `dischi`
--
ALTER TABLE `dischi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `dischi`
--
ALTER TABLE `dischi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
