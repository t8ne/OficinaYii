<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Veiculo;

class VeiculoSearch extends Veiculo
{
    public function rules()
    {
        return [
            [['id', 'Cliente_id', 'Modelo_id'], 'integer'],
            [['Matricula', 'Cor'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Veiculo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Cliente_id' => $this->Cliente_id,
            'Modelo_id' => $this->Modelo_id,
        ]);

        $query->andFilterWhere(['like', 'Matricula', $this->Matricula])
            ->andFilterWhere(['like', 'Cor', $this->Cor]);

        return $dataProvider;
    }
}
