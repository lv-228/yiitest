<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 * Has foreign keys to the tables:
 *
 * - `student_groupe`
 */
class m180904_110000_create_student_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // creates index for column `student_groupe_id`
        $this->createIndex(
            'idx-student-student_groupe_id',
            'student',
            'student_groupe_id'
        );

        // add foreign key for table `student_groupe`
        $this->addForeignKey(
            'fk-student-student_groupe_id',
            'student',
            'student_groupe_id',
            'student_groupe',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `student_groupe`
        $this->dropForeignKey(
            'fk-student-student_groupe_id',
            'student'
        );

        // drops index for column `student_groupe_id`
        $this->dropIndex(
            'idx-student-student_groupe_id',
            'student'
        );

    }
}
