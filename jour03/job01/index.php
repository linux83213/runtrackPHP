<?php
// Création du tableau
$nombre = array(200, 204, 173, 98, 171, 404, 459);

// Parcours du tableau
foreach ($nombre as $x) {
    if ($x % 2 == 0) {
        echo "$x est paire<br />";
    } else {
        echo "$x est impaire<br />";
    }
}
?>
