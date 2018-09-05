<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%student}}".
 *
 * @property int $id
 * @property string $fio ФИО
 * @property int $student_groupe_id Группа
 * @property string $photo Фото
 *
 * @property StudentGroupe $studentGroupe
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%student}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['student_groupe_id'], 'integer'],
            [['fio'], 'string', 'max' => 150],
            [['photo'], 'string', 'max' => 255],
            [['student_groupe_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudentGroupe::className(), 'targetAttribute' => ['student_groupe_id' => 'id']],
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
            'student_groupe_id' => 'Группа',
            'photo' => 'Фото',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentGroupe()
    {
        return $this->hasOne(StudentGroupe::className(), ['id' => 'student_groupe_id']);
    }
}
