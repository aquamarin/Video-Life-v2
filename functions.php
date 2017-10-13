<?php
// giriş yapmadıysa girişe yönlendir
function redirectIfNotLoggedIn(){
    if( ! isset($_SESSION['userID'])) @header("Location: login.php");
}
// giriş yaptıysa ana sayfaya yönlendir
function redirectIfLoggedIn(){
    if(isset($_SESSION['userID'])) @header("Location: views/home.php");
}