<!DOCTYPE html>
<html lang="en">
<head>
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

    <div class="Registreren">
        <a href="registreren.php" class="hover-underline-animation">REGISTREREN</a>
        <a href="inloggen.php" class="hover-underline-animation">INLOGGEN</a>
    </div>

    <header>Sky High</header>

    <nav>
        <a href="index.php" class="hover-underline-animation">HOME</a>
        <a href="fotos.php" class="hover-underline-animation">FOTOS</a>
        <a href="planning.php" class="hover-underline-animation">PLANNING</a>
        <a href="ledenlijst.php" class="hover-underline-animation">LEDENLIJST</a>
        <a href="contact.php" class="hover-underline-animation">CONTACT</a>
    </nav>


</div>

<main>
    <h>FOTOS</h>
    <p>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Foto Upload en Verwijder Pagina</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                }

                h1 {
                    text-align: center;
                }

                .gallery {
                    display: flex;
                    flex-wrap: wrap;
                    margin-top: 20px;
                }

                .gallery-item {
                    width: 200px;
                    margin: 10px;
                }

                .gallery-item img {
                    width: 100%;
                    height: auto;
                }

                .delete-button {
                    text-align: center;
                    margin-top: 5px;
                }
            </style>
        </head>
        <body>
    <h1>Foto Upload en Verwijder Pagina</h1>

    <form id="upload-form" enctype="multipart/form-data">
        <input type="file" id="upload-input" accept="image/*">
        <input type="submit" value="Uploaden">
    </form>

    <div id="gallery" class="gallery">
        <!-- Hier worden de geüploade foto's weergegeven -->
    </div>

    <script>
        var uploadForm = document.getElementById("upload-form");
        var uploadInput = document.getElementById("upload-input");
        var gallery = document.getElementById("gallery");

        uploadForm.addEventListener("submit", function(event) {
            event.preventDefault();

            var files = uploadInput.files;
            if (files.length > 0) {
                var file = files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var photoUrl = e.target.result;

                    // Controleer de afmetingen van de foto voordat deze wordt toegevoegd aan de galerij
                    var image = new Image();
                    image.src = photoUrl;

                    image.onload = function() {
                        if (image.width <= 500 && image.height <= 500) {
                            // Voeg de foto toe aan de galerij
                            addPhotoToGallery(photoUrl);
                        } else {
                            alert("De foto mag niet groter zijn dan 300x300 in afmetingen.");
                        }
                    };
                };

                reader.readAsDataURL(file);
            }
        });

        function createGalleryItem(photoUrl) {
            var galleryItem = document.createElement("div");
            galleryItem.classList.add("gallery-item");

            var image = document.createElement("img");
            image.src = photoUrl;
            image.alt = "Foto";

            var deleteButton = document.createElement("div");
            deleteButton.classList.add("delete-button");
            var button = document.createElement("button");
            button.textContent = "Verwijderen";
            deleteButton.appendChild(button);

            galleryItem.appendChild(image);
            galleryItem.appendChild(deleteButton);

            return galleryItem;
        }

        function addPhotoToGallery(photoUrl) {
            var galleryItem = createGalleryItem(photoUrl);
            gallery.appendChild(galleryItem);

            var deleteButton = galleryItem.querySelector(".delete-button button");
            deleteButton.addEventListener("click", function() {
                gallery.removeChild(galleryItem);
            });
        }
    </script>
</body>
</html>
    </p>
</main>

</body>
</html>
