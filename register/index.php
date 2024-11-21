<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../stylesheets/theme.css">
</head>

<body>

<div class="headerbar">
<form action="/untitled/index.php">
    <input type="submit" value="Atgal">
</form>
</div>
<div class="content">
    <form action="register.php" method="POST">
        <p>Naudokite tik skaičius</p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['badchars']) && $_GET['badchars'] == true) {
                echo '<p>Naudoti neleistini simboliai. Prašome naudoti tik skaičius.</p>';
            }
            if (isset($_GET['taken']) && $_GET['taken'] == true)  {
                echo '<p>Vartotojo vardas jau užimtas. Naudokite kitą.</p>';
            }
        }
        ?>
        <label for="vartvardas">Vartotojo vardas</label><br>
        <input id="vartvardas" name="vartvardas" type="text">
        <br>
        <label for="vartslapt">Vartotojo slaptažodis</label><br>
        <input id="vartslapt" name="vartslapt" type="text">
        <br>
        <input type="submit">
    </form>
</div>
<div class="footer">

</div>
</body>
</html>