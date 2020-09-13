<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="country-form">

    <?php ActiveForm::begin(); ?>

    <?= Html::label('Session key') ?>
    <?= Html::textInput('sessionKey') ?>

    <?= Html::label('Session content') ?>
    <?= Html::textInput('sessionContent') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?= $this->render('_displaySessionCookies') ?>
</div>
