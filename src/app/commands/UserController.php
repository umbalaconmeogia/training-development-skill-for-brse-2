<?php
namespace app\commands;

use app\models\SystemUser;
use Exception;
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

    /**
     * Systax
     *   php yii user/create-user <username> <email> <password>
     * Example
     *   php yii user/create-user test test@example.com testpassword
     */
    public function actionCreateUser($username, $email, $password = NULL)
    {
        Yii::$app->db->transaction(function() use ($username, $email, $password) {
            $user = SystemUser::findByUsername($username);
            if (!$user) {
                $user = new SystemUser(['username' => $username]);
                $user->generateAuthKey();
            }
            $user->email = $email;
            if (!$password) {
                $password = Yii::$app->security->generateRandomString(12);
            }
            $user->password = $password;
            if (!$user->save()) {
                $message = "Error while create user.\n";
                print_r($user->getErrors());
                throw new Exception("$message");
            }
        });

        // $transaction = Yii::$app->db->beginTransaction();
        // try {
        //     // Do something
        //     $transaction->commit();
        // } catch ($e) {
        //     $transaction->rollBack();
        //     throw $e;
        // }
    }
}
