<?php
session_start();
if (isset($_SESSTION['user'])) {
    echo "Welcome,".$_SESSTION['user'];
} else {
    header('Location: login.html');
}
?>
