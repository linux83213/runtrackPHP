<?php
// Fonction pour mettre en gras les mots commençant par une majuscule
function appliquerGras($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (ctype_upper($mot[0])) {
            $mot = "<b>" . $mot . "</b>";
        }
    }
    return implode(" ", $mots);
}

// Fonction pour appliquer le chiffrement César
function appliquerCesar($str, $decalage = 2) {
    $resultat = '';
    foreach (str_split($str) as $caractere) {
        if (ctype_alpha($caractere)) {
            $ascii = ord($caractere);
            $offset = ctype_lower($caractere) ? 97 : 65;
            $resultat .= chr(($ascii - $offset + $decalage) % 26 + $offset);
        } else {
            $resultat .= $caractere;
        }
    }
    return $resultat;
}

// Fonction pour transformer les mots finissant par "me"
function appliquerPlateforme($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") {
            $mot = $mot . "_";
        }
    }
    return implode(" ", $mots);
}

// Traitement du formulaire après soumission
$resultat = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $str = $_POST['str'];
    $transformation = $_POST['transformation'];

    if ($transformation == 'gras') {
        $resultat = appliquerGras($str);
    } elseif ($transformation == 'cesar') {
        $resultat = appliquerCesar($str, 2); // Décalage par défaut de 2
    } elseif ($transformation == 'plateforme') {
        $resultat = appliquerPlateforme($str);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de chaîne</title>
</head>
<body>

<h2>Transformation de chaîne de caractères</h2>

<form method="post">
    <label for="str">Entrez une chaîne de caractères :</label>
    <input type="text" id="str" name="str" required><br><br>

    <label for="transformation">Choisissez une transformation :</label>
    <select id="transformation" name="transformation" required>
        <option value="gras">Gras (mots commençant par une majuscule)</option>
        <option value="cesar">César (décalage de 2 caractères)</option>
        <option value="plateforme">Plateforme (ajout de "_" aux mots finissant par "me")</option>
    </select><br><br>

    <button type="submit">Appliquer la transformation</button>
</form>

<?php if ($resultat !== ''): ?>
    <h3>Résultat de la transformation :</h3>
    <p><?php echo $resultat; ?></p>
<?php endif; ?>

</body>
</html>
