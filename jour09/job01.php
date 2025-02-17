<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        background:pink;
        border-collapse: collapse;
        table, td, th {
    border: 1px solid;
}

    }
    thead {
        background: green;
        color: yellow;
      
    }
</style>
<?php
$servername = "localhost";
$database = "jour8";
$username = "root";
$password = "";

// Create connection  
$pdo = new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4", $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Exécution de la requête SQL
$stmt = $pdo->query("SELECT * FROM etudiants");
$users = $stmt->fetchAll();




echo "
<table>
    <thead>
        <tr>
            <th>nom</th>
            <th>prénom</th>
            <th>date de naissance</th>
            <th>genre</th>
        </tr>
    </thead>
    <tbody>";
    foreach ($users as $key => $value) {
        echo "<tr>";
        echo "<td>".$value["nom"]."</td>";
        echo "<td>".$value["prénom"]."</td>";
        echo "<td>".$value["date de naissance"]."</td>";
        echo "<td>".$value["genre"]."</td>";
        echo "</tr>";
    };
    echo "</tbody>
</table>";
?>
</html>

