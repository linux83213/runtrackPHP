<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Maison</title>
</head>
<body>

    <h1>Formulaire Maison</h1>

    <form action="afficher_maison.php" method="POST">
        <label for="largeur">Largeur de la maison :</label>
        <input type="number" id="largeur" name="largeur" required><br><br>

        <label for="hauteur">Hauteur de la maison :</label>
        <input type="number" id="hauteur" name="hauteur" required><br><br>

        <input type="submit" value="Afficher la maison">
    </form>

</body>
</html>
<?php
// Vérifier si les données ont été envoyées via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer la largeur et la hauteur
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];

    // Affichage de la maison avec le toit et les murs
    echo "<pre>";

    // Affichage du toit (pyramide)
    for ($i = 0; $i < $hauteur; $i++) {
        $spaces = str_repeat(' ', $hauteur - $i - 1); // Espaces avant la partie de toit
        $toit = str_repeat('*', 2 * $i + 1);  // Le toit est une pyramide de '*' de largeur croissante
        echo $spaces . $toit . "\n";
    }

    // Affichage du corps de la maison (les murs)
    $murs = str_repeat('*', $largeur); // Largeur du mur

    for ($i = 0; $i < $largeur - 1; $i++) {
        echo $murs . "\n"; // Impression des murs
    }

    echo "</pre>";
}
?>
