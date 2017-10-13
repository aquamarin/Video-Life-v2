<?
require_once "header.php";

?>
<div class="content">
    <? require_once "top_menu.php"; ?>
    <div class="row">
        <? require_once "left-dropdown.php"; ?>
        <div id="videoPage">
            <video class="col-sm-12 col-lg-6" controls>
                <source src="/Video-Life-v2/videos/BLACKPINK-(BOOMBAYAH) M_V.mp4" type="video/mp4">
            </video>
        </div>
        <? for ($i=0; $i<4; $i++): ?>
        <div class="col-sm-12 col-lg-2" >
            <div id="videoList">
                <div>
                    <a href="">
                        <img src="/Video-Life-v2/images/TWICE(트와이스) _TT_ ♥ dance cover.jpg" title="TWICE-TT" class="img-thumbnail" id="thumbnail">
                    </a>
                </div>
                <div class="media-body">
                    <p>TWICE(트와이스) _TT_ ♥ dance cover</p>
                </div>


            </div>
        </div>
        <?endfor;?>
    </div>


</div>
