<?php

    session_start();
    $_SESSION["username"] = "sam";
    $_SESSION["password"] = "sam";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
    
</head>
<body>
    <h1>this is the login pages</h1><br>
    <a href="home.php">This goes to the home</a><br>
</body>
</html>

<?php

    echo $_SESSION["username"]."<br>";
    echo $_SESSION["password"]."<br>";

?>
