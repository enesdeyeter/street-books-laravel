<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = "id";
    protected $table = "categories";

    //kategorilere ait kitaplar
    public function getAllCategoryBooks()
    {
        return $this->hasMany('App\Book','category_id','id');
    }

    //kategorilere ait kaç kitap var
    public function getCategoryCount()
    {
        return $this->hasMany('App\Book','category_id','id');
    }
}
