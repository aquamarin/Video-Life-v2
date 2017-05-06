
<!DOCTYPE html>   <!--footer dakapanacak-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Video Life</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/2fdf45b284.js"></script>
    <link rel="stylesheet" href="../style.css">
    <script src="events.js" type="text/javascript"></script>
</head>
<body>
<!--home.php de kapanacak-->
<!--acılıp kapanabilir menu-->
<!--icerisinde ana sayfa ,trendler ve geçmiş  kısmı olacak-->
<!--eger oturum acıldıysa kullanıcının abone oldugu kanalların listesi gelecek-->
<!--kullanıcı kısmı gelecek-->
<!--eger oturum acılmıssa video yükleme butonu olacak-->

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-lg-12 ">
            <nav class="navbar navbar-default " style="background-color: #c4e3f3; height: 100px;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <div class="col-md-2">
                                <div class="head-logo-container" >
                                    <!--yeni logo tasarlanıp gelecek-->
                                    <img src="http://i.hizliresim.com/qj2oVZ.jpg" style="width: 100px; height: 75px;">
                                </div>
                            </div>
                        </a>
<!--                            geciş için formlar baglantılar ve dropdownlar burada-->
                            <div  id="myNavbar" class="collapse navbar-collapse " aria-expanded="false" style="margin-top: 20px; position: relative;">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="home.php">Anasayfa  <span class="sr-only">(current)</span></a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Trendler <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="trendler.php">Günün Trendleri</a></li>
                                            <li><a href="trendler.php">Haftanın Trendleri</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Abonelikler</a></li>

                                </ul>
                                <div class="col-md-4 col-lg-4">
                                    <div class="input-group">
<!--                                        arama butonu-->
                                        <input type="text" class="form-control" placeholder="Ara">
                                        <span class="input-group-btn">
                                                 <!--glyphicon glyphicon-search-->
                                                    <button class="btn btn-default" type="button">
                                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                    </button>
                                                </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->
                                <!--oturum açma butonu-->
                                <div >
                                    <ul class="nav navbar-nav navbar-right">
<!--                                        kayıt paneli-->
                                        <li class="dropdown open" >
                                            <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Kayıt OL <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="min-width: 200px">
                                                <div class="col-lg-12">
                                                    <div class="text-center"><h3><b>Register</b></h3></div>
                                                    <form id="ajax-register-form" action="http://phpoll.com/register/process" method="post" role="form" autocomplete="off">
                                                        <div class="form-group">
                                                            <input name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" id="email" tabindex="1" class="form-control" placeholder="Email Adresi" value="" type="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="password" id="password" tabindex="2" class="form-control" placeholder="Parola" type="password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Parola Onayla " type="password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-6 col-xs-offset-3">
                                                                    <input name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Kayıt OL" type="submit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0" type="hidden">
                                                    </form>
                                                </div>
                                            </ul>
                                        </li>
<!--                                        login paneli-->
                                        <li class="dropdown open" >
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Oturum Aç</b> <span class="caret"></span></a>
                                            <ul id="login-dp" class="dropdown-menu" style="min-width: 200px">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            Login
                                                            <div class="social-buttons">
                                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                                            </div>
                                                            veya
                                                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                                <div class="form-group">
                                                                    <label class="sr-only" for="exampleInputEmail2">Email Adresi</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="sr-only" for="exampleInputPassword2">Parola</label>
                                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required="">
                                                                    <div class="help-block text-right"><a href="">Parolayı Unut ?</a></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary btn-block">Oturum Aç</button>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> Oturumu açık tut.
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="bottom text-center">
                                                            New here ? <a href="#"><b>Join Us</b></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                      <!--  <li class="dropdown open">
                                            <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Log In <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                                                <div class="col-lg-12">
                                                    <div class="text-center"><h3><b>Log In</b></h3></div>
                                                    <form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
                                                        <div class="social-buttons">
                                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Kullanıcı Adı</label>
                                                            <input name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="" autocomplete="off" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password">Parola</label>
                                                            <input name="password" id="password" tabindex="2" class="form-control" placeholder="Parola" autocomplete="off" type="password">
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-7">
                                                                    <input tabindex="3" name="remember" id="remember" type="checkbox">
                                                                    <label for="remember"> Hatırla Beni</label>
                                                                </div>
                                                                <div class="col-xs-5 pull-right">
                                                                    <input name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In" type="submit">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="text-center">
                                                                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Parolayı Unut?</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6" type="hidden">
                                                    </form>
                                                </div>
                                            </ul>
                                        </li>-->
                                    </ul>
                                </div>

                            </div>
                    </div>

                </div>
            </nav>

        </div>
        <!-- <div class="col-xs-6 col-md-4">
         </div>-->
    </div>