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
    "SELECT * FROM users"
    );
    $db_request->execute();
    $users = $db_request->fetchAll();

    $data = [];
    foreach ($users as $user) {
    $data[] = $user[""];
    }
    var_export($data);
?>
