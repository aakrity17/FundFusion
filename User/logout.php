<?php
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user back to the login and signup page
header('Location: ./index.php');
exit();
?>
