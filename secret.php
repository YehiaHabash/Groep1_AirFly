<?php

session_start();
if (isset($_SESSION['login'])){
    echo "welkom ".$_SESSION['user'];
}else{
    header("location: index.php");
}
?>
