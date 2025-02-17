<?php
// Fonction pour vérifier si un nombre est premier
function isPrime($number) {
    if ($number <= 1) {
        return false; // Les nombres <= 1 ne sont pas premiers
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Si le nombre est divisible par un autre nombre que 1 et lui-même
        }
    }
    
    return true; // Si aucun diviseur n'a été trouvé, c'est un nombre premier
}

// Boucle pour afficher les nombres premiers jusqu'à 1000
for ($i = 2; $i <= 1000; $i++) {
    if (isPrime($i)) {
        echo "$i<br>"; // Affiche le nombre premier avec un retour à la ligne
    }
}
?>