<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $title
 * @property string $link
 * @property string $keywords
 * @property string $descr
 * @property string $content
 * @property string $h1
 * @property integer $parent_id
 * @property string $preview
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'link', 'keywords', 'descr', 'content', 'h1', 'preview'], 'required'],
            [['descr', 'content'], 'string'],
            [['parent_id'], 'integer'],
            [['title', 'link', 'keywords', 'h1', 'preview'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'link' => 'Link',
            'keywords' => 'Keywords',
            'descr' => 'Descr',
            'content' => 'Content',
            'h1' => 'H1',
            'parent_id' => 'Parent ID',
            'preview' => 'Preview',
        ];
    }
    public static function getMenu()
    {
        $items = [];
        $models = Pages::find()->all();
        foreach($models as $model) {
            $items[] = ['label' => $model->title, 
                        'url' => $model->link];
        }
        return $items;
    }
    public static function getContent()
    {
        $url = $_SERVER['REQUEST_URI'];
        $content = Pages::find()
            ->where(['link' => $url])
            ->one();
        return $content;
    }
}
