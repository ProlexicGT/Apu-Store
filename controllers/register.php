<?php
require 'validation.php';
$validation = new Validation();
$errors = [];

$fname = htmlspecialchars($_POST['fname']);
$lname = htmlspecialchars($_POST['lname']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$cpassword = htmlspecialchars($_POST['cpassword']);

$validation->fname($fname, $errors);
$validation->lname($lname, $errors);
$validation->email($email, $errors);
$validation->password($password, $errors);
$validation->cpassword($password, $cpassword, $errors);

if (count($errors) === 0) {
    $sql = "SELECT * FROM users";
    # need to code to add the user details to database and save cookie and redirect header to homepage.
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Email: " . $row["email"] . " | Password: " . $row["password"] . " | First Name: " .
                $row["firstname"] .  " | Last Name: " . $row["lastname"] . "<br>" ;
        }
    } else {
        echo "0 results";
    }
}
else {
    require 'public/auth/register.php';
}