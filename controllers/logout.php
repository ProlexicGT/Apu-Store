<?php
// Start session if not already started
session_start();

// Clear session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Remove the user_id cookie by setting its expiration to the past
setcookie('user_id', '', time() - 3600, '/', '', true, true);

// Redirect to login page
header("Location: /", true, 302);
exit();