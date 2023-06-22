

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/87a9ed9bc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/ledenlijst.css">
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



    // Controleer of de gebruiker is ingelogd
    if (!isset($_SESSION['login'])) {
        // Stuur de gebruiker naar de inlogpagina als deze niet is ingelogd
        header('Location: inloggen.php');
        exit;
    }
    ?>
</div>

<main>

</main>
</body>
</html>
