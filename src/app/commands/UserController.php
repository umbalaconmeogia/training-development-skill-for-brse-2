<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class UserController extends Controller
{
    /**
     * Syntax
     *   php yii user/password-hash <password>
     */
    public function actionPasswordHash($password)
    {
        $passwordHash = Yii::$app->security->generatePasswordHash($password);
        echo "$passwordHash\nDONE.\n";
    }
}
