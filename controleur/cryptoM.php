<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include "$racine/modele/bd.crypto.php";
include_once "$racine/modele/bd.photo.php";

// Récupérer le paramètre de l'URL pour déterminer quelle cryptomonnaie afficher
$Id_cryptomonnaie = $_GET["Id_cryptomonnaie"];


$Crypto = getCryptoById($Id_cryptomonnaie);
$LesPhotos = getPhotoById_Cryptomonnaie($Id_cryptomonnaie);

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Accueil - coin de la hess.fr";
include "$racine/vue/entete2.html.php";
include "$racine/vue/vueCrypto.php";
include "$racine/vue/pied.html.php";


?>