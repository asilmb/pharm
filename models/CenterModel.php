<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\db\Query;

/**
 * ContactForm is the model behind the contact form.
 */
class CenterModel  extends ActiveRecord
{
    public $city;
    public $count;


	/**
	 * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
	 */
	public static function tableName()
	{
		return '{{center}}';
	}


}
