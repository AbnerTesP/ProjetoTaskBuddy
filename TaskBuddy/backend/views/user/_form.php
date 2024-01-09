<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput() ?>
    <?= $form->field($user, 'email')->textInput() ?>
    <?= $form->field($model, 'genero')->dropDownList(['masculino' => 'Masculino', 'feminino' => 'Feminino']) ?>
    <?= $form->field($model, 'morada')->textInput() ?>
    <?= $form->field($model, 'codigopostal')->textInput() ?>
    <?= $form->field($model, 'nif')->textInput() ?>
    <?= $form->field($model, 'contacto')->textInput() ?>
    <?= $form->field($model, 'verificado')->dropDownList(['1' => 'Sim', '0' => 'Não']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        <?=  Html::a('Cancelar', ['view', 'id' => $model->id, 'role' => $role], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
