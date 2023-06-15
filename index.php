<?php

require_once 'Php/database/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Php/CSS/main.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Yehia Habash">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sky High</title>
</head>
<body>

<div class="users">
    <?php
    $sql = "SELECT * FROM users";
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_row()) {
    ?>
    <p><?php echo $row[0]?></p>
    <p><?php echo $row[1]?></p>
    <p><?php echo $row[2]?></p>
    <p><?php echo $row[3]?></p>
    <p><?php echo $row[4]?></p>
    <p><?php echo $row[5]?></p>


    <?php
        }
    }

    ?>

</div>
<div class="container">

    <div class="Logo">
        <img src="Php/img/SkyHighLogo.png" alt="SkyHighLogo">
    </div>

    <div class="Registreren">
        <a href="Php/registreren.php" class="hover-underline-animation">REGISTREREN</a>
        <a href="Php/inloggen.php" class="hover-underline-animation">INLOGGEN</a>


    </div>

    <header>Sky High</header>

    <nav>
        <a href="index.php" class="hover-underline-animation">HOME</a>
        <a href="Php/fotos.php" class="hover-underline-animation">FOTOS</a>
        <a href="Php/planning.php" class="hover-underline-animation">PLANNING</a>
        <a href="Php/ledenlijst.php" class="hover-underline-animation">LEDENLIJST</a>
        <a href="Php/contact.php" class="hover-underline-animation">CONTACT</a>
    </nav>

    <main>
        <h>HOME</h>
    </main>

    <footer>
            <div id="ww_24e469d93fbf1" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl7908"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFFFFF00","cl_font":"rgba(255,255,255,1)","cl_cloud":"#d4d4d4","cl_persp":"#2196F3","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>More forecasts: <a href="https://oneweather.org/nl/amsterdam/30_days/" id="ww_24e469d93fbf1_u" target="_blank">30 dagen weer</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_24e469d93fbf1"></script>
    </footer>

</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
<script src="Php/Including/Javascript.js"></script>
</body>
</html>
