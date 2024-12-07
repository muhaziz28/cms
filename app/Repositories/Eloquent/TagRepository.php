<?php

namespace App\Repositories\Eloquent;

use App\Models\Tag;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\TagRepositoryInterface;

class TagRepository extends BaseRepository implements TagRepositoryInterface
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }
}
