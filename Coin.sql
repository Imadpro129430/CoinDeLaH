CREATE TABLE utilisateur(
   mail VARCHAR(50),
   pseudo VARCHAR(66) NOT NULL,
   mdp VARCHAR(50),
   PRIMARY KEY(mail)
);

-- CREATE TABLE cryptomonnaie(
--    Id_cryptomonnaie INT,
--    nom VARCHAR(50),
--    Prix INT,
--    PrixMax INT,
--    PRIMARY KEY(Id_cryptomonnaie)
-- );
CREATE TABLE cryptomonnaie(
   Id_cryptomonnaie INT PRIMARY KEY,
   nom VARCHAR(50),
   Prix INT,
   PrixMax INT,
   date_de_creation INT,
   Algorithme VARCHAR(50),
   capitalisation INT,
   details VARCHAR(500)
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




-- INSERT INTO cryptomonnaie (Id_cryptomonnaie, nom, Prix, PrixMax,date_de_creation,Algorithme,capitalisation, details) 
-- VALUES (1,'Bitcoin', 50000, 55000,2009,"Proof of Work",1000000000,"Bitcoin (BTC) : Le Bitcoin, pionnier des cryptomonnaies, est une réserve de valeur numérique sécurisée par la blockchain. Son adoption mondiale et sa rareté intrinsèque en font un actif financier recherché pour sa décentralisation et sa résilience."),
--        (2,'Ethereum', 3000, 3200,2015,"Proof of Stake",900000000,"Ethereum (ETH) : Ethereum, une plateforme blockchain polyvalente, permet le développement d'applications décentralisées et de contrats intelligents. Son écosystème dynamique, alimenté par l'Ether, ouvre la voie à l'innovation dans la finance, les NFTs et bien plus encore."),
--        (3,'Solana', 200, 500,2020,"Proof of History",850000000,"Solana (SOL) : Solana est une blockchain ultra-rapide conçue pour évoluer à grande échelle. Grâce à son architecture innovante, Solana offre des transactions rapides et peu coûteuses, soutenant un écosystème croissant de dApps et de projets DeFi."),
--        (4,'BNB',290,500,2017,"Proof of Stake",700000000,"Binance Coin (BNB) : Binance Coin est le token natif de Binance, l'une des plus grandes plateformes d'échange de cryptomonnaies au monde. Utilisé pour payer les frais de transaction et accéder à divers services sur la plateforme, le BNB est devenu un actif numérique incontournable."),
--        (5,'USDT',1,1.1,2014," ",500000000,"Tether (USDT) : Tether est une stablecoin populaire qui maintient sa valeur à celle d'une monnaie fiduciaire, souvent le dollar américain. En offrant une stabilité de prix et une liquidité instantanée, l'USDT est largement utilisé pour le trading et les transactions dans l'écosystème des cryptomonnaies.");

INSERT INTO cryptomonnaie (Id_cryptomonnaie, nom, Prix, PrixMax, date_de_creation, Algorithme, capitalisation, details) 
VALUES (1,'Bitcoin', 50000, 55000, 2009, 'Proof of Work', 1000000000, "Bitcoin (BTC) : Le Bitcoin, pionnier des cryptomonnaies, est une réserve de valeur numérique sécurisée par la blockchain. Son adoption mondiale et sa rareté intrinsèque en font un actif financier recherché pour sa décentralisation et sa résilience."),
       (2,'Ethereum', 3000, 3200, 2015, 'Proof of Stake', 900000000, "Ethereum (ETH) : Ethereum, une plateforme blockchain polyvalente, permet le développement d'applications décentralisées et de contrats intelligents. Son écosystème dynamique, alimenté par l'Ether, ouvre la voie à l'innovation dans la finance, les NFTs et bien plus encore."),
       (3,'Solana', 200, 500, 2020, 'Proof of History', 850000000, "Solana (SOL) : Solana est une blockchain ultra-rapide conçue pour évoluer à grande échelle. Grâce à son architecture innovante, Solana offre des transactions rapides et peu coûteuses, soutenant un écosystème croissant de dApps et de projets DeFi."),
       (4,'BNB',290,500,2017,'Proof of Stake', 700000000, "Binance Coin (BNB) : Binance Coin est le token natif de Binance, l'une des plus grandes plateformes d'échange de cryptomonnaies au monde. Utilisé pour payer les frais de transaction et accéder à divers services sur la plateforme, le BNB est devenu un actif numérique incontournable."),
       (5,'USDT',1,1.1,2014, '', 500000000, "Tether (USDT) : Tether est une stablecoin populaire qui maintient sa valeur à celle d'une monnaie fiduciaire, souvent le dollar américain. En offrant une stabilité de prix et une liquidité instantanée, l'USDT est largement utilisé pour le trading et les transactions dans l'écosystème des cryptomonnaies.");

INSERT INTO photo (Id_photo, cheminPhoto, Id_cryptomonnaie) VALUES
(1, 'img/BTC.png', 1),
(2, 'img/ETH.png', 2),
(3, 'img/SOL.png', 3),
(4, 'img/BNB.png', 4),
(5, 'img/USDT.png', 5);















