<?php
require_once "database/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/ledenlijst.css">
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Glenn van der Wal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High</title>
</head>
<body>

<div class="container">

    <div class="Logo">
        <img src="img/SkyHighLogo.png" alt="SkyHighLogo">

    </div>

    <div class="Registreren">
        <a href="#" class="hover-underline-animation">REGISTREREN</a>
        <a href="#" class="hover-underline-animation">INLOGGEN</a>
    </div>

    <header>Sky High</header>

    <nav>
        <a href="index.php" class="hover-underline-animation">HOME</a>
        <a href="fotos.php" class="hover-underline-animation">FOTOS</a>
        <a href="planning.php" class="hover-underline-animation">PLANNING</a>
        <a href="ledenlijst.php" class="hover-underline-animation">LEDENLIJST</a>
        <a href="contact.php" class="hover-underline-animation">CONTACT</a>
    </nav>


</div>

<main>
    <h>LEDENLIJST</h>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Team Pagina</title>
        <style>
            .team-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .team-member {
                flex: 0 0 calc(33.33% - 20px);
                margin-bottom: 20px;
                padding: 0 10px;
            }
            .team-member .info {
                display: none;
            }
            .social-icons {
                list-style: none;
                padding: 0;
                margin-top: 10px;
            }
            .social-icons li {
                display: inline-block;
                margin-right: 5px;
            }
            .social-icons li:last-child {
                margin-right: 0;
            }
            .social-icons a {
                display: inline-block;
                width: 30px;
                height: 30px;
                background-color: #333;
                color: #fff;
                text-align: center;
                line-height: 30px;
                font-size: 20px;
                text-decoration: none;
            }
        </style>
        <script>
            function showInfo(member) {
                var info = member.nextElementSibling;
                if (info.style.display === "none") {
                    info.style.display = "block";
                } else {
                    info.style.display = "none";
                }
            }
        </script>
    </head>
    <body>
    <h1>Ons Team</h1>

    <div class="team-container">
        <div class="team-member">
            <h2>Teamlid 1</h2>
            <button onclick="showInfo(this)">Meer informatie</button>
            <div class="info">
                <img src="teamlid1.jpg" alt="Foto van Teamlid 1" width="200">
                <p>Voornaam: John</p>
                <p>Achternaam: Doe</p>
                <p>Positie: Manager</p>
                <ul class="social-icons">
                    <li><a href="https://www.linkedin.com/johndoe" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.twitter.com/johndoe" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <!-- Voeg hier meer social media links toe -->
                </ul>
            </div>
        </div>

        <div class="team-member">
            <h2>Teamlid 2</h2>
            <button onclick="showInfo(this)">Meer informatie</button>
            <div class="info">
                <img src="teamlid2.jpg" alt="Foto van Teamlid 2" width="200">
                <p>Voornaam: Jane</p>
                <p>Achternaam: Smith</p>
                <p>Positie: Ontwikkelaar</p>
                <ul class="social-icons">
                    <li><a href="https://www.linkedin.com/janesmith" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.twitter.com/janesmith" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <!-- Voeg hier meer social media links toe -->
                </ul>
            </div>
        </div>

        <div class="team-member">
            <h2>Teamlid 3</h2>
            <button onclick="showInfo(this)">Meer informatie</button>
            <div class="info">
                <img src="teamlid3.jpg" alt="Foto van Teamlid 3" width="200">
                <p>Voornaam: Mark</p>
                <p>Achternaam: Johnson</p>
                <p>Positie: Designer</p>
                <ul class="social-icons">
                    <li><a href="https://www.linkedin.com/markjohnson" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.twitter.com/markjohnson" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <!-- Voeg hier meer social media links toe -->
                </ul>
            </div>
        </div>

        <!-- Voeg hier meer teamleden toe -->

    </div>

    <!-- Voeg hier eventueel de FontAwesome CSS- en JS-bestanden toe -->

    </body>
    </html>
</main>

</body>
</html>
