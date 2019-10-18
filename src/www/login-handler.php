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
   $_SESSION['presets'] = array('username' => htmlspecialchars($username));
} ?>

<p>Username: <?= htmlspecialchars($username) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>

