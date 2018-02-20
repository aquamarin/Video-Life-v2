
<?
require_once "headerLogin.php";

?>
<div class="content" style="margin-top: 5px;">
  <!-- top_menu.php buradaydı -->
  <div class="row">

    <? require_once "left-dropdown.php"; ?>

    <div class="col-xs-12 col-md-8 col-lg-10">
      <div class="media" >
        <div class="col-sm-12 col-md-12  col-lg-5 container">
          <!-- 4:3 görünüş oranı -->
          <!--                    büyük videonun olduğu kısım onMouseOver="picture_on('play','psd-play-button.jpg');" onMouseOut="picture_on('normal','BLACKPINK - '붐바야'(BOOMBAYAH) M_V.jpg');"-->
          <a href="videoPage.php"  >
            <img  src="/Video-Life-v2/bootstrap-sass/assets/images/BLACKPINK(BOOMBAYAH) M_V.jpg "  title="Blakpink-Boombayah" class=" image img-thumbnail" id="normal">
            <div class="middle">
              <img src="#" class="text" >
            </div>
            <!--                        <img src="#" name="play">-->
            <!--                        onmouseover="picture_on()" onmouseout="picture_off()"-->
          </a>
        </div> <!-- .col-sm-12 col-md-12  col-lg-5 container-->
        <!--                yan orta boy videoların kısmı-->
        <div class="FourVideo col-sm-12 col-lg-6">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
            <div class="middle">
              <img src="#" class="text" >
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
            <div class="middle">
              <img src="#" class="text" >
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
            <div class="middle">
              <img src="#" class="text" >
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container"  class= "mainFour" style="margin-bottom: 3px;">
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="image img-thumbnail">
            <div class="middle">
              <img src="#" class="text" >
            </div>
          </div>
        </div>
      </div> <!-- .media-->
      <div class="video-series" style="margin-top: 10px;">
        <!--<div class="row">-->
        <!--burada daha önce izlenen videolar serisi olacak. bu videolar küçük boyutta olacak-->
        <div class=" col-sm-6 col-md-4 col-lg-2">
          <a href="#">

            <img src="/Video-Life-v2/bootstrap-sass/assets/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
          </a>
        </div>
        <!--                col-sm-6 col-md-4 col-lg-2-->
        <div class=" col-sm-6 col-md-4 col-lg-2">

          <a href="#" >
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
          </a>
        </div>
        <div class=" col-sm-6 col-md-4 col-lg-2">
          <a href="#" >
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
          </a>
        </div>
        <div class=" col-sm-6 col-md-4 col-lg-2">
          <a href="#" >
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
          <a href="#" >
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
          <a href="#" >
            <img src="/Video-Life-v2/bootstrap-sass/assets/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
          </a>
        </div>
        <!--</div>-->
      </div>
    </div>
  </div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <!--<div class="clearfix visible-xs-block">

</div>-->
</div>
</body>
<? include "footer.php";?>
