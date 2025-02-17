<?php
// Création de la chaîne de caractères
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Définition des voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// Initialisation du dictionnaire pour stocker les occurrences
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Parcours de la chaîne et comptage des voyelles et consonnes
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    
    // Vérifie si le caractère est une voyelle
    if (in_array($char, $voyelles)) {
        $dic["voyelles"]++;
    }
    // Vérifie si le caractère est une consonne (lettre et non voyelle)
    elseif (ctype_alpha($char)) {
        $dic["consonnes"]++;
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>
