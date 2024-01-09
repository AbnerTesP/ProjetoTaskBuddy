<?php

namespace backend\controllers;

use backend\models\Auth_assignment;
use common\models\User;
use common\models\PerfilUtilizador;
use common\models\UserSearch;
use frontend\models\SignupForm;
use PHPUnit\Framework\Warning;
use Yii;
use yii\base\Model;
use yii\filters\AccessControl;
use yii\rbac\Role;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */

class UserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['admin'],
                        ],
                    ],
                ],
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
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex($role)
    {
        if (Yii::$app->user->can('verPerfilUtilizador')) {
           
            $authManager = Yii::$app->authManager;
            $clientRole = $authManager->getRole($role);

            $usersWithRole = $authManager->getUserIdsByRole($clientRole->name);
            $usersRole = PerfilUtilizador::find()->where(['idUtilizador' => $usersWithRole])->all();
            $users = [];
            foreach ($usersRole as $userRole) {
                $user = User::find()->where(['id' => $userRole->idUtilizador])->one();
                array_push($users, $user);
            }

            return $this->render('index', [
                'users' => $users,
                'role' => $role
            ]);
        } else {
            throw new ForbiddenHttpException('Você não tem permissão para realizar esta ação!');
        }
    }

    /**
     * Displays a single User model.
     * @param int $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $role)
    {
        if (Yii::$app->user->can('lerPerfilUtilizador')) {
            $PerfilUtilizador = PerfilUtilizador::find()->where(['idUtilizador' => $id])->one();
            $userEmail = User::findOne($id)->email;


            return $this->render('view', [
                'PerfilUtilizador' => $PerfilUtilizador,
                'role' => $role,
                'email' => $userEmail,
            ]);
        } else {
            throw new ForbiddenHttpException('Você não tem permissão para realizar esta ação!');
        }
    }

    public function actionViewclient($id)
    {
        if (Yii::$app->user->can('lerPerfilUtilizador')) {
            $PerfilUtilizador = PerfilUtilizador::findOne($id);
            $userEmail = User::findOne($PerfilUtilizador->idUtilizador)->email;


            return $this->render('viewclient', [
                'PerfilUtilizador' => $PerfilUtilizador,
                'email' => $userEmail,
            ]);
        } else {
            throw new ForbiddenHttpException('Você não tem permissão para realizar esta ação!');
        }
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($role)
    {
        if (Yii::$app->user->can('criarPerfilUtilizador')) {
            $model = new SignupForm();

            /* if ($this->request->isPost) {
                if (UploadedFile::getInstance($model, 'imageFile') != null) {
                    $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                    $model->upload();
                    $model->imagem = $model->imageFile->name;
                }
            } */

            if ($model->load(Yii::$app->request->post()) && $model->signup($role)) {
                return $this->redirect(['index', 'role' => $role]);
            }

            return $this->render('create', [
                'model' => $model,
                'role' => $role,
            ]);
        } else {
            throw new ForbiddenHttpException('Você não tem permissão para realizar esta ação!');
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $role)
    {
        if (Yii::$app->user->can('editarPerfilUtilizador')) {
            $model = PerfilUtilizador::find()->where(['idUtilizador' => $id])->one();

            $user = User::findOne($id);



            /* if ($this->request->isPost) {
                if (UploadedFile::getInstance($model, 'imageFile') != null) {
                    $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                    $model->upload();
                    $model->imagem = $model->imageFile->name;
                }
            }
 */
            if ($this->request->isPost && $model->load($this->request->post()) && $user->load($this->request->post())) {


                $model->save();
                $user->save();
                return $this->redirect(['view', 'id' => $user->id, 'role' => $role]);
            }


            return $this->render('update', [
                'model' => $model,
                'user' => $user,
                'role' => $role
            ]);
        } else {
            throw new ForbiddenHttpException('Você não tem permissão para realizar esta ação!');
        }
    }


    public function actionDisable($id, $role)
    {
        if (Yii::$app->user->can('desativarPerfilUtilizador')) {
            $model = $this->findModel($id);

            $model->status = 9;


            $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'role' => $role]);
        } else {
            throw new ForbiddenHttpException('Você não tem permissão para realizar esta ação!');
        }
    }

    public function actionReactivate($id, $role)
    {
        if (Yii::$app->user->can('reativarPerfilUtilizador')) {
            $model = $this->findModel($id);

            $model->status = 10;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'role' => $role]);
        } else {
            throw new ForbiddenHttpException('Você não tem permissão para realizar esta ação!');
        }
    }

    /*
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }*/

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
