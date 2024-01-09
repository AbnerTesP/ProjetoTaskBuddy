<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\user $model */

$this->title = 'Editar detalhes de: ' . $model->nome;
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'role' => $role,
    ]) ?>

</div>
