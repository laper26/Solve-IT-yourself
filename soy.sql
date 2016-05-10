-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Apr 2016 um 09:51
-- Server-Version: 10.1.10-MariaDB
-- PHP-Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `soy`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `soy_table`
--

CREATE TABLE `soy_table` (
  `ID` int(11) NOT NULL,
  `soy_data` text NOT NULL,
  `soy_titel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `soy_table`
--

INSERT INTO `soy_table` (`ID`, `soy_data`, `soy_titel`) VALUES
(1, '<?xml version="1.0" encoding="UTF-8"?>\r\n<!-- example from https://github.com/hungrymedia/interactive-decision-tree, MIT-License: http://wph.mit-license.org/ -->\r\n<tree>\r\n    <title>Test Tree</title>\r\n    <description>A simple test decision tree involving cuisine choices.</description>\r\n    <branch id="1">\r\n        <content>Do you eat meat?</content>\r\n        <fork target="1.1">Yes</fork>\r\n        <fork target="1.2">No</fork>\r\n    </branch>\r\n    <branch id="1.1">\r\n        <content>Do you like red meat?</content>\r\n        <fork target="1.1.1">Affirmative</fork>\r\n        <fork target="1.1.2">Negative</fork>\r\n    </branch>\r\n    <branch id="1.2">\r\n        <content>Do you like faux-meat?</content>\r\n        <fork target="1.2.1">Yes</fork>\r\n        <fork target="1.2.2">No</fork>\r\n        <fork target="1.2.3">What is that?</fork>\r\n    </branch>\r\n    <branch id="1.1.1">\r\n        <content>How about a burger?</content>\r\n        <fork target="1.1.1.1">Yes</fork>\r\n        <fork target="1.1.1.2">No</fork>\r\n    </branch>\r\n    <branch id="1.1.2">\r\n        <content>How about some fish?</content>\r\n        <fork target="1.1.2.1">Google it</fork>\r\n        <fork target="1.1.2.2">Some Answer</fork>\r\n    </branch>\r\n    <branch id="1.2.1">\r\n        <content>How about a veggie burger?</content>\r\n    </branch>\r\n    <branch id="1.2.2">\r\n        <content>How about a salad?</content>\r\n        <fork target="1.2.2.1">Yes</fork>\r\n        <fork target="1.2.2.2">No</fork>\r\n    </branch>\r\n    <branch id="1.1.1.1">\r\n        <content>Enjoy</content>\r\n    </branch>\r\n    <branch id="1.1.1.2">\r\n        <content>Eat a steak then.</content>\r\n    </branch>\r\n    <branch id="1.2.2.1">\r\n        <content>Enjoy</content>\r\n    </branch>\r\n    <branch id="1.2.2.2">\r\n        <content>There''s no pleasing you!</content>\r\n    </branch>\r\n    <branch id="1.2.3">\r\n        <content>Perhaps &lt;a href="http://en.wikipedia.org/wiki/Tofu"&gt;Tofu&lt;/a&gt;</content>\r\n    </branch>\r\n    <branch id="1.1.2.1">\r\n        <content>https://google.com</content>\r\n    </branch>\r\n    <branch id="1.1.2.2">\r\n        <content>Link to a solution</content>\r\n    </branch>\r\n</tree>', 'xml_food');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `soy_table`
--
ALTER TABLE `soy_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `soy_table`
--
ALTER TABLE `soy_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
