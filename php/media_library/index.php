<?php
    require_once __DIR__ . '/auth/auth.php';
    require_once __DIR__ . '/upload.php';
    require_once __DIR__ . '/media.php';

    $authUser = getAuthUser();

    if ($authUser !== null) {
        if (!empty($_FILES)) {
            $uploadResult = uploadFile('attach');
        }
    }

    $mediaItems = getMediaItems();
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
            <?php foreach ($mediaItems as $mediaItem): ?>
                <div class="albom-item">
                    <a href="<?= $mediaItem ?>" target="_blank">
                        <img src="<?= $mediaItem ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if ($authUser !== null): ?>
            <?php if (!empty($uploadResult)): ?>
                <p class="error-msg"><?= $uploadResult ?></p>
            <?php endif; ?>
            <div>
                <form action="./" method="post" enctype="multipart/form-data">
                    <input type="file" name="attach">
                    <input type="submit" value="Send">
                </form>
            </div>
        <?php endif; ?>
    </body>
</html>