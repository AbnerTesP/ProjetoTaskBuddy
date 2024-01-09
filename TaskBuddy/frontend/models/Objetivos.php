<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objetivos".
 *
 * @property int $idObjetivos
 * @property string $Descrição
 * @property int $Pontos
 */
class Objetivos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'objetivos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descrição', 'Pontos'], 'required'],
            [['Pontos'], 'integer'],
            [['Descrição'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idObjetivos' => 'Id Objetivos',
            'Descrição' => 'Descrição',
            'Pontos' => 'Pontos',
        ];
    }
}
