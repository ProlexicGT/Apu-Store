<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="icon" type="image/x-icon" href="/src/favicon/favicon.ico">
    <link rel="stylesheet" href="../../style.css">
    <script src="/public/journey/index.js" defer></script>
</head>
<body style="background-color: lightgray;">
<div class="floating">
    <div class="float-left">
        <div id="abs-left">
            <a href="/"><img src="/src/img/icons8-back-100.png" alt="Back" id="back-logo"></a>
        </div>
    </div>
    <h1 class="forget-pass-title">Forget Password</h1>
    <div class="enter-email-layout">
        <form id="forgetPassForm" method="post" action="#" onsubmit="ResetPassword(event)">
            <div class="enter-email">
                <label for="email"><h3>Enter your email</h3></label>
                <br>
                <input class="input" type="text" name="email" id="email" required>
            </div>
            <a href="/login">Back to Login</a>
            <div>
                <input class="submit" type="submit" value="Send Link">
            </div>
        </form>
    </div>
</div>
</body>
</html>