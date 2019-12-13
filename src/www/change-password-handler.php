<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
include_once 'Dao.php';

// get the data passed into the post form
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$new_password = $_POST['new_password'];
$new_password_repeat = $_POST['new_password_repeat'];
$error = "";

// checks password
if(empty($new_password) || strlen($new_password) < 10 || strlen($new_password) >= 160) {
    $error .= "ERROR: password empty or too long or too short. Please try again ";
}else {
    $_SESSION['new_password'] = $new_password;
}
// checks repeated password
if($new_password !== $new_password_repeat){
    $error .= "ERROR: passwords don't match";
}
// sets the any errors to the session variable to be used to print out
$_SESSION["error"] = $error;


// If there are no errors, then its a valid login pattern
if($error === "") {
  $validChange = true;
  $dao = new Dao();
  if($dao->changeUserPassword($user_email, $user_password, $new_password)) {
    session_regenerate_id(true);
    header('Location: change-password.php');
  }
  else {
    $error .= "Invalid username or password.";
    header('Location: change-password.php');
  }
}

// If there are errors then send them back to login and pass the errors
else{
  $validChange = false;
  header('Location: change-password.php');
  $_SESSION['presets'] = array('user_password' => htmlspecialchars($user_username));
} ?>

<p>Username: <?= htmlspecialchars($user_username) ?></p>
<p>password: <?= htmlspecialchars($user_password) ?></p>

