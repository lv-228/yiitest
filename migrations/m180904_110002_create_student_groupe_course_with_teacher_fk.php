<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student_groupe_course_with_teacher`.
 * Has foreign keys to the tables:
 *
 * - `group`
 * - `teacher`
 */
class m180904_110002_create_student_groupe_course_with_teacher_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        // creates index for column `group_id`
        $this->createIndex(
            'idx-student_groupe_course_with_teacher-group_id',
            'student_groupe_course_with_teacher',
            'group_id'
        );

        // add foreign key for table `group`
        $this->addForeignKey(
            'fk-student_groupe_course_with_teacher-group_id',
            'student_groupe_course_with_teacher',
            'group_id',
            'student_groupe',
            'id',
            'CASCADE'
        );

        // creates index for column `teacher_id`
        $this->createIndex(
            'idx-student_groupe_course_with_teacher-teacher_id',
            'student_groupe_course_with_teacher',
            'teacher_id'
        );

        // add foreign key for table `teacher`
        $this->addForeignKey(
            'fk-student_groupe_course_with_teacher-teacher_id',
            'student_groupe_course_with_teacher',
            'teacher_id',
            'teacher',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `group`
        $this->dropForeignKey(
            'fk-student_groupe_course_with_teacher-group_id',
            'student_groupe_course_with_teacher'
        );

        // drops index for column `group_id`
        $this->dropIndex(
            'idx-student_groupe_course_with_teacher-group_id',
            'student_groupe_course_with_teacher'
        );

        // drops foreign key for table `teacher`
        $this->dropForeignKey(
            'fk-student_groupe_course_with_teacher-teacher_id',
            'student_groupe_course_with_teacher'
        );

        // drops index for column `teacher_id`
        $this->dropIndex(
            'idx-student_groupe_course_with_teacher-teacher_id',
            'student_groupe_course_with_teacher'
        );

    }
}
