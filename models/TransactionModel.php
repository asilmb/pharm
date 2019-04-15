<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property int $count
 * @property int $type
 * @property int $from_id
 * @property int $to_id
 * @property string $updated_at
 */
class TransactionModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count', 'type', 'from_id', 'to_id'], 'integer'],
            [['to_id'], 'required'],
            [['updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'count' => 'Count',
            'type' => 'Type',
            'from_id' => 'From ID',
            'to_id' => 'To ID',
            'updated_at' => 'Updated At',
        ];
    }
}
