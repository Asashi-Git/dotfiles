<?php
session_start();
require_once("db.php");



if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["user_id"])) {
    $query = $db_connection->prepare(
        "DELETE FROM articles WHERE id = :id"
    );
    $query->execute([
        "id" => $_POST["id"],
    ]);
    header("Location: index.php");
    exit();
}
?>