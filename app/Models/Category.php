<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ["name"];

    public function articleCategories(): HasMany
    {
        return $this->hasMany(ArticleCategory::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_categories', 'category_id', 'article_id');
    }
}
