<?php

//requests cookies and Sessions
// so php has kinda it's own server so it can work with request 
// $_GET <= Superglobal Variable decalred in php 
//request data comes from two ways 1 url query or 2 form data
// so $_GET receive data from server
// $_POST send data to server
// $_REQUEST can work with both post and get method

//Session
// session data don't have expire time because it is only use while opening the browser.
session_start();

$_SESSION['user'] = 'Htet'; // a little bit different hum ? 
// in cookie when we store data it's like call setcookie('key', 'value', time() )

//cookie main focus to store text data
// session can store both obj and array
//how to delete session data it's easy call unset function

unset($_SESSION['user']);