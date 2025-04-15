<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil - Miniblog</title>
</head>
<body>
    <?php require_once("navbar.php"); ?>

    <h1>Accueil</h1>
    <?php if (!isset($_SESSION["user_id"])) { ?>
        <p><a href="login.php">Connectez-vous</a> pour accéder au contenu.</p>
    <?php } else { ?>
        <h2>Créer un nouvel article</h2>
        <form action="add_article.php" method="POST">
            <input type="text" name="title" placeholder="Titre de l'article" required><br>
            <textarea name="content" placeholder="Contenu de l'article"></textarea><br>
            <button type="submit">Créer</button>
        </form>

        <h2>Vos articles</h2>
        <?php
        $query = $db_connection->prepare(
            "SELECT id, title FROM articles WHERE user_id = :user_id"
        );
        $query->execute(["user_id" => $_SESSION["user_id"]]);
        $articles = $query->fetchAll();

        if ($articles) {
            foreach ($articles as $article) {
                echo "<p><a href='article.php?id=" . $article["id"] . "'>" . htmlspecialchars($article["title"]) . "</a></p>";
            }
        } else {
            echo "<p>Pas encore d'articles.</p>";
        }
        ?>
    <?php } ?>
</body>
</html>
