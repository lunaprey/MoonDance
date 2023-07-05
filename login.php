<?php
session_start();
$_SESSION['userid'] = 1;

// Redirect back to index.php
header("Location: index.php");
exit();
?>
