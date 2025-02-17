<?php
// Définition de la fonction leetSpeak()
function leetSpeak($str) {
    // Tableau de correspondances entre lettres et chiffres/symboles
    $leet = [
        'a' => '4', 'A' => '4', 
        'e' => '3', 'E' => '3', 
        'l' => '1', 'L' => '1', 
        'o' => '0', 'O' => '0', 
        't' => '7', 'T' => '7', 
        's' => '$', 'S' => '$', 
        'i' => '1', 'I' => '1'
    ];

    // Remplacer chaque caractère dans la chaîne par son équivalent en leet speak
    return strtr($str, $leet);
}

// Exemple d'utilisation de la fonction
$str = "Hello World, I am a programmer!";
$leetStr = leetSpeak($str);
echo "Chaîne originale : " . $str . "<br>";
echo "Chaîne en leet speak : " . $leetStr;
?>
