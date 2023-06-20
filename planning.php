<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="">
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
    <h>PLANNING</h>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Vluchtreservering</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            tr:hover {
                background-color: #ee0000;
                cursor: pointer;
            }

            .maintenance {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                display: inline-block;
                margin-right: 5px;
            }

            .maintenance-true {
                background-color: red;
            }

            .maintenance-false {
                background-color: green;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #2a9de1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .airplane-image {
                max-width: 100px;
                max-height: 100px;
            }

            .flight-details {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
    <h1>Vluchtreservering</h1>

    <h2>Vluchten</h2>
    <form>
        <label for="flight-select">Selecteer een vlucht:</label>
        <select id="flight-select">
            <option value="FL123">FL123 - Amsterdam</option>
            <option value="FL456">FL456 - New York</option>
            <option value="FL789">FL789 - Parijs</option>
        </select>
        <br><br>
        <button type="button" id="add-details-btn">Voeg foto en informatie toe</button>
        <br><br>
        <input type="submit" value="Reserveer vlucht">
    </form>

    <table>
        <tr>
            <th>Vluchtnummer</th>
            <th>Bestemming</th>
            <th>Status</th>
            <th>Vliegtuigfoto</th>
        </tr>
        <tr class="dropdown">
            <td>FL123</td>
            <td>Amsterdam</td>
            <td><span class="maintenance maintenance-true"></span>
                <div class="dropdown-content">
                    <div class="flight-details" id="flight-details-fl123">
                        <h3>Vlucht FL123</h3>
                        <p>Status: In onderhoud</p>
                        <p>Extra informatie: Geen foto toegevoegd</p>
                    </div>
                    <div class="add-details-section">
                        <h4>Voeg foto en informatie toe:</h4>
                        <input type="file" id="flight-image-fl123" accept="image/*">
                        <textarea id="flight-info-fl123" placeholder="Voeg informatie toe"></textarea>
                        <button type="button" class="save-details-btn">Opslaan</button>
                    </div>
                </div>
            </td>
            <td>
                <img class="airplane-image" id="flight-image-preview-fl123" src="#" alt="Vliegtuigfoto">
            </td>
        </tr>
        <tr class="dropdown">
            <td>FL456</td>
            <td>New York</td>
            <td><span class="maintenance maintenance-false"></span>
                <div class="dropdown-content">
                    <div class="flight-details" id="flight-details-fl456">
                        <h3>Vlucht FL456</h3>
                        <p>Status: Beschikbaar</p>
                        <p>Extra informatie: Geen foto toegevoegd</p>
                    </div>
                    <div class="add-details-section">
                        <h4>Voeg foto en informatie toe:</h4>
                        <input type="file" id="flight-image-fl456" accept="image/*">
                        <textarea id="flight-info-fl456" placeholder="Voeg informatie toe"></textarea>
                        <button type="button" class="save-details-btn">Opslaan</button>
                    </div>
                </div>
            </td>
            <td>
                <img class="airplane-image" id="flight-image-preview-fl456" src="#" alt="Vliegtuigfoto">
            </td>
        </tr>
        <tr class="dropdown">
            <td>FL789</td>
            <td>Parijs</td>
            <td><span class="maintenance maintenance-false"></span>
                <div class="dropdown-content">
                    <div class="flight-details" id="flight-details-fl789">
                        <h3>Vlucht FL789</h3>
                        <p>Status: Beschikbaar</p>
                        <p>Extra informatie: Geen foto toegevoegd</p>
                    </div>
                    <div class="add-details-section">
                        <h4>Voeg foto en informatie toe:</h4>
                        <input type="file" id="flight-image-fl789" accept="image/*">
                        <textarea id="flight-info-fl789" placeholder="Voeg informatie toe"></textarea>
                        <button type="button" class="save-details-btn">Opslaan</button>
                    </div>
                </div>
            </td>
            <td>
                <img class="airplane-image" id="flight-image-preview-fl789" src="#" alt="Vliegtuigfoto">
            </td>
        </tr>
    </table>

    <script>
        var dropdowns = document.getElementsByClassName("dropdown");
        for (var i = 0; i < dropdowns.length; i++) {
            dropdowns[i].addEventListener("click", function() {
                this.getElementsByClassName("dropdown-content")[0].classList.toggle("show");
            });
        }

        var addDetailsBtn = document.getElementById("add-details-btn");
        addDetailsBtn.addEventListener("click", function() {
            var selectedFlight = document.getElementById("flight-select").value;
            var dropdownContent = document.getElementById("flight-details-" + selectedFlight).parentElement;
            dropdownContent.classList.add("show");
        });

        var saveDetailsButtons = document.getElementsByClassName("save-details-btn");
        for (var i = 0; i < saveDetailsButtons.length; i++) {
            saveDetailsButtons[i].addEventListener("click", function() {
                var selectedFlight = this.parentElement.parentElement.id.split("-")[2];
                var flightImagePreview = document.getElementById("flight-image-preview-" + selectedFlight);
                var flightInfo = document.getElementById("flight-info-" + selectedFlight).value;

                var flightImageInput = document.getElementById("flight-image-" + selectedFlight);
                if (flightImageInput.files && flightImageInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        flightImagePreview.src = e.target.result;
                    };
                    reader.readAsDataURL(flightImageInput.files[0]);
                }

                var flightDetails = document.getElementById("flight-details-" + selectedFlight);
                flightDetails.querySelector("p:nth-of-type(3)").textContent = "Extra informatie: " + flightInfo;
            });
        }
    </script>
    </body>
    </html>
</main>

</body>
</html>
