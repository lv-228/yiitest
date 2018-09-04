<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student_groupe`.
 */
class m180904_100436_create_student_groupe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('student_groupe', [
            'id' => $this->primaryKey(),
            'no' => $this->integer('3')->notNull(),
            'course' => $this->integer('1')->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('student_groupe');
    }
}
