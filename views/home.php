
<?
$page = "home";
require_once "header.php";

?>
<div class="content" style="margin-top: 5px;">
  <!-- top_menu.php buradaydı -->
  <div class="row">
    <? require_once "left-dropdown.php"; ?>

    <div class="col-xs-12 col-md-8 col-lg-10">
      <div class="media" >
        <div class="col-sm-12 col-md-12  col-lg-5 container">
          <!-- 4:3 görünüş oranı -->
          <!--büyük videonun olduğu kısım onMouseOver="picture_on('play','psd-play-button.jpg');" onMouseOut="picture_on('normal','BLACKPINK - '붐바야'(BOOMBAYAH) M_V.jpg');"-->
          <a href="videoPage.php"  >
            <img  src="/Video-Life-v2/bootstrap-sass/assets/images/BLACKPINK(BOOMBAYAH) M_V.jpg "  title="Blakpink-Boombayah" class=" image img-thumbnail" id="normal">
            <div class="middle">
              <img src="#" class="text" >
            </div>
            <div class="time">
              <time>3:45</time>
            </div>
            <div class="videoText">
              <p>Blakpink-Boombayah</p>
            </div>
          </a>
        </div> <!-- .col-sm-12 col-md-12  col-lg-5 container-->
        <!--  yan orta boy videoların kısmı-->
        <div class="FourVideo col-sm-12 col-lg-6">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <a href="#">
              <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
              <div class="middle">
                <img src="#" class="text" >
              </div>
              <div class="time">
                <time>3:45</time>
              </div>
              <div class="videoText">
                <p>4MINUTE -(Crazy)' (Choreography Practice Video)</p>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <a href="#">
              <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
              <div class="middle">
                <img src="#" class="text" >
              </div>
              <div class="time">
                <time>3:45</time>
              </div>
              <div class="videoText">
                <p>4MINUTE -(Crazy)' (Choreography Practice Video)</p>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <a href="#">
              <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
              <div class="middle">
                <img src="#" class="text" >
              </div>
              <div class="time">
                <time>3:45</time>
              </div>
              <div class="videoText">
                <p>4MINUTE -(Crazy)' (Choreography Practice Video)</p>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <a href="#">
              <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
              <div class="middle">
                <img src="#" class="text" >
              </div>
              <div class="time">
                <time>3:45</time>
              </div>
              <div class="videoText">
                <p>4MINUTE -(Crazy)' (Choreography Practice Video)</p>
              </div>
            </a>
          </div>
        </div>
        <div class="clear">

        </div>
        <div class="videoSeries">
          <!--<div class="row">-->
          <!--burada daha önce izlenen videolar serisi olacak. bu videolar küçük boyutta olacak-->
          <? for ($i=0; $i <6 ; $i++) : ?>
            <div class=" col-sm-6 col-md-4 col-lg-2 videoSeriesInside container">
              <a href="#">
                <img src="/Video-Life-v2/bootstrap-sass/assets/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
                <div class="time">
                  <time>2:45</time>
                </div>
                <div class="videoText">
                  <p>Ariana Grande - Side To Side ft. Nicki Minaj</p>
                </div>
              </a>
            </div>
          <? endfor; ?>
          <!--                col-sm-6 col-md-4 col-lg-2-->
        </div>
      </div> <!-- .media-->
    </div>
  </div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <!--<div class="clearfix visible-xs-block">

</div>-->
</div>
</body>
<? include "footer.php";?>
