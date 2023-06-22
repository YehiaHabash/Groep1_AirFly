<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Yehia Habash">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sky High</title>
</head>
<body>

<div class="users">

</div>
<div class="container">

<?php include_once "./includes/header.php"; ?>

</div>

<main>
    <h>MIJN PROFIEL</h>

    <p>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Mijn Profiel</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }

                h1 {
                    text-align: center;
                }

                form {
                    max-width: 400px;
                    margin: 0 auto;
                }

                label {
                    display: block;
                    margin-top: 10px;
                }

                input[type="text"],
                input[type="email"],
                input[type="tel"],
                textarea {
                    width: 100%;
                    padding: 8px;
                    border-radius: 4px;
                    border: 1px solid #ccc;
                }

                input[type="file"] {
                    margin-top: 5px;
                }

                input[type="submit"] {
                    margin-top: 10px;
                    padding: 10px;
                    background-color: #4CAF50;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }

                input[type="submit"]:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
    <h1>Profiel</h1>

    <h2>Profiel wijzigen</h2>
    <form action="update_profile.php" method="POST" enctype="multipart/form-data" id="profileForm">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" required><br>

        <label for="gebruikersnaam">Gebruikersnaam:</label>
        <input type="text" name="gebruikersnaam" id="gebruikersnaam" required><br>

        <label for="profielfoto">Profielfoto:</label>
        <input type="file" name="profielfoto" id="profielfoto"><br>

        <label for="biografie">Biografie:</label>
        <textarea name="biografie" id="biografie"></textarea><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="telefoonnummer">Telefoonnummer:</label>
        <input type="tel" name="telefoonnummer" id="telefoonnummer"><br>

        <input type="submit" value="Opslaan">
    </form>

    <script>
        // Formulier validatie
        document.getElementById("profileForm").addEventListener("submit", function(event) {
            var naamInput = document.getElementById("naam");
            var gebruikersnaamInput = document.getElementById("gebruikersnaam");
            var emailInput = document.getElementById("email");

            if (naamInput.value.trim() === "" || gebruikersnaamInput.value.trim() === "" || emailInput.value.trim() === "") {
                alert("Vul alstublieft alle verplichte velden in.");
                event.preventDefault();
            }
        });
    </script>
</body>
</html>


    </p>


</main>


