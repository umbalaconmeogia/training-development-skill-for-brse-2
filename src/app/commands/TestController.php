<?php
namespace app\commands;

use app\models\Project;
use app\models\Term;
use yii\console\Controller;

class TestController extends Controller
{
    private $projects = [
        [
            'name' => 'ECサイト',
            'remarks' => 'Amazon社のECサイト構築',
            'terms' => [
                [
                    'language' => 'ja',
                    'vocabulary' => '決済',
                    'description' => 'お金を支払う',
                    'type' => 1,
                ],
                [
                    'language' => 'vi',
                    'vocabulary' => 'Quyết toán',
                    'description' => 'Trả tiền',
                    'type' => 1,
                    'parent' => '決済',
                ],
                [
                    'language' => 'ja',
                    'vocabulary' => '出品',
                    'description' => '品物を売るために店舗に載せる',
                    'type' => 1,
                ],
                [
                    'language' => 'vi',
                    'vocabulary' => 'Đăng ký sản phẩm',
                    'description' => 'Đưa sản phẩm lên kệ hàng online',
                    'type' => 1,
                    'parent' => '出品',
                ],
            ],
        ],
        [
            'name' => 'PC管理',
            'remarks' => '会社のPC管理システム',
            'terms' => [
                [
                    'language' => 'ja',
                    'vocabulary' => '登録',
                    'description' => 'システムに情報を登録する',
                    'type' => 1,
                ],
                [
                    'language' => 'vi',
                    'vocabulary' => 'Đăng ký',
                    'description' => 'Đăng ký thông tin vào hệ thống',
                    'type' => 1,
                    'parent' => '登録',
                ],
                [
                    'language' => 'ja',
                    'vocabulary' => '貸出',
                    'description' => '人にPCを貸し出す。',
                    'type' => 1,
                ],
                [
                    'language' => 'vi',
                    'vocabulary' => 'Cho mượn',
                    'description' => 'Cho nhân viên mượn máy tính',
                    'type' => 1,
                    'parent' => '貸出',
                ],
            ],

        ],
    ];

    /**
     * Generate project and term data.
     * Syntax:
     *   php yii test/generate-project-and-term
     */
    public function actionGenerateProjectAndTerm()
    {
        // With each $this->projects element, call register project.
        foreach ($this->projects as $projectArr) {
            $this->registerProjectAndTerms($projectArr);
        }
        echo "DONE\n";
    }

    private function registerProjectAndTerms($projectArr)
    {
        // Find and register project.
        $project = self::findOneCreateNew(Project::class, [
            'name' => $projectArr['name'],
            'remarks' => $projectArr['remarks'],
        ], TRUE);

        // Find and register project's terms.
        foreach ($projectArr['terms'] as $termArr) {
            $this->registerTerm($termArr, $project);
            // $term = self::findOneCreateNew(Term::class, [
            //     'project_id' => $project->id,
            //     'language' => $termArr
            // ], FALSE);
        }
    }

    private function registerTerm($termArr, $project)
    {
        $term = self::findOneCreateNew(Term::class, [
            'project_id' => $project->id,
            'language' => $termArr['language'],
            'vocabulary' => $termArr['vocabulary'],
            'description' => $termArr['description'],
        ], FALSE);
        $term->type = $termArr['type'];
        if (isset($termArr['parent'])) {
            $parent = self::findOneCreateNew(Term::class, [
                'project_id' => $project->id,
                'vocabulary' => $termArr['parent'],
            ], FALSE);
            if ($parent->id) {
                $term->parent_term_id = $parent->id;
            }
        }
        $term->save();
    }

    /**
     * Find an object with specified condition.
     * If not found in DB, then create new object.
     * @param string $className
     * @param array $condition
     * @param boolean $saveDb
     * @return ActiveRecord
     */
    public static function findOneCreateNew($className, $condition, $saveDb = FALSE)
    {
        $result = $className::findOne($condition);
        if (!$result) {
            $result = \Yii::createObject($className);
            \Yii::configure($result, $condition);
            if ($saveDb) {
                $result->save();
            }
        }
        return $result;
    }
}
