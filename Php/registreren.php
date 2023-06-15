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
                <input type="email" id="emailInput" class="form-input" placeholder="example@email.com">
                <label for="emailInput" class="form-label">Email</label>
            </div>
            <div class="form-row">
                <input type="name" id="nameInput" class="form-input" placeholder="name">
                <label for="nameInput" class="form-label">Naam</label>
            </div>
            <div class="form-row">
                <input type="password" id="passwordInput" class="form-input" placeholder="pwd">
                <label for="passwordInput" class="form-label">Password</label>
            </div>

            <a href="../index.php" class="forgot-pwd">Wachtwoord vergeten?</a>

            <button type="submit" class="submit-btn">registreren</button>
            <p class="sign-up-text"> Gast? <a href="../index.php">Klik hier</a></p>
            <p class="sign-up-text"> Toch inloggen? <a href="inloggen.php">Klik hier</a></p>
        </form>

    </div>
    </p>
</main>

</body>
</html>
