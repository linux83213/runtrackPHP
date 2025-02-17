<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Nombre</title>
</head>
<body>

    <h1>Vérification du Nombre</h1>

    <form action="check_number.php" method="GET">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required><br><br>

        <input type="submit" value="Vérifier">
    </form>

</body>
</html>
<?php
// Vérification si le paramètre 'nombre' est présent dans l'URL
if (isset($_GET['nombre'])) {
    // Récupérer la valeur du nombre
    $nombre = $_GET['nombre'];

    // Vérifier si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
} else {
    echo "Veuillez entrer un nombre.";
}
?>
