<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%teacher}}".
 *
 * @property int $id
 * @property string $fio
 * @property int $subject_id
 *
 * @property StudentGroupeCourseWithTeacher[] $studentGroupeCourseWithTeachers
 * @property Subject $subject
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teacher}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['subject_id'], 'integer'],
            [['fio'], 'string', 'max' => 150],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'subject_id' => 'Предмет',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentGroupeCourseWithTeachers()
    {
        return $this->hasMany(StudentGroupeCourseWithTeacher::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }
}
