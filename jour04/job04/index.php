<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>

    <h1>Formulaire POST</h1>
    
    <!-- Formulaire qui envoie des données via la méthode POST -->
    <form action="" method="POST">
        <label for="param1">Paramètre 1 :</label>
        <input type="text" id="param1" name="param1"><br><br>

        <label for="param2">Paramètre 2 :</label>
        <input type="text" id="param2" name="param2"><br><br>

        <label for="param3">Paramètre 3 :</label>
        <input type="text" id="param3" name="param3"><br><br>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
<?php
// Vérification si des paramètres ont été envoyés via POST
if (!empty($_POST)) {
    // Début du tableau HTML
    echo "<table border='1' cellpadding='10'>
            <thead>
                <tr>
                    <th>Paramètre</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>";

    // Parcours de tous les éléments de $_POST et affichage dans le tableau
    foreach ($_POST as $key => $value) {
        echo "<tr>
                <td>" . htmlspecialchars($key) . "</td>
                <td>" . htmlspecialchars($value) . "</td>
              </tr>";
    }

    // Fin du tableau
    echo "</tbody></table>";
} else {
    // Si aucun paramètre n'est passé dans l'URL
    echo "Aucun argument n'a été passé via POST.";
}
?>
