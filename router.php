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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require 'controllers/register.php';
        }
        else {
            require 'public/auth/register.php';
        }
        break;

    case '/forgetpass':
        require 'public/auth/forgetpass.php';
        break;

    case '/cart':
        require 'public/journey/cart.php';
        break;

    case '/payment':
        require 'public/journey/payment.php';
        break;

    case '/category/accessories':
        require 'public/category/accessories.php';
        break;

    case '/category/clothing':
        require 'public/category/clothing.php';
        break;

    case '/category/stationary':
        require 'public/category/stationary.php';
        break;

    default:
        require 'public/pages/404.php';
        break;
}
