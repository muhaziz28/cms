<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "title",
        "content",
        "author_id",
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function articleTags(): HasMany
    {
        return $this->hasMany(ArticleTag::class);
    }

    public function articleCategory(): HasOne
    {
        return $this->hasOne(ArticleCategory::class);
    }
}
