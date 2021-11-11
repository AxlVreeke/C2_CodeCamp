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
  description varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


INSERT INTO boeken (title, author, price, description) VALUES
('Dolfje Weerwolfje', 'Logan Paul', 12, 'goed boek bro');


