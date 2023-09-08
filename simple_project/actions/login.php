<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if($email === 'htetwaiyan@gmail.com' && $password === 'htet') {
    $_SESSION['user'] = ['username' => 'John Doe'];
    header('location: ../profile.php');
} else {
    header('location: ../index.php?incorrect');
}