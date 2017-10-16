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
      <div class="comments">

      </div>
    </div>
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
        </div>      <!-- ./videoList  -->
      </div>      <!-- ./col-sm-12 col-lg-2 -->
      <?endfor;?>
    </div>
  </div>      <!--./videoPage ./col-lg-10  -->
</div>      <!-- ./content -->
