<?php

namespace Database\Seeders;

use App\Models\ArticleTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articleTags = [
            ["article_id" => 1, "tag_id" => 1],
            ["article_id" => 1, "tag_id" => 2],
            ["article_id" => 2, "tag_id" => 2],
            ["article_id" => 3, "tag_id" => 3],
        ];

        foreach ($articleTags as $articleTag) {
            ArticleTag::create($articleTag);
        }
    }
}
