<?php
    try {
        $db_connection = new PDO("mysql:host","dbname=samuel-course"
        ,"charset=utf8","root",""
    ); catch (Exeption $e) {
        echo $e->getMessage();
    }
?>