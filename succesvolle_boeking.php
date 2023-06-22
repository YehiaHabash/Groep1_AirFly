<!DOCTYPE html>
<html>
<head>
    <title>Bedankt voor uw reservering</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center, center;
            background-attachment: fixed;
            background-color: gray;
            background-image: url("img/Blue.jpg");
            /*min-height: 100%;*/
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container:hover {
            box-shadow: 0 0 10px 5px rgba(255, 0, 0, 0.5);
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Bedankt voor uw reservering!</title>
</head>
<body>
<div class="container" onclick="goBack()">
    <h1>Bedankt voor uw reservering!</h1>
    <p>Beste [Naam],</p>
    <p>Bedankt voor het reserveren van een vlucht van [Vertrek] naar [Bestemming] op [Datum].</p>
    <p>Een bevestiging van uw reservering is verzonden naar het e-mailadres: [E-mail].</p>
    <p>We wensen u een prettige reis!</p>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>


