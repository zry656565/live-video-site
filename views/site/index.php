<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

use yii\helpers\Url;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>新世界视频直播系统</h1>

        <p class="lead">欢迎来到新世界视频直播系统的缤纷世界，敬请享受吧！</p>

        <?php if (Yii::$app->user->isGuest) { ?>
            <p><a class="btn btn-lg btn-success" href="<?= Url::to(['login']) ?>">现在登陆 &raquo;</a></p>
        <?php }
        else { ?>
            <p><a class="btn btn-lg btn-success" href="">欢迎，<?= Yii::$app->user->identity->username ?></a></p>
        <?php } ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>商家</h2>

                <p>提供最高质量的视频直播服务</p>
                <ul>
                    <li>频道管理</li>
                    <li>摄像头管理</li>
                </ul>
                <p><a class="btn btn-default" href="">了解更多 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>顾客</h2>

                <p>享受最高质量的视频直播服务</p>
                <ul>
                    <li>查看多路视频</li>
                    <li>高清视频</li>
                </ul>

                <p><a class="btn btn-default" href="">了解更多 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>管理员</h2>

                <ul>
                    <li>管理商家</li>
                    <li>管理频道</li>
                    <li>管理摄像头</li>
                </ul>

                <p><a class="btn btn-default" href="">了解更多 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
