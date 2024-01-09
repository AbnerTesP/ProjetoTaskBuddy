<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarefa".
 *
 * @property int $idTarefa
 * @property string $Descrição
 * @property string $Data
 * @property int|null $Recorrencia
 * @property int $Estado
 * @property string|null $Fotografia
 * @property int $Pontos
 * @property int $idMembro
 * @property int $idUtilizador
 */
class Tarefas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarefa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descrição', 'Data', 'Estado', 'Pontos', 'idMembro', 'idUtilizador'], 'required'],
            [['Data'], 'safe'],
            [['Recorrencia', 'Estado', 'Pontos', 'idMembro', 'idUtilizador'], 'integer'],
            [['Descrição', 'Fotografia'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTarefa' => 'Id Tarefa',
            'Descrição' => 'Descrição',
            'Data' => 'Data',
            'Recorrencia' => 'Recorrencia',
            'Estado' => 'Estado',
            'Fotografia' => 'Fotografia',
            'Pontos' => 'Pontos',
            'idMembro' => 'Id Membro',
            'idUtilizador' => 'Id Utilizador',
        ];
    }
}
