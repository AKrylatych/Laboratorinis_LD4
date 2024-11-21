<?php
session_start();
require('user_data.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="stylesheets/theme.css">
    </head>

    <body>
        <div class="headerbar">
            <?php
                if (!isset($_COOKIE['vartvardas'])) {
                    echo '<form method="POST" action="login">';
                    echo '<input class="loginbtn" type="submit" value="Prisijungti">';
                    echo '</form>';

                    echo '<form method="POST" action="register">';
                    echo '<input class="loginbtn" type="submit" value="Registruotis">';
                    echo '</form>';
                } else {
                    echo '<form method="POST" action="logout.php">';
                    echo '<input class="loginbtn" type="submit" value="Atsijungti">';
                    echo '<span>Sveikas, ' . $_COOKIE['vartvardas'] . '</span>';
                    echo '</form>';
                }

            ?>

        </div>

        <div class="footer">

        </div>
    </body>
</html>