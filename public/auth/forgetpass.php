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
        <div id="abs-left" style="z-index: 5">
            <a href="/"><img src="/src/img/icons8-back-100.png" alt="Back" id="back-logo"></a>
        </div>
        <h1 class="forget-pass-title">Forget Password</h1>
        <div class="enter-email-layout">
            <form id="forgetPassForm" method="post" action="#" onsubmit="ResetPassword(event)">
                <div class="enter-email">
                    <label for="email"><h3>Enter your email</h3></label>
                    <br>
                    <input class="input mobile-auth-input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="text" name="email" id="email" required>
                </div>
                <div id="invalidEmail" style="display: none;">
                    <p style="font-size: 14px; color: red;">Please enter a valid email</p>
                </div>
                <div id="emailNotEntered" style="display: none;">
                    <p style="font-size: 14px; color: red;">Please enter your email</p>
                </div>
                <div id="emailSent" style="display: none;">
                    <p style="font-size: 14px; color: green;">Please check your email</p>
                </div>
                <a href="/login">Back to Login</a>
                <div class="forget-pass-submit-btn">
                    <input onclick="displayEmailSent()" class="submit mobile-auth-submit" type="submit" value="Send Link">
                </div>
            </form>
        </div>
    </div>
</body>
</html>