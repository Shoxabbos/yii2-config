<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel shoxabbos\config\ConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Configs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">

    <h1><?= Html::encode($this->title) ?> <span class="pull-right"><?= Html::a('Create Config', ['create'], ['class' => 'btn btn-success']) ?></span> </h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'key',
            'value',
            'big_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


<style>
    .config-index {
        background: #fff;
        padding: 20px;
        border-radius: 20px;
    }
</style>