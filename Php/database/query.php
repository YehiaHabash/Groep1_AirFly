<?php
$sql = "SELECT * FROM Users";
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_row()) {
        echo $row[0];
    }

}
?>

