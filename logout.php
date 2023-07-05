<?php
session_start();

// Clear all session data
session_unset();
session_destroy();

// Redirect back to index.php
header("Location: index.php");
exit();
?>
