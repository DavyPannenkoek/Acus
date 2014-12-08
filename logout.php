<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: Acus.php"); // Redirecting To Home Page
}
?>