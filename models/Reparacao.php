<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reparacao".
 *
 * @property int $id
 * @property string|null $DataReparacao
 * @property string|null $HoraReparacao
 * @property string|null $Duracao
 * @property int|null $Pedido_id
 * @property int|null $Funcionario_id
 *
 * @property Funcionario $funcionario
 * @property Pedido $pedido
 */
class Reparacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reparacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DataReparacao', 'HoraReparacao'], 'safe'],
            [['Pedido_id', 'Funcionario_id'], 'integer'],
            [['Duracao'], 'string', 'max' => 10],
            [['Pedido_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pedido::class, 'targetAttribute' => ['Pedido_id' => 'id']],
            [['Funcionario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::class, 'targetAttribute' => ['Funcionario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'DataReparacao' => 'Data Reparacao',
            'HoraReparacao' => 'Hora Reparacao',
            'Duracao' => 'Duracao',
            'Pedido_id' => 'Pedido ID',
            'Funcionario_id' => 'Funcionario ID',
        ];
    }

    /**
     * Gets query for [[Funcionario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionario()
    {
        return $this->hasOne(Funcionario::class, ['id' => 'Funcionario_id']);
    }

    /**
     * Gets query for [[Pedido]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedido()
    {
        return $this->hasOne(Pedido::class, ['id' => 'Pedido_id']);
    }
}
