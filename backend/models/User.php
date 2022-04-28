<?php

namespace backend\models;

class User extends \common\models\User
{

    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'username'=>'Foydalanuvchi Nomi',
            'fullName'=>'Ism Familiya',
            'brithday'=>'Tug`ilgan yili',
            'jins'=>'Jinsi',
            'email'=>'Email',
            'companyType'=>'Korxona Turi',
            'companyName'=>'Korxona Nomi',
            'companyHistory'=>'Korxona Foaliyati Davri Yilda',
            'company_about'=>'Korxana xaqida qisqacha',
        ];
    }

}