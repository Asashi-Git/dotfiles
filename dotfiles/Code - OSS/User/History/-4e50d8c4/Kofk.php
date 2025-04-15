<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["user_id"])) {
    $query = $db_connection->prepare(
        "UPDATE articles SET text = :text WHERE id = :id"
    );
    $query->execute([
        "text" => $_POST["text"],
        "id" => $_POST["id"],
    ]);
    header("Location: article.php?id=" . $_POST["id"]);
    exit();
}
?>
