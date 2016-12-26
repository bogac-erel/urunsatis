<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "resim".
 *
 * @property integer $id
 * @property string $anasayfa
 * @property string $sol
 * @property string $orta
 * @property string $sag
 * @property string $sagbanner
 */
class Resim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anasayfa', 'sol', 'orta', 'sag', 'sagbanner'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'anasayfa' => 'Anasayfa Resmi',
            'sol' => 'Sol Resim',
            'orta' => 'Orta Resim',
            'sag' => 'Sağ Resim',
            'sagbanner' => 'Anasayfa Sağ Banner',
        ];
    }
}
