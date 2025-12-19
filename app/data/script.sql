DROP DATABASE badcode;
CREATE DATABASE badcode;
use badcode;

CREATE TABLE `Gender` (
	`idGender` INTEGER NOT NULL AUTO_INCREMENT,
	`gender` VARCHAR(10) NOT NULL,
	PRIMARY KEY (`idGender`),
	CONSTRAINT UNIQUE_GENDER UNIQUE(`gender`)
);

CREATE TABLE `User` (
	`idUser` INTEGER NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(30) NOT NULL,
	`firstName` VARCHAR(40) NOT NULL,
	`lastName` VARCHAR(40) NOT NULL,
	`email` TEXT NOT NULL,
	`profilePicture` TEXT NOT NULL DEFAULT 'defaultPP.png',
	`idGender` INTEGER NOT NULL,
	`password` CHAR(40) NOT NULL,
	`birthDay` DATE NOT NULL,
	PRIMARY KEY (`idUser`),
	FOREIGN KEY (`idGender`) REFERENCES `Gender`(`idGender`),
	CONSTRAINT UNIQUE_USERNAME UNIQUE(`username`),
	CONSTRAINT UNIQUE_EMAIL UNIQUE(`email`)
);

CREATE TABLE `Admin` (
	`idAdmin` INTEGER NOT NULL AUTO_INCREMENT,
	`adminName` VARCHAR(20) NOT NULL,
	`password` CHAR(40) NOT NULL,
	PRIMARY KEY (`idAdmin`)
);

CREATE TABLE `Country` (
	`idCountry` INTEGER NOT NULL AUTO_INCREMENT,
	`countryName` VARCHAR(40) NOT NULL,
	`countryId` VARCHAR(40) NOT NULl,
	`path` TEXT NOT NULL,
	PRIMARY KEY (`idCountry`)
);

CREATE TABLE `Domain` (
	`idDomain` INTEGER NOT NULL AUTO_INCREMENT,
	`idCountry` INTEGER NOT NULL,
	`domain` VARCHAR(40) NOT NULL,
	`description` VARCHAR(40) NOT NULL,
	`validated` BOOL NOT NULL,
	PRIMARY KEY (`idDomain`),
	FOREIGN KEY (`idCountry`) REFERENCES `Country`(`idCountry`)
);

-- ======================================================================================================================================================

INSERT INTO Gender VALUES
	(null, 'Masculin'),
	(null, 'Feminin'),
	(null, 'Autres');

INSERT INTO User VALUES (null, "test", "test", "test", "test@test.com", "img.png", 1, SHA1("test"), now());
INSERT INTO Admin VALUES (null, "admin", SHA1("admin"));

-- ======================================================================================================================================================

CREATE OR REPLACE VIEW UserDetails AS (
	SELECT
		User.*
		, Gender.gender
	FROM User
	JOIN Gender ON User.idGender = Gender.idGender
);
