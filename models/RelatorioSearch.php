<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Relatorio;

/**
 * RelatorioSearch represents the model behind the search form of `app\models\Relatorio`.
 */
class RelatorioSearch extends Relatorio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'VENDA_ID'], 'integer'],
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
        $query = Relatorio::find();

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
            'VENDA_ID' => $this->VENDA_ID,
        ]);

        return $dataProvider;
    }
}
