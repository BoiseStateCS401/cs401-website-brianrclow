<?php
session_start();
include_once 'Dao.php';
// get the data passed into the post form
$user_username = $_POST['user_username'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$user_password_repeat = $_POST['user_password_repeat'];
$error = "";

// checks username, must start with a letter, must be between 5 to 50 characters using letters and numbers only
if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{4,51}$/', $user_username) ) {
  	$error .= "ERROR: name must start with a letter and be between 5 to 50 characters. Please try again ";
}else {
    $_SESSION['user_username'] = $user_username;
}
// checks email is a valid format
if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $error .= "ERROR: email empty or too long or invalid. Please try again ";
}
else {
    $_SESSION['user_email'] = $user_email;
}
// checks password
if(empty($user_password) || strlen($user_password) < 10 || strlen($user_password) >= 160) {
    $error .= "ERROR: password empty or too long or too short. Please try again ";
}else {
    $_SESSION['user_password'] = $user_password;
}
// checks repeated password
if($user_password !== $user_password_repeat){
    $error .= "ERROR: passwords don't match";
}
$_SESSION["error"] = $error;



// no errors in registration forms
 if($error === "") { 
    $validRegistration = true;
    include_once 'Dao.php';
    $dao = new Dao();
    $dao->registerUser($user_username, $user_email, $user_password);
    header('Location: login.php');
    die;
 }
 // there are errors
 else{
     $validRegistration = false;
     header('Location: registration.php?validRegistration=false'); 
     $_SESSION['presets'] = array('username' => htmlspecialchars($user_username),'email' => htmlspecialchars($user_email));
     die;
} ?>

<p>username: <?= htmlspecialchars($user_username) ?></p>
<p>email: <?= htmlspecialchars($user_email) ?></p>
<p>password: <?= htmlspecialchars($user_password) ?></p>
<p>password again: <?= htmlspecialchars($user_password_repeat) ?></p>

