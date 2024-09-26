<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($path) {
    case '/':
        require 'public/pages/home.php';
        break;

    case '/about':
        require 'public/pages/about.php';
        break;

    case '/contact':
        require 'public/pages/contact.php';
        break;

    case '/sizing':
        require 'public/pages/sizing.php';
        break;

    case '/login':
        require 'public/auth/login.php';
        break;

    case '/register':
        require 'public/auth/register.php';
        break;

    case '/forgetpass':
        require 'public/auth/forgetpass.php';
        break;

    case '/category/accessories':
        require 'public/categories/accessories.php';
        break;

    case '/category/clothing':
        require 'public/categories/clothing.php';
        break;

    case '/category/stationary':
        require 'public/categories/stationary.php';
        break;

    default:
        require 'public/pages/404.php';
        break;
}
