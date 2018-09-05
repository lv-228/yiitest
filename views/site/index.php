<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--     <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div> -->

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Студенты</h2>

                <p><a class="btn btn-default" href="<?= yii\helpers\Url::toRoute(['student/index']) ?>">Перейти &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Группы</h2>

                <p><a class="btn btn-default" href="<?= yii\helpers\Url::toRoute(['student-groupe/index']) ?>">Перейти &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Учителя</h2>

                <p><a class="btn btn-default" href="<?= yii\helpers\Url::toRoute(['teacher/index']) ?>">Перейти &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Предметы</h2>

                <p><a class="btn btn-default" href="<?= yii\helpers\Url::toRoute(['subject/index']) ?>">Перейти &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Группы-Кураторы</h2>

                <p><a class="btn btn-default" href="<?= yii\helpers\Url::toRoute(['student-groupe-course-with-teacher/index']) ?>">Перейти &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
