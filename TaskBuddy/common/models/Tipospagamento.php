<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tipospagamento".
 *
 * @property int $id
 * @property string $designacao
 * @property int|null $status
 */
class Tipospagamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipospagamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designacao'], 'required'],
            [['status'], 'integer'],
            [['designacao'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'designacao' => 'Designacao',
            'status' => 'Status',
        ];
    }
}
