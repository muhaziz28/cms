<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articleCategories = [
            ["article_id" => 1, "category_id" => 1],
            ["article_id" => 2, "category_id" => 1],
            ["article_id" => 3, "category_id" => 2],
        ];

        foreach ($articleCategories as $articleCategory) {
            ArticleCategory::create($articleCategory);
        }
    }
}
