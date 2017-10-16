<?
require_once "header.php";

?>
<div class="content">
  <? require_once "top_menu.php"; ?>
  <? require_once "left-dropdown.php"; ?>
  <div class="videoPage col-lg-10">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <div class="videoPlayer">
        <video class="col-sm-12 col-md-12 col-lg-12" controls>
          <source src="/Video-Life-v2/videos/BLACKPINK-(BOOMBAYAH) M_V.mp4" type="video/mp4">
        </video>
      </div>
      <div class="videoDetails col-sm-12 col-md-12 col-lg-12">
        <p class="videoName col-lg-6">BLACKPINK-(BOOMBAYAH) M_V</p>
        <div class="ex3 ">
          <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
          <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
          <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
        </div>
        <div class="VideoExplanation col-sm-12 col-md-12 col-lg-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        </div>
      </div>
      <div class="clear"></div>
      <div class="comments col-sm-12 col-md-12 col-lg-12">
        <div class="comments_header">
          <b>Yorumlar</b>
          <b> /Yorum sayısı</b>
        </div>   <!-- ./comments_header -->
        <div class="personel">
          <div class="profilPicture col-lg-1">
            <img src="/Video-Life-v2/images/personel.png" alt="profil resmi">
          </div>  <!-- ./profilPicture -->
          <div class="personelComment row col-lg-11">
            <textarea class="form-control " rows="3"></textarea>
          </div>   <!-- ./personelComment -->
          <div class="clear"></div>
        </div>  <!-- ./personel -->
        <div class="sortOfComments btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">En İyi Yorumlar
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">En İyi Yorumlar</a></li>
            <li><a href="#">En Eski Yorumlar</a></li>
            <li><a href="#">En Yeni Yorumlar</a></li>
          </ul>
        </div>
      </div>   <!-- ./comments -->
    </div>  <!-- ./col-sm-12 col-md-6 col-lg-6 -->
    <div class=" videoList col-sm-12 col-md-6 col-lg-6">
      <? for ($i=0; $i<4; $i++): ?>
      <div class="col-sm-12 col-md-6 col-lg-6" >
        <div >
          <div>
            <a href="">
              <img src="/Video-Life-v2/images/TWICE(트와이스) _TT_ ♥ dance cover.jpg" title="TWICE-TT" class="img-thumbnail" id="thumbnail">
            </a>
          </div>
          <div class="videoName">
            <p>TWICE(트와이스) _TT_ ♥ dance cover</p>
          </div>
        </div>      <!-- ./videoName  -->
      </div>      <!-- ./col-sm-12 col-lg-2 -->
      <?endfor;?>
    </div>  <!-- ./videoList -->
  </div>      <!--./videoPage ./col-lg-10  -->
</div>      <!-- ./content -->
