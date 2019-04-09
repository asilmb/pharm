<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
 ?>
<div class="site-index">

    <div class="body-content">
        <?php
		$form = ActiveForm::begin() ?>
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
				<?= Html::button('Вход', ['class' => 'btn btn-primary', 'onclick' => 'centerUp()']) ?>
            </div>
        </div>
		<?php ActiveForm::end() ?>

    </div>
</div>

<?php




$this->registerJsFile('/js/center.js');
?>