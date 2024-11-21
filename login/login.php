<?php

require "login_lib.php";

$USERS = json_decode($_COOKIE['userlist']);

if (check_login($USERS, $_POST['vartvardas'], $_POST['vartslapt'])) {
    setcookie("vartvardas", $_POST['vartvardas'], time() + (24 * 60 * 60 * 60), "/");
    header('Location:../index.php');
    exit();
} else {
    header('Location: index.php?badlogin=true');

}