
<?
    require_once "header.php";

?>
<div class="content" style="margin-top: 5px;">
    <? require_once "top_menu.php"; ?>
    <div class="row">
        <? require_once "left-dropdown.php"; ?>

        <div class="col-xs-12 col-md-8 col-lg-10">
            <div class="media">
                <div class="col-sm-12 col-lg-4">
                    <!-- 4:3 görünüş oranı -->
<!--                    büyük videonun olduğu kısım-->
                    <div class="embed-responsive embed-responsive-4by3">
<!--                        "C:\Users\Ebru\Downloads\Video\videolar\twenty one pilots - Heathens.ogg" -->
                        <video
                          src="C:\Users\Ebru\Downloads\Video\videolar\twenty one pilots - Heathens.mp4" >
                        </video>
                        <!--<div class="row">
                            <div class="col-sm-6">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DaVA6sgOpws"></iframe>
                            </div>
                            <div class="col-sm-6">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DaVA6sgOpws"></iframe>
                            </div>
                        </div>-->
                    </div>
                </div>
<!--                yan orta boy videoların kısmı-->
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="video-thumb">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SqQvZ_VUtg8"></iframe>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="video-thumb">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SqQvZ_VUtg8"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-lg-3">
                        <div class="video-thumb">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SqQvZ_VUtg8"></iframe>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-3">
                        <div class="video-thumb">
                            <iframe class="embed-responsive-item" src="https://img.youtube.com/vi/SqQvZ_VUtg8/mqdefault.jpg "></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-series">
                <!--<div class="row">-->
                <!--burada daha önce izlenen videolar serisi olacak. bu videolar küçük boyutta olacak-->
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#">
                        <img src="https://img.youtube.com/vi/SXiSVQZLje8/default.jpg ">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">

                    <a href="#" >
                        <img src="https://img.youtube.com/vi/SXiSVQZLje8/default.jpg ">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#" >
                        <img src="https://img.youtube.com/vi/SXiSVQZLje8/default.jpg ">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#" >
                        <img src="https://img.youtube.com/vi/SXiSVQZLje8/default.jpg ">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="#" >
                        <img src="https://img.youtube.com/vi/SXiSVQZLje8/default.jpg ">
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