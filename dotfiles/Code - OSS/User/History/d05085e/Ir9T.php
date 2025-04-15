<?php
    var_export($_COOKIE)
?>

<form action="index.php" method="POST">
    <label for="username">Username</label><br>
    <input name="username"/><br>
    <label for="human">Are you Humain?</label><br>
    <input type="checkbox" name="human"/><br>
    <input name="password"/>
    <button type="submit">Send</button>
</form>

<?php
    var_export($_POST);
?>