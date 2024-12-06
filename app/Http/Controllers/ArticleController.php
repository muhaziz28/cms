<?php

namespace App\Http\Controllers;

use App\Repositories\Contract\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        $data = $this->articleRepository->all();
        return response()->json($data);
        return view('dashboard', compact('data'));
    }
}
