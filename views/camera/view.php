<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Camera */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '摄像头', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定真的要删除这条纪录吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'description',
            'ip',
            'port',
            'available:boolean',
            'channel_id',
        ],
    ]) ?>

</div>
