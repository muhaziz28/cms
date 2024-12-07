<?php

namespace App\Repositories\Eloquent;

use App\Models\Author;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\AuthorRepositoryInterface;

class AuthorRepository extends BaseRepository implements AuthorRepositoryInterface
{
    public function __construct(Author $model)
    {
        parent::__construct($model);
    }
}
