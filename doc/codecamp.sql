SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: codecamp
--
DROP DATABASE IF EXISTS codecamp;
CREATE DATABASE IF NOT EXISTS codecamp DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE codecamp;

--
-- Tabel: boeken
--

DROP TABLE IF EXISTS boeken;
CREATE TABLE IF NOT EXISTS boeken (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  author varchar(255) NOT NULL,
  price int(11) DEFAULT NULL,
  pages int(11) DEFAULT NULL,
  description varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


INSERT INTO boeken (title, author, price, pages, description) VALUES
('Spotgaai', 'Suzanne Collins', 12, 369, 'Katniss (17, ik-figuur) is naar District 13 gebracht, het bolwerk van de opstand tegen het Capitool. De rebellen willen dat Katniss de spotgaai wordt, het symbool van de opstand. Maar is ze daar wel tegen opgewassen?'),
('Undercover', 'Eva burgers', 13, 100, 'Bij een overval op een huis is iemand om het leven gekomen. Amy (17) vraagt zich af of haar vriend Ivar, die een crimineel verleden heeft, daarbij betrokken is. Ze zag hem immers uit het huis rennen. Wat moet ze doen, naar de politie gaan of is het daarvoor te laat?'),
('Jacht', 'Cis Meijer', 14, 224, 'Uitgegeven door De Fontein Jeugd, Utrecht in 2020'),
('Gegrijzeld', 'Chinouk Thijssen', 12, 100, 'Het is bijna zomervakantie en Yasmine en Jason (ik-personen) gaan naar het feest van Casper, hun klasgenoot uit 5 vwo. Caspers vader is een bekende advocaat en hij woont in een enorme villa. Het feest verandert in een nachtmerrie als iedereen wordt gegijzeld door een groep gemaskerde gewapende mannen.'),
('Black Friday', 'Maren Stoffels', 13, 224, 'Ris en Megan (18, afwisselend ik-persoon) zijn lid geworden van studentenvereniging Veneris Dies Nigra. Ze twijfelen geen moment om mee te doen aan de ontgroening. Maar de laatste dag van de ontgroeningsweek, de beruchte Black Friday, heeft noodlottige gevolgen.'),
('Apocalyps', 'Marissa Meyer', 11, 534, 'Terwijl de strijd tussen de Rebellen en de Anarchisten fanatieker wordt en de lijn tussen goed en kwaad vager, moet Nova beslissen waar haar loyaliteit ligt.'),
('Challenge', 'Annemarie Bon', 15, 176, 'De vader van Jens (16) is in februari overleden. In de zomer gaat Jens met zijn moeder en broertje naar Spanje. Daar ontmoet hij Frank, Sofie en David, met wie hij alleen verder reist. De vier dagen elkaar uit tot steeds spannender acties.');

--
-- Tabel: users
--

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  user_id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO users (username, password) VALUES
('Axl', 'pass123'),
('Robin', 'pass123');


