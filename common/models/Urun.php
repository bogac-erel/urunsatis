<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "urun".
 *
 * @property integer $id
 * @property string $adi
 * @property string $aciklama
 * @property double $tekfiyat
 * @property double $ikifiyat
 * @property double $ucfiyat
 * @property double $kargo
 */
class Urun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aciklama','nasil'], 'string'],
            [['tekfiyat', 'ikifiyat', 'ucfiyat', 'kargo'], 'number'],
            [['adi','video'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adi' => 'Ürün Adı',
            'aciklama' => 'Ürün Açıklaması',
            'video' => 'Video URL',
            'nasil' => 'Nasıl Kullanılır?',
            'tekfiyat' => 'Tek Ürün Fiyatı',
            'ikifiyat' => 'İki Ürün Fiyatı',
            'ucfiyat' => 'Üç Ürün Fiyatı',
            'kargo' => 'Kargo Ücreti',
        ];
    }
}
