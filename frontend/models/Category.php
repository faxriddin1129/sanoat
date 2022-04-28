<?php

namespace frontend\models;

class Category extends \common\models\Category
{

    public function rules()
    {
        return [
          ['name','required'],
          ['name','string','max'=>255],
        ];
    }

}