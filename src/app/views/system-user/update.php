<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SystemUser */

$this->title = 'Update System User: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'System Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="system-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
