<?php

namespace frontend\controllers;

use common\models\Membros;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FamiliaController implements the CRUD actions for Membros model.
 */
class FamiliaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Membros models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Membros::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idMembro' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Membros model.
     * @param int $idMembro Id Membro
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idMembro)
    {
        return $this->render('view', [
            'model' => $this->findModel($idMembro),
        ]);
    }

    /**
     * Creates a new Membros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Membros();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idMembro' => $model->idMembro]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Membros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idMembro Id Membro
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idMembro)
    {
        $model = $this->findModel($idMembro);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idMembro' => $model->idMembro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Membros model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idMembro Id Membro
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idMembro)
    {
        $this->findModel($idMembro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Membros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idMembro Id Membro
     * @return Membros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idMembro)
    {
        if (($model = Membros::findOne(['idMembro' => $idMembro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
