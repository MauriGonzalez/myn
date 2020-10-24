
CREATE DATABASE IF NOT EXISTS `myndb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myndb`;






/*----------------PRODUCTOS-------------------------------------------*/
CREATE TABLE productos (

  `prodID`      tinyint(2)  AUTO_INCREMENT NOT NULL ,
  `prodNombre`  varchar(45)         NOT NULL ,
  `tipoID`      tinyint(2) unsigned NOT NULL ,
  `talleID`     tinyint(2) unsigned NOT NULL ,
  `colorID`     tinyint(2) unsigned NOT NULL ,
  `telaID`      tinyint(2) unsigned NOT NULL ,
  CONSTRAINT pk_productos PRIMARY KEY (prodID)
  
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;


INSERT INTO `productos`
 (`prodID`,`prodNombre`,`tipoID`,`talleID`,`colorID`,`telaID`)
VALUES
( 1, 'Jeans Mom', 3 ,3 ,7,4);







/*----------------TELAS-------------------------------------------*/

CREATE TABLE telas (

  `telaID`      tinyint(2)  AUTO_INCREMENT NOT NULL ,
  `telaNombre`  varchar(45)          NOT NULL,
   CONSTRAINT pk_telas PRIMARY KEY (telaID)

) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



INSERT INTO `telas` (`telaID`, `telaNombre`) VALUES
(1, 'bengalina'),
(2, 'morley'),
(3, 'frizada'),
(4, 'elastizada'),
(5, 'recta');







/*----------------TIPO-------------------------------------------*/
CREATE TABLE tipo (

  `tipoID`      tinyint(2)   AUTO_INCREMENT NOT NULL ,
  `tipoNombre`  varchar(45)          NOT NULL,
  CONSTRAINT pk_tipo PRIMARY KEY (tipoID)

) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



INSERT INTO `tipo` (`tipoID`, `tipoNombre`) VALUES
(1, 'remera'),
(2, 'pantalon'),
(3, 'jeans'),
(4, 'campera'),
(5, 'remera'),
(6, 'cinto'),
(7, 'body');




/*----------------COLORES-------------------------------------------*/

CREATE TABLE colores (

  `colorID`     tinyint(2)   AUTO_INCREMENT NOT NULL ,
  `colorNombre` varchar(45)         NOT NULL,
  CONSTRAINT pk_colores PRIMARY KEY (colorID)

) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `colores` (`colorID`, `colorNombre`) VALUES
(1, 'rojo'),
(2, 'negro'),
(3, 'amarillo'),
(4, 'blanco'),
(5, 'camel'),
(6, 'ladrillo'),
(7, 'celeste'),
(8, 'verde');




/*----------------talles-------------------------------------------*/

CREATE TABLE talles (
  `talleID`     tinyint(2)  AUTO_INCREMENT NOT NULL ,
  `talleNombre` varchar(45)         NOT NULL,
  CONSTRAINT pk_talles PRIMARY KEY (talleID)

) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Productos';
INSERT INTO `colores` (`colorID`, `colorNombre`) VALUES
(1, 'xs'),
(2, 's'),
(3, 'm'),
(4, 'l'),
(5, 'xl'),
(6, 'xxl'),
(7, 'xxxl');


/*----------------usuarios-------------------------------------------*/

CREATE TABLE usuarios (

  `usuID` int(11)   AUTO_INCREMENT NOT NULL ,
  `activado` int(2) DEFAULT 0,
  `clave` varchar(12) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  CONSTRAINT pk_usuarios PRIMARY KEY (usuID)

) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`usuID`, `usuLogin`, `usuClave`, `usuNombre`, `usuEmail`) VALUES
(1, 'admin', 'admin', 'Administrador de Sistema', 'admin@hell.com'),
(2, 'test', 'test', 'Usuario de prueba', 'test@hell.com'),
(3, 'cfulanito', 'cfulanito', 'Cosme Fulanito', 'cfulanito@mail.com');




ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuID`),
  ADD UNIQUE KEY `usuLogin_UNIQUE` (`usuLogin`);

ALTER TABLE `usuarios` ADD CONSTRAINT UNIQUE(email);





