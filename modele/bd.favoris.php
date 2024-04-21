<?php
session_start(); // Démarre la session (si ce n'est pas déjà fait)

function ajouterAuxFavoris($id_cryptomonnaie) {
    // Vérifier si la clé 'favoris' existe dans la session
    if (!isset($_SESSION['favoris'])) {
        $_SESSION['favoris'] = array(); // Si elle n'existe pas, initialise un tableau vide
    }

    // Vérifier si l'ID de la cryptomonnaie n'est pas déjà dans les favoris
    if (!in_array($id_cryptomonnaie, $_SESSION['favoris'])) {
        // Si l'ID n'est pas déjà dans les favoris, l'ajouter
        $_SESSION['favoris'][] = $id_cryptomonnaie;
        return true; // Retourne vrai si l'ajout est réussi
    } else {
        return false; // Retourne faux si l'ID est déjà dans les favoris
    }
}

// Exemple d'utilisation : ajouter la cryptomonnaie avec l'ID 123 aux favoris
$id_cryptomonnaie = 123;
if (ajouterAuxFavoris($id_cryptomonnaie)) {
    echo "Cryptomonnaie ajoutée aux favoris avec succès !";
} else {
    echo "Cette cryptomonnaie est déjà dans vos favoris.";
}
?>
