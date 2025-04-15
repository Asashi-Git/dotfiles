<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["user_id"])) {
    $query = $db_connection->prepare(
        "INSERT INTO articles (user_id, title, content) VALUES (:user_id, :title, :content)"
    );
    $query->execute([
        "user_id" => $_SESSION["user_id"],
        "title" => $_POST["title"],
        "content" => $_POST["content"] ?? '',
    ]);
    header("Location: index.php");
    exit();
}
?>
