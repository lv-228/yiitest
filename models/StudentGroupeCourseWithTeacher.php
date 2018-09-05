<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%student_groupe_course_with_teacher}}".
 *
 * @property int $id
 * @property int $group_id
 * @property int $teacher_id
 *
 * @property StudentGroupe $group
 * @property Teacher $teacher
 */
class StudentGroupeCourseWithTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%student_groupe_course_with_teacher}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'teacher_id'], 'integer'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudentGroupe::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Группа',
            'teacher_id' => 'Учитель',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(StudentGroupe::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }
}
