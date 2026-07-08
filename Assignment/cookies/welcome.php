<?php
// Check if the login cookie exists
if(isset($_COOKIE['login'])) {
    $username = $_COOKIE['login'];
    echo "Welcome, $username!";
} else {
    header("Location: login_form.html");
    exit();
}
?>
