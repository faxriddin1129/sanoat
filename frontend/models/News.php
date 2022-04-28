<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $news_date
 * @property int $status
 * @property string $created_at
 * @property string|null $img
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['news_date', 'created_at'], 'safe'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['img'], 'file' , 'extensions'=>'jpg , jpeg , png' , 'maxSize'=> 1024 * 1024 * 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlovha',
            'description' => 'Tavsif',
            'news_date' => 'Yangilik vaqti',
            'status' => 'Xolat',
            'created_at' => 'Created At',
            'img' => 'Rasm',
        ];
    }

    public function csave(){
        $img1 = UploadedFile::getInstance($this, 'img');

        if($img1) {
            $file1 = $img1->baseName . 'fb.' . $img1->extension;
            $img1->saveAs(Yii::getAlias('@frontend/web/img/') . $file1);
            $this->img = $file1;
        }

        return $this->save()?true:false;
    }
}
