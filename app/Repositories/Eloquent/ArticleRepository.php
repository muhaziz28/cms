<?php

namespace App\Repositories\Eloquent;

use App\Models\Article;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\ArticleRepositoryInterface;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
{
    public function __construct(Article $model)
    {
        parent::__construct($model);
    }

    public function all()
    {
        return $this->model->with(['author', 'articleTags.tag', 'articleCategory.category'])->get();
    }
}
