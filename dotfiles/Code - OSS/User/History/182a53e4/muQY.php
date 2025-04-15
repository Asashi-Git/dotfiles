<?php
    try {
            $db_connection = new PDO(
            "mysql:host=localhost;dbname=miniblog;charset=utf8",
            "root",""
        );
    } catch (Exeption $e) {
        echo"" . $e->getMessage() ."";
    }
    $db_request = $db_connection->prepare(
        "SELECT username FROM users WHERE id >= 2");
    $db_request->execute();
    $usernames = $db_request->fetchAll();
    
    $usernames = [];
    

    var_export($usernames);
?>
