<!doctype html>
<?php

// Define constant to make us able to reference absolute folder paths for all include's
define('BASE_PATH', __DIR__);

require_once BASE_PATH . '/includes/loader.php';

include "server.php"; ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Home page</h2>
        </div>
        <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
        <h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
        </h3>
        <?php endif?>
        <?php
        if(isset($_SESSION["username"])):?>
        <p>Welcome&nbsp;&nbsp;<strong><?php echo $_SESSION['username'];?></strong></p>
        <p><a href="index.php?logout='1'" style="color:red">Log Out</a></p>
        <?php endif ?>
        </div>
    </body>
</html>
