<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/registeren.css">
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
        <form method="POST" action="registreren.php">
            <h1>Registreren</h1>
            <div class="form-row">
                <input type="text" id="voornaamInput" class="form-input" placeholder="example@email.com" name="voornaam">
                <label for="voornaamInput" class="form-label">Voornaam</label>
            </div>
            <div class="form-row">
                <input type="text" id="tussenvoegselInput" class="form-input" placeholder="name" name="tussenvoegsel">
                <label for="tussenvoegselInput" class="form-label">Tussenvoegsel</label>
            </div>
            <div class="form-row">
                <input type="text" id="achternaamInput" class="form-input" placeholder="pwd" name="achternaam">
                <label for="achternaamInput" class="form-label">Achternaam</label>
            </div>
            <div class="form-row">
                <input type="email" id="emailInput" class="form-input" placeholder="email" name="email">
                <label for="emailInput" class="form-label">Email</label>
            </div>
            <div class="form-row">
                <input type=password id="passwordIpnut" class="form-input" placeholder="password" name="wachtwoord">
                <label for="passwordIpnut" class="form-label">wachtwoord</label>
            </div>
            <div class="form-row">
                <input type="number" id="telefoonInput" class="form-input" placeholder="last name" name="telefoonnummer">
                <label for="telefoonInput" class="form-label">Telefoonnummer</label>
            </div>
            <div class="form-row">
                <input type="date" id="geboortedatumInput" class="form-input" placeholder="last name" name="">
                <label for="geboortedatumInput" class="form-label">Geboortedatum</label>
            </div>

            <a href="index.php" class="forgot-pwd">Wachtwoord vergeten?</a>

            <button type="submit" class="submit-btn">registreren</button>
            <p class="sign-up-text"> Gast? <a href="index.php">Klik hier</a></p>
            <p class="sign-up-text"> Toch inloggen? <a href="inloggen.php">Klik hier</a></p>
        </form>

        <?php
        require_once "database/conn.php";

        session_start();

        if (isset($_SESSION['login'])){
            echo $_SESSION['user'];
        }

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $voornaam = $_POST['voornaam'];
            $tussenvoegsel = $_POST['tussenvoegsel'];
            $achternaam = $_POST['achternaam'];
            $email = $_POST['email'];
            $wachtwoord = $_POST['wachtwoord'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $geboortedatum = date("Y/m/d");

            require_once "database/cleanDataFunction.php";

            $voornaam = clean_data($voornaam);
            $tussenvoegsel = clean_data($tussenvoegsel);
            $achternaam = clean_data($achternaam);
            $email = clean_data($email);
            $wachtwoord = clean_data($wachtwoord);
            $telefoonnummer = clean_data($telefoonnummer);
            $geboortedatum = clean_data($geboortedatum);


            $voornaam = mysqli_real_escape_string($conn, $voornaam);
            $tussenvoegsel = mysqli_real_escape_string($conn, $tussenvoegsel);
            $achternaam = mysqli_real_escape_string($conn, $achternaam);
            $email = mysqli_real_escape_string($conn, $email);
            $wachtwoord = mysqli_real_escape_string($conn, $wachtwoord);
            $telefoonnummer = mysqli_real_escape_string($conn, $telefoonnummer);
            $geboortedatum = mysqli_real_escape_string($conn, $geboortedatum);


            $wachtwoord = sha1($wachtwoord);

            $sql = "INSERT INTO users
(voornaam,
tussenvoegsel,
achternaam,
email,
wachtwoord,
telefoonnummer,
geboortedatum)
VALUES(
'$voornaam',
'$tussenvoegsel',
'$achternaam',
'$email',
'$wachtwoord',
'$telefoonnummer',
'$geboortedatum')";

            $result = mysqli_query($conn, $sql);
            header("location: inloggen.php");
            if (!$result) {
                echo "Query error";
                mysqli_close($conn);


            }
        }
        ?>

    </div>
    </p>
</main>

</body>
</html>
