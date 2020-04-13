<?php

namespace app\controllers;

use app\models\UserTable;
use app\models\UserTableSearch;
use Yii;

use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * UserTableController implements the CRUD actions for UserTable model.
 */
class UserTableController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all UserTable models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserTableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserTable model.
     * @param string $id
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
     * Creates a new UserTable model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<p>Angebot/Auftrag</p>');$mpdf->SetFontSize(200,5);
        $mpdf->SetTitle('Angebot/Auftrag');
        $mpdf->Image('https://cloudstock.io/wp-content/uploads/2018/06/Cloudstock_Logo-1.png', 130, 0, 50, 40, 'png', '', true, false);
        $mpdf->Output();
        exit;
        
        
//         $model = new UserTable();

//         if ($model->load(Yii::$app->request->post()) && $model->save()) {
//             Yii::$app->session->setFlash('success', "Your message to display.");
//             return $this->redirect(['view', 'id' => $model->id]);
//         }

//         return $this->render('create', [
//             'model' => $model,
//         ]);
    }

    /**
     * Updates an existing UserTable model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
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
     * Deletes an existing UserTable model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
            Yii::$app->session->setFlash('success', "Deleted.");
        return $this->redirect(['index']);
    }

    /**
     * Finds the UserTable model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return UserTable the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserTable::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
