<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "carrinho".
 *
 * @property int $idEncomenda
 * @property int $idProduto
 * @property int|null $quantidade
 * @property float|null $valorPago
 */
class Carrinho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrinho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idEncomenda', 'idProduto'], 'required'],
            [['idEncomenda', 'idProduto', 'quantidade'], 'integer'],
            [['valorPago'], 'number'],
            [['idEncomenda', 'idProduto'], 'unique', 'targetAttribute' => ['idEncomenda', 'idProduto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEncomenda' => 'Id Encomenda',
            'idProduto' => 'Id Produto',
            'quantidade' => 'Quantidade',
            'valorPago' => 'Valor Pago',
        ];
    }
}
