CREATE TABLE utilisateur(
   mail VARCHAR(50),
   pseudo VARCHAR(66) NOT NULL,
   mdp VARCHAR(50),
   PRIMARY KEY(mail)
);

CREATE TABLE cryptomonnaie(
   Id_cryptomonnaie INT,
   nom VARCHAR(50),
   Prix INT,
   PrixMax INT,
   PRIMARY KEY(Id_cryptomonnaie)
);

CREATE TABLE photo(
   Id_photo INT,
   cheminPhoto VARCHAR(50),
   Id_cryptomonnaie INT NOT NULL,
   PRIMARY KEY(Id_photo),
   FOREIGN KEY(Id_cryptomonnaie) REFERENCES cryptomonnaie(Id_cryptomonnaie)
);

CREATE TABLE commentaire(
   Id INT,
   note INT,
   commentaire VARCHAR(1000),
   Id_cryptomonnaie INT NOT NULL,
   mail VARCHAR(50) NOT NULL,
   PRIMARY KEY(Id),
   FOREIGN KEY(Id_cryptomonnaie) REFERENCES cryptomonnaie(Id_cryptomonnaie),
   FOREIGN KEY(mail) REFERENCES utilisateur(mail)
);

CREATE TABLE avoir(
   mail VARCHAR(50),
   Id_cryptomonnaie INT,
   PrixMax VARCHAR(50),
   PRIMARY KEY(mail, Id_cryptomonnaie),
   FOREIGN KEY(mail) REFERENCES utilisateur(mail),
   FOREIGN KEY(Id_cryptomonnaie) REFERENCES cryptomonnaie(Id_cryptomonnaie)
);

INSERT INTO utilisateur (mail, pseudo, mdp) 
VALUES ('exemple1@mail.com', 'utilisateur1', 'motdepasse1');

INSERT INTO cryptomonnaie (Id_cryptomonnaie, nom, Prix, PrixMax) 
VALUES (1,'Bitcoin', 50000, 55000),
       (2,'Ethereum', 3000, 3200),
       (3,'Solana', 200, 500),
       (4,'BNB',290,500),
       (5,'USDT',1,1.1);

INSERT INTO photo (Id_photo, cheminPhoto, Id_cryptomonnaie) VALUES
(1, 'img/BTC.png', 1),
(2, 'img/ETH.png', 2),
(3, 'img/SOL.png', 3),
(4, 'img/BNB.png', 4),
(5, 'img/USDT.png', 5);















