<?php

namespace app\models\db;

/**
 * This is the model class for table "equipments".
 *
 * @property int    $id
 * @property string $name
 * @property string $image
 * @property string $description
 */
class Equipments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipments';
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
                    'description',
                ],
                'required',
            ],
            [
                ['description'],
                'string',
            ],
            [
                ['name'],
                'string',
                'max' => 255,
            ],
            [
                ['image'],
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
            'name'        => 'Наименование',
            'image'       => 'Картинка',
            'description' => 'Описание',
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
