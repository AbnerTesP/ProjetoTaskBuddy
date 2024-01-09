<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $id
 * @property string|null $imagem
 * @property string $designacao
 * @property float $valor
 * @property int $stock
 * @property int $idCategoria
 * @property int $status
 * @property string $descricao
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designacao', 'valor', 'stock', 'idCategoria', 'descricao'], 'required'],
            [['valor'], 'number'],
            [['stock', 'idCategoria', 'status'], 'integer'],
            [['imagem', 'designacao', 'descricao'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagem' => 'Imagem',
            'designacao' => 'Designacao',
            'valor' => 'Valor',
            'stock' => 'Stock',
            'idCategoria' => 'Id Categoria',
            'status' => 'Status',
            'descricao' => 'Descricao',
        ];
    }
}
