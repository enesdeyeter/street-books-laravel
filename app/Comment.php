<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'comments';

    public function getBookData()
    {
        //return 'lorem ipsum2';
        return $this->hasOne('App\Book','id','commentable_id');
    }
}
