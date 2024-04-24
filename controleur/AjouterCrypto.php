<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.inc.php";
include_once "$racine/modele/bd.crypto.php";


if ($_POST['ajoutercrypto']) {



    if (isset($_POST["Id_cryptomonnaie"]) && $_POST["Id_cryptomonnaie"] != "" && isset($_POST["nom"]) && $_POST["nom"] != "" && isset($_POST["Prix"]) && $_POST["Prix"] != "" && isset($_POST["PrixMax"]) && $_POST["PrixMax"] != "") {

        extract($_POST);


        ajouterCryptomonnaie($Id_cryptomonnaie, $nom, $Prix, $PrixMax);


        header('Location: ./?action=defaut');
        exit();
    }


}

