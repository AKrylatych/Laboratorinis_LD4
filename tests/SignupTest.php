<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require "../register/register_lib.php";

final class SignupTest extends TestCase {

    public function testSignup() {
        $user = "123";
        $pass = "321";
        $this->assertTrue(true);
    }

    public function testCharDetector() {

        $this->assertEquals("abc", bad_char_check(str_split("abc")));
        $this->assertEquals("", bad_char_check(str_split("123")));
        $this->assertEquals("@#$@!@$", bad_char_check(str_split("@#$@!@$")));
        $this->assertEquals(" ", bad_char_check(str_split(" ")));
        $this->assertEquals("", bad_char_check(str_split("1231651651897126575985785287421784587524875478259725757865785785")));
        $this->assertEquals("A", bad_char_check(str_split("A1231651651897126575985785287421784587524875478259725757865785785")));
    }
    public function testcheck_user_duplicates() {
        $USERS = array(
            array("Vardenis", '$2y$10$bVpZxDzUQN7IaJX1GX9bN..dFZ7BP90.I9UAWz3MRVz7dO3I4//SC')
        );
        $this->assertTrue(check_user_duplicates($USERS, "Vardenis"));
        $this->assertFalse(check_user_duplicates($USERS, "Bebras"));
        $this->assertFalse(check_user_duplicates($USERS, $USERS));

    }

    public function testcreate_user_entry() {
        $USERS = array(
            array("Vardenis", '$2y$10$bVpZxDzUQN7IaJX1GX9bN..dFZ7BP90.I9UAWz3MRVz7dO3I4//SC')
        );


        $Vardas = "1230";
        $Slaptazodis = "1230";
        $sifruotasSlapt = password_hash($Slaptazodis, PASSWORD_DEFAULT);
        $newUserList = create_user_entry($USERS, $Vardas, $sifruotasSlapt);
        $array = array($Vardas, $sifruotasSlapt); // Prideda nauja vartotoja


        $this->assertEquals($array, $newUserList[1]);
        $this->assertEquals($USERS[0], $newUserList[0]);

    }
}