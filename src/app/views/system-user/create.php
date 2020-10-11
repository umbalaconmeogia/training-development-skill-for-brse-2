<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SystemUser */

$this->title = 'Create System User';
$this->params['breadcrumbs'][] = ['label' => 'System Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
