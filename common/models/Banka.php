<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banka".
 *
 * @property integer $id
 * @property string $hesap
 */
class Banka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['hesap'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hesap' => 'Hesap Bilgileri',
        ];
    }
}
