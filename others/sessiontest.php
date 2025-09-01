<?php
session_start();
$_SESSION['check'] = "Session is working!";
echo "Session started successfully. Value: " . $_SESSION['check'];
?>
