<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/restau-reservation.css">
    <title>Reservation de table</title>
</head>
<body>
    <!-- header -->
    <header>
        <nav>
            <a href="index-restau.php">Home</a>
            <a href="">Reservation</a>
            <a href="info.php">Info</a>
        </nav>
    </header>
    <!-- reservation table -->
     <main>
        <article class="reservation-main">
            <div class="left-reservation">
                <h2>RESERVATION</h2>
                <div class="reservation">
                    <p>reserve reserve reserve</p>
                    <form action="/cible" method="get">
                        <label for="choix">Pour combien de personne est la reservation? :</label>
                        <select name="choix" id="choix">
                            <option value="choix1">1 Personne</option>
                            <option value="choix2">2 Personnes</option>
                            <option value="choix3">3 Personnes</option>
                            <option value="choix4">4 Personne</option>
                            <option value="choix5">5 Personnes</option>
                            <option value="choix6">6 Personnes</option>
                        </select>
                        <br>
                        <label for="choix">Pour quel horraire souhaitez-vous reserve? :</label>
                        <select name="choix" id="choix">
                            <option value="choix1">Midi</option>
                            <option value="choix2">Soir</option>
                        </select>
                        <br>
                        <label for="choix">Dans quel parti du restaurant souhaitez-vous manger? :</label>
                        <select name="choix" id="choix">
                            <option value="choix1">Exterieur</option>
                            <option value="choix2">Interieur</option>
                            <option value="choix4">Sale privee</option>
                            <option value="choix3">Bar</option>
                        </select>
                        <br>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
            <div class="right-reservation">
                <h2>PAYEMENT</h2>
                <div class="reservation">
                    <p>paye paye paye</p>
                </div>
            </div>
        </article>
     </main>
</body>
</html>