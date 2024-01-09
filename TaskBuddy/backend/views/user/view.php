<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $PerfilUtilizador->nome;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">


<?= DetailView::widget([
    'model' => $PerfilUtilizador,
    'attributes' => [
        [
            'label' => 'Email',
            'value' => $email,
        ],
        'genero',
        'morada',
        'codigopostal',
        'nif',
        'contacto',
        [
            'label' => 'Verificado',
            'value' => function ($model) {
                return $model->verificado == 1 ? 'Sim' : 'Não';
            },
        ],
    ],
]) ?>

   

    <p>
        <?= Html::a('Editar', ['update', 'id' => $PerfilUtilizador->idUtilizador, 'role' => $role], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Voltar', ['index', 'role' => $role], ['class' => 'btn btn-warning']) ?>
    </p>

</div>
