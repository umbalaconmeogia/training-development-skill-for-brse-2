<?php
namespace app\commands;

use app\models\Project;
use app\models\Term;
use yii\console\Controller;

class DemoQueryController extends Controller
{
    /**
     * php yii demo-query/index
     */
    public function actionIndex()
    {
        echo "Hello Query\n";
    }

    /**
     * php yii demo-query/find-one <id>
     */
    public function actionFindOne($id)
    {
        $project = Project::findOne($id);
        print_r($project);
    }

    /**
     * php yii demo-query/find-one-condition <name>
     */
    public function actionFindOneCondition($name)
    {
        $project = Project::findOne(['name' => $name]);
        print_r($project);
    }

    /**
     * php yii demo-query/find-all <projectId>
     */
    public function actionFindAll($projectId)
    {
        $terms = Term::findAll(['project_id' => $projectId]);
        print_r($terms);
    }

    /**
     * php yii demo-query/find
     */
    public function actionFind()
    {
        $terms = Term::find()->where(['project_id' => 20])->all();
        print_r($terms);

        $terms = Term::find()->where(['vocabulary' => '決済'])->all();
        print_r($terms);

        $project = Project::find()->where(['id' => [20, 21, 22]])->all();
        print_r($project);

        $project = Project::find()->where('id < :id', [':id' => 21])->all();
        print_r($project);

        $terms = Term::find()->where(['LIKE', 'vocabulary', 'ê'])->all();
        print_r($terms);
        /*
        https://www.yiiframework.com/doc/guide/2.0/en/db-query-builder#where
string format, e.g., 'status=1'
hash format, e.g. ['status' => 1, 'type' => 2]
operator format, e.g. ['like', 'name', 'test']
object format, e.g. new LikeCondition('name', 'LIKE', 'test')
         */
    }

    /**
     * php yii demo-query/order
     */
    public function actionOrder()
    {
        $project = Project::find()->where('id > :id', [':id' => 19])->orderBy('id DESC')->all();
        print_r($project);
    }
}