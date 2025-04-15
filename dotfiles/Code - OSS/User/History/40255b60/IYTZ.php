<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="database.php" method="POST">
        <label>User name</label><input name="username" required><br>
        <label>Email</label><input name="email" required><br>
        <label>Password</label><input name="password" required>
        <input type="submit">
     </form>
     <a href="index.php">Login</a>
</body>
</html>