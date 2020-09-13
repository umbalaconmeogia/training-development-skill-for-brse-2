<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="country-form">

    <?php ActiveForm::begin(); ?>

    <?= Html::label('Cookies key') ?>
    <?= Html::textInput('cookiesKey') ?>

    <?= Html::label('Cookies value') ?>
    <?= Html::textInput('cookiesValue') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?= $this->render('_displaySessionCookies') ?>
</div>
