<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ArticleController::class)->group(function () {
        Route::get("/dashboard", "index")->name("dashboard");
        Route::get("/article/{id}", "edit")->name("article.edit");
        Route::put("/article/{id}", "update")->name("article.update");
        Route::get("/article", "add")->name("article.add");
        Route::post("/article", "store")->name("article.store");
    });
});

require __DIR__ . '/auth.php';
