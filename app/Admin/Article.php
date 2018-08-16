<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'excerpt', 'content', 'categories_id', 'published', 'keywords', 'meta_desc',
    ];

    public function categories() {
        return $this->hasMany(Category::class, 'id', 'category_id')->select('id', 'name', 'desc');
    }
}
