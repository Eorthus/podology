<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form of `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'type', 'show_arrival_price', 'change_arrival', 'demo', 'subscribe', 'acc_level', 'activity', 'mail_free'], 'integer'],
            [['email', 'username', 'second_name', 'family', 'password_hash', 'password_reset_token', 'auth_key', 'city', 'company_name', 'position', 'phone', 'my_cashboxes', 'my_warehouses', 'my_company', 'second_mail'], 'safe'],
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
        $query = User::find();

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'type' => $this->type,
            'show_arrival_price' => $this->show_arrival_price,
            'change_arrival' => $this->change_arrival,
            'demo' => $this->demo,
            'subscribe' => $this->subscribe,
            'acc_level' => $this->acc_level,
            'activity' => $this->activity,
            'mail_free' => $this->mail_free,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'second_name', $this->second_name])
            ->andFilterWhere(['like', 'family', $this->family])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'my_cashboxes', $this->my_cashboxes])
            ->andFilterWhere(['like', 'my_warehouses', $this->my_warehouses])
            ->andFilterWhere(['like', 'my_company', $this->my_company])
            ->andFilterWhere(['like', 'second_mail', $this->second_mail]);

        return $dataProvider;
    }
}
