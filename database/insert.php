<?php
require_once "database/conn.php";

$username = "Bruno";
$password = "Admin";
$email = "Bruno@bobo.nl";
$birthDate = "2002-10-04";
$userRole = 2;
$createdOn = date("Y/m/d");
$modifiedOn = date("Y/m/d");



$sql = "INSERT INTO Users
(userName,
passWord,
email,
birthdate,
userRole,
created_on,
modified_on)
VALUES(
'$username',
'$password',
'$email',
'$birthDate',
'$userRole',
'$createdOn',
'$modifiedOn')";

$result = mysqli_query($conn, $sql);
header("location: index.php");
if (!$result) {
    echo "Query error";
    mysqli_close($conn);

}
?>

