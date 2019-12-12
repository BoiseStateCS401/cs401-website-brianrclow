<?php
session_start();
include_once 'Dao.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordAgain = $_POST['passwordAgain'];
$error = "";

// checks username, must start with a letter, must be between 5 to 50 characters using letters and numbers only
if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{4,51}$/', $username) ) {
  	$error .= "ERROR: name must start with a letter and be between 5 to 50 characters. Please try again ";
}else {
    $_SESSION['username'] = $username;
}
// checks email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error .= "ERROR: email empty or too long or invalid. Please try again ";
}
else {
    $_SESSION['email'] = $email;
}
//checks password
if(empty($password) || strlen($password) < 10 || strlen($password) >= 160) {
    $error .= "ERROR: password empty or too long or too short. Please try again ";
}else {
    $_SESSION['password'] = $passwordAgain;
}
// checks repeated password
if(empty($passwordAgain) || strlen($passwordAgain) < 10 || strlen($passwordAgain) >= 160) {
    $error .= "ERROR: password check empty or too long or too short. Please try again ";
}
if($password !== $passwordAgain){
    $error .= "ERROR: passwords don't match";
}
$_SESSION["error"] = $error;

// no errors in registration forms
 if($error === "") { 
     
    include_once 'Dao.php';
    $dao = new Dao();
    $dao->registerUser($username,$email,$password);

    header('Location: support.php');
    die;
 }
 // there are errors
 else{
     $validRegistration = false;
     header('Location: registration.php?validRegistration=false'); 
     $_SESSION['presets'] = array('username' => htmlspecialchars($username),'email' => htmlspecialchars($email));
     die;
} ?>

<p>username: <?= htmlspecialchars($username) ?></p>
<p>email: <?= htmlspecialchars($email) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>
<p>password again: <?= htmlspecialchars($passwordAgain) ?></p>

