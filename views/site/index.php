<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>
<div class="site-index">

    <div class="body-content">
		<?php
		foreach ($centers as $centerModel):
			$form = ActiveForm::begin(); ?>
            <div class="col-md-12">
                <div class="col-md-4">
					<?= $form->field($centerModel, 'id', [
						'options' => [
							'style' => 'float:left'
						]])->hiddenInput()->label(""); ?>
					<?= $form->field($centerModel, 'count')->textInput(); ?>
                </div>
                <div class="col-md-8" style="margin-top: 25px">
                    <div class="form-group col-md-1">
						<?= Html::button('+1', ['class' => 'btn btn-primary', 'onclick' => $form->id . 'centerUp()', ' style' => '']) ?>
                    </div>
                    <div class="form-group col-md-1">
						<?= Html::button('-1', ['class' => 'btn btn-primary', 'onclick' => $form->id . 'centerDown()', ' style' => '']) ?>
                    </div>
                    <div class="form-group col-md-2">
						<?= Html::button('update', ['class' => 'btn btn-primary', 'onclick' => $form->id . 'update()', ' style' => '']) ?>
                    </div>
                </div>
            </div>
		<?php
		ActiveForm::end(); ?>
            <script>
                function <?=$form->id?>centerUp() {
                    var $data = $('#<?=$form->id?>').serialize();
                    $.ajax({
                        url: '/center/up',
                        type: 'post',
                        data: $data,
                        dataType: "json",
                        success: function (result) {
                            $("input[name=token]").val(result.token);
                            $('#<?=$form->id?> #centerform-count').val(result.count);
                        },
                        error: function (result) {
                            alert("problem");
                        }
                    });
                    return false;
                };

                function <?=$form->id?>centerDown() {
                    var $data = $('#<?=$form->id?>').serialize();
                    $.ajax({
                        url: '/center/down',
                        type: 'post',
                        data: $data,
                        dataType: "json",
                        success: function (result) {
                            $("input[name=token]").val(result.token);
                            $('#<?=$form->id?> #centerform-count').val(result.count);
                        },
                        error: function (result) {
                            alert("problem");
                        }
                    });
                    return false;
                };

                function <?=$form->id?>update() {
                    var $data = $('#<?=$form->id?>').serialize();
                    $.ajax({
                        url: '/center/count-update',
                        type: 'post',
                        data: $data,
                        dataType: "json",
                        success: function (result) {
                            $("input[name=token]").val(result.token);
                            $('#<?=$form->id?> #centerform-count').val(result.count);
                        },
                        error: function (result) {
                            alert("problem");
                        }
                    });
                    return false;
                };
            </script>
		<?php endforeach; ?>

    </div>
</div>

