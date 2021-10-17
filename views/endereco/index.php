<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EnderecoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enderecos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="endereco-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Endereco', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'RUA',
            'BAIRRO',
            'NUMERO',
            'ESTADO',
            //'CIDADE',
            //'CEP',
            //'USUARIO_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
