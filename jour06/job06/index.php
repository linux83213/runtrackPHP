<?php
// Récupérer le style sélectionné dans la liste déroulante, ou définir un style par défaut
$style = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez un Style</title>

    <!-- Inclure le fichier CSS en fonction du style sélectionné -->
    <link rel="stylesheet" href="<?= $style ?>.css">
</head>
<body>

<h2>Formulaire avec sélection de style</h2>

<form method="post">
    <label for="style">Choisissez un style :</label>
    <select name="style" id="style">
        <option value="style1" <?= $style == 'style1' ? 'selected' : '' ?>>Style 1</option>
        <option value="style2" <?= $style == 'style2' ? 'selected' : '' ?>>Style 2</option>
        <option value="style3" <?= $style == 'style3' ? 'selected' : '' ?>>Style 3</option>
    </select><br><br>
    
    <button type="submit">Appliquer le style</button>
</form>

</body>
</html>
