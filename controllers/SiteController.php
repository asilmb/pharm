<?php

namespace app\controllers;

use app\forms\CenterForm;
use app\forms\OwnForm;
use app\models\CenterModel;
use app\models\OwnModel;
use yii\base\Model;
use yii\web\Controller;

class SiteController extends Controller
{


	/**
	 * {@inheritdoc}
	 */
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex()
	{
		$centers = $this->generateModels(CenterModel::class, CenterForm::class);
		$owns = $this->generateModels(OwnModel::class, OwnForm::class);


		return $this->render('index', compact('centers', 'owns'));
	}

	private function generateModels($className, $classForm)
	{
		$forms = [];
		$centers = [];
		$centers = $className::find()->all();

		/** @var Model $model */
		foreach ($centers as $center) {
			$form = new $classForm();
			$form->setAttributes($center->toArray(), false);

			$forms[] = $form;
		}

		return $forms;
	}

}
