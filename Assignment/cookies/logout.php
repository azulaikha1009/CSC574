<?php
// Unset the login cookie
setcookie("login", "", time() - 3600, "/");
header("Location: login_form.html");
exit();
?>
