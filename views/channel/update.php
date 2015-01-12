<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Channel */

$this->title = '修改频道: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '频道', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="channel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
