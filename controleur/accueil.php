<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include "$racine/modele/bd.Top5crypto.php";
include_once "$racine/modele/bd.photo.php";

$listeCrypto = getTop5crypto();
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Accueil - coin de la hess.fr";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/pied.html.php";


?>