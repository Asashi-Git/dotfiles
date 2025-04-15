<?php
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
					<h2>Welcome to the articles</h2>
					<button href="aritcle.php">New article</button>

					<?php
					$db_request = $db_connection->prepare(
						"SELECT id, password FROM users
						WHERE email=:email"
					);
					$db_request->execute([
						"email" => $_POST["email"],
					]);
					$user = $db_request->fetch();
					?>
					
					<button href="article.php"><?php require_once("article.php"); ?></button>
				</div>
			</article>
		</main>
	</body>
	
</html>