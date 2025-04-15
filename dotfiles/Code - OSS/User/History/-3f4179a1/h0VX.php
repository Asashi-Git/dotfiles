<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		try {
			$db_connection = new PDO(
				"mysql:host=localhost;dbname=miniblog;charset=utf8",
				"root", ""
			);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	
		function check_email($db_connection, $email) {
			$db_request = $db_connection->prepare(
				"SELECT email FROM users
				WHERE email=:email"
			);
			$db_request->execute([
				"email" => $email,
			]);
			if ($db_request->rowCount()) {
				echo "User already exists!!!";
				return false;
			}
			return true;
		}
	
		if (check_email($db_connection, $_POST["email"])) {
			$db_request = $db_connection->prepare(
				"INSERT INTO users (username, email, password, personal_page) VALUES
				(:username, :email, :password, :personal_page)"
			);
			$db_request->execute([
				":username" => $_POST["username"],
				":email" => $_POST["email"],
				":password" => $_POST["password"],
				":personal_page" => $_POST["personal_page"],
			]);
	
			echo "New user created!!!";
		}
	}
?>

<h2>Register</h2>
<form action="register.php" method="POST">
	<label>Username</label><input name="username"><br>
	<label>Email</label><input name="email"><br>
	<label>Password</label><input name="password"><br>
	<label>Personal page</label><input name="personal_page">
	<input type="submit">
</form>
<a href="index.php">Login</a>