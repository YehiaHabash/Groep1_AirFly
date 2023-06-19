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
                <input type="email" id="emailInput" class="form-input" placeholder="email">
                <label for="emailInput" class="form-label">Email</label>
            </div>
            <div class="form-row">
                <input type=password id="passwordIpnut" class="form-input" placeholder="password">
                <label for="passwordIpnut" class="form-label">Email</label>
            </div>
            <div class="form-row">
                <input type="number" id="telefoonInput" class="form-input" placeholder="last name">
                <label for="telefoonInput" class="form-label">Telefoonnummer</label>
            </div>
            <div class="form-row">
                <input type="date" id="geboortedatumInput" class="form-input" placeholder="last name">
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

            $username = $_POST['username'];
            $tussenvoegsel = $_POST['tussenvoegsel'];
            $achternaam = $_POST['achternaam'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $geboortedatum = date("Y/m/d");

            require_once "database/cleanDataFunction.php";

            $username = clean_data($username);
            $tussenvoegsel = clean_data($tussenvoegsel);
            $achternaam = clean_data($achternaam);
            $email = clean_data($email);
            $password = clean_data($password);
            $telefoonnummer = clean_data($telefoonnummer);
            $geboortedatum = clean_data($geboortedatum);


            $username = mysqli_real_escape_string($conn, $username);
            $tussenvoegsel = mysqli_real_escape_string($conn, $tussenvoegsel);
            $achternaam = mysqli_real_escape_string($conn, $achternaam);
            $email = mysqli_real_escape_string($conn, $email);
            $password = mysqli_real_escape_string($conn, $password);
            $telefoonnummer = mysqli_real_escape_string($conn, $telefoonnummer);
            $geboortedatum = mysqli_real_escape_string($conn, $geboortedatum);


            $password = sha1($password);

            $sql = "INSERT INTO users
(userName,
tussenvoegsel,
achternaam,
email,
password,
telefoonnummer,
geboortedatum)
VALUES(
'$username',
'$tussenvoegsel',
'$achternaam',
'$email',
'$password',
'$telefoonnummer',
'$geboortedatum')";

            $result = mysqli_query($conn, $sql);
            header("location: index.php");
            if (!$result) {
                echo "Query error";
                mysqli_close($conn);

            }
        }
        $sql = "SELECT * FROM users";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_row()) {
                echo $row[0];
            }

        }
        ?>

    </div>
    </p>
</main>

</body>
</html>
