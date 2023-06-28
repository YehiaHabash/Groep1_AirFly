<!DOCTYPE html>
<html>
<head>
    <title>Bedankt voor uw reservering!</title>
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

<?php
require_once "database/conn.php";

$sql = "SELECT * FROM vluchten WHERE ";
?>

<div class="container" onclick="goBack()">
    <?php
    if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_row()) {
    $naam = $row[1];
    $vertrek = $row[2];
    $bestemming = $row[3];
    $datum = $row[4];
    $vliegtuig = $row[5]


    ?>
    <a href="planning.php">
        <img src="img/SkyHighLogo.png" alt="SkyHighLogo" width="130" align="right">
    </a>
    <h1>Bedankt voor uw reservering!</h1>
    <p>Beste <span id="name"><?php echo $naam; ?></span>,</p>
    <p>Bedankt voor het reserveren van een vlucht van <?php echo $bestemming; ?><span id="departure"></span> naar <?php echo $vertrek; ?><span id="destination">
    <p></p>
        </span> op <?php echo $datum; ?><span id="date"></span>.</p>
    <p></p>
    <p>Een bevestiging van uw reservering is verzonden naar het e-mailadres: <span id="email"></span>.</p>
    <p>We wensen u een prettige reis!</p>
</div>
<script>
    function goBack() {
        window.history.back();

    }

    <?php
    }
    }
    ?>

</script>
</body>
</html>
