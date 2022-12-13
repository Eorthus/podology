<?php

namespace app\models\db;

/**
 * This is the model class for table "diseases".
 *
 * @property int         $id
 * @property string      $name
 * @property string      $description
 * @property string      $image
 * @property string|null $about
 * @property string|null $symptoms_arr
 * @property int|null    $doctor_id
 * @property string|null $treatment_method
 * @property int|null    $price
 */
class Diseases extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diseases';
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
                [
                    'description',
                    'about',
                    'symptoms_arr',
                    'treatment_method',
                ],
                'string',
            ],
            [
                [
                    'doctor_id',
                    'price',
                ],
                'integer',
            ],
            [
                [
                    'name',
                ],
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
            'id'               => 'ID',
            'name'             => 'Название',
            'description'      => 'Описание',
            'image'            => 'Картинка',
            'about'            => 'О заболевании',
            'symptoms_arr'     => 'Симптомы',
            'doctor_id'        => 'Доктор',
            'treatment_method' => 'Метод лечения',
            'price'            => 'Стоимость от',
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
