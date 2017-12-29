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
   avatar   VARCHAR (30)    NOT NULL    default 'avatar',
   PRIMARY KEY (id)
);

CREATE TABLE employers(
   id           int             NOT NULL     AUTO_INCREMENT,
   nom          VARCHAR (20)    NOT NULL,
   prenom       VARCHAR (20)    NOT NULL,
   tel          INT             NOT NULL,
   address      VARCHAR (40)    NOT NULL,
   email        VARCHAR (100)   NOT NULL CHECK (email LIKE '%_@__%.__%'),
   departement  VARCHAR (100)   NOT NULL,
   est_chefdep  BOOLEAN         NOT NULL default 0,
   password     VARCHAR (30)    NOT NULL,
   avatar   VARCHAR (30)    NOT NULL    default 'avatar',
   PRIMARY      KEY (id)
);



CREATE TABLE commandes(
   id               int           NOT NULL     AUTO_INCREMENT,
   client_id        int           NOT NULL,
   numero           varchar(8)    NOT NULL,
   projet           varchar(10)   NOT NULL,
   date_commande    date          NOT NULL,
   date_livraison   date          NOT NULL,
   contact          varchar(20),
   commentaire      text,
   statuts          int          default 0,
   PRIMARY KEY (id)
);

CREATE TABLE notifications(
   id                      int            NOT NULL     AUTO_INCREMENT,
   employer_id             int            NOT NULL,
   title                   varchar(10)    NOT NULL,
   body                    varchar(50)    NOT NULL,
   est_vue                 BOOLEAN        NOT NULL   default 0, 
   
   PRIMARY KEY (id)
);


-- jeux données
INSERT INTO clients (nom, prenom, tel, address, email, societe, avatar) VALUES ('ElHaij', 'Mehdi', 06004868, 'ENSA heda 3amala', 'mehdi@ensa.com', 'ENSA', 'me.png');
INSERT INTO clients (nom, prenom, tel, address, email, societe, avatar) VALUES ('ElYaacoubi', 'Achraf', 06112233, 'ENSA heda 3amala', 'achraf@ensa.com', 'ENSA', 'achraf.jpg');

INSERT INTO employers
    (nom, prenom, tel, address, email, departement, est_chefdep, password, avatar)
VALUES
    ('Saqi', 'Younes', 065878, 'ENSA dial Khouribga', 'saki@ensa.com', 'Contabilité', '0', 'hello', 'younes.jpg');

INSERT INTO employers
    (nom, prenom, tel, address, email, departement, est_chefdep, password, avatar)
VALUES
    ('baghzaoui', 'Bahaa', 065878, 'ENSA dial Khouribga', 'bahaa@ensa.com', "Bureau d'Etude", '1', 'hello', 'bahaa.jpg');

INSERT INTO employers
    (nom, prenom, tel, address, email, departement, est_chefdep, password, avatar)
VALUES
    ('Outfardine', 'Hamza', 065878, 'ENSA dial Khouribga', 'hamza@ensa.com', "Service Prototype", '0', 'hello', 'hamza.jpg');




INSERT INTO commandes (client_id, numero, projet, date_commande, date_livraison, contact, commentaire, statuts) VALUES (2, 'XXX', 'OCP', '2017-12-10', '2017-12-11', 'bahaa', 'bahaa', 1);
INSERT INTO commandes (client_id, numero, projet, date_commande, date_livraison, contact, commentaire, statuts) VALUES (2, 'XYY', 'FABLAB', '2017-12-10', '2017-12-11', 'bahaa', 'bahaa', 1);
INSERT INTO notifications (employer_id, title, body) VALUES (1, 'test1', 'OCP');
INSERT INTO notifications (employer_id, title, body) VALUES (1, 'test2', 'KBM');
