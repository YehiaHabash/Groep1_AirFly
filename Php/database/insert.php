<?php
require_once "database/conn.php";

$username = "localhost";
$tussenvoegsel = "admin";
$achternaam = "admin";
$email = "admin@admin.nl";
$telefoonnummer = "06523242424";
$geboortedatum = date(  'Y/m/d');



$sql = "INSERT INTO users
(voornaam,
tussenvoegsel,
achternaam,
email,
telfoonnummer,
gebootedatum)
VALUES(
'$username',
'$tussenvoegsel',
'$achternaam',
'$email',
'$telefoonnummer'
'$geboortedatum')";

$result = mysqli_query($conn, $sql);
header("location: index.php");
if (!$result) {
    echo "Query error";
    mysqli_close($conn);

}
?>

