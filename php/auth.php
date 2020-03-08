<?php
session_start();
if(!isset($_SESSION["username"])){
header('Location: https://attirent.000webhostapp.com/login.php',true,301);
exit(); }
?>
