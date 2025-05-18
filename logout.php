<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: /path/to/login.html"); // Adjust the path based on where your login file is located
exit();
?>
