<?php

namespace app\controllers;

use Yii;
use app\models\Project;
use app\models\ProjectSearch;
use yii\web\NotFoundHttpException;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends BaseUserController
{
    /**
     * Lists all Project models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Project model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Project();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Project::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionQueryAll()
    {
        $sql = 'SELECT * FROM project;';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($result as $projectArr) {
            echo 'Project name: ' . $projectArr['name'] . ', remarks: ' . $projectArr['remarks'] . '<br />';
        };
        die;
    }

    public function actionFindAll()
    {
        $projects = Project::find()->all();
        foreach ($projects as $project) {
            echo "Project name: {$project->name}, remarks: {$project->remarks}<br />";
        }
        die;
    }

    public function actionTerms($id)
    {
        $project = Project::findOne($id);
        foreach ($project->terms as $term) {
            echo "Language: {$term->language}, vocabulary: {$term->vocabulary}, description: {$term->description}, type: {$term->type}<br />";
        }
        die;
    }
}
