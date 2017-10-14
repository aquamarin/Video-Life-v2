<?
require_once "header.php";
?>
<div class="content" style="margin-top: 5px;">
  <? require_once "top_menu.php"; ?>
  <? require_once "left-dropdown.php"; ?>
  <div class="col-lg-10">
    <p class="Text">Abone Olduğunuz Kanallarda Paylaşılan Videolar</p>
    <div class="thisWeek">
      <h3>Bu Hafta</h3>
      <div class="row">
        <? for ($i=0; $i <6 ; $i++) : ?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 videoFix">
            <a href="#">
              <img src="/Video-Life-v2/images/Chandelier - Sia _ Lia Kim Choreography.jpg" title="Sia _ Lia Kim Choreography" class="image img-thumbnail">
              <div class="time">
                <time>2:45</time>
              </div>
              <div class="videoText">
                <p>Chandelier - Sia _ Lia Kim Choreography</p>
              </div>
            </a>
          </div>
        <? endfor; ?>
      </div> <!-- ./row -->
    </div>   <!-- ./thisWeek -->
    <div class="thisMonth">
      <h3>Bu Ay</h3>
      <div class="row">
        <? for ($i=0; $i <6 ; $i++) : ?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 videoFix">
            <a href="#">
              <img src="/Video-Life-v2/images/Chandelier - Sia _ Lia Kim Choreography.jpg" title="Sia _ Lia Kim Choreography" class="image img-thumbnail">
              <div class="time">
                <time>2:45</time>
              </div>
              <div class="videoText">
                <p>Chandelier - Sia _ Lia Kim Choreography</p>
              </div>
            </a>
          </div>
        <? endfor;  ?>
      </div> <!-- ./row -->
    </div>   <!-- ./thisMouth -->
  </div>  <!-- col-lg-10 -->
</div>
