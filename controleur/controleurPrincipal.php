<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["crypto"] = "cryptoM.php";
    $lesActions["AjouterCrypto"] = "AjouterCrypto.php";
    $lesActions["mention"] = "mention.php";
    $lesActions["deleteCrypto"] = "deleteCrypto.php";
    $lesActions["Modifier"] = "Modifier.php";



    



    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>