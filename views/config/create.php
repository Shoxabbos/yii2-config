<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model shoxabbos\config\Config */

$this->title = 'Create Config';
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>


<style>
    .config-create {
        background: #fff;
        padding: 20px;
        border-radius: 20px;
    }
</style>