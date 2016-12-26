<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "iyzico".
 *
 * @property integer $id
 * @property string $apikey
 * @property string $secret
 */
class Iyzico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iyzico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['apikey', 'secret'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'apikey' => 'API Anahtarı',
            'secret' => 'Güvenlik Anahtarı',
        ];
    }
}
