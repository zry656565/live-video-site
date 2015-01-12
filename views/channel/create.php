<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Channel */

$this->title = '创建频道';
$this->params['breadcrumbs'][] = ['label' => '频道', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="channel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
