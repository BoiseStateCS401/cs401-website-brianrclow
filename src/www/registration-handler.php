<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordAgain = $_POST['passwordAgain'];
$error = "";

if(empty($name) || (strlen($name) >= 35)) {
  	$error .= "ERROR: name empty or too long. Please try again ";
}else {
    $_SESSION['name'] = $name;
}
if(empty($email) || (strlen($email) >= 320) || strpos($email, '@') === false) {
    $error .= "ERROR: email empty or too long or invalid. Please try again ";
}
else {
    $_SESSION['email'] = $email;
}
if(empty($password) || (strlen($password) < 8 || strlen($password) >= 100)) {
    $error .= "ERROR: password empty or too long or too short. Please try again ";
}else {
    $_SESSION['password'] = $passwordAgain;
}
if(empty($passwordAgain) || (strlen($passwordAgain) < 8 || strlen($passwordAgain) >= 100)) {
    $error .= "ERROR: password check empty or too long or too short. Please try again ";
}
if($password !== $passwordAgain){
    $error .= "ERROR: passwords don't match";
}
$_SESSION["error"] = $error;

 if($error === "") { 
    header('Location: ../index.php');
 }else{
     $valid = false;
     header('Location: ../registration.php?valid=false');
 } ?>

<p>Name: <?= htmlspecialchars($name) ?></p>
<p>email: <?= htmlspecialchars($email) ?></p>
<p>password: <?= htmlspecialchars($password) ?></p>
<p>password again: <?= htmlspecialchars($passwordAgain) ?></p>

