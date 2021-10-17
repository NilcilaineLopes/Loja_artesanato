<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StatusprodutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Statusprodutos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statusproduto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Statusproduto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'STATUS',
            'PRODUTO_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
