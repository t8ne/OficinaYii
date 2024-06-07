<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veiculo".
 *
 * @property int $id
 * @property string $Matricula
 * @property string|null $Cor
 * @property int|null $Cliente_id
 * @property int|null $Modelo_id
 *
 * @property Cliente $cliente
 * @property Modelo $modelo
 * @property Pedido[] $pedidos
 */
class Veiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Matricula'], 'required'],
            [['Cliente_id', 'Modelo_id'], 'integer'],
            [['Matricula', 'Cor'], 'string', 'max' => 50],
            [['Cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['Cliente_id' => 'id']],
            [['Modelo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Modelo::class, 'targetAttribute' => ['Modelo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Matricula' => 'Matricula',
            'Cor' => 'Cor',
            'Cliente_id' => 'Cliente ID',
            'Modelo_id' => 'Modelo ID',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['id' => 'Cliente_id']);
    }

    /**
     * Gets query for [[Modelo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModelo()
    {
        return $this->hasOne(Modelo::class, ['id' => 'Modelo_id']);
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::class, ['Veiculo_id' => 'id']);
    }
}
