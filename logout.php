<?php
session_start();
if (isset($_COOKIE['vartvardas'])) {
    unset($_COOKIE['vartvardas']);
    setcookie('vartvardas', "", time() - 3600, '/');
}
header('Location: index.php');

