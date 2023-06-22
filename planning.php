
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High</title>
</head>
<body>

<div class="container">

    <?php include_once "./includes/header.php"; ?>
    <?php

    // Controleer of de gebruiker is ingelogd
    if (!isset($_SESSION['login'])) {
        // Stuur de gebruiker naar de inlogpagina als deze niet is ingelogd
        header('Location: inloggen.php');
        exit;
    }
    ?>

</div>

<main>
    <h>PLANNING</h>
    <!DOCTYPE html>

    <html>
    <head>
        <title>Vluchtreservering</title>
        <style>

            <?php include_once "./css/reserveren.css"; ?>

        </style>
        <script>
            var vliegtuigStatus = {
                "ABC123": {
                    isInOnderhoud: true,
                    foto: "link_naar_vliegtuig_ABC123.jpg",
                    prijs: "$200"
                },
                "XYZ789": {
                    isInOnderhoud: false,
                    foto: "link_naar_vliegtuig_XYZ789.jpg",
                    prijs: "$150"
                }
            };

            function reserveerVlucht() {
                var naam = document.getElementById("naam").value;
                var vertrek = document.getElementById("vertrek").value;
                var bestemming = document.getElementById("bestemming").value;
                var datum = document.getElementById("datum").value;
                var vliegtuigID = document.getElementById("vliegtuig").value;

                if (naam === "" || vertrek === "" || bestemming === "" || datum === "") {
                    alert("Vul alstublieft alle gegevens in.");
                    return;
                }

                var isInOnderhoud = vliegtuigStatus[vliegtuigID].isInOnderhoud;
                var fotoURL = vliegtuigStatus[vliegtuigID].foto;
                var prijs = vliegtuigStatus[vliegtuigID].prijs;
                var bericht = isInOnderhoud ? "Dit vliegtuig is in onderhoud." : "Dit vliegtuig is vrij voor gebruik. Prijs: " + prijs;
                document.getElementById("successMessage").textContent = bericht;
                document.getElementById("successMessage").style.display = "block";
                document.getElementById("vliegtuigFoto").src = fotoURL;

                if (isInOnderhoud) {
                    document.getElementById("vliegtuig").classList.add("maintenance");
                } else {
                    document.getElementById("vliegtuig").classList.remove("maintenance");
                    // Als het vliegtuig vrij is, ga naar succesvolle boekingspagina
                    window.location.href = "succesvolle_boeking.php";
                }
            }
        </script>
    </head>
    <body>
    <h1>Vluchtreservering</h1>

    <form>
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>

        <label for="vertrek">Vertrek:</label>
        <select id="vertrek" name="vertrek">
            <option value="Hilversum">Hilversum</option>
            <option value="Amsterdam">Amsterdam</option>
        </select>

        <label for="bestemming">Bestemming:</label>
        <select id="bestemming" name="bestemming">
            <option value="Hilversum">Hilversum</option>
            <option value="Amsterdam">Amsterdam</option>
        </select>

        <label for="datum">Datum:</label>
        <input type="date" id="datum" name="datum" required>

        <label for="vliegtuig">Vliegtuig:</label>
        <select id="vliegtuig">
            <option value="ABC123">ABC123 ($200)</option>
            <option value="XYZ789">XYZ789 ($150)</option>
        </select>

        <input type="button" value="Reserveer" onclick="reserveerVlucht()">
    </form>

    <div id="successMessage" class="success-message" style="display: none;">
        <!-- Het bericht zal hier worden weergegeven -->
    </div>

    <div>
        <img id="vliegtuigFoto" src="" alt="Vliegtuig foto" style="display: none; margin-top: 20px; max-width: 300px;">
    </div>
    </body>
    </html>


</main>

</body>
</html>
