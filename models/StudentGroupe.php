<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%student_groupe}}".
 *
 * @property int $id
 * @property int $no
 * @property int $course
 *
 * @property Student[] $students
 * @property StudentGroupeCourseWithTeacher[] $studentGroupeCourseWithTeachers
 */
class StudentGroupe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%student_groupe}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no', 'course'], 'required'],
            [['no', 'course'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no' => 'Номер группы',
            'course' => 'Курс',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['student_groupe_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentGroupeCourseWithTeachers()
    {
        return $this->hasMany(StudentGroupeCourseWithTeacher::className(), ['group_id' => 'id']);
    }
}
