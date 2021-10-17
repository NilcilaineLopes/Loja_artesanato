<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Endereco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="endereco-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RUA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BAIRRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMERO')->textInput() ?>

    <?= $form->field($model, 'ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CEP')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
