<?php

use common\models\Perfilutilizador;
use common\models\user;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

switch ($role) {
    case 'admin':
        $this->title = 'Administradores';
        $btnText = 'administrador';
        break;
    case 'gestor':
        $this->title = 'Gestores';
        $btnText = 'gestor';
        break;
    default:
        $this->title = 'Clientes';
        $btnText = 'cliente';
} ?>
<div class="user-index">

    <p>
        <?php if ($role != 'client') { ?>
            <?= Html::a('Criar um novo ' . $btnText, ['create', 'role' => $role], ['class' => 'btn btn-success']) ?>
        <?php } ?>
    </p>



    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <th>
                        <h3>Id</h3>
                    </th>
                    <th>
                        <h3>Username</h3>
                    </th>
                    <th>
                        <h3>Email</h3>
                    </th>
                    <th>
                        <h3>Opcoes</h3>
                    </th>
                </thead>
                <tbody>


                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user->id ?? 'N/A' ?></td>
                            <td><?= $user->username ?? 'N/A' ?></td>
                            <td><?= $user->email ?? 'N/A' ?></td>
                            <td>
                                <?php if ($user !== null) { ?>
                                    <a href="<?= Url::to(['view', 'id' => $user->id, 'role' => $role]) ?>" class="btn btn-info">Ver Detalhes</a>
                                    <?php if ($user->status == 10) { ?>
                                        <a href="<?= Url::to(['disable', 'id' => $user->id, 'role' => $role]) ?>" class="btn btn-danger">Desativar</a>
                                    <?php } else { ?>
                                        <a href="<?= Url::to(['reactivate', 'id' => $user->id, 'role' => $role]) ?>" class="btn btn-danger">Reativar</a>
                                    <?php } ?>
                                <?php } else { ?>
                                    <span>User not found</span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


</div>