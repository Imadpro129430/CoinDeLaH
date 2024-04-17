<?php

include_once "bd.inc.php";

function getcrypto($Id_cryptomonnaie) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie");
        $req ->bindValue(':Id_cryptomonnaie', $Id_cryptomonnaie , PDO::PARAM_INT);
        $req->execute();

        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            $resultat[] = $ligne;
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}