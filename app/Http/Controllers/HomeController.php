<?php

namespace App\Http\Controllers;

use App\Repositories\Contract\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private  $articleRepository;
    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        $articles = $this->articleRepository->all();

        return view('welcome', compact('articles'));
    }
}
