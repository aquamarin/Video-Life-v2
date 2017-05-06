
<?
    require_once "header.php";

?>
<div class="content" style="margin-top: 5px;">
    <? require_once "top_menu.php"; ?>
    <div class="row">
        <? require_once "left-dropdown.php"; ?>

        <div class="col-xs-12 col-md-8 col-lg-10">
            <div class="media">
                <div class="col-sm-12 col-lg-5">
                    <!-- 4:3 görünüş oranı -->
<!--                    büyük videonun olduğu kısım-->
                    <a href="#" onMouseOver="picture_on('play','psd-play-button.jpg');" onMouseOut="picture_on('normal','BLACKPINK - '붐바야'(BOOMBAYAH) M_V.jpg');">
                    <img src="/Video-Life-v2/images/BLACKPINK - '붐바야'(BOOMBAYAH) M_V.jpg"  title="Blakpink-Boombayah" class="img-thumbnail" name="normal">
<!--                        <img src="/Video-Life-v2/images/psd-play-button.jpg" name="play">-->
                    </a>

                </div>
<!--                yan orta boy videoların kısmı-->
                <div class="FourVideo">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 3px;">
                    <img src="/Video-Life-v2/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="img-thumbnail">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 3px;">
                    <img src="/Video-Life-v2/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="img-thumbnail">
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/Video-Life-v2/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="img-thumbnail">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/Video-Life-v2/images/4MINUTE -(Crazy)' (Choreography Practice Video).jpg" title="4MINUTE -(Crazy)" class="img-thumbnail">
                </div>
            </div>
            </div>
            <div class="video-series" style="margin-top: 10px;">
                <!--<div class="row">-->
                <!--burada daha önce izlenen videolar serisi olacak. bu videolar küçük boyutta olacak-->
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#">

                        <img src="/Video-Life-v2/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">

                    <a href="#" >
                        <img src="/Video-Life-v2/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#" >
                        <img src="/Video-Life-v2/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#" >
                        <img src="/Video-Life-v2/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#" >
                        <img src="/Video-Life-v2/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#" >
                        <img src="/Video-Life-v2/images/Ariana Grande - Side To Side ft. Nicki Minaj.jpg" title="Ariana Grande - Side To Side" class="img-thumbnail">
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