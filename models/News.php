<?php

namespace app\models;

use Yii;
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
 * @property string $image
 */
class News extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    public function actionView() {
        return$this->render('view', [
            'model'=>$this->findModel($id),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias', 'describing', 'date', 'description', 'image'], 'required'],
            [['date'], 'safe'],
            [['name', 'alias', 'describing'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'alias' => 'Alias',
            'describing' => 'Describing',
            'date' => 'Date',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
?>