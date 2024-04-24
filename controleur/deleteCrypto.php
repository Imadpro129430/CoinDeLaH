<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.inc.php";
include_once "$racine/modele/bd.crypto.php";

if ($_POST['deleteCrypto'])  {


    if (isset($_POST['Id_cryptomonnaie'])) {
        extract($_POST);
        
        DeleteCryptomonnaie($Id_cryptomonnaie);
        
        header('Location: ./?action=defaut');
        exit();
    }
}