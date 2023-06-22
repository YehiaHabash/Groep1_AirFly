<?php session_start() ?>
<div class="Logo">
    <img src="img/SkyHighLogo.png" alt="SkyHighLogo">
</div>
<link rel="stylesheet" href="./css/header.css">
<?php if (isset($_SESSION["user"])){?>
    <div class="Registreren">
        <div class="dropdown">
            <button class="dropbtn"><?php echo $_SESSION["user"];?></button>
            <div class="dropdown-content">
                <a href="uitloggen.php">UITLOGGEN</a>
            </div>
        </div>
    </div>

<?php } else {?>
<div class="Registreren">
    <a href="registreren.php" class="hover-underline-animation">REGISTREREN</a>
    <a href="inloggen.php" class="hover-underline-animation">INLOGGEN</a>
</div>
<?php } ?>


<header>Sky High</header>

<nav>
    <a href="./index.php" class="hover-underline-animation">HOME</a>
    <a href="./fotos.php" class="hover-underline-animation">FOTOS</a>
    <a href="./planning.php" class="hover-underline-animation">PLANNING</a>
    <a href="./ledenlijst.php" class="hover-underline-animation">LEDENLIJST</a>
    <a href="./contact.php" class="hover-underline-animation">CONTACT</a>
    <a href="./secret.php" class="hover-underline-animation">SECRET</a>
</nav>