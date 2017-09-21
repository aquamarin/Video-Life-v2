<?php
include ("functions.php");
//	kullanıcı zaten giriş yaptıysa ana sayfaya yönlendirelim
session_start();
redirectIfLoggedIn();
//	post ile email ve parola geldiyse yakalayalım
if(isset($_POST['email']) && isset($_POST['password'])){
    //	bu eposta ve parolayla eşleşen bir kullanıcı varsa, girişi geçerli sayıp oturum açalım
    $checkUserQuery = $connection->prepare("SELECT * FROM users WHERE Email = :inputEmail AND password = MD5(:inputPassword)");
    $checkUserQuery->execute(
        array(
            'inputEmail2' => $_POST['email'],
            'inputPassword2' => $_POST['password']
        )
    );
    $user = $checkUserQuery->fetch(MYSQL_ASSOC);
    if($user){
        $_SESSION['userID'] = $user->userID;
         echo "BAŞARILI: Sisteme giriş yaptınız.";
        redirectIfLoggedIn();
        die();
    }else{
        echo "!!!HATA: Sisteme giriş yapılamadı.";
        redirectIfNotLoggedIn();
        die();
    }
    //	oturum açılırsa home.php'ye yönlendirelim
}

?>