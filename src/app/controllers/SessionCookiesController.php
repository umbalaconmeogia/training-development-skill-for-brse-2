<?php

namespace app\controllers;

use app\models\SampleModel;
use Yii;
use yii\web\Controller;

class SessionCookiesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTestSession()
    {
        $key = Yii::$app->request->post('sessionKey');
        $content = Yii::$app->request->post('sessionContent');
        if ($key) {
            Yii::$app->session[$key] = $content;
        }

        return $this->render('testSession');
    }

    public function actionTestCookies()
    {
        $key = Yii::$app->request->post('cookiesKey');
        $value = Yii::$app->request->post('cookiesValue');
        if ($key) {
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => $key,
                'value' => $value,
            ]));
        }

        return $this->render('testCookies');
    }
}