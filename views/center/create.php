<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CenterModel */

$this->title = 'Create Center Model';
$this->params['breadcrumbs'][] = ['label' => 'Center Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
