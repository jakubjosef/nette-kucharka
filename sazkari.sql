-- Adminer 3.6.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `kola`;
CREATE TABLE `kola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ligy_id` int(11) NOT NULL,
  `nazev` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `zacatek_kola` datetime NOT NULL,
  `konec_kola` datetime NOT NULL,
  `vyplaceno` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_ligy` (`ligy_id`),
  CONSTRAINT `kola_ibfk_1` FOREIGN KEY (`ligy_id`) REFERENCES `ligy` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `kola` (`id`, `ligy_id`, `nazev`, `zacatek_kola`, `konec_kola`, `vyplaceno`) VALUES
(1,	7,	'1. kolo',	'2013-04-20 12:00:00',	'2013-04-26 14:00:00',	1),
(2,	8,	'2. kolo',	'2013-04-28 08:00:00',	'2013-05-02 14:00:00',	1),
(3,	9,	'3. kolo',	'2013-05-02 09:30:00',	'2013-06-06 14:00:00',	0);

DROP TABLE IF EXISTS `ligy`;
CREATE TABLE `ligy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `ligy` (`id`, `nazev`) VALUES
(7,	'1. kolo'),
(8,	'2. kolo'),
(9,	'3. kolo'),
(10,	'4. kolo');

DROP TABLE IF EXISTS `novinky`;
CREATE TABLE `novinky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `novinky` (`id`, `text`, `datetime`) VALUES
(1,	'<p>V prvn&iacute;m kole přid&aacute;n rozhovor s Kozičkou, kter&yacute; se V&aacute;s pokus&iacute; inspirovat sv&yacute;mi rozs&aacute;hl&yacute;mi anal&yacute;zami.&nbsp;</p>',	'2013-05-02 17:59:49'),
(2,	'<p>Do seznamu tip&eacute;rů se dostalo prvn&iacute;ch deset kousků, kteř&iacute; již prozradili sv&eacute; tipy.</p>',	'2013-05-02 18:02:27'),
(3,	'<p>Aktu&aacute;ln&iacute; počet tipuj&iacute;c&iacute;ch je prozat&iacute;m 11. Jako posledn&iacute; poslal sv&eacute; tipy Ot&iacute;k. Již jist&yacute; bank pro prvn&iacute; kolo čin&iacute; 550,-. &nbsp;Uzav&iacute;rka přij&iacute;m&aacute;n&iacute; tipů prvn&iacute;ho kolo je z&iacute;tra 2.1.2012 v 16 hodin.&nbsp;</p>',	'2013-05-02 18:48:58'),
(4,	'<p>Skončil historicky prvn&iacute; z&aacute;pas polick&eacute; tip ligy mezi t&yacute;my Wolves a Chelsea a dopadl přesně dle rady odborn&iacute;ka kola Kozičky, kter&yacute; tipoval v&yacute;hru Chelsea přesně o jednu branku stejně jako dal&scaron;&iacute;ch 8 tip&eacute;rů. V 18:30 zač&iacute;n&aacute; druh&yacute; match, kde se potk&aacute; Fulham a Arsenal. Od 19hodin pak začne dne&scaron;n&iacute; třet&iacute; z&aacute;pas (prvn&iacute; hokejov&yacute;) mezi t&yacute;my Philadelphie a Rangers. Již nyn&iacute; je jasn&eacute;, že &scaron;anci na bank budou m&iacute;t po dne&scaron;ku maxim&aacute;lně dva borci.</p>',	'2013-05-02 18:49:10'),
(5,	'<p>Již posledn&iacute; (třet&iacute;) z&aacute;pas prvn&iacute;ho hrac&iacute;ho dne rozhodl, že ž&aacute;dn&yacute; z 18ti tipuj&iacute;c&iacute;ch nem&aacute; &scaron;anci na bank. Hr&aacute;či Rangers otočili z&aacute;pas s Philadelphi&iacute; a to netipoval naprosto nikdo !!</p>',	'2013-05-02 18:49:39'),
(6,	'<p>Jedn&aacute; se jen o kosmetickou &uacute;pravu, ale přeci. Pro prvn&iacute; čtyři kola byly handicapy vyps&aacute;ny jako odečten&iacute; g&oacute;lů favoritům utk&aacute;n&iacute;. V n&aacute;sleduj&iacute;c&iacute;ch kolech i ve v&yacute;sledc&iacute;ch již odehran&yacute;ch kol se bude handicap naopak přič&iacute;tat outsiderům z&aacute;pasů. Bylo by asi divn&eacute;, kdyby např. Real nedok&aacute;zal vstřelit &nbsp;tři g&oacute;ly v z&aacute;pase s Granadou a v&yacute;sledek z&aacute;pasu by pro na&scaron;e &uacute;čely skončil třeba &nbsp;-1:1&nbsp;<img src=\"http://www005.estranky.cz/system/editor/fckeditor/editor/images/smiley/msn/omg_smile.gif\" alt=\"\" />.</p>',	'2013-05-02 18:50:00'),
(7,	'<p>Skončilo n&aacute;m prvn&iacute; kolo polick&eacute; tip ligy !! Nejv&iacute;ce spr&aacute;vn&yacute;ch tipů nasb&iacute;ral Johny s Tůcou a to čtyři (50%). Průměrn&aacute; &uacute;spě&scaron;nost v&scaron;ech tipuj&iacute;c&iacute;ch pak čin&iacute; 25%. O obt&iacute;žnosti vybran&yacute;ch z&aacute;pasů svědč&iacute; jak fakt, že již po třech odehran&yacute;ch z&aacute;pasech neměl nikdo možnost spr&aacute;vně tipnou v&scaron;ech osm z&aacute;pasů, tak i v&yacute;sledky dvou z&aacute;pasů (Newcastle Utd. - Manchester Utd. resp. Philadelphia Flyers - NY Rangers), kter&eacute; neuhodl vůbec nikdo z 18ti tipuj&iacute;c&iacute;ch !!!</p>',	'2013-05-02 18:50:25'),
(8,	'<p>Do druh&eacute;ho kola polick&eacute; tip ligy se zapoj&iacute; 19 tip&eacute;rů a jedna tip&eacute;rka.</p>\r\n<p>Nov&yacute;mi tv&aacute;řemi jsou Martina (sehnal Kozička) a Pep&iacute;no Cig&aacute;n Martinec !!</p>',	'2013-05-02 18:50:40'),
(9,	'<p>Prvn&iacute; kolo doplněno o tipy Alfonse (t&iacute;mto se mu co nejsrdečněji omlouv&aacute;m) stejně jako pořad&iacute; po prvn&iacute;m kole, druh&eacute; kolo doplněno o tipy v&scaron;ech z&uacute;častněn&yacute;ch - 22 kusů !! Prvn&iacute; z&aacute;pas druh&eacute;ho kola začne 19hodin z&aacute;pasem NHL mezi Bostonem a Vancouverem tedy repr&iacute;zou loňsk&eacute;ho fin&aacute;le, kde se nakonec radovali medvědi. Jak to dopadne nyn&iacute; ?? 16 z 22 tipuj&iacute;c&iacute;ch věř&iacute; opět ve v&yacute;hru dom&aacute;c&iacute;ch medvědů, čtyři borci mysl&iacute;, že z&aacute;pas po z&aacute;kladn&iacute; hrac&iacute; době skonč&iacute; nerozhodně a nov&aacute;ček M&iacute;ra Vojtěch společně s kr&aacute;lem riverů Kozičkou tipuj&iacute; v&yacute;hru kosatek. Již po prvn&iacute;m z&aacute;pase tedy může b&yacute;t ze hry o bank vyřazeno 20 tip&eacute;rů&nbsp;<img src=\"http://www005.estranky.cz/system/editor/fckeditor/editor/images/smiley/msn/tounge_smile.gif\" alt=\"\" />&nbsp;a to by měl Gargamel s Azraelem radost !!</p>\r\n<p>Představen&iacute; třech nov&yacute;ch tv&aacute;ř&iacute; polick&eacute; tip ligy - Pep&iacute;no Cig&aacute;n Martinec, Martina (bliž&scaron;&iacute; info u Kozičky - je k dispozici po-so na obvykl&yacute;ch m&iacute;stech) a M&iacute;ra Vojtěch.</p>',	'2013-05-02 18:50:59'),
(10,	'<p>Po prvn&iacute;m hrac&iacute;m dnu druh&eacute;ho kola, kde byla na programu čtyři utk&aacute;n&iacute; m&aacute; st&aacute;le jeden tipuj&iacute;c&iacute; &scaron;anci na bank !!! Kdo to asi může b&yacute;t ??? Jo jo je to Kozička, kter&yacute; jako jedin&yacute; společně s M&iacute;rou tipovali v&yacute;hru&nbsp;Vancouveru v Bostonu. M&iacute;ra v&scaron;ak již pak ž&aacute;dn&yacute; přesn&yacute; z&aacute;sah na rozd&iacute;l od Kozičky neměl.</p>',	'2013-05-02 18:51:13'),
(11,	'<p>Aktualizov&aacute;ny tipy soutěž&iacute;c&iacute;ch po &uacute;vodn&iacute;ch dvou z&aacute;pasech. Jedin&yacute; &uacute;spě&scaron;n&yacute; borec v bitvě o bank zůstal Vl&aacute;ďa Kudla Kudl&aacute;ček !! &nbsp;</p>',	'2013-05-02 18:51:28'),
(12,	'<p>Po čtyřech odehran&yacute;ch z&aacute;pasech je již jasn&eacute;, že bank nikdo nevybere. Nejl&eacute;pe si vede st&aacute;le Kudla se třemi OK tipy. Z&aacute;pas Liverpoolu se Stoke City netipoval dobře ani jeden soutěž&iacute;c&iacute;.&nbsp;</p>',	'2013-05-02 18:51:40'),
(13,	'<p>Polick&aacute; tip liga přiv&iacute;tala dal&scaron;&iacute;ho tip&eacute;ra, v pořad&iacute; čtyřiadvac&aacute;t&eacute;ho a to Bomb&eacute;ra !!</p>',	'2013-05-02 18:51:55'),
(14,	'<p>Po prvn&iacute;m odehran&eacute;m z&aacute;pase polick&eacute; tip ligy, kde se utkala Borussie M&ouml;nchengladbach a Bayern M&uuml;nchen jsou již ve hře o bank pouze tři &uacute;spě&scaron;n&iacute; tip&eacute;ři - Pato, Martina a kdo jin&yacute; než Kozička. Ostatn&iacute; tipovali přev&aacute;žně v&iacute;těstv&iacute; hostuj&iacute;c&iacute;ho Bayernu, kter&yacute; v&scaron;ak utrpěl por&aacute;žku 3:1.</p>',	'2013-05-02 18:52:10'),
(15,	'<p>P&aacute;t&eacute; kolo doplněno o obs&aacute;hl&eacute; rady odborn&iacute;ka kola, kter&yacute;m je Honza JOHNY Miler !!!</p>',	'2013-05-02 18:52:24'),
(16,	'<p>Dne&scaron;n&iacute; den slav&iacute; sv&eacute; narozeniny jeden z tip&eacute;rů polick&eacute; tip ligy M&iacute;ra Vojtěch !!!</p>\r\n<p>Přejeme v&scaron;e nejlep&scaron;&iacute; !!!</p>',	'2013-05-02 18:52:38'),
(17,	'<p>Aktualizace:</p>\r\n<p>- 6.kolo - doplněno o v&yacute;sledky z&aacute;pasů a tip&eacute;rů - nejl&eacute;pe zvl&aacute;dl kolo se &scaron;esti ok tipy Ruty a vyhoupl se do prvn&iacute; des&iacute;tky tipuj&iacute;c&iacute;ch, kter&yacute;m i nad&aacute;le vl&aacute;dne duo Kozička a Vlč&aacute;k</p>\r\n<p>- bank - aktu&aacute;ln&iacute; bank čin&iacute; 1 380Kč</p>\r\n<p>- tip&eacute;ři - aktualizace pořad&iacute; a zaplacen&yacute;ch č&aacute;stek</p>',	'2013-05-02 18:52:53'),
(18,	'<p>Doplněno osm&eacute; kolo - speci&aacute;l evropsk&eacute; ligy - o rady, kter&eacute; dodal&nbsp;Jiř&iacute; TŮCA&nbsp;Tauc !!</p>\r\n<p>D&aacute;le upozorňuji na nutn&eacute; odevzd&aacute;n&iacute; kol 8 a 10, kter&eacute; se hraj&iacute; během př&iacute;&scaron;t&iacute;ho t&yacute;dne !!!</p>',	'2013-05-02 18:53:09'),
(19,	'<p>Původně jeden&aacute;ct&eacute; kolo bylo přesunuto na kolo dvan&aacute;ct&eacute; a jeden&aacute;ct&yacute;m kolem se stal speci&aacute;l evropsk&eacute; ligy, kter&aacute; se hraje již tento čtvrtek !!!&nbsp;Dvan&aacute;ct&eacute; kolo pak o v&iacute;kendu.</p>\r\n<p>Třin&aacute;ct&eacute; kolo bude speci&aacute;lem extraligy ledn&iacute;ho hokeje, kde se již budou hr&aacute;t z&aacute;pasy předkola play-off - bude vyps&aacute;no hned po dokončen&iacute; z&aacute;kladn&iacute; č&aacute;sti.</p>\r\n<p>D&aacute;le doplněny tipy Zidana za osm&eacute; kolo - t&iacute;mto se mu omlouv&aacute;m ;) a aktualizace pořad&iacute;.</p>',	'2013-05-02 18:53:43'),
(20,	'<p>Jelikož z&aacute;pas Manchester City &nbsp;v &nbsp;FC Porto se hraje již dnes a avizovan&eacute; datum odevzd&aacute;n&iacute; a odehr&aacute;n&iacute; z&aacute;pasů byl čtvrtek, tak bylo utk&aacute;n&iacute; nahrazeno St.Lutych &nbsp;v &nbsp;Wisla Krakow (+1)!!! &nbsp;Těch p&aacute;r lid&iacute; co zat&iacute;m tipy odeslalo informuji.</p>',	'2013-05-02 18:54:04'),
(21,	'<p>- doplněny tipy (co jsem zat&iacute;m dostal) na 15,16 a 18 kolo !!</p>\r\n<p>- vyps&aacute;ny z&aacute;pasy na extra hokejov&eacute; 17t&eacute; kolo - hraje se 12.3. až 14.3. !!</p>',	'2013-05-02 18:54:23'),
(22,	'<p>V&scaron;e aktualizov&aacute;no a vyps&aacute;na dvě kola - jedno v t&yacute;dnu (speci&aacute;l evropsk&eacute; ligy + play-off extraligy) a v&iacute;kendov&eacute; kolo. Bank se n&aacute;m v n&aacute;sleduj&iacute;c&iacute;m kole přehoupne přes hranici 5000 Kč !!</p>',	'2013-05-02 18:54:37'),
(23,	'<p>Opět v&scaron;e doplněno - nyn&iacute; se bude čekat až bude něco kloudn&eacute;ho na vyps&aacute;n&iacute; dal&scaron;&iacute;ch kol.</p>\r\n<p>Nakonec nepostoupil do play-off Ruty, kter&yacute; prohr&aacute;l i d&iacute;ky v&yacute;hře &Scaron;v&eacute;dů s Pep&iacute;nem a Johny, kter&eacute;mu uteklo play-off d&iacute;ky neuznan&eacute; brance Ukrajiny !!! Jinak by se po z&aacute;kladn&iacute; skupině loučil Dauda, kter&yacute; postoupil d&iacute;ky lep&scaron;&iacute;mu sk&oacute;re.</p>\r\n<p>D&aacute;le vyps&aacute;ny dluhy !! Už by s t&iacute;m chtělo něco udělat ať to pak nen&iacute; je&scaron;tě vět&scaron;&iacute; bal&iacute;k (u někter&yacute;ch). Pokud m&aacute;te někdo z&aacute;jem zaplatit převodem dejte vědět a za&scaron;lu č&iacute;slo &uacute;čtu.</p>',	'2013-05-02 18:54:57'),
(24,	'<p>Aktualizov&aacute;no&nbsp;v&scaron;e + vyps&aacute;na tři kola.</p>',	'2013-05-02 18:55:43');

DROP TABLE IF EXISTS `rozpis`;
CREATE TABLE `rozpis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kolo` int(11) NOT NULL,
  `liga` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `pohar` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `rozpis` (`id`, `kolo`, `liga`, `pohar`) VALUES
(1,	1,	'1. kolo',	'-'),
(2,	2,	'2. kolo',	'-'),
(3,	3,	'3. kolo',	'1. kolo (1.z)'),
(4,	4,	'4. kolo',	'-'),
(5,	5,	'5. kolo',	'-'),
(6,	6,	'6. kolo',	'1. kolo (2.z)'),
(7,	7,	'7. kolo',	'-'),
(8,	8,	'8. kolo',	'-'),
(9,	9,	'9. kolo',	'osmifinále (1.z)'),
(10,	10,	'10. kolo',	'-'),
(11,	11,	'osmifinále (1.z)',	'osmifinále (2.z)'),
(12,	12,	'osmifinále (2.z)',	'-'),
(13,	13,	'osmifinále (3.z)',	'čtvrtfinále (1.z)'),
(14,	14,	'čtvrtfinále (1.z)',	'-'),
(15,	15,	'čtvrtfinále (2.z)',	'-'),
(16,	16,	'čtvrtfinále (3.z)',	'čtvrtfinále (2.z)'),
(17,	17,	'semifinále (1.z)',	'-'),
(18,	18,	'semifinále (2.z)',	'-'),
(19,	19,	'semifinále (3.z)',	'semifinále (1.z)'),
(20,	20,	'finále a malé finále (1.z)',	'semifinále (2.z)'),
(21,	21,	'finále a malé finále (2.z)',	'-'),
(22,	22,	'finále a malé finále (3.z)',	'finále a malé finále');

DROP TABLE IF EXISTS `skupiny`;
CREATE TABLE `skupiny` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `skupiny` (`id`, `nazev`) VALUES
(1,	'A1'),
(2,	'A2'),
(3,	'A3'),
(4,	'A4'),
(5,	'A5'),
(6,	'A6'),
(7,	'B1'),
(8,	'B2'),
(9,	'B3'),
(10,	'B4'),
(11,	'B5'),
(12,	'B6'),
(13,	'C1'),
(14,	'C2'),
(15,	'C3'),
(16,	'C4'),
(17,	'C5'),
(18,	'C6'),
(19,	'D1'),
(20,	'D2'),
(21,	'D3'),
(22,	'D4'),
(23,	'D5'),
(24,	'D6');

DROP TABLE IF EXISTS `sporty`;
CREATE TABLE `sporty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `sporty` (`id`, `nazev`) VALUES
(0,	'Fotbal'),
(1,	'Hokej');

