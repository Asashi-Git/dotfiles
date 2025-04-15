<?php
session_start();
require_once("db.php");

if (isset($_GET["id"]) && isset($_SESSION["user_id"])) {
    $query = $db_connection->prepare(
        "SELECT title, content FROM articles WHERE id = :id AND user_id = :user_id"
    );
    $query->execute([
        "id" => $_GET["id"],
        "user_id" => $_SESSION["user_id"],
    ]);
    $article = $query->fetch();

    if ($article) {
        ?>
        <h1><?= htmlspecialchars($article["title"]) ?></h1>
        <form action="update_article.php" method="POST">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <textarea name="content"><?= htmlspecialchars($article["content"]) ?></textarea><br>
            <button type="submit">Mettre à jour</button>
            <button type="submit" formaction="delete_article.php">Supprimer</button>
        </form>
        <?php
    } else {
        echo "<p>Article introuvable.</p>";
    }
}
?>
