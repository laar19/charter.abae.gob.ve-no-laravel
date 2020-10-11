/*Base de Datos Mysql*/
CREATE DATABASE charter;
use charter;

CREATE TABLE usuario
(
  username varchar(15) NOT NULL,
  pass varchar (15) NOT NULL,
  CONSTRAINT usuario_pkey PRIMARY KEY (username)
);

INSERT INTO usuario (username , pass) VALUES ('lmeza' , 1234);
INSERT INTO usuario (username , pass) VALUES ('jose' , 1234);
INSERT INTO usuario (username , pass) VALUES ('navegacion' , 2017);


CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(5) AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `fecha` varchar (10) NOT NULL,
   CONSTRAINT id_pkey PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `archivo` (
  `id` int(5) AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `fecha` varchar (10) NOT NULL,
  CONSTRAINT id_pkey PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `xml` (
  `id` int(5) AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `ruta` varchar(150) NOT NULL,
  `fecha` varchar (10) NOT NULL,
  CONSTRAINT id_pkey PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
