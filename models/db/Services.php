<?php

namespace app\models\db;

/**
 * This is the model class for table "services".
 *
 * @property int      $id
 * @property string   $name
 * @property string   $image
 * @property int|null $price
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'name',
                ],
                'required',
            ],
            [
                ['price'],
                'integer',
            ],
            [
                [
                    'name',
                ],
                'string',
                'max' => 255,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'    => 'ID',
            'name'  => 'Название',
            'image' => 'Картинка',
            'price' => 'Стоимость от',
        ];
    }

    /**
     * @return false|string
     */
    public function upload()
    {
        if (isset($this->image)) {
            $rand         = rand(10000, 999999);
            $new_img_name = md5($this->image->baseName . $rand);
            $dir          = "uploads";

            $full_path = "{$dir}/{$new_img_name}.{$this->image->extension}";
            $this->image->saveAs($full_path);

            return $full_path;
        }
    }
}
