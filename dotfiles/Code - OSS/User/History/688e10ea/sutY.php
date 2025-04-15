<?php
	session_start();
	require_once("db.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Miniblog - page d'accueil</title>
	</head>
	<?php require_once("style.php"); ?>
	<body>
		<?php require_once("navbar.php"); ?>
		<main>
			<article>
				<h1>Page d'accueil de Miniblog</h1>
				
				<?php if (!isset($_SESSION["user_id"])) { ?>

					<!-- Page sans login -->
					<p><a href="login.php">Connectez vous</a> pour accéder au site</p>
					
				<?php } else { ?>

					<h2>Créer un nouvel article</h2>
					<form action="add_article.php" method="POST">
						<input type="text" name="name" placeholder="Titre de l'article" required><br>
						<textarea name="text" placeholder="Contenu de l'article"></textarea><br>
						<link rel="stylesheet" href="style.css">
						<button type="submit">Créer</button>
					</form>

					<h2>Tout les articles</h2>

					<?php
					$query = $db_connection->prepare("SELECT id, name FROM articles");
					$query->execute();
					$articles = $query->fetchAll();

					if ($articles) {
						foreach ($articles as $article) {
							echo "<p><a href='article.php?id=" . $article["id"] . "'>" . htmlspecialchars($article["name"]) . "</a></p>";
						}
					} else {
						echo "<p>Pas encore d'articles.</p>";
					}
					?>

					<?php
					require_once("db.php");

					$db_request = $db_connection->prepare(
						"SELECT username, personal_page FROM users WHERE id=:id"
					);
					$db_request->execute([
						":id" => $_SESSION["user_id"],
					]);

					$user = $db_request->fetch();
				?>

					<!-- Page avec login -->
					<p>Connecté en tant que <?= htmlspecialchars($user["username"]) ?></p>
					<?= htmlspecialchars($user["personal_page"]); ?>

				<?php } ?>
			</article>
		</main>
	</body>
	
</html>