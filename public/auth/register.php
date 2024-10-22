<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <img src="/src/img/register_vector.png" alt="Register vector" style="width: 460px; height: 510px; position: abolute; margin: 5%; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
    </div>
    <div class="float-right" id="container">
        <h1 id="register-title">Register</h1>
        <form id="registerForm" method="post" action="/register">
            <div class="fname" id="container">
                <div class="firstname">
                    <label for="fname">First Name</label>
                    <input class="input" type="text" id="fname" placeholder="First Name" name="fname" required>
                </div>
                <div class="lastname">
                    <label for="lname">Last Name</label>
                    <input class="input" type="text" id="lname" placeholder="Last Name" name="lname" required>
                </div>
            </div>
            <div>
                <label for="username">Email</label>
                <br>
                <input class="input" type="text" id="username" placeholder="Email" name="email" required>
            </div>
            <div class="pass" id="container">
                <label for="pass">Password</label>
                <br>
                <input class="input" type="password" id="pass" name="password" placeholder="Password" required>
                <div>
                    <label for="cpass">Confirm Password</label>
                    <br>
                    <input class="input" type="password" id="dpass" name="cpassword" placeholder="Confirm Password" required>
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