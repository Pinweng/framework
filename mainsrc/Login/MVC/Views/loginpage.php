<?php require_once __DIR__ . "/../../../App/Design/header.php";?>
<br> <br> <br>
<h1>Log dich ein</h1>
<br>

<form method="post">
    <input type="email" name="mail">
    <input type="password" name="password">
    <button type="submit">Login</button>
    <p style="color: red"><?php echo $error ?></p>
</form>

<?php require_once __DIR__ . "/../../../App/Design/header.php";?>