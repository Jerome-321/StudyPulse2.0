<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: login.php"); // If you're using a PHP login script instead

exit();
?>
