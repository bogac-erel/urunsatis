<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property integer $kapida
 * @property integer $banka
 * @property integer $iyzico
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['foto'],'file'],
            [['kapida', 'banka', 'iyzico'], 'required'],
            [['kapida', 'banka', 'iyzico'], 'integer'],
            [['name', 'title','telefon','keyword','foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Site Adı',
            'title' => 'Site Başlığı',
            'description' => 'Site Açıklaması',
            'keyword' => 'Anahtar Kelimeler',
            'foto' => 'Anasayfa Fotoğrafı',
            'telefon' => 'Telefon Numarası',
            'kapida' => 'Kapıda Ödeme',
            'banka' => 'Banka Havalesi',
            'iyzico' => 'iyzico',
        ];
    }
}
