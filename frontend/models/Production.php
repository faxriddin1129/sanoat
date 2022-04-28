<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

class Production extends \common\models\Productions
{

    public function rules()
    {
        return [

            ['name','required'],
            [['name'],'string','max'=>255],

            ['description','required'],
            ['description','string'],

            ['status','safe'],

            ['price','required'],
            ['price','integer'],

            ['category_id','required'],
            ['category_id','integer'],

            ['cate_id','required'],
            ['cate_id','integer'],

            ['created_at','safe'],

            ['user_id','integer'],

            [['img_1'],'required','message'=>'Kamida bitta rasm no`lishi shart!'],
            [['img_1'], 'file','extensions'=>'jpg,jpeg,png','maxSize' => 1024*2024*2],

            [['img_2'], 'file','extensions'=>'jpg,jpeg,png','maxSize' => 1024*2024*2],

        ];
    }

    public function csave(){
        $img1 = UploadedFile::getInstance($this, 'img_1');
        $img2 = UploadedFile::getInstance($this, 'img_2');

        if($img1) {
            $file1 = $img1->baseName . '.' . $img1->extension;
            $img1->saveAs(Yii::getAlias('@frontend/web/img/') . $file1);
            $this->img_1 = $file1;
        }

        if($img2) {
            $file2 = $img2->baseName . '.' . $img2->extension;
            $img2->saveAs(Yii::getAlias('@frontend/web/img/') . $file2);
            $this->img_2 = $file2;
        }

        return $this->save()?true:false;
    }

}