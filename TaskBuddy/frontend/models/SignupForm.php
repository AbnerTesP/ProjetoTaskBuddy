<?php

namespace frontend\models;

use common\models\Perfilutilizador;
use Yii;
use yii\base\Model;
use common\models\User;
use yii\base\Exception;


/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public $nome;  // use lowercase
    public $morada;  // use lowercase
    public $codigopostal;  // use lowercase
    public $genero;  // use lowercase
    public $nif;  // use lowercase
    public $contacto;  // use lowercase
    public $verificado;  // use lowercase
    public $idUtilizador;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            [['nome', 'morada', 'codigopostal', 'genero', 'contacto', 'nif', 'idUtilizador'], 'required'],
            [['contacto', 'nif', 'verificado', 'idUtilizador'], 'integer'],
            [['nome', 'morada'], 'string', 'max' => 255],
            [['codigopostal'], 'string', 'max' => 8],
            [['genero'], 'string', 'max' => 10],

        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup($role)
    {
        $transaction = Yii::$app->db->beginTransaction();

        try {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->generateEmailVerificationToken();
            $user->status = 10;
            $user->save();

            $perfilUtilizador = new Perfilutilizador();
            $perfilUtilizador->nome = $this->nome;
            $perfilUtilizador->morada = $this->morada;
            $perfilUtilizador->codigopostal = $this->codigopostal;
            $perfilUtilizador->genero = $this->genero;
            $perfilUtilizador->contacto = $this->contacto;
            $perfilUtilizador->nif = $this->nif;
            $perfilUtilizador->verificado = 0;
            $perfilUtilizador->idUtilizador = $user->id;

            $perfilUtilizador->save();

            $auth = Yii::$app->authManager;
            $auth->assign($auth->getRole($role), $user->id);

            $transaction->commit();
            return true;
        } catch (\Exception $e) {
            $transaction->rollBack();

            if ($e instanceof \yii\db\IntegrityException) {
                // Adjust the error message for NIF duplication
                $this->addError('username', 'Este Username já esta a ser usado.');
                $this->addError('email', 'Este email já esta a ser usado.');
                $this->addError('nif', 'Este NIF já está a ser usado.');
            }

            return false;
        }
    }




    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
