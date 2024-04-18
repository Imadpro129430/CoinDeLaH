<?php

include_once "bd.inc.php";

function getCryptoById($Id_cryptomonnaie) {
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

function getPrixById($Id_cryptomonnaie){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select prix from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
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

function getNomById($Id_cryptomonnaie){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select nom from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
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

function getPrixMaxById($Id_cryptomonnaie){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select prixMax from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
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

function getDateDeCreationById($Id_cryptomonnaie){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare(" select date_de_creation from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
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

function getAlgorithmeById($Id_cryptomonnaie){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select Algorithme from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
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

function getcapitalisationById($Id_cryptomonnaie){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select capitalisation from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
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

function getDetailById($Id_cryptomonnaie){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select detiails from cryptomonnaie where Id_cryptomonnaie = :Id_cryptomonnaie;");
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