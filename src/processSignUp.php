<?php
if (empty($_POST['user'])) {
    die("Username is required");
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST['password']) < 8) {
    die("Password must be at least 8 characters long.");
}

if (!preg_match("/[a-z]/i", $_POST['password'])) {
    die("Password must at least contain one letter.");
}

if (!preg_match("/[0-9]/i", $_POST['password'])) {
    die("Password must at least contain one number.");
}

if ($_POST['password'] !== $_POST['confPassword']) {
    die("Passwords do not match");
}

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
var_dump($password_hash);
