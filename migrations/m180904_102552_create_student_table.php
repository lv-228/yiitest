<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 */
class m180904_102552_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(150)->notNull()->comment('ФИО'),
            'student_groupe_id' => $this->integer()->comment('Группа'),
            'photo' => $this->string()->comment('Фото')->defaultValue('Нет'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('student');
    }
}
