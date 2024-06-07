<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comprapecas;

class ComprapecasSearch extends Comprapecas
{
    public function rules()
    {
        return [
            [['id', 'Quantidade', 'Pedido_id', 'Pecas_id', 'Fornecedor_id'], 'integer'],
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
        $query = Comprapecas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Quantidade' => $this->Quantidade,
            'Preco' => $this->Preco,
            'Pedido_id' => $this->Pedido_id,
            'Pecas_id' => $this->Pecas_id,
            'Fornecedor_id' => $this->Fornecedor_id,
        ]);

        $query->andFilterWhere(['like', 'Descricao', $this->Descricao]);

        return $dataProvider;
    }
}
