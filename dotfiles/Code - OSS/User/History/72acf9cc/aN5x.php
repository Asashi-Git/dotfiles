<nav>
    <a href="index.php">Accueil</a>
    <?php if (isset($_SESSION["user_id"])) { ?>
        <a href="disconnect.php">Déconnexion</a>
    <?php } else { ?>
        <a href="register.php">Inscription</a>
        <a href="login.php">Connexion</a>
    <?php } ?>
</nav>
