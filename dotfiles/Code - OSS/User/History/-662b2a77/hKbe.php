<?php
require_once("db.php");
require_once("Navbar.php");

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-reserv.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <title>Reservation</title>
</head>
<body>


<?php 

$reservation = $_GET["type"];


if($reservation == "spa"){
    $reservation = "Le Spa";
}

elseif($reservation == "chambre"){
    $reservation = "La Chambre";
}

elseif($reservation == "restaurant"){
    $reservation = "Le restaurant";
}

?>

<div id="overlay"></div>  
  <div id="container" id="timer">
    <div id="circle">
      <i class="fa fa-check"></i> 
    </div> 
    <h1>Validé !</h1>
    <p>Merci de votre réservation pour <?php echo $reservation; ?> ! 
        Votre réservation a bien était prise en compte !</p>
    <a href="index.php" class="butt"><button class="butt">Ok</button></a>
  </div>
</body>
</html>