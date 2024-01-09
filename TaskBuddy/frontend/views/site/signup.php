<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
?>
<div class="site-signup container pt-3">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= common\widgets\Alert::widget()?>

    <p>Por favor preencha os seguintes campos:</p>

    <div class="row">
        <div class="">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>

                <br><h3>Dados Pessoais:</h3>

                <?= $form->field($model, 'nome')->textInput() ?>
                <?= $form->field($model, 'genero')->dropDownList(['masculino' => 'Masculino', 'feminino' => 'Feminino']) ?>
                <?= $form->field($model, 'morada')->textInput() ?>
                <?= $form->field($model, 'codigopostal')->textInput() ?>
                <?= $form->field($model, 'contacto')->textInput() ?>
                <?= $form->field($model, 'nif')->Input('number') ?>


                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
