<?php
session_start();

if(isset($_SESSION['name'])) {
    echo "Welcome back, " . $_SESSION['name'] . "!";
} else {
    $_SESSION['name'] = "Visitor";
    echo "Welcome new visitor!";
}
?>

