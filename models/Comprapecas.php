<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comprapecas".
 *
 * @property int $id
 * @property string|null $Descricao
 * @property int|null $Quantidade
 * @property float|null $Preco
 * @property int|null $Pedido_id
 * @property int|null $Pecas_id
 * @property int|null $Fornecedor_id
 *
 * @property Fornecedor $fornecedor
 * @property Pecas $pecas
 * @property Pedido $pedido
 */
class Comprapecas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comprapecas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quantidade', 'Pedido_id', 'Pecas_id', 'Fornecedor_id'], 'integer'],
            [['Preco'], 'number'],
            [['Descricao'], 'string', 'max' => 255],
            [['Pedido_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pedido::class, 'targetAttribute' => ['Pedido_id' => 'id']],
            [['Pecas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pecas::class, 'targetAttribute' => ['Pecas_id' => 'id']],
            [['Fornecedor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fornecedor::class, 'targetAttribute' => ['Fornecedor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Descricao' => 'Descricao',
            'Quantidade' => 'Quantidade',
            'Preco' => 'Preco',
            'Pedido_id' => 'Pedido ID',
            'Pecas_id' => 'Pecas ID',
            'Fornecedor_id' => 'Fornecedor ID',
        ];
    }

    /**
     * Gets query for [[Fornecedor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFornecedor()
    {
        return $this->hasOne(Fornecedor::class, ['id' => 'Fornecedor_id']);
    }

    /**
     * Gets query for [[Pecas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPecas()
    {
        return $this->hasOne(Pecas::class, ['id' => 'Pecas_id']);
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
