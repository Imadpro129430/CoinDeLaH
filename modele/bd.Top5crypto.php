<?php

include_once "bd.inc.php";

function getTop5crypto() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from cryptomonnaie");
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

function ajouterCryptomonnaie($Id_cryptomonnaie, $nom, $prix, $capitalisation)
{
    try {
        // Connexion à la base de données
        $cnx = connexionPDO();
        
        // Préparer la requête d'insertion
        $req = $cnx->prepare("INSERT INTO cryptomonnaie (Id_cryptomonnaie, nom, Prix, capitalisation) VALUES (:Id_cryptomonnaie, :nom, :prix, :capitalisation)");
        
        // Liaison des paramètres
        $req->bindValue(':Id_cryptomonnaie', $Id_cryptomonnaie, PDO::PARAM_INT);
        $req->bindValue(':nom', $nom, PDO::PARAM_STR);
        $req->bindValue(':prix', $prix, PDO::PARAM_INT);
        $req->bindValue(':capitalisation', $capitalisation, PDO::PARAM_INT);
        
        // Exécuter la requête
        $req->execute();

        // Fermer la connexion
        $cnx = null;

        // Retourner vrai si l'ajout a réussi
        return true;
    } catch (PDOException $e) {
        // En cas d'erreur, afficher le message d'erreur et retourner faux
        echo "Erreur lors de l'ajout de la cryptomonnaie : " . $e->getMessage();
        return false;
    }
}

?>
