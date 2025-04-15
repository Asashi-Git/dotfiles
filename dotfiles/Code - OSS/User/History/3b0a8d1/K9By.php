<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion-inscription.css">
    <title>Reservation de table</title>
</head>
<body>
    <!-- header -->
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="hotel.php">Hotel</a>
            <a href="index-restau.php">Restaurant</a>
            <a href="spa.php">Spa</a>
        </nav>
    </header>
    <!-- connection inscription -->
     <main>
        <article class="reservation-main">
            <div class="left-reservation">
                <?php require_once("login.php"); ?>
            </div>
            <div class="right-reservation">
                <?php require_once("register.php"); ?>
            </div>
        </article>
     </main>
</body>
</html>