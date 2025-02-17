<?php
$booleanVar = true; 
$intVar = 16;
$stringVar = "LaPlateforme";
$floatVar = 3.14; 

/* création du tableau html */

echo "<table border='1' style='border-collapse: width: 5O%; margin: auto;'>";
echo "<thead>";
echo "<tr>";
echo "<th style='padding: 10px;' >Type</th>"; 
echo "<th style='padding: 10px;' >Nom</th>";
echo "<th style='padding: 10px;' >Valeur</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

/* ligne variable boolen */
echo "<tr>";
echo "<td style='padding: 10px;'>" . gettype($booleanVar) . "</td>";
echo "<td style='padding: 10px;'>booleanVar</td>";
echo "<td style='padding: 10px;'>" . ($booleanVar ? 'true' : 'false') . "</td>";
echo "</tr>";

/* ligne variable entier*/
echo "<tr>";
echo "<td style='padding: 10px;'>" . gettype($intVar) . "</td>";
echo "<td style='padding: 10px;'>intVar</td>";
echo "<td style='padding: 10px;'>$intVar</td>";
echo "</tr>";

/* ligne chaine de caractères*/
echo "<tr>";
echo "<td style='padding: 10px;'>" . gettype($stringVar) . "</td>";
echo "<td style='padding: 10px;'>stringVar</td>";
echo "<td style='padding: 10px;'>$stringVar</td>";
echo "</tr>";

/* ligne variable nombre à virgules*/ 
echo "<tr>";
echo "<td style='padding: 10px;'>" . gettype($floatVar) . "</td>";
echo "<td style='padding: 10px;'>floatVar</td>";
echo "<td style='padding: 10px;'>$floatVar</td>";
echo "</tr>";
echo "</tbody>";

echo "</table>";
?>