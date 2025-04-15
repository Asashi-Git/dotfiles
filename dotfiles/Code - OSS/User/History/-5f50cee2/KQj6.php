<?php
session_start();
require_once("db.php");
?>



<form action="delete_article.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $article_id; ?>">
    <button type="submit">Delete Article</button>
</form>

<?php
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