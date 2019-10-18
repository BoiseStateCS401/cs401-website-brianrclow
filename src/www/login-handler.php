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

if(empty($password) || (strlen($password) < 8 || strlen($password) >= 100)) {
  $error .= "ERROR: password is incorrect. Please try again ";
}else {
  $_SESSION['password'] = $passwordAgain;
}
$_SESSION["error"] = $error;

if($error === "") { 
  header('Location: ../support.php');
}else{
   $valid = false;
   header('Location: ../registration.php?valid=false');
} ?>

<p>Name: <?= htmlspecialchars($name) ?></p>
<p>email: <?= htmlspecialchars($email) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>
<p>password again: <?= htmlspecialchars($passwordAgain) ?></p>

