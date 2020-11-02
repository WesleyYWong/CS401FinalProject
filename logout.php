<?php
session_start();
$_SESSION['authenticated'] = false;
session_destroy();
header("Location: /Login.php");
exit();
?>