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


// cette fonction permet d'ajouter une photo 
// cela pourra etre utiliser pour l'admin

// function addPhoto($idP, $cheminP, $idR) {
//     $resultat = -1;
//     try {
//         $cnx = connexionPDO();

//         $req = $cnx->prepare("insert into photo (idP, cheminP, idR) values(:idP,:cheminP,:idR)");
//         $req->bindValue(':idP', $idP, PDO::PARAM_INT);
//         $req->bindValue(':cheminP', $cheminP, PDO::PARAM_STR);
//         $req->bindValue(':idR', $idR, PDO::PARAM_INT);

//         $resultat = $req->execute();
//     } catch (PDOException $e) {
//         print "Erreur !: " . $e->getMessage();
//         die();
//     }
//     return $resultat;
// }