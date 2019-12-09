<?php
session_start();

// Get all the variables passed into handler
$username = $_POST['user_username'];
$password = $_POST['user_password'];
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



// If there are no errors, then its a valid login
if($error === "") { 
  $validLogin = true;
  header('Location: account-main.php');
}

// If there are errors then send them back to login and pass the errors
else{
   $validLogin = false;
   header('Location: login.php?validLogin=false');
   $_SESSION['presets'] = array('username' => htmlspecialchars($username));
} ?>

<p>Username: <?= htmlspecialchars($username) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>

