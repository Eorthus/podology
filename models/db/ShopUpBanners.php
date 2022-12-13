<?php

namespace app\models\db;

/**
 * This is the model class for table "shop_up_banners".
 *
 * @property int      $id
 * @property string   $image
 * @property string   $title
 * @property string   $content
 * @property int|null $price
 */
class ShopUpBanners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop_up_banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'title',
                    'content',
                ],
                'required',
            ],
            [
                ['content'],
                'string',
            ],
            [
                [
                    'title',
                ],
                'string',
                'max' => 255,
            ],
            [
                ['price',],
                'integer',
            ],
            [
                ['image',],
                'file',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'      => 'ID',
            'image'   => 'Баннер (картинка)',
            'title'   => 'Заголовок',
            'content' => 'Текст описания',
            'price'   => 'Стоимость',
        ];
    }
}
