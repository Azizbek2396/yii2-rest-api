<?php

namespace frontend\resource;

use frontend\resource\Post;

class Comment extends \common\models\Comment
{
    public function extraFields()
    {
        return ['post_id', 'createdBy'];
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PostQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }
}