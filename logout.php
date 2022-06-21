<?php
session_start();

unset($_SESSION['uid'],$_SESSION['jmeno'],$_SESSION['cook']);

$_SESSION['zprava']="Odhlášení proběhlo úspěšně.";
header("Location:  http://". $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']). "ucet.php");
?>