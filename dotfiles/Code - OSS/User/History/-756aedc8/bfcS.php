<?php
    try {
        $db_connection = new PDO("mysql:host","dbname=samuel-course"
        ,"charset=utf8","root",""
    ); catch (Exeption $e) {
        echo $e->getMessage();
    }

    $db_request = $db_connection->prepare(
        "SELECT username FROM users
        WHERE email=:email AND password=:password"
        );
        $db_request->execute([
            "email" => $_POST["email"],
            "password"=> $_POST["password"]
        ]);
        $user = $db_request->fetch();
        if ($user) {
            echo "Succesfully logged in as {$user["username"]}";
        } else {
            echo "Bad email and/or password";
?>