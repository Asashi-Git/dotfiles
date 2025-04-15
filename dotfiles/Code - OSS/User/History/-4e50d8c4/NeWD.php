<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["user_id"])) {
    $query = $db_connection->prepare(
        "UPDATE articles SET content = :content WHERE id = :id AND user_id = :user_id"
    );
    $query->execute([
        "content" => $_POST["content"],
        "id" => $_POST["id"],
        "user_id" => $_SESSION["user_id"],
    ]);
    header("Location: article.php?id=" . $_POST["id"]);
    exit();
}
?>
