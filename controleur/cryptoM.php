<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include "$racine/modele/bd.crypto.php";
include_once "$racine/modele/bd.photo.php";

// Récupérer le paramètre de l'URL pour déterminer quelle cryptomonnaie afficher
$cryptomonnaie = $_GET['Id_cryptomonnaie'] ?? 'btc'; // Par défaut, afficher Bitcoin (btc)


$Crypto = getCryptoById($Id_cryptomonnaie);
$LesPrix = getPrixById($Id_cryptomonnaie);
$LesPrixMax = getPrixMaxById($Id_cryptomonnaie);
$Lesnoms = getNomById($Id_cryptomonnaie);
$LesAlgo = getAlgorithmeById($Id_cryptomonnaie);
$LesDetails = getDetailById($Id_cryptomonnaie);
$LesCapitalisations = getcapitalisationById($Id_cryptomonnaie);
$Date_De_Creation = getDateDeCreationById($Id_cryptomonnaie);
$LesPhotos = getPhotoById_Cryptomonnaie($Id_cryptomonnaie);

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Accueil - coin de la hess.fr";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCrypto.php";
include "$racine/vue/pied.html.php";


?>