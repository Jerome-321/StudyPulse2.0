<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html"); // Or wherever your login page is
exit();
?>
