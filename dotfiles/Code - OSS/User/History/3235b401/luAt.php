<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Miniblog - page d'accueil</title>
	</head>
	<?php require_once("style.css"); ?>
	<body>
		<?php require_once("navbar.php"); ?>
		<main>
			<article>
				<h1>Login</h1>
				<form action="auth.php" method="POST">
					<input placeholder="Email" name="email"><br>
					<input placeholder="Password" name="password">
					<br>
					<input class="submit-button" type="submit">
				</form>
			</article>
		</main>
	</body>
	
</html>