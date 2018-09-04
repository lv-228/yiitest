<?php

use yii\db\Migration;

/**
 * Handles the creation of table `teacher`.
 * Has foreign keys to the tables:
 *
 * - `subject`
 */
class m180904_110001_create_teacher_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        // creates index for column `subject_id`
        $this->createIndex(
            'idx-teacher-subject_id',
            'teacher',
            'subject_id'
        );

        // add foreign key for table `subject`
        $this->addForeignKey(
            'fk-teacher-subject_id',
            'teacher',
            'subject_id',
            'subject',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `subject`
        $this->dropForeignKey(
            'fk-teacher-subject_id',
            'teacher'
        );

        // drops index for column `subject_id`
        $this->dropIndex(
            'idx-teacher-subject_id',
            'teacher'
        );

    }
}
