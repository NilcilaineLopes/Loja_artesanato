<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Endereco;

/**
 * EnderecoSearch represents the model behind the search form of `app\models\Endereco`.
 */
class EnderecoSearch extends Endereco
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'NUMERO', 'CEP', 'USUARIO_ID'], 'integer'],
            [['RUA', 'BAIRRO', 'ESTADO', 'CIDADE'], 'safe'],
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
        $query = Endereco::find();

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
            'NUMERO' => $this->NUMERO,
            'CEP' => $this->CEP,
            'USUARIO_ID' => $this->USUARIO_ID,
        ]);

        $query->andFilterWhere(['like', 'RUA', $this->RUA])
            ->andFilterWhere(['like', 'BAIRRO', $this->BAIRRO])
            ->andFilterWhere(['like', 'ESTADO', $this->ESTADO])
            ->andFilterWhere(['like', 'CIDADE', $this->CIDADE]);

        return $dataProvider;
    }
}
