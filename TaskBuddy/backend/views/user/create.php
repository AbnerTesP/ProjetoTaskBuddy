<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $model */

switch ($role) {
    case 'admin':
        $this->title = 'Criar um novo Administrador';
        break;
    case 'gestor':
        $this->title = 'Criar um novo Gestor';
        break;
}?>
<div class="user-create">


    <?= $this->render('_formCreate', [
        'model' => $model,
        'role' => $role
    ]) ?>

</div>
