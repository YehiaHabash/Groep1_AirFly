<?php require_once("database/conn.php"); ?>
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
    <?php include "database/conn.php"; ?>

    <main>

        <h>FOTOS</h>

    </main>

    <div class="Container">
        <form class="upload-container" action="fotos.php" method="POST" enctype="multipart/form-data">
            <label>Foto</label>
            <input type="file" name="image" class="form-control" required>
            <label>Comment</label>
            <input type="text" name="titel" class="form-control">
            <br><br>
            <button name="form_submit" class="btn">Uploaden</button>
        </form>

    </div>
</div>

<div class="container_display">
    <table cellpadding="10">
        <tr>
            <th>Foto</th>
            <th>Comment</th>
        </tr>
        <?php $res = mysqli_query($conn, "SELECT * from fotos ORDER by id DESC");
        while ($row = mysqli_fetch_array($res)) {
            echo '<tr> 
                  <td><img class="fotos" src="img/' . $row['foto'] . '" height="200"></td> 
                  <td>' . $row['titel'] . '</td> 

            </tr>';

        } ?>

    </table>

</div>

<?php
if (isset($_POST['form_submit'])) {
    $titel = $_POST['titel'];
    $folder = "img/";
    $image_file = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $path = $folder . $image_file;
    $target_file = $folder . basename($image_file);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
    }
//Set image upload size
    if ($_FILES["image"]["size"] > 5048576) {
        $error[] = 'Sorry, your image is too large. Upload less than 1 MBin size.';
    }
    if (!isset($error)) {
        // move image in folder
        move_uploaded_file($file, $target_file);
        $result = mysqli_query($conn, "INSERT INTO fotos(foto,titel) VALUES('$image_file','$titel')");
        if ($result) {
            header("location:index.php?image_success=1");
        } else {
            echo 'Something went wrong';
        }
    }
}
if (isset($error)) {

    foreach ($error as $error) {
        echo '<div class="message">' . $error . '</div><br>';
    }
}
?>

</body>
<script src="includes/javascript.js"></script>
</html>