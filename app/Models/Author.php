<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "name",
        "email",
    ];

    public function article(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id');
    }
}
