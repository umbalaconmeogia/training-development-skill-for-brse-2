<?php

namespace app\controllers;

use app\models\SampleModel;
use Yii;
use yii\web\Controller;

class SampleController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionInput()
    {
        $model = new SampleModel();

        if ($model->load(Yii::$app->request->post())) { // Has form value suport via POST method.
            if ($model->validate()) {
                return $this->render('inputConfirm', [
                    'model' => $model,
                ]);
            }
        }
        return $this->render('input', [
            'model' => $model,
        ]);
    }
}