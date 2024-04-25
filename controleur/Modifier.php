<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.inc.php";
include_once "$racine/modele/bd.crypto.php";

if ($_POST['ModifierCryptomonnaie']) {
    // if (isset($_POST["Id_cryptomonnaie"]) && $_POST["Id_cryptomonnaie"] != "" && isset($_POST["nom"]) && $_POST["nom"] != "" && isset($_POST["Prix"]) && $_POST["Prix"] != "" && isset($_POST["PrixMax"]) && $_POST["PrixMax"] != "") {

        $Id_cryptomonnaie = $_POST['Id_cryptomonnaie'];
        $nom = $_POST['nom'];
        $prix = $_POST['Prix'];
        $prixMax = $_POST['PrixMax'];

        modifierCryptomonnaie($Id_cryptomonnaie, $nom, $prix,$prixMax) ;

        header('Location: ./?action=defaut');
        exit();

    }


