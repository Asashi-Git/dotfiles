 
<?php
 if (isset($_POST["_added_key"]) and !empty($_POST["_added_key"])) {
  setcookie($_POST["_added_key"], $_POST["_value"], time() + 3600);
  $_COOKIE[$_POST["_added_key"]] = $_POST["_value"];
 }
 if (isset($_POST["_remove"])) {
  setcookie($_POST["_key"], "", 1);
  unset($_COOKIE[$_POST["_key"]]);
 }
?>
<h2>Existing cookies</h2>
<ul>
 <?php foreach ($_COOKIE as $key => $value) { ?>
  <li>
   <?= $key ?>: <?= $value?>
   <form action="cookie_manager.php" method="POST">
    <input hidden name="_key" value="<?= $key ?>"><br>
    <button type=submit name="_remove"> X </button><br>
   </form>
  </li>
 <?php } ?>
</ul>
<h2>Insert a new cookie</h2>
<form action="cookie_manager.php" method="POST">
 <label>Key:</label> <input name="_added_key"/><br>
 <label>Value:</label> <input name="_value"/><br>
 <input type=submit>
</form>
 
 