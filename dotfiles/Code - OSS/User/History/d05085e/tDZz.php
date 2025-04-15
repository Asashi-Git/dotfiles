<form action="index.php" method="POST">
    <input name="username"/>
    <input name="password"/>
    <button type="submit">Send</button>
</form>

<?php
    var_export($_POST);
?>