<?php

namespace app\models\db;

/**
 * This is the model class for table "categories".
 *
 * @property int         $id
 * @property int|null    $parent_id
 * @property string      $title
 * @property string|null $images
 * @property string|null $description
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                ['parent_id'],
                'integer',
            ],
            [
                ['title'],
                'required',
            ],
            [
                [
                    'title',
                    'description',
                ],
                'string',
                'max' => 255,
            ],
            [
                ['images',],
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
            'id'          => 'ID',
            'parent_id'   => 'Родительская категория',
            'title'       => 'Название',
            'images'      => 'Картинка',
            'description' => 'Описание',
        ];
    }

    /**
     * @return false|string
     */
    public function upload()
    {
        if (isset($this->images)) {
            $rand         = rand(10000, 999999);
            $new_img_name = md5($this->images->baseName . $rand);
            $dir          = "uploads";

            $full_path = "{$dir}/{$new_img_name}.{$this->images->extension}";
            $this->images->saveAs($full_path);

            return $full_path;
        }
    }

    /**
     * @param $id
     *
     * @return mixed|null
     */
    public static function getNameById($id)
    {
        return self::find()->where(['id' => $id])->one()->title;
    }
}
