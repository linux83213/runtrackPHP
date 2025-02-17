<?php
// Démarre la session pour pouvoir utiliser les variables de session
session_start();

// Si la variable nbvisites n'existe pas, on l'initialise
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

// Incrémenter le compteur de visites
$_SESSION['nbvisites']++;

// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur
    $_SESSION['nbvisites'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>

    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>

    <!-- Formulaire avec bouton Reset -->
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>

</body>
</html>
