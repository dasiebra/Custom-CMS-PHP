-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 11. Aug 2022 um 11:40
-- Server-Version: 5.7.34
-- PHP-Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `forum`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `body` mediumtext NOT NULL,
  `created_at` int(11) NOT NULL,
  `teaser` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `body`, `created_at`, `teaser`, `link`) VALUES
(16, 6, 'Zwei Millionen Kleinstunternehmer kaempfen um ihre Existenz', 'zwei-millionen-kleinstunternehmer-kaempfen-um-ihre-existenz', 'Isabell Nickenig verdient ihren Lebensunterhalt mit einer besonderen Kundschaft: Labradore und Bordeauxdoggen, Britisch-Kurzhaar- und Birma-Katzen. Seit 16 Jahren betreibt Nickenig eine Tierpension in Mülheim-Kärlich nahe Koblenz.\r\n<br>\r\n<br>\r\nAnfang März stand das Geschäft plötzlich still. Kein einziger Hund, keine Katze und keine Rennmaus wurde mehr in ihre Obhut gegeben. Im Corona-Lockdown brauchte niemand einen Tiersitter.\r\n<br>\r\n<br>\r\nNickenig bekam Panik. Dann hörte sie, wie die Bundesminister Olaf Scholz (SPD) und Peter Altmaier (CDU) im Fernsehen gelobten, dass kein Soloselbstständiger in dieser Krise alleingelassen werde. 50 Milliarden Euro spendiere die Bundesregierung, um zu helfen, die Zuschüsse müssten auch nicht zurückgezahlt werden.\r\n<br>\r\n<br>\r\nDrei Tage später beantragte die 46-Jährige Soforthilfe. Und musste feststellen, dass das Versprechen der Regierung so ernst nicht gemeint war. Noch bevor die 4000 Euro Mitte April auf ihrem Konto eintrafen, erfuhr Nickenig, dass sie das Geld eigentlich nicht anrühren dürfte – weil es nicht als Hilfe zum Lebensunterhalt gedacht war, sondern bloß für die Betriebskosten. \"Was bleibt, ist grenzenlose Enttäuschung und Wut\", sagt Nickenig.\r\n<br>\r\n<br>\r\nDie Bundesregierung hat in den vergangenen Monaten Millionen Beschäftigte vor der Arbeitslosigkeit gerettet, Konzerne vor der Pleite bewahrt und den Umsatz von Einzelhändlern angekurbelt. Viele Soloselbstständige – Ladenbesitzer, Dienstleister, Künstler und andere Freiberufler – fielen dagegen durch das Rettungsnetz.\r\n<br>\r\n<br>\r\nDer Koalition mangelte es nicht am Willen, Geld auszugeben. Vielmehr überließ sie die Kleinstunternehmer der Wirrnis aus föderaler Verwaltung, unklarer Rechtslage und bürokratischem Dschungel. Wer sich darin zurechtfand oder einfach Glück hatte, bekam Hilfe. Alle anderen stehen vor den Trümmern ihrer Existenz.', 1660061660, 'Während der Staat Konzerne vor der Pleite rettet, fallen viele Freiberufler und Soloselbstständige durchs Raster. Doch die Regierung bleibt stur bei ihrem Konzept.', 'https://www.spiegel.de/wirtschaft/corona-hilfen-zwei-millionen-solo-selbststaendige-kaempfen-um-ihre-existenz-a-00000000-0002-0001-0000-000173324629'),
(17, 6, 'Der Purist unter den deutschen Baeckern Das Erfolgsrezept von Max Kugel aus Bonn', 'der-purist-unter-den-deutschen-baeckern-das-erfolgsrezept-von-max-kugel-aus-bonn', 'Bonn -\r\nBei Max Kugel beginnt das Storytelling morgens um 4.30 Uhr. Dann steht er in der Backstube – stets mit Baseballmütze auf dem Kopf. Sein Handy hat der 29-Jährige fast immer dabei. Er filmt sich, wie er Brot-Teig knetet, den Ofen einstellt oder dampfende Brote zum Auskühlen auf ein langes Holzbrett räumt.', 1660062223, 'Bäckermeister Max Kugel geht konsequent einen puristischen Weg in seinem Handwerk. In seinem Laden in der Bonner Südstadt gibt es genau zehn Brotsorten. Das war\'s. Kugel ist sehr aktiv auf Instagram und Facebook und wirbt dort für sich und für das Bäckerhandwerk insgesamt. Ein Porträt.', 'https://www.rundschau-online.de/news/wirtschaft/der--purist--unter-den-deutschen-baeckern-das-erfolgsrezept-von-max-kugel-aus-bonn---37383418?cb=1660062105535&'),
(18, 6, 'Scholz will Firmen für Corona Umsatzausfaelle entschaedigen', 'scholz-will-firmen-für-corona-umsatzausfaelle-entschaedigen', 'Bundesfinanzminister Olaf Scholz erwägt Entschädigungen für die Umsatzausfälle der von den Corona-Einschränkungen betroffenen Unternehmen in Milliardenhöhe. Das berichtet die Nachrichtenagentur Reuters unter Berufung auf drei mit der Sache vertraute Quellen.\r\n<br><br>\r\nIn den laufenden Beratungen von Bund und Ländern soll Scholz demnach vorgeschlagen haben, kleineren Betrieben bis zu 75 Prozent ihrer Umsätze im Vergleich zum Vorjahresmonat zu ersetzen. Größere Betriebe sollten bis zu 70 Prozent erhalten. Ein Teilnehmer zitierte den SPD-Politiker laut Reuters mit den Worten: \"Die Lage ist sehr, sehr ernst. Wir brauchen tiefgreifende Maßnahmen, die wir finanziell abfedern müssen.\"\r\n<br><br>\r\n\r\nVideoschalte mit der Kanzlerin läuft noch\r\nZuvor hatte die \"Bild\"-Zeitung  über die Pläne berichtet. Demnach solle es keine besonderen Nachweispflichten geben. Die Kosten habe Scholz auf sieben bis zehn Milliarden Euro für vier Wochen beziffert. Reuters spricht von bis zu zehn Milliarden Euro. Das \"Handelsblatt \" berichtete, als Grundlage für die Berechnung könnte Umsatz im Vorjahr herangezogen werden, bereits gewährte Hilfen sollten abgezogen werden.\r\n<br><br>\r\n\r\nDurch die Hilfen könnte sich die Neuverschuldung des Bundes erneut auf \"weit über 100 Milliarden Euro\" summieren, 2021 sollen es aktuell 96 Milliarden Euro sein. 2020 machte der Bund bereits 218 Milliarden Euro neue Schulden . Ein dritter Nachtragshaushalt sei in diesem Jahr aber nicht notwendig, hieß es der Zeitung zufolge. Die Mittel für die Nothilfen könnten aus dem bereits existierenden Topf für Überbrückungshilfen stammen. Von den dafür vorgesehen 25 Milliarden Euro sind bislang erst rund zwei Milliarden Euro abgerufen.\r\n<br><br>\r\n\r\nDer Bund hat den Ministerpräsidenten umfangreiche Schließungen etwa von Gastronomie und Freizeiteinrichtungen im November vorgeschlagen, um die stark steigenden Zahlen von Corona-Infektionen einzudämmen. Derzeit verhandeln Kanzlerin Angela Merkel und die 16 Ministerpräsidenten per Videokonferenz.', 1660062411, '\"Die Lage ist sehr ernst\": Finanzminister Scholz will in der Coronakrise zu drastischen Maßnahmen greifen - und Betrieben Umsatzausfälle umfassend erstatten, womöglich sogar ohne besondere Nachweispflichten.', 'https://www.spiegel.de/wirtschaft/soziales/scholz-will-offenbar-unternehmen-fuer-corona-umsatzausfaelle-entschaedigen-a-83151533-3c47-4fad-9b1e-991151ef2abe'),
(19, 7, 'Im Tal der Gutgelaunten', 'im-tal-der-gutgelaunten', 'Wenn Roland Kaiser in Dresden seine Lieder singt, geschieht etwas Bezauberndes. Man kann es am besten an Marco beobachten. Er ist ein kräftiger Typ, auf den ersten Blick angsteinflößend, wirklich ein Schrank. Aber wenn die Musik läuft, wird aus dem wuchtigen, ernst guckenden Mann ein zärtliches Geschöpf.... Weiterlesen auf ZEIT.de', 1660126737, 'Dresden und Roland Kaiser: Das ist Liebe. Warum der Schlagersänger hier so erfolgreich ist – und sich immer wieder politisch äußert ', 'https://www.zeit.de/2022/32/dresden-roland-kaiser-schlager-musik-sachsen?utm_referrer=https%3A%2F%2Fwww.google.com%2F'),
(20, 7, 'Wie ein grosses Museum', 'wie-ein-grosses-museum', 'Mit dem Sozialismus verbinden viele, die ihn erlebt haben, nicht unbedingt Ästhetik, geschweige denn Schönheit. Und doch war die DDR ein Land der Kunst. Vielleicht auch deshalb, weil die oft gleichförmige Architektur, die hier entstand, besonders nach Highlights, nach Ablenkung rief. Wandbilder, Skulpturen und Mosaiken finden sich quasi überall in Ostdeutschland, für jeden sichtbar. Wir haben 50 empfehlenswerte Orte ausgewählt. Es gäbe noch viele weitere zu nennen, die Liste muss unvollständig bleiben. Und weil der Osten mehr ist als seine DDR-Vergangenheit, sind einige der aufgeführten Arbeiten auch jünger oder älter als dieses Land.\r\n<br><br>\r\nGörlitz: Man muss hartnäckig suchen, dann findet man es, auf der Rückseite einer ehemaligen Schule in einer Siedlung aus den Fünfzigern: ein Frühwerk von Gerhard Richter, einem der wohl berühmtesten Künstler der Welt. Richter war in der DDR aufgewachsen, ehe er 1961 in den Westen ging. Das Wandbild zeigt eine Sonnenuhr und eine stilisierte Landkarte der Städte Görlitz und Zgorzelec. Es handelt sich um eine Auftragsarbeit aus den Jahren 1956/57. Richter hat sich noch nicht öffentlich zum erst in diesem Jahr wiederentdeckten Werk geäußert. Bekannt ist nur, dass er sich von seinen frühen Arbeiten distanziert. Die Sonnenuhr sei für sein Œuvre unbedeutend, hieß es seitens des Richter-Archivs. Und doch erzählt sie einen Teil seiner Biografie.\r\nKarl-Marx-Str. 13, 02827 Görlitz\r\n<br><br>\r\nChemnitz: Das vermutlich höchste Kunstwerk der Welt steht auf dem Gelände des Heizkraftwerks Chemnitz-Nord und ist ein Schornstein. 2012 hat ihn der Konzeptkünstler Daniel Buren neu gestaltet. Buren macht sich einen Spaß daraus, Farben alphabetisch zu ordnen. Der 302 Meter hohe Schornstein trägt etwa die Farben Aquamarin, Signalviolett und Verkehrsgelb und wird nachts beleuchtet.\r\nBlankenburgstraße 2, 09111 Chemnitz', 1660127022, 'Der Osten ist voller Kunst – für jeden sichtbar und trotzdem oft übersehen. 50 Empfehlungen', 'https://www.zeit.de/2022/24/kunst-ostdeutschland-architektur-ddr'),
(21, 7, 'Dafuer interessiert sich doch niemand haben sie gesagt', 'dafuer-interessiert-sich-doch-niemand-haben-sie-gesagt', 'Der Fotograf Martin Maleschka dokumentiert Garagen als letztes Original der DDR-Architektur in einem \"Garagenmanifest\".', 1660127208, 'Viele halten Garagen für unspektakulär bis hässlich. Nicht so der Fotograf Martin Maleschka. Er dokumentiert sie als letztes unberührtes Original der DDR-Architektur und als Zeugnis ostdeutscher Alltagsgeschichte.', 'https://www.zeit.de/2022/21/das-garagenmanifest-martin-maleschka-fotografie-ddr'),
(22, 8, 'Meine Oma ist dein Job', 'meine-oma-ist-dein-job', 'Weil die reservierte Dame schläft, kann Nino Tsulaia eine Pause machen. Sie durchquert den Kurpark einer Kleinstadt in Hessen, vorbei an Springbrunnen und Blumenbeeten, die wie Frotteeteppiche auf Hügeln liegen, und Gesprächsfetzen auf Deutsch. Nur eine Stunde hat sie Zeit, so viel weiss Tsulaia mittlerweile, dann wacht die 86-Jährige aus ihrem Mittagsschlaf auf. Von der Parkbank auf der Anhöhe hat sie einen guten Blick auf den Schwanenteich. Es könnte ein schöner Arbeitstag sein, wenn er denn auch ein Ende hätte. \r\n<br><br>\r\n«Alle Tage sind gleich», sagt Tsulaia, die eigentlich anders heisst. Sie und auch alle Mitglieder ihrer Familie müssen für diese Geschichte andere Namen annehmen, weil Nino Tsulaia über eine Arbeit spricht, die unter fragwürdigen Bedingungen und weitgehend im Verborgenen abgewickelt wird. Von Agenturen und Vermittlern irgendwo in Osteuropa organisiert und gesteuert. Dass sie über ihre Erfahrungen redet, kann sie teuer zu stehen kommen. Denn zum Teil war Tsulaia während ihrer bisherigen Zeit in Deutschland weder angemeldet noch sozialversichert. Sie ist Teil eines Systems, in dem sich auch deutsche Familien und polnische Vermittlungsagenturen strafbar machen könnten.', 1660127900, 'Pflegerinnen aus Osteuropa arbeiten für wenig Geld rund um die Uhr.', 'https://reportagen.com/reportage/meine-oma-ist-dein-job/'),
(23, 8, 'Agentur fuer Ausbeutung', 'agentur-fuer-ausbeutung', 'Wenn Maria Adamovich in ihre Heimatstadt in der Westukraine zurückkehrt, ihre 12-jährige Tochter umarmt und die Einzimmerwohnung aufräumt, dann fühlt sie sich wieder wie ein Mensch. Drei Monate lang kam sie sich allzu oft wie ein Zombie vor. Jetzt sitzt die blonde 43-jährige daheim und erzählt: Von ihren Jobs in Deutschland, von alten, kranken und verwirrten Menschen, von Tagen, an denen die einzigen freien Minuten die Zeit war, in der sie mit dem Fahrrad zum Einkaufen fuhr. \r\n<br><br>\r\nMal arbeitete Adamovich in Bayern, mal in Norddeutschland, immer Tag und Nacht. Wecken, waschen, kochen, füttern, spazieren gehen, putzen, einkaufen, nachts beruhigen und tagsüber beschäftigen. Vierundzwanzig Stunden Betreuung kaufen Angehörige von schwer pflegebedürftigen Menschen, wenn sie Adamovich buchen. Immer für ein Vierteljahr. So lange darf sich die Ukrainierin hierzulande aufhalten. \r\n<br><br>\r\nVon mehr als vier Millionen Pflegebedürftigen in Deutschland werden 80 Prozent zu Hause versorgt, viele von ihnen von Betreuungskräften wie Maria Adamovich. Mindestens 300.000 solche Betreuerinnen sollen hierzulande arbeiten, wird geschätzt. Sie fangen auf, was Angehörige nicht leisten können und was über einen deutschen Pflegedienst unbezahlbar wäre. Ohne sie würde in vielen Familien der Alltag zusammenbrechen. Die Nachfrage ist deshalb riesig, die gesetzlichen Regelungen sind schwach. So ist ein undurchsichtiges Dickicht an polnischen und deutschen Agenturen gewachsen, die Betreuerinnen wie Adamovich meist aus osteuropäischen Ländern in deutsche Familien vermitteln. Die Frauen arbeiten fast immer illegal, oft unter ausbeuterischen Bedingungen. So auch Maria Adamovich. Deshalb ist ihr Name geändert.', 1660128039, 'Millionen alter Leute brauchen Pflege rund um die Uhr. Das ist teuer. Zweifelhafte Agenturen vermitteln billige Betreuungskräfte.', 'https://www.zeit.de/arbeit/2021-09/pflegekraefte-ukraine-ausbeutung-agentur-vermittlung-pflegenotstand-legalitaet-arbeitsrecht'),
(24, 8, 'Ueber der Grenze', 'ueber-der-grenze', 'Nour Said kann nicht mehr. Es ist der 18. Juni 2020, und er treibt  irgendwo im Mittelmeer zwischen Italien und Libyen. Mittlerweile gibt es  kein Trink­wasser, kein Essen und kein Benzin mehr. Und der Wind wird  immer stärker, die Wellen werden immer höher.\r\n<br><br>\r\nVor 30 Stunden hat Said mit über einem Dutzend weiterer Menschen ein  kleines Boot bestiegen. Seither kleben sie dicht aneinander. Bereits am  ersten Tag fiel mehrmals der Motor aus. Der Kapitän verlor die  Orientierung, er ist kein richtiger Seemann. Die Nacht verbrachten sie  auf hoher See. Jetzt legt Said den Kopf in den Nacken und schaut in den  Himmel. Er entdeckt ein Flugzeug, das über ihnen kreist. Hoffnung, denkt  er.\r\n<br><br>\r\nDoch das Flugzeug wird Nour Said und die anderen nicht retten. Nur  mit viel Glück überlebt er und kann er heute seine Geschichte erzählen.  Sie beginnt so: \"Mein Name ist Nour Said, ich bin 30 Jahre alt. Ich habe  12 Jahre in Libyen gelebt. Ich habe viel Geld ausgegeben und bin vor  dem Tod weggelaufen.\"\r\n<br><br>\r\nNour Said, der ursprünglich aus Ägypten kommt und zu seinem Schutz  einen anderen Namen trägt, ist einer von über 53\'000 Menschen, die laut  der Inter­nationalen Organisation für Migration (IOM) im vergangenen  Jahr versucht haben, über das zentrale Mittel­meer nach Europa zu  gelangen. Das wird immer schwieriger.\r\n<br><br>\r\nSaid gehört auch zu jenen etwa 16\'800 Menschen, die 2020 an der  Überfahrt aus Nordafrika in Richtung Europa scheiterten. Und die kleine,  viersitzige Propeller­maschine, die über den Schiff­brüchigen kreiste,  hat damit zu tun. \r\n<br><br>\r\n Warum kam keine Rettung?\r\n<br><br>\r\nDie Geschichte von Nour Said ist nicht nur die Geschichte einer  gescheiterten Flucht von Libyen nach Europa. Sie ist auch ein Beleg für  eine neue Taktik der EU, von ihren Mitglieds­staaten am Mittel­meer und  von Frontex, der Europäischen Agentur für die Grenz- und Küsten­wache,  den Menschen die Flucht nach Europa möglichst zu verunmöglichen - und  das angeblich legal.\r\n<br><br>\r\nTatsächlich?', 1660128286, 'Europa setzt im Mittelmeer zur Abwehr von Migranten auf eine neue Taktik: Flugzeuge statt Rettungs­schiffe. Recherchen der Republik legen das verdeckte Zusammenspiel des EU-Grenz­schutzes mit der libyschen Küstenwache offen. Eine Geschichte über kaltes Kalkül und Geflüchtete in Lebensgefahr.', 'https://www.republik.ch/2021/04/10/ueber-der-grenze');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `post_images`
--

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `filename` varchar(64) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `filename`, `created_at`) VALUES
(15, 16, '7f3f5b7b1025a5278d9b7c9f14c8fec5.jpg', 1660061660),
(16, 17, '7854dc2f320e2018751dde1a1540646b.jpeg', 1660062223),
(17, 18, 'a17bbb3e6ffa00f92b8160f559ee3ebd.webp', 1660062411),
(18, 19, '7492b609cf2a973dd4c1a160be0a1c8a.webp', 1660126737),
(19, 20, 'c6745cb45f63600df3a2a29fad994cd2.webp', 1660127022),
(20, 21, '5d3c9619d620e4904501650cf95917e9.webp', 1660127208),
(21, 22, 'cf0afd269e89aa435b11c05e6ed35cb3.jpeg', 1660127900),
(22, 23, '8129b4551e4a260f734db35a4a26bed5.png', 1660128039),
(23, 24, '6db0145db016cf8a097d4f9b7f4aae88.jpg', 1660128286);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(124) NOT NULL,
  `password` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(6, 'Till', 'Übelacker', 'till.uebelacker@gmail.com', '$2y$10$HxhtbSTMLf4c8GpUJ7/9PO27XcfH4GlshIQjaCainc0z2cTzn8Jg.'),
(7, 'August', 'Modersohn', 'august.modersohn@fantasymail.com', '$2y$10$9LEq0fGkt5FBEw4E.ELSPuAggxMRU8PNu/mat68AigMgBvzG78UEu'),
(8, 'Ann', 'Esswein', 'ann.esswein@mail.com', '$2y$10$h8kn7y4x177ea9lA9aSqwuQ2E6lSqjoOaB9uxSubAbXrGO2Io0EkW'),
(9, 'Eser', 'Aktay', 'eser.aktay@mail.com', '$2y$10$EPro0.HBy4XhiS6INDSbZu.nLKkPBbi8nFFtCd7Bwx6KcZ9PEANa6');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_ibfk_1` (`user_id`);

--
-- Indizes für die Tabelle `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_images_ibfk_1` (`post_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT für Tabelle `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
