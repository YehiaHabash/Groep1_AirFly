<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reserveren.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High</title>
</head>
<body>

<div class="container">


</div>

<main>
    <h>PLANNING</h>
    <!DOCTYPE html>

    <html>
    <head>

        <title>Vluchtreservering</title>
        <style>


        </style>
        <script>
            var vliegtuigStatus = {
                "Hilversum_air1": {
                    isInOnderhoud: true,
                    foto: "link_naar_vliegtuig_ABC123.jpg",
                    prijs: "$200"
                },
                "Hilversum_air2": {
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
                var bericht = isInOnderhoud ? "Dit vliegtuig is in onderhoud." : "Dit vliegtuig is vrij voor gebruik. " + prijs;
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

    <form method="POST" action="planning.php">
        <div style="display: flex; justify-content: space-between;">
            <div>
                <label for="naam">naam:</label>
                <input type="text" id="naam" name="naam" required>
            </div>
            <div>
                <label for="vertrek">vertrek:</label>
                <select id="vertrek" name="vertrek">
                    <option value="Hilversum">Hilversum</option>
                    <option value="Amsterdam">Amsterdam</option>
                </select>
            </div>
        </div>

        <label for="bestemming">Bestemming:</label>
        <select id="bestemming" name="bestemming">
            <option value="Hilversum">Hilversum</option>
            <option value="Amsterdam">Amsterdam</option>
        </select>

        <label for="datum">Datum:</label>
        <input type="date" id="datum" name="datum" required>

        <label for="vliegtuig">Vliegtuig:</label>
        <select id="vliegtuig" name="vliegtuig">
            <option>Hilversum air1</option>
            <option>Hilversum air2</option>
            <option>Hilversum air3</option>
        </select>

        <input type="submit" value="Reserveer" class="btn">

    </form>

    <?php

    require_once "database/conn.php";
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $naam = $_POST['naam'];
        $vertrek = $_POST['vertrek'];
        $bestemming = $_POST['bestemming'];
        $datum = $_POST['datum'];
        $vliegtuig = $_POST['vliegtuig'];


        require_once "database/cleanDataFunction.php";

        $naam = clean_data($naam);
        $vertrek = clean_data($vertrek);
        $bestemming = clean_data($bestemming);
        $datum = clean_data($datum);
        $vliegtuig = clean_data($vliegtuig);

        $user_email = clean_data($_SESSION['user']);


        $naam = mysqli_real_escape_string($conn, $naam);
        $vertrek = mysqli_real_escape_string($conn, $vertrek);
        $bestemming = mysqli_real_escape_string($conn, $bestemming);
        $datum = mysqli_real_escape_string($conn, $datum);
        $vliegtuig = mysqli_real_escape_string($conn, $vliegtuig);


        $sql = "INSERT INTO vluchten
(naam,
vertrek,
bestemming,
datum,
vliegtuig,
email)
VALUES(
'$naam',
'$vertrek',
'$bestemming',
'$datum',
'$vliegtuig',
'$user_email')";


        $result = mysqli_query($conn, $sql);
        header("location: succesvolle_boeking.php");

        if (!$result) {
            echo "Query error";
            mysqli_close($conn);
        }
    }
    ?>

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