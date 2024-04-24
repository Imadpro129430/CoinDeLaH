<?php

include_once "bd.inc.php";

function getCryptoById($Id_cryptomonnaie) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
        $req->bindValue(':Id_cryptomonnaie', $Id_cryptomonnaie, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function ajouterCryptomonnaie($Id_cryptomonnaie, $nom, $prix, $prixMax) {
    global $conn;

    $sql = "INSERT INTO cryptomonnaie (Id_cryptomonnaie, nom, Prix, PrixMax) VALUES (:Id_cryptomonnaie, :nom, :Prix, :PrixMax)";
    $conn = connexionPDO();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":Id_cryptomonnaie", $Id_cryptomonnaie);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":Prix", $prix);
    $stmt->bindParam(":PrixMax", $prixMax);
    $stmt->execute();

    return $conn->lastInsertId();
}


