<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subject`.
 */
class m180904_103632_create_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subject', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255')->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subject');
    }
}
