<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Miniblog - page d'accueil</title>
	</head>
	<?php require_once("style.php"); ?>
	<body><?php
	session_start();
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
					
				<?php } else {
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
				<div>
					<?php
						if (isset($_SESSION["user_id"])) {
							// Récupérer les articles de l'utilisateur connecté
							$query = $db_connection->prepare("
								SELECT id, title 
								FROM articles 
								WHERE user_id = :user_id
							");
							$query->execute(["user_id" => $_SESSION["user_id"]]);
							$articles = $query->fetchAll();

							if ($articles) {
								echo "<h2>Vos articles :</h2><ul>";
								foreach ($articles as $article) {
									echo "<li><a href='article.php?id=" . $article["id"] . "'>" . htmlspecialchars($article["title"]) . "</a></li>";
								}
								echo "</ul>";
							} else {
								echo "<p>Vous n'avez pas encore d'articles.</p>";
							}
						}
					?>
				</div>
				<div>
					<?php if (!isset($_SESSION["user_id"])) { ?>
						<h2>Créer un nouvel article</h2>
						<form action="add_article.php" method="POST">
							<label for="title">Titre :</label>
							<input type="text" id="title" name="title" required>
							<br>
							<label for="content">Contenu :</label>
							<textarea id="content" name="content" placeholder="Écrivez votre contenu ici..."></textarea>
							<br>
							<button type="submit">Créer l'article</button>
						</form>
					<?php } ?>
				</div>
			</article>
		</main>
	</body>
	
</html>
		<?php require_once("navbar.php"); ?>
		<main>
			<article>
				<h1>Page d'accueil de Miniblog</h1>
				
				<?php if (!isset($_SESSION["user_id"])) { ?>

					<!-- Page sans login -->
					<p><a href="login.php">Connectez vous</a> pour accéder au site</p>
					
				<?php } else {
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
				
				<div>
					<h2>Welcome to the articles</h2>
					<button href="aritcle.php">New article</button>

					<?php
					$db_request = $db_connection->prepare(
						"SELECT *, name FROM articles
						WHERE text=:text"
					);
					$db_request->execute([
						"text" => $_POST["text"],
					]);
					$user = $db_request->fetch();
					?>

					<button href="article.php"><?php require_once("article.php"); ?></button>
				</div>
			</article>
		</main>
	</body>
	
</html>