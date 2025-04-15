<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["user_id"])) {
    $query = $db_connection->prepare(
        "INSERT INTO articles (name, text) VALUES (:name, :text)"
    );
    $query->execute([
        "name" => $_POST["name"],
        "text" => $_POST["text"] ?? '',
    ]);
    header("Location: index.php");
    exit();
}
?>