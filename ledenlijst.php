<?php
require_once "database/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <p>
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

    <?php
    }
    }

    ?>

    </p>
</main>

</body>
</html>
