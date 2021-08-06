-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Ago 02, 2021 alle 10:50
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robertodegaetano`
--
CREATE DATABASE IF NOT EXISTS `robertodegaetano` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `robertodegaetano`;

-- --------------------------------------------------------

--
-- Struttura della tabella `curriculum`
--

DROP TABLE IF EXISTS `curriculum`;
CREATE TABLE `curriculum` (
  `id` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `period` varchar(100) NOT NULL,
  `detail` text DEFAULT NULL,
  `modDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `curriculum`
--

INSERT INTO `curriculum` (`id`, `qualification`, `company`, `period`, `detail`, `modDate`) VALUES
(1, 'Software support & helpdesk manager', 'Grafiche Quirici S.r.l. - Barasso (VA)', 'Aprile 2007 – Aprile 2008', 'Manutenzione e assistenza applicativo web per la gestione di ordinazioni per conto di clienti quali Whirlpool, Usag, Gessi ed affini', '2021-08-02 08:48:16'),
(2, 'Web developer', 'Malpensa Web Network S.r.l. - Gallarate (VA)', 'Aprile 2008 – Agosto 2008', 'Web developer, realizzazione siti web aziendali.', '2021-08-02 08:48:16'),
(3, 'Web developer in proprio', 'Web developer in proprio', 'Agosto 2008 – Giugno 2010', 'Gestione di attività di web developer freelance, realizzazione di siti web, restyling di siti internet esistenti, assistenza informatica hardware/software PC, consulenza informatica.', '2021-08-02 08:48:16'),
(4, 'Web developer', 'Lutech S.p.A. - Brugherio (MB)', 'Giugno 2010 – Dicembre 2011', 'Sviluppo di applicazioni web di grosse dimensioni su commissione di clienti quali Telecom, Vodafone, Fastweb. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi richiesti dal cliente, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax. Sviluppo reportistica. Analisi esigenze del cliente, studio di fattibilità e testing dell’applicazione realizzata.', '2021-08-02 08:48:16'),
(5, 'Web developer', 'Mobile Solutions S.r.l. - Gallarate (VA)', 'Gennaio 2012 – Dicembre 2012', 'Sviluppo di applicazioni web di grosse dimensioni su commissione di clienti quali Enel ed affini, creazione e personalizzazione di funzionalità interne a sistemi richiesti dal cliente, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax. Sviluppo reportistica. Analisi esigenze del cliente, studio di fattibilità e testing dell’applicazione realizzata. Utilizzo framework Smarty.', '2021-08-02 08:48:16'),
(6, 'Web developer', 'Reggiani S.p.A. - Varese', 'Gennaio 2013 – Agosto 2013', 'Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi gestionali aziendali, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax, strutturazione progetti secondo pattern architetturale MVC, utilizzo DBMS Mysql, Oracle, MSSQL. Uso di framework HTML5/Javascript Kendo UI basato su architettura Smarty.Sviluppo di applicazioni web di grosse dimensioni su commissione di clienti quali Usag ed affini, creazione e personalizzazione di funzionalità interne a sistemi richiesti dal cliente, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax. Utilizzo framework CakePHP.', '2021-08-02 08:48:16'),
(7, 'Web developer', 'Orobianco S.r.l. - Gallarate (VA)', 'Settembre 2013 – Agosto 2015', 'Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi gestionali aziendali, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax, strutturazione progetti secondo pattern architetturale MVC, utilizzo DBMS Mysql, Oracle, MSSQL. Uso di framework HTML5/Javascript Kendo UI basato su architettura Smarty.', '2021-08-02 08:48:16'),
(8, 'Web developer', 'Cidiverte S.p.A. - Gallarate (VA)', 'Novembre 2015 – Aprile 2019', 'Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi gestionali aziendali, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax, strutturazione progetti secondo pattern architetturale MVC, utilizzo DBMS Mysql, Oracle, MSSQL. Uso di framework HTML5/Javascript Kendo UI basato su architettura Smarty.', '2021-08-02 08:48:16'),
(9, 'PHP senior developer', 'Ebay S.p.A. - Milano (MI)', 'Maggio 2019 - Aprile 2021', 'Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a siti web aziendali, programmazione in PHP7, Javascript, utilizzo DBMS (MySql), versioning file system (Git), metodologie di sviluppo Agile(Jira), Continuous Integration and Delivery approach(Jenkins).', '2021-08-02 08:48:16'),
(10, 'PHP senior developer', 'CapGemini Engineering S.p.A. - Milano (MI)', 'Aprile 2021 - Attuale', 'Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a siti web aziendali, programmazione in PHP7, Javascript, ExtJs, utilizzo DBMS (MySql), versioning file system (Git).', '2021-08-02 08:48:16');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
