<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include "$racine/modele/bd.crypto.php";
include_once "$racine/modele/bd.photo.php";

// Récupérer le paramètre de l'URL pour déterminer quelle cryptomonnaie afficher
$cryptomonnaie = $_GET['Id_cryptomonnaie'] ?? 'btc'; // Par défaut, afficher Bitcoin (btc)


$Crypto = getcrypto($Id_cryptomonnaie);
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Accueil - coin de la hess.fr";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCrypto.php";
include "$racine/vue/pied.html.php";


?>