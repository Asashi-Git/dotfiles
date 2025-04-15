<?php
session_start();
require_once("db.php");
require_once("navbar.php");
require_once("style.php");

if (isset($_GET["id"])) {
    $query = $db_connection->prepare(
        "SELECT name, text FROM articles WHERE id = :id"
    );
    $query->execute(["id" => $_GET["id"]]);
    $article = $query->fetch();

    if ($article) {
        ?>
        <h1><?= htmlspecialchars($article["name"]) ?></h1>
        <p><?= nl2br(htmlspecialchars($article["text"])) ?></p>
        <br>
        <br>
        <?php require_once("delete_article.php");
        require_once("update_article.php") ?>
        <?php
    } else {
        echo "<p>Article introuvable.</p>";
    }
}
?>