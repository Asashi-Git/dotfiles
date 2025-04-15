<?php
try {
    $db_connection = new PDO(
        "mysql:host=localhost;dbname=miniblog;charset=utf8",
        "root", ""
    );
    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}
?>
