
<!DOCTYPE html>   <!--footer dakapanacak-->
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Video Life</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/2fdf45b284.js"></script>
    <link rel="stylesheet" href="../stylesheets/style.css">
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
            <nav class="navbar navbar-default ">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home.php">
                            <div class="col-md-2">

                                    <!--yeni logo tasarlanıp gelecek  -->
                                    <img src="http://i.hizliresim.com/qj2oVZ.jpg" alt="logo">

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
                                <!--oturum açma butonu işlemleri için gerekli olan kısım kayıt olma ve oturum açma hesabı-->
                                <? require_once "login.php" ; ?>
                            </div>
                    </div>

                </div>
            </nav>

        </div>
        <!-- <div class="col-xs-6 col-md-4">
         </div>-->
    </div>
