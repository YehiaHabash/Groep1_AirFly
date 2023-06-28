<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "skyhigh";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    echo("connectie is mislukt");
    die("Connectie niet gelukt");
}
?>

