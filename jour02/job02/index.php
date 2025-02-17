<?php
// Boucle pour afficher tous les nombres entre 0 et 1337
for ($i = 0; $i <= 1337; $i++) {
    // Vérification si le nombre est l'un des exclus
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue; // Passer au nombre suivant sans l'afficher
    }
    echo "$i<br>"; // Affiche les autres nombres avec un retour à la ligne
}
?>
