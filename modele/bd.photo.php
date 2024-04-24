<?php
include_once "bd.inc.php";

// recuperer la photo par l'id de la cryptomonnaie
function getPhotosByIdR($Id_cryptomonnaie) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from photo where Id_cryptomonnaie=:Id_cryptomonnaie");
        $req->bindValue(':Id_cryptomonnaie', $Id_cryptomonnaie, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
// recuperer une photo par l'id de la photo
function getPhotoByIdP($Id_photo) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from photo where Id_photo=:Id_photo");
        $req->bindValue(':Id_photo', $Id_photo, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPhotoById_Cryptomonnaie($Id_cryptomonnaie) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select cheminPhoto from photo where Id_cryptomonnaie= :Id_cryptomonnaie ;");
        $req->bindValue(':Id_cryptomonnaie', $Id_cryptomonnaie, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

