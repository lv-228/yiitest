<?php

use yii\db\Migration;

/**
 * Handles the creation of table `teacher`.
 */
class m180904_102640_create_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('teacher', [
            'id' => $this->primaryKey(),
            'fio' => $this->string('150')->notNull(),
            'subject_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('teacher');
    }
}
