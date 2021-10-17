<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vendas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'QTD')->textInput() ?>

    <?= $form->field($model, 'DATA_VENDA')->textInput() ?>

    <?= $form->field($model, 'VALOR')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
