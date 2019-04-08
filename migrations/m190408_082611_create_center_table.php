<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%center}}`.
 */
class m190408_082611_create_center_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%center}}', [
            'id' => $this->primaryKey(),
			'city' => $this->string(),
			'count' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%center}}');
    }
}
