<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_SESSION["user_id"])) {
        $title = $_POST["title"];
        $content = $_POST["content"] ?? ''; // Contenu vide par défaut
        $user_id = $_SESSION["user_id"];

        // Requête SQL pour insérer un nouvel article
        $query = $db_connection->prepare("
            INSERT INTO articles (user_id, title, content) 
            VALUES (:user_id, :title, :content)
        ");
        $query->execute([
            "user_id" => $user_id,
            "title" => $title,
            "content" => $content,
        ]);

        header("Location: index.php"); // Redirection après ajout
        exit();
    }
}
?>
