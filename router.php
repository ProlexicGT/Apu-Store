<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch (true) {  // Changed to switch(true) to allow for preg_match
    case $path === '/':
        require 'public/pages/home.php';
        break;

    case $path === '/about':
        require 'public/pages/about.php';
        break;

    case $path === '/contact':
        require 'public/pages/contact.php';
        break;

    case $path === '/sizing':
        require 'public/pages/sizing.php';
        break;

    case $path === '/login':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require 'controllers/login.php';
        }
        else {
            require 'public/auth/login.php';
        }
        break;

    case $path === '/register':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require 'controllers/register.php';
        }
        else {
            require 'public/auth/register.php';
        }
        break;

    case $path === '/logout':
        require 'controllers/logout.php';
        break;

    case $path === '/forgetpass':
        require 'public/auth/forgetpass.php';
        break;

    case $path === '/cart':
        require 'public/journey/cart.php';
        break;

    case $path === '/payment':
        require 'public/journey/payment.php';
        break;

    case $path === '/category/accessories':
        require 'public/category/accessories.php';
        break;

    case $path === '/category/clothing':
        require 'public/category/clothing.php';
        break;

    case $path === '/category/stationary':
        require 'public/category/stationary.php';
        break;

    case preg_match('/^\/product\/\d+$/', $path):
        require 'public/products/product.php';
        break;

    default:
        require 'public/pages/404.php';
        break;
}