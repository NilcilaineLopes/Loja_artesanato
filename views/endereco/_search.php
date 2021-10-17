<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnderecoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="endereco-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'RUA') ?>

    <?= $form->field($model, 'BAIRRO') ?>

    <?= $form->field($model, 'NUMERO') ?>

    <?= $form->field($model, 'ESTADO') ?>

    <?php // echo $form->field($model, 'CIDADE') ?>

    <?php // echo $form->field($model, 'CEP') ?>

    <?php // echo $form->field($model, 'USUARIO_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
