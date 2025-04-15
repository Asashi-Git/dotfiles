<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["user_id"])) {
    $article_id = $_POST["id"];
    $content = $_POST["content"];
    $user_id = $_SESSION["user_id"];

    // Requête SQL pour mettre à jour l'article
    $query = $db_connection->prepare("
        UPDATE articles 
        SET content = :content 
        WHERE id = :id AND user_id = :user_id
    ");
    $query->execute([
        "content" => $content,
        "id" => $article_id,
        "user_id" => $user_id,
    ]);

    header("Location: article.php?id=" . $article_id);
    exit();
}
?>
