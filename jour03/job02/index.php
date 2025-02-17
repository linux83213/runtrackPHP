<?php
// Création de la chaîne de caractères
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcours de la chaîne avec un pas de 2 (un caractère sur deux)
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
?>
