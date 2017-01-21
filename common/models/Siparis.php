<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siparis".
 *
 * @property integer $id
 * @property string $adsoyad
 * @property string $odemetipi
 * @property string $urun
 * @property double $fiyat
 * @property string $email
 * @property string $telefon
 * @property string $sehir
 * @property string $ilce
 * @property string $adres
 * @property string $ozel
 */
class Siparis extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siparis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urun', 'fiyat','adsoyad','email','telefon','adres'], 'required'],
            [['fiyat'], 'number'],
            [['adres', 'ozel'], 'string'],
            [['durum'],'string','max' => 64],
            [['adsoyad', 'odemetipi', 'urun', 'email', 'telefon', 'sehir', 'ilce'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Sipariş No',
            'adsoyad' => 'Ad Soyad',
            'odemetipi' => 'Ödeme Tipi',
            'urun' => 'Urun',
            'fiyat' => 'Fiyat',
            'email' => 'E-posta',
            'telefon' => 'Telefon',
            'sehir' => 'Şehir',
            'ilce' => 'İlçe',
            'adres' => 'Adres',
            'ozel' => 'Özel Not',
            'durum' => 'Sipariş Durumu',
        ];
    }
}
