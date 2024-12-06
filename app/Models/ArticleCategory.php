<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "article_id",
        "category_id",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
