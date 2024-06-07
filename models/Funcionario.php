<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id
 * @property string $Nome
 * @property string|null $Cargo
 * @property string|null $DataContratacao
 * @property float|null $Salario
 *
 * @property Reparacao[] $reparacaos
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['DataContratacao'], 'safe'],
            [['Salario'], 'number'],
            [['Nome', 'Cargo'], 'string', 'max' => 100],
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
            'Cargo' => 'Cargo',
            'DataContratacao' => 'Data Contratacao',
            'Salario' => 'Salario',
        ];
    }

    /**
     * Gets query for [[Reparacaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReparacaos()
    {
        return $this->hasMany(Reparacao::class, ['Funcionario_id' => 'id']);
    }
}
