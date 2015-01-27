<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-9">
                <object id="MyActiveX" width="720" height="406" classid="clsid:95452421-C307-4060-9581-84C3F6274D55" type="application/x-itst-activex">
                    <param name="_Version" value="65536">
                    <param name="_ExtentX" value="4657">
                    <param name="_ExtentY" value="4075">
                    <param name="_StockProps" value="0">
                    <param name="serverBalanceIP" value="116.228.186.78">
                    <param name="serverBalancePort" value="45000">
                </object>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnLeft()">向左</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnRight()">向右</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnUp()">向上</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnTurnDown()">向下</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnZoomIn()">缩小</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnZoomOut()">放大</button>
                <button type="button" class="btn btn-default" onclick="MyActiveX.OnVideoStart()">开始</button>
<!--                <button type="button" class="btn btn-default" onclick="MyActiveX.OnChannelChange(2.0,1.0)">频道 2,1摄像头</button>-->
<!--                <button type="button" class="btn btn-default" onclick="MyActiveX.OnChannelChange(2.0,2.0)">频道 2,2摄像头</button>-->
<!--                <button type="button" class="btn btn-default" onclick="MyActiveX.OnChannelChange(1.0,1.0)">频道 1,1摄像头</button>-->
            </div>
        </div>
    </div>
</div>
<script>
window.onbeforeunload = function(){
    MyActiveX.OnWindowClose();
};
</script>
