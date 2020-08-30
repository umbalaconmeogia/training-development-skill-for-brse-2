<?php

use app\models\Term;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TermSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Terms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Term', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'projectName',
            'language',
            'vocabulary',
            'description:ntext',
            [
                'attribute' => 'type',
                'filter' => Term::typeOptionArr(),
                'value' => 'typeStr',
            ],
            'parentTermVocabulary',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
