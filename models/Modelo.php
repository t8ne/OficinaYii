<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modelo".
 *
 * @property int $id
 * @property string $Marca
 * @property int|null $Ano
 *
 * @property Veiculo[] $veiculos
 */
class Modelo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modelo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Marca'], 'required'],
            [['Ano'], 'integer'],
            [['Marca'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Marca' => 'Marca',
            'Ano' => 'Ano',
        ];
    }

    /**
     * Gets query for [[Veiculos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculos()
    {
        return $this->hasMany(Veiculo::class, ['Modelo_id' => 'id']);
    }
}
