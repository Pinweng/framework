

<div class="user-container">
    <?php foreach ($users as $user) : ?>
        <a href="/User/user?userid=<?php echo $user->userid; ?>"><h3><?php echo $user->username; ?></h3></a>
    <?php endforeach; ?>
</div>

