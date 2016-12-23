<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $article_id
 * @property integer $userid
 * @property string $ctime
 * @property string $tags
 * @property string $person_category
 * @property string $article_category
 * @property string $title
 * @property string $content
 * @property integer $status
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_yii2advanced');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'status'], 'integer'],
            [['ctime'], 'safe'],
            [['content'], 'string'],
            [['tags', 'person_category', 'article_category', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => '文章编号，自增主键',
            'userid' => '发表用户id',
            'ctime' => '更新时间戳',
            'tags' => '用户标签，json数组',
            'person_category' => '个人分类',
            'article_category' => '文章分类',
            'title' => '文章标题',
            'content' => '文章正文内容',
            'status' => '文章状态，0-草稿，1-发布，10-删除',
        ];
    }
}
