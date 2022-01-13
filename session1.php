<?php
session_start();
$username = "admin";
$_SESSION['sess_username'] = $username;
echo $_SESSION['sess_username'];

?>