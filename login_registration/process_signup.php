<?php

if (empty($_POST['name']))
  die('Name Field is Required');

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
  die('Please enter valid email');

if (strlen($_POST["password"]) < 8)
  die("Password length must be 8");

if (!preg_match('/[a-z]/i', $_POST['password']))
  die("Password must have at least one alphabet");

if (!preg_match('/[0-9]/i', $_POST['password']))
  die("Password must have at least one number");

if ($_POST['password'] != $_POST['password_confirmation'])
  die("Password does not match");

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash) 
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
  die('SQL Error:' . $mysqli->error);
}

$stmt->bind_param(
  'sss',
  $_POST['name'],
  $_POST['email'],
  $password_hash
);

if ($stmt->execute()) {
  header("Location: signup_success.html");
} else {
  if ($mysqli->errno === 1062) {
    die("Email Already Exist");
  }
  die($mysqli->error . "" . $mysqli->errno);
}
