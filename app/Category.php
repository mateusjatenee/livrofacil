<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function parentCategory()
    {
        return $this->belongsToMany(Category::class);
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class);
    }
}
