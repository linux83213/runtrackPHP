<?php
// Vérifier si le cookie 'nbvisites' existe
if (isset($_COOKIE['nbvisites'])) {
    // Incrémenter le compteur de visites
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    // Si le cookie n'existe pas, initialiser à 1
    $nbvisites = 1;
}

// Créer ou mettre à jour le cookie avec la nouvelle valeur
setcookie('nbvisites', $nbvisites, time() + 3600); // Expire dans 1 heure

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le cookie à zéro
    setcookie('nbvisites', 0, time() - 3600); // Le cookie est supprimé immédiatement en réglant son expiration dans le passé
    $nbvisites = 0; // Réinitialiser la variable en PHP aussi
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites avec Cookie</title>
</head>
<body>

    <h1>Compteur de visites avec Cookie</h1>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>

    <!-- Formulaire avec bouton Reset -->
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>

</body>
</html>
