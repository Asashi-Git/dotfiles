<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>this is the login page</h1><br>
    <a href="home.php">This goes to the home</a>
</body>
</html>

<?php
    $_SESSION["username"] = "sam";
    $_SESSION["password"] = "sam";

    echo $_SESSION["username"]."<br>";
    echo $_SESSION["password"]."<br>";
    
?>