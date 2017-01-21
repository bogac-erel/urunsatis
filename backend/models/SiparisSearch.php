<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siparis;

/**
 * SiparisSearch represents the model behind the search form about `common\models\Siparis`.
 */
class SiparisSearch extends Siparis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['adsoyad', 'odemetipi', 'urun', 'email', 'telefon', 'sehir', 'ilce', 'adres', 'ozel'], 'safe'],
            [['fiyat'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Siparis::find();

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
            'id' => $this->id,
            'fiyat' => $this->fiyat,
        ]);

        $query->andFilterWhere(['like', 'adsoyad', $this->adsoyad])
            ->andFilterWhere(['like', 'odemetipi', $this->odemetipi])
            ->andFilterWhere(['like', 'urun', $this->urun])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'sehir', $this->sehir])
            ->andFilterWhere(['like', 'ilce', $this->ilce])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'ozel', $this->ozel]);

        return $dataProvider;
    }
}
