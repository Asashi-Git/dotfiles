<?php
	session_start();
	require_once("db.php");

	$db_request = $db_connection->prepare(
		"SELECT id, password FROM users
		WHERE email=:email"
	);
	$db_request->execute([
		"email" => $_POST["email"],
	]);
	$user = $db_request->fetch();
	if ($user and password_verify($_POST["password"], $user["password"])) {
		$_SESSION["user_id"] = $user["id"];
		header("Location: index.php");
		exit();
	} else {
		echo "Bad email and/or password :(";
	}
?>