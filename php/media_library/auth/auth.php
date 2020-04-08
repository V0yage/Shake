<?php
    function checkAuth(string $login, string $password): bool {
        $usersList = require __DIR__ . '/usersDB.php';

        foreach ($usersList as $user) {
            if ($user['login'] === $login && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }

    function getAuthUser(): ?string {
        $loginFromCookie = $_COOKIE['login'] ?? '';
        $passwordFromCookie = $_COOKIE['password'] ?? '';

        if (checkAuth($loginFromCookie, $passwordFromCookie)) {
            return $loginFromCookie;
        }
        return null;
    }