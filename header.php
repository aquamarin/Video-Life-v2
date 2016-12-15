<?php ?>
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
    <link rel="stylesheet" href="style.css">
    <script src="video.js"></script>
</head>
<body>
<!--home.php de kapanacak-->
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
                                    <li class="active"><a href="#">Anasayfa  <span class="sr-only">(current)</span></a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Trendler <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Günün Trendleri</a></li>
                                            <li><a href="#">Haftanın Trendleri</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Abonelikler</a></li>

                                </ul>
                                <div class="col-md-4 col-lg-6">
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
                                <div class="col-md-2">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Kayıt Ol</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Oturum Aç</a></li>
                                    </ul>
                                </div>

                            </div>
                    </div>

                </div>
            </nav>
            <!--acılıp kapanabilir menu-->
            <!--icerisinde ana sayfa ,trendler ve geçmiş  kısmı olacak-->
            <!--eger oturum acıldıysa kullanıcının abone oldugu kanalların listesi gelecek-->

            <!--<div class="row">-->

            <!--</div>&lt;!&ndash; /.row &ndash;&gt;-->
            <!--kullanıcı kısmı gelecek-->

            <!--eger oturum acılmıssa video yükleme butonu olacak-->

        </div>
        <!-- <div class="col-xs-6 col-md-4">
         </div>-->
    </div>