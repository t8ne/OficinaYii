<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pecas".
 *
 * @property int $id
 * @property string|null $Descricao
 * @property float|null $Preco
 *
 * @property Comprapecas[] $comprapecas
 */
class Pecas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pecas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Preco'], 'number'],
            [['Descricao'], 'string', 'max' => 255],
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
            'Preco' => 'Preco',
        ];
    }

    /**
     * Gets query for [[Comprapecas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComprapecas()
    {
        return $this->hasMany(Comprapecas::class, ['Pecas_id' => 'id']);
    }
}
