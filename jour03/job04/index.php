<?php
// Création de la chaîne de caractères
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur
$compteur = 0;

// Parcours de la chaîne et comptage des caractères
for ($i = 0; $i < strlen($str); $i++) {
    $compteur++;
}

// Affichage du nombre de caractères
echo "Le nombre de caractères dans la chaîne est : $compteur";
?>
