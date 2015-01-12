<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Camera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="camera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'ip')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Port')->textInput() ?>

    <?= $form->field($model, 'available')->checkbox() ?>

    <?= $form->field($model, 'Channel_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
