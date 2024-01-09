<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "perfilutilizador".
 *
 * @property int $id
 * @property string $nome
 * @property string $morada
 * @property string $codigopostal
 * @property string $genero
 * @property int $contacto
 * @property int $nif
 * @property int $verificado
 * @property int $idUtilizador
 *
 * @property User $idUtilizador0
 * @property Membros[] $membros
 */
class Perfilutilizador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfilutilizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'morada', 'codigopostal', 'genero', 'contacto', 'nif', 'idUtilizador'], 'required'],
            [['contacto', 'nif', 'verificado', 'idUtilizador'], 'integer'],
            [['nome', 'morada'], 'string', 'max' => 255],
            [['codigopostal'], 'string', 'max' => 8],
            [['genero'], 'string', 'max' => 10],
            [['nif'], 'unique'],
            [['idUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['idUtilizador' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'morada' => 'Morada',
            'codigopostal' => 'Codigopostal',
            'genero' => 'Genero',
            'contacto' => 'Contacto',
            'nif' => 'Nif',
            'verificado' => 'Verificado',
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
        return $this->hasOne(User::class, ['id' => 'idUtilizador']);
    }

    /**
     * Gets query for [[Membros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMembros()
    {
        return $this->hasMany(Membros::class, ['idUtilizador' => 'id']);
    }
}
