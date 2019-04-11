<?php

namespace app\models;

/**
 * This is the model class for table "center".
 *
 * @property int $id
 * @property string $city
 * @property int $count
 */
class CenterModel extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'center';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['count'], 'integer'],
			[['city'], 'string', 'max' => 255],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'city' => 'City',
			'count' => 'Count',
		];
	}

	public function upCount()
	{
		$this->count = $this->count + 1;
		$this->save();
	}

	public function downCount()
	{
		$this->count = $this->count - 1;
		$this->save();
	}

	public function updateCount($quantity)
	{
		$this->count = $quantity ;
		$this->save();
	}
}
