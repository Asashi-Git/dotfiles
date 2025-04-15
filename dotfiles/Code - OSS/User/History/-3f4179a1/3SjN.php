<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db_request = $db_connection->prepare(
        "SELECT email FROM users WHERE email = :email"
    );
    $db_request->execute(["email" => $_POST["email"]]);
    
    if ($db_request->rowCount()) {
        echo "Cet utilisateur existe déjà !";
    } else {
        $query = $db_connection->prepare(
            "INSERT INTO users (username, email, password, personal_page) 
            VALUES (:username, :email, :password, :personal_page)"
        );
        $query->execute([
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
            "personal_page" => $_POST["personal_page"] ?? '',
        ]);
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <textarea name="personal_page" placeholder="Description personnelle"></textarea><br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
