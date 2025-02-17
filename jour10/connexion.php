<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>Inscription</title>
</head>
<body>
    <form method="post" action="database.php">
        <label>Username:</label> 
        <input type="text" name="username" required>
        
        <label>Password :</label> 
        <input type="password" name="password" required>
    
        
        <input type="submit" name="submit" value="S'inscrire">
    </form>
</body>
</html>