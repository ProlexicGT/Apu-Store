<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /", true, 302);
    exit();
}

require 'validation.php';
$validation = new Validation();
$errors = [];

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$validation->email($email, $errors);
$validation->password($password, $errors);

if (count($errors) === 0) {
    $sql = "SELECT id, email, password, firstname FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['firstname'] = $user['firstname'];

            setcookie('user_id', $user['id'], time() + (30 * 24 * 60 * 60), '/', '', true, true);

            header("Location: /", true, 302);
            exit();
        } else {
            $errors['login'] = "Invalid email or password";
        }
    } else {
        $errors['login'] = "Invalid email or password";
    }

    $stmt->close();
}

require 'public/auth/login.php';