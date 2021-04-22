<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'books';

    public function getCategoryName()
    {
        return $this->hasOne('App\Category','id','category_id');
    }

    public function getUserName()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
