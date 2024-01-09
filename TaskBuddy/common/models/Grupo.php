<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property int $id
 * @property int $Nome
 * @property int $idUtilizador
 * @property int|null $idMembro
 *
 * @property Membro $idMembro0
 * @property Perfilutilizador $idUtilizador0
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'idUtilizador'], 'required'],
            [['Nome', 'idUtilizador', 'idMembro'], 'integer'],
            [['idMembro'], 'exist', 'skipOnError' => true, 'targetClass' => Membro::class, 'targetAttribute' => ['idMembro' => 'idMembro']],
            [['idUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Perfilutilizador::class, 'targetAttribute' => ['idUtilizador' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nome' => 'Nome',
            'idUtilizador' => 'Id Utilizador',
            'idMembro' => 'Id Membro',
        ];
    }

    /**
     * Gets query for [[IdMembro0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdMembro0()
    {
        return $this->hasOne(Membro::class, ['idMembro' => 'idMembro']);
    }

    /**
     * Gets query for [[IdUtilizador0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUtilizador0()
    {
        return $this->hasOne(Perfilutilizador::class, ['id' => 'idUtilizador']);
    }
}
