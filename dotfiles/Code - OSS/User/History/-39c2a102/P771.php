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
            <a href="index.php">Home</a>
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
                    <form id="reservation-form" action="/cible" method="post">
                        <label for="nb-personne">Pour combien de personne est la reservation ? :</label>
                        <br>
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
                        <br>
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
                    </form>
                </div>
            </div>
            <div class="right-reservation">
                <h2>PAYEMENT</h2>
                <div class="reservation">
                    <div id="paymentMethod1" class="payment-div" onclick="selectPaymentMethod('paymentMethod1')">
                        <div class="radio-button"></div>
                        Carte de Crédit
                    </div>
                    <div id="paymentMethod2" class="payment-div" onclick="selectPaymentMethod('paymentMethod2')">
                        <div class="radio-button"></div>
                        PayPal
                    </div>
                    <div id="paymentMethod3" class="payment-div" onclick="selectPaymentMethod('paymentMethod3')">
                        <div class="radio-button"></div>
                        Bitcoin
                    </div>
                    <div class="div-submit-button">
                        <button form="reservation-form" class="submit-button" type="submit">Envoyer</button>
                    </div>
                </div>
            </div>
        </article>
     </main>
     <script src="js/reservation.js"></script>
</body>
</html>