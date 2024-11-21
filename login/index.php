<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['badlogin'])) {
    if ($_POST['badlogin'] == 'true') {
        echo '<script>alert("Neteisingas vardas arba slaptažodis.")</script>';
    }
}
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
    <form action="login.php" method="POST">
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