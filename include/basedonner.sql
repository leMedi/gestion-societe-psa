DROP DATABASE spa;
CREATE DATABASE spa;
USE spa;

CREATE TABLE clients(
   id       INT             NOT NULL    AUTO_INCREMENT,
   nom      VARCHAR (20)    NOT NULL,
   prenom   VARCHAR (20)    NOT NULL,
   tel      INT             NOT NULL,
   address  VARCHAR (40)    NOT NULL,
   email    VARCHAR (100)   NOT NULL    CHECK (email LIKE '%_@__%.__%'),
   societe  VARCHAR (100)   NOT NULL,
   password VARCHAR (30)    NOT NULL,
   PRIMARY KEY (id)
);

CREATE TABLE employers(
   id         int           NOT NULL     AUTO_INCREMENT,
   nom      VARCHAR (20)    NOT NULL,
   prenom   VARCHAR (20)    NOT NULL,
   tel      INT             NOT NULL,
   address  VARCHAR (40)    NOT NULL,
   email    VARCHAR (100)   NOT NULL CHECK (email LIKE '%_@__%.__%'),
   departement  VARCHAR (100)             NOT NULL,
   est_chefdep BOOLEAN         NOT NULL default 0,
   password VARCHAR (30)    NOT NULL,
   PRIMARY KEY (id)
);

-- jeux données
INSERT INTO clients (nom, prenom, tel, address, email, societe, password) VALUES ('ElHaij', 'Mehdi', 06004868, 'ENSA heda 3amala', 'mehdi@ensa.com', 'ENSA', 'helloworld');
INSERT INTO clients (nom, prenom, tel, address, email, societe, password) VALUES ('ElYaacoubi', 'Achraf', 06112233, 'ENSA heda 3amala', 'achraf@ensa.com', 'ENSA', 'helloworld');
