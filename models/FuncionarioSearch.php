<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Funcionario;

class FuncionarioSearch extends Funcionario
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Nome', 'Cargo', 'DataContratacao'], 'safe'],
            [['Salario'], 'number'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Funcionario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Salario' => $this->Salario,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'Cargo', $this->Cargo])
            ->andFilterWhere(['like', 'DataContratacao', $this->DataContratacao]);

        return $dataProvider;
    }
}
