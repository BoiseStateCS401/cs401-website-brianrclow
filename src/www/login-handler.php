<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$error = "";

// checks username, must start with a letter, must be between 5 to 50 characters using letters and numbers only
if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{4,51}$/', $username) ) {
    $error .= "ERROR: username is incorrect. Please try again.";
}else {
  $_SESSION['username'] = $username;
}

// checks password
if(empty($password) || (strlen($password) < 10 || strlen($password) >= 160)) {
  $error .= "ERROR: password is incorrect. Please try again ";
}else {
  $_SESSION['password'] = $passwordAgain;
}

$_SESSION["error"] = $error;

if($error === "") { 
  $validLogin = true;
  header('Location: account-main.php');
}else{
   $validLogin = false;
   header('Location: login.php?validLogin=false');
   $_SESSION['presets'] = array('username' => htmlspecialchars($username));
} ?>

<p>Username: <?= htmlspecialchars($username) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>

