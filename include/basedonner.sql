DROP DATABASE spa;
CREATE DATABASE spa;
USE spa;

CREATE TABLE client(
   id         int           NOT NULL     AUTO_INCREMENT,
   nom      VARCHAR (20)    NOT NULL,
   prenom   VARCHAR (20)    NOT NULL,
   tel      INT             NOT NULL,
   address  VARCHAR (40)    NOT NULL,
   email    VARCHAR (100)   NOT NULL CHECK (email LIKE '%_@__%.__%'),
   societe  VARCHAR (100)             NOT NULL,
   password VARCHAR (30)    NOT NULL,
   PRIMARY KEY (id)
);