<?php

namespace App\Repositories\Eloquent;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\ArticleRepositoryInterface;
use Illuminate\Support\Facades\Log;

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

    public function find($id)
    {
        return $this->model->with(['author', 'articleTags.tag', 'articleCategory.category'])->find($id);
    }

    public function update($id, array $data)
    {
        $article = $this->find($id);

        $article->update([
            'title' => $data['title'],
            'content' => $data['content'],
            'author_id' => $data['author'],
        ]);

        if (isset($data['category'])) {
            $currentCategoryId = $article->articleCategory->category_id ?? null;
            if ($currentCategoryId != $data['category']) {
                $article->articleCategory()->delete();

                ArticleCategory::create([
                    'article_id' => $article->id,
                    'category_id' => $data['category'],
                ]);
            }
        }

        if (isset($data['tags'])) $article->tags()->sync($data['tags']);

        return $article;
    }

    public function create(array $data)
    {
        $article = $this->model->create([
            'title' => $data['title'],
            'content' => $data['content'],
            'author_id' => $data['author'],
        ]);

        if (isset($data['category'])) {
            ArticleCategory::create([
                'article_id' => $article->id,
                'category_id' => $data['category'],
            ]);
        }

        if (isset($data['tags'])) $article->tags()->sync($data['tags']);

        return $article;
    }
}
