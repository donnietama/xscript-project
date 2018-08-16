<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $fillable = [];

    public function articles() {
        return $this->belongsTo(Article::class, 'id', 'categories_id');
    }
}
