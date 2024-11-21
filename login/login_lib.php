<?php
function check_login($userlist, $vartvardas, $vartslapt): bool {
    foreach ($userlist as $value) {
        if ($value[0] == $vartvardas && password_verify($vartslapt, $value[1])) {
            return true;

//            setcookie("vartvardas", $_POST['vartvardas'], time() + (24 * 60 * 60 * 60), "/");
//            header('Location:../index.php');
//            exit();
        }
    }
    return false;
}