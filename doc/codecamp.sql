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
('Dolfje Weerwolfje', 'Logan Paul', 12, 120, 'goed boek bro'),
('Undercover', 'Eva burgers', 13, 100, 'Bij een overval op een huis is iemand om het leven gekomen. Amy (17) vraagt zich af of haar vriend Ivar, die een crimineel verleden heeft, daarbij betrokken is. Ze zag hem immers uit het huis rennen. Wat moet ze doen, naar de politie gaan of is het daarvoor te laat?');

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


