<?php
    $destPath = __DIR__ . '/uploads';
    if (!file_exists($destPath)) {
        mkdir($destPath);
    }

    if (!empty($_FILES['attach'])) {
        $file = $_FILES['attach'];

        $srcFileDest = $destPath . '/' . $file['name'];
        if (!move_uploaded_file($file['tmp_name'], $srcFileDest)) {
            $error = 'Ошибка при загрузке файла';
        } else {
            $result = $_SERVER['REQUEST_URI'];
        }
    }
?>
<html>
    <head>
        <title>Загрузка файлов</title>
    </head>
    <body>
        <?php if (!empty($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php else: ?>
            <p style="color:seagreen;"><?= $result ?></p>
        <?php endif; ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="attach">
            <input type="submit" value="Send">
        </form>
    </body>
</html>
