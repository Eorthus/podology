<?php

namespace app\models\db;

/**
 * This is the model class for table "doctors".
 *
 * @property int         $id
 * @property string      $name
 * @property string      $image
 * @property string      $small_description
 * @property string|null $description
 * @property string|null $experience
 * @property string|null $specialization
 */
class Doctors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctors';
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
                    'small_description',
                ],
                'required',
            ],
            [
                [
                    'small_description',
                    'description',
                    'specialization',
                ],
                'string',
            ],
            [
                [
                    'name',
                    'experience',
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
            'id'                => 'ID',
            'name'              => 'ФИО Доктора',
            'image'             => 'Фото',
            'small_description' => 'Краткое описание',
            'description'       => 'Полное описание',
            'experience'        => 'Опыт (стаж)',
            'specialization'    => 'Специализация',
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
