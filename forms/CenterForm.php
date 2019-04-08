<?php

namespace app\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CenterForm extends Model
{
    public $city;
    public $count;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           [['city', 'count'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'city' => 'Склад',
			'count' => 'Количество',
        ];
    }


}
