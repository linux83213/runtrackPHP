<?php
// Démarrer la session
session_start();

// Si la session n'existe pas encore, initialiser un tableau vide pour stocker les prénoms
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter le prénom à la session si le formulaire est soumis
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    // Ajouter le prénom dans le tableau de la session
    $_SESSION['prenoms'][] = $prenom;
}

// Réinitialiser la liste des prénoms si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des prénoms</title>
</head>
<body>

    <h1>Liste des prénoms</h1>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="POST">
        <label for="prenom">Entrez un prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <button type="submit">Ajouter</button>
    </form>

    <!-- Affichage de la liste des prénoms -->
    <h2>Liste des prénoms enregistrés :</h2>
    <ul>
        <?php
        // Vérifier si la session contient des prénoms et les afficher
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>$prenom</li>";
            }
        } else {
            echo "<li>Aucun prénom enregistré.</li>";
        }
        ?>
    </ul>

    <!-- Bouton Reset pour réinitialiser la liste -->
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser la liste</button>
    </form>

</body>
</html>
