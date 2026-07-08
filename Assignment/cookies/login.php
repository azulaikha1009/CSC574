<?php

// Hardcoded credentials for simplicity (replace with database validation)
$valid_username = "user123";
$valid_password = "password123";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set a login cookie
        setcookie("login", $username, time() + (86400 * 30), "/");
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}

?>
