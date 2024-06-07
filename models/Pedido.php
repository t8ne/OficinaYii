<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property int $id
 * @property string|null $Estado
 * @property float|null $PrecoMaoObra
 * @property string|null $Descricao
 * @property float|null $PrecoTotal
 * @property int|null $Veiculo_id
 *
 * @property Comprapecas[] $comprapecas
 * @property Reparacao[] $reparacaos
 * @property Veiculo $veiculo
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PrecoMaoObra', 'PrecoTotal'], 'number'],
            [['Veiculo_id'], 'integer'],
            [['Estado'], 'string', 'max' => 100],
            [['Descricao'], 'string', 'max' => 255],
            [['Veiculo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Veiculo::class, 'targetAttribute' => ['Veiculo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Estado' => 'Estado',
            'PrecoMaoObra' => 'Preco Mao Obra',
            'Descricao' => 'Descricao',
            'PrecoTotal' => 'Preco Total',
            'Veiculo_id' => 'Veiculo ID',
        ];
    }

    /**
     * Gets query for [[Comprapecas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComprapecas()
    {
        return $this->hasMany(Comprapecas::class, ['Pedido_id' => 'id']);
    }

    /**
     * Gets query for [[Reparacaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReparacaos()
    {
        return $this->hasMany(Reparacao::class, ['Pedido_id' => 'id']);
    }

    /**
     * Gets query for [[Veiculo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculo()
    {
        return $this->hasOne(Veiculo::class, ['id' => 'Veiculo_id']);
    }
}
