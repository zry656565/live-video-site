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

        <?php if (Yii::$app->user->isGuest) { ?>
            <p><a class="btn btn-lg btn-success" href="<?= Url::to(['login']) ?>">现在登陆 &raquo;</a></p>
        <?php }
        else { ?>
            <p>欢迎，<?= Yii::$app->user->identity->username ?></p>
        <?php } ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <?= Html::img(Url::to("@web/images/video.jpg", true),
                    ['alt' => '视频直播演示图', 'style' => 'width:100%'])?>
            </div>
        </div>

    </div>
</div>
