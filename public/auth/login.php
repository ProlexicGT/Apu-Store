<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /", true, 302);
    exit();
}
?>
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
            <img src="/src/img/login_vector.png" alt="Login vector" style="width: 350px; height: 480px; position: absolute; margin: 5%; margin-left: 13%; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
        </div>
        <div class="float-right" id="container">
            <h1>Login</h1>
            <form id="loginForm" method="post" action="/login"">
                <div>
                    <label for="username">Email</label>
                    <br>
                    <input class="input" type="text" id="username" name="email" placeholder="Email" required>
                </div>
                <div class="pass">
                    <label for="password">Password</label>
                    <br>
                    <input class="input" type="password" id="password" name="password" placeholder="Password" required>
                    <div>
                        <a href="/forgetpass">Forget Password?</a>
                    </div>
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (count($errors)>0) {
                        foreach($errors as $error) {
                            echo "<p style='color: red; margin-bottom: 0; font-size: 12px;'>" . $error . "</p>";
                        }
                    }
                }
                ?>
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