<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$error = "";


if(empty($username) || (strlen($username) >= 35)) {
    $error .= "ERROR: username is incorrect. Please try again.";
}else {
  $_SESSION['username'] = $username;
}

if(empty($password) || (strlen($password) < 10 || strlen($password) >= 160)) {
  $error .= "ERROR: password is incorrect. Please try again ";
}else {
  $_SESSION['password'] = $passwordAgain;
}

$_SESSION["error"] = $error;

if($error === "") { 
  header('Location: support.php');
}else{
   $validLogin = false;
   header('Location: login.php?validLogin=false');
} ?>

<p>Name: <?= htmlspecialchars($name) ?></p>
<p>email: <?= htmlspecialchars($email) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>
<p>password again: <?= htmlspecialchars($passwordAgain) ?></p>

