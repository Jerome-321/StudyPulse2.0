<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html"); // <-- ONLY if login.html is in the same folder
exit();
?>
