<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../../style.css">
    <script src="index.js" defer></script>
</head>
<body style="background-color: lightgray;">
<div class="floating">
    <div class="float-left">
        <div id="abs-left">
            <a href="/"><img src="/src/img/back_logo.png" alt="" id="back-logo"></a>
        </div>
    </div>
    <div class="float-right" id="container">
        <h1 id="register-title">Register</h1>
        <form id="registerForm" method="post" action="#" onsubmit="Register(event)">
            <div class="fname" id="container">
                <div class="firstname">
                    <label for="fname">First Name: </label>
                    <input class="input" type="text" id="fname" placeholder="First Name" name="name" required>
                </div>
                <div class="lastname">
                    <label for="lname">Last Name: </label>
                    <input class="input" type="text" id="lname" placeholder="Last Name" name="name" required>
                </div>
            </div>
            <div>
                <label for="username">Username: </label>
                <br>
                <input class="input" type="text" id="username" placeholder="Username / Email" name="name" required>
            </div>
            <div class="pass" id="container">
                <label for="pass">Password: </label>
                <br>
                <input class="input" type="password" id="pass" name="password" placeholder="Password" required>
                <div>
                    <label for="cpass">Confirm Password: </label>
                    <br>
                    <input class="input" type="password" id="dpass" name="password" placeholder="Confirm Password" required>
                    <div>
                        <a href="/login" id="abs-left">Login</a>
                    </div>
                </div>
                <br>
                <div>
                    <input class="submit" type="submit" value="Register">
                </div>
        </form>
    </div>
</div>
</body>
</html>