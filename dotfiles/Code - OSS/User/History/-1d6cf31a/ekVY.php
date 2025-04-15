<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Identification</title>
	</head>
	<body>
		<main>
			<article class="login">
				<h2>Login</h2>
				<form action="auth.php" method="POST">
					<input placeholder="Email" name="mail"><br>
					<input placeholder="Mot de passe" name="mdp"><br>
					<input class="submit-button" type="submit">
				</form>
			</article>
		</main>
	</body>
</html>