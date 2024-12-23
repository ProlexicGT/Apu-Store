<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APU Store</title>
        <link rel="icon" type="image/x-icon" href="/src/favicon/favicon.ico">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <header class="header">
            <div class="header-content container">
                <div class="header-left">
                    <a href="/"><img src="/src/img/apu_store_logo.png" alt="APU Store Logo" title="APU Store Logo" class="apu_store_logo"></a>
                </div>
                <div class="header-right">
                    <div class="reglog" id="right">
                        <?php
                        if (!isset($_COOKIE['user_id'])) {
                            echo('<a href="/login" class="desktop-page-reglog font-bold-16">Login</a><a href="/register" class="desktop-page-reglog font-bold-16">Register</a>');
                        }
                        else {
                            echo('<a href="/logout" class="desktop-page-reglog font-bold-16">Logout</a>');
                        }
                        ?>

                        <input type="checkbox" class="toggle-menu mobile">
                        <div class="hamburger"></div>
                        <div class="burger-menu mobile container">
                            <ul>
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="top-nav-bar container">
            <ul>
                <li><a href="/category/accessories">Accessories</a></li>
                <li><a href="/category/clothing">Clothing</a></li>
                <li><a href="/category/stationary">Stationary</a></li>
            </ul>
            <ul>
                <li class="cart-item"><a href="/cart" class="font-bold-16">Cart</a></li>
            </ul>
        </nav>
    </body>
</html>
