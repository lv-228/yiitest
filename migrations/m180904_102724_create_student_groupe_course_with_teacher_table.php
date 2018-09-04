<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student_groupe_course_with_teacher`.
 */
class m180904_102724_create_student_groupe_course_with_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('student_groupe_course_with_teacher', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'teacher_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('student_groupe_course_with_teacher');
    }
}
