<?php
    require_once __DIR__ . '/auth/auth.php';
    require_once __DIR__ . '/upload.php';

    $authUser = getAuthUser();
?>

<html>
    <head>
        <title>Фотоальбом</title>
        <link rel="stylesheet" href="./src/style.css">
    </head>
    <body>
        <h1>Photoalbom</h1>
        <?php if ($authUser !== null): ?>
            <p>
                <span>You authorized as <b><?= $authUser ?></b> | </span>
                <a href="./auth/logout.php">Logout</a>
            </p>
        <?php else: ?>
            <p>For editing media library you should <a href="./auth/">Login</a></p>
        <?php endif; ?>
        <div class="albom">
            <div class="albom-item"></div>
        </div>
        <?php if ($authUser !== null): ?>
        <div>
            <form action="./upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="attach">
                <input type="submit" value="Send">
            </form>
        </div>
        <?php endif; ?>
    </body>
</html>