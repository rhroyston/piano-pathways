<?php
// Begin the session
session_start();

$url = $_SERVER['HTTP_REFERER'];

// Unset all of the session variables.
session_unset();

// Destroy the session.
session_destroy();

header("Location: $url");
?>