<?php
// Begin the session
session_start();

$url = $_SERVER['HTTP_REFERER'];

    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);

header("Location: $url");
?>