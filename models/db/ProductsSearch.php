<?php

namespace app\models\db;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\db\Products;

/**
 * ProductsSearch represents the model behind the search form of `app\models\db\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'company_id', 'category_id', 'parent_category', 'gab_a', 'gab_b', 'gab_c', 'expiration_date', 'price', 'price_1', 'price_2'], 'integer'],
            [['title', 'small_description', 'description', 'image', 'images_arr', 'country', 'manufacturer', 'vendor', 'packaging', 'packaging_fas', 'weight', 'date', 'num_tam_dec', 'acrticle', 'brand', 'vet_serf', 'image_2', 'image_3', 'image_4', 'link_to_video', 'address', 'delivery'], 'safe'],
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
        $query = Products::find();

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
            'user_id' => $this->user_id,
            'company_id' => $this->company_id,
            'category_id' => $this->category_id,
            'parent_category' => $this->parent_category,
            'gab_a' => $this->gab_a,
            'gab_b' => $this->gab_b,
            'gab_c' => $this->gab_c,
            'expiration_date' => $this->expiration_date,
            'price' => $this->price,
            'price_1' => $this->price_1,
            'price_2' => $this->price_2,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'small_description', $this->small_description])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'images_arr', $this->images_arr])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'vendor', $this->vendor])
            ->andFilterWhere(['like', 'packaging', $this->packaging])
            ->andFilterWhere(['like', 'packaging_fas', $this->packaging_fas])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'num_tam_dec', $this->num_tam_dec])
            ->andFilterWhere(['like', 'acrticle', $this->acrticle])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'vet_serf', $this->vet_serf])
            ->andFilterWhere(['like', 'image_2', $this->image_2])
            ->andFilterWhere(['like', 'image_3', $this->image_3])
            ->andFilterWhere(['like', 'image_4', $this->image_4])
            ->andFilterWhere(['like', 'link_to_video', $this->link_to_video])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'delivery', $this->delivery]);

        return $dataProvider;
    }
}
