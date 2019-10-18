<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordAgain = $_POST['passwordAgain'];
$error = "";

if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{4,51}$/', $username) ) {
  	$error .= "ERROR: name must start with a letter and be between 6 to 50 characters. Please try again ";
}else {
    $_SESSION['username'] = $username;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error .= "ERROR: email empty or too long or invalid. Please try again ";
}
else {
    $_SESSION['email'] = $email;
}
if(empty($password) || strlen($password) < 10 || strlen($password) >= 160) {
    $error .= "ERROR: password empty or too long or too short. Please try again ";
}else {
    $_SESSION['password'] = $passwordAgain;
}
if(empty($passwordAgain) || strlen($passwordAgain) < 10 || strlen($passwordAgain) >= 160) {
    $error .= "ERROR: password check empty or too long or too short. Please try again ";
}
if($password !== $passwordAgain){
    $error .= "ERROR: passwords don't match";
}
$_SESSION["error"] = $error;

// no errors in registration forms
 if($error === "") { 
    header('Location: support.php');
 }else{
     $validRegistration = false;
     header('Location: registration.php?validRegistration=false'); 
     $_SESSION['presets'] = array('username' => htmlspecialchars($username),'email' => htmlspecialchars($email));
} ?>

<p>username: <?= htmlspecialchars($username) ?></p>
<p>email: <?= htmlspecialchars($email) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>
<p>password again: <?= htmlspecialchars($passwordAgain) ?></p>
