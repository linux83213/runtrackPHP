<?php
// Boucle pour afficher tous les nombres entre 0 et 100
for ($i = 0; $i <= 100; $i++) {
    // Si le nombre est 42, on affiche "La Plateforme_"
    if ($i == 42) {
        echo "La Plateforme_<br>";
    }
    // Si le nombre est entre 0 et 20, on l'affiche en italique
    elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br>";
    }
    // Si le nombre est entre 25 et 50, on l'affiche en souligné
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br>";
    }
    // Sinon, on l'affiche normalement
    else {
        echo "$i<br>";
    }
}
?>
