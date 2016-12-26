<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Urun;

/**
 * UrunSearch represents the model behind the search form about `common\models\Urun`.
 */
class UrunSearch extends Urun
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['adi', 'aciklama', 'video', 'nasil'], 'safe'],
            [['tekfiyat', 'ikifiyat', 'ucfiyat', 'kargo'], 'number'],
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
        $query = Urun::find();

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
            'tekfiyat' => $this->tekfiyat,
            'ikifiyat' => $this->ikifiyat,
            'ucfiyat' => $this->ucfiyat,
            'kargo' => $this->kargo,
        ]);

        $query->andFilterWhere(['like', 'adi', $this->adi])
            ->andFilterWhere(['like', 'aciklama', $this->aciklama])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'nasil', $this->nasil]);

        return $dataProvider;
    }
}
