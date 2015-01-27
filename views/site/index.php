<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>新世界视频直播系统</h1>

        <p class="lead">欢迎来到新世界视频直播系统的缤纷世界，尽情享受吧！</p>

        <?php //if (Yii::$app->user->isGuest) { ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <div id="banner" style="background-image: url(<?= Url::to("@web/images/video.jpg", true) ?>);
                                        background-size: cover;
                                        width: 100%;">
                </div>
                <script>
                    var banner = document.getElementById('banner');
                    var resize = function() {
                        banner.style.height = window.innerHeight - 368 + 'px';
                    };
                    window.onresize = resize;
                    resize();
                </script>
            </div>
        </div>
    </div>
</div>
