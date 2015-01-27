<?php
/* @var $this yii\web\View */
$this->title = '观看直播';

$this->registerJsFile(Yii::getAlias('@web') . '/js/video_show.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-9">
                <div id="video">
                    <object id="MyActiveX" width="720" height="406" classid="clsid:95452421-C307-4060-9581-84C3F6274D55" type="application/x-itst-activex">
                        <param name="_version" value="65536">
                        <param name="_ExtentX" value="4657">
                        <param name="_ExtentY" value="4075">
                        <param name="_StockProps" value="0">
                        <param name="serverBalanceIP" value="116.228.186.78">
                        <param name="serverBalancePort" value="45000">
                    </object>
                </div>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnLeft()">←</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnRight()">→</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnUp()">↑</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnDown()">↓</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnZoomOut()">放大</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnZoomIn()">缩小</button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnChannelChange(2.0,1.0)">频道 2,1摄像头</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnChannelChange(2.0,2.0)">频道 2,2摄像头</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnChannelChange(1.0,1.0)">频道 1,1摄像头</button>
            </div>
        </div>
    </div>
</div>
