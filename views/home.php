
<?
    require_once "views/header.php";
    require_once "init.php";
?>
<div class="content" style="margin-top: 5px;">
    <div class="row">
        <div class="col-xs-1">
            <div id="appbar-nav-menu">
                <!--glyphicon glyphicon-menu-hamburger-->
                <!--glyphicon glyphicon-home-->
                <!--glyphicon glyphicon-fire-->
                <!--glyphicon glyphicon-time-->
                <!--col-xs-12 col-sm-8 col-md-4 col-lg-2-->
                <div class="dropdown" style="background-color: #c4e3f3">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-user-o" aria-hidden="true" ></span>
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li> <a href="#" class="list-group-item active"><span class="fa fa-home" aria-hidden="true"> </span> Anasayfa</a></li>
                        <li><a href="#" class="list-group-item"><span class="fa fa-user-circle" aria-hidden="true"> </span> Kanalım</a></li>
                        <li><a href="#" class="list-group-item"><span class="fa fa-fire" aria-hidden="true">&nbsp;</span> Trendler</a></li>
                        <li><a href="#" class="list-group-item"><span class="fa fa-hourglass-end" aria-hidden="true"> </span> Geçmiş</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="col-xs-12 col-md-8 col-lg-10">
            <div class="media">
                <div class="col-sm-12 col-lg-4">
                    <!-- 4:3 görünüş oranı -->
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5ds4svrYcQ4"></iframe>
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
                <!--burada daha önce izlenen videolar serisi olacak-->
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
    <div class="clearfix visible-xs-block">

    </div>
</div>
</body>
<? include "views/footer.php";?>