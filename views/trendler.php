<? require_once "header.php";?>
<div class="container" style="margin: auto">
    <? require_once "left-dropdown.php"?>
    <div class="col-xs-12 col-md-4 col-lg-5">
        <? for ($i=0; $i<8; $i++): ?>
            <div class="media" >
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="https://img.youtube.com/vi/SqQvZ_VUtg8/default.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Middle aligned media</h4>
                    ...
                </div>
        </div>
        <?endfor;?>
        <div class="col-xs-12 col-md-4 col-lg-5">
            <? for ($i=0; $i<8; $i++): ?>
                <div class="media" >
                    <div class="media-left media-middle">
                        <a href="#">
                            <img class="media-object" src="https://img.youtube.com/vi/SqQvZ_VUtg8/default.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Middle aligned media</h4>
                        ...
                    </div>
                </div>
            <?endfor;?>
        </div>
    </div>
</div>