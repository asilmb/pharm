<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CenterModel */

$this->title = 'Update Center Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Center Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="center-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
