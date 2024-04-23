<?php


if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__){
    $racine="..";
}
include "../modele/bd.Top5crypto.php";
include_once "../modele/bd.photo.php";



if (isset($_POST["Id_cryptomonnaie"]) && isset($_POST["nom"]) && isset($_POST["prix"]) && isset($_POST["capitalisation"])){
   

        $Id_cryptomonnaie = $_POST["Id_cryptomonnaie"];
        $nom = $_POST["nom"];
        $prix = $_POST["prix"];
        $capitalisation = $_POST["capitalisation"];


        ajouterCryptomonnaie($Id_cryptomonnaie, $nom, $prix, $capitalisation);
        header('Location: ../vue/VueAccueil.php');
    
}


// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Accueil - coin de la hess.fr";
include "../vue/entete.html.php";
include "../vue/VueAjout.php";
include "../vue/pied.html.php";


?>