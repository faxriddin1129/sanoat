<?php

namespace backend\models;

class Productions extends \common\models\Productions
{

    public function rules()
    {
        return [

            ['name','required'],
            [['name'],'string','max'=>255],

            ['description','required'],
            ['description','string'],

            ['status','required'],
            ['status','integer'],

            ['created_at','safe'],

            ['user_id','integer'],

            [['img_1'], 'file','extensions'=>'jpg,jpeg,png','maxSize' => 1024*2024*2],
            [['img_2'], 'file','extensions'=>'jpg,jpeg,png','maxSize' => 1024*2024*2],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'name'=>'Maxsulot Nomi',
            'user_id'=>'Ism Familiya',
            'price'=>'Maxsulot Narxi',
            'img_1'=>'Rasm',
            'img_2'=>'Rasm',
            'description'=>'Tavsifi',
            'companyName'=>'Korxona Nomi',
            'category_id'=>'Kategoriyasi',
            'created_at'=>'Tizimga kiritilgan vaqt',
        ];
    }

}