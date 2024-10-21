<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="/src/favicon/favicon.ico">
    <link rel="stylesheet" href="../../style.css">
    <script src="/public/journey/index.js" defer></script>
</head>
<body style="background-color: lightgray;">
<div class="floating">
    <div id="abs-left" style="z-index: 5">
        <a href="/"><img src="/src/img/icons8-back-100.png" alt="Back" id="back-logo"></a>
    </div>
    <div class="float-left">
        <img src="/src/img/login_vector.png" alt="Login vector" style="width: 629px; height: 576px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
    </div>
    <div class="float-right" id="container">
        <h1>Login</h1>
        <form id="loginForm" method="post" action="#" onsubmit="Login(event)">
            <div>
                <label for="username">Username</label>
                <br>
                <input class="input" type="text" id="username" name="username" placeholder="Username / Email" required>
            </div>
            <div class="pass">
                <label for="password">Password</label>
                <br>
                <input class="input" type="password" id="password" name="password" placeholder="Password" required>
                <div>
                    <a href="/forgetpass">Forget Password?</a>
                </div>
            </div>
            <div>
                <input class="submit" type="submit" value="Login">
            </div>
            <div>
                <a href="/register" class="login-page-register-button">Register</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>