DROP TABLE IF EXISTS `tipy`;
CREATE TABLE `tipy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip` varchar(2) COLLATE utf8_czech_ci NOT NULL,
  `timestamp` datetime NOT NULL,
  `uzivatele_id` int(11) NOT NULL,
  `zapasy_id` int(11) NOT NULL,
  `vysledek` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_uzivatele` (`uzivatele_id`),
  KEY `id_zapasu` (`zapasy_id`),
  CONSTRAINT `tipy_ibfk_1` FOREIGN KEY (`uzivatele_id`) REFERENCES `uzivatele` (`id`),
  CONSTRAINT `tipy_ibfk_2` FOREIGN KEY (`zapasy_id`) REFERENCES `zapasy` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `tipy` (`id`, `tip`, `timestamp`, `uzivatele_id`, `zapasy_id`, `vysledek`) VALUES
(30,	'1',	'2013-05-06 23:03:14',	3,	28,	1),
(31,	'2',	'2013-05-06 23:03:22',	3,	29,	2),
(32,	'1',	'2013-05-06 23:03:31',	3,	30,	1),
(33,	'0',	'2013-05-06 23:03:43',	3,	31,	2),
(34,	'0',	'2013-05-06 23:03:52',	3,	32,	2),
(35,	'1',	'2013-05-06 23:04:01',	3,	33,	1),
(36,	'2',	'2013-05-06 23:04:10',	3,	34,	2),
(37,	'0',	'2013-05-06 23:04:19',	3,	35,	2),
(38,	'1',	'2013-05-06 23:04:31',	3,	36,	2),
(39,	'2',	'2013-05-06 23:04:51',	3,	37,	2),
(40,	'1',	'2013-05-06 23:05:02',	3,	38,	1),
(41,	'0',	'2013-05-06 23:05:20',	3,	39,	2),
(42,	'1',	'2013-05-06 23:05:35',	3,	40,	1),
(43,	'0',	'2013-05-06 23:05:47',	3,	41,	2),
(44,	'0',	'2013-05-06 23:06:39',	3,	42,	1),
(45,	'2',	'2013-05-06 23:06:47',	3,	43,	2),
(46,	'1',	'2013-05-06 23:10:42',	1,	28,	1),
(47,	'2',	'2013-05-06 23:10:46',	1,	29,	2),
(48,	'0',	'2013-05-06 23:10:49',	1,	30,	2),
(49,	'1',	'2013-05-06 23:10:52',	1,	31,	1),
(50,	'2',	'2013-05-06 23:10:55',	1,	32,	2),
(51,	'0',	'2013-05-06 23:10:59',	1,	33,	2),
(52,	'1',	'2013-05-06 23:11:02',	1,	34,	1),
(53,	'2',	'2013-05-06 23:11:06',	1,	35,	2),
(54,	'1',	'2013-05-06 23:11:42',	1,	36,	2),
(55,	'2',	'2013-05-06 23:11:46',	1,	37,	2),
(56,	'0',	'2013-05-06 23:11:48',	1,	38,	2),
(57,	'1',	'2013-05-06 23:11:52',	1,	39,	2),
(58,	'2',	'2013-05-06 23:11:56',	1,	40,	2),
(59,	'1',	'2013-05-06 23:11:59',	1,	41,	1),
(60,	'0',	'2013-05-06 23:12:03',	1,	42,	1),
(61,	'1',	'2013-05-06 23:12:07',	1,	43,	2),
(62,	'0',	'2013-05-06 23:14:31',	4,	28,	2),
(63,	'2',	'2013-05-06 23:14:38',	4,	29,	2),
(64,	'2',	'2013-05-06 23:14:58',	4,	30,	2),
(65,	'0',	'2013-05-06 23:15:03',	4,	31,	2),
(66,	'2',	'2013-05-06 23:15:53',	4,	32,	2),
(67,	'0',	'2013-05-06 23:15:59',	4,	33,	2),
(68,	'1',	'2013-05-06 23:16:02',	4,	34,	1),
(69,	'2',	'2013-05-06 23:16:33',	4,	35,	2),
(70,	'1',	'2013-05-06 23:16:38',	4,	36,	2),
(71,	'0',	'2013-05-06 23:16:41',	4,	37,	2),
(72,	'2',	'2013-05-06 23:16:43',	4,	38,	2),
(73,	'1',	'2013-05-06 23:16:46',	4,	39,	2),
(74,	'0',	'2013-05-06 23:16:49',	4,	40,	2),
(75,	'2',	'2013-05-06 23:16:52',	4,	41,	2),
(76,	'1',	'2013-05-06 23:16:55',	4,	42,	2),
(77,	'0',	'2013-05-06 23:17:02',	4,	43,	1),
(78,	'2',	'2013-05-06 23:18:20',	6,	28,	2),
(79,	'0',	'2013-05-06 23:18:23',	6,	29,	2),
(80,	'1',	'2013-05-06 23:18:26',	6,	30,	1),
(81,	'2',	'2013-05-06 23:18:29',	6,	31,	2),
(82,	'2',	'2013-05-06 23:18:32',	6,	32,	2),
(83,	'1',	'2013-05-06 23:18:35',	6,	33,	1),
(84,	'2',	'2013-05-06 23:18:39',	6,	34,	2),
(85,	'0',	'2013-05-06 23:18:46',	6,	35,	2),
(86,	'1',	'2013-05-06 23:19:11',	6,	36,	2),
(87,	'0',	'2013-05-06 23:19:15',	6,	37,	2),
(88,	'0',	'2013-05-06 23:19:17',	6,	38,	2),
(89,	'1',	'2013-05-06 23:19:21',	6,	39,	2),
(90,	'0',	'2013-05-06 23:19:35',	6,	40,	2),
(91,	'1',	'2013-05-06 23:19:40',	6,	41,	1),
(92,	'2',	'2013-05-06 23:19:50',	6,	43,	2),
(93,	'1',	'2013-05-06 23:19:53',	6,	42,	2),
(94,	'2',	'2013-05-06 23:21:53',	2,	28,	2),
(95,	'2',	'2013-05-06 23:21:56',	2,	29,	2),
(96,	'2',	'2013-05-06 23:21:59',	2,	30,	2),
(97,	'2',	'2013-05-06 23:22:02',	2,	31,	2),
(98,	'2',	'2013-05-06 23:22:05',	2,	32,	2),
(99,	'2',	'2013-05-06 23:22:10',	2,	33,	2),
(100,	'2',	'2013-05-06 23:22:20',	2,	34,	2),
(101,	'2',	'2013-05-06 23:22:25',	2,	35,	2),
(102,	'1',	'2013-05-06 23:22:30',	2,	36,	2),
(103,	'1',	'2013-05-06 23:22:42',	2,	37,	1),
(104,	'1',	'2013-05-06 23:22:46',	2,	38,	1),
(105,	'1',	'2013-05-06 23:22:58',	2,	39,	2),
(106,	'1',	'2013-05-06 23:23:01',	2,	40,	1),
(107,	'1',	'2013-05-06 23:23:05',	2,	41,	1),
(108,	'1',	'2013-05-06 23:23:19',	2,	42,	2),
(109,	'1',	'2013-05-06 23:23:24',	2,	43,	2),
(110,	'0',	'2013-05-06 23:24:31',	5,	28,	2),
(111,	'1',	'2013-05-06 23:24:34',	5,	29,	1),
(112,	'2',	'2013-05-06 23:24:38',	5,	30,	2),
(113,	'1',	'2013-05-06 23:24:40',	5,	31,	1),
(114,	'1',	'2013-05-06 23:24:43',	5,	32,	1),
(116,	'1',	'2013-05-06 23:24:47',	5,	33,	1),
(117,	'0',	'2013-05-06 23:24:51',	5,	34,	2),
(118,	'0',	'2013-05-06 23:24:54',	5,	35,	2),
(119,	'1',	'2013-05-06 23:24:56',	5,	36,	2),
(120,	'2',	'2013-05-06 23:25:01',	5,	37,	2),
(121,	'0',	'2013-05-06 23:25:25',	5,	39,	2),
(122,	'2',	'2013-05-06 23:25:28',	5,	40,	2),
(123,	'1',	'2013-05-06 23:25:31',	5,	38,	1),
(124,	'2',	'2013-05-06 23:25:35',	5,	41,	2),
(125,	'1',	'2013-05-06 23:25:38',	5,	42,	2),
(126,	'1',	'2013-05-06 23:25:48',	5,	43,	2);

DROP TABLE IF EXISTS `tymy`;
CREATE TABLE `tymy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sportu` int(11) NOT NULL,
  `nazev` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  `logo` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `tymy` (`id`, `id_sportu`, `nazev`, `logo`) VALUES
(9,	0,	'Wolverhampton',	'wolverhampton.jpeg'),
(10,	0,	'Chelsea',	'chelsea.jpg'),
(11,	0,	'Fulham',	'fulham.jpg'),
(12,	0,	'Arsenal',	'arsenal.jpg'),
(13,	0,	'Manchester City',	'manchester-city.jpg'),
(14,	0,	'Liverpool',	'liverpool.jpg'),
(15,	0,	'Newcastle United',	'newcastle-united.jpg'),
(16,	0,	'Manchester United',	'manchester-united.jp'),
(17,	1,	'Philadelphia Flyers',	'philadelphia-flyers.'),
(18,	1,	'New York Rangers',	'new-york-rangers.jpg'),
(19,	1,	'HC Plzeň 1929',	'hc-plzen-1929.jpg'),
(20,	1,	'HC Sparta Praha',	'hc-sparta-praha.jpg'),
(22,	1,	'Lev Poprad',	'lev-poprad.jpg'),
(23,	1,	'Spartak Moskva',	'spartak-moskva.jpg'),
(24,	1,	'Dallas Stars',	'dallas-stars.jpg'),
(25,	1,	'Detroit Red Wings',	'detroit-red-wings.jp'),
(26,	1,	'HC Třinec',	'hc-trinec.jpg'),
(27,	1,	'HC Pardubice',	'hc-pardubice.jpg'),
(28,	1,	'HC Slavia Praha',	'hc-slavia-praha.jpg'),
(29,	1,	'HC Kometa Brno',	'hc-kometa-brno.jpg'),
(30,	0,	'FC Barcelona',	'fc-barcelona.jpg'),
(31,	0,	'Real Madrid',	'real-madrid.jpg'),
(32,	0,	'Granada',	'granada.jpg'),
(33,	0,	'Malága',	'malaga.jpg'),
(34,	0,	'Atletico Madrid',	'atletico-madrid.jpg'),
(35,	0,	'AC Milán',	'ac-milan.jpg'),
(36,	0,	'Espanyol',	'espanyol.jpg'),
(37,	0,	'Sunderland',	'sunderland.jpg'),
(38,	0,	'Stoke City',	'stoke-city.jpg'),
(39,	0,	'Inter Milán',	'inter-milan.jpg'),
(40,	1,	'HC Bílí Tygři Liberec',	'hc-bili-tygri-libere'),
(41,	0,	'Ajax Amsterdam',	'ajax-amsterdam.jpg'),
(42,	0,	'Bayern Munchen',	'bayern-munchen.jpg'),
(43,	0,	'Juventus',	'juventus.jpg'),
(44,	1,	'HC České Budějovice',	'hc-ceske-budejovice.');

DROP TABLE IF EXISTS `uvod`;
CREATE TABLE `uvod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `uvod` (`id`, `text`, `datum`) VALUES
(1,	'<p>Zdrav&iacute;m v&scaron;echny,</p>\r\n<p>je tu opět n&aacute;pad rozjet starou zn&aacute;mou tip ligu policka. Původn&iacute; verze se zůčastnilo přes dvacet tip&eacute;rů a věř&iacute;m, že i nyn&iacute; to bude podobn&eacute;.</p>\r\n<p style=\"text-align: justify;\">Kdo nestihne prvn&iacute; kolo nijak v&yacute;razně zaost&aacute;vat nebude, Za cel&yacute; rok by mělo proběhnout cca 22 kol.</p>\r\n<p style=\"text-align: justify;\">Aby se netipovalo jen tak, bude stejně jako dř&iacute;ve vklad na jedno kolo tipů 5Kč. Tento vklad se bude d&aacute;vat do banku a pokud někdo spr&aacute;vně uhodne v&scaron;ech 8 z&aacute;pasů bude skoro milion&aacute;ř jak wod Jardy Jegra. Pokud nikdo v&scaron;ech osm z&aacute;pasů neuhodne bude se bank navy&scaron;ovat. V př&iacute;padě, že nebude nikdo tak dobr&yacute; na konci sez&oacute;ny aby urval bank (což je prakticky blbost p&aacute;č bude tipovat snad Kozička nebo Johny a to jsou nějak&yacute; kapacity) uspoř&aacute;d&aacute; se akcička se soudekm piva popř. kusem masa (dle v&yacute;&scaron;e banku) na kter&eacute; se vyhl&aacute;s&iacute; nejlep&scaron;&iacute; tip&eacute;ři a předaj&iacute; poh&aacute;ry za prvn&iacute; až třet&iacute; m&iacute;sto + půlročn&iacute;ho kr&aacute;l.e</p>\r\n<p style=\"text-align: justify;\"><strong>Je&scaron;tě jsme dohodli p&aacute;r pravidel aby to bylo tro&scaron;ku spravedliv&eacute;:</strong></p>\r\n<ol>\r\n<li style=\"text-align: justify;\">tip&eacute;r kter&yacute; uh&aacute;dl v&scaron;ech osm z&aacute;pasů vyhr&aacute;v&aacute; bank pouze v př&iacute;padě, že tipoval (teda dal i vklad) alespoň na polovinu doposud tipovan&yacute;ch kol - tedy pokus někdo tref&iacute; v&scaron;ech osm z&aacute;padů ve 34. kole musel tipovat alespoň v 17. kolech</li>\r\n<li style=\"text-align: justify;\">startovac&iacute; vklad do tip ligi policka bude 100Kč - aby se hned o něco m&aacute;lo hr&aacute;lo</li>\r\n<li style=\"text-align: justify;\">dal&scaron;&iacute; n&aacute;pady, vylep&scaron;en&iacute;, dotazy v&iacute;t&aacute;ny !!</li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><strong>Dal&scaron;&iacute; možnosti jak a kde tipovat:&nbsp;</strong></p>\r\n<ol>\r\n<li>na email: policka-tip-liga@email.cz</li>\r\n<li>sms - na mobil - třeba Alfoj, Bob&scaron;oj nebo Kebemu</li>\r\n<li>zpr&aacute;vou na facebooku (opět Alfa, Bobe&scaron; nebo Kebe)</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">př&iacute;klad odesl&aacute;n&iacute; zpr&aacute;vy: 1.kolo - 0 1 2 2 0 0 1 2</p>\r\n<p style=\"text-align: justify;\"><strong>Handicap:</strong></p>\r\n<p style=\"text-align: justify;\">z důvodu nedostatku m&aacute;lo atraktivn&iacute;ch utk&aacute;n&iacute; je občas použit tip, kde se utk&aacute; favorit s outsiderem, proto je použit tzv. handicap</p>\r\n<p style=\"text-align: justify;\">např. z&aacute;pas prvn&iacute;ho kola&nbsp;</p>\r\n<p style=\"text-align: justify;\">Wolverhampton vs. Chelsea(-1) znamen&aacute;, že na konci z&aacute;pasu bude t&yacute;mu Chelsea odečten jeden g&oacute;l pro potřebu vyhodnocen&iacute; tipu&nbsp;</p>\r\n<p style=\"text-align: justify;\">např. z&aacute;pas re&aacute;lně skonč&iacute; 2:3, ale dle na&scaron;eho zad&aacute;n&iacute; tipu 2:2 tedy rem&iacute;za (X)</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>',	'2013-05-02');

