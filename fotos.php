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

    <form action="fotos.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>

    <?php
    // Include the database configuration file
    include 'database/conn.php';
    $statusMsg = '';

    // File upload path
    $targetDir = "img";
    $fileName = basename($_FILES(["bestand", "name"]));
    $len = !isset($cOTLdata['char_data']) ? 0 : count($cOTLdata['char_data']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(isset($_POST["submit"]) && !empty($_FILES["bestand"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES(["bestand"]["name"]), $targetFilePath)){
                // Insert image file name into database
                $insert = $conn->query("INSERT into fotos (bestand_naam, geüpload_op) VALUES ('".$fileName."', NOW())");
                if($insert){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                }else{
                    $statusMsg = "File upload failed, please try again.";
                }
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }

    // Display status message
    echo $statusMsg;

    ?>

    <?php
    // Include the database configuration file
    include 'database/conn.php';

    // Get images from the database
    $query = $conn->query("SELECT * FROM fotos ORDER BY geüpload_op DESC");

    if($query->num_rows > 1){
        while($row = $query->fetch_assoc()){
            $imageURL = 'img'.$row["file_name"];
            ?>
            <img src="<?php echo $imageURL; ?>" alt="" />
        <?php }
    }else{ ?>
        <p>No image(s) found!</p>
    <?php } ?>

    <?php

    include 'database/conn.php';

    $query = $conn->query("SELECT * FROM fotos ORDER BY geüpload_op DESC");

    if($query->num_rows > 1){
        while($row = $query->fetch_assoc()){
            $imageURL = 'img' .$row["file_name"];
            ?>
            <img src="<?php echo $imageURL; ?>" alt=""/>
        <?php }
    }else{
        ?>
        <p>No image(s) found!</p>
        <?php
    }

    header("index.php");
    exit();

    ?>

</body>
<script src="includes/javascript.js"></script>
</html>