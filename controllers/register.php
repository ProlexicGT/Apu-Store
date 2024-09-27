<?php
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo "$fname<br>$lname<br>$email<br>$password";
    if (len($fname) >= 16) {
        echo "First Name is too long";
    }
    else {
        echo "First Name is good";
    }