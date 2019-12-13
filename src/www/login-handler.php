<?php
session_start();
include_once 'Dao.php';

// get the data passed into the post form
$user_username = $_POST['user_username'];
$user_password = $_POST['user_password'];
$error = "";


// checks username, must start with a letter, must be between 5 to 50 characters using letters and numbers only
if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{4,51}$/', $user_username) ) {
  $error .= "ERROR: name must start with a letter and be between 5 to 50 characters. Please try again ";
}else {
  $_SESSION['user_username'] = $user_username;
}

// checks password
if(empty($user_password) || strlen($user_password) < 10 || strlen($user_password) >= 160) {
  $error .= "ERROR: password empty or too long or too short. Please try again ";
}else {
  $_SESSION['user_password'] = $user_password;
}


// sets the any errors to the session variable to be used to print out
$_SESSION["error"] = $error;


// If there are no errors, then its a valid login pattern
if($error === "") {
  include_once 'Dao.php';
  $dao = new Dao();
  if($dao->validUserCredentials($user_username, $user_password)) {
    $validLogin = true;
    $_SESSION['userLoggedin'] = true;
    session_regenerate_id(true);
    header('Location: account-main.php');
  }
  else {
    $error .= "Invalid username or password.";
    header('Location: login.php?validLogin=false');
  }
}

// If there are errors then send them back to login and pass the errors
else{
   $validLogin = false;
   header('Location: login.php?validLogin=false');
   $_SESSION['presets'] = array('user_username' => htmlspecialchars($user_username));
} ?>

<p>Username: <?= htmlspecialchars($user_username) ?></p>
<p>password: <?= htmlspecialchars($user_password) ?></p>

