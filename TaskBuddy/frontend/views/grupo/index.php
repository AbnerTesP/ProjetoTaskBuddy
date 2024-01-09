<?php

use common\models\Grupo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Grupos';
?>
<div class="grupo-index container pt-5">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Grupo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <h1>Pagina ainda em Progresso</h1>
</div>
