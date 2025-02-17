<?php
// Création de la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définition des voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Si le caractère est une voyelle, on l'affiche
    if (in_array($str[$i], $voyelles)) {
        echo $str[$i];
    }
}
?>

