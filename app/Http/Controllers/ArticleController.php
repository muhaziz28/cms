<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Repositories\Contract\ArticleRepositoryInterface;
use App\Repositories\Contract\AuthorRepositoryInterface;
use App\Repositories\Contract\CategoryRepositoryInterface;
use App\Repositories\Contract\TagRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleRepository;
    protected $authorRepository;
    protected $tagRepository;
    protected $categoryRepository;

    public function __construct(
        ArticleRepositoryInterface $articleRepository,
        AuthorRepositoryInterface $authorRepository,
        TagRepositoryInterface $tagRepository,
        CategoryRepositoryInterface $categoryRepository,
    ) {
        $this->articleRepository = $articleRepository;
        $this->authorRepository = $authorRepository;
        $this->tagRepository = $tagRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data = $this->articleRepository->all();
        return view('dashboard', compact('data'));
    }


    public function edit($id)
    {
        $data = $this->articleRepository->find($id);
        if (!$data) return redirect()->back();

        $authors =  $this->authorRepository->all();
        $tags = $this->tagRepository->all();
        $categories = $this->categoryRepository->all();

        return view('article.edit', compact('data', 'authors', 'tags', 'categories'));
    }


    public function update(StoreArticleRequest $request, $id)
    {
        $data = $request->validated();
        $this->articleRepository->update($id, $data);
        return redirect()->route('dashboard')->with('success', 'Article updated successfully!');
    }

    public function add()
    {
        $authors =  $this->authorRepository->all();
        $tags = $this->tagRepository->all();
        $categories = $this->categoryRepository->all();

        return view('article.add', compact('authors', 'tags', 'categories'));
    }

    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();
        $this->articleRepository->create($data);
        return redirect()->route('dashboard')->with('success', 'Article updated successfully!');
    }
}
