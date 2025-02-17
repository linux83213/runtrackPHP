<?php
// Affichage du nombre d'arguments dans $_POST
echo "Nombre d'arguments dans \$_POST : " . count($_POST);
?>




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

