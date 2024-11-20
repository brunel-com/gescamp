CREATE TABLE users
(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    role VARCHAR(30),
    email VARCHAR(100),
    password VARCHAR(200)
);

CREATE TABLE chambres
(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    statut VARCHAR(30) DEFAULT 'Disponible',
    equipements VARCHAR(100),
    numero VARCHAR(50),
    site VARCHAR(30),
    CONSTRAINT uq_numero UNIQUE(numero)
);

CREATE TABLE etudiants
(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    classe VARCHAR(30),
    filiere VARCHAR(30) DEFAULT NULL,
    cycle VARCHAR(10) DEFAULT NULL,
    chambre VARCHAR(50) NULL,
    FOREIGN KEY(chambre) REFERENCES chambres(numero)
);

CREATE TABLE equipements
(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type VARCHAR(100),
    etat VARCHAR(100) DEFAULT 'bon',
    chambre VARCHAR(50),
    quantite SMALLINT UNSIGNED DEFAULT 1,
    FOREIGN KEY(chambre) REFERENCES chambres(numero),
);

CREATE TABLE sites
(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    chambres VARCHAR(200),
    label VARCHAR(100)
);