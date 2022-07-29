<?php

namespace frontend\resource;

use frontend\resource\Comment;

class Post extends \common\models\Post
{

    public function extraFields()
    {
        return ['comments', 'createdBy'];
    }

    public function getComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
    }
}