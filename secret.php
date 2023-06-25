<?php

session_start();
if (isset($_SESSION['login'])){
    echo "welkom ".$_SESSION['user'];
}else{
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fotos.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Glenn van der Wal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High</title>
</head>
<body>

<div class="container">

    <?php include_once "includes/header.php"; ?>

    <main>

        <h>FOTOS</h>

    </main>

    <form action="fotos.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>

</body>
<script src="includes/javascript.js"></script>
</html>