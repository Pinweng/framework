<?php require_once __DIR__ . "/../../../App/Design/header.php";?>

<div class="user-container">
    <?php foreach ($users as $user) : ?>
        <a href="/User=user?userid=<?php echo $user->userid; ?>"><h3><?php echo $user->username ?></h3></a>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . "/../../../App/Design/header.php";?>