<?php
session_start();
include 'header.inc'
include 'footer.inc'
if (isset($_SESSION['user'])) {
    echo "Welcome, ".$_SESSION['user'];
} else {
    header('Location: login.html');
}
?>