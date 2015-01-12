<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Merchant */

$this->title = '修改商户信息: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '商户', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="merchant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
