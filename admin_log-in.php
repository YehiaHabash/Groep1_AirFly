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

        <form action="admin_log-in.php" method="POST">
            <h1>Log in Admin</h1>
            <div class="form-row">
                <input type="text" id="usernameInput" class="form-input" placeholder="example@email.com" name="voornaam">
                <label for="usernameInput" class="form-label">Username</label>

            </div>
            <div class="form-row">
                <input type="password" id="passwordInput" class="form-input" placeholder="pwd" name="wachtwoord">
                <label for="passwordInput" class="form-label">Password</label>

            </div>
            <a href="" class="forgot-pwd">Wachtwoord vergeten</a>

            <button type="submit" class="submit-btn">Login</button>
            <p class="sign-up-text"> Gast? <a href="index.php">Klik hier</a></p>
        <p class="sign-up-text">Geen Admin? <a href="inloggen.php">Log hier in</a></p>
        </form>

    </div>

    <?php

        require_once "database/conn.php";


    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        session_start();
        if (!empty($_POST['voornaam']) && !empty($_POST['wachtwoord'])) {
            $voornaam = $_POST['voornaam'];
            $wachtwoord = $_POST['wachtwoord'];

            require_once "database/cleanDataFunction.php";

//            $email = clean_data($email);
            $wachtwoord = clean_data($wachtwoord);


            $dbvoornaam = mysqli_real_escape_string($conn, $voornaam);
            $dbwachtwoord = mysqli_real_escape_string($conn, $wachtwoord);

            $dbwachtwoord = sha1($dbwachtwoord);

            $sql = "SELECT * FROM users WHERE voornaam = 'Admin' AND wachtwoord = '$dbwachtwoord'";

            $result = mysqli_query($conn, $sql);
            $number = mysqli_num_rows($result);

            if ($number >= 1) {
                $_SESSION['login_admin'] = true;
                $_SESSION['admin'] = $dbvoornaam;
                header ("location: index.php");
            }
        }
    }
    ?>
</main>

</body>
</html>
