<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','category_id', 'user_id', 'author', 'description', 'imgName', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
