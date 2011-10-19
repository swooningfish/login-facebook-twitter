<?php

//Always place this code at the top of the Page
session_start();
if (!isset($_SESSION['id'])) {
    // Redirection to login page twitter or facebook
    header("location: index.php");
}

echo '<h1>Welcome</h1>';
echo 'id : ' . $_SESSION['id'];
echo '<br/>Name : ' . $_SESSION['username'];
echo '<br/>You are login with : ' . $_SESSION['oauth_provider'];
echo '<br/>Logout from <a href="logout.php?logout">' . $_SESSION['oauth_provider'] . '</a>';
?>
