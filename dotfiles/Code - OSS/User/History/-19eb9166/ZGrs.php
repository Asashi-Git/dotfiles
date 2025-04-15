<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La fleche d'argent restaurant</title>
    <link rel="stylesheet" href="css/restau.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="info.php">Info</a>
            <a href="restau-reservation.php">Reservation</a>
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="image/img1.jpg">
                <div class="content">
                    <div class="author">SAM</div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        Le chef cuisinier du restaurant La Flèche d'Argent, situé dans un hôtel 4 étoiles de luxe, Antoine Delacroix. Fort d'une expérience inégalée dans des cuisines prestigieuses, il a su allier tradition et innovation pour offrir une cuisine raffinée et créative. Chaque plat qu'il prépare est une véritable œuvre d'art, réalisée avec des ingrédients de la plus haute qualité, souvent locaux, qu’il sélectionne avec soin pour garantir des saveurs exceptionnelles.
                    </div>
                    <div class="buttons">
                        <button type="button" onclick="window.location.href='info.php';">SEE MORE</button>
                        <button type="button" onclick="window.location.href='restau-reservation.php';">RESERVATION</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="author">SAM</div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        Le restaurant La Flèche d'Argent, situé dans un hôtel 4 étoiles de luxe, propose une expérience culinaire exceptionnelle. Dirigé par le chef Antoine Delacroix, il allie tradition et créativité dans une ambiance raffinée. Chaque plat, préparé avec des produits locaux de qualité, offre une explosion de saveurs unique.
                    </div>
                    <div class="buttons">
                        <button type="button" onclick="window.location.href='info.php';">SEE MORE</button>
                        <button type="button" onclick="window.location.href='restau-reservation.php';">RESERVATION</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="author">SAM</div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        Les plats gastronomiques du restaurant La Flèche d'Argent sont une véritable exploration des saveurs. Élaborés par le chef Antoine Delacroix, chaque mets marie finesse, créativité et produits locaux d'exception. Des compositions délicates et élégantes qui offrent une expérience sensorielle unique, sublimant la cuisine française dans toute sa splendeur.
                    </div>
                    <div class="buttons">
                        <button type="button" onclick="window.location.href='info.php';">SEE MORE</button>
                        <button type="button" onclick="window.location.href='restau-reservation.php';">RESERVATION</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="author">SAM</div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        L'ambiance du restaurant La Flèche d'Argent est élégante et chaleureuse, alliant raffinement et confort. La décoration soignée crée un cadre intime et sophistiqué, parfait pour une expérience culinaire exceptionnelle. L'éclairage tamisé et le service attentif contribuent à une atmosphère à la fois sereine et prestigieuse.
                    </div>
                    <div class="buttons">
                        <button type="button" onclick="window.location.href='info.php';">SEE MORE</button>
                        <button type="button" onclick="window.location.href='restau-reservation.php';">RESERVATION</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="image/img1.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>

    <script src="js/restau.js"></script>
</body>
</html>