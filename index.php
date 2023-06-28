<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Yehia Habash & Glenn van der Wal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sky High</title>
</head>
<body>

<div class="container">

    <?php include_once "./includes/header.php"; ?>
    
</div>
<main>
    <h>HOME</h>
</main>

<footer>
    <div style="display: flex; justify-content: center;">
        <div style="border: 0px solid #d4d4d4; background-color: transparent; padding: 80px; width: 300px; margin-right: 10px;">
            <div class="weerbericht" id="ww_efff0b1cd1dc8" v='1.3' loc='id'
                 a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl7908"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFFFFF00","cl_font":"rgba(249,248,248,1)","cl_cloud":"#d4d4d4","cl_persp":"#2196F3","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                More forecasts: <a href="https://oneweather.org/nl/amsterdam/30_days/" id="ww_efff0b1cd1dc8_u"
                                   target="_blank">het weer 30 dagen</a>
            </div>
            <script async src="https://app1.weatherwidget.org/js/?id=ww_efff0b1cd1dc8"></script>
        </div>

        <div class="background">
            <div class="nav">
                <div class="navWrapper">
                </div>
            </div>

            <div class="header">
                <div class="calendar">
                    <h5 id="mmyy"></h5>
                    <h2 id="day"></h2>
                </div>
            </div>
        </div>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto:400,900');

            * {
                margin: 0;

            }

            html {
                font-family: "roboto", sans-serif;
            }

            .background {
                width: 100%;
                height: 40vh;
                background: transparent;

            }

            .nav {
                width: 100%;
                height: 5px;

            }

            .navWrapper {
                width: 85%;
                margin: auto;
                padding-top: 38px;
            }

            .navWrapper a {
                color: white;
                text-decoration: none;
                font-size: 24px;
                font-weight: 900;
                letter-spacing: 1px;
                text-transform: uppercase;
            }

            .header {
                margin-top: 10vh;
            }

            .calendar {
                margin: auto;
                width: 245px;
                border-radius: 14px;
            }

            .calendar h5 {
                background-color: #2a9de1;
                color: white;
                font-size: 24px;
                font-weight: 900;
                letter-spacing: 1px;
                padding: 7px 60px 7px 60px;
                text-transform: uppercase;

            }

            .calendar h2 {
                color: #202020;
                font-size: 125px;
                font-weight: 900;
                text-align: center;
                width: 244px;
                background-color: #9cd9ff;
                padding-top: 5px;
                padding-bottom: 5px;
                box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            }
        </style>

        <script>
            var date = new Date();

            var day = date.getDate();

            var months = new Array();
            months[0] = "Januari";
            months[1] = "Februari";
            months[2] = "Maart";
            months[3] = "April";
            months[4] = "Mei";
            months[5] = "Juni";
            months[6] = "Juli";
            months[7] = "Augustus";
            months[8] = "September";
            months[9] = "Oktober";
            months[10] = "November";
            months[11] = "December";

            var month = months[date.getMonth()];

            var year = date.getFullYear();

            document.getElementById("mmyy").innerHTML = month + " " + year;

            document.getElementById("day").innerHTML = day;
        </script>

</footer>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
<script src="includes/javascript.js"></script>
</body>
</html>
