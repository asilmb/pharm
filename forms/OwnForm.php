<?php

namespace app\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class OwnForm extends Model
{
    public $name;
    public $count;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           [['name', 'count'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Владелец',
			'count' => 'Количество',
        ];
    }

}