DROP TABLE IF EXISTS `uzivatele`;
CREATE TABLE `uzivatele` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skupiny` int(11) NOT NULL,
  `jmeno` varchar(40) COLLATE utf8_czech_ci DEFAULT NULL,
  `prijmeni` varchar(40) COLLATE utf8_czech_ci DEFAULT NULL,
  `nick` varchar(25) COLLATE utf8_czech_ci NOT NULL,
  `heslo` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  `vek` int(11) DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  `autorizovan` tinyint(4) NOT NULL DEFAULT '1',
  `zustatek` int(11) NOT NULL DEFAULT '0',
  `role` varchar(20) COLLATE utf8_czech_ci NOT NULL DEFAULT '0',
  `fotka` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_skupiny` (`id_skupiny`),
  CONSTRAINT `uzivatele_ibfk_1` FOREIGN KEY (`id_skupiny`) REFERENCES `skupiny` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `uzivatele` (`id`, `id_skupiny`, `jmeno`, `prijmeni`, `nick`, `heslo`, `vek`, `email`, `autorizovan`, `zustatek`, `role`, `fotka`) VALUES
(1,	1,	'Jiří',	'Tauc',	'Tůca',	'44d721c1eea75058e70cd32584155a805e25ba5d',	19,	'userA1@example.com',	1,	-230,	'0',	''),
(2,	2,	'Jakub',	'Hauschke',	'Kebe',	'44d721c1eea75058e70cd32584155a805e25ba5d',	24,	'userA2@example.com',	1,	-50,	'0',	''),
(3,	3,	'Petr',	'Scholz',	'Pítrs',	'44d721c1eea75058e70cd32584155a805e25ba5d',	20,	'scholz.pitrs@gmail.com',	1,	-135,	'1',	'pitrs.jpg'),
(4,	4,	'Ota',	'Scholz',	'Otík',	'44d721c1eea75058e70cd32584155a805e25ba5d',	22,	'userA4@example.com',	1,	-105,	'0',	'otik.jpg'),
(5,	5,	'Negr',	'Negr',	'Negr',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userA5@example.com',	1,	-100,	'0',	''),
(6,	6,	'Aleš',	'Hlávka',	'Zizu',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userA6@example.com',	1,	-95,	'0',	''),
(7,	7,	'David',	'Hauschke',	'Dauda',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userB1@example.com',	1,	0,	'0',	''),
(8,	8,	'Jirka',	'Kollert',	'Šíďa',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userB2@example.com',	1,	0,	'0',	''),
(9,	9,	'Milan',	'Hejnyš',	'Alfa',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userB3@example.com',	1,	0,	'0',	''),
(10,	10,	'Jan',	'Pataki',	'Pato',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userB4@example.com',	1,	0,	'0',	''),
(11,	11,	'Svabik',	'Svabik',	'Švábik',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userB5@example.com',	1,	0,	'0',	''),
(12,	12,	'Gynda',	'Gynda',	'Gynda',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userB6@example.com',	1,	0,	'0',	''),
(13,	13,	'Jan',	'Průša',	'Gogo',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userC1@example.com',	1,	0,	'0',	''),
(14,	14,	'Pacanda',	'Pacanda',	'Pacanda',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userC2@example.com',	1,	0,	'0',	''),
(15,	15,	'Petr',	'Skalický',	'Skalda',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userC3@example.com',	1,	0,	'0',	''),
(16,	16,	'Josef',	'Martinec',	'Pepíno',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userC4@example.com',	1,	0,	'0',	''),
(17,	17,	'Ruty',	'Ruty',	'Ruty',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userC5@example.com',	1,	0,	'0',	''),
(18,	18,	'Adam',	'Adam',	'Adam',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userC6@example.com',	1,	0,	'0',	''),
(19,	19,	'Radim',	'Thér',	'Koza',	'44d721c1eea75058e70cd32584155a805e25ba5d',	28,	'userD1@example.com',	1,	-140,	'0',	''),
(20,	20,	'Ondřej',	'Seidlmann',	'Bobeš',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userD2@example.com',	1,	0,	'1',	''),
(21,	21,	'Tomáš',	'Tomajko',	'Tomajko',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userD3@example.com',	1,	0,	'0',	''),
(22,	22,	'David',	'Kollert',	'Dáda',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userD4@example.com',	1,	0,	'0',	''),
(23,	23,	'Jan',	'Miller',	'Johny',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userD5@example.com',	1,	0,	'0',	''),
(24,	24,	'Vlčák',	'Vlčák',	'Vlčák',	'44d721c1eea75058e70cd32584155a805e25ba5d',	18,	'userD6@example.com',	1,	0,	'0',	'');

DROP TABLE IF EXISTS `zapasy`;
CREATE TABLE `zapasy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kola_id` int(11) NOT NULL,
  `sporty_id` int(11) NOT NULL,
  `domaci_id` int(11) NOT NULL,
  `hoste_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `handicap_domacich` int(11) NOT NULL DEFAULT '0',
  `handicap_hostu` int(11) NOT NULL DEFAULT '0',
  `vysledek_domacich` int(11) NOT NULL DEFAULT '0',
  `vysledek_hostu` int(11) NOT NULL DEFAULT '0',
  `vysledek` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_domacich` (`domaci_id`),
  KEY `id_hostu` (`hoste_id`),
  KEY `id_kola` (`kola_id`),
  KEY `id_sportu` (`sporty_id`),
  CONSTRAINT `zapasy_ibfk_4` FOREIGN KEY (`sporty_id`) REFERENCES `sporty` (`id`),
  CONSTRAINT `zapasy_ibfk_5` FOREIGN KEY (`domaci_id`) REFERENCES `tymy` (`id`),
  CONSTRAINT `zapasy_ibfk_6` FOREIGN KEY (`hoste_id`) REFERENCES `tymy` (`id`),
  CONSTRAINT `zapasy_ibfk_7` FOREIGN KEY (`kola_id`) REFERENCES `kola` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `zapasy` (`id`, `kola_id`, `sporty_id`, `domaci_id`, `hoste_id`, `datum`, `handicap_domacich`, `handicap_hostu`, `vysledek_domacich`, `vysledek_hostu`, `vysledek`) VALUES
(28,	1,	0,	9,	10,	'2013-04-21',	1,	0,	0,	1,	1),
(29,	1,	0,	11,	12,	'2013-04-22',	0,	2,	4,	1,	1),
(30,	1,	0,	13,	14,	'2013-04-21',	0,	0,	2,	1,	1),
(31,	1,	0,	15,	10,	'2013-04-22',	0,	1,	2,	0,	1),
(32,	1,	1,	19,	20,	'2013-04-23',	0,	2,	6,	2,	1),
(33,	1,	1,	26,	27,	'2013-04-22',	2,	0,	0,	1,	1),
(34,	1,	0,	18,	23,	'2013-04-22',	0,	0,	1,	1,	1),
(35,	1,	0,	37,	41,	'2013-04-22',	0,	0,	0,	0,	1),
(36,	2,	0,	16,	9,	'2013-04-29',	0,	0,	1,	2,	0),
(37,	2,	0,	11,	22,	'2013-04-30',	3,	0,	0,	3,	1),
(38,	2,	0,	14,	24,	'2013-04-29',	0,	1,	1,	0,	1),
(39,	2,	0,	15,	22,	'2013-04-30',	0,	0,	0,	3,	2),
(40,	2,	0,	35,	24,	'2013-04-29',	0,	1,	2,	1,	1),
(41,	2,	0,	12,	25,	'2013-04-29',	1,	0,	1,	0,	1),
(42,	2,	1,	44,	40,	'2013-04-29',	0,	2,	1,	0,	0),
(43,	2,	1,	29,	28,	'2013-04-29',	2,	0,	1,	4,	0);

DROP VIEW IF EXISTS `domaci`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `domaci` AS select `tymy`.`id` AS `id`,`tymy`.`id_sportu` AS `id_sportu`,`tymy`.`nazev` AS `nazev`,`tymy`.`logo` AS `logo` from `tymy`;

DROP VIEW IF EXISTS `hoste`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `hoste` AS select `tymy`.`id` AS `id`,`tymy`.`id_sportu` AS `id_sportu`,`tymy`.`nazev` AS `nazev`,`tymy`.`logo` AS `logo` from `tymy`;

-- 2013-05-07 09:10:13
