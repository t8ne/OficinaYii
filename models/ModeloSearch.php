<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Modelo;

class ModeloSearch extends Modelo
{
    public function rules()
    {
        return [
            [['id', 'Ano'], 'integer'],
            [['Marca'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Modelo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Ano' => $this->Ano,
        ]);

        $query->andFilterWhere(['like', 'Marca', $this->Marca]);

        return $dataProvider;
    }
}
