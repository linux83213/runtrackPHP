<?php
// Création de la chaîne de caractères
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Calcul du nombre de caractères dans la chaîne
$length = strlen($str);

// Si la chaîne a plus d'un caractère, on effectue le décalage
if ($length > 1) {
    // Le dernier caractère de la chaîne devient le premier
    $shiftedStr = $str[$length - 1];

    // On ajoute chaque caractère à partir du deuxième caractère jusqu'à l'avant-dernier
    for ($i = 0; $i < $length - 1; $i++) {
        $shiftedStr .= $str[$i];
    }
    
    // Affichage du résultat
    echo $shiftedStr;
} else {
    // Si la chaîne a un seul caractère, on affiche directement
    echo $str;
}
?>
