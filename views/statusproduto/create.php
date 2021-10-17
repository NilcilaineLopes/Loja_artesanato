<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Statusproduto */

$this->title = 'Create Statusproduto';
$this->params['breadcrumbs'][] = ['label' => 'Statusprodutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statusproduto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
