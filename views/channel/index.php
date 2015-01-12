<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '频道';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="channel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建频道', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'image',
            'available:boolean',
            // 'Merchant_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
