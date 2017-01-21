<?php
namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $foto;

    public function rules()
    {
        return [
            [['foto'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            //var_dump($this->foto);die();
            $this->foto->saveAs('/frontend/web/img/' . $this->foto->baseName . '.' . $this->foto->extension);
            return true;
        } else {
            return false;
        }
    }
}