-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 01. Apr 2023 um 15:50
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `BE18_CR5_animal_adoption_ChristineWeidhofer`
--
CREATE DATABASE IF NOT EXISTS `BE18_CR5_animal_adoption_ChristineWeidhofer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE18_CR5_animal_adoption_ChristineWeidhofer`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `breed` varchar(55) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `descr` varchar(500) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `location` varchar(55) NOT NULL,
  `vaccinated` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `animals`
--

INSERT INTO `animals` (`id`, `name`, `breed`, `picture`, `descr`, `size`, `age`, `location`, `vaccinated`, `status`) VALUES
(1, 'Louie', 'Cat', 'louie.jpg', 'What a lovely tomcat, calm, kind and a little slow already', 23, 16, 'Wien', 'Yes', 'Available'),
(2, 'Helmut', 'Cat', '6426d929e6ce8.jpg', 'Our lovely senior with a special personality', 24, 15, 'Wien', 'Yes', 'Available'),
(3, 'Aramis', 'Dog', '6426da64ca956.jpg', 'The cuddliest, kindest and most family-friendly dog', 56, 8, 'Wien', 'Yes', 'Available'),
(4, 'Jessie', 'Chihuahua', '64270c9ba745e.jpg', 'Our youngest is looking for a forever home - he is already housebroken :)', 19, 1, 'Wien', 'Yes', 'Available'),
(5, 'Joe', 'Rabbit', '64270dc881122.jpg', 'Our senior bunny is looking for a nice home to spend his old age.', 24, 9, 'Linz', 'Yes', 'Available'),
(6, 'Miss Piggy', 'Guinea Pig', '64270f0405556.jpg', 'Miss Piggy is a family-friendly and high-energy guinea pig - handle with care!', 31, 4, 'Wien', 'Yes', 'Adopted'),
(7, 'Franzi', 'Cat', '6427ec5cc29db.jpg', 'Her owner unfortunately developed allergies. She is playful but also likes to sleep on your lap.', 22, 2, 'Wien', 'Yes', 'Adopted'),
(8, 'Angie', 'Dog', '6427ec730a4b2.jpg', 'A calm and soothing presence, our Angie will be most comfortable in a similar atmosphere.', 42, 4, 'Wien', 'Yes', 'Available'),
(9, 'Moritz', 'Cat', '64282a9849445.jpg', 'Our oldie, but goldie! Such a cuddle buddy!', 22, 12, 'Wien', 'Yes', 'Available');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pet_adoption`
--

CREATE TABLE `pet_adoption` (
  `id` int(11) NOT NULL,
  `adopt_date` date NOT NULL,
  `fk_userID` int(11) NOT NULL,
  `fk_animalID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `pet_adoption`
--

INSERT INTO `pet_adoption` (`id`, `adopt_date`, `fk_userID`, `fk_animalID`) VALUES
(1, '1992-02-03', 6, 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `location` varchar(55) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` varchar(4) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `date_of_birth`, `email`, `phone`, `location`, `picture`, `status`) VALUES
(1, 'Christine', 'Weidhofer', 'd9d13a6c918481d17403a6232ad5ac98ee99910c6704e27c5b857c0a63766446', '1977-08-01', 'xtine@gmx.at', '1234567', 'Wien', 'portrait_comic.png', 'adm'),
(6, 'user', 'one', '1e9d59ad9be1cb302e155d55b61c95b3b3db897da2ed9643b15f8802039ffc8c', '2023-03-04', 'user@one.com', '0680/5678912', 'Linz', '6427e71b64793.jpg', 'user'),
(10, 'admin', 'admin', 'd82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892', '1977-08-01', 'admin@admin.com', '+43/650/9876543', 'Wien', 'avatar.png', 'adm'),
(11, 'user', 'test', '3ad361936ed9ef8d835d745adf24d719186e784ec6fe9a525eeb0045883d5f91', '1981-06-07', 'user@test.com', '0676/4564564', 'Wien', '64270302545b4.jpg', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `pet_adoption`
--
ALTER TABLE `pet_adoption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userID` (`fk_userID`),
  ADD KEY `fk_animalID` (`fk_animalID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `pet_adoption`
--
ALTER TABLE `pet_adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `pet_adoption`
--
ALTER TABLE `pet_adoption`
  ADD CONSTRAINT `pet_adoption_ibfk_1` FOREIGN KEY (`fk_userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pet_adoption_ibfk_2` FOREIGN KEY (`fk_animalID`) REFERENCES `animals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
