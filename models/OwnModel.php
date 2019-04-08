<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class OwnModel extends ActiveRecord
{
    public $name;
    public $count;

	/**
	 * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
	 */
	public static function tableName()
	{
		return '{{own}}';
	}

}
