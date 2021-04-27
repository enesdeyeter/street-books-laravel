<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use Codebyray\ReviewRateable\Contracts\ReviewRateable;
use Codebyray\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;

class Book extends Model implements ReviewRateable
{
    use ReviewRateableTrait, Commentable;

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
