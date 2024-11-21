<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include "../login/login_lib.php";
final class SigninTest extends TestCase {
    public function testSignin() {

        $USERS = array(
            array("Vardenis", '$2y$10$bVpZxDzUQN7IaJX1GX9bN..dFZ7BP90.I9UAWz3MRVz7dO3I4//SC')
        );

        $result = check_login($USERS, "Vardenis", "Pavardenis");
        $this->assertTrue($result);

        $result = check_login($USERS, "123", "Pavardenis");
        $this->assertFalse($result);

        $result = check_login($USERS, "Vardenis", "avardenis");
        $this->assertFalse($result);

        $result = check_login($USERS, "Vardenis", '$2y$10$bVpZxDzUQN7IaJX1GX9bN..dFZ7BP90.I9UAWz3MRVz7dO3I4//SC');
        $this->assertFalse($result);
    }
}