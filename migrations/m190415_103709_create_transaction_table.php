<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m190415_103709_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
			'count' => $this->integer(),
			'type' => $this->integer(),
			'from_id' => $this->integer(),
			'to_id' => $this->integer()->notNull(),
			'updated_at' => 'timestamp on update current_timestamp',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction}}');
    }
}
