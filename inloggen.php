
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

        <form action="inloggen.php" method="POST">
            <h1>inloggen</h1>
            <div class="form-row">
                <input type="email" id="emailInput" class="form-input" placeholder="example@email.com" name="email">
                <label for="emailInput" class="form-label">Email</label>

            </div>
            <div class="form-row">
                <input type="password" id="passwordInput" class="form-input" placeholder="pwd" name="wachtwoord">
                <label for="passwordInput" class="form-label">Password</label>

            </div>
            <a href="" class="forgot-pwd">Wachtwoord vergeten</a>

            <button type="submit" class="submit-btn">Login</button>
            <p class="sign-up-text"> Gast? <a href="index.php">Klik hier</a></p>
        </form>
        <p class="sign-up-text">Nog geen account? <a href="registreren.php">Registreer hier</a></p>

    </div>
    </p>
    <?php

    require_once "database/conn.php";


    if ($_SERVER['REQUEST_METHOD'] === "POST") {
    session_start();
    if (!empty($_POST['email']) && !empty($_POST['wachtwoord'])) {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    require_once "database/cleanDataFunction.php";

    $email = clean_data($email);
    $wachtwoord = clean_data($wachtwoord);

    $dbemail = mysqli_real_escape_string($conn, $email);
    $dbwachtwoord = mysqli_real_escape_string($conn, $wachtwoord);

    $dbwachtwoord = sha1($dbwachtwoord);

    $sql = "SELECT * FROM users WHERE email = '$dbemail' AND wachtwoord = '$dbwachtwoord'";

    $result = mysqli_query($conn, $sql);
    $number = mysqli_num_rows($result);

    if ($number >= 1) {
    $_SESSION['login'] = true;
    $_SESSION['user'] = $dbemail;
    header ("location: index.php");
    }
    }
    }
    ?>
</main>

</body>
</html>
