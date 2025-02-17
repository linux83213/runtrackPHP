<?php
// Définition de la fonction occurrences()
function occurrences($str, $char) {
    // Utiliser la fonction substr_count pour compter les occurrences de $char dans $str
    return substr_count($str, $char);
}

// Exemple d'utilisation de la fonction
$str = "Bonjour";
$char = "o";

// Appel de la fonction et affichage du résultat
$resultat = occurrences($str, $char);
echo "Le caractère '$char' apparaît " . $resultat . " fois dans '$str'.";
?>
