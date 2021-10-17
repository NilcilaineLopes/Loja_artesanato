<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendas;

/**
 * VendasSearch represents the model behind the search form of `app\models\Vendas`.
 */
class VendasSearch extends Vendas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'QTD', 'USUARIO_ID', 'PRODUTOS_ID'], 'integer'],
            [['DATA_VENDA'], 'safe'],
            [['VALOR'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Vendas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'QTD' => $this->QTD,
            'DATA_VENDA' => $this->DATA_VENDA,
            'VALOR' => $this->VALOR,
            'USUARIO_ID' => $this->USUARIO_ID,
            'PRODUTOS_ID' => $this->PRODUTOS_ID,
        ]);

        return $dataProvider;
    }
}
