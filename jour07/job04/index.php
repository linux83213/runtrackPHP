<?php
// Vérifier si l'utilisateur est connecté via un cookie
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom']; // Récupérer le prénom depuis le cookie
} else {
    $prenom = null; // Si aucun cookie, prénom est nul
}

// Gérer la connexion (ajout du prénom dans un cookie)
if (isset($_POST['prenom']) && !empty($_POST['prenom']) && !isset($_COOKIE['prenom'])) {
    $prenom = $_POST['prenom'];
    // Enregistrer le prénom dans un cookie qui expire dans 1 heure
    setcookie('prenom', $prenom, time() + 3600);
}

// Gérer la déconnexion (suppression du cookie)
if (isset($_POST['deco'])) {
    // Supprimer le cookie en réglant son expiration dans le passé
    setcookie('prenom', '', time() - 3600);
    $prenom = null; // Réinitialiser le prénom en PHP
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <?php if ($prenom === null): ?>
        <!-- Formulaire de connexion si le prénom n'est pas stocké dans un cookie -->
        <h1>Connexion</h1>
        <form method="POST">
            <label for="prenom">Entrez votre prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php else: ?>
        <!-- Message de bienvenue si le prénom est stocké dans un cookie -->
        <h1>Bonjour, <?php echo htmlspecialchars($prenom); ?> !</h1>
        <form method="POST">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php endif; ?>

</body>
</html>
