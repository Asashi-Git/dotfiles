<?php
$db_connection = new PDO(
    "mysql:host=localhost;dbname=miniblog;charset=utf8","root",""
);
$db_request = $db_connection->prepare("SELECT * FROM users");
$db_request->execute();
$users = $db_request->fetchAll();

var_export($users);
?>