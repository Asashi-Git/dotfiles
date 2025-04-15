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
			<article>
				<h2>Login</h2>
				<div class="reservation">
					<form action="auth.php" method="POST">
						<input placeholder="Email" name="mail"><br>
						<input placeholder="Mot de passe" name="mdp"><br>
						<div class="submit-button">
							<input class="submit-button" type="submit">
						</div>
					</form>
				</div>
			</article>
		</main>
	</body>
</html>