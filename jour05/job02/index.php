<?php
// Définition de la fonction bonjour()
function bonjour($jour) {
    // Vérification du paramètre $jour
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appels de la fonction avec différentes valeurs pour $jour
bonjour(true);  // Affichera "Bonjour"
echo "<br>";     // Saut de ligne pour la lisibilité
bonjour(false); // Affichera "Bonsoir"
?>
