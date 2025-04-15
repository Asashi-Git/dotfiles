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
                    <form id="reservation-form" action="/cible" method="POST">
                        <label for="nb-personne">Pour combien de personne est la reservation ? :</label>
                        <select name="nb-personne" id="nb-personne">
                            <option value="1-personne">1 Personne</option>
                            <option value="2-personne">2 Personnes</option>
                            <option value="3-personne">3 Personnes</option>
                            <option value="4-personne">4 Personne</option>
                            <option value="5-personne">5 Personnes</option>
                            <option value="6-personne">6 Personnes</option>
                        </select>
                        <br>
                        <label for="horraire">Pour quel horraire souhaitez-vous reserve ? :</label>
                        <select name="horraire" id="horraire">
                            <option value="midi">Midi</option>
                            <option value="soir">Soir</option>
                        </select>
                        <br>
                        <label for="where">Dans quel parti du restaurant souhaitez-vous manger ? :</label>
                        <br>
                        <select name="where" id="where">
                            <option value="exterieur">Exterieur</option>
                            <option value="interieur">Interieur</option>
                            <option value="privee">Sale privee</option>
                            <option value="bar">Bar</option>
                        </select>
                        <br>
                        <button type="submit" class="submit-button">Envoyer</button>
                    </form>
                </div>
            </div>
            <div class="right-reservation">
                <h2>PAYEMENT</h2>
                <div class="reservation">
                    <p>paye paye paye</p>
                    <button form="reservation-form" type="submit">Envoyer</button>
                </div>
            </div>
        </article>
     </main>
</body>
</html>