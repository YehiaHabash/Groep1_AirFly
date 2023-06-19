<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Php/CSS/registeren.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Glenn van der Wal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High</title>
</head>
<body>
<div class="container">

</div>
<main>
    <p>
    <div class="login-container">
        <form>
            <h1>Registreren</h1>
            <div class="form-row">
                <input type="text" id="voornaamInput" class="form-input" placeholder="example@email.com">
                <label for="voornaamInput" class="form-label">Voornaam</label>
            </div>
            <div class="form-row">
                <input type="text" id="tussenvoegselInput" class="form-input" placeholder="name">
                <label for="tussenvoegselInput" class="form-label">Tussenvoegsel</label>
            </div>
            <div class="form-row">
                <input type="text" id="achternaamInput" class="form-input" placeholder="pwd">
                <label for="achternaamInput" class="form-label">Achternaam</label>
            </div>
            <div class="form-row">
                <input type="email" id="emailInput" class="form-input" placeholder="last name">
                <label for="emailInput" class="form-label">Email</label>
            </div>
            <div class="form-row">
                <input type="number" id="telefoonInput" class="form-input" placeholder="last name">
                <label for="telefoonInput" class="form-label">Telefoonnummer</label>
            </div>
            <div class="form-row">
                <input type="date" id="geboortedatumInput" class="form-input" placeholder="last name">
                <label for="geboortedatumInput" class="form-label">Geboortedatum</label>
            </div>

            <a href="../index.php" class="forgot-pwd">Wachtwoord vergeten?</a>

            <button type="submit" class="submit-btn">registreren</button>
            <p class="sign-up-text"> Gast? <a href="../index.php">Klik hier</a></p>
            <p class="sign-up-text"> Toch inloggen? <a href="inloggen.php">Klik hier</a></p>
        </form>

        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "skyhigh";

        $conn = new mysqli($host, $user, $pass, $dbname);
        if ($conn->connect_error) {
            echo("connectie is mislukt");
            die("Connectie niet gelukt");
        }
        ?>

        <?php
        $sql = "SELECT * FROM users";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_row()) {
                echo $row[0];
            }
        }
        ?>

        <?php

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            echo "hello world";

            $username = $_POST['voornaam'];
            $tussenvoegsel = $_POST['tussenvoegsel'];
            $achternaam = $_POST['achternaam'];
            $email = $_POST['email'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $geboortedatum = $_POST['y/m/d'];

            $username = 'voornaam';
            $tussenvoegsel = 'tussenvoegsel';
            $achternaam = 'achternaam';
            $email = 'email';
            $telefoonnummer = 'telefoonnummer';
            $geboortedatum = 'y/m/d';

            $sql = "INSERT INTO users
(voornaam,
tussenvoegsel,
achternaam,
email,
telefoonnummer,
geboortedatum,
)
VALUES(
'$username',
'$tussenvoegsel',
'$achternaam',
'$email',
'$telefoonnummer',
'$geboortedatum',)";

            $result = mysqli_query($conn, $sql);
            header("location: index.php");
            if (!$result) {
                echo "Query error";
                mysqli_close($conn);

            }
        }
        ?>

        <?php
        function clean_data($data)
        {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

    </div>
    </p>
</main>

</body>
</html>
