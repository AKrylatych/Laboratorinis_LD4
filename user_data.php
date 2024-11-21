<?php
if (!isset($_COOKIE['userlist'])) {
    echo "Trying to preload...";
    $USERS = array(
        array("Vardenis", '$2y$10$bVpZxDzUQN7IaJX1GX9bN..dFZ7BP90.I9UAWz3MRVz7dO3I4//SC') // Pavardenis
    );
    $encoded = json_encode($USERS);
    var_dump($encoded);

    setcookie("userlist", $encoded, time() + (24 * 60 * 60 * 60), "/");
}
