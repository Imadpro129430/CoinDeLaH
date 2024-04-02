CREATE TABLE utilisateur(
   mail VARCHAR(50),
   pseudo VARCHAR(66) NOT NULL,
   mdp VARCHAR(50),
   PRIMARY KEY(mail)
);

CREATE TABLE cryptomonnaie(
   Id_cryptomonnaie INT PRIMARY KEY,
   nom VARCHAR(50),
   Prix INT,
   PrixMax INT
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
       














