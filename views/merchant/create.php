<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Merchant */

$this->title = '创建商户';
$this->params['breadcrumbs'][] = ['label' => '商户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
