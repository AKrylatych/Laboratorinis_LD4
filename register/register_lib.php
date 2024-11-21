<?php
function bad_char_check($string): string {
    $chars = "";
    foreach ($string as $raide) {
        if (!is_numeric($raide)) {
            $chars .= $raide;
        }
//        echo "<br>";
    }
    return $chars;
}

function check_user_duplicates($userlist, $username) {
    foreach ($userlist as $user) { // Tikrina ar uzimta
        if ($user[0] == $username) {
            return true;
        }
    }
    return false;
}

function create_user_entry($userlist, $username, $sifruotas_slapt): array {
    $array = array($username, $sifruotas_slapt); // Prideda nauja vartotoja
    array_push($userlist, $array);
    return $userlist;
}


//    $vartotojo_vardas = $_POST['vartvardas']; // Vartotojo vardo tikrinimas
//    $badchars = bad_char_check(str_split($vartotojo_vardas));
//    if (strlen($badchars) > 0) {
//        header("Location: index.php?badchars=true");
//    }
//    $nesifruotas_vartotojo_slapt = $_POST['vartslapt'];
//
//    $badchars = bad_char_check(str_split($nesifruotas_vartotojo_slapt)); // Vartotojo slaptazodzio tikrinimas
//    if (strlen($badchars) > 0) {
//        header("Location: index.php?badchars=true");
//    }
//
//
//    create_user_entry();
//
//    $sifruotas_slapt = password_hash($nesifruotas_vartotojo_slapt, PASSWORD_DEFAULT);
//
//    $userlist = json_decode($_COOKIE['userlist']); // Issifruoja visa sarasa
//    var_dump($userlist);
//
//    if (check_user_duplicates($userlist, $vartotojo_vardas)) {
//        header("Location: index.php?taken=true");
//        exit();
//    }
//
//    $array = array($vartotojo_vardas, $sifruotas_slapt); // Prideda nauja vartotoja
//    array_push($userlist, $array);
//
//
//    setcookie("userlist", json_encode($userlist), time() + (24 * 60 * 60 * 60), "/");
//    setcookie("vartvardas", $vartotojo_vardas, time() + (24 * 60 * 60 * 60), "/");
//    header("Location: ../index.php?");
