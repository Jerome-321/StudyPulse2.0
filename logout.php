<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = [];
session_unset();
session_destroy();
// Redirect to the login page
header("Location: login.html"); // If login.html is your login page
exit();
?>
