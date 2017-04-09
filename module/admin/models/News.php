<?php

namespace app\module\admin\models;

use Yii;
use yii\web\UploadedFile;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property string $describing
 * @property string $date
 * @property string $description
 * @property string $picture
 */
class News extends ActiveRecord
{
    /**
     * @inheritdoc
     */
	// public $file;

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias', 'describing', 'date', 'description', 'image'], 'safe'],
            //[['date'], 'safe'],
            [['name', 'alias', 'describing'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 2000000],
			//[['file'], 'file'],
			
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Назва новини',
            'alias' => 'Автор',
            'describing' => 'Опис',
            'date' => 'Дата',
            'description' => 'Повний опис',
            //'file' => 'Добавити зображення',
        ];
    }
}
