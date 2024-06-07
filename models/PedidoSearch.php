<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedido;

class PedidoSearch extends Pedido
{
    public function rules()
    {
        return [
            [['id', 'Veiculo_id'], 'integer'],
            [['Estado', 'Descricao'], 'safe'],
            [['PrecoMaoObra', 'PrecoTotal'], 'number'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Pedido::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'PrecoMaoObra' => $this->PrecoMaoObra,
            'PrecoTotal' => $this->PrecoTotal,
            'Veiculo_id' => $this->Veiculo_id,
        ]);

        $query->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'Descricao', $this->Descricao]);

        return $dataProvider;
    }
}
