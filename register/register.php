<?php
require_once "register_lib.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $vartotojo_vardas = $_POST['vartvardas']; // Vartotojo vardo tikrinimas
    $badchars = bad_char_check(str_split($vartotojo_vardas));
    if (strlen($badchars) > 0) {
        header("Location: index.php?badchars=true");
    }
    $nesifruotas_vartotojo_slapt = $_POST['vartslapt'];

    $badchars = bad_char_check(str_split($nesifruotas_vartotojo_slapt)); // Vartotojo slaptazodzio tikrinimas
    if (strlen($badchars) > 0) {
        header("Location: index.php?badchars=true");
    }


    $sifruotas_slapt = password_hash($nesifruotas_vartotojo_slapt, PASSWORD_DEFAULT);

    $userlist = json_decode($_COOKIE['userlist']); // Issifruoja visa sarasa
    var_dump($userlist);

    if (check_user_duplicates($userlist, $vartotojo_vardas)) {
        header("Location: index.php?taken=true");
        exit();
    }

//    $array = array($vartotojo_vardas, $sifruotas_slapt); // Prideda nauja vartotoja
//    array_push($userlist, $array);

    $userlist = create_user_entry($userlist, $vartotojo_vardas, $sifruotas_slapt);

    setcookie("userlist", json_encode($userlist), time() + (24 * 60 * 60 * 60), "/");
    setcookie("vartvardas", $vartotojo_vardas, time() + (24 * 60 * 60 * 60), "/");
    header("Location: ../index.php?");
}