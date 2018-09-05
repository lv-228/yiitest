<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGroupe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-groupe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no')->textInput() ?>

    <?= $form->field($model, 'course')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
