<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    
    $twigTmpDir = __DIR__ . '/templates';
    $twigLoader = new Twig_Loader_Filesystem($twigTmpDir);
    $twigEnv = new Twig_Environment($twigLoader);	
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="stylesheet" href="assets/style/style.css">
    </head>
    <body>
        <?= $twigEnv->render('main.html', array('header' => 'Composer installation')) ?>
    </body>
</html>
