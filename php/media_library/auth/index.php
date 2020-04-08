<?php
    if (!empty($_POST)) {
        require_once __DIR__ . '/auth.php';

        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';

        if (checkAuth($login, $password)) {
            setcookie('login', $login, 0, '/');
            setcookie('password', $password, 0, '/');
            header('Location: ../');
        } else {
            $error = 'Authentication error';
        }
    }
?>

<html>
    <head>
        <title>Authorization</title>
        <link rel="stylesheet" href="../src/style.css">
    </head>
    <body>
        <?php if (!empty($error)): ?>
        <p class="error-msg"><?= $error ?></p>
        <?php endif; ?>
        <form action="./" method="post">
            <input type="text" name="login" placeholder="login"><br>
            <input type="text" name="password" placeholder="password"><br>
            <input type="submit" value="Sign in">
        </form>
    </body>
</html>