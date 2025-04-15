<?php
    try {
    $db_connection = new PDO(
    "mysql:host=localhost;dbname=miniblog;charset=utf8",
    "root", ""
    );
    } catch (Exception $e) {
    echo $e->getMessage();
    }

    $db_request = $db_connection->prepare(
    "SELECT email FROM users WHERE email=:email AND password=:password"
    );
    $db_request->execute(["email" => $_POST ["email"]]);
    $users = $db_request->fetchAll();

    $emails = [];
    foreach ($users as $user) {
    $emails[] = $user["email"];
    }
    var_export($emails);
?>
