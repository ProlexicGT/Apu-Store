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

var_dump($errors);