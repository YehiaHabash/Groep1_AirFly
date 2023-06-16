<?php
require_once "database/conn.php";

$username = "roger";
$tussenvoegsel = "admin";
$achternaam = "admin";
$email = "admin@admin.nl";
$telefoonnummer = "0612345678";
$geboortedatum = date('Y/m/d');



$sql = "INSERT INTO users
(voornaam,
tussenvoegsel,
email,
telefoonnummer,
geboortedatum)
VALUES(
'$username',
'$tussenvoegsel',
'$email',
'$telefoonnummer',
'$geboortedatum')";

$result = mysqli_query($conn, $sql);
header("location: ../index.php");
if (!$result) {
    echo "Query error";
    mysqli_close($conn);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/inloggen.css">
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
            <h1>inloggen</h1>
            <div class="form-row">
                <input type="email" id="emailInput" class="form-input" placeholder="example@email.com">
                <label for="emailInput" class="form-label">Email</label>

            </div>
            <div class="form-row">
                <input type="password" id="passwordInput" class="form-input" placeholder="pwd">
                <label for="passwordInput" class="form-label">Password</label>

            </div>
            <a href="" class="forgot-pwd">Wachtwoord vergeten</a>

            <button type="submit" class="submit-btn">Login</button>
            <p class="sign-up-text"> Gast? <a href="index.php">Klik hier</a></p>
        </form>
        <p class="sign-up-text">Nog geen account? <a href="registreren.php">Registreer hier</a></p>

    </div>
    </p>
</main>

</body>
</html>
