<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yorum".
 *
 * @property integer $id
 * @property string $ad
 * @property string $sehir
 * @property string $yorum
 */
class Yorum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yorum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yorum'], 'string'],
            [['ad', 'sehir'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad Soyad',
            'sehir' => 'Şehir',
            'yorum' => 'Yorum',
        ];
    }
}
