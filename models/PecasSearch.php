<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pecas;

class PecasSearch extends Pecas
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Descricao'], 'safe'],
            [['Preco'], 'number'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Pecas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Preco' => $this->Preco,
        ]);

        $query->andFilterWhere(['like', 'Descricao', $this->Descricao]);

        return $dataProvider;
    }
}
