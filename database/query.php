<?php
require_once "conn.php";

$sql = "SELECT * FROM users";
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_row()) {
        echo $row[0];
    }

}
?>

