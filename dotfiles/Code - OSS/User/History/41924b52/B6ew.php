<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>This is the home page</h1><br>
    <a href="index.php">This goes to the login</a><br>
    <?php
        if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
            echo "Username: " . $_SESSION["username"] . "<br>";
            echo "Password: " . $_SESSION["password"] . "<br>";
        } else {
            echo "No session data found.<br>";
        }
    ?>
</body>
</html>
