<?php

namespace  yii\debug\Model;

use yii\base\Model;

class CommentForm extends Model
{
    public  $comment;

    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => [3,250]]
        ];
    }
}