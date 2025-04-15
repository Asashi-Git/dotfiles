<?php
session_start();
require_once("db.php");

$query = $db_connection->prepare("SELECT id, name FROM articles");
$query->execute();
$articles = $query->fetchAll();

?>

<form action="update_article.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
    <input type="text" name="title" value="<?php echo $_GET["name"]; ?>">
    <input type="textarea" name="title" value="<?php echo $_GET["text"]; ?>">
    <button type="submit">Update Article</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["user_id"])) {
    $query = $db_connection->prepare(
        "UPDATE FROM articles WHERE name = :name AND text = :text"
    );
    $query->execute([
        "id" => $_POST["id"],
    ]);
    header("Location: index.php");
    exit();
}
?>