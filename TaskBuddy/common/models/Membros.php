<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "membros".
 *
 * @property int $idMembro
 * @property string $Nome
 * @property string $Nome do utilizador
 * @property string $Palavra Passe
 * @property int $idUtilizador
 *
 * @property Perfilutilizador $idUtilizador0
 */
class Membros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'membros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Nome do utilizador', 'Palavra Passe', 'idUtilizador'], 'required'],
            [['idUtilizador'], 'integer'],
            [['Nome', 'Nome do utilizador'], 'string', 'max' => 90],
            [['Palavra Passe'], 'string', 'max' => 255],
            [['Nome do utilizador'], 'unique'],
            [['idUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Perfilutilizador::class, 'targetAttribute' => ['idUtilizador' => 'idPerfilUtilizador']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idMembro' => 'Id Membro',
            'Nome' => 'Nome',
            'Nome do utilizador' => 'Nome Do Utilizador',
            'Palavra Passe' => 'Palavra Passe',
            'idUtilizador' => 'Id Utilizador',
        ];
    }

    /**
     * Gets query for [[IdUtilizador0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUtilizador0()
    {
        return $this->hasOne(Perfilutilizador::class, ['idPerfilUtilizador' => 'idUtilizador']);
    }
}
