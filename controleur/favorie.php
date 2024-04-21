<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include "$racine/modele/bd.crypto.php";
include_once "$racine/modele/bd.photo.php";


$titre = "Accueil - coin de la hess.fr";
include "$racine/vue/entete2.html.php";
include "$racine/vue/vuefavoris.php";
include "$racine/vue/pied.html.php";


?>