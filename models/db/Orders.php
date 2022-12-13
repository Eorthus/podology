<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $datetime
 * @property int|null $sum
 * @property string $products_list
 * @property int|null $status
 * @property string|null $contact_person
 * @property string|null $contact_phone
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'datetime', 'sum', 'status'], 'integer'],
            [['products_list'], 'required'],
            [['products_list'], 'string'],
            [['contact_person', 'contact_phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'datetime' => 'Datetime',
            'sum' => 'Sum',
            'products_list' => 'Products List',
            'status' => 'Status',
            'contact_person' => 'Contact Person',
            'contact_phone' => 'Contact Phone',
        ];
    }
}
