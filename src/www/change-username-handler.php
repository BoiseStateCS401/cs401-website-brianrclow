<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
include_once 'Dao.php';

// get the data passed into the post form
$user_username = $_POST['user_username'];
$user_email = $_POST['user_email'];
$new_username = $_POST['new_username'];
$error = "";

// checks username, must start with a letter, must be between 5 to 50 characters using letters and numbers only
if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{4,51}$/', $user_username) ) {
  $error .= "ERROR: name must start with a letter and be between 5 to 50 characters. Please try again ";
}else {
  $_SESSION['user_username'] = $user_username;
}

// checks new username, must start with a letter, must be between 5 to 50 characters using letters and numbers only
if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{4,51}$/', $new_username) ) {
  $error .= "ERROR: name must start with a letter and be between 5 to 50 characters. Please try again ";
}else {
  $_SESSION['new_username'] = $new_username;
}

// sets the any errors to the session variable to be used to print out
$_SESSION["error"] = $error;


// If there are no errors, then its a valid login pattern
if($error === "") {
  $validChange = true;
  $dao = new Dao();
  if($dao->changeUserUsername($user_username,$user_email,$new_username)) {
    session_regenerate_id(true);
    header('Location: change-username.php');
  }
  else {
    $error .= "Invalid username or password.";
    header('Location: change-username.php');
  }
}

// If there are errors then send them back to login and pass the errors
else{
  $validChange = false;
  header('Location: change-username.php');
  $_SESSION['presets'] = array('user_username' => htmlspecialchars($user_username));
} ?>

<p>Username: <?= htmlspecialchars($user_username) ?></p>
<p>password: <?= htmlspecialchars($user_password) ?></p>

