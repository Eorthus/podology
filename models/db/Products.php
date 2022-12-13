<?php

namespace app\models\db;

/**
 * This is the model class for table "products".
 *
 * @property int         $id
 * @property int|null    $user_id         Пользователь
 * @property int|null    $company_id      Компания
 * @property string      $title           Наименование
 * @property string|null $small_description
 * @property string|null $description     Описание
 * @property string|null $image           Изображение
 * @property string|null $images_arr      Массив изображений
 * @property string|null $country         Страна
 * @property string|null $manufacturer    Производитель
 * @property string|null $vendor          Поставщик
 * @property string|null $packaging       Упаковка
 * @property string|null $packaging_fas   Фасовка
 * @property string|null $weight          Вес
 * @property int|null    $category_id     Категория
 * @property int|null    $parent_category Родительская категория
 * @property string|null $date            Дата изготовления
 * @property string|null $num_tam_dec     Номер таможенной декларации
 * @property string|null $acrticle        Артикул
 * @property string|null $brand           Бренд
 * @property int|null    $gab_a           Габарит ширина
 * @property int|null    $gab_b           Габарит высота
 * @property int|null    $gab_c           Габарит глубина
 * @property string|null $vet_serf        Ветеринарный сертификат
 * @property string|null $image_2
 * @property string|null $image_3
 * @property string|null $image_4
 * @property int|null    $expiration_date Срок годности
 * @property string|null $link_to_video
 * @property string|null $address
 * @property string|null $delivery
 * @property int|null    $price
 * @property int|null    $price_1
 * @property int|null    $price_2
 * @property int         $count
 * @property int|null    $gift_id
 * @property int         $in_carousel
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'user_id',
                    'company_id',
                    'category_id',
                    'parent_category',
                    'gab_a',
                    'gab_b',
                    'gab_c',
                    'price',
                    'price_1',
                    'price_2',
                    'count',
                    'gift_id',
                    'in_carousel',
                ],
                'integer',
            ],
            [
                ['title'],
                'required',
            ],
            [
                [
                    'small_description',
                    'description',
                    'images_arr',
                    'expiration_date',
                ],
                'string',
            ],
            [
                [
                    'title',
                    'country',
                    'manufacturer',
                    'vendor',
                    'packaging',
                    'packaging_fas',
                    'weight',
                    'date',
                    'num_tam_dec',
                    'acrticle',
                    'brand',
                    'vet_serf',
                    'image_2',
                    'image_3',
                    'image_4',
                    'link_to_video',
                    'address',
                    'delivery',
                ],
                'string',
                'max' => 255,
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
            'id'                => 'ID',
            'user_id'           => 'Пользователь',
            'company_id'        => 'Компания',
            'title'             => 'Наименование',
            'small_description' => 'Краткое описание',
            'description'       => 'Полное описание',
            'image'             => 'Основное изображение',
            'images_arr'        => 'Массив изображений',
            'country'           => 'Страна',
            'manufacturer'      => 'Производитель',
            'vendor'            => 'Поставщик',
            'packaging'         => 'Упаковка',
            'packaging_fas'     => 'Фасовка',
            'weight'            => 'Вес',
            'category_id'       => 'Категория',
            'parent_category'   => 'Родительская категория',
            'date'              => 'Дата размещения',
            'num_tam_dec'       => 'Num Tam Dec',
            'acrticle'          => 'Артикул',
            'brand'             => 'Бренд',
            'gab_a'             => 'Габариты А',
            'gab_b'             => 'Габариты Б',
            'gab_c'             => 'Габариты В',
            'vet_serf'          => 'Сертификат',
            'image_2'           => 'Изображение 2',
            'image_3'           => 'Изображение 3',
            'image_4'           => 'Изображение 4',
            'expiration_date'   => 'Срок годности',
            'link_to_video'     => 'Ссылка на видео',
            'address'           => 'Адрес (склада)',
            'delivery'          => 'Доставка',
            'price'             => 'Розница',
            'price_1'           => 'Салон',
            'price_2'           => 'Опт',
            'count'             => 'Остаток на складе',
            'gift_id'           => 'Подарок',
            'in_carousel'       => 'Отображать в "Актуальные товары"',
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

    /**
     * @return false|string
     */
    public function upload2()
    {
        if (isset($this->image_2)) {
            $rand         = rand(10000, 999999);
            $new_img_name = md5($this->image_2->baseName . $rand);
            $dir          = "uploads";

            $full_path = "{$dir}/{$new_img_name}.{$this->image_2->extension}";
            $this->image_2->saveAs($full_path);

            return $full_path;
        }
    }

    /**
     * @return false|string
     */
    public function upload3()
    {
        if (isset($this->image_3)) {
            $rand         = rand(10000, 999999);
            $new_img_name = md5($this->image_3->baseName . $rand);
            $dir          = "uploads";

            $full_path = "{$dir}/{$new_img_name}.{$this->image_3->extension}";
            $this->image_3->saveAs($full_path);

            return $full_path;
        }
    }
}
