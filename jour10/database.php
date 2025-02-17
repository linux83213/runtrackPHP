<?php 
$host = 'localhost';
$db = 'formulaire';
$db_username = 'root';  // Nom d'utilisateur pour la connexion (ne pas confondre avec celui du formulaire)
$db_password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];

// Vérifier si le formulaire a été soumis

if (isset($_POST["username"])) {
    $username = (trim($_POST["username"])) ;
    if (!empty(trim($_POST["password"])) || strlen($password) < 8 ){
        exit;
       } 

    if (!empty(trim($_POST["email"]))) $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"]; password_hash($_POST["password"], PASSWORD_BCRYPT);
    try {
        // Connexion à ala base de données
        $pdo = new PDO($dsn, $db_username, $db_password, $options);

        // Insertion dans la base de données
        $insert = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $insert->execute([$username, $email, $password_hash]);
        // Vérification si l'utilisateur existe
        $query = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        echo "Utilisateur enregistré avec succès !";
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
?>





