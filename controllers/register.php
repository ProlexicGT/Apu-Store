<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /", true, 302);
    exit();
}

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
    $sql = "INSERT INTO users (email, password, firstname, lastname) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt->bind_param("ssss", $email, $hashed_password, $fname, $lname);

    if (!$stmt->execute()) {
        throw new Exception($mysqli->error);
    }

    $user_id = $mysqli->insert_id;

    if (!$user_id) {
        throw new Exception("Failed to get user ID");
    }

    $stmt->close();

    session_start();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['email'] = $email;
    $_SESSION['firstname'] = $fname;

    setcookie('user_id', $user_id, time() + (30 * 24 * 60 * 60), '/', '', true, true);

    header("Location: /", true, 302);
    exit();
}
else {
    require 'public/auth/register.php';
}