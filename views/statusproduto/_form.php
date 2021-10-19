<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Statusproduto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statusproduto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
