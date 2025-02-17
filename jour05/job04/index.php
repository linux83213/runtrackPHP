<?php
// Définition de la fonction calcule()
function calcule($num1, $operateur, $num2) {
    // Effectuer l'opération en fonction de l'opérateur
    switch ($operateur) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            // Vérification pour éviter la division par zéro
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erreur : Division par zéro!";
            }
        case '%':
            // Vérification pour éviter la division par zéro
            if ($num2 != 0) {
                return $num1 % $num2;
            } else {
                return "Erreur : Division par zéro!";
            }
        default:
            return "Erreur : Opérateur invalide!";
    }
}

// Test de la fonction calcule()
$resultat = calcule(10, '+', 5); // Exemple d'addition
echo "Résultat de 10 + 5 : " . $resultat . "<br>";

$resultat = calcule(10, '-', 5); // Exemple de soustraction
echo "Résultat de 10 - 5 : " . $resultat . "<br>";

$resultat = calcule(10, '*', 5); // Exemple de multiplication
echo "Résultat de 10 * 5 : " . $resultat . "<br>";

$resultat = calcule(10, '/', 5); // Exemple de division
echo "Résultat de 10 / 5 : " . $resultat . "<br>";

$resultat = calcule(10, '/', 0); // Exemple de division par zéro
echo "Résultat de 10 / 0 : " . $resultat . "<br>";

$resultat = calcule(10, '%', 3); // Exemple de modulo
echo "Résultat de 10 % 3 : " . $resultat . "<br>";

?>
