<h2>Login</h2>
<form action="auth.php" method="POST">
    <label>Email</label><input name="email" type="email" required><br><br>
    <label>Password</label><input name="password" type="password" required><br><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve user input from the form
    $input_email = $_POST['email'];
    $input_password = $_POST['password'];

    try {
        // Connect to the database
        $db_connection = new PDO(
            "mysql:host=localhost;dbname=miniblog;charset=utf8",
            "root", ""
        );
    } catch (Exception $e) {
        // Handle connection error
        echo "Connection failed: " . $e->getMessage();
        exit;
    }

    // Query to find the user with the provided email
    $db_request = $db_connection->prepare(
        "SELECT email, password FROM users WHERE email = :email"
    );
    $db_request->bindParam(':email', $input_email, PDO::PARAM_STR);
    $db_request->execute();

    $user = $db_request->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verify the entered password against the stored password
        if (password_verify($input_password, $user['password'])) {
            echo "Login successful. Welcome, " . htmlspecialchars($user['email']) . "!";
        } else {
            echo "Incorrect password. Access denied.";
        }
    } else {
        echo "No account found with this email.";
    }
}
?>
