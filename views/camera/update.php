<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Camera */

$this->title = '修改摄像头: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '摄像头', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="camera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
