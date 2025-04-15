<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Acceuille</title>
</head>
<body>
    <header><?php require_once("navbar.php") ?></header>
    <main>
        <article class="welcome">
            <div class="welcome-title">
                <h1>Bienvenue a la Fleche D'Argent</h1>
            </div>
            <div class="presentation">
                <div class="left-div">
                    <p>
                    L’Hôtel La Flèche d'Argent, symbole de raffinement et d’élégance, trouve ses racines dans une tradition d'hospitalité qui remonte à plusieurs décennies. Construit au début du 20e siècle, cet hôtel de luxe était initialement un somptueux manoir appartenant à une famille bordelaise influente. Au fil des ans, il est devenu un lieu incontournable pour les voyageurs les plus exigeants, en quête de confort et de discrétion.</p>
                    <p>Au cœur de Bordeaux, cet hôtel a su évoluer, alliant charme historique et modernité. Dans les années 1950, un ambitieux projet de rénovation lui a permis de conserver son caractère classique tout en intégrant les équipements de confort les plus modernes. L’hôtel devient alors une référence dans le domaine de l’hôtellerie de luxe, attirant une clientèle internationale, en quête de services exclusifs et d'une expérience unique.</p>
                    <p>Le nom « La Flèche d'Argent » provient d’une légende locale racontant l’histoire d’un ancien seigneur bordelais, qui, lors d'une chasse, trouva une flèche en argent, symbole de réussite et de fortune. Cette flèche, gravée dans l’histoire de la ville, est aujourd’hui l'emblème de notre établissement, incarnant la quête d'excellence et de perfection qui guide chaque aspect de notre hôtel.</p>
                    <p>Aujourd’hui, après une transformation complète pour répondre aux standards les plus élevés de l’hôtellerie moderne, l’Hôtel La Flèche d’Argent continue de séduire ses hôtes par son atmosphère intime, son architecture majestueuse et son service irréprochable. Que ce soit pour un séjour d’affaires, une escapade romantique ou un événement prestigieux, chaque visiteur est invité à découvrir l’élégance intemporelle de cet hôtel unique.</p>
                    <p>Avec son restaurant étoilé, ses chambres haut de gamme et son spa de luxe, l'Hôtel La Flèche d'Argent incarne aujourd'hui l’âme de Bordeaux, une ville qui allie histoire, art de vivre et raffinement.</p>
                </div>
                <div class="right-div">
                    <img src="image/entrance.png" alt="" class="welcome-image">
                    <!-- <div class="welcome-image"></div> -->
                </div>
            </div>
        </article>
        <div class="services-title">
            <h2>Nos services</h2>
        </div>
        <article class="services">
            <div>



            <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="image/bedroom.png">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">HOTEL</div>
                    <div class="des">
                        
                    </div>
                    <div class="buttons">
                        <button type="button" onclick="window.location.href='chambre_login.php';">SEE MORE</button>
                        <button type="button" onclick="window.location.href='chambre_login.php';">RESERVATION</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/resto.png">
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
                <img src="image/spa.png">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">LA FLECHE D'ARGENT</div>
                    <div class="topic">SPA</div>
                    <div class="des">
                        
                    </div>
                    <div class="buttons">
                        <button type="button" onclick="window.location.href='spa.php';">SEE MORE</button>
                        <button type="button" onclick="window.location.href='spa.php';">RESERVATION</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="image/bedroom.png">
                <div class="content">
                    <div class="title">
                        Hotel
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/resto.png">
                <div class="content">
                    <div class="title">
                        Restaurant
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/spa.png">
                <div class="content">
                    <div class="title">
                        Spa
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




            </div>
        </article>
    </main>
</body>
</html>