<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: https://attirent.000webhostapp.com/login.php",true,301);
}
?>