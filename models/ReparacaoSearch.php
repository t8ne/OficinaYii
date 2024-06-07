<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reparacao;

class ReparacaoSearch extends Reparacao
{
    public function rules()
    {
        return [
            [['id', 'Pedido_id', 'Funcionario_id'], 'integer'],
            [['DataReparacao', 'HoraReparacao', 'Duracao'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Reparacao::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Pedido_id' => $this->Pedido_id,
            'Funcionario_id' => $this->Funcionario_id,
        ]);

        $query->andFilterWhere(['like', 'DataReparacao', $this->DataReparacao])
            ->andFilterWhere(['like', 'HoraReparacao', $this->HoraReparacao])
            ->andFilterWhere(['like', 'Duracao', $this->Duracao]);

        return $dataProvider;
    }
}
