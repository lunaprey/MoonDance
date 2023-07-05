<?php
session_start();
$_SESSION['userid'] = 1;
$_SESSION['username'] = 'username';

// Redirect back to index.php
header("Location: index.php");
exit();
?>
