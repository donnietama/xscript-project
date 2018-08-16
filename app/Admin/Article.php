<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $fillable = [];

    public function categories() {
        return $this->hasMany(Category::class, 'id', 'category_id')->select('id', 'name', 'desc');
    }
}
