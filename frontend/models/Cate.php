<?php

namespace frontend\models;

class Cate extends \yii\db\ActiveRecord
{

    public $cate_id;

    public static function tableName()
    {
        return '{{%cate}}';
    }

    public function rules()
    {
        return [

            ['id','integer'],
            ['category_id','integer'],
            ['cate_id','integer'],
            ['name','string']
        ];
    }

}