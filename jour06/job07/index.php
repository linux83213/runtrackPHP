<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);

    // Le tri à bulles
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparaison en fonction du paramètre croissant
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                // Échange des éléments
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }

    return $tab;
}

// Exemple d'utilisation
$tab = ["abc", "ghi", "def"];
$croissant = true;  // Mettre false pour un tri décroissant

$sortedTab = bubblesort($tab, $croissant);

echo "Tableau trié : <br>";
echo implode(", ", $sortedTab);
?>
