<?php

namespace klunker\pages\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $alias Уникальный идентификатор страницы, отображаемый в адресной стороке, как часть строки
 * @property string $title Заголовок страницы отображаемый в title
 * @property string $description Описание страницы для отображения в meta=description
 * @property string|null $keywords
 * @property string $h1 Наименование
 * @property string $content Содержимое
 * @property string|null $date_create Время создания
 * @property string|null $publish_at Время публикации или 0 если не опубликовано
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alias', 'title', 'description', 'h1', 'content'], 'required'],
            [['content'], 'string'],
            [['date_create', 'publish_at'], 'safe'],
            [['alias', 'description', 'keywords', 'h1'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'alias' => Yii::t('app', 'Alias'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'keywords' => Yii::t('app', 'Keywords'),
            'h1' => Yii::t('app', 'H1'),
            'content' => Yii::t('app', 'Content'),
            'date_create' => Yii::t('app', 'Date Create'),
            'publish_at' => Yii::t('app', 'Publish At'),
        ];
    }
}
