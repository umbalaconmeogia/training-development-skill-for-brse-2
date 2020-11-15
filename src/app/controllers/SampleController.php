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

        // $sampleModelArray = Yii::$app->request->post('SampleModel');
        // print_r($sampleModelArray);
        // echo "<br /><br />";
        // $model->attributes = $sampleModelArray;
        // print_r($model->attributes);die;

        if ($model->load(Yii::$app->request->post())) { // Has form value suport via POST method.
            if ($model->validate()) {
                return $this->render('confirm', [
                    'model' => $model,
                ]);
            }
        }

        return $this->render('input', [
            'model' => $model,
        ]);
    }

    public function actionRegister()
    {
        $model = new SampleModel();

        $model->attributes = Yii::$app->request->post('SampleModel');

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionLog()
    {
        Yii::debug('This is debug log', __METHOD__);
        Yii::trace('This is trace log', __METHOD__);
        Yii::info('This is info log', __METHOD__);
        Yii::warning('This is warning log', __METHOD__);
        Yii::error('This is error log', __METHOD__);

        return $this->renderContent("Log is witten to file at " . __METHOD__);
    }

    public function actionCreateBigLog()
    {
        for ($i = 1; $i <= 100000; $i++) {
            Yii::debug("Log $i Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        }
        return $this->renderContent("Log is witten to file");
    }
}