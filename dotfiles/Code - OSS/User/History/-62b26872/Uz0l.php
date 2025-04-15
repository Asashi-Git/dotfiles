<?php
session_start();
require_once("db.php");

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
        <?php
    } else {
        echo "<p>Article introuvable.</p>";
    }
}
?>
