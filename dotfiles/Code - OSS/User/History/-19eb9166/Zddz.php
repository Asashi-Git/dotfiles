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
            <a href="">Menu</a>
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="image/img1.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        
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
                    <div class="author"></div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        
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
                    <div class="author"></div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        
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
                    <div class="author"></div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">RESTAURANT</div>
                    <div class="des">
                        
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
                        
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="title">
                        
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="title">
                        
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="title">
                        
                    </div>
                    <div class="description">
                        
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
