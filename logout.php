<?php
session_start();

// Destroy all sessions
session_unset();
session_destroy();

// Redirect to admin login page
header("Location: admin_login.php");
exit();
?>
