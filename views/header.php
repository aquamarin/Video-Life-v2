
<!DOCTYPE html>   <!--footer dakapanacak-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Video Life</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/2fdf45b284.js"></script>
  <script type="text/javascript" src="../bootstrap-sass/assets/javascripts/event.js"></script>
  <link rel="stylesheet" href="../bootstrap-sass/assets/stylesheets/main.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="70">
  <!--home.php de kapanacak-->
  <!--acılıp kapanabilir menu-->
  <!--icerisinde ana sayfa ,trendler ve geçmiş  kısmı olacak-->
  <!--eger oturum acıldıysa kullanıcının abone oldugu kanalların listesi gelecek-->
  <!--kullanıcı kısmı gelecek-->
  <!--eger oturum acılmıssa video yükleme butonu olacak-->

  <!-- YENİ OLAN SEYLER
  pek yok aslında :) sass css ve js dosyalarını yeni gelen bootstrap-sass dosyası içindeki asset dosyasına attım.
  config.rb dosyasında dosyaların yolunun nerede oldugunu düzenledim
  top_menu.php yi çagırldıgı yerlerden kaldırdım. ama kendisi duruyor belki olurda kullanırım diye silmedim.
  event.js dosyası ile cok fazla oynadım. ama sen en son halini göreceksin o yüzden orada da pek birşey yok.
  sass dosyasında videoDetailsContent.sass dosyası eklendi. video resimleri altındaki sürelerini gösteren yer
  için yazılmıs sass classı.
  -->

  <div class="container-fluid">
    <div class="row">
      <div >
        <nav class="navbar navbar-default ">
          <div class="container-fluid">
            <div class="navbar-header col-md-12">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="row">
                <a class="navbar-brand col-md-2" href="home.php">
                  <div class="">
                    <!--yeni logo tasarlanıp gelecek  -->
                    <img src="http://i.hizliresim.com/qj2oVZ.jpg" alt="logo">
                  </div>
                </a>
                <div  id="myNavbar" class="collapse navbar-collapse" aria-expanded="false" style="margin-top: 20px;">
                  <ul class="nav navbar-nav col-md-3">
                    <li class="active">
                      <a href="home.php"  >Anasayfa</a>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Trendler
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="trendler.php"  >Günün Trendleri</a>
                        </li>
                        <li>
                          <a href="trendler.php"  >Haftanın Trendleri</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="abonelikler.php"  >Abonelikler</a>
                    </li>
                  </ul>
                  <div class="col-md-4 col-lg-4">
                    <div class="input-group">
                      <!--  arama butonu-->
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
                </div> <!-- #/myNavbar  -->
              </div>

            </div> <!-- ./navbar-header  -->
            <!--  geciş için formlar baglantılar ve dropdownlar burada-->

          </div>  <!-- ./navbar ./navbar-default -->
        </nav>
      </div> <!-- ./col-xs-12 ./col-lg-12 -->
    </div>   <!-- ./row -->
