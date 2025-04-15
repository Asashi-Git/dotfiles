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
?>