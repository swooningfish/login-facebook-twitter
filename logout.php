<?php

if (array_key_exists("logout", $_GET)) {
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['oauth_provider']);
    session_destroy();
    header("location: home.php");
}
?>
