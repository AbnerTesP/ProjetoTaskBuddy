<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "encomendas".
 *
 * @property int $id
 * @property float|null $valorTotal
 * @property string|null $data
 * @property string|null $finalizada
 * @property int|null $idExpedicao
 * @property int|null $idPagamento
 * @property int $idUtilizador
 * @property string|null $estado
 */
class Encomendas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'encomendas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valorTotal'], 'number'],
            [['data'], 'safe'],
            [['idExpedicao', 'idPagamento', 'idUtilizador'], 'integer'],
            [['idUtilizador'], 'required'],
            [['finalizada'], 'string', 'max' => 3],
            [['estado'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'valorTotal' => 'Valor Total',
            'data' => 'Data',
            'finalizada' => 'Finalizada',
            'idExpedicao' => 'Id Expedicao',
            'idPagamento' => 'Id Pagamento',
            'idUtilizador' => 'Id Utilizador',
            'estado' => 'Estado',
        ];
    }
}
