<?php

namespace App\Session;

class user
{

    private static function init()
    {
        return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;
    }

    public static function login($name, $email, $image)
    {
        self::init();
        // Estou definindo a sessao aqui !
        $_SESSION['user'] = [
            'name' => $name,
            'email' => $email,
            'image' => $image,
        ];
    }

    public static function isLogged()
    {
        self::init();
        return isset($_SESSION['user']);
    }

    public static function getInfo()
    {
        self::init();
        return $_SESSION['user'] ?? [];
    }

    public static function logout()
    {
        self::init();
        unset($_SESSION['user']);

        // Vou redirecionar 
        header('location: index.php');
        exit;
    }
}
