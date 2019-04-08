<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%own}}`.
 */
class m190408_082603_create_own_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%own}}', [
            'id' => $this->primaryKey(),
			'name' => $this->string(),
			'count' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%own}}');
    }
}